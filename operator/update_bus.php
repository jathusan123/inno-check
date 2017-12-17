<?php
session_start();
$email= $_SESSION['email'];

$db = mysqli_connect("localhost", "root", 'bd13011996', "ticketbooking") or die ("Failed to connect");
$query = "select name,ph_number,email from bus_operator where email='$email'";
$result = mysqli_query($db, $query);
if ($row = mysqli_fetch_array($result)) {

    $username = $row['name'];
    $phone = $row['ph_number'];

}
mysqli_free_result($result);
mysqli_close($db);

if(isset($_POST['update'])&& (!(empty($_POST['name'])))){
    //echo $email;
    $username = $_POST['name'];
    //echo $username;
    //$id = $_POST['id'];
    //$email=($_POST['email']);
    $phone=($_POST['ph_number']);

    $db = mysqli_connect("localhost", "root", 'bd13011996', "ticketbooking") or die ("Failed to connect");
    $query1 = "update bus_operator set name='$username',ph_number='$phone' where email='$email'";
    $result1 = mysqli_query($db,$query1);
    if($result1) {
        echo "<script type='text/javascript'>alert('Update Successfull')</script>";
      echo '<script>window.location="operator.php"</script>';
    }
    else {
        echo "Failed to update";
    }
}



?>
<!DOCTYPE html>


<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="css.css">
<link type="text/css" rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="jquery.min.js"></script>-->
<link href="css/bootstrap.min_1.css" rel="stylesheet">
	<link href="css/responsive-slider.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
        <link href="css/style_2.css" rel="stylesheet">

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
<body style="background-color: white ">

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
								<a href="index.html"><h1>Update Your Details..</h1></a>
							</div>
						</div>
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
                                                        
								
                                                                       <li role="presentation" class="active"><a href="operator.php">Home</a></li>
<li role="presentation"><a href="bus_update.php">Update Bus</a></li>
                                                                    <li role="presentation"><a href="book.php">Book</a></li>
                                                                    	
                                                                    <li role="presentation"><a href="details.php">My Details</a></li>
                                                                <li role="presentation"><a href="availability.php">Availability</a></li>
                                                              
                                  
                                               
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
    

<!-- Navigation bar with social media icons -->



    <!-- Header -->
   

    <!-- Image header -->


    <!-- Grid -->
   
<center> <form method="post" action="update_bus.php">

        <label style="color: black; font-size:20px">Name </label><br>
    <input type="text" name="name" value="<?php echo $username;?>"><br>
    <label style="color: black; font-size:20px">E-Mail </label><br>
    <input type="text" name="email" value="<?php echo $email;?>"readonly><br>
    <label style="color: black; font-size:20px">TP No</label><br>
    <input type="int" name="ph_number" value="<?php echo $phone?>"><br>

    <!--<input type="submit" name="update" value="Update" onclick="return confirm('Are you sure to update your details?');">-->
<input type="submit" name="update" style="color: black;" value="Update Details" onclick="return confirm('Are You Sure  ?');">
    </form></center>



</body>
</html>