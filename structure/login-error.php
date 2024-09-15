<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/error_popup.css">
    <title>login-error</title>
</head>
<body>

<div class="error-message">
    <p>
        <?php 
        if(isset($_GET['unknow-login-credencials'])){
            echo $error_message = $_GET['unknow-login-credencials'];
        }
        ?>
    </p>
    <a href="./forms.php"><button>cancel</button></a>
</div>
    
</body>
</html>