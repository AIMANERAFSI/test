<?php

use function PHPSTORM_META\type;

 require 'toop.php';   ?>


<?php


if(isset($_GET['type'])  && $_GET['type']!='')
{

    $type=mysqli_real_escape_string($connect,$_GET['type']); 
    if($type=='delet')
   {
   $id=mysqli_real_escape_string($connect,$_GET['id']);
   $delet_mytimeline="DELETE  FROM  mywork   where  id='$id'LIMIT 1 "; 
   $query=mysqli_query($connect,$delet_mytimeline);   

   }
}

?>

<?php
$sql="SELECT * FROM mywork order by id asc";
$query=mysqli_query($connect,$sql);   
?>


<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">MY PORTFOLIO </h4>
                           <h4 class="box-link" ><a href="manager_portfolio.php">+ PORTFOLIO</a> </h4>
                           
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th>id</th>
                                       <th>img</th>
                                     
                                       <th>src_github</th>
                                       <th>src_youtube</th>
                                       
                                       <th></th>
                                      
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                   
                                   
                                    <tr>
                                    <?php    while($row=mysqli_fetch_assoc($query)) {       ?> 
                                       
                                        
                                       <td> <?php echo $row['id']  ;?> </td>
                                       <td><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['img'] ?>"></td>
                                       
                                       <td> <?php echo $row['src_github']  ;?></td>
                                       <td> <?php echo $row['src_youtube']  ;?></td>
                                       
                                       <td><?php 
                                       
                                         
                                        echo"<span class='badge badge-edite'><a href='manager_portfolio.php?id=".$row['id']."'>Modifier</a>&nbsp;&nbsp;</span>&nbsp;";
                                        echo"<span class='badge badge-delet'><a href='?type=delet&id=".$row['id']."'>Supprimer</a>&nbsp;&nbsp;</span>";
                                       
                                       
                                       ?></td>
                                       
                                    </tr>
                                    <?php } ?>
                                 
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>













<?php require 'footer.php';   ?>