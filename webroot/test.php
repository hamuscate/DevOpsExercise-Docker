<?php

$firstname = "Hans-Achim";
$lastname = "Muscate";

echo "Hello " . $firstname . " " . $lastname . "!";
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];

?>

<form action="action.php" method="post">
 <p>Your name: <input type="text" name="name" /></p>
 <p>Your age: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>

