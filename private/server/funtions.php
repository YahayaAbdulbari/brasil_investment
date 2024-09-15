<?php

class Database {

    // these method connect you to DATABASE and returns the connection
    static function dbconnect() {

        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'pix_investment_sitiro';

        $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if($connection){
        }else{
            die('connection failed');
        }
        
        return $connection;
        
    }

    // these method read a specific column from a TABLE and returns a row
    static function read_column($columnName, $value){

        // create instace of the Database class to access connection
        $read_c_instance = new Database;
        $my_conn = $read_c_instance->dbconnect();

        $query = " SELECT * FROM $columnName WHERE email_address = '$value' ";
        $result = mysqli_query($my_conn, $query);

        if($result){

            $row = mysqli_fetch_assoc($result);

            if($row < 1){
                // if record not found stop the program execution with the message bellow
                die("record for '$value' not found !!!");

            }else{

                // read the record from database
                echo "record found !!!";
                $db_fname = $row['first_name'];
                $db_lname = $row['last_name'];
                echo "<br>";
                echo $db_fname;
                echo "<br>";
                echo $db_lname;

            }
        }else{
            die("query failed: you have an error in your sql query;");
        }

    }
    static function verify_login_credentials($columnName, $email, $password){

        // create instace of the Database class to access connection
        $read_c_instance = new Database;
        $my_conn = $read_c_instance->dbconnect();

        $query = " SELECT * FROM $columnName WHERE email_address = '$email' ";
        $result = mysqli_query($my_conn, $query);

        if($result){

            $row = mysqli_fetch_assoc($result);

            if($row < 1){
                
                // if record not found stop the program execution with the message bellow
                $error1 = "No account for these email provided: $email !!!";
                header("location:../../structure/login-error.php?unknow-login-credencials=$error1");

            }else{

                // read the record from database
                $db_fname = $row['first_name'];
                $db_lname = $row['last_name'];
                $db_email = $row['email_address'];
                $db_pass = $row['password'];

                $username = $db_fname . " " . $db_lname;
                $error2 = "Invalid email or password !!!";

                if($email === $db_email && $password === $db_pass){
                    header("location:../../structure/profile.php?username=$username");
                }else{
                    header("location:../../structure/login-error.php?unknow-login-credencials=$error2");
                }
                
            }
        }else{
            die("query failed: you have an error in your sql query;");
        }

    }

    // these method read all records to from TABLE and returns result
    static function read_all_record($tableName){

        // create instace of the Database class to access connection
        $read_instance = new Database;
        $my_conn = $read_instance->dbconnect();

        // qery the database
        $query = "SELECT * FROM '$tableName'";

        $result = mysqli_query($my_conn, $query);

        return $result;

    }

    // these method create record to DB and returns result
    static function create_record($d1, $d2, $d3, $d4, $d5, $d6){

        if($d1 == null || $d2 == null){

            $signup_error = "Sign-up error: empty First-name or Last-name !!!";
            header("location:../../structure/signup-error.php?signup-error=$signup_error");

        }elseif($d6 < 10){

            $signup_error = "Sign-up error: password less than 10 characters; increase the length !!!";
            header("location:../../structure/signup-error.php?signup-error=$signup_error");

        }else{

            // create instace of the Database class to access connection
            $create_r_instance = new Database;
            $my_conn = $create_r_instance->dbconnect();

            // qery the database
            $query1 = 'INSERT INTO investors(first_name, last_name, email_address, creation_date, creation_time, password)';
            $query2 = "VALUES ('$d1', '$d2', '$d3', '$d4', '$d5', '$d6')";
            $main_Query = $query1.$query2;

            $username = $d1 . " " . $d2;

            $result = mysqli_query($my_conn, $main_Query);

            if($result){
                header("location:../../structure/signup-success.php?username='$username'");
            }else{
                die('cannot create record:query failed');
            }

        }

    }

    // these method escape SQL injection and returns data back
    static function escape_injection($data){

        // create instace of the Database class to access connection
        $escape_instance = new Database;
        $my_conn = $escape_instance->dbconnect();

        $data = mysqli_real_escape_string($my_conn, $data);
        return $data;

    }

    // these method encrypt password and returns it back
    static function encrypt_password($pass){

        $hash = '$2y$10$';
        $salt = 'lahaulawalakuwataillabillahi';
        $mixture = $hash.$salt;

        // encrypted user password
        $pass = crypt($pass, $mixture);
        return $pass;

    }

    // these method check if a record exist in a TABLE and returns the record information
    static function record_exist($record_name){

        // create instace of the Database class to access connection
        $record_ex_instance = new Database;
        $my_conn = $record_ex_instance->dbconnect();

        $query = " SELECT * FROM investors WHERE email_address = '$record_name' ";
        $result = mysqli_query($my_conn, $query);

        if($result){

            $row = mysqli_fetch_assoc($result);

            if($row < 1){

                return 0;

            }else{

                return 1;

            }
        }else{
            die("query failed: you have an error in your sql query;");
        }


    }
}

$connection = Database::dbconnect();



// testing echo for verify_login_credentials();
// echo "<br>";
// echo $db_fname;
// echo "<br>";
// echo $db_lname;
// echo "<br>";
// echo "Database email";
// echo "<br>";
// echo $db_email;
// echo "<br>";
// echo "Provided email";
// echo "<br>";
// echo $email;
// echo "<br>";
// echo "Database password";
// echo "<br>";
// echo $db_pass;
// echo "<br>";
// echo "Provided password";
// echo "<br>";
// echo $password;
