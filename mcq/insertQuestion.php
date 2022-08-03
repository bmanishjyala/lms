
    <?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error=[];
    $question=$_POST['question'];
    
//     $choice = array();
// $choice[1] = $_POST['option1'];
// $choice[2] = $_POST['option2'];
// $choice[3] = $_POST['option3'];
// $choice[4] = $_POST['option4'];
    include "../validation/validation_class.php";
    if($is_empty->empty($question))
    {
        $error['question'] =$is_empty->empty($question);
    }
    // $error['option1'] = $is_empty->empty($_POST['option1']);
    // $error['option2'] = $is_empty->empty($_POST['option2']);
    // $error['option3'] = $is_empty->empty($_POST['option3']);
    // $error['option4'] = $is_empty->empty($_POST['option4']);
    // $error['correct'] = $is_empty->empty($_POST['correct']);
  
    if(empty($error)){
       
      require "./database.php";
      $insert_question="INSERT INTO `question`( `ques_text`) VALUES ('$question')";
           $db_obj->write($insert_question);
    //   if($db_obj->write($insert_question)==TRUE){
    //     $insert_option="INSERT INTO `options`(`ques_number`, `correct_ans`, `options`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";
    //     $db_obj->write($insert_option);
    //   }
    }
    else{
        echo "hlo";
    }
}



?>