<?php
    require_once ('core/core.php');
    unset($_SESSION['rol']);
    unset($_SESSION['app_id']);
    session_destroy();
    header('location:index.php');
    