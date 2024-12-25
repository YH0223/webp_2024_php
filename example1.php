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
session_start();
$_SESSION['test'] = 'Session Test';
echo $_SESSION['test']; // 출력: Session Test
?>
</body>
</html>