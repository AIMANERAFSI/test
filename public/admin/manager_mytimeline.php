
<?php require 'toop.php';
 $msgempty=''; $Time=''; $Work_name=''; $societe_name=''; $Lorem_ipsum='';    $msg=''; 


 if(isset($_GET['id']) && $_GET['id'] !='')
 {
   $id=mysqli_real_escape_string($connect,$_GET['id']); 
  
   $sql=mysqli_query($connect,"SELECT * FROM mytimeline where id='$id'");
   $check=mysqli_num_rows($sql);
   if($check>0)
   {
      $row=mysqli_fetch_assoc($sql);
      $Time=$row['Time'];
      $Work_name=$row['Work_name'];
      $societe_name=$row['societe_name'];
      $Lorem_ipsum=$row['Lorem_ipsum'];


      
   }else
   {
      header('location:MYTIMELINE.php');
      die();
   }
   
 }

/*ajouter modifier */


if(isset($_POST['submit'])) 
{

 $Time=mysqli_real_escape_string($connect,$_POST['Time']); 
 $Work_name=mysqli_real_escape_string($connect,$_POST['Work_name']); 
 $societe_name=mysqli_real_escape_string($connect,$_POST['societe_name']); 
 $Lorem_ipsum=mysqli_real_escape_string($connect,$_POST['Lorem_ipsum']); 

 if(isset($_GET['id']) && $_GET['id']!=''){  

 if( empty($Time) OR empty($Work_name)  OR empty($societe_name) OR empty($Lorem_ipsum) )
 {
    $msgempty=" Please enter all value details";

 }
 else
 {

  
    mysqli_query($connect," UPDATE mytimeline SET Time='$Time', Work_name='$Work_name', societe_name='$societe_name', Lorem_ipsum='$Lorem_ipsum' where id='$id' "  ) ;
    header('location:MYTIMELINE.php');
    die();
   
 }
}else
{

    if( empty($Time) OR empty($Work_name)  OR empty($societe_name) OR empty($Lorem_ipsum) )
 {
    $msgempty=" Please enter all value details";

 }else
 {

    mysqli_query($connect,"insert into mytimeline (Time,Work_name,societe_name,Lorem_ipsum) values('$Time','$Work_name','$societe_name','$Lorem_ipsum')   ");
    header('location:MYTIMELINE.php');
    die();
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
                           <div class="form-group"><label for="company" class=" form-control-label">Time</label>
                           <input type="text" value="<?php echo $Time ?>" name="Time" id="company" placeholder="Enter your Time " class="form-control"></div>

                           <div class="form-group"><label for="company" class=" form-control-label">Work_name</label>
                           <input type="text" value="<?php echo $Work_name ?>" name="Work_name" id="company" placeholder="Enter your  Work_name" class="form-control"></div>

                           <div class="form-group"><label for="company" class=" form-control-label">societe_name</label>
                           <input type="text" value="<?php echo $societe_name ?>" name="societe_name" id="company" placeholder="Enter your  societe_name" class="form-control"></div>

                           <div class="form-group"><label for="company" class=" form-control-label">Lorem_ipsum</label>
                           <input type="text" value="<?php echo $Lorem_ipsum ?>" name="Lorem_ipsum" id="company" placeholder="Enter your  Lorem_ipsum" class="form-control"></div>
                          
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