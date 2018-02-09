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
    
    $uid = $_SESSION["u_id"];
                     
                     if ($uid == 1){
                         	$sort = "ORDER BY user_uid ";
                     }else{	$sort = 'WHERE user_id = "'.$uid.'" ORDER BY user_uid ';}
                                          
                     


       
	maske($tabellen,$sort);
    
?>
       </center>          
    </div>

</BODY>
</HTML>