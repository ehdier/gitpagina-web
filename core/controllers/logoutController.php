<?php
    require_once('core/core.php');
    unset($_SESSION['app_id']);
    header('location:index.php');
    