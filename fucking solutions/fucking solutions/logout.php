<?php
session_start();


session_unset();

if(session_destroy()){
    header("location: /php/index.html");
    die();
}
else
    echo "failed to SignOut";

?>