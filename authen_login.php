<?php  
 require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	

$username = $_POST['user_id'];
$password = $_POST['user_pass'];


$query = "select username, password, morada from `users` where username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){


echo "Login efetuado com sucesso! Bem vindo: <b> $username </b>";

}else{
echo "Username ou password incorretos! <a href='login.php'> Tente novamente. </a>";

}
}
?>

