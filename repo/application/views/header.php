<!DOCTYPE html>
<html>
  <head>
    <title>St. Joseph Parish</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    <link href="/assets/style.css" rel="stylesheet">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/assets/jquery/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Full calendar-->
    
    <link href="/assets/calendar/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="/assets/calendar/fullcalendar/fullcalendar.print.css" rel="stylesheet">
    <script src="/assets/calendar/fullcalendar/fullcalendar.min.js"></script>
  </head>
  
  <body>
	<div class="container">
      <h1 id="logo"><a href="http://stjosephcarmona.org/home/">stjosephcarmona.org</a></h1>
	  <div id="tx-tools">
            <div class="tx-grid-3">
                <p class="date"> <?php echo date('l, F j, Y'); ?></p>
            </div>
            
            <div class="login tx-grid-6">
            </div> 
            <div class="clear"></div>
      </div>
      <!-- Static navbar -->
      <div class="navbar navbar-green" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/reservation">Reservation</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">St. Jospeh, Patron</a></li>
                <li><a href="#">Parish History</a></li>
                <li><a href="#">Parish Pastoral Council</a></li>
                <li><a href="#">Diocesan Pastoral Priorities for Evangelization</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Sacraments</a></li>
                <li><a href="#">Devotions</a></li>
                <li><a href="#">Other Services</a></li>
              </ul>
            </li>
            <li><a href="/news">News</a></li>
            <li><a href="/gallery">Galerry</a></li>
            <li><a href="/contact">Contact Us</a></li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
		
        
