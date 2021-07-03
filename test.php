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
