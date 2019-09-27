<!DOCTYPE html >
<html>
    <head>
        
        <title>Iniciar Sessão</title>
        
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body id="body_bg">
        
        <div align="center">
            
            <h2>Inicicar sessão</h2>
            
            <form id="login-form" method="post" action="authen_login.php" >
                <p>
                    <label for="user_id"> <b> Username: </b></label>
                    <input type="text" name="user_id" id="user_id" placeholder="Username">
                </p> 
                
                <p>
                    <label for="user_pass"> <b> Password: </b></label>
                    <input type="password" name="user_pass" id="user_pass" placeholder="**********"></input>
                </p>
                
                <p>
                    <input type="submit" value="Login" />
                    <input type="reset" value="Limpar"/>
                </p>
            </form>
            
        </div>
        
    </body>
</html>