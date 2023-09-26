
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/login.css">
    <title>Sign In & Sign Up</title>
</head>
<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form  action="postLogin.php" class="sign-in-form" method="post">
                <h2 class="title">Sign in</h2>
                <!-- sign in -->
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="fas fa-check-circle success-icon"></i>
                    <div class="error"></div>
                </div>

                <!--Password input -->
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="fas fa-check-circle success-icon"></i>
                    <div class="error"></div>
                </div>
                <input type="submit" value="Login" class="btn solid">

                <p class="social-text">Or Sign in with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fa-brands fa-telegram"></i>
                    </a>

                </div>
            </form>
            <!-- --------------------------sign up--------------------------  -->
            <form action="postRegister.php" class="sign-up-form" method="post">
                <h2 class="title">Sign up</h2>
                <!-- User Name input-->
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="name"  id="name" placeholder="Username">
                    <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="fas fa-check-circle success-icon"></i>
                    <div class="error"></div>
                </div>
                <!-- Email input -->
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email"  id="email" placeholder="Email">
                    <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="fas fa-check-circle success-icon"></i>
                    <div class="error"></div>
                </div>
                <!--Password input -->
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <i class="fas fa-exclamation-circle failure-icon"></i>
                    <i class="fas fa-check-circle success-icon"></i>
                    <div class="error"></div>
                </div>
                <input type="submit" value="Sign Up" class="btn solid">

                <p class="social-text">Or Sign up with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fa-brands fa-telegram"></i>
                    </a>

                </div>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3> New here?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptatem libero voluptatum labore optio aut quo dolores at. Voluptates repudiandae beatae cupiditate sapiente labore quidem fugiat tenetur inventore architecto ab?</p>
                <button class="btn transparent" id="sign-up-btn">Sign Up</button>
            </div>

            <img src="img/log.svg" class="image" alt="">
        </div>

        <div class="panel right-panel">
            <div class="content">
                <h3>One of us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptatem libero voluptatum labore optio aut quo dolores at. Voluptates repudiandae beatae cupiditate sapiente labore quidem fugiat tenetur inventore architecto ab?</p>
                <button class="btn transparent" id="sign-in-btn">Sign in</button>
            </div>

            <img src="img/register.svg" class="image" alt="">
        </div>

    </div>
</div>
</body>
<script src="/js/login.js">
    // document.addEventListener("DOMContentLoaded", function () {
    //     const signInForm = document.querySelector(".sign-in-form");
    //     const signUpForm = document.querySelector(".sign-up-form");
    //
    //     signInForm.addEventListener("submit", function (e) {
    //         e.preventDefault();
    //
    //         const email = document.getElementById("email").value;
    //         const password = document.getElementById("password").value;
    //
    //         // Check if email and password are empty
    //         if (email === "" || password === "") {
    //             displayError("Please fill in all fields.");
    //         } else {
    //             // Submit the form
    //             this.submit();
    //         }
    //     });
    //
    //     signUpForm.addEventListener("submit", function (e) {
    //         e.preventDefault();
    //
    //         const name = document.getElementById("name").value;
    //         const email = document.getElementById("email").value;
    //         const password = document.getElementById("password").value;
    //
    //         // Check if any of the fields are empty
    //         if (name === "" || email === "" || password === "") {
    //             displayError("Please fill in all fields.");
    //         } else {
    //             // Submit the form
    //             this.submit();
    //         }
    //     });
    //
    //     function displayError(errorMessage) {
    //         const errorDiv = document.querySelector(".error");
    //         errorDiv.innerText = errorMessage;
    //     }
    // });
</script>
</html>
