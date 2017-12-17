<?php
session_start();
$email= $_SESSION['email'];
//if (isset($_POST['search'])) {
    //$id = $_POST['id'];
    //echo $email;
    $db = mysqli_connect("localhost", "root", 'bd13011996', "ticketbooking") or die ("Failed to connect");
    $query = "select name,ph_number from customer where email='$email'";
    $result = mysqli_query($db, $query);
    if ($row = mysqli_fetch_array($result)) {

        $username = $row['name'];
        //$email = $row['email'];
        $phone = $row['ph_number'];
        //echo $username;
        // header('Location: login.php');
    }
    mysqli_free_result($result);
    mysqli_close($db);



//}
//else {
    //$username ='' ;
    //$email='';
    //$phone='' ;
//}
if(isset($_POST['submit'])){
    $username = $_POST['name'];
    //$id = $_POST['id'];
    //$email=($_POST['email']);
    $phone=($_POST['ph_number']);

    $db = mysqli_connect("localhost", "root", 'bd13011996', "ticketbooking") or die ("Failed to connect");
    $query = "update customer set name='$username',ph_number='$phone' where email='$email '";
    $result = mysqli_query($db,$query);
    if($result) {
       // echo "Succesfully updated";
          echo "<script type='text/javascript'>alert('Update Successfull')</script>";
      echo '<script>window.location="customer.php"</script>';
        
        //header('Location: login.php');
    }
    else {
        echo "Failed to update";
    }
}

?>
<!DOCTYPE html>
<html>
<!--<head>
    <title>Your details</title>
</head>
<body>
<h1>Update Your Details</h1>
<html>
<title>Demo|Lisenme</title>-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
<link type="text/css" rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

<link rel="stylesheet" href="css/style_3.css">
<link href="css/bootstrap.min_1.css" rel="stylesheet">
	<!--<link href="css/responsive-slider.css" rel="stylesheet">-->
	<link rel="stylesheet" href="css/animate.css">
	<!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
        <link href="css/style_2.css" rel="stylesheet">	
<style>
input[type=text], select {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=int], select {
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
<body class="w3-white">

<!-- Navigation bar with social media icons -->
<header>
		<div class="container" style="width:100%;">
			<div class="row">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<div class="navbar-header">
							<div class="navbar-brand">
								<a ><h1>Update Your Details</h1></a>
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

     
    


    <!-- Image header -->


    <!-- Grid -->
   

        <!-- Blog entries -->
        <div class="w3-col l12 s12">

            <!-- Blog entry -->
            <!--<div class="w3-container w3-white w3-margin w3-padding-large">-->
            <center><form method="post" action="update.php">
    <div>
        <label>
            <span style= "font-size: 16px;">  Name      </span>
        </label>
                    

        <!--<input id="cvv" size="6" type="text" value="" autocomplete="off" required />-->
    </div>
     <input type="text" name="name"  style="color: black;"value="<?php echo $username;?>">
    <div>
        <label>
            <span style= "font-size: 16px;">  Email      </span>
        </label>
        </div>
     <input type="text" name="email" style="color: black;"value="<?php echo $email;?>"readonly>
     <div>
        <label>
            <span style= "font-size: 16px;"> Phone Number     </span>            <!--<input type="text" name="name"  style="color: black;"value="<?php echo $phone;?>"><br><br>-->
        </label>
    </div>
        <input type="int" name="ph_number" style="color: black;" value="<?php echo $phone?>">
      
        <div>
            
        </div>
    

    <input type="submit" name="submit" style="color: black;" value="Update Details" onclick="return confirm('Are You Sure  ?');">
</form></center>
</body>
</html>