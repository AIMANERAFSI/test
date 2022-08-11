<?php require 'toop.php';   ?>

<?php
$sql="SELECT * FROM contactmy order by id asc";
$query=mysqli_query($connect,$sql);   
?>


<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">CONTACT </h4>
                           
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th>id</th>
                                       <th>Location	</th>
                                       <th>Email</th>
                                       <th>Education</th>
                                       <th>Mobile</th>
                                       <th>Languages</th>
                                       <th></th>
                                      
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                   
                                   
                                    <tr>
                                    <?php    while($row=mysqli_fetch_assoc($query)) {       ?> 
                                       
                                        
                                       <td> <?php echo $row['id']  ;?> </td>
                                       
                                       <td> <?php echo $row['Location']  ;?></td>
                                       <td> <?php echo $row['Email']  ; ?></td> 
                                       <td> <?php echo $row['Education']  ; ?></td>
                                       <td> <?php echo $row['Mobile']  ; ?></td>
                                       <td> <?php echo $row['Languages']  ; ?></td> 
                                       
                                       <td><?php 
                                       {
                                        echo"<span class='badge badge-edite'><a href='manager_contact.php?type=Modifier&id=".$row['id']."'>Modifier</a>&nbsp;&nbsp;</span>&nbsp;";
                                       
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