<?php  require 'admin/connection/db.php'; ?>



<?php
 $query="SELECT * FROM info_admin LIMIT 1";
 $info=mysqli_query($connect,$query);
?>


<?php
 $query1="SELECT * FROM about_me LIMIT 1";
 $about_my=mysqli_query($connect,$query1);
?>


<?php
 $query2="SELECT * FROM myskills ";
 $skilss=mysqli_query($connect,$query2);
?>


<?php
 $query3="SELECT * FROM mytimeline ";
 $mytimeline=mysqli_query($connect,$query3);
?>


<?php
 $query4="SELECT * FROM mywork ";
 $mywork=mysqli_query($connect,$query4);
?>


<?php
 $query5="SELECT * FROM contactmy ";
 $contactmy=mysqli_query($connect,$query5);
?>

