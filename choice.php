<?php
    if ($_POST['hijabi'] == "hijabi") {
        header("Location: hijabi.php");
      
    } elseif ($_POST['hijabi'] == "nohijabi") {
        header("Location: nohijabi.php");
     
    }

?>
