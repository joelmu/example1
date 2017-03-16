<h2>Get method</h2>
<form method="GET" action="getExample.php">
	<label for="fname">Firstname</label>
	<input type="text" id="fname" name="fname" value="">
	<br>
	<label for="fname">Lasttname</label>
	<input type="text" id="lname" name="lname" value="">
	<input type="submit" name="sendBtn" value="Send">
</form>
<?php
$btn=$_GET['sendBtn'];
if(isset($btn)){
$fn=$_GET['fname'];
$ln=$_GET['lname'];
echo 'Hello '.$fn.' '.$ln;
}
?>