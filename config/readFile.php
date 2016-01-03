<?php
	$fileName = $_GET['fileName'];
       $content = file_get_contents($fileName);
        if($content)
        {
            echo $content;
        }
        else{
            echo "";
        }  
     
            
?>					