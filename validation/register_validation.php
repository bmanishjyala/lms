<?php 

$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name=$_POST['name'];
  $registerAs=$_POST['register_as'];
 
  $email=$_POST['email'];
  $mobile=$_POST['number'];
  $pass=$_POST['password'];
  $cfnpass=$_POST['confirmpassword'];
    
  require 'validation_class.php';



if($registerAs ==""){
  $errors['register']="Register As Teacher or Student ";
}
 $errors['name']= $check->name($name);
   $errors['email']=$check->email($email);
   $errors['contact']=$check->contact($mobile);
   $errors['pass']=$check->password($pass);
   $errors['cfnpass']=$check->confirm_password($cfnpass,$pass);

 

}
?>