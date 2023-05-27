
    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';


    $mail = new PHPMailer(true);
    $mail-> CharSet = 'UTF-8';
    $mail-> setLanguage('ru','phpmailer/language/');
    $mail->IsHTML(true);


    // От кого письмо
    $mail->setForm('minikon2017@yandex.ru','Какой-то человек');
    // Кому отправить
    $mail->AddAddress('minikon2017@yandex.ru');
    // Тема письма
    $mail->Subject= 'Привет!Это письмо';


     // Тело письма
    $body = '<h1>Встречайте новое письмо!</h1>'

    if(trim(!empty($_POST['name']))){
        $body.='<p><strong>ФИО:</strong>' .$_POST['name']. '</p>';
    }
    if(trim(!empty($_POST['email']))){
        $body.='<p><strong>Почта:</strong>' .$_POST['email']. '</p>';
    }

    if(trim(!empty($_POST['hand']))){
        $body.='<p><strong>Город:</strong>' .$_POST['hand']. '</p>';
    }

    if(trim(!empty($_POST['message']))){
        $body.='<p><strong>Сообщение:</strong>' .$_POST['message']. '</p>';
    }

         // Прикрепить файл
         if(trim(!empty($_FILES['image']['tmp_name']))){
         // Путь загрузки файла
       $filePath = __DIR__ . "/files/" . $_FILES['image']['name'];
         // грузим файл
         if (copy($_FILES['image']['tmp_name'], $filePath)){
            $fileAttach = $filePath;
            
            $body.='<p><strong>Фото в приложении</strong>';
            $mail->AddAttachment($fileAttach);
             }
         }

         $mail->Body =$body;
          // отправляем

          if (!$mail->send()){
            $message='Ошибка';
          }else{
            $message ='Данные отправлены!'
          }


          $response = ['message' => $message];
          header('Content-type: application/json');
          echo json_encode($response);

          ?>