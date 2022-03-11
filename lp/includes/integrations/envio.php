<?
include("class.phpmailer.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$saida = "/obrigado.php";
$mail = new PHPMailer();
$mail->IsSMTP(); 
$mail->Host = "mail.targetmais.com.br";
$mail->SMTPAuth = true; 
$mail->Username = "formulario@targetmais.com.br"; 
$mail->Password = "Targetmais001!"; 
$mail->From = $email;
$mail->FromName = $nome;
$mail->AddAddress("leads.clientes@targetmais.com.br");
$mail->AddReplyTo($email);

$body .= "<strong>Nome:</strong> " . $_POST["nome"] . "<br>";
$body .= "<strong>Email:</strong> " . $_POST["email"] . "<br>";
$body .= "<strong>Celular/Telefone:</strong> " . $_POST["telefone"] . "<br>";
$body .= "<strong>Mensagem:</strong> " . $_POST["mensagem"];

$mail->WordWrap = 50; 
$mail->IsHTML(true); 
$mail->Subject = "Novo lead - LP Target Mais";
$mail->Body = $body;
if(!$mail->Send()) {
echo "A mensagem não pode ser enviada";
echo "Erro: " . $mail->ErrorInfo;
exit;}
Header("location: $saida");
?> 
