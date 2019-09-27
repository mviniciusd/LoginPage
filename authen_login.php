<?php  
    require('db_connect.php');
    
    //Verificar se os campos "user_id" e "user_pass" não são nulas
    if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
        //Definindo variáveis guardando username e password
        $username = $_POST['user_id'];
        $password = $_POST['user_pass'];
        
        //selectionando os dados do utlizador inserido
        $query = "select username, password, morada from `users` where username='$username' and password='$password'";
        
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        $count = mysqli_num_rows($result);
        
        //Se os dados correspondem a algum utilizador na base de dados.
        if ($count == 1){
            
            echo "<div align='center'> Login efetuado com sucesso! Bem vindo: <b> $username </b> </div>";
        //Se não.    
        }else{
            
            echo "<div align='center'> Username ou password incorretos! <a href='login.php'> Tente novamente. </a> </div>";
        }
        }
?>

