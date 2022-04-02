<html>

<body>
    <form method="post" action="">
        <h1>Tạo câu hỏi ( tối đa 2 câu )</h1>
        ID Câu hỏi: <input type="text" name="id">
        </br>
        Câu hỏi <input type="text" name="question">
        </br>
        Nhập đáp án A : <input type="text" name="answer_1">
        </br>
        Nhập đáp án B : <input type="text" name="answer_2">
        </br>
        Nhập đáp án C : <input type="text" name="answer_3">
        </br>
        Nhập đáp án D : <input type="text" name="answer_4">
        </br>
        Đáp án đúng : <input type="text" name="answer_correct">
        <br>
        <input type="submit">
    </form>

    <?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $_SESSION['questions'][$_POST["id"]] =
            array(
                "id" => $_POST["id"],
                "question" => $_POST["question"],
                "answer_1" => $_POST["answer_1"],
                "answer_2" => $_POST["answer_2"],
                "answer_3" => $_POST["answer_3"],
                "answer_4" => $_POST["answer_4"],
            );
        $_SESSION['results'][$_POST["id"]] =
            array(
                "id" => $_POST["id"],
                "answer_correct" => $_POST["answer_correct"],
            );
    }
    print_r($_SESSION['questions']);
    echo "</br>";
    print_r('____________Đáp án đúng______________');
    echo "</br>";
    print_r($_SESSION['results']);

    if (!isset($_SESSION['admin_id'])) {
        echo ('Bạn không có quyền truy cập');
        header('Location: login.php');
    }
    ?>

</body>

</html>