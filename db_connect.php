<?php
    //Fazendo connecção à base de dados. Nome do servidor (localhost), Nome do utilizador (root), e password ("sem password").
    $connection = mysqli_connect('localhost', 'root', '');
    
    //Verificando se a connceção foi efetuada 
    if (!$connection){
        
        die("falha com à conncecção à base de dados." . mysqli_error($connection));
    }
    
    $select_db = mysqli_select_db($connection, 'login');
    
    //Verificando se a base de dados foi selecionada/existe.
    if (!$select_db){
        
        die("Falha ao seleccionar a base de dados." . mysqli_error($connection));
    }

