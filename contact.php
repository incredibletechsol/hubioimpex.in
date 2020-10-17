<!DOCTYPE html>
<html lang="en">
   <head><meta charset="windows-1252">
      
      <?php include('head.php'); ?>
   </head>
   <body>
      <div class="home-page" id="wrapper">
         <!-- start header -->
         <?php include('header.php'); ?>
         <!-- end header -->
         <section id="inner-headline" class="bg-img">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <h2 class="pageTitle">Contact Us</h2>
                  </div>
               </div>
            </div>
         </section>
         <section id="content">
            <div class="container">
               <div class="row">
               </div>
               <div class="row">
                  <div class="col-md-8">
                     <div class="done">
                        <div class="alert alert-success">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                           Your message has been sent. Thank you!
                        </div>
                     </div>
                     <div class="contact-form">
                        <form method="post" action="contact1.php" id="contactform" class="contact">
                           <div class="form-group has-feedback">
                              <label for="name">Name*</label>
                              <input type="text" class="form-control" name="name" placeholder="" required>
                              <i class="fa fa-user form-control-feedback"></i>
                           </div>
                           <div class="form-group has-feedback">
                              <label for="email">Email*</label>
                              <input type="email" class="form-control" name="email" placeholder="" required>
                              <i class="fa fa-envelope form-control-feedback"></i>
                           </div>
                            <div class="form-group has-feedback">
                              <label for="email">Mobile No*</label>
                              <input type="text" class="form-control" name="mobileno" placeholder="" required>
                              <i class="fa fa-phone form-control-feedback"></i>
                           </div>
                           <div class="form-group has-feedback">
                              <label for="message">Message*</label>
                              <textarea class="form-control" rows="6" name="message" placeholder="" required></textarea>
                              <i class="fa fa-pencil form-control-feedback"></i>
                           </div>
                           <input type="submit" value="Submit" id="submit" class="submit btn btn-default" name="submit">
                        </form>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <br><br> 
                     <h5 class="widgetheading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Contact</h5>
                     <address>
                        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hubio Impex Pvt. Ltd</strong><br>
                        <span class="contact-icon"><i class="fa fa-map-marker" style="font-size:24px;color:red"></i></span>&nbsp;&nbsp;   Registered Office :- Sr.No. 1/7/ 1/17,<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bldg Aditya, Wing A & B,<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Shop No.05,Haveli,Shivne (Part)<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (N.V.),Pune,MH - 411023<br><br>
                        <span class="contact-icon"><i class="fa fa-phone" style="font-size:24px;color:red"></i></span>&nbsp; (+91) 020 21055600<br><br>
                        <span class="contact-icon"><i class="fa fa-envelope" style="font-size:24px;color:red"></i></span>&nbsp; hubioimpex@gmail.com
                     </address>
                  </div>
               </div>
            </div>
      </div>
      </section>
      <?php include('footer.php'); ?>
      </div><a class="scrollup fa fa-angle-up active" href="#"></a>
      <!-- javascript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="js/jquery.js"></script> <script src="js/jquery.easing.1.3.js"></script> <script src="js/bootstrap.min.js"></script> <script src="js/jquery.fancybox.pack.js"></script> <script src="js/jquery.fancybox-media.js"></script> <script src="js/portfolio/jquery.quicksand.js"></script> <script src="js/portfolio/setting.js"></script> <script src="js/jquery.flexslider.js"></script> <script src="js/animate.js"></script> <script src="js/custom.js"></script> <script src="js/owl-carousel/owl.carousel.js"></script>
   </body>
</html>