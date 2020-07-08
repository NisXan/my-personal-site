<?
if ($_POST['who'] == 'robot') {
  header('Refresh: 0; URL=https://www.nisxan.ru/#error');
} elseif ($_POST['mail'] == true) {
    $to = "nisxan@mail.ru";
    $tema = "ЗАЯВКА с сайта nisxan.ru";
    $message = "Имя: ".$_POST['name']."<br>";
      $message .= "E-mail: ".$_POST['mail']."<br>";
    $message .= "Номер телефона: ".$_POST['phone']."<br>";
    $message .= "Сообщение: ".$_POST['text']."<br>";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    mail($to, $tema, $message, $headers);    
};
?>