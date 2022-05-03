<!-- 










 -->



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
<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php

//Olimpia Milano - Cantù | 55-60
     for ($i=0; $i < count($matches); $i++) { 
        echo('<p>');
        echo($matches[$i]["casa"]) . ' - ' . $matches[$i]["ospite"] . ' | ' . $matches[$i]["punticasa"] . '-' . $matches[$i]["puntiospite"];
        echo('</p>');
        
       
        
     }

?>


<h2>Snack 2</h2>
<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
    // $user = [
    //     "name" => "antonio",
    //     "mail" => "example.example@lol.com",
    //     "age" => 28
    // ];

    $name = '';
    $mail = '';
    $age = '';

    if (isset($_GET["name"], $_GET["mail"], $_GET["age"])) {
        $name = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];

        if( 
            strlen($name) > 3 &&
            strpos($mail, '.') && 
            strpos($mail, '@') &&
            is_numeric($age)
          ){
                echo('<p>Accesso riuscito</p>');
            } else {
                echo('<p>Accesso negato</p>');
            }

    }


?>

<h2>Snack 3</h2>
 <!-- Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
   $randomNumbers = [];

   while (count($randomNumbers) < 15) {
       $number = rand(0, 30);

       if(!in_array($number, $randomNumbers)){
           $randomNumbers[] = $number;
       }
   }

   var_dump($randomNumbers);
?>

<h2>Snack 4</h2>
<!-- Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
    $quote = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Harum laudantium quisquam.
              Dolores aspernatur illum esse repellat ratione ipsum voluptatibus rem dolorem tempore accusamus blanditiis nihil provident.
              Recusandae magnam.
              Non facilis.';

   $findMe = '.';

   $subQuotes = explode($findMe , $quote);

   for ($i=0; $i < count($subQuotes); $i++) { 
       echo('<p>');
       echo($subQuotes[$i]);
       echo('</p>');

   }

    
?>

<h2>Snack Bonus</h2>
<!-- Snack Bonus
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
Se concludete e vi avanza tempo potete curare maggiormente la UI oppure migliorare il codice PHP con controlli sui dati -->
<?php 
//data
    $class = [
        [
            "nome" => "Antonio",
            "cognome" => "Ruggiero",
            "voti" => [5, 7, 10, 3, 5, 6]
        ],
        [
            "nome" => "Rene",
            "cognome" => "Ferretti",
            "voti" => [3, 2, 9, 5, 5, 4]
        ],
        [
            "nome" => "Duccio",
            "cognome" => "Patane",
            "voti" => [7, 3, 3, 3, 4, 8]
        ],
        [
            "nome" => "Totti",
            "cognome" => "Biascica",
            "voti" => [5, 2, 3, 4, 3, 2]
        ],
    ];
?>

<?php

    

    for ($i=0; $i < count($class); $i++){
        $voti = $class[$i]["voti"];
        $sommaVoti = array_sum($voti);
        $mediaVoti = round($sommaVoti / count($voti));

        echo('<p>');
        echo($class[$i]["nome"] . ' ' . $class[$i]["cognome"] . ' | Media voti: ' . $mediaVoti);
        echo('</p>');
    }
?>




