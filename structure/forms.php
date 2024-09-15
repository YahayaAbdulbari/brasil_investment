<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../tools/bootstrap-5/css/all.css">
    <link rel="stylesheet" href="../public/styles/forms.css">
    <title>form</title>
</head>
<body>

    <!-- language translate notification poppup bar -->
    <div class="language-translate-popup">
        <div class="message-box">
            <i class="fa-brands fa-accessible-icon"></i>
            <p>
                Select your prefered language at the top of this page.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, harum.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, harum.
            </p>
            <button id="message_box_btn">OK</button>
        </div>
        <script src="../private/scripts/languageTranslatePopup.js"></script>
    </div>

    <div class="form_box" id="sign_up">
        
        <form action="../private/server/create.php" method="post">
            <!-- form heading -->
            <h2 class="tittle">sign up</h2>
            <!-- input field boxes -->
            <div class="name_field fn">
                <div class="input_box">
                    <i class="fa-regular fa-user-circle"></i>
                    <input type="text" id="fname" name="first_name" placeholder="first name" class="field">
                </div>
            </div>
            <!-- input error message box -->
            <div class="fname-error-box error-box">
                <p class="error-message">
                    first name error.
                </p>
            </div>

            <div class="name_field ln">
                <div class="input_box">
                    <i class="fa-regular fa-user-circle"></i>
                    <input type="text" id="lname" name="last_name" placeholder="last name" class="field">
                </div>
            </div>
            <!-- input error message box -->
            <div class="lname-error-box error-box">
                <p class="error-message">
                    last name error.
                </p>
            </div>

            <div class="input_box">
                <i class="fa-regular fa-envelope"></i>
                <input type="email" id="email" name="email_address" placeholder="email address" required class="field">
            </div>

            <div class="input_box">
                <i class="fa-solid fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="********************" required class="field">
            </div>
            <!-- input error message box -->
            <div class="password-error-box error-box">
                <p class="error-message">
                    password error.
                </p>
            </div>

            <div class="input_box">
                <input type="submit" name="sign_up" value="sign up" id="submit">
            </div>
            <!-- bottom messages -->
            <div class="privacy_message">
                <p>By signing up, you agree with our <a href="#">privacy policy</a> and <a href="#">Terms of services.</a></p>
            </div>
            <div class="login_message">
                <b class="login_link">Login</b><p>if you  already have an account.</p>
            </div>
            <div class="signup_message">
                <b class="sign_up_link">Sign up</b><p>if you don't have an account.</p>
            </div>
        </form>

    </div>

    <!-- ###################################################################################### -->
                                             <!-- language translation system -->
    <!-- ###################################################################################### -->

    <div class="my-customize-language">
        <h4>chose your prefered language.</h4>
        <div id="google_translate_element"></div>
    </div>

    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
        pageLanguage: 'en', // Set your default language (e.g., 'en' for English)
        includedLanguages: 'fr,de,es,it,pt,ja,zh-CN,hi', // Optional: Specify languages you want to support
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- ###################################################################################### -->
                                        <!-- language translation system -->
    <!-- ###################################################################################### -->


    <script src="../private/scripts/forms.js"></script>

</body>
</html>