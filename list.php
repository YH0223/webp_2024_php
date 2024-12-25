<!DOCTYPE html>
<?php
include 'check_session.php';
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>웹프로그래밍/목록</title>
    <link rel="stylesheet" href="./css/base_style.css">
</head>
<body>
<div class="form-container">
    <div class="mainlist" onclick="window.location.href='list.php';">
        <h1>게시판</h1>
    </div>

        <?php
        include "db.php";
        $prow=5;
        $sql="select count(*) as total from board";
        $res=mysqli_query($db,$sql);
        $row=mysqli_fetch_array($res);
        $total=$row['total'];

        $total_page=ceil($total/$prow);

        if( $_GET['p']){
            $cur_page=$_GET['p'];
        }else{
            $cur_page=0;
        }

        $start = $cur_page*$prow;

        if($cur_page<$total_page-1){
            $next=$cur_page+1;
        }

        if($cur_page>0){
            $prev=$cur_page-1; 
        }

        $sql="select * from board order by idx desc limit $start,$prow";
        $res=mysqli_query($db,$sql);
        $num=mysqli_num_rows($res);
        ?>

        <!-- 게시글 리스트 -->
        <div class="board-list">
            <?php
            for($i=0;$i<$num;$i++){
                $row=mysqli_fetch_array($res);
                ?>
                <div class="board-item">
                    <div class="board-item-header">
                        <span class="board-item-number">번호 <?= $row['idx'] ?></span>
                        <span class="board-item-author">작성자 : <?= $row['userid'] ?></span>
                    </div>
                    <a href="post.php?idx=<?= $row['idx'] ?>" class="board-item-title">
                    <div class="board-item-body">
                        
                        <?php if (!empty($row['img_url'])): ?>
                        <img src="./src/image_available.png" alt="이미지" class="board-item-image" >
                        <?php endif; ?>
                        <?= $row['title'] ?>
                        <div class="board-item-meta">
                            <span>등록일: <?= $row['reg_date'] ?></span>
                            <span>조회: <?= $row['hit'] ?></span>
                        </div>
                    </div>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>

        <!-- 페이지네이션 -->
        <div class="pagination">
            <div class="pagination-links">
                <?php if(!is_null($prev)) { ?>
                    <a href="?p=<?=$prev?>" class="btn btn-prev">Prev</a>
                <?php } ?>
                <?php if(!is_null($next)) { ?>
                    <a href="?p=<?=$next?>" class="btn btn-next">Next</a>
                <?php } ?>
            </div>
        </div>

        <!-- 글쓰기와 메인 페이지로 버튼 -->
        <div class="action-links">
            <a href="board.php" class="btn btn-primary">글쓰기</a>
            <a href="main.php" class="btn btn-secondary">메인 페이지로</a>
        </div>
    </div>
</body>
</html>