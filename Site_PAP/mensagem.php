
<html>
<body>
<?php

$con = mysqli_connect('localhost','root','','mensagem_pap');

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
}

$email= $_POST['email']; 
$subject = $_POST['subject'];  
$message = $_POST['message'];  

$sql = "INSERT INTO mensagem (email, assunto, mensagem) VALUES ( '$email', '$subject', '$message')";

$rs = mysqli_query($con, $sql);

if($rs) {
	echo 'Foi inserido na Base de Dados';
} else {
	echo 'Não foi inserido na Base de Dados';
}
	echo "<meta http-equiv='refresh' content='0; URL=index.html'/>" ;

mysqli_close($con);
?>




</body>
</html>