<?php
$startTime = new DateTime('2014-02-04 12:38 PM', new DateTimeZone('Asia/Kolkata'));
$now = new DateTime(null, new DateTimeZone('Asia/Kolkata'));
$access_allowed = $now >= $startTime;
?>
<!DOCTYPE html>
<html>
<head>
<title>HackFest: Stage 1</title>
</head>
<body>
<center><h1>Welcome to HackFest</h1></center>
<p>
All the participants from various schools are welcome to HackFest, the first school-level compeitition of its kind.
</p>

The rules are right here. We hope you have already understood them. But make sure to first find them...

<!--
<h2>Rules:</h2>
<ul>
<li>The time limit for the competition is 4 hours. You will be able to begin competition at exactly 10 AM (we've ensured that) and it ends at exactly 2 PM.</li>
<li>Do not try to connect to the laptops of others or use any unfair means, including but not limited to trying to break into the server (outside of the instructions). Your school will be disqualified if you are found (and trust us, you will be).</li>
<li>There are a number of mini-goals and checkpoints. Hints will be provided to the participants in the form of riddles. Solving these riddles correctly will provide information about the technique to use to proceed to the next checkpoint.</li>
<li>In case no team manages to complete everything (we challenge you), the team which has reached the farthest wins.</li>
<li>In case of a draw, the team which finished earlier will win.</li>
</ul>

<center><p>Good luck! May the odds ever be in your favour. <i>(Courtesy: Suzanne Collins)</i></p></center>
-->

<h2>Instructions:</h2>
<ul>
<li>Reach the farthest in the least time possible.</li>
<li>Report to us as soon as you clear each stage. We will record the time.</li>
<li>Remember: No reporting, no scoring.</li>
</ul>

<center><?php if ($access_allowed) {?><a href="JmNORmKtIZ-1.php">Begin the competition</a><?php } else { ?> It's not time yet! Keep refreshing your page to get the link. <?php } ?></center>
</body>
</html>
