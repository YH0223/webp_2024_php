<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'check_session.php'; // 세션 확인
    include 'db.php'; // DB 연결

    // 삭제할 글의 idx 값을 받음
    $idx = $_REQUEST['idx'];

    // 삭제 확인 여부 확인
    if (isset($_REQUEST['confirm']) && $_REQUEST['confirm'] == 'yes') {
        // 삭제할 게시물의 이미지 URL 가져오기
        $sql = "SELECT img_url FROM board WHERE idx = $idx";
        $res = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($res);

        // 이미지 URL 추출
        $img_url = $row['img_url'];

        // 이미지 파일 삭제 처리
        if ($img_url) {
            $file_path = $_SERVER['CONTEXT_DOCUMENT_ROOT'] . $img_url; // 실제 서버 경로로 변환
            if (file_exists($file_path)) {
                unlink($file_path); // 이미지 파일 삭제
            }
        }

        // SQL DELETE 쿼리
        $sql = "DELETE FROM board WHERE idx = $idx";
        
        // 쿼리 실행
        $res = mysqli_query($db, $sql);
        
        if ($res) {
            echo "<script>
                    alert('글이 삭제되었습니다.');
                    window.location.href = 'list.php'; // 삭제 후 목록 페이지로 이동
                </script>";
        } else {
            echo "<script>
                    alert('삭제 중 오류가 발생했습니다.');
                    history.back();
                </script>";
        }
    } else {
        echo "<script>
                alert('삭제가 취소되었습니다.');
                window.location.href = 'post.php?idx=$idx'; // 취소 시 상세 페이지로 이동
            </script>";
    }
    ?>
</body>
</html>
