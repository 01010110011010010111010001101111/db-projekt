<?php
    include_once 'header.php';
?>

<section class="main-container">
      <div class="main-wrapper">

          <?php 
          //Stellt die Verbindung zur Datenbank her
          	include("funktionen.php");
              include_once 'includes/dbh_inc.php';
          //Selektiert und sortiert Inhalte absteigend nach angebot_id.
          //Somit wird das zuletzt eingestellt Angebot zuerst angezeigt.
        
          $sql = "SELECT angebot_id, angebot_user_id, angebot_titel, angebot_beschreibung, angebot_position, angebot_fachbereich, angebot_beginn, angebot_url, angebot_pdf, user_id, user_firm, user_uid, user_pic  FROM tbl_stellenangebote INNER JOIN tbl_benutzer ON tbl_stellenangebote.angebot_user_id=tbl_benutzer.user_id ORDER BY `tbl_stellenangebote`.`angebot_id` DESC ";
          
          

          $result = $db->query($sql);

           if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                //Erzeugt eine Card für jede verfügbare Zeile in der Datenbank
            echo"
            <div class='content'>
        <center>
          <p><img src='../uploads/userpic/". $row["user_pic"]. "' alt='Avatar' style='width:40%'></>
          <p>Ersteller: " . $row["user_uid"]."<br>
          Unternehmen: " . $row["user_firm"]."<br>
          Titel: " . $row["angebot_titel"]."<br>
          Beschreibung: " . $row["angebot_beschreibung"]."<br>
          Position: " . $row["angebot_position"]."</><br>
          Fachbereich: " . $row["angebot_fachbereich"]."<br>
          Beginn: " . $row["angebot_beginn"]."</><br><br>
            <object width='80%' height='300' data=' ../uploads/pdf/pdf_files/".$row["angebot_pdf"]." '></object>
            <p><a target='_blank' href='".$row["angebot_url"]."'><img width='48' height='48' border='0' align='center'  src='../images/web.png'/></a>
            <a target='_blank' href='../uploads/pdf/pdf_files/".$row["angebot_pdf"]."'><img width='48' height='48' border='0' align='center'  src='../images/file-pdf.png'/></a></>
            
            </center>
       </div>

       "; 

    };
                           
};
         
            
          
          
          ?>
      </div>
    </section>

