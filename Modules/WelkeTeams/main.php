<?php
//http://127.0.0.1/derdejaarPHP/Eindopdracht/?module=WelkeTeams&team=o19-1
$sTeamsOverzicht ='';



if (isset($_GET['team']) && !empty($_GET['team'])) { 
    $team = $_GET['team'];
    $sPath = __DIR__ .  DIRECTORY_SEPARATOR . $team . '.php';

    if(file_exists($sPath))
    {
        $sTeamsOverzicht = include($sPath);
    }       

}
$Teams = '<div class="welkeTeams"> 
<p><strong>Welke teams hebben wij?</strong><br><br>Wij hebben in totaal 5 teams op de club.<br>Dit zijn: 
de  
<a href="'. ROOTURL .'?module=WelkeTeams&team=o19-1">Jo19-1</a>, 
<a href="'. ROOTURL .'?module=WelkeTeams&team=o19-2">Jo19-2</a>, 
<a href="'. ROOTURL .'?module=WelkeTeams&team=Zaterdag1">Zaterdag 1</a>, 
<a href="'. ROOTURL .'?module=WelkeTeams&team=Zaterdag2">Zaterdag 2</a>, 
en <a href="'. ROOTURL .'?module=WelkeTeams&team=Zaterdag3">Zaterdag 3</a>! 
<br>Het aller vreemdste is dat Zaterdag 3 met als aanvoerder Janeau Leasa in de hoogste klasse speelt, dat is de 4e divisie. Ze staan op het moment op de 1e plek met 6 punten boven de 2e plek.<br></p>
</div>';



echo $Teams . $sTeamsOverzicht;


?>