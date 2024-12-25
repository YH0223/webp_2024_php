<?php
    //DBMS 접속
    $db=mysqli_connect('localhost', 'prog229', '2022100814');
    if(!$db){//접속 실패시 예외처리
        echo 'error!';
        exit(0);
    }
    //작업 db선택
    if(!mysqli_select_db($db,"prog229")){
        echo 'error!';
        exit(0);
    }
    
    
    ?>