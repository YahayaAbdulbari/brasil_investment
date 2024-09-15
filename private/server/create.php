<?php  include "./funtions.php";

if(isset($_POST['sign_up'])){

    // echo "sign up button is clicked";

    // collect all input datas
    $first_name = $_POST['first_name'];
    $first_name = ucfirst($first_name);
    $last_name = $_POST['last_name'];
    $email = $_POST['email_address'];
    $password = $_POST['password'];


    // escape sql injection
    $first_name = Database::escape_injection($first_name);
    $last_name = Database::escape_injection($last_name);
    $email = Database::escape_injection($email);
    $password = Database::escape_injection($password);

    // capitalise all name input
    $first_name = ucfirst($first_name);
    $last_name = ucfirst($last_name);

    // convert email address to lower case
    $email = strtolower($email);

    // encrypt user password
    $password = Database::encrypt_password($password);

    $record_exist = Database::record_exist($email);

    if($record_exist < 1){

        // record creation date
        $record_creation_date = date('D-m-y');
        // record creation time
        $record_creation_time = date('H:i:s');

        // create new record
        Database::create_record($first_name, $last_name, $email, $record_creation_date, $record_creation_time, $password);

    }else{

        echo "signal 1 $email exist";

        // extract information from database
        $query = " SELECT * FROM investors WHERE email_address = '$email' ";
        $result = mysqli_query($connection, $query);

        if($result){
            $row = mysqli_fetch_assoc($result);
            if($row > 0){

                // read the record from database
                $db_fname = $row['first_name'];
                $db_lname = $row['last_name'];
                $db_email = $row['email_address'];
                $db_pass = $row['password'];

                $username = $db_fname . " " . $db_lname;
            
            }
        }else{
            die("query failed: you have an error in your sql query;");
        }

        $signup_error = "You already have an account with the username: $username; you are not allowed to have more than one account !!!";
        header("location:../../structure/signup-error.php?signup-error=$signup_error");

    }


}else if(isset($_POST['login'])){

    // echo "login up button is clicked";

    // collect all input datas
    $email = $_POST['email_address'];
    $password = $_POST['password'];

    // escape sql injection
    $email = Database::escape_injection($email);
    $password = Database::escape_injection($password);

    // convert email address to lower case
    $email = strtolower($email);

    // encrypt user password
    $password = Database::encrypt_password($password);

    $column = 'investors';

    Database::verify_login_credentials($column, $email, $password);

}else{

    die('non of the form button is clicked');

}

?>