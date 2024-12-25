<!DOCTYPE html>
<?php
include 'check_session.php'; // 세션 확인
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>강의 계획서</title>
    <link rel="stylesheet" href="./css/base_style.css">
    <style>
        /* 테이블 스타일 */
        .form-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .divTable {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .divTableBody {
            font-family: Arial, sans-serif;
        }

        .divTableRow:nth-child(even) {
            background-color: #f2f2f2; /* 짝수 행 배경색 */
        }
        

        .divTableCell {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
            font-size: 14px;
        }

        .divTableCell:first-child {
            font-weight: bold;
            background-color: #d9edf7;
        }

        /* 테이블이 컨테이너에서 스크롤 가능하도록 설정 */
        .scroll-container {
            max-height: 500px; /* 최대 높이 설정 */
            overflow-y: auto;  /* 세로 스크롤바 추가 */
            margin-bottom: 20px;
        }

        /* 버튼 스타일 */
        .button-group {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .button-group:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h1>강의 계획서 및 실습 링크</h1>

    <!-- 스크롤 가능한 컨테이너 -->
    <div class="scroll-container">
    <div class="divTable">
        <div class="divTableBody">
        <div class="divTableRow">
        <div class="divTableCell">&nbsp;1주차</div>
        <div class="divTableCell">
        <p>학습목표:프로그램 및 웹 프로그래밍 이해<br />주요학습내용:웹의 구조 및 웹 프로그래밍 방법론</p>
        <p>-1주차 성찰일지 작성</p>
        </div>
        </div>
        <div class="divTableRow">
        <div class="divTableCell">2주차&nbsp;</div>
        <div class="divTableCell">
        <p>학습목표:HTML5 이해<br />주요학습내용:HTML 기초 및 HTML5 익히기</p>
        <a href="http://misserver.cafe24.com/~prog229/www/example2_240912"><p>2주차 실습 링크</p></a>
        </div>
        </div>
        <div class="divTableRow">
        <div class="divTableCell">3주차&nbsp;</div>
        <div class="divTableCell">
        <p>학습목표:HTML5 이해<br />주요학습내용:HTML5 엘리먼트의 이해<br />수업방법:문제중심학습법(PBL)</p>
        <a href="http://misserver.cafe24.com/~prog229/www/240919_example1"><p>3주차 실습 링크1</p></a>
        <a href="http://misserver.cafe24.com/~prog229/www/240919_example2"><p>3주차 실습 링크2</p></a>
        <a href="http://misserver.cafe24.com/~prog229/www/240919_example3"><p>3주차 실습 링크3</p></a>
        <a href="http://misserver.cafe24.com/~prog229/www/240919_homework"><p>3주차 과제</p></a>
        </div>
        </div>
        <div class="divTableRow">
        <div class="divTableCell">4주차&nbsp;</div>
        <div class="divTableCell">
        <p>학습목표:CSS 이해<br />주요학습내용:HTML 문서 구조와 CSS 선택자</p>
        <p>&nbsp;</p>
        <a href="http://misserver.cafe24.com/~prog229/www/240926_example1 "><p>4주차 실습 링크1</p></a>
        <a href="http://misserver.cafe24.com/~prog229/www/240926_example2"><p>4주차 실습 링크2</p></a>
        </div>
        </div>
        <div class="divTableRow">
        <div class="divTableCell">5주차&nbsp;</div>
        <div class="divTableCell">
        <p>학습목표:CSS 이해 - 개천절 온라인 보강<br />주요학습내용:CSS를 이용한 서식 및 디자인 적용</p>
        <a href="http://misserver.cafe24.com/~prog229/www/241003_example1"><p>5주차 실습 링크1</p></a>
        <a href="http://misserver.cafe24.com/~prog229/www/241003_example2"><p>5주차 실습 링크2</p></a>
        <a href="http://misserver.cafe24.com/~prog229/www/241003_example3"><p>5주차 실습 링크3</p></a>
        <a href="http://misserver.cafe24.com/~prog229/www/241003_example4"><p>5주차 실습 링크4</p></a>
        <a href="http://misserver.cafe24.com/~prog229/www/241003_example5"><p>5주차 실습 링크5</p></a>
        <a href="http://misserver.cafe24.com/~prog229/www/241003_example6"><p>5주차 실습 링크6</p></a>
        <a href="http://misserver.cafe24.com/~prog229/www/241003_example7"><p>5주차 실습 링크7</p></a>
        </div>
        </div>
        <div class="divTableRow">
        <div class="divTableCell">6주차&nbsp;</div>
        <div class="divTableCell">
        <p>학습목표:PHP 기초 이해<br />주요학습내용:PHP 기초, 변수, 연산자</p>
        <p>&nbsp;</p>
        <a href="http://misserver.cafe24.com/~prog229/www/241010_example1"><p>6주차 실습 링크1</p></a>
        <a href="http://misserver.cafe24.com/~prog229/www/241010_example2"><p>6주차 실습 링크2</p></a>
        <a href="http://misserver.cafe24.com/~prog229/www/241010_homework"><p>6주차 과제</p></a>
        </div>
        </div>
        <div class="divTableRow">
        <div class="divTableCell">7주차&nbsp;&nbsp;</div>
        <div class="divTableCell">
        <p>학습목표:PHP 제어문<br />주요학습내용:제어문의 이해, 조건문의 활용</p>
        <p>&nbsp;</p>
        <a href="http://misserver.cafe24.com/~prog229/www/241010_example2"><p>7주차 실습 링크1</p></a>
        <a href="http://misserver.cafe24.com/~prog229/proj_1017/241017_example1.php"><p>7주차 실습 링크2</p></a>
        </div>
        </div>
        <div class="divTableRow">
        <div class="divTableCell">8주차&nbsp;&nbsp;</div>
        <div class="divTableCell">
        <p>학습목표:PHP 제어문<br />주요학습내용:반복문의 활용</p>
        <p>&nbsp;</p>
        <a href="http://misserver.cafe24.com/~prog229/proj_1024/example1.php"><p>8주차 실습 링크</p></a>
        </div>
        </div>
        <div class="divTableRow">
        <div class="divTableCell">9주차&nbsp;&nbsp;</div>
        <div class="divTableCell">
        <p>학습목표:PHP 배열 및 함수<br />주요학습내용:배열의 이해, 함수 작성 및 내장 함수 사용</p>
        <p>&nbsp;</p>
        <a href="http://misserver.cafe24.com/~prog229/proj_1031/example1.php"><p>9주차 실습 링크1</p></a>
        <a href="http://misserver.cafe24.com/~prog229/proj_1031/example3.php"><p>9주차 실습 링크2</p></a>
        <a href="http://misserver.cafe24.com/~prog229/proj_1031/example2.php"><p>9주차 실습 링크3</p></a>
        <a href="http://misserver.cafe24.com/~prog229/proj_1031/homework.php"><p>9주차 과제</p></a>
        </div>
        </div>
        <div class="divTableRow">
        <div class="divTableCell">10주차&nbsp;&nbsp;</div>
        <div class="divTableCell">
        <p>학습목표:HTML 폼(form)<br />주요학습내용:HTML 폼 작성 및 폼을 이용한 데이터 전송 및 처리</p>
        <p>&nbsp;</p>
        <a href="http://misserver.cafe24.com/~prog229/proj_1107/example1.php"><p>10주차 실습 링크1</p></a>
        <a href="http://misserver.cafe24.com/~prog229/proj_1107/example2.php"><p>10주차 실습 링크2</p></a>
        <a href="http://misserver.cafe24.com/~prog229/proj_1107/example3.html"><p>10주차 실습 링크3</p></a>
        <a href="http://misserver.cafe24.com/~prog229/proj_1107/example_form.html"><p>10주차 실습 링크4</p></a>
        </div>
        </div>
        <div class="divTableRow">
        <div class="divTableCell">11주차&nbsp;&nbsp;</div>
        <div class="divTableCell">
        <p>학습목표:데이터베이스<br />주요학습내용:관계형 데이터베이스의 이해 및 데이터 조작을 위한 SQL 사용</p>
        <p>&nbsp;</p>
        <a href="http://misserver.cafe24.com/~prog229/proj_1114/example_form%20copy"><p>11주차 실습 링크1</p></a>
        <a href="http://misserver.cafe24.com/~prog229/proj_1114/example_form%20copy%202"><p>11주차 실습 링크2</p></a>
        <a href="http://misserver.cafe24.com/~prog229/proj_1107/example_form.html"><p>11주차 과제</p></a>
        </div>
        </div>
        <div class="divTableRow">
        <div class="divTableCell">12주차&nbsp;&nbsp;</div>
        <div class="divTableCell">
        <p>학습목표:PHP 데이터베이스 프로그래밍 - 논술고사일 온라인 수업<br />주요학습내용:PHP를 이용한 MySQL 데이터베이스 연동 방법</p>
        <p>&nbsp;</p>
        <a href="http://misserver.cafe24.com/~prog229/proj_1121/example1.php"><p>12주차 실습 링크1</p></a>
        <a href="http://misserver.cafe24.com/~prog229/proj_1121/register_form"><p>12주차 실습 링크2</p></a>
        <a href="http://misserver.cafe24.com/~prog229/proj_1121/login"><p>12주차 실습 링크3</p></a>
        </div>
        </div>
        <div class="divTableRow">
        <div class="divTableCell">13주차&nbsp;&nbsp;</div>
        <div class="divTableCell">
        <p>학습목표:프로젝트 I<br />주요학습내용:회원 관리, 웹 게시판 리스트, 글쓰기 구현</p>
        <p>&nbsp;</p>
        <a href="http://misserver.cafe24.com/~prog229/final_project/register_form"><p>13주차 실습 링크</p></a>
        </div>
        </div>
        <div class="divTableRow">
        <div class="divTableCell">14주차&nbsp;&nbsp;</div>
        <div class="divTableCell">
        <p>학습목표:프로젝트 II<br />주요학습내용:글보기, 글 수점 및 삭제 구현, 계시판 기능 완성</p>
        <p>&nbsp;</p>
        </div>
        </div>
        <div class="divTableRow">
        <div class="divTableCell">15주차&nbsp;&nbsp;</div>
        <div class="divTableCell">
        <p>학습목표:최종 평가<br />주요학습내용:최종 정리 및 평가</p>
        <p>&nbsp;</p>
        <p>최종프로젝트 : 본 사이트</p>
        </div>
        </div>
        <div class="divTableRow">
        <div class="divTableCell">16주차&nbsp;&nbsp;</div>
        <div class="divTableCell">&nbsp;-</div>
        </div>
        </div>
        </div>
    </div>

    <div class="register-link">
            <a href="main.php" class="btn btn-primary">메인 이동</a>
    </div>
</div>
</body>
</html>
