
<?php require 'toop.php';
 $msgempty='';  $msg='';  $Projects_completed='';
 $Years_experience=''; $Happy_clients=''; $Customer_reviews='';


 if(isset($_GET['id']) && $_GET['id'] !='')
 {
   $id=mysqli_real_escape_string($connect,$_GET['id']); 
   $sql=mysqli_query($connect,"SELECT * FROM about_me where id='$id'");
   $check=mysqli_num_rows($sql);
   if($check>0)
   {
      $row=mysqli_fetch_assoc($sql);
     
      $Projects_completed=$row['Projects_completed'];
      $Years_experience=$row['Years_experience'];
      $Happy_clients=$row['Happy_clients'];
      $Customer_reviews=$row['Customer_reviews'];
   }else
   {
      header('location:ABOUT.php');
      die();
   }
   
 }

/*ajouter modifier */


if(isset($_POST['submit']))
{


 $PROJECTS_COMPLETED=mysqli_real_escape_string($connect,$_POST['PROJECTS_COMPLETED']); 
 $YEARS_EXPERIENCE=mysqli_real_escape_string($connect,$_POST['YEARS_EXPERIENCE']); 
 $HAPPY_CLIENTS=mysqli_real_escape_string($connect,$_POST['HAPPY_CLIENTS']); 
 $CUSTOMER_REVIEWS=mysqli_real_escape_string($connect,$_POST['CUSTOMER_REVIEWS']); 
 
 
   if(  empty($PROJECTS_COMPLETED) OR empty($YEARS_EXPERIENCE) OR 
          empty($HAPPY_CLIENTS) OR empty($CUSTOMER_REVIEWS)  )
   {
        $msgempty=" Please enter all value details";
   }
   else
   {
    if(isset($_GET['id']) && $_GET['id'] !='')
       {
       
        mysqli_query($connect," UPDATE about_me SET   Projects_completed='$PROJECTS_COMPLETED', 
        Years_experience='$YEARS_EXPERIENCE', Happy_clients='$HAPPY_CLIENTS', Customer_reviews='$CUSTOMER_REVIEWS' where id='$id' "  ) ;
         header('location:ABOUT.php');
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
                        <div class="card-header"><strong>ABOUT ME</strong><small> Form</small></div>
                        <form  method="POST" >
                        <div class="card-body card-block">
                          

                           <div class="form-group"><label for="company" class=" form-control-label">PROJECTS_COMPLETED</label>
                           <input type="text" value="<?php echo $Projects_completed ?>" name="PROJECTS_COMPLETED" id="company" placeholder="Enter your PROJECTS_COMPLETED" class="form-control"></div>

                           <div class="form-group"><label for="company" class=" form-control-label">YEARS_EXPERIENCE</label>
                           <input type="text" value="<?php echo $Years_experience ?>" name="YEARS_EXPERIENCE" id="company" placeholder="Enter your YEARS_EXPERIENCE " class="form-control"></div>

                           <div class="form-group"><label for="company" class=" form-control-label">HAPPY_CLIENTS</label>
                           <input type="text" value="<?php echo $Happy_clients ?>" name="HAPPY_CLIENTS" id="company" placeholder="Enter your HAPPY_CLIENTS" class="form-control"></div>

                           <div class="form-group"><label for="company" class=" form-control-label">CUSTOMER_REVIEWS</label>
                           <input type="text" value="<?php echo $Customer_reviews ?>" name="CUSTOMER_REVIEWS" id="company" placeholder="Enter your CUSTOMER_REVIEWS" class="form-control"></div>
                          
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



<?php require 'footer.php';  ?>