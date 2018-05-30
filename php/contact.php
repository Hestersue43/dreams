<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('form.php');  ?>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href=' dreams/style/contact.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
     <!-- Bootstrap -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="style/contact.css" rel="stylesheet">
     <script src="js/respond.js"></script>
     <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
     <script type="text/javascript">
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.0)";
    }
    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
    } 
    </script>
    </head>
    <body>
        <header><h2>Contact Form</h2></header>
        <span onclick="openNav()"> 
        <i class="fa fa-align-justify" style="font-size:36px; color:#753a88; margin-left:15px">&nbsp;Menu</i></span>
        <br><br> 										      
        <div id="mySidenav" class="sidenav">
        <br><br>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <br><br> 
            <a class="active" href="aboutus.html">About Us</a>
            <a href="theceo.html">About The Ceo</a>
            <a href="clients.html">Dream Teams</a>
            <a href="ourexpectation.html">Our Expectations</a>
            <a href="services.html">Our Services</a>
            <a href="calendarmenu.html">Donate Page</a>
            <button class="cbtn" onclick="self.close()">Exit The Site</button>
       </div>   
       <div class="container">
       <div class="row">
       <div class="col-lg-8 col-lg-offset-2">
       <p class="lead"><p>With diverse corporate and personal experiences including major consulting, corporate acquisitions, strategy and real estate investing, 
        I have successfully helped hundreds of clients achieve their personal and career goals in the Greene County Markets. 
        Accountability, professionalism and customer satisfaction are the cornerstones of my consulting business. Our goal is to create raving fans out of every client we work with!
        Your referrals are the lifeblood of my business. You can email your referrals to domincorp@gmail.com.</p><br/>  
        <form id="contact-form" method="post" action="<?= $_SERVER['PHP_SELF']; ?>" role="form">
            <div class="messages"></div>
            <div class="controls">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Firstname *</label>
                            <i class="fa fa-user"></i><input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" autofocus>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Lastname *</label>
                            <i class="fa fa-user"></i><input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email *</label>
                            <i class="fa fa-envelope"></i><input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_phone">Phone</label>
                            <i class="fa fa-phone"></i><input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message *</label>
                            <i class="fa fa-comments"></i><textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-send" value="Send message">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-muted"><strong>*</strong> These fields are required.</p>
                    </div>
                </div>
            </div>

        </form>

    </div><!-- /.8 -->

</div> <!-- /.row-->

</div> <!-- /.container-->
<!-- php -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="validator.js"></script>
<script src="contact.js"></script>
</body>
</html>	
      
