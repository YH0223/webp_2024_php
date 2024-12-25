<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>웹프로그래밍/로그인</title>
    <link rel="stylesheet" href="./css/base_style.css">
    <?php
    session_start();

    // 세션에서 로그인 여부 확인
    if (isset($_SESSION['userid'])) {
        // 로그인 상태라면 메인 페이지로 리다이렉트
        header("Location: main.php");
        exit();
    }
    ?>
</head>
<body>
    <div class="form-container">
        <h1>로그인</h1>
        <form name="login" method="post" action="login_proc.php">
            <div class="form-group">
                <label for="userid">아이디:</label>
                <input type="text" id="userid" name="userid">
            </div>
            <div class="form-group">
                <label for="passwd">비밀번호:</label>
                <input type="password" id="passwd" name="passwd">
            </div>
            <div class="form-actions">
                <input type="submit" value="로그인" >
            </div>
        </form>
        <div class="form-actions">
            <a href="register_form" class="btn btn-primary">
                <div>회원가입</div>
            </a>
        </div>
    </div>
</html>