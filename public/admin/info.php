<?php require 'toop.php';   ?>

<?php
$sql="SELECT * FROM info_admin order by id asc";
$query=mysqli_query($connect,$sql);   
?>


<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Info </h4>
                           
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th>img_admin</th>
                                       <th>first_ipsum</th>
                                       <th>name</th>
                                       <th>work_name</th>
                                       <th>Lorem_ipsum</th>
                                       <th>CV</th>
                                       <th></th>
                                      
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                   
                                   
                                    <tr>
                                    <?php    while($row=mysqli_fetch_assoc($query)) {       ?> 
                                       
                                        <td><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['img_admin'] ?>"></td>
                                       <td> <?php echo $row['first_ipsum']  ;?> </td>
                                       <td> <?php echo $row['name']  ;?> </td>
                                       <td> <?php echo $row['work_name']  ;?></td>
                                       <td> <?php echo $row['Lorem_ipsum']  ; ?></td> 
                                       <td> <?php echo $row['CV']  ; ?></td> 
                                       
                                       <td><?php 
                                       {
                                        echo"<span class='badge badge-edite'><a href='manager_info.php?type=Modifier&id=".$row['id']."'>Modifier</a>&nbsp;&nbsp;</span>&nbsp;";
                                       
                                       }

                                      
                                        
                                       
                                       ?></td>
                                       <?php } ?>
                                    </tr>
                                    
                                 
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