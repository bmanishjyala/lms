<?php error_reporting(E_ALL ^ E_NOTICE); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Question</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css" rel="stylesheet" />

    <style>
        
        .errorDiv {
            position: relative;
            width: 100%;
        }

        .error {
            position: absolute;
            font-size: 12px;
            margin-left: 20px;
            margin-top: 2px;
            color: red;
        }
    </style>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js" defer></script>
</head>

<body class="d-flex justify-content-center flex-column align-items-center" style="min-height:100vh ;">
    <h2>Add Question</h2>

   <?php include "./insertQuestion.php" ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="container w-50">
        <div class="form-outline mb-4">
            <input type="number" id="form4Example" name="correct" class="form-control" />
            <label class="form-label" for="form4Example">Question No</label>

        </div>
        <div class="form-outline mb-4">

            <textarea class="form-control" name="question" id="form4Example3" rows="4"></textarea>
            <label class="form-label" for="form4Example3">Question</label>
            <div class="errorDiv  mb-3">
                <span class="error"> <?php echo $error['question'] ?> </span>
            </div>
        </div>
       
        <!-- Name input -->
        <div class="form-outline mb-4">
            <input type="text" id="form4Example1" name="option1" class="form-control" />
            <label class="form-label" for="form4Example1">Option 1</label>
            <div class="errorDiv  mb-3">
                <span class="error"> <?php echo $error['option1'] ?> </span>
            </div>
         
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form4Example2" name="option2" class="form-control" />
            <label class="form-label" for="form4Example2">Option 2</label>
            <div class="errorDiv  mb-3">
                <span class="error"> <?php echo $error['option2'] ?> </span>
            </div>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form4Example3" name="option3" class="form-control" />
            <label class="form-label" for="form4Example3">Option 3</label>
            <div class="errorDiv  mb-3">
                <span class="error"> <?php echo $error['option3'] ?> </span>
            </div>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form4Example4" name="option4" class="form-control" />
            <label class="form-label" for="form4Example4">Option 4</label>
            <div class="errorDiv  mb-3">
                <span class="error"> <?php echo $error['option4'] ?> </span>
            </div>
        </div>
        <div class="form-outline mb-4">
            <input type="number" id="form4Example1" min="1" max="4" name="correct" class="form-control" />
            <label class="form-label" for="form4Example1">Correct Option</label>
            <div class="errorDiv  mb-3">
                <span class="error"> <?php echo $error['correct'] ?> </span>
            </div>
        </div>



        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Upload Question</button>
    </form>
</body>

</html>