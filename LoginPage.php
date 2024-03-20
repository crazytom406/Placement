<?php
    @include 'config.php';
    if(ISSET($_POST['signup']))
    {
        //echo "Signup Form Submitted";
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $pass = md5($_POST['password']);
        $con_password=md5($_POST['con_password']);
        $user_type = $_POST['user_type'];
        if($pass!=$con_password)
        {
           echo "<script>alert('just check the password!');</script>";
        }
        else if($user_type==-1){
            echo "<script>alert('Just select the user type!');</script>";
        }
        else
        {
            $insert = "INSERT INTO user(name, email, password ,user_type) VALUES('$name' ,'$email' , ' $pass' , '$user_type')";
            mysqli_query($conn, $insert);
            echo "<script>alert('Account Created Succesfully!');
            window.location.href='LoginPage.php';</script>";
        }
    
       
    }

    if(ISSET($_POST['login']))
    {
        //echo "Login Form Submitted";
        // db query
        $hash_pass = md5($_POST['loginpassword']);
        $select = "SELECT * FROM user WHERE email='".$_POST['loginemail']."' and password =' ".$hash_pass."'";

        echo $select;
        
        $result = mysqli_query($conn, $select);
        print_r($result);
        if(mysqli_num_rows($result)> 0)
        {
            //Navigation based on User_type
            while($row=mysqli_fetch_assoc($result))
            {
                if($row['user_type']=='admin')
                {
                    header('location:Admindashboard.php');
                    break;
                } 
                else if($row['user_type']=='user')
                {
                    header('location:StudentHomePage.php');
                    break;
                }
                else if($row['user_type']=='company')
                {
                    header('location:ViewStudent.php');
                    break;
                }
                else{
                    echo"Check the category of usertype";
                }
            }
        }
        else
        {
            echo "<script>alert('User doesn't exist, Please check your email or password');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        /* body{
            background: linear-gradient(#89f7fe, #66a6ff);
            height: 100%;
            width: 100%;    
        } */

        .container {
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(#89f7fe, #66a6ff);
            column-gap: 30px;
        }

        .form {
            position: absolute;
            max-width: 430px;
            width: 100%;
            padding: 20px;
            border-radius: 6px;
            background: #FFF;
        }

        .form.signup {
            opacity: 0;
            pointer-events: none;
        }

        .forms.show-signup .form.signup {
            opacity: 1;
            pointer-events: auto;
        }

        .forms.show-signup .form.login {
            opacity: 0;
            pointer-events: none;
        }

        header {
            font-size: 28px;
            font-weight: 600;
            color: #232836;
            text-align: center;
        }

        form {
            margin-top: 30px;
        }

        .form .field {
            position: relative;
            height: 50px;
            width: 100%;
            margin-top: 20px;
            border-radius: 6px;
        }
        input::-ms-reveal { display: none; }
        .field input,
        .field button,
        .field select{
            height: 100%;
            width: 100%;
            border: none;
            font-size: 16px;
            font-weight: 400;
            border-radius: 6px;
        }
        .field select{
            outline: none;
            padding: 0 15px;
            border-right: 16px solid transparent;
            outline: 1px solid #CACACA;
        }


        .field input {
            outline: none;
            padding: 0 15px;
            border: 1px solid #CACACA;
        }

        .field input:focus {
            border-bottom-width: 2px;
        }

        .eye-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            font-size: 18px;
            color: #8b8b8b;
            cursor: pointer;
            padding: 5px;
        }

        .field button {
            color: #fff;
            background-color: #0171d3;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .field button:hover {
            background-color: #000080;
        }

        .form-link {
            text-align: center;
            margin-top: 10px;
        }

        .form-link span,
        .form-link a {
            font-size: 14px;
            font-weight: 400;
            color: #232836;
        }

        .form a {
            color: #0171d3;
            text-decoration: none;
        }

        .form-content a:hover {
            text-decoration: underline;
        }

        .line {
            position: relative;
            height: 1px;
            width: 100%;
            margin: 36px 0;
            background-color: #d4d4d4;
        }

        .line::before {
            content: 'Or';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #FFF;
            color: #8b8b8b;
            padding: 0 15px;
        }

        .media-options a {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        a.facebook {
            color: #fff;
            background-color: #4267b2;
        }

        a.facebook .facebook-icon {
            height: 28px;
            width: 28px;
            color: #0171d3;
            font-size: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
        }

        .facebook-icon,
        img.google-img {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
        }

        img.google-img {
            height: 20px;
            width: 20px;
            object-fit: cover;
        }

        a.google {
            border: 1px solid #CACACA;
        }

        a.google span {
            font-weight: 500;
            opacity: 0.6;
            color: #232836;
        }

        @media screen and (max-width: 400px) {
            .form {
                padding: 20px 10px;
            }
        }
        .error_msg{
          color: crimson;
          font-size: 15px;
          padding: 3px 15px;
          margin: 3px;  
        }

    </style>

</head>
<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" name="loginemail">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" name="loginpassword">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>

                    <div class="field button-field">
                        <button name="login" type="submit">Login</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                </div>
            </div>

            <div class="line"></div>

            <!-- <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div> -->

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="Images/search.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>
        </div>

        <!-- Signup Form -->

        <div class="form signup">
            <div class="form-content">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <header>Signup</header>
                    
                   <div class="field input-field">
                        <input name="name" type="text" placeholder="Name" class="input" required>
                    </div>
                    <div class="field input-field">
                        <input name="email" type="email" placeholder="Email" class="input" required >
                    </div>

                    <div class="field input-field">
                        <input name="password" id="password" type="password" placeholder="Create password"  class="password" required >
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field input-field">
                        <input name="con_password" id="confrm-password" type="password" placeholder="Confirm password" class="password" required >
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <p id="message"></p>

                    <div class="field input-field">
                        <select name="user_type" id="access" required>
                        <option value="-1" selected disabled>--SELECT USERTYPE--</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                        <option value="company">Company</option>
                        </select>
                    </div>
                    <div class="field button-field">
                        <button name="signup" type="submit">Signup</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                </div>
            </div>

            <div class="line"></div>

            <!-- <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div> -->

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="Images/search.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script>
        const forms = document.querySelector(".forms"),
            pwShowHide = document.querySelectorAll(".eye-icon"),
            links = document.querySelectorAll(".link");

        pwShowHide.forEach(eyeIcon => {
            eyeIcon.addEventListener("click", () => {
                let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");

                pwFields.forEach(password => {
                    if (password.type === "password") {
                        password.type = "text";
                        eyeIcon.classList.replace("bx-hide", "bx-show");
                        return;
                    }
                    password.type = "password";
                    eyeIcon.classList.replace("bx-show", "bx-hide");
                })

            })
        })

        links.forEach(link => {
            link.addEventListener("click", e => {
                e.preventDefault(); //preventing form submit
                forms.classList.toggle("show-signup");
            })
        })
        // function checkpassword(){
        //     let password = document.getElementById("password").value;
        //     let cnfrmPassword = document.getElementById("confrm-password").value;
        //     let message= document.getElementById("message");
        //     if(password.length != 0){
        //         if(password==cnfrmPassword){
        //             message.textContent="Password Match";
        //             message.style.backgroundColor ="#3ae374";
        //         }
        //         else{
        //             message.textContent="Password not matched!";
        //         }   message.style.backgroundColor ="#ff4d4d";
        //     }


        //}

    </script>
</body>
</html>
