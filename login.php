<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="dlb3x6FinalProject.css">
        <link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1.custom/jquery-ui.min.css">
        
        <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
        <script src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
        
        <script>
            function fillAll(){
                if ($("#username").val() == '' || $("#password").val() == ''){
                    window.alert("All text fields must be filled");
                }
            }
            
            function getDefault(){
                $.get("defaultInfo.txt", {}, function(data){
                    window.alert(data);
                });
            }
           
        </script>
    </head>
    
    <body>
        <?php
            if ($error) {
                print "<div class=\"error\"><p>$error</p></div>\n";
            }
        ?>
        <form action="loginAction.php" method="POST" id="loginForm">
            <h1 class="centerThis">Login</h1>
            <input type="hidden" name="action" value="doLogin">
            <input type="text" class="textField" id="username" name="username" placeholder="Username" autofocus>
            <input type="password" class="textField" id="password" placeholder="Password" name="password">
            <button type="submit" class="textField pointyClicky" value="submit" onclick="fillAll()">Log in</button>
            <button class="textField pointyClicky" onclick="getDefault()">Default Login</button>
        </form>
    </body>
</html>