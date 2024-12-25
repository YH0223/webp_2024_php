<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP SQL 연동</h1>
    <hr>

    <?php
    include 'db.php';
    //db작업
    
    $userid=$_REQUEST["userid"];
    $passwd=$_REQUEST["passwd"];
    $name=$_REQUEST["username"];
    $email=$_REQUEST["email"];

    
    if (($userid) == null || $passwd == null || $name == null || $email == null) {
        // 필수 항목 체크
    } else {
        $checksql = "SELECT * FROM user WHERE userid = '$userid'";
        $res = mysqli_query($db, $checksql);
        $check = mysqli_num_rows($res);
    
        if ($check > 0) {
            echo "<script>
                alert('이미 사용중인 아이디입니다.');
                window.location.href = 'register_form.html';
            </script>";
            exit(); // PHP 코드 실행 중단
        } else {
            $sql = "INSERT INTO user VALUES ('$userid', password('$passwd'), '$name', '$email', now());";
            $res = mysqli_query($db, $sql);
    
            if ($res) {
                echo "<script>
                    alert('회원가입 완료');
                    window.location.href = 'login.php';
                </script>";
                exit();
            } else {
                echo "<script>
                    alert('회원가입 실패');
                    window.location.href = 'register_form.html';
                </script>";
                exit();
            }
        }
    }
    
    
    ?>
</body>
</html>