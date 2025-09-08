<html>
    <head>
        <title>get cookie</title>
</head>
<body>
    <?php
    if(isset($_COOKIE["username"])){
        echo"hello".htmlspecialchars($_COOKIE["username"]);
    }
    ?>
</body>
    </html>