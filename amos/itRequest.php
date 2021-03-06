<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="http://getbootstrap.com/favicon.ico">

<title>SL1 Technologies</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="css/custom.css"> <!-- link to custom css -->
</head>
<body>
<!--   <div class="container conatainer-body"> -->
      <!--=======================Hero Space===============================================-->
      
    <div class="jumbotron">
  <div class="navbar-wrapper">

    <div class="container"><!--NAV BAR Conatiner-->

      <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" ><img src="images/sl1_logo1.png"></a><!--site Logo-->
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="xbmc.html">Multimedia</a></li>
              <li><a href="technology.html">IT Solution</a></li>
              <li><a href="atm.html">ATM</a></li>
              <!--================================================================= Drop menu==============================================-->

              <li class="dropdown">
               <a href="http://getbootstrap.com/examples/carousel/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">MORE <span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
<!--                 <li><a href="atm.html">ATM</a></li>
 -->             <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="http://getbootstrap.com/examples/carousel/#">Separated link</a></li>
                <li><a href="http://getbootstrap.com/examples/carousel/#">One more separated link</a></li>
              </ul>
            </li>
<!--===============================================================END DROP MENU=================================================-->                      
          </ul>
        </div>
      </div>
    </nav>
  </div><!--END NAV BAR Conatainer-->
</div>
  <!--=============================================FEATURED HEADING================================================-->
  <div class="page-header">
    <h1>Service Request<small> Let us Help you</small></h1>
    <p></p>
<!--     <p><a class="btn btn-primary btn-lg" href="#" role="button">Order Now</a></p>
 -->  </div><!--END FEATURED HEADING-->

</div><!--END JUMBOTRON-->

<!--=========================Service Request Form================================================-->
<!-- 16:9 aspect ratio -->

<div class="container">

  <div class="form-group"><!--Radio Button to select service-->
    <div class="col-sm-offset-2 col-sm-10">
      <div class="radio"><h3>Select Service</h3>
        <label class="radio-inline">
        <input type="radio" name="itServiceRadioOptions" id="computerRadio" value="option1"> Computer Service
        </label>
        <label class="radio-inline">
          <input type="radio" name="itServiceRadioOptions" id="websiteRadio" value="option2"> Website Creation
        </label>
        <label class="radio-inline">
          <input type="radio" name="itServiceRadioOptions" id="networkRadio" value="option3"> Network Configuration
        </label>
      </div><!--END Radio Button-->
    </div>
  </div>

  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="itServiceEmail" placeholder="Email" required>
      </div>
    </div>
    <div class="form-group">
      <label for="itServiceName" class="col-sm-2 control-label">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="itServiceName" placeholder="Name" required>
      </div>
    </div>
    <div class="form-group">
      <label for="itServiceAddress" class="col-sm-2 control-label">Address</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="itServiceAddress" placeholder="Address" >
      </div>
    </div>
    <div class="form-group">
      <label for="itServiceZip" class="col-sm-2 control-label">Zip</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="itServiceZip" placeholder="Zip code">
      </div>
    </div>
    <div class="form-group">
      <label for="itServicePhone" class="col-sm-2 control-label">Phone</label>
      <div class="col-sm-10">
        <input type="tel" class="form-control" id="itServicePhone" placeholder="Phone#" required>
      </div>
    </div>
    <div class="form-group">
      <label for="itServiceDescription" class="col-sm-2 control-label">Description</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="3" placeholder="Enter breif description for your request..."></textarea>
      </div>
    </div>

    <!-- <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
      </div>
    </div> -->
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
     <!--===================================================== PAGE FOOTER=========================================== -->
       <footer>
      <!--   <p class="pull-right"><a href="index.html">Back to top</a></p> -->
        <p>© 2014 SL1 Technologies, Inc. · <a href="http://getbootstrap.com/examples/carousel/#">Privacy</a> · <a href="http://getbootstrap.com/examples/carousel/#">Terms</a></p>
      </footer>
</div>

<!--=========================Service Request Form================================================-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!--   </div> -->
  <!--=============================END CONTAINER=================================================-->
</body>
</html>



