
<?php require 'toop.php';
 $msgempty='';  $msg=''; 
 $src_github=''; $src_youtube='';   $img='';  $image_required='required';



 if(isset($_GET['id']) && $_GET['id'] !='')
 {
   $id=mysqli_real_escape_string($connect,$_GET['id']); 
   $sql=mysqli_query($connect,"SELECT * FROM mywork where id='$id'");
   $check=mysqli_num_rows($sql);
   if($check>0)
   {
      $row=mysqli_fetch_assoc($sql);

     
      $src_github=$row['src_github'];
      $src_youtube=$row['src_youtube'];
      $img=$row['img'];
     
   }else
   {
      header('location:PORTFOLIO.php');
      die();
   }
   
 }


/*ajouter modifier */


if(isset($_POST['submit']))
{

   
    $src_github=mysqli_real_escape_string($connect,$_POST['src_github']); 
    $src_youtube=mysqli_real_escape_string($connect,$_POST['src_youtube']); 



if(isset($_GET['id']) && $_GET['id'] !='')
{

    if(  empty($src_github) OR empty($src_youtube) OR empty($_FILES['image']['type'])  )
    {
       $msgempty=" Please enter all value details";
   
    }
    elseif($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg')
    {
       $msg="Please select only png,jpg and jpeg image formate";
   
    }
    else
     {
        $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);	
        mysqli_query($connect," UPDATE mywork SET    src_github='$src_github', src_youtube='$src_youtube', img='$image' where id='$id' "  ) ;
        header('location:PORTFOLIO.php');
        die();
       
     }


}
else
{
    
    if(empty($src_github) OR empty($src_youtube) OR empty($_FILES['image']['type'])  )
    {
       $msgempty=" Please enter all value detailss";
   
    }elseif($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg')
    {
       $msg="Please select only png,jpg and jpeg image formate";
   
    }
    else
    {
        $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);	
        mysqli_query($connect,"INSERT INTO mywork (src_github,src_youtube,img)
         values('$src_github','$src_youtube','$image')");
          header('location:PORTFOLIO.php');
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
                        <div class="card-header"><strong>MY PORTFOLIO</strong><small> Form</small></div>
                        <form  method="POST" enctype="multipart/form-data" >
                        <div class="card-body card-block">
                           
                           <div class="form-group"><label for="company" class=" form-control-label">src_github</label>
                           <input type="text" value="<?php echo $src_github ?>" name="src_github" id="company" placeholder="Enter your src_github" class="form-control"></div>

                           <div class="form-group"><label for="company" class=" form-control-label">src_youtube</label>
                           <input type="text" value="<?php echo $src_youtube ?>" name="src_youtube" id="company" placeholder="Enter your src_youtube" class="form-control"></div>

                           <div class="form-group">
						   <label for="categories" class=" form-control-label">Image (700*466)</label>
						   <input type="file" name="image" class="form-control" <?php echo  $image_required?>></br>

                           
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