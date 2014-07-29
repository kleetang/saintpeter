<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./img/icon.png">

    <title>TASC</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="./css/main.css" rel="stylesheet">
    <!-- Common styles -->
    <link href="./css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="./js/googlemap.js"></script>
  </head>

  <body>
    <div class="container">
      
      <?php include 'nav.php';?>

      <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">Contact Us</li>
      </ol>

      <div class="page-header">
        <h2>Contact Us</h2>
      </div>

      <div class="mainwrapper">
        <div class="row">
          <div class="col-lg-5">
            <h4>Columbia International Academy</h4><br>
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-sm-2">Phone:</label>
                <div class="col-sm-9">
                  <p>1-212-825-0437</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2">Email:</label>
                <div class="col-sm-9">
                  <p>cianyorg@gmail.com</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2">Address:</label>
                <div class="col-sm-9">
                  <p>17 Battery Place, Suite 300<br> New York, NY 10004</p>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-7">
            <div id="map_canvas"></div>
          </div>
        </div>
      </div>

      <?php include 'footer.php';?>

    </div> <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="./bootstrap/dist/js/bootstrap.min.js"></script>

  </body>
</html>