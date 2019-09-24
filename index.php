<?php 
    include('login.php');
    if(isset($_SESSION['login_user'])){
        header('location: profile.php');
    }
?>
<html>
    <head>
        
    </head>
    <body>
        <div>
        <form action="" method="POST">
            <p>
                <label> Username: </label>
                <input type="text" name="username" id="name" placeholder="username"/>
            </p>
            <p>
                <label> Password: </label>
                <input type="password" name="password" id="password" placeholder="**********"/>
            </p>
            <p>
                <input type="submit" name="submit" value="login"/>
            </p>
            <span> <?php echo $error; ?> </span>
        </form>
        </div>
    </body>
</html>