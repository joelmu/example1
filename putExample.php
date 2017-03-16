<h2>Put method</h2>
<form method="POST" action="putExample.php">
	<label for="fname">Firstname</label>
	<input type="text" id="fname" name="fname" value="">
	<br>
	<label for="fname">Lasttname</label>
	<input type="text" id="lname" name="lname" value="">
	<input type="submit" name="sendBtn" value="Send">
</form>
<?php
$btn=$_POST['sendBtn'];
if(isset($btn)){
$fn=$_POST['fname'];
$ln=$_POST['lname'];
echo 'Hello '.$fn.' '.$ln;
}
?>