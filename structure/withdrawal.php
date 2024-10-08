<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../tools/bootstrap-5/css/all.css">
    <link rel="stylesheet" href="../public/styles/withdrawal.css">
    <link rel="stylesheet" href="../public/styles/profile.css">
    <link rel="stylesheet" href="../public/styles/loader.css">
    <title>withdrawal</title>
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
            <div class="toggleNavigation">
                <i class="fa-solid fa-xmark"></i>
                <i class="fa-solid fa-bars"></i>
                <div class="navbar-container">
                    <div class="navbars">
                        <a href="../index.php">home</a>
                        <a href="#" class="active">withdraw</a>
                        <a href="profile.php">account</a>
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
            <a href="#" class="active">withdraw</a>
            <a href="profile.php">account</a>
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
        <div class="withdraw-container">
            <div class="profile">
                <i class="fa-solid fa-power-off"></i>
                <i class="fa-solid fa-bell"></i>
                <i class="fa-solid fa-user-circle"></i><br><br>
                <div class="item Welcome">
                    <h2>withdraw from your account.</h2>
                    <p>
                        place a withdrawal request using any of the payment method below.
                    </p>
                </div>
            </div>
            <div class="status">
                <div class="options">
                    <div class="option">
                        <h4>westrern union</h4>
                        <h2>R$50,000.00</h2>
                        <h4>max</h4>
                        <ul>
                            <li>minimun amount: R$100</li>
                            <li>charge type: fixed</li>
                            <li>charge amount: R$0</li>
                            <li>duration: 24 hours</li>
                            <button class="withdrawal-method-btn">select this method</button>
                        </ul>
                    </div>

                    <div class="option">
                        <h4>usdt</h4>
                        <h2>R$100,000,000,000.00</h2>
                        <h4>max</h4>
                        <ul>
                            <li>minimun amount: R$100</li>
                            <li>charge type: fixed</li>
                            <li>charge amount: R$0</li>
                            <li>duration: instant payment</li>
                            <button class="withdrawal-method-btn">select this method</button>
                        </ul>
                    </div>

                    <div class="option">
                        <h4>bank transfer</h4>
                        <h2>R$500,000,000.00</h2>
                        <h4>max</h4>
                        <ul>
                            <li>minimun amount: R$10</li>
                            <li>charge type: fixed</li>
                            <li>charge amount: R$0</li>
                            <li>duration: instant payment</li>
                            <button class="withdrawal-method-btn">select this method</button>
                        </ul>
                    </div>

                    <div class="option">
                        <h4>litecoin</h4>
                        <h2>R$10,000,000,000,000.00</h2>
                        <h4>max</h4>
                        <ul>
                            <li>minimun amount: R$1,000</li>
                            <li>charge type: 0</li>
                            <li>charge amount: R$0</li>
                            <li>duration: instant</li>
                            <button class="withdrawal-method-btn">select this method</button>
                        </ul>
                    </div>

                    <div class="option">
                        <h4>ethereum</h4>
                        <h2>R$21,000,000,000.00</h2>
                        <h4>max</h4>
                        <ul>
                            <li>minimun amount: R$50</li>
                            <li>charge type: percentage</li>
                            <li>charge amount: 300%</li>
                            <li>duration: instant</li>
                            <button class="withdrawal-method-btn">select this method</button>
                        </ul>
                    </div>

                    <div class="option">
                        <h4>bitcoin</h4>
                        <h2>R$10,000.00</h2>
                        <h4>max</h4>
                        <ul>
                            <li>minimun amount: R$10</li>
                            <li>charge type: percentage</li>
                            <li>charge amount: 0%</li>
                            <li>duration: instant</li>
                            <button class="withdrawal-method-btn">select this method</button>
                        </ul>
                    </div>
                </div>
                <!-- withdrawal method notification poppup bar -->
                <div class="language-translate-popup withdrawal-notification-popup">
                    <div class="message-box">
                        <i class="fa-solid fa-warning"></i>
                        <p>
                            You will be redirected to the company "withdrawal manager" to complete these transaction.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo culpa maiores reprehenderit autem voluptate voluptatum mollitia provident laboriosam est tenetur?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo culpa maiores reprehenderit autem voluptate voluptatum mollitia provident laboriosam est tenetur?
                        </p>
                        <button id="message_box_btn"><a href="https://telegram.me/camilothiago443">continue with the transaction</a></button>
                    </div>
                    <script src="../private/scripts/withdrawlMethod.js"></script>
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