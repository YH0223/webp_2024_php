<!DOCTYPE html>
<?php
include 'check_session.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글 수정</title>
    <link rel="stylesheet" href="./css/base_style.css">
</head>
<body>
    <?php
        include "db.php";
        $idx = $_REQUEST['idx'];
        $sql = "select * from board where idx = $idx";
        $res = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($res);
        // 글 작성자와 현재 세션의 사용자가 다르면 수정 불가
        if ($row['userid'] !== $_SESSION['userid']) {
            echo "<script>
                    alert('자신의 글만 수정할 수 있습니다.');
                    window.location.href = 'list.php'; // 목록 페이지로 리디렉션
                </script>";
            exit;
        }
    ?>

    <div class="form-container">
        <h1>글 수정</h1>
        <form name="update" method="post" action="update_proc.php" enctype="multipart/form-data">
            <input type="hidden" name="idx" value="<?=$idx?>">

            <div class="form-group">
                <label for="userid">아이디:</label>
                <input type="text" id="userid" value="<?=$_SESSION['userid']; ?>" readonly>
            </div>

            <div class="form-group">
                <label for="title">제목:</label>
                <input type="text" name="title" id="title" value="<?=$row['title']?>" required>
            </div>

            <div class="form-group">
                <label for="content">내용:</label>
                <textarea name="content" id="content" rows="10" required><?=$row['content']?></textarea>
            </div>
            
            <div class="form-group">
            <?php if (!empty($row['img_url'])): ?>
                    <div class="current-image">
                        <p>기존 이미지:</p>
                        <img src="<?=$row['img_url']?>" alt="기존 이미지" class="post-image" width="100px">
                        <input type="hidden" name="current_img_url" value="<?=$row['img_url']?>">
                    </div>
                <?php endif; ?>
                <label for="img">새 이미지:</label>
                <input type="file" name="img" id="img" accept="image/jpeg, image/jpg, image/png, image/gif"onchange="previewImage(event)">
                 <!-- 미리보기 이미지 표시 영역 -->
                 <div class="image-preview" id="imagePreviewContainer">
                    <img id="imagePreview" src="#" alt="이미지 미리보기" style="display:none; max-width: 100px;">
                </div>
            
            </div>

            <div class="form-actions">
                <button type="button" onclick="history.go(-1);">취소</button>
                <input type="submit" value="수정 완료">
            </div>
        </form>
    </div>
            
</body>
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                const imagePreview = document.getElementById('imagePreview');
                const imagePreviewContainer = document.getElementById('imagePreviewContainer');
                
                // 미리보기 이미지를 표시
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
                
                // 미리보기 영역을 보이게 함
                imagePreviewContainer.style.display = 'block';
            }

            // 파일 읽기
            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>

</html>