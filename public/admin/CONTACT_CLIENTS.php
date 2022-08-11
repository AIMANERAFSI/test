<?php require 'toop.php';    ?>


<?php


if(isset($_GET['type'])  && $_GET['type']!='')
{

    $type=mysqli_real_escape_string($connect,$_GET['type']); 
    if($type=='delet')
   {
   $id=mysqli_real_escape_string($connect,$_GET['id']);
   $delet_mytimeline="DELETE  FROM  contact_clients where  id='$id'LIMIT 1 "; 
   $query=mysqli_query($connect,$delet_mytimeline);   

   }
}

?>
<?php  $query="SELECT * FROM contact_clients order by Date desc ";
   $contact_clients=mysqli_query($connect,$query); ?>

         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Contact_CLIENTS </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                      
                                       
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Subject</th>
                                       <th>Message</th>
                                       <th>Date</th>
                                       <th></th>
                                       
                                       
                                    </tr>
                                 </thead>
                                 <tbody>  <?php    while($row=mysqli_fetch_assoc($contact_clients)) {       ?> 
                                    <tr class=" pb-0">

                                    
                                      
                                       <td> <?php echo $row['id']  ;?> </td>
                                       <td> <span class="name"><?php echo $row['Name']  ;?></span> </td>
                                       <td> <span class="product"><?php echo $row['Email']  ;?></span> </td>
                                       <td><span ><?php echo $row['Subject']  ;?></span></td>
                                       <td><span ><?php echo $row['Message']  ;?></span></td>
                                       <td><span ><?php echo $row['Date']  ;?></span></td>
                                       <td><?php 
                                       {
                                          echo"<span class='badge badge-delet'><a href='?type=delet&id=".$row['id']."'>Supprimer</a>&nbsp;&nbsp;</span>";
                                       
                                       }?></td>
                                       
                                      
                                    </tr> <?php } ?>
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