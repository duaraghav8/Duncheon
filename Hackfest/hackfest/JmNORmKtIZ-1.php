<?php
$password = "5R9d6629R2";
$success = false;
$fail = false;

if (isset($_GET['password'])) {
    if ($_GET['password'] == $password) {
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
<title>Stage 1 - Hackfest</title>
</head>
<body>
<center>
<?php
if (!$success) {
if ($fail) {
?>
<p>Wrong password! Try harder.</p>
<?php } ?>
<p>Have you seen the password yet?<!-- Password: <?php echo $password; ?> --> Even if you have, you still need to know where to enter it! :O</p>
<p><strong>Hint:</strong> Get, get, get the page, running down the web. Or twist, twist, twist in rage until you wind up dead.</p>
<!--<form><input type="password" name="password"/><input type="submit" /></form>-->
<?php } else { ?>
<p>Excellent work! <a href="9rvT3oz9c4-2.php">Go on next</a>.</p>
<?php } ?>
</center>
</body>
</html>
