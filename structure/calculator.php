<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/calculator.css">
    <title>calculator</title>
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

    <div class="container">
        
        <h1>calculate your investment profits</h1>

        <!-- calculator -->
        <div class="calculator">

            <!-- investment amount -->
            <div class="investment-value">
                <p>Amount in R$</p>
                <input type="number" id="amount" placeholder="Input an amount">
            </div>

            <!-- equivalent profit -->
            <div class="investment-profit">
                <p>Profit in R$</p>
                <input type="tel" id="profit" placeholder="Equivalent profit">
            </div>

            <!-- investment bonus -->
            <div class="investment-profit bonus">
                <p>Investment bonus in R$</p>
                <input type="tel" id="bonus" placeholder="Investment bonus">
            </div>

            <div class="btn">
                <button id="calculate">calculate</button>
                <button id="reset">reset</button>
            </div>

        </div>

    </div>

    <!-- calculator script -->
    <script>

        var amount = document.getElementById('amount');
        var profit = document.getElementById('profit');
        var bonus = document.getElementById('bonus');
        var calculate = document.getElementById('calculate');
        var reset = document.getElementById('reset');

        calculate.addEventListener('click', () => {
            let new_amount = amount.value; 
            Number (new_amount);
            profit.value=(new_amount*9.7);

            let new_profit = profit.value; 
            Number (new_profit);
            let new_bonus = (new_profit/10000);
            bonus.value=new_bonus;
        })

        reset.addEventListener('click', () => {
            amount.value='0.00';
            profit.value='0.00';
            bonus.value='0.00';
        })

    </script>

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

    
</body>
</html>