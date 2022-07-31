<!-- to create database  -->
<!-- 

    $host = "localhost";

    $root = "root";
    $root_password = "";
    $db = "lms";

    try {
        $dbh = new PDO("mysql:host=$host", $root, $root_password);

        $dbh->exec("CREATE DATABASE `$db`;")
        or die(print_r($dbh->errorInfo(), true));

    }
    catch (PDOException $e) {
        die("DB ERROR: " . $e->getMessage());
    }
 -->

 <!-- for create table  -->

 <!-- https://www.mysqltutorial.org/mysql-create-table/ -->