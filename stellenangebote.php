<?php include_once 'header.php'; ?>
<HTML>
<HEAD>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<TITLE>Berufe</TITLE>
</HEAD>
<BODY BGCOLOR="#fff" TEXT="#000000" LINK="#0000ff" VLINK="#0000AA">

<?php
	include("funktionen.php");
	db_connect("stellenboerse");
	?>
             <div class='contentEditor'>    
    <?php
	$tabellen[0][0] = "tbl_stellenangebote";
	$tabellen[1][0] = "tbl_benutzer";	$tabellen[1][1] = "8";
    $tabellen[2][0] = "tbl_berufe";		$tabellen[2][1] = "1";
	$tabellen[3][0] = "tbl_stellenart";	$tabellen[3][1] = "1";
    $tabellen[4][0] = "tbl_unternehmen"; $tabellen[4][1] = "1,5";
	
                 
                     $uid = $_SESSION["u_id"];
                     
                     if ($uid == 1){
                         	$sort = "ORDER BY angebot_beschreibung ";
                     }else{	$sort = 'WHERE angebot_user_id = "'.$uid.'" ORDER BY angebot_beschreibung ';}
                                          
            
	maske($tabellen,$sort);
                 
?>

    </div>    
    
</BODY>
</HTML>
