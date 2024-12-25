<!DOCTYPE html>
<?php
include 'check_session.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기</title>
</head>
<body>
    <h1>글쓰기</h1>
    <?php

    include "db.php";
    $userid=$_SESSION["userid"];
    $title=$_REQUEST["title"];
    $content = $_REQUEST['content'];
    
    $tmp_file=$_FILES['img']['tmp_name'];
    $filename=$_FILES['img']['name'];
    $ip=$_SERVER['REMOTE_ADDR'];
    $notice=0;
    if($_REQUEST['notice']){
        $notice=1;
    }
    // 업로드 여부 확인
    if (is_uploaded_file($tmp_file)) {
        $up_path = $_SERVER['CONTEXT_DOCUMENT_ROOT'] . "/final_project/uploaded_file";
        
        // 현재 게시글의 인덱스(id) 가져오기
        $result = mysqli_query($db, "SELECT COUNT(img_url) AS cntimg FROM boardadmin WHERE userid='$userid'");
        // 쿼리 실행 실패 시 오류 메시지 출력
    

        $row = mysqli_fetch_array($result);
        $idx= $row['cntimg'] ;

        // 새로운 파일 이름 생성 (userid_index)
        $new_filename = "{$userid}_{$idx}_" . basename($filename);
        $desfile = $up_path . "/" . $new_filename;

        // 파일 이동
        move_uploaded_file($tmp_file, $desfile);

        // URL 생성
        $img_url = $_SERVER['CONTEXT_PREFIX'] . "/final_project/uploaded_file/" . $new_filename;
    } else {
        $img_url = null; // 이미지가 없는 경우 처리
    }


    $sql="INSERT into boardadmin values(null,'$userid','$title','$content',0,now(),'$ip','$img_url','$notice');";
    $res=mysqli_query($db,$sql);
    if($res){
        echo "<script>
                alert('글 쓰기가 완료되었습니다.');
                window.location.href = 'list.php';
            </script>";
    }else{
        echo "<script>
                alert('글쓰기 중 오류가 발생했습니다.');
            </script>";
    }
    ?>
</body>
</html>