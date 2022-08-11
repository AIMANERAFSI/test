<?php  include 'fetch_info/fetch_info.php';  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

</head>
<body class="main-content">
    <header class="container header active" id="home">
        <div class="header-content">
        <?php   while($row=mysqli_fetch_assoc($info)) { ?>
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['img_admin'] ?>" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    <?php echo $row['first_ipsum'] ;  ?><span><?php  echo $row['name'] ;  ?>.</span>
                    <?php echo $row['work_name'] ;  ?>.
                </h1>
                <p>
                <?php echo $row['Lorem_ipsum'] ;  ?>
                    
                </p>
                <div class="btn-con"> 
                    <a href="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['CV'] ?>" download="AIMANE_RAFSI_CV.pdf"  class="main-btn">
                        <span class="btn-text">Download CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                </div>
            </div>
            <?php   } ?>
        </div>
    </header>
    <main>
        <section class="container about" id="about">

              <?php   while($row=mysqli_fetch_assoc($about_my)) { ?>
             <h4 class="stat-title">ABOUT_MY</h4>
            <div class="about-container">
           
               
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text"><?php echo $row['Projects_completed'] ;  ?>+</p>
                            <p class="small-text">Projects <br /> Completed</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text"><?php echo $row['Years_experience'] ;  ?>+</p>
                            <p class="small-text">Years of <br /> experience</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text"><?php echo $row['Happy_clients'] ;  ?>+</p>
                            <p class="small-text">Happy <br /> Clients</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text"><?php echo $row['Customer_reviews'] ;  ?>+</p>
                            <p class="small-text">Customer <br /> reviews</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php   } ?>
            
            <div class="about-stats">
           
                <h4 class="stat-title">My Skills</h4>
                
                <div class="progress-bars">

                <?php   while($row=mysqli_fetch_assoc($skilss)) { ?>
                    <div class="progress-bar">
                        <p class="prog-title"><?php echo $row['langage'] ;  ?></p>
                        <div class="progress-con">
                            <p class="prog-text"><?php echo $row['pourcentage'] ;  ?>%</p>
                            <div class="progress">
                                <span class="<?php echo $row['chiffre'] ;  ?>"></span>
                            </div>
                        </div>
                    </div>

                    <?php   } ?>

                </div>
               
            </div>

            
            <h4 class="stat-title">My Timeline</h4>
            <div class="timeline">
            <?php   while($row=mysqli_fetch_assoc($mytimeline)) { ?>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration"><?php echo $row['Time'] ;  ?> - present</p>
                    <h5><?php echo $row['Work_name'] ;  ?><span> - <?php echo $row['societe_name'] ;  ?></span></h5>
                    <p>
                    <?php echo $row['Lorem_ipsum'] ;  ?>
                    </p>
                </div>
                <?php   } ?>
                
            </div>
        </section>


        
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2>My <span>Portfolio</span><span class="bg-text"> </span></h2>
            </div>
           
            <div class="portfolios">
            <?php   while($row=mysqli_fetch_assoc($mywork)) { ?>
                <div class="portfolio-item">
               
                    <div class="image">
                        <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['img'] ?>" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="<?php echo $row['src_github'] ; ?>" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            
                        </div>
                    </div>
                </div>
                <?php   } ?>
            </div>
           
        </section>




        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contact me here</h4>
                        
                        <div class="contact-info">
                        <?php   while($row=mysqli_fetch_assoc($contactmy)) { ?>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Location</span>
                                </div>
                                <p>
                                    : <?php echo $row['Location'] ; ?>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email</span>
                                </div>
                                <p>
                                    <span>: <?php echo $row['Email'] ; ?></span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Education</span>
                                </div>
                                <p>
                                    <span>:  <?php echo $row['Education'] ; ?></span> 
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Mobile Number</span>
                                </div>
                                <p>
                                    <span>: +<?php echo $row['Mobile'] ; ?></span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Languages</span>
                                </div>
                                <p>
                                    <span>: <?php echo $row['Languages'] ; ?></span>
                                </p>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                
                            Copyright &copy; <?php echo date('Y') ?> AIMANE.RAFSI
                              
                                
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">




                     <?php 
                     
                     if(isset($_POST['SUBMITE'])  )
                     {
                          $name=mysqli_real_escape_string($connect,$_POST['name']);
                          $email=mysqli_real_escape_string($connect,$_POST['email']);
                          $subject=mysqli_real_escape_string($connect,$_POST['subject']);
                          $Message=mysqli_real_escape_string($connect,$_POST['Message']);

                          if(empty($name) OR empty($email) OR empty($subject) OR empty($Message) )
                          {
                             echo  " <script>Swal.fire({ icon: 'error',title: 'Oops...', text: 'vous devez remplir tous les champs !', }) </script>" ;
                               
  
                          }else
                          {
                              mysqli_query($connect,"INSERT INTO contact_clients (name,email,subject,Message) VALUE ('$name','$email','$subject','$Message')");
                              echo " <script> Swal.fire( 'Message Envoyer!','', 'success'    )</script>  ";
                               
                     }
                    }
                     
                     ?>

                        <form  class="contact-form" method="POST">
                            <div class="input-control i-c-2">
                                <input type="text" placeholder="YOUR NAME *" name="name">
                                <input type="email"  placeholder="YOUR EMAIL * " name="email">
                            </div>
                            <div class="input-control">
                                <input type="text"  placeholder="ENTER SUBJECT *" name="subject">
                            </div>
                            <div class="input-control">
                                <textarea name="Message" id="" cols="15" rows="8" placeholder="Message Here..." ></textarea>
                            </div>

                            <button  name="SUBMITE" type="submit" class="bn62">
                           Envoyer
                            </button>
                        </form>


                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        
        <div class="control active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
         
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="JS/app.js"></script>
</body>
</html>