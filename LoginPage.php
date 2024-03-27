<?php
    @include 'config.php';

    if(ISSET($_POST['login']))
    {
        //echo "Login Form Submitted";
        // db query
        $hash_pass = md5($_POST['loginpassword']);
        $select = "SELECT * FROM user WHERE email='".$_POST['loginemail']."' and password ='".$hash_pass."'";
        
        $result = mysqli_query($conn, $select);
        if(mysqli_num_rows($result)> 0)
        {
            //Navigation based on User_type
            while($row=mysqli_fetch_assoc($result))
            {
                if($row['user_type']=='user')
                {
                    header('location:StudentHomePage.php');
                    break;
                }
            }
        }
        else
        {
            echo "<script>alert('User does not exist, Please check your email or password');</script>";
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
    <link href="LoginStyle.css" rel="stylesheet">
    

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
                    <span>Don't have an account? <a href="SignUp.php" class="link signup-link">Signup</a></span>
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
                    <img src="Images/google.jpg" alt="" class="google-img">
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
