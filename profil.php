<?php
    include_once 'includes/dbh_inc.php';
    include_once 'header.php';

    $uid = $_SESSION["u_id"];
    $sql = "SELECT * FROM tbl_benutzer WHERE user_id='$uid'";

    $result = $db->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo"
        <div class='content'>
        <center>
            <img src='../uploads/userpic/". $row["user_pic"]. "' alt='Avatar' style='width:100%'>
            <form action='upload.php' method='post' enctype='multipart/form-data'>
            <input type='file' name='fileToUpload' id='fileToUpload'>
            <input type='submit' value='Upload Avatar' name='submit'>
            </form>
            <h4><b>" . $row["user_first"]." ". $row["user_last"]. "</b></h4> 
            <p>" . $row["user_firm"]. "</p> 
            <h1><a style='font-size: 10px;' href='editor.php'>Profildaten bearbeiten</a></h1>
            <h1><a style='font-size: 10px;' href='newjob.php'>Neues Angebot erstellen</a></h1><br>
            </center>
        </div>
       "; 

    };
};
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mein Profil</title>
  </head>
  <body>
  
  </body>
</html>

<?php
    include_once 'header.php';
?>
