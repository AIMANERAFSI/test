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
   $delet_skills="DELETE  FROM  myskills where  id='$id'LIMIT 1 "; 
   $query=mysqli_query($connect,$delet_skills);   

   }
}

?>

<?php
$sql="SELECT * FROM myskills order by id asc";
$query=mysqli_query($connect,$sql);   
?>


<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">MY SKILLS </h4>
                           <h4 class="box-link" ><a href="manager_skills.php">+ ADD SKILLS</a> </h4>
                           
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th>id</th>
                                       <th>langage</th>
                                       <th>pourcentage	</th>
                                       <th>chiffre	</th>
                                       
                                       <th></th>
                                      
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                   
                                   
                                    <tr>
                                    <?php    while($row=mysqli_fetch_assoc($query)) {       ?> 
                                       
                                        
                                       <td> <?php echo $row['id']  ;?> </td>
                                       <td> <?php echo $row['langage']  ;?> </td>
                                       <td> <?php echo $row['pourcentage']  ;?></td>
                                       <td> <?php echo $row['chiffre']  ;?></td>
                                       
                                       <td><?php 
                                       
                                         
                                        echo"<span class='badge badge-edite'><a href='manager_skills.php?id=".$row['id']."'>Modifier</a>&nbsp;&nbsp;</span>&nbsp;";
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