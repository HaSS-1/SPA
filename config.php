<?php
    session_start();

    if (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = 'en';
    }

    else if (!isset($_Get['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
        if ($_GET['lang'] == "en") {
            $_SESSION['lang'] = $_GET['en'];
        }
        else if ($_GET['lang'] == "fr") {
            $_SESSION['lang'] = $_GET['fr'];
        }
            
            
    }
    
require_once 'configs/' . $_SESSION['lang'] . '.php';