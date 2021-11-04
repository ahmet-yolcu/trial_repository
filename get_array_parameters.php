<?php
    $the_text = '&';
    for($i = 0;$i<=count($_GET)-1;$i++):
       $the_text.= array_keys($_GET)[$i].'='.$_GET[array_keys($_GET)[$i]];
       if($i!=count($_GET)-1):$the_text.='&';endif;
    endfor;
    echo $the_text;