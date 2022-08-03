<?php 

$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $email=$_POST['email'];
  $pass=$_POST['password'];

    
  include "validation_class.php";




   $errors['email']=$check->email($email);

   $errors['pass']=$check->password($pass);


 

}
?>