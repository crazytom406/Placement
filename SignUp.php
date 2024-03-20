<?php
    @include 'config.php';
    if(ISSET($_POST['signup']))
    {
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $pass = md5($_POST['password']);
        $con_password=md5($_POST['con_password']);
        $user_type = $_POST['user_type'];

        if($pass!=$con_password)
        {
           echo "<script>alert('just check the password!');</script>";
        }
        else if($user_type==-1)
        {
            echo "<script>alert('Just select the user type!');</script>";
        }
        else
        {
            $insert = "INSERT INTO user(name, email, password ,user_type) VALUES('$name' ,'$email' , '$pass' , '$user_type')";
            mysqli_query($conn, $insert);
            echo "<script>alert('Account Created Succesfully!');
            window.location.href='LoginPage.php';</script>";
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

        <!-- Signup Form -->

        <div class="form">
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
                        <option value="-1" >--SELECT USERTYPE--</option>
                        <option value="user">User</option>
                        </select>
                    </div>
                    <div class="field button-field">
                        <button name="signup" type="submit">Signup</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Already have an account? <a href="LoginPage.php" class="link login-link">Login</a></span>
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

    </script>
</body>
</html>
