<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nickname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $message = $_POST["content"];

    $to = "xamidchabaev04@gmail.com"; // Замените на ваш адрес электронной почты

    $subject = "Новая заявка с веб-формы";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    $email_content = "Имя: $name\n";
    $email_content .= "Телефон: $phone\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Страна: $country\n";
    $email_content .= "Сообщение: $message\n";

    if (mail($to, $subject, $email_content, $headers)) {
        echo "Спасибо! Ваша заявка успешно отправлена.";
    } else {
        echo "Что-то пошло не так. Пожалуйста, попробуйте еще раз.";
    }
}
?>
