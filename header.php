<?php

if(!defined('ROOTURL'))
{
    define('ROOTURL' , 'http://127.0.0.1/derdejaarPHP/Eindopdracht/');
}


$header = '
        <header>
            <ul>
                <li><a href="' . ROOTURL . '?module=Home">Home</a></li>
                <li><a href="' . ROOTURL . '?module=lidWorden">Lid worden</a></li>
                <li><a href="' . ROOTURL . '?module=WelkeTeams">Welke Teams</a></li>
            </ul>
        </header>';

return $header;

?>