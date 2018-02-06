<HTML>
<HEAD>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<TITLE>Berufe</TITLE>
</HEAD>
<BODY BGCOLOR="#fff" TEXT="#000000" LINK="#0000ff" VLINK="#0000AA">



<?php
include_once 'header.php';
	include("funktionen.php");
	db_connect("stellenboerse");
?>


             <div class='contentEditor'>
                 <center>
<?php   
	$tabellen[0][0] = "tbl_benutzer";
    $tabellen[4][0] = "tbl_unternehmen"; $tabellen[4][1] = "1,5";
	
	$sort = "ORDER BY user_uid";

       
	maske($tabellen,$sort);
    
?>
       </center>          
    </div>

</BODY>
</HTML>