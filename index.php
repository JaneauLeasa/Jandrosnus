<?php

    if(!defined('ROOTURL'))
    {
        define('ROOTURL' , 'http://127.0.0.1/derdejaarPHP/Eindopdracht/');
    }

    $sHtml = '';

    if(!empty($_GET['module']))
    {
        /* HTML ophalen uit de modulebestanden */

        // Module inladen
        $sPath = __DIR__ . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . $_GET['module'] .  DIRECTORY_SEPARATOR . 'main.php';
        // $sTeams = __DIR__ . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . $_GET['module'] .  DIRECTORY_SEPARATOR . $_GET['WelkeTeams'] . '&team1.php';

        if(!file_exists($sPath))
        {
            $sHtml .= 'File Does not exist';
        }       
    }
    else
    {
        $sHtml .= 'Error!, no module found';
    }

    
    $sHeader = require_once('header.php');
    $sFooter = require_once('footer.php');


    echo '<html>
    <head>
        <link rel="stylesheet" href="' . ROOTURL . 'styling.css">
    </head>
    <body id="achtergrond">
                ' . $sHeader . '
        <div class= "Logo">
            <img src="Logo.png" width="200px" height="150px">
        </div> ';
   
    if(isset($sPath)) {
        include $sPath;
    }

    echo $sFooter . '
    </body>
</html>';

?>