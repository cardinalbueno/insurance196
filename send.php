<?php
      } else {
        $fio = $_POST['fio'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $phone = $_POST['phone'];
        $fio = htmlspecialchars($fio);
        $email = htmlspecialchars($email);
        $city = htmlspecialchars($city);
        $phone = htmlspecialchars($phone);
        $fio = urldecode($fio);
        $email = urldecode($email);
        $city = urldecode($city);
        $phone = urldecode($phone);
        $fio = trim($fio);
        $email = trim($email);
        $city = trim($city);
        $phone = trim($phone);

        //echo $fio;
        //echo "<br>";
        //echo $email;
        if (mail("sashackovsh@gmail.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: strahovka196@gmail.com \r\n"))
         {     echo "сообщение успешно отправлено";
        } else {
            echo "при отправке сообщения возникли ошибки";
}?>
