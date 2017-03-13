<?php
   $host = "localhost";
   $database = "stream";
   $user = "alpha";
   $pass = "snowsnow";
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>
