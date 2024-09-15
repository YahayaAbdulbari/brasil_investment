<?php include "connection.php";

// start a session
session_start();

// check if the user click on sign-up button
if(isset($_POST['signup'])){

    // colect all inputs
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email_address = $_POST['email'];
    $faculty = $_POST['faculty'];
    $department = $_POST['department'];
    $level = $_POST['level'];
    $phone_number = $_POST['phone'];
    $password = $_POST['password'];

    // remove all space
    $first_name = trim($first_name);
    $last_name = trim($last_name);
    $faculty = trim($faculty);
    $department = trim($department);

    // capitalize all necessary inputs
    $first_name = ucfirst($first_name);
    $last_name = ucfirst($last_name);
    $faculty = ucfirst($faculty);
    $department = ucfirst($department);
    // email to lowercase
    $email_address = strtolower($email_address);

    // generate current time for the account creation
    $creation_time = time();
    $creation_date = date("D-m-y H:i:s", $creation_time);

    // clean up all inputs to prevent
    $first_name = mysqli_real_escape_string($connection, $first_name);
    $last_name = mysqli_real_escape_string($connection, $last_name);
    $email_address = mysqli_real_escape_string($connection, $email_address);
    $faculty = mysqli_real_escape_string($connection, $faculty);
    $department = mysqli_real_escape_string($connection, $department);
    $level = mysqli_real_escape_string($connection, $level);
    $phone_number = mysqli_real_escape_string($connection, $phone_number);
    $password = mysqli_real_escape_string($connection, $password);

    // encrypt user password
    $hash = "$2y$10$";
    $salt = "lahaulawalakuwataillabillahi";
    $hash_and_salt = $hash.$salt;
    $password = crypt($password, $hash_and_salt);

    // send username to signupSuccess page througth session
    $username = $first_name ." ". $last_name;
    $_SESSION['username'] = $username;


    // sql query
    $query = "INSERT INTO users (first_name,last_name,username,email_address,faculty,department,level,phone_number,creation_date,password)";
    $query =  $query. "VALUES('$first_name','$last_name','$username','$email_address','$faculty','$department','$level','$phone_number','$creation_date','$password')";
    $result = mysqli_query($connection, $query);

    // check if data was inserted
    if($result){
        header('location:signupSuccess.php');
    }else{
        die('data cannot be insert due to error'.mysqli_error($connection));
    }
}else{
    // catch the error and display an error message when form is not submit or signup button not clicked
    echo 'error1 detected    "either signup button not click, or sign-up form not responding !!!"';
    echo "<br>";
}

//check if the user click on login button
if(isset($_POST['login'])){

    // colect all inputs
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email_address = $_POST['email'];
    $password = $_POST['password'];

    // capitalize all necessary inputs
    $first_name = ucfirst($first_name);
    $last_name = ucfirst($last_name);

    // email to lowercase
    $email_address = strtolower($email_address);

    // clean up all inputs
    $first_name = mysqli_real_escape_string($connection, $first_name);
    $last_name = mysqli_real_escape_string($connection, $last_name);
    $email_address = mysqli_real_escape_string($connection, $email_address);
    $password = mysqli_real_escape_string($connection, $password);

    // encrypt user password
    $hash = "$2y$10$";
    $salt = "lahaulawalakuwataillabillahi";
    $hash_and_salt = $hash.$salt;
    $password = crypt($password, $hash_and_salt);


    $username = $first_name ." ". $last_name;

    $query = "SELECT * FROM users WHERE username = '$username' ";
    $result = mysqli_query($connection, $query);


            // echo $first_name;
            // echo "<br";
            // echo $last_name;
            // echo "<br";
            // echo $email_address;
            // echo "<br";
            // echo $password;
            // echo "<br";

    if($result){

        $row = mysqli_fetch_assoc($result);

        if($row < 1){
            header('location:signup.php?error=No account for the login credentials provided on login page! create one');
        }else{

            $db_fname = $row['first_name'];
            $db_lname = $row['last_name'];
            $db_email = $row['email_address'];
            $db_password = $row['password'];
            $db_id = $row['user_id'];

            // send the user_id through session
            $_SESSION['user_id'] = $db_id;

            if($first_name === $db_fname && $last_name === $db_lname && $email_address === $db_email && $password === $db_password){
                header('location:profile.php');
            }else{
                header('location:login.php?error=Invalid login credentials !!!');  
            }

        }

    }else{
        die('error on query result'.mysqli_error($connection));
    }

}else{
    // catch the error and display an error message when form is not submit or signup button not clicked
    echo "<br>";
    echo 'error2 detected    "either login button not click, or login form not responding !!!"';
}

?>