<?php 
require_once 'include/header.php';
?>
<?php 
session_start();
$passcheck=$_SESSION['login'];
if($passcheck!==true){
    header("Location:login.php");
}
?>
<?php 
session_start();
?>
<h1>Welcome, Police Officer!</h1>
<form action="change_password.php">
    <input type="submit" value="Change my password" />
</form>
<form action="people_lookup.php">
    <input type="submit" value="Look up people information" />
</form>
<form action="vehicle_lookup.php">
    <input type="submit" value="Look up vehicle information" />
</form>
<form action="add_vehicle.php">
    <input type="submit" value="Add new vehicle data" />
</form>
<form action="add_incident.php">
    <input type="submit" value="Add new incident" />
</form>
<form action="retrieve_report.php">
    <input type="submit" value="Retrieve Incident Report" />
</form>

<?php 
require_once 'include/footer.php';
?>