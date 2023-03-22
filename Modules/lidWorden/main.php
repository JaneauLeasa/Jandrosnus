<?php

if(!empty($_GET["formsent"])) {
    $lidWorden = 'Formulier succesvol opgestuurd!';
}
else{
    $lidWorden = ' 
<div class="lidWorden">
  <form action="' . ROOTURL . '">
    <input type="hidden" name="module" value="lidWorden">
    <input type="hidden" name="formsent" value="1">

    <label for="fname">Voornaam</label>
    <input type="text" id="fname" name="firstname" placeholder="Jouw naam"><br>

    <label for="lname">Achternaam</label>
    <input type="text" id="lname" name="lastname" placeholder="Jouw achternaam"><br>

    <label for="land">Land</label>
    <select id="land" name="land">
      <option value="nederland">Nederland</option>
      <option value="belgië">België</option>
      <option value="duitsland">Duitsland</option>
      <option value="nigeria">Nigeria</option>
    </select><br>

    <label for="subject">Jouw reden om je aan te melden bij deze club</label><br>
    <textarea id="subject" name="subject" placeholder="Geef jouw reden!" style="height:200px"></textarea>

    <input type="submit" value="Verstuur"><br>
  </form>
</div>';
}

echo $lidWorden;
?>