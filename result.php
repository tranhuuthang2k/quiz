<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>PHP Quiz</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

    <div id="page-wrap">

        <h1>Final Quiz for Lip building</h1>

        <?php
        session_start();
        if ($_SESSION['user_id']) {
            $answer_1 = $_POST['question-1-answers'];
            $answer_2 = $_POST['question-2-answers'];
            $answer = array("question_1" => $answer_1, "question_2" => $answer_2);
            $id_question = explode("-", $answer_1);
            $id_question_2 = explode("-", $answer_2);
            $answer1 = $id_question[1];
            $answer2 = $id_question_2[1];
            $_SESSION['questions'];
            $_SESSION['results'];
            $totalCorrect = 0;
            if ($answer1 == $id_question[1]) {
                $totalCorrect++;
            }
            if ($answer2 == $id_question_2[1]) {
                $totalCorrect++;
            }

            echo "<div id='results'>$totalCorrect / 2 correct</div>";
            $_SESSION['result'] = array("id" => $_SESSION['user_id']["id"], "answer" =>  $answer, "totalCorrect" =>  $totalCorrect);

            print_r($_SESSION['result']);
        }

        ?>
    </div>
</body>
</html>