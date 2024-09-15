<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup-success.html</title>
</head>
<body>

    <div class="error-message">

        <?php 
            if(isset($_GET['username'])){
                $error_message = $_GET['username'];
            }
        ?>

        <p>Congratulations <?php echo $error_message ?>you have successfully sign up with pix investment in brasil security, you can now login to your account to start investment.</p>
        <a href="#">login</a>

    </div>

</body>
</html>