<?php
    $age = "18";

    if ($age >= 18 && $age < 90){
        echo "<h1>Vous pouvez entrer.</h1>";
    }elseif ($age >= 90){
        echo "<h1>Bonjour monsieur, comment vous portez vous aujourd'hui?</h1>";
    }elseif ($age >= 16 && $age < 18){
       echo "<h1>Vous êtes presque majeur.</h1>";
    }elseif ($age >= 14 && $age < 16){
        echo "<h1>Vous êtes jeune</h1>";
    }elseif ($age < 14 ){
        echo "<h1>Vous êtes trop jeune</h1>";
    }else {
        echo "<h1>Interdit</h1>";
    }
?>