<?php
session_start();
if (isset($_SESSION['user_id']["role"]) == "user") {
    if($_SESSION['result']['id'] == $_SESSION['user_id']['id']){
        echo('Bạn đã làm bài rồi');
    }else{
        $output='';
        $output.= '<html">
    
       <head>
           <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
           <title>PHP Quiz</title>
    
           <link rel="stylesheet" type="text/css" href="css/style.css" />
       </head>
    
       <body>
           <div id="page-wrap">
               <h1>Final Quiz for Lip building</h1>
               <form action="result.php" method="post" id="quiz">
               <ol>';
                   
                   if($_SESSION['questions']){
                            foreach($_SESSION['questions'] as $key){
                   $output .='
                   
                        <li>
                        <h3>'.$key['question'].'</h3> 
                        <div>
                            <input type="radio" name="question-'.$key['id'].'-answers" id="question-'.$key['id'].'-answers-A" value="'.$key['id'].'-'.'A'.'" />
                            <label for="question-'.$key['id'].'-answers-A">A) '.$key['answer_1'].' </label>
                        </div>
    
                        <div>
                            <input type="radio" name="question-'.$key['id'].'-answers" id="question-'.$key['id'].'-answers-B" value="'.$key['id'].'-'.'B'.'" />
                            <label for="question-'.$key['id'].'-answers-B">B) '.$key['answer_2'].'</label>
                        </div>
    
                        <div>
                            <input type="radio" name="question-'.$key['id'].'-answers" id="question-'.$key['id'].'-answers-C" value="'.$key['id'].'-'.'C'.'" />
                            <label for="question-'.$key['id'].'-answers-C">C) '.$key['answer_3'].'</label>
                        </div>
    
                        <div>
                            <input type="radio" name="question-'.$key['id'].'-answers" id="question-'.$key['id'].'-answers-D" value="'.$key['id'].'-'.'D'.'" />
                            <label for="question-'.$key['id'].'-answers-D">D) '.$key['answer_4'].'</label>
                        </div>
    
                    </li>
                    ';
                }
            }
                 $output.=' </ol>
                   <input type="submit" value="Submit Quiz" />
               </form>
           </div>
       </body>
    </html>';
    echo $output;
    }
} else {
    echo 'Bạn ko có quyền truy cập';
}
