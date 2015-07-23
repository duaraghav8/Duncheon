<?php
$password = "782474317884";
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
<title>Stage 4 - Hackfest</title>
</head>
<body>
<center>
<?php
if (!$success) {
if ($fail) {
?>
<p>Wrong password! Try harder.</p>
<?php } ?>
<p>John Doe is your average computer user who hides passwords in text files. Since he had been hacked because of this the last time, he decided to go one step further. He's created a <a href="5QFM513rBY-4.txt">text file</a> which contains a password hint. But on the advice of the IT guy, he decided to add random symbols and numbers in between the various alphabets so that it's very hard to figure it out.</p>
<p>Are you upto the task?</p>
<p>
<form method="post">Password: <input type="text" name="password" /><br /><input type="submit" value="Check" /></form>
</p>
<?php } else { ?>
<p>Good job, but the <a href="mw7lwrbthe-5.php">next one</a> won't be as easy.</p>
<?php } ?>
</center>
</body>
</html>
