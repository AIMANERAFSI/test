
<?php require 'toop.php';  ?>


<?php
$sql="SELECT * FROM  about_me order by id asc";
$query=mysqli_query($connect,$sql);
?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">ABOUT ME </h4>
                           
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       
                                       <th>ID</th>
                                      
                                       <th>Projects_completed</th>
                                       <th>Years_experience	</th>
                                       <th>Happy_clients</th>
                                       <th>Customer_reviews</th>
                                       <th></th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                       <?php    while($row=mysqli_fetch_assoc($query)) {          ?>             
                                   
                                    <tr>
                                      
                                       <td> <?php echo $row['id'] ?> </td>
                                       
                                       <td><?php echo $row['Projects_completed'] ?></td>
                                       <td><?php echo $row['Years_experience'] ?></td>
                                       <td><?php echo $row['Happy_clients'] ?></td>
                                       <td><?php echo $row['Customer_reviews'] ?></td>

                                       <td><?php
                                       
                                        echo"<span class='badge badge-edite'><a href='manager_about.php?type=Modifier&id=".$row['id']."'>Modifier</a>&nbsp;&nbsp;</span>&nbsp;";
                                       

                                       
                                       ?></td>

                                    </tr>
                                    
                        <?php  } ?>            
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>

        <?php require 'footer.php';  ?>