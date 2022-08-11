
<?php require 'toop.php';
 $msgempty=''; $Location=''; $Email=''; $Education=''; $Mobile='';   $msg=''; $Languages='';


 if(isset($_GET['id']) && $_GET['id'] !='')
 {
   $id=mysqli_real_escape_string($connect,$_GET['id']); 
  
   $sql=mysqli_query($connect,"SELECT * FROM contactmy where id='$id'");
   $check=mysqli_num_rows($sql);
   if($check>0)
   {
      $row=mysqli_fetch_assoc($sql);
      $Location=$row['Location'];
      $Email=$row['Email'];
      $Education=$row['Education'];
      $Mobile=$row['Mobile'];
      $Languages=$row['Languages'];
   }else
   {
      header('location:CONTACT.php');
      die();
   }
   
 }

/*ajouter modifier */


if(isset($_POST['submit']))    
{

 $Location=mysqli_real_escape_string($connect,$_POST['Location']); 
 $Email=mysqli_real_escape_string($connect,$_POST['Email']); 
 $Education=mysqli_real_escape_string($connect,$_POST['Education']); 
 $Mobile=mysqli_real_escape_string($connect,$_POST['Mobile']);
 $Languages=mysqli_real_escape_string($connect,$_POST['Languages']);  

 if( empty($Location) OR empty($Email) OR empty($Education) OR empty($Mobile) OR empty($Languages)  )
 {
    $msgempty=" Please enter all value details";

 }
 else
 {
    mysqli_query($connect," UPDATE contactmy SET   Location='$Location',Email='$Email',Education='$Education',
    Mobile='$Mobile', Languages='$Languages' where id='$id' "  ) ;
    header('location:CONTACT.php');
    die();
   
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
                           <div class="form-group"><label for="company" class=" form-control-label">Location</label>
                           <input type="text" value="<?php echo $Location ?>" name="Location" id="company" placeholder="Enter your Location " class="form-control"></div>

                           <div class="form-group"><label for="company" class=" form-control-label">Email</label>
                           <input type="email" value="<?php echo $Email ?>" name="Email" id="company" placeholder="Enter your  Email" class="form-control"></div>

                           <div class="form-group"><label for="company" class=" form-control-label">Education</label>
                           <input type="text" value="<?php echo $Education ?>" name="Education" id="company" placeholder="Enter your Education " class="form-control"></div>

                           <div class="form-group"><label for="company" class=" form-control-label">Mobile</label>
                           <input type="numero" value="<?php echo $Mobile ?>" name="Mobile" id="company" placeholder="Enter your Mobile" class="form-control"></div>
                            
                           <div class="form-group"><label for="company" class=" form-control-label">Languages</label>
                           <input type="text" value="<?php echo $Languages ?>" name="Languages" id="company" placeholder="Enter your Languages" class="form-control"></div>
                            

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