<!DOCTYPE html>
<?php
include 'check_session.php';
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>웹프로그래밍/글보기</title>
    <link rel="stylesheet" href="./css/base_style.css">
</head>
<body>
<div class="content-container">
        <h1>관리자 게시글</h1>
        <?php 
            include "db.php";
            $idx = $_REQUEST['idx'];

            // 작성자와 세션의 id 비교 후 조회수 증가
            $sql = "SELECT * FROM boardadmin WHERE idx = $idx";
            $res = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($res);
            $writer = $row['userid'];

            // 작성자와 세션 ID가 다를 경우 조회수 증가
            if ($writer != $_SESSION['userid']) {
                $update_hit_sql = "UPDATE boardadmin SET hit = hit + 1 WHERE idx = $idx";
                mysqli_query($db, $update_hit_sql); // 조회수 증가 쿼리 실행
            }
        ?>

        <div class="board-details">
            <div class="detail-item">
                <strong>작성자:</strong> <?= $row['userid']; ?>
            </div>
            <div class="detail-item">
                <strong>제목:</strong> <?= $row['title']; ?>
            </div>
            <div class="detail-item">
                <strong>등록일:</strong> <?= $row['reg_date']; ?>
            </div>
            <div class="detail-item">
                <strong>조회수:</strong> <?= $row['hit']; ?>
            </div>
            <div class="detail-item">
                <strong>등록 IP:</strong> <?= $row['reg_ip']; ?>
            </div>
            <div class="detail-item">
                <div> <?= nl2br($row['content']); ?></div>
                <?php 
                    if($row['img_url']){
                        echo "<img src='{$row["img_url"]}' alt='첨부 이미지' class='post-image'><br>";
                    }
                ?>
            </div>
        </div>

        <div class="button-group">
            <a href="adminlist.php" class="btn">목록으로</a>
            <?php if($writer==$_SESSION['userid']){
                echo '<a href="adminupdate.php?idx='.$idx.'" class="btn btn-primary">수정</a>';
                echo '<a href="admindelete.php?idx='.$idx.'" class="btn btn-danger">삭제</a>';
            }
            ?>
            
        </div>
    </div>
</body>
</html>