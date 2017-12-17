<!DOCTYPE html>
<?php
session_start();
include 'dbconfig.php';
$user_id=$_SESSION['id'];
 $query = $db->query("SELECT message FROM messages WHERE user_id='$user_id'");
// $query = $db->query("SELECT * FROM booking WHERE bus_id='$bus_id'");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    $columnValues = Array();
    if($rowCount > 0){
        
        
        while($row = $query->fetch_assoc()){
         $columnValues[] = $row['message'];
         //   
    }}
?>
<html lang="en">
<!-- <title>Demo|Lisenme</title>-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<link rel="stylesheet" href="css.css">
<link type="text/css" rel="stylesheet" href="style.css"/>    

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link href="css/bootstrap.min_1.css" rel="stylesheet">
	<link href="css/responsive-slider.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/style_2.css" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
    <script src="jquery.min.js"></script>
      
    <script src="st.js"></script>
  </head>
  <body>

    <header>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-default" role="navigation">
					<div class="w3-white">
						<div class="navbar-header">
							<div class="navbar-brand">
								<a href="index.html"><h1>Messages...</h1></a>
							</div>
						</div>
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
       <li role="presentation" class="active"><a href="customer.php">Home</a></li>
								
                                                                <li role="presentation"><a href="booking.php">Book Ticket</a></li>
                                                                <li role="presentation"><a href="update.php">Update Profile</a></li>
                                                                <li role="presentation"><a href="bookedTicket.php">My Bookings</a></li>
                                                                <!--<li role="presentation"><a href="Add_Bus.php">Add Bus</a></li>-->
                                                                <li role="presentation"><a href="login.php"  onclick="return confirm('Are you sure to log out?');">Logout</a></li>
                                                                <li role="presentation"><a href="reomve.php">Deactivate</a></li>
								<li role="presentation"><a href="contacts.html">Contact</a></li>
                                                               
  
  

							</ul>
						</div>
					</div>			
				</nav>
			</div>
		</div>
	</header>
      <style>
.dropbtn {
    background-color:white;
    color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
    font-size:15px ;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #2196F3}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: white;
}
</style>
	
	<div class="container">
		
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="page-header">
					<div class="blog">
<!--						<h5>January,15 2014</h5>-->
<img src="img/bell-1096280_960_720.png" class="img-responsive"alt="" style="width:450px;height:450px; "/>			
					
						
					</div>
				</div>				
			</div>
			
			
			<div class="col-md-4">
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>Your Messages</strong>
					</div>
					<div class="panel-body">
						<div class="media">
							
							<div class="media-body">
								<h4 class="media-heading">Message 1</h4>
								<p>
                                                                  <?php 
                                                                         if(array_key_exists(0,$columnValues)){
                                                                  echo $columnValues[0];}
                                                                    ?>
								</p>
<!--								<div class="ficon">
									<a href="" alt="">Learn more</a> <i class="fa fa-long-arrow-right"></i>
								</div>-->
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="media">
							
							<div class="media-body">
								<h4 class="media-heading">Message 2</h4>
								<p> 
								  <?php 
                                                                  if(array_key_exists(1,$columnValues)){
                                                                  echo $columnValues[1];}
                                                                    ?>
								</p>
<!--								<div class="ficon">
									<a href="" alt="">Learn more</a> <i class="fa fa-long-arrow-right"></i>
								</div>-->
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="media">
							
							<div class="media-body">
								<h4 class="media-heading">Message 3</h4>
								<p>
								  <?php 
                                                                  if(array_key_exists(2,$columnValues)){
                                                                  echo $columnValues[2];}
                                                                    ?>
								</p>
<!--								<div class="ficon">
									<a href="" alt="">Learn more</a> <i class="fa fa-long-arrow-right"></i>
								</div>-->
							</div>
						</div>
					</div>
						
			</div>				
		</div>
	</div>
	
	
	
			
			
	
	
	<footer>
		
	</footer>
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/responsive-slider.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.magnific-popup.js"></script>
	<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
  </body>
</html>