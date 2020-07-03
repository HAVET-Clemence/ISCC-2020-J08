<DOCTYPE! html>
<html>
<head>
<meta charset="utf-8"/>
<title>mini-site-routing</title>
</head>
<header>
    <nav>
        <a href = "http://localhost/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=1">Accueil</a>
        <a href = "http://localhost/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=2">Page 2</a>
        <a href = "http://localhost/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=3">Page 3</a>
    </nav>
</header>
<body>
<?php
foreach($_GET as $key => $value){
    
    if ($key == "page" && $value == 1){
        echo "<h1>Accueil !</h1>";}
    if ($key == "page" && $value == 2){
            echo "<h1>Page 2 !</h1>";}
    if ($key == "page" && $value == 3){
                echo "<h1>Page 3 !</h1>";
    }
    }

?>
</body>
</html>

