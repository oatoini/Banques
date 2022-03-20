<h1>POO Banque</h1>
<?php
    
    require "Compte.php";
    require "Titulaire.php";

    $T1 = new Titulaire ("Othmann","Atoini", "1991-04-03", "Strasbourg");

    $t1 = new Compte ("Compte courant n°A1B2C3",350,"€", $T1);
    $t2 = new Compte ("Livret A n°G7H8I9",100,"€", $T1);
    echo "<h2>".$T1."</h2><br>";

    $t1->credit(0);
    $t2->credit(0);
    $t1->debit(0);
    $t2->debit(0);
    echo $T1 -> afficherComptes ();

    $T2 = new Titulaire ("Selcuk","Yalcin", "1980-01-01", "Strasbourg");

    $t3 = new Compte ("Compte courant n°D4E5F6",250,"€", $T2);
    $t4 = new Compte ("Livret A n°J5K6L7",150,"€", $T2);
    echo "<h2>".$T2."</h2><br>";

    $t3->credit(0);
    $t4->credit(0);
    $t3->debit(0);
    $t4->debit(0);
    echo $T2 -> afficherComptes ();

    ?>