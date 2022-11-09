<?php
// we can use this content for any logout page...
session_start();

$_SESSION = array();

if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),'',time()-86400,'/');
}

session_destroy();

header('Location: index.php?logout=yes');

?>