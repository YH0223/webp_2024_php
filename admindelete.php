<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글 삭제</title>
    <link rel="stylesheet" href="./css/base_style.css">
</head>
<body>
    <?php
    include 'check_session.php'; // 세션 확인
    include 'db.php'; // DB 연결

    $idx = $_REQUEST['idx']; // 삭제할 글의 idx를 받음

    // 글 정보 가져오기
    $sql = "SELECT * FROM boardadmin WHERE idx = $idx";
    $res = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($res);
    // 글 작성자와 현재 세션의 사용자가 다르면 수정 불가
    if ($row['userid'] !== $_SESSION['userid']) {
        echo "<script>
                alert('자신의 글만 삭제할 수 있습니다.');
                window.location.href = 'adminlist.php'; // 목록 페이지로 리디렉션
            </script>";
        exit;
    }
    ?>
     <div class="delete-container">
        <h1>글 삭제</h1>
        <p>정말로 삭제하시겠습니까?</p>
        
        <div class="content">
            <p><strong>제목:</strong> <?=$row['title']?></p>
            <p><strong>작성자:</strong> <?=$row['userid']?></p>
        </div>

        <!-- 확인 버튼과 취소 버튼 -->
        <form method="post" action="admindelete_proc.php">
            <input type="hidden" name="idx" value="<?=$idx?>">
            <div class="buttons">
                <button type="submit" name="confirm" value="yes" class="button_delete">삭제</button>
                <button type="button" onclick="history.back();" class="button_xde">취소</button>
            </div>
        </form>
    </div>

</body>
</html>