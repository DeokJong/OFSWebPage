<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 폼 데이터 수신
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // 여기에서 데이터를 저장하거나 다른 작업을 수행할 수 있습니다.
    // 예를 들어, 데이터베이스에 저장하거나 이메일로 전송할 수 있습니다.

    // 예제: 저장된 데이터를 파일에 추가
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    $file = 'form_data.txt';

    // 파일에 데이터를 추가로 저장
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // 간단한 확인 메시지 출력
    echo "Data saved successfully.";
} else {
    // 폼이 제출되지 않은 경우 에러 메시지 출력
    echo "Error: Form not submitted.";
}
?>