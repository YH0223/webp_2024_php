<!DOCTYPE html>
<?php
include 'check_session.php';
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>웹프로그래밍/글쓰기</title>
    <link rel="stylesheet" href="./css/base_style.css">
</head>
<body>
    <div class="form-container">
        <h1>글쓰기</h1>
        <form name="boards" method="post" action="adminwrite_proc.php" enctype="multipart/form-data">
            <div class="form-group">
                <label>아이디:</label>
                <p><?=$_SESSION['userid']; ?></p>
            </div>
            <div class="form-group">
                <label for="title">제목:</label>
                <input type="text" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">내용:</label>
                <textarea id="content" name="content" cols="70" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="img">이미지:</label>
                <input type="file" name="img" id="img" accept="image/jpeg, image/jpg, image/png, image/gif"onchange="previewImage(event)">
                 <!-- 미리보기 이미지 표시 영역 -->
                 <div class="image-preview" id="imagePreviewContainer">
                    <img id="imagePreview" src="#" alt="이미지 미리보기" style="display:none; max-width: 100px;">
                </div>
            </div>
            <div class="form-group">
                <input type="checkbox" name="notice" value="공지로 설정">공지로 설정
            </div>
            <div class="form-actions">
                <input type="reset" value="목록으로" class="button_reset" onclick="window.location.href='list.php';">
                <input type="submit" value="글쓰기">
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