<!-- 
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta


Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.


Snack Bonus
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
Se concludete e vi avanza tempo potete curare maggiormente la UI oppure migliorare il codice PHP con controlli sui dati -->



<?php
    // phpinfo(); <---testing if localhost is working correctly
    //data
    $matches = [
        [
            "casa" => "Olimpia Milano",
            "ospite" => "Cantu",
            "punticasa" => "55",
            "puntiospite" => "60",
        ],
        [
            "casa" => "Fortitudo Bologna",
            "ospite" => "Napoli Basket",
            "punticasa" => "50",
            "puntiospite" => "43",
        ],
        [
            "casa" => "Germani Brescia",
            "ospite" => "Varese",
            "punticasa" => "102",
            "puntiospite" => "71",
        ],
        [
            "casa" => "Energia Trentino",
            "ospite" => "Reggio Emilia",
            "punticasa" => "69",
            "puntiospite" => "77",
        ],

    ];

   



?>

<h1>PHP SNACKS BLOCCO 1</h1>

<h2>Snack 1</h2>
<?php

//Olimpia Milano - Cantù | 55-60
     for ($i=0; $i < count($matches); $i++) { 
        echo('<p>');
        echo($matches[$i]["casa"]) . ' - ' . $matches[$i]["ospite"] . ' | ' . $matches[$i]["punticasa"] . '-' . $matches[$i]["puntiospite"];
        echo('</p>');
        
       
        
     }

?>


<h2>Snack 2</h2>
<?php
    
?>

