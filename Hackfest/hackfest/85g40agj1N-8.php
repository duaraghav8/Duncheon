<?php
$password = "MEOW!";
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
<title>Stage 8 - Hackfest</title>
</head>
<body>
<center>
<?php
if (!$success) {
if ($fail) {
?>
<p>Wrong password! Try again.</p>
<?php } ?>
<p>You are the boss of the Italian mafia. One of your goons, was assigned to extract the password from the Italian Prime Minister, Enrico Letta. He was successful, but couldn't send it to you in plain-text for the obvious reasons. So he sent this image:</p>
<img src= "85g40agj1N-8.png" />
<p><strong>Hint:</strong> Sometimes you really need to think like a noob stenographer.</p>
<p>
<form method="post">
Password: <input type="text" name="password" /><br />
<input type="submit" value="Try" />
</form>
</p>
<?php } else { ?>
<p>Excellent work! <a href="MlmWVnQXEw-9.php">Next</a>.</p>
<?php } ?>
</center>
</body>
</html>
