
<?php require 'toop.php';
 $msgempty=''; $pourcentage=''; $langage=''; $chiffre='';    $msg=''; 


 if(isset($_GET['id']) && $_GET['id'] !='')
 {
   $id=mysqli_real_escape_string($connect,$_GET['id']); 
  
   $sql=mysqli_query($connect,"SELECT * FROM myskills where id='$id'");
   $check=mysqli_num_rows($sql);
   if($check>0)
   {
      $row=mysqli_fetch_assoc($sql);
      $langage=$row['langage'];
      $pourcentage=$row['pourcentage'];
      $chiffre=$row['chiffre'];


      
   }else
   {
      header('location:skills.php');
      die();
   }
   
 }

/*ajouter modifier */


if(isset($_POST['submit']))
{

 $langage=mysqli_real_escape_string($connect,$_POST['langage']); 
 $pourcentage=mysqli_real_escape_string($connect,$_POST['pourcentage']);
 $chiffre=mysqli_real_escape_string($connect,$_POST['chiffre']);

   $checkskills=mysqli_query($connect,"SELECT * FROM myskills where langage='$langage' ");
   $checkskillsexisst=mysqli_num_rows($checkskills);
   if($checkskillsexisst>0){ $msg='Skills already exist';  }else{ 

 if(isset($_GET['id']) && $_GET['id']!=''){  

 if( empty($pourcentage) OR empty($langage)  OR empty($chiffre) )
 {
    $msgempty=" Please enter all value details";

 }
 else
 {
  
    mysqli_query($connect," UPDATE myskills SET   langage='$langage', pourcentage='$pourcentage' , chiffre='$chiffre' where id='$id' "  ) ;
    header('location:skills.php');
    die();
   
 }
}else
{

   if( empty($pourcentage) OR empty($langage) OR empty($chiffre) )
 {
    $msgempty=" Please enter all value details";

 }
 else
 {
   mysqli_query($connect,"insert into myskills (langage,pourcentage,chiffre) values('$langage','$pourcentage','$chiffre')   ");
   header('location:skills.php');
   die();

 }
   
   
}
}
}

?>  
 

<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Info</strong><small> Form</small></div>
                        <form  method="POST" enctype="multipart/form-data" >
                        <div class="card-body card-block">
                           <div class="form-group"><label for="company" class=" form-control-label">langage</label>
                           <input type="text" value="<?php echo $langage ?>" name="langage" id="company" placeholder="Enter your langage " class="form-control"></div>

                           <div class="form-group"><label for="company" class=" form-control-label">pourcentage</label>
                           <input type="text" value="<?php echo $pourcentage ?>" name="pourcentage" id="company" placeholder="Enter your  pourcentage" class="form-control"></div>

                           <div class="form-group"><label for="company" class=" form-control-label">chiffre</label>
                           <input type="text" value="<?php echo $chiffre ?>" name="chiffre" id="company" placeholder="Enter your  chiffre" class="form-control"></div>
                          
                           <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount" >Submit</span>
                           </button>
                        </div>
                        <div class="fieled_error">
               
                               <?php  echo $msgempty ?>
                               <?php  echo $msg ?>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>



<?php require 'footer.php';  ?>