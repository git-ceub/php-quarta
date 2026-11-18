<?php

    session_start();
    session_destroy();
    header('Location:/exemplo/index.php');
    exit;

?>