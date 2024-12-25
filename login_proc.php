<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'db.php';
    session_start();

    // 입력값 확인
    if (empty($_REQUEST["userid"]) || empty($_REQUEST["passwd"])) {
        echo "<script>
                alert('아이디 또는 비밀번호를 입력하세요.');
                window.history.back(); // 이전 페이지로 돌아가기
            </script>";
        exit(); // 입력값이 없으면 더 이상 코드 실행하지 않음
    }

    // db 작업
    $userid = $_REQUEST["userid"];
    $passwd = $_REQUEST["passwd"];

    // 중복검사
    $checksql = "SELECT * FROM user WHERE userid = '$userid' AND passwd = PASSWORD('$passwd')";
    $res = mysqli_query($db, $checksql);
    $row = mysqli_fetch_array($res);

    // URL
    $url = 'main.php';
    $ip = $_SERVER['REMOTE_ADDR'];

    if ($row) {
        // 로그인 성공
        $_SESSION["userid"] = $row["userid"];
        $_SESSION['name'] = $row['name'];
        $_SESSION['myip'] = $ip;
        echo "<script>
            alert('{$_SESSION['name']}님 환영합니다.');
            window.location.href = '$url';
        </script>";
        exit(); // 추가적인 PHP 코드 실행 방지
    } else {
        // 로그인 실패
        echo "<script>
                alert('아이디 혹은 비밀번호가 틀렸습니다.');
                window.history.back(); // 이전 페이지로 돌아가기
            </script>";
        exit();
    }
    ?>
</body>
</html>
