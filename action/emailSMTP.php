<?php
require '../phpmailer/class.phpmailer.php';
require '../phpmailer/PHPMailerAutoload.php';

if (!isset($_POST['msg'])) {
    ?>
    <script language="JavaScript">
        alert('Falha ao enviar sua mensagem!!');
        location.href = 'http://iuvenesdei.com.br/';
    </script>
    <?php
} else if (($_POST['msg']) != '') {

    $mail = new PHPMailer();
    $mail->setLanguage('pt');

    $from = 'contato@iuvenesdei.com.br';
    $fromName = $_POST['nome'];

    $host = 'mail.iuvenesdei.com.br';
    $username = 'contato@iuvenesdei.com.br';
    $password = 'iuvenesdei@!92';
    $port = 587;
    $secure = false;

    $mail->isSMTP();
    $mail->Host = $host;
    $mail->SMTPAuth = true;
    $mail->Username = $username;
    $mail->Password = $password;
    $mail->Port = $port;
    $mail->SMTPSecure = false;

    $mail->From = $from;
    $mail->FromName = $fromName;
    $mail->addReplyTo($from, $fromName);

//destinatário
    $mail->addAddress('alineribeirocastro@hotmail.com', 'Aline Ribeiro');
    $mail->addCC('jairzinho_1806@outlook.com', 'Jair');
    $mail->addCC('vinicius.eng.comp92@gmail.com', 'Vinicius');

    $mail->isHTML(true);
    $mail->CharSet = 'utf-8';
    $mail->WordWrap = 70;

    $mail->Subject = "Pedido de Oração";
//$mail->Body = "{$_POST['msg']}";
    $mail->Body = "{$_POST['msg']}<br><br>"
            . "<label>Enviado por: </label> {$_POST['nome']}<br>"
            . "<label>Email: </label> {$_POST['email']}";

//$send = $mail->send();

    if ($mail->send()) {
        ?>
        <script language="JavaScript">
            alert('<?php echo utf8_decode($fromName) . " Sua mensagem foi enviada com sucesso!!" ?>');
            location.href = 'http://iuvenesdei.com.br/';
        </script>
        <?php
    } else {
        echo 'Mensagem n&atilde;o enviada <br>' . utf8_decode($mail->ErrorInfo) . "<br><br><a href='http://iuvenesdei.com.br/'>voltar</a>";
    }
}
//if($mail->send()){
//    echo 'E-mail enviado com sucesso!';
//}else{
//    echo 'Erro: '.$mail->ErrorInfo;
//}
