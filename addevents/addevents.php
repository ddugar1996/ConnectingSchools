<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<title>Event Application Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Feedback Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href="//fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- /font files -->
<!-- css files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<!-- /css files -->
</head>

<?php
   $m = new MongoClient();
   $db = $m->connectingschools;
   //echo "Database mydb selected";
   $event= $db->createCollection("Event");

?>


<?php

		if($_SESSION["uname"] == " ")
		{
			header("Location:../login/login.php");
		}
		if(isset($_POST["Submit"]))
		{
			$document = array(
					"Title" => $_POST["Title"] ,
					"Schoolname" => $_POST["Schoolname"] ,
					"Type" => $_POST["Type"],
					"Details" => $_POST["Details"],
					"Startdate" => $_POST["Startdate"],
					"Starttime" => $_POST["Starttime"],
					"Endtime" => $_POST["Endtime"],
					"Expectedstrength" => $_POST["Expectedstrength"],
					"Budget" => $_POST["Budget"],
					"Venue" => $_POST["Venue"],
					"Link" => $_POST["Link"],
					"Fee" => $_POST["Fee"],
					"Email" => $_POST["Email"],
					"Submittedby" => $_SESSION["uname"],
					"Status" => "0"
					);
				$event->insert($document);
				header("Location:../imageslider/imageslider1.php");
		}
?>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="../index.html">Connecting Schools</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="about.html">About Us</a>
                  </li>
                  <li>
                      <a href="../events/events.html">Events</a>
                  </li>
                  <li>
                      <a href="contact.html">Contact Us</a>
                  </li>
                  <?php
                          if($_SESSION["uname"]==" ")
                          {
                              header("Location:../login/login.php");
                          }

                  ?>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo "Hello " . $_SESSION["uname"] ?><b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="../post user login/post user login.php">Create Event</a>
                          </li>
                          <li>
                              <a href="../login/login.php">Logout</a>
                          </li>
                      </ul>
                  </li>

              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
  </nav>

<div class="container">
<h1 class="header-w3ls">Event Application Form</h1>
<div class="content-w3ls">
	<div class="form-w3ls">
		<form action="addevents.php" method="post">
			<div class="content-wthree1">
				<div class="grid-agileits1">
					<div class="form-control">
						<label class="header">Event Title <span>:</span></label>
						<input type="text" id="name"  name="Title" placeholder="" title="Please enter Event Title.." required="">
					</div>

					<script type="text/javascript">
		  function showfield(name){
		    if(name=='Other')document.getElementById('div1').style.display="block";
		    else document.getElementById('div1').style.display="none";
		  }

		 function hidefield() {
		 document.getElementById('div1').style.display='none';
		 }
		  </script>
			<label class="header-w3ls">Select Event type <span>:</span></label>
		  <body onload="hidefield()">

		  <!--<select name="travel_arriveVia" id="travel_arriveVia" onchange="showfield(this.options[this.selectedIndex].value)">
		  <option selected="selected">Event Type</option>
			<option value="Workshop">Workshop</option>
			<option value="Conference">Conference</option>
		  <option value="Debate">Debate</option>
		  <option value="Sports">Sports</option>
			<option value="Cultural">Cultural</option>
		  <option value="Other">Other</option>
		  </select>
		  <div id="div1">If Other: <input type="text" name="whatever" /></div>  -->

		  <div class="form-control">
					<label class="header">School Name <span>:</span></label>
					<input type="text"  name="Schoolname" id="name" placeholder="" title="Please enter school name" required="">
				</div>


		  <div class="form-control">
					<label class="header">Event Type <span>:</span></label>
					<input type="text"  name="Type" id="name" placeholder="Cultural, Sports etc." title="Please enter event type" required="">
				</div>

			<div class="content-wthree3">
				<div class="form-control">
					<label class="enquiry">Start date <span>:</span></label>
					<input type="text" id="datepicker" name="Startdate" required="" >
					<script>
				  $(document).ready(function() {
				    $("#datepicker").datepicker();
				  });
				  </script>
					<div class="clear"></div>
				</div>
			</div>


				<div class="form-control">
					<label class="header">Event Start Time <span>:</span></label>
					<input type="text" id="name" name="Starttime" placeholder="Start time" title="Please enter start time.." required="">
				</div>

				<div class="form-control">
					<label class="header">Event End Time <span>:</span></label>
					<input type="text" id="name" name="Endtime" placeholder="End time" title="Please enter end time.." required="">
				</div>

				<div class="form-control">
					<label class="header">Venue <span>:</span></label>
					<input type="text" id="name" name="Venue" placeholder="" title="Please enter event venue" required="">
				</div>

				<div class="form-control">
					<label class="header">Event link<span>:</span></label>
					<input type="text" id="name" name="Link" placeholder="" title="Please enter event website / link" >
				</div>

				<div class="form-control">
					<label class="header">Email <span>:</span></label>
					<input type="email" id = "name" name="Email" placeholder="Email" required=" ">
				</div>

				<div class="form-control">
					<label class="header">Approximate strength <span>:</span></label>
					<input type="text" id="name" name="Expectedstrength" placeholder="Strength" title="Please enter strength.." required="">
				</div>

				<div class="form-control">
					<label class="header">Approximate Budget <span>:</span></label>
					<input type="text" id="name" name="Budget" placeholder="INR" title="Please enter budget.." required="">
				</div>

				<div class="form-control">
					<label class="header"> Fee Per Head <span>:</span></label>
					<input type="text" id="name" name="Fee" placeholder="INR" title="" required="">
				</div>

							<div class="content-wthree3">
				<div class="form-control">
					<label class="enquiry">Event Details <span>:</span></label>
					<textarea id="message" name="Details" placeholder="Enter any other relevant details.." title="Please enter Event Details" required=""></textarea>
					<div class="clear"></div>
				</div>
			</div>
			  </div>
				<div class="clear"></div>
			</div>

<!--<form action="http://www.cs.tut.fi/cgi-bin/run/~jkorpela/echo.cgi"
enctype="multipart/form-data" method="post">
<p>
Upload Poster for the event:<br>
<input type="file" name="datafile" size="40">
</p>
</form> -->

			<div class="content-wthree4">
				<div class="form-control">
					<input type="submit" class="register" name="Submit" value="Submit">
					<input type="reset" class="reset" value="Reset">
					<div class="clear"></div>
				</div>
			</div>


		</form>
	</div>
</div>
</div>
<?php
	$m->close();
?>
</body>
</html>
