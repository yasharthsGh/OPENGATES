 <?php
 /*
 this file contains database configuration assuming you are running mysql using user "root" and passward ""
 */

 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_NAME', 'login');

 //try to connect to the database
 $conn = mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD, DB_NAME);

 //check the connection
 if($conn == false){
    dir('Error: Cannot connect');
 }




?>



