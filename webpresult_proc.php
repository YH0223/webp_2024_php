<?php
session_start();

// 세션에 'role'이 없거나 'admin'이 아닌 경우 항목 추가 불가
if (!isset($_SESSION['userid'])== 'admin') {
    echo "관리자만 항목을 추가할 수 있습니다.";
    exit;
}

// 데이터 처리 및 파일에 저장하는 예시
$title = isset($_POST['title']) ? $_POST['title'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';

// 데이터가 모두 입력되었는지 확인
if ($title && $description) {
    // 세션에 저장된 항목이 없다면 배열로 초기화
    if (!isset($_SESSION['items'])) {
        $_SESSION['items'] = [];
    }

    // 새로운 항목 추가
    $_SESSION['items'][] = ['title' => $title, 'description' => $description];

    // 항목을 출력하여 클라이언트에 반환
    foreach ($_SESSION['items'] as $item) {
        echo "<div class='course-item'>
                <div class='course-item-title'>{$item['title']}</div>
                <div class='course-item-description'>{$item['description']}</div>
              </div>";
    }
} else {
    echo "항목을 모두 입력해주세요.";
}
?>
