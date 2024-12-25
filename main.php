<!DOCTYPE html>
<?php
include 'check_session.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인페이지</title>
    <link rel="stylesheet" href="./css/base_style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin : 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
        }

        caption {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #2299a1;
            color: white;
            font-weight: bold;
            font-size: 18px;
            width:16.66%;
        }

        td {
            font-size: 16px;
            color: #333;
            border-bottom: 1px solid #ddd;
            width:16.66%;
        }

        .highlight-time {
            background-color: #cce5ff;
            transition: background-color 0.3s ease;
        }

        .highlight {
            background-color: #ffeb3b;
            transition: background-color 0.3s ease;
        }

        table tr:first-child th:first-child {
            border-top-left-radius: 10px;
        }

        table tr:first-child th:last-child {
            border-top-right-radius: 10px;
        }

        table tr:last-child td:first-child {
            border-bottom-left-radius: 10px;
        }

        table tr:last-child td:last-child {
            border-bottom-right-radius: 10px;
        }

        .hoverclass {
            background-color: #f1f1f1; 
            transition: background-color 0.3s ease;
        }
        .timetable-section {
            display: flex; /* 부모 요소에 flexbox 설정 */
            justify-content: center; /* 가로 중앙 정렬 */
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h1>메인 페이지</h1>
    <div class="user-info">
        <?php
        $name = $_SESSION['name'];
        $userid = $_SESSION['userid'];
        $ip = $_SESSION['myip'];
        ?>
        <p><strong>이름:</strong> <?= htmlspecialchars($name); ?></p>
        <p><strong>아이디:</strong> <?= htmlspecialchars($userid); ?></p>
        <p><strong>내 IP:</strong> <?= htmlspecialchars($ip); ?></p>
    </div>

    <div class="register-link">
        <a href="list.php" class="btn btn-primary">게시판 이동</a>
        <a href="logout.php" class="btn btn-danger">로그아웃</a>
    </div>

    <div class="register-link2">
        <a href="adminlist.php" class="btn btn-primary2">운영자 게시판</a>
        <a href="webpresult.php" class="btn btn-dange2">강의계획서 및 실습링크</a>
    </div>

    <!-- 여기에 두 번째 HTML 내용 삽입 -->
    <div class="timetable-section">
        <table border="1" id="testtable">
            <thead>
                <tr>
                    <th><strong>교시<br>(시간)</strong></th>
                    <th><strong>월</strong></th>
                    <th><strong>화</strong></th>
                    <th><strong>수</strong></th>
                    <th><strong>목</strong></th>
                    <th><strong>금</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p1">1교시<br>(9:00~<br>10:00)</td>
                    <td rowspan="8">공강</td>
                    <td></td>
                    <td></td>
                    <td rowspan="3" class="p1 p2 p3 thr">기계학습<br>제1실습관<br>207호<br>강경수</td>
                    <td rowspan="3" class="p1 p2 p3 fri">인공지능<br>제1실습관<br>410호<br>왕수현</td>
                </tr>
                <tr>
                    <td class="p2">2교시<br>(10:00~<br>11:00)</td>
                    <td rowspan="3" class="p2 p3 p4 tue">디지털공학<br>바울관<br>312호<br>김종국</td>
                    <td class="p2 wed">채플<br>대강당<br>김동혜</td>
                </tr>
                <tr>
                    <td class="p3">3교시<br>(11:00~<br>12:00)</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="p4">4교시<br>(12:00~<br>13:00)</td>
                    <td rowspan="2" class="p4 p5 wed">매직테니스<br>체육관<br>주경기장<br>임지헌</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="p5">5교시<br>(13:00~<br>14:00)</td>
                    <td rowspan="3" class="p5 p6 p7 tue">빅데이터<br>바울관<br>312호<br>김종국</td>
                    <td></td>
                    <td rowspan="3" class="p5 p6 p7 fri">리눅스<br>시스템<br>제1실습관<br>411호<br>김관우</td>
                </tr>
                <tr>
                    <td class="p6">6교시<br>(14:00~<br>15:00)</td>
                    <td></td>
                    <td rowspan="3" class="p6 p7 p8 thr">웹<br>프로그래밍<br>바울관<br>303호<br>최민석</td>
                </tr>
                <tr>
                    <td class="p7">7교시<br>(15:00~<br>16:00)</td>                
                    <td rowspan="2" class="p7 p8 wed">역사와문화<br>신학관<br>208호<br>김동혜</td>
                </tr>
                <tr>
                    <td class="p8">8교시<br>(17:00~<br>18:00)</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- 끝 -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function updateCurrentTime() {
        const currentTime = new Date();
        const hours = currentTime.getHours().toString().padStart(2, '0');
        const minutes = currentTime.getMinutes().toString().padStart(2, '0');
        const seconds = currentTime.getSeconds().toString().padStart(2, '0');
        const day = currentTime.getDay();
        let dayString = ["일", "월", "화", "수", "목", "금", "토"][day]; // 배열로 요일 처리
        const formattedTime = `${hours}:${minutes}:${seconds} (${dayString})`;
        $("#current-time").text(`현재 시각: ${formattedTime}`);
    }

    function highlightCurrentClass() {
        const currentTime = new Date();
        const currentDay = currentTime.getDay(); 
        const currentHour = currentTime.getHours();

        const timetable = [
            { startHour: 9, endHour: 10, row: 0, period: "p1" },
            { startHour: 10, endHour: 11, row: 1, period: "p2" },
            { startHour: 11, endHour: 12, row: 2, period: "p3" },
            { startHour: 12, endHour: 13, row: 3, period: "p4" },
            { startHour: 13, endHour: 14, row: 4, period: "p5" },
            { startHour: 14, endHour: 15, row: 5, period: "p6" },
            { startHour: 15, endHour: 16, row: 6, period: "p7" },
            { startHour: 17, endHour: 18, row: 7, period: "p8" }
        ];

        let targetRow = -1;
        let targetPeriod = "";
        
        $.each(timetable, function(index, timeSlot) {
            if (currentHour >= timeSlot.startHour && currentHour < timeSlot.endHour) {
                targetRow = timeSlot.row;
                targetPeriod = timeSlot.period; 
                return false; 
            }
        });
        console.debug(":",targetPeriod);
        const $table = $("#testtable");

        if (targetRow !== -1 && currentDay >= 1 && currentDay <= 5) {
            const $targetCell = $table.find(`.${targetPeriod}.${getDayClass(currentDay)}`); 
            if ($targetCell.length) {
                $targetCell.addClass("highlight-time"); 
            }
        }
        
        $table.on("mouseenter", "td", function() {
            const periodClass = $(this).attr("class").split(" ").find(cls => cls.startsWith("p"));
            if (periodClass) {
                $table.find(`.${periodClass}`).addClass("hoverclass");
            }
        }).on("mouseleave", "td", function() {
            const periodClass = $(this).attr("class").split(" ").find(cls => cls.startsWith("p"));
            if (periodClass) {
                $table.find(`.${periodClass}`).removeClass("hoverclass");
            }
        });
    }

    function getDayClass(day) {
        switch (day) {
            case 1: return 'mon';
            case 2: return 'tue';
            case 3: return 'wed';
            case 4: return 'thr';
            case 5: return 'fri';
            default: return '';
        }
    }

    $(document).ready(function() {
        updateCurrentTime(); 
        highlightCurrentClass();
        setInterval(updateCurrentTime, 1000); 
        setInterval(highlightCurrentClass, 60000); 
    });
</script>
</body>
</html>
