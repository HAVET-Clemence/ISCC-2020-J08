<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link type="text/css" rel="stylesheet" href="vitrine.css" />
        <title>vitrine</title>
    </head>

    <body>

<?php




if ($_GET ["page"]=="accueil"){
    include ("vitrine-accueil.php");
}
if ($_GET ["page"]=="programme"){
    include ("vitrine-programme.php");
}
if ($_GET ["page"]=="contacts"){
    include ("vitrine-contacts.php");
}
if ($_GET ["page"]=="contact-form"){
    include ("contact-form.php");
}
if(!$_GET["page"]){
    include ("404.php");
}





?>

 
    </body>

</html>