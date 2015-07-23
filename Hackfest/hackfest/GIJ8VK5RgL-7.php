<?php
$password = "136ilovebunnies247";
$success = false;
$fail = false;

if (isset($_POST['password'])) {
    if ($_POST['password'] == $password) {
        $success = true;
    }
    else {
        $fail = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Stage 7 - Hackfest</title>
</head>
<body>
<center>
<?php
if (!$success) {
if ($fail) {
?>
<p>Wrong answer! Try again.</p>
<?php } ?>
<p>Bob has made a simple encryption for his password and stored it as a <a href="GIJ8VK5RgL-7.txt">file</a> on his website. Unfortunately for him, you stumbled upon it. Can you figure out the password?</p>
<p><strong>Hint:</strong> Bit manipulation. Remember that each char can have max value of 255. The manipulation is such that it does not need any other string.<br /><strong>Note:</strong> All the characters in the file cannot be displayed but the password consists of only alphanumeric characters.</p>
<p><form method="post">Password: <input type="text" name="password" /><br /><input type="submit" value="Check" /></form></p>
<?php } else { ?>
<p>Great job! <a href="85g40agj1N-8.php">Go on next</a>.</p>
<?php } ?>
</center>
</body>
</html>
