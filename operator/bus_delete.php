<html>
    <?php
      session_start();
   $op_id=$_SESSION['user_id'];

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

    h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
    body {font-family: "Open Sans"}


    .select-boxes{width: 280px;text-align: center;}
    select {
        background-color: #F5F5F5;
        border: 1px double #15a6c7;
        color: #1d93d1;
        font-family: Georgia;
        font-weight: bold;
        font-size: 14px;
        height: 39px;
        padding: 7px 8px;
        width: 250px;
        outline: none;
        margin: 10px 0 10px 0;
    }
    select option{
        font-family: Georgia;
        font-size: 14px;}
    /*h6{
        font-size: 14px;
        height: 39px;
        width: 250px;

        }*/
    input{
        font-family: Georgia;
        font-weight: bold;
        font-size: 14px;
        height: 39px;
        padding: 7px 8px;
        width: 250px;
        outline: none;
        margin: 10px 0 10px 0;}

    button{
        font-family: Georgia;
        font-weight: bold;
        font-size: 10px;
        height: 30px;
        padding: 7px 8px;
        width: 100px;
        outline: none;
        margin: 10px 0 10px 0;}
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
                                                            <a href="operator.php"><h1>Delete a bus... </h1></a>
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
    


      <div class="w3-container w3-white w3-margin w3-padding-large "style="height:10%;">
        
          <h2 style="text-align: center";>Delete a bus...</h2>
          <br>
          <div class="select-boxes">
    <?php

  
 // $user_id=6;
     //$user_id=$_SESSION['id'];
    
    //Include database configuration file
    include('dbConfig.php');
    
    //Get all country data
    $query = $db->query("SELECT bus_id,name FROM bus WHERE operator_id=$op_id");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?><style>

img { position: absolute; left: 50%; top: 30%;  margin: -63px 0 0 -182px;}
</style>
               <div class="login-page">
  <div class="form">
      <div >
          <img src="img/volvo2.jpg" alt="Girl in a jacket" style="width:650px;height:500px; "> 
      </div><!--
  <div class="slideshow-container" style="  position: absolute; right: 65px; ;width: 800px; ">
  <div class="mySlides fade" >
      
    <div class="numbertext">1 / 3</div>
    <img src="img/70266210-bus-wallpapers.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img/volvo2.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img/ELEC_CITY.0.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>-->

<!--<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div> -->
  
    <form class="login-form" >
    <select name="country" id="country" >
        <option value="">Select Bus</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['bus_id'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">No Bus Available</option>';
        }
        ?>
    </select>
<!--    
    <select name="date" id="date">
        <option value="">Select Date</option>
        <?php
//        foreach ($weekOfdays as $w){
//             echo '<option value="'.$w.'">'.$w.'</option>';
//        }
        ?>
    </select>
        <select name="time" id="time">
        <option value="">Select Time</option>
    </select>-->
       <input type="submit" class="button" name="submit" value="Confirm" onclick="return confirm('Are You Sure(There may be bookings on your bus) ?');" />
    </script>
    <?php

include('dbConfig.php');

    
    
  

   

   if(isset($_GET['submit']) ){
     //   $result = confirm("Want to delete?");

        //$query = $db->query("SELECT date,bus_id from date WHERE date_id= '$datee'");
    
    
    //Count total number of rows
//    $rowCount = $query->num_rows;
//     if($rowCount > 0){
//      //  echo '<option value="">Select Type</option>';
//        while($row = $query->fetch_assoc()){ 
//            
//            $date=$row['date'];
//            //echo '<option value="'.$row['bus_id'].'">'.$row['date'].'</option>';
//     }}
        $bus_id=$_GET['country'];
//        $date=$_GET['date'];
//         $time=$_GET['time'];
//            $querye = $db->query("SELECT bus_id FROM availability WHERE bus_id='$bus_id' and  date='$date' and time='$time'");

//$rowCounte = $querye->num_rows;
//
////$columnValues = Array();
//if($rowCounte > 0){
//
// echo "<script type='text/javascript'>alert('Already Selected')</script>";
//}
//else{
//    echo $bus_id;
//$querye = $db->query("SELECT * FROM booking WHERE bus_id='$bus_id'");
//echo $bus_id;
//$rowCounte = $querye->num_rows;
//
//$columnValues = Array();
//if($rowCounte > 0){
//
//while ( $row4 = $querye->fetch_assoc()) {
//
//  $user_id=$row4['user_id'];
//  $date=$row4['date'];
//  $time=$row4['time'];
//  $querye23=$db->query("INSERT INTO messages (user_id,message) VALUES('$user_id',kj)");
//}
//}
//else{
//    //Your booking on +'$date'+'$time'+cancelled due to bus unavailabilty
//   // $_SESSION['seats'] = $columnValues;
//    //echo '<script>window.location="Seat_select.php"</script>';
//}
$query = $db->query("SELECT * FROM booking WHERE bus_id='$bus_id'");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        
        
        while($row = $query->fetch_assoc()){
            $user_id=$row['customer_id'];
 $date=$row['date'];
  $time=$row['time'];
  $seatno=$row['seat_no'];
  $arrive=$row['arrive_place'];
  $dep=$row['depart_place'];
  $ide="Your Booking on Date ".$date." Time ".$time." Seat id ".$seatno." From ".$arrive." To ".$dep." has cancelled due to unexpected bus unavailability";
$query11 = $db->query("INSERT INTO messages (user_id,message) VALUES( '$user_id','$ide')");
         //   
    }}
       $querye22 = $db->query("DELETE FROM bus WHERE bus_id=$bus_id");

  


      if($querye22){

      echo "<script type='text/javascript'>alert('Success Fully Deleted')</script>";
      echo '<script>window.location="bus_delete.php"</script>';
      
      }
      else{
          echo "<script type='text/javascript'>alert(' Update Failed')</script>";
      }
    
//  
   // $_SESSION['seats'] = $columnValues;
    //echo '<script>window.location="Seat_select.php"</script>';
//}
       
    }
        ?>