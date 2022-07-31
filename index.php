<?php
require "connection.php";


if($conn->exec("SHOW TABLES LIKE 'users'")){
    echo "<br>";
    echo "table Exists";
}else{
    echo "<br>";
    $statement= 'CREATE TABLE authors( 
        author_id   INT AUTO_INCREMENT,
        first_name  VARCHAR(100) NOT NULL, 
        middle_name VARCHAR(50) NULL, 
        last_name   VARCHAR(100) NULL,
        PRIMARY KEY(author_id)
    );';
    
    $status=$conn->exec($statement);
   
    if($status){
        echo "Table Created Succesfully";
    }else{
        echo "There is some Problem With Creating Table";
       
    }
}


?>