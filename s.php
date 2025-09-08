<html><head>
    <title>set cookie</title></head>
    <body>
        <form method="post">
        enter username:<input type="text"name="username">
        <input type="submit" value="Set Cookie">
 </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["username"];
        setcookie("username",$name,time()+3600,"/");
    }
    ?>
       </body>
</html>