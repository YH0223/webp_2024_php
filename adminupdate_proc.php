<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>수정</title>
</head>
<body>
    <?php
    include "check_session.php";
    include "db.php";

    // 업데이트할 게시물의 ID
    $idx = $_POST['idx'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $userid = $_SESSION['userid'];
    $ip = $_SERVER['REMOTE_ADDR'];

    // 이미지 업로드 처리
    $tmp_file = $_FILES['img']['tmp_name'];
    $filename = $_FILES['img']['name'];

    // 기존 이미지 URL 가져오기
    $sql = "SELECT img_url FROM boardadmin WHERE idx = $idx";
    $res = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($res);
    $old_img_url = $row['img_url'];

    if (is_uploaded_file($tmp_file)) {
        $up_path = $_SERVER['CONTEXT_DOCUMENT_ROOT'] . "/final_project/uploaded_file";

        // 고유 파일 이름 생성: userid_index_updated 형식
        $new_filename = "{$userid}_{$idx}_updated_" . basename($filename);
        $desfile = $up_path . "/" . $new_filename;

        // 파일 이동
        if (move_uploaded_file($tmp_file, $desfile)) {
            // 새 이미지 URL
            $img_url = $_SERVER['CONTEXT_PREFIX'] ."/final_project/uploaded_file/" . $new_filename;

            // 기존 이미지 삭제
            if ($old_img_url) {
                $old_file = $_SERVER['DOCUMENT_ROOT'] . $old_img_url;
                if (file_exists($old_file)) {
                    unlink($old_file); // 기존 파일 삭제
                }
            }
        } else {
            echo "<script>alert('파일 업로드에 실패했습니다.');</script>";
            $img_url = $old_img_url; // 업로드 실패 시 기존 이미지 유지
        }
    } else {
        // 새 이미지가 없으면 기존 이미지 사용
        $img_url = $old_img_url;
    }

    // 업데이트 쿼리 실행
    $sql = "UPDATE boardadmin SET title = '$title', content = '$content', img_url = '$img_url' WHERE idx = $idx";
    $res = mysqli_query($db, $sql);

    // 처리 결과
    if ($res) {
        echo "<script>
                alert('글 수정이 완료되었습니다.');
                window.location.href = 'adminpost.php?idx=$idx';
            </script>";
    } else {
        echo "<script>
                alert('글 수정 중 오류가 발생했습니다.');
            </script>";
    }
    ?>
    
</body>
<!--;-->
</html>