<?php
session_start();

// 세션에 로그인 정보가 없으면 JavaScript를 통해 경고창을 띄우고 리다이렉트
if (!isset($_SESSION['userid'])) {
    echo "<script>
        alert('로그인이 필요합니다.');
        window.location.href = 'login.php';
    </script>";
    exit();
}

// 로그인 상태라면 페이지 내용을 표시
?>