<?php
$password = "-/*/st56dy8+66s{|1208(=";
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
<title>Stage 2 - Hackfest</title>
</head>
<body>
<center>
<?php
if (!$success) {
if ($fail) {
?>
<p>Wrong password! Try harder.</p>
<?php } else { ?>
<p><!-- Password: <?php echo $password; ?> -->There, but not there. Right, but also wrong.</p>
<?php } ?>
<p><strong>Hint:</strong> All is simply not as it seems. What is allowed is a specific encoding.</p>
<!--<form><input type="password" name="password"/><input type="submit" /></form>-->
<?php } else { ?>
<p>Excellent work! <a href="7iReytMiwV-3.php">Go on next</a>.</p>
<?php } ?>
</center>
</body>
</html>
