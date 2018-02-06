<?php
    include_once 'header.php';
?>

<section class="main-container">
      <div class="main-wrapper">
          <h2>Home</h2>
          <div class="content"></div>

          <?php 
          	include("funktionen.php");
              include_once 'includes/dbh_inc.php';
          	     db_connect("db-projekt");
                 $uid = $_SESSION["u_id"];
          /*
          //Das ist dafür da um die höchste ID herauszufinden.
          //Wird zur Zeit nicht verwendet.
          
                $highest_id = mysql_result(mysql_query("SELECT MAX(angebot_id) FROM tbl_angebote"), 0);
                $current_id= $highest_id;
            */
          
          $sql = "SELECT angebot_id, angebot_user_id, angebot_titel, angebot_beschreibung, angebot_position, angebot_fachbereich, angebot_beginn, angebot_url, angebot_pdf, user_id, user_firm, user_uid, user_pic  FROM tbl_stellenangebote INNER JOIN tbl_benutzer ON tbl_stellenangebote.angebot_user_id=tbl_benutzer.user_id";
          
          $result = $db->query($sql);

           if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { 
            echo"
        <center>
            <p><img src='../uploads/userpic/". $row["user_pic"]. "' alt='Avatar' style='width:10%'></>
            <p>Ersteller: " . $row["user_uid"]."</>
            <p>Unternehmen: " . $row["user_firm"]."</>
            <p>Titel: " . $row["angebot_titel"]."</>
            <p>Beschreibung: " . $row["angebot_beschreibung"]."</>
            <p>Position: " . $row["angebot_position"]."</>
            <p>Fachbereich: " . $row["angebot_fachbereich"]."</>
            <p>Beginn: " . $row["angebot_beginn"]."</><br><br>
            <object width='300' height='200' data=' ../uploads/pdf/pdf_files/".$row["angebot_pdf"]." '></object>
            <p><a target='_blank' href='".$row["angebot_url"]."'><img width='48' height='48' border='0' align='center'  src='../images/web.png'/></a>
            <a target='_blank' href='../uploads/pdf/pdf_files/".$row["angebot_pdf"]."'><img width='48' height='48' border='0' align='center'  src='../images/file-pdf.png'/></a></>
            <br><br><br>
            </center>
       "; 

    };
                           
};
            
          
          
          ?>
      </div>
    </section>
<?php
   // include_once 'footer.php';
?>
