<?php
$password = "654sd#(@7924@sf#gsdj@l[];'1$";
$success = false;
$fail = false;

if (isset($_POST['password'])) {
    if ($_POST['password'] == base64_encode($password)) {
        $success = true;
    }
    else {
        $fail = true;
    }
}

function obfuscate($str) {
    $output = "";
    foreach(str_split($str) as $char) {
        $output .= "\x" . dechex(ord($char));
    }
    return $output;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Stage 3 - Hackfest</title>
<script type="text/javascript">
function password() {
    return "<?php echo $password; ?>";
}
</script>
</head>
<body>
<center>
<?php
if (!$success) {
if ($fail) {
?>
<p>Wrong password! Try harder.</p>
<?php } else { ?>
<p>Things've gotten old, chum! Figure them out. The password is disguised, has to be encoded and old methods of entry do not work anymore.</p>
<?php } ?>
<p><strong>Hint:</strong> A postman POSTs the mail. <strong>Hint 2:</strong> Binary is base 2, octa is base 8, decimal is base 10, hex is base 16 but the password has to be encoded with a base of 64.</p>
<?php } else { ?>
<p>Go on next, comrade! <a href="5QFM513rBY-4.php">Go on next</a>.</p>
<?php } ?>
</center>
</body>
</html>
