<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
include 'header.php';
?>

<div class="width">
<form method="post">
<label for="start">Start month:</label>

<label for="nyhetsrubrik">Rubrik</label><br>
  <input type="text" id="nyhetsrubrik" name="Name" value=""><br>

<label for="date">Date</labael><br>
<input type="date" id="test" name="Date" value="" >


<input type="submit" name="form-submit" value="Submit">
</form>

</div>


</body>
</html>


<?php

include 'config.php';

$queryResult = $conn->query("SELECT * FROM bookings");

if(isset($_POST['form-submit'])){
    
    $firstname = $_POST['Name'];
	$lastname =$_POST['Date'];

    echo $firstname . "<br>" ;
    echo $lastname . "<br>" ;

    



    
}


include 'footer.php' ;

?>

