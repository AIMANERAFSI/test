
<?php require 'toop.php';
 $msgempty=''; $first_ipsum=''; $name=''; $work_name=''; $Lorem_ipsum=''; $image='';  $msg=''; $image_required='required';
 $CV_required='required';


 if(isset($_GET['id']) && $_GET['id'] !='')
 {
   $id=mysqli_real_escape_string($connect,$_GET['id']); 
  
   $sql=mysqli_query($connect,"SELECT * FROM info_admin where id='$id'");
   $check=mysqli_num_rows($sql);
   if($check>0)
   {
      $row=mysqli_fetch_assoc($sql);
      $first_ipsum=$row['first_ipsum'];
      $name=$row['name'];
      $work_name=$row['work_name'];
      $Lorem_ipsum=$row['Lorem_ipsum'];
      $image=$row['img_admin'];
   }else
   {
      header('location:info.php');
      die();
   }
   
 }

/*ajouter modifier */


if(isset($_POST['submit']))
{

 $first_ipsum=mysqli_real_escape_string($connect,$_POST['first_ipsum']); 
 $name=mysqli_real_escape_string($connect,$_POST['name']); 
 $work_name=mysqli_real_escape_string($connect,$_POST['work_name']); 
 $Lorem_ipsum=mysqli_real_escape_string($connect,$_POST['Lorem_ipsum']); 
 $sql=mysqli_query($connect,"SELECT * from info_admin where id='$id'");
 $check=mysqli_num_rows($sql);

 if( empty($first_ipsum) OR empty($name) OR empty($work_name) OR empty($Lorem_ipsum) OR empty($_FILES['image']['type']) OR empty($_FILES['CV']['type'])  )
 {
    $msgempty=" Please enter all value details";

 }elseif($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg' ) {
    $msg="Please select only png,jpg and jpeg  image formate";

 }else
 {
    $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);	
   $CV=rand(111111111,999999999).'_'.$_FILES['CV']['name'];
	move_uploaded_file($_FILES['CV']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$CV);	
    mysqli_query($connect," UPDATE info_admin SET   first_ipsum='$first_ipsum', name='$name', work_name='$work_name', Lorem_ipsum='$Lorem_ipsum', img_admin='$image', CV='$CV' where id='$id' "  ) ;
    header('location:info.php');
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
                           <div class="form-group"><label for="company" class=" form-control-label">first_ipsum</label>
                           <input type="text" value="<?php echo $first_ipsum ?>" name="first_ipsum" id="company" placeholder="Enter your first_ipsum " class="form-control"></div>

                           <div class="form-group"><label for="company" class=" form-control-label">name</label>
                           <input type="text" value="<?php echo $name ?>" name="name" id="company" placeholder="Enter your  name" class="form-control"></div>

                           <div class="form-group"><label for="company" class=" form-control-label">work_name</label>
                           <input type="text" value="<?php echo $work_name ?>" name="work_name" id="company" placeholder="Enter your work_name " class="form-control"></div>

                           <div class="form-group"><label for="company" class=" form-control-label">Lorem_ipsum</label>
                           <input type="text" value="<?php echo $Lorem_ipsum ?>" name="Lorem_ipsum" id="company" placeholder="Enter your Lorem_ipsum" class="form-control"></div>

                           <div class="form-group">
									<label for="categories" class=" form-control-label">CV.pdf</label>
									<input type="file" name="CV" class="form-control" <?php echo  $CV_required?>>
						         </div>
                             
                           <div class="form-group">
									<label for="categories" class=" form-control-label">Image (408*612)</label>
									<input type="file" name="image" class="form-control" <?php echo  $image_required?>>
						         </div>
                          
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