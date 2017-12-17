<?php
session_start();
$bus_id=$_SESSION['bus_id'];
        ?>
<title>Demo|Lisenme</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
<link type="text/css" rel="stylesheet" href="style.css"/>    
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link href="css/bootstrap.min_1.css" rel="stylesheet">
	<link href="css/responsive-slider.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/style_2.css" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
    <script src="jquery.min.js"></script>
      <!--<link rel="stylesheet" href="cs.css">-->
    <script src="st.js"></script>
<head>
    <title>Welcome user</title>
</head>

<!--<h3>Welcome <?php echo $username; ?>. </h3>-->
<style>
input[type=text], select {
    color: black;
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=int], select {
    color: black;
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    
}
input[type=submit] {
    width: 20%;
    background-color: #00bcd4;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #00bcd4;
}


</style>

 <style>
.dropbtn {
    background-color:white;
    font-family: fantasy;
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
<body class="w3-white">

<!-- Navigation bar with social media icons -->
<!--<div class="w3-bar w3-black w3-hide-small" style="height:5%">
    <a href="customer.php" class="w3-bar-item w3-button" ><i class="fa fa-home"></i></a>
    <a href="booking.php" class="w3-bar-item w3-button" ><i class="fa fa-bus"></i></a>
        <a href="bookedTicket.php" class="w3-bar-item w3-button"><i class="fa fa-book"></i></a>
    <a href="https://www.youtube.com/channel/UCEdC6Qk_DZ9fX_gUYFJ1tsA" class="w3-bar-item w3-button"><i class="fa fa-search"></i></a>
    <a href="https://plus.google.com/115714479889692934329" class="w3-bar-item w3-button"><i class="fa fa-phone"></i></a>
    <a href="https://www.linkedin.com/in/lisen-me-b017a8137/" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
</div>-->
<div class="w3-content" style="max-width:1600px">

    <!-- Header -->
        <header>
		<div class="container" style="width:100%;">
			<div class="row">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<div class="navbar-header">
							<div class="navbar-brand">
                                                            <a href="operator.php"><h1>Change Your Bus Details </h1></a>
							</div>
						</div>
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
                                                             <li role="presentation" class="active"><a href="operator.php">Home</a></li>
								<li role="presentation"> <div class="dropdown">
                                                                    <button class="dropbtn">Update</button>
                                                                    <div class="dropdown-content">
    <a href="bus_update.php">Update Bus</a>
    <a href="update_bus.php">Update Profile</a>
    <a href="bus_delete.php">Delete Bus</a>
  </div>
</div></li>
                                                                    <li role="presentation"><a href="book.php">Book</a></li>
                                                                    	
                                                                    <li role="presentation"><a href="details.php">My Details</a></li>
                                                                <!--<li role="presentation"><a href="availability.php">Availability</a></li>-->
                                                              
                                  
                                               
                                                                <li role="presentation"><a href="Add_Bus.php">Add Bus</a></li>
                                                                <li role="presentation"><a href="login.php"  onclick="return confirm('Are you sure to log out?');">Logout</a></li>
                                                               <li role="presentation"><a href="reomve1.php">Deactivate</a></li>
							</ul>
						</div>
					</div>			
				</nav>
			</div>
		</div>
	</header>
<?php
//session_start();
$busid=8;
//if (isset($_POST['search'])) {
//$id = $_POST['id'];
//echo $email;
$db = mysqli_connect("localhost", "root", 'bd13011996', "ticketbooking") or die ("Failed to connect");
$query = "select name,total_seats,available_seats,route_id,bus_number,type from bus where bus_id=$busid";
$result = mysqli_query($db, $query);
if ($row = mysqli_fetch_array($result)) {

    $busname = $row['name'];
    $totseats = $row['total_seats'];
    $avaseats=$row['available_seats'];
    $routeid = $row['route_id'];
    $busno = $row['bus_number'];
    $type = $row['type'];

}
mysqli_free_result($result);
mysqli_close($db);

if(isset($_POST['submit'])&&(!(empty($_POST['name'])))){
    $busname = $_POST['name'];
    //$id = $_POST['id'];
    //$email=($_POST['email']);
    $totseats=($_POST['ph_number']);
    $avaseats=($_POST['number']);
    $routeid=($_POST['numbe']);
    $busno=($_POST['nu']);
    $type=($_POST['ty']);

    $db = mysqli_connect("localhost", "root", 'bd13011996', "ticketbooking") or die ("Failed to connect");
    $query1 = "update bus set name='$busname',total_seats='$totseats', available_seats='$avaseats', route_id='$routeid', bus_number='$busno',type='$type' where bus_id=$busid ";
    $result1 = mysqli_query($db,$query1);
    if($result1) {
        echo "<script type='text/javascript'>alert('Update Successfull')</script>";
      echo '<script>window.location="operator.php"</script>';
    }
    else {
       echo "<script type='text/javascript'>alert('Failed To Update')</script>";
    }
}

?>
    <center><form method="post" action="">
    <div>
        <label>
            <span style= "font-size: 16px;">  Name:      </span>
        </label>


        <!--<input id="cvv" size="6" type="text" value="" autocomplete="off" required />-->
    </div>
    <input type="text" name="name"  style="color: black;"value="<?php echo $busname;?>">

    <div>
        <label>
            <span style= "font-size: 16px;"> Total Seats:      </span>                   </label>
    </div>
    <input type="int" name="ph_number" style="color: black;" value="<?php echo $totseats?>">

    <div>
        <label>
            <span style= "font-size: 16px;"> Available Seats:      </span>                   </label>
    </div>
    <input type="int" name="number" style="color: black;" value="<?php echo $avaseats?>">

    <div>
        <label>
            <span style= "font-size: 16px;"> Route Id:      </span>                   </label>
    </div>
    <input type="int" name="numbe" style="color: black;" value="<?php echo $routeid?>">

    <div>
        <label>
            <span style= "font-size: 16px;"> Bus Number:      </span>                   </label>
    </div>
    <input type="int" name="nu" style="color: black;" value="<?php echo $busno?>">

    <div>
        <label>
            <span style= "font-size: 16px;"> Type:      </span>                   </label>
    </div>
    <input type="int" name="ty" style="color: black;" value="<?php echo $type?>"><br>



    <input type="submit" name="submit" style="color: black;" value="Update Details" onclick="return confirm('Are You Sure  ?');">
</form></center>
