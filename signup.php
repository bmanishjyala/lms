<!-- <?php error_reporting(E_ALL ^ E_NOTICE); ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- md5 bootstrap link -->

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css" rel="stylesheet" />


    <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js" defer
></script>


    <!-- custom css -->
    <style>
        
        .errorDiv {
            position: relative;
            width: 100%;
        }

        .error {
            position: absolute;
            font-size: 12px;
            margin-left: 45px;
            margin-top: 2px;
            color: red;
        }
    </style>



</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                    <?php require "./validation/register_validation.php"; ?>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="mx-1 mx-md-4">
                                        <div class="d-flex justify-content-center flex-column align-items-baseline mb-3">
                                           <div> <label class="form-label mx-1 fw-bold lead" for="registered_as">Your Are</label>
                                            <select class=" mx-1 lead outline-none" name="register_as"  id="registered_as" style="border:none;border-bottom:1px solid gray;outline: none; color: gray;" aria-label=".form-select-lg example">
                                                <option class="mt-3" value="" selected>Register As</option>
                                                <option class="mt-3" value="teacher">Teacher</option>
                                                <option class="mt-3" value="Student">Student</option>
                                            </select></div>
                                            <div class="errorDiv  mb-3">
                                                    <span class="error"> <?php echo $errors['register']; ?> </span>
                                                </div>
                                        </div>



                                        <div class="d-flex flex-column align-items-center mb-2">
                                           <div class="d-flex flex-row align-items-center w-100">
                                           <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" name="name" class="form-control border-bottom" />
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                               
                                            </div>
                                           </div>
                                            <div class="errorDiv  mb-3">
                                                    <span class="error" id="emailLabel"> <?php echo $errors['name']; ?> </span>
                                                </div>
                                        </div>

                                     <div class="d-flex flex-column align-items-center mb-2">
                                        <div class="d-flex flex-row align-items-center w-100">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="form3Example3c" name="email" class="form-control border-bottom" />
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                               
                                            </div>
                                        </div>
                                           
                                            <div class="errorDiv mb-3 w-100">
                                                    <span class="error" id="emailLabel"> <?php echo $errors['email']; ?> </span>
                                                </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-center mb-2">
                                        <div class="d-flex flex-row align-items-center w-100">
                                        <i class="fas fa-address-book fa-lg me-3 fa-fw  "></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example3c" name="number" class="form-control border-bottom" />
                                                <label class="form-label" for="form3Example3c">Contact Number</label>
                                               
                                            </div>
                                        </div>
                                        <div class="errorDiv mb-3 w-100">
                                                    <span class="error" id="emailLabel"> <?php echo $errors['contact']; ?> </span>
                                                </div>
                                        </div>



                                        <div class="d-flex flex-column  align-items-center mb-2">
                                        <div class="d-flex flex-row align-items-center w-100">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4c" name="password" class="form-control border-bottom w-100" />
                                                <label class="form-label" for="form3Example4c">Password</label>
                                               
                                            </div>
                                            
                                        </div>
                                        <div class="errorDiv mb-3 w-100">
                                                    <span class="error" id="emailLabel"> <?php echo $errors['pass']; ?> </span>
                                                </div>
                                        </div>

                                        <div class="d-flex flex-column align-items-center mb-2">
                                        <div class="d-flex flex-row align-items-center w-100">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" name="confirmpassword" class="form-control border-bottom" />
                                                <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                               
                                            </div>
                                            
                                        </div>
                                        <div class="errorDiv mb-4">
                                                    <span class="error" id="emailLabel"> <?php echo $errors['cfnpass']; ?> </span>
                                                </div>
                                        </div>

                                        <div class="mt-4 d-flex justify-content-center">
                                            <p class="mb-5 pb-lg-2" style="color: grey;">Already have a account? <a href="./index.php" style="color: #393f81;">Login here</a></p>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="./img/signup.webp" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>