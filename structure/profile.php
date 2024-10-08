<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../tools/bootstrap-5/css/all.css">
    <link rel="stylesheet" href="../public/styles/profile.css">
    <link rel="stylesheet" href="../public/styles/loader.css">
    <title>profile</title>
</head>
<body>

    <!-- loading animation -->
    <div id="loader"></div>
    <script>
        load_page();
        unload_page();
        function load_page(){
            window.addEventListener('load', ()=>{
                document.getElementById('loader').classList.add('page_ready');
            });
        }
        function unload_page(){
            window.addEventListener('unload', ()=>{
                document.getElementById('loader').classList.add('page_ready');
            });
        }
    </script>

    <header>
        <div class="company-name">
            <img src="../public/images/bitcoin4.jpg">
            <div class="name">
                <h1>PIX INVESTMENT</h1>
               <h4>IN BRASIL SECURITY</h4>
            </div>
            <!-- toggle navigation -->
            <div class="toggleNavigation">
                <i class="fa-solid fa-xmark"></i>
                <i class="fa-solid fa-bars"></i>
                <div class="navbar-container">
                    <div class="navbars">
                        <a href="../index.php">home</a>
                        <a href="#" class="active">account</a>
                        <a href="withdrawal.php">withdraw</a>
                        <a href="#">transaction history</a>
                        <a href="contact.php">contact</a>
                        <a href="#">log out</a>
                    </div>
                </div>
                <script src="../private/scripts/toggleNavigation.js"></script>
            </div>
        </div>
        <!-- navigagions -->
        <nav>
            <a href="../index.php">home</a>
            <a href="#" class="active">account</a>
            <a href="withdrawal.php">withdraw</a>
            <a href="#">transaction history</a>
            <a href="contact.php">contact</a>
            <a href="#">log out</a>
        </nav>
    </header>

    <!-- language translate notification poppup bar -->
    <div class="language-translate-popup">
        <div class="message-box">
            <i class="fa-brands fa-accessible-icon"></i>
            <p>
                Scroll down to the bottom end of this page and select your prefered language.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, repellat? Distinctio minima rem reiciendis vero.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, repellat? Distinctio minima rem reiciendis vero.
            </p>
            <button id="message_box_btn">OK</button>
        </div>
        <script src="../private/scripts/languageTranslatePopup.js"></script>
     </div>

    <main>
        <div class="container">
            <div class="profile">
                <div class="welcome">
                    <p>
                        <?php 
                        if(isset($_GET['username'])){
                            $username = $_GET['username'];
                            echo "Welcome, $username";
                        }
                        ?>
                    </p>
                </div>
                <i class="fa-solid fa-power-off"></i>
                <i class="fa-solid fa-bell"></i>
                <i class="fa-solid fa-user-circle"></i>
            </div>
            <div class="status">
                <div class="item welcome">
                    <p>
                        Welcome to <span>PIX INVESTMENT IN BRASIL SECURITY</span> please buy a plan !
                    </p>
                </div>
                <div class="item t-profit">
                    <ul><li>account balance</li></ul>
                    <i class="fa-solid fa-wallet"></i>
                    <h3>R$0.00</h3>
                </div>
                <div class="item t-profit">
                    <ul><li>total profit</li></ul>
                    <i class="fa-solid fa-circle-dollar-to-slot"></i>
                    <h3>R$0.00</h3>
                </div>
                <div class="item t-bonus">
                    <ul><li>total bonus</li></ul>
                    <i class="fa-solid fa-gift"></i>
                    <h3>R$0.00</h3>
                </div>
                <div class="item r-bonus">
                    <ul><li>referal bonus</li></ul>
                    <i class="fa-solid fa-gifts"></i>
                    <h3>R$0.00</h3>
                </div>
                <div class="item t-deposit">
                    <ul><li>total deposited</li></ul>
                    <i class="fa-solid fa-arrow-alt-circle-down"></i>
                    <h3>R$0.00</h3>
                </div>
                <div class="item t-withdrawal">
                    <ul><li>total withdrawal</li></ul>
                    <i class="fa-solid fa-arrow-alt-circle-up"></i>
                    <h3>R$0.00</h3>
                </div>
                <div class="item t-withdrawal">
                    <ul><li>total referals</li></ul>
                    <i class="fa-solid fa-link"></i>
                    <h3>0</h3>
                </div>
                <div class="item active-plan">
                    <p>You do not have an active invesment at the moment.</p>
                    <a href="#">invest now</a>
                </div>
            </div>
        </div>

        <footer>
            <div class="quik-links">
                <h3>quik links</h3>
                <ul>
                    <a href="../index.php">home</a>
                    <a href="forms.php">login/sign-up</a>
                    <a href="contact.php">contact</a>
                    <a href="#">help</a>
                </ul>
            </div>
            
            <div class="address">
                <h3>address</h3>
                <div class="location">
                    <i class="fa-solid fa-location-pin"></i><p>123 street, sau paulo</p><br>

                    <i class="fa-solid fa-envelope"></i><p>pixinvestmentinbrasilsecurity@brasil.com</p><br>

                    <i class="fa-solid fa-phone"></i><p>+1234567890</p><br>
                    <i class="fa-solid fa-phone"></i><p>+1234567890</p><br>

                </div>
            </div>

            <div class="media-links">
                <h3>chart us on social medias</h3>
                <div class="medias">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-telegram"></i>
                </div>

                <div class="subscribe-form">
                    <h4>Subscribe our news letter</h4>
                    <form action="" method="post">
                        <input type="email" placeholder="Email Address" name="email">
                        <input type="submit" value="Subscribe" name="Subscribe" id="subscribe">
                    </form>
                </div>

                <div class="copyright">
                    <p> &copy; copyright pix investment in brasil security </p>
                </div>

            </div>

            <!-- ###################################################################################### -->
                                             <!-- language translation system -->
            <!-- ###################################################################################### -->

            <div id="google_translate_element"></div>

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

        </footer>

    </main>
    
    
</body>
</html>