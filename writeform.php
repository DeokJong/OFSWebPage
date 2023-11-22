<!DOCTYPE html>
<html>

<head>
    <title>JAVICE 자비스</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <?php
    // 폼 데이터 수신
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // 여기에서 데이터를 저장하거나 다른 작업을 수행할 수 있습니다.
    // 예를 들어, 데이터베이스에 저장하거나 이메일로 전송할 수 있습니다.

    // 예제: 저장된 데이터를 파일에 추가
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    $file = 'form_data.txt';
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // 간단한 확인 메시지 출력
    echo "Data saved successfully.";
    ?>

</body>

</html>