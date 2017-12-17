<?php
//session_start();
$busid=4;
//if (isset($_POST['search'])) {
//$id = $_POST['id'];
//echo $email;
$db = mysqli_connect("localhost", "root", '', "ticketbooking") or die ("Failed to connect");
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

    $db = mysqli_connect("localhost", "root", '', "ticketbooking") or die ("Failed to connect");
    $query1 = "update bus set name='$busname',total_seats='$totseats', available_seats='$avaseats', route_id='$routeid', bus_number='$busno',type='$type' where bus_id=$busid ";
    $result1 = mysqli_query($db,$query1);
    if($result1) {
        echo "Succesfully updated";
        //echo '<script>window.location="customer.php"</script>';

        //header('Location: login.php');
    }
    else {
        echo "Failed to update";
    }
}

?>
<form method="post" action="">
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
    <input type="int" name="ty" style="color: black;" value="<?php echo $type?>">



    <input type="submit" name="submit" style="color: black;" value="Update Details">
</form>
