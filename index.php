<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>
<body>
    <?php 
    /*SNACK1
    Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
    Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55-60*/
    ?>

    <?php
    //creazione array
    $matches = [
        [
            'squadraCasa'=> 'Orlando Magic',
            'squadraOspite' => 'Toronto Raptors',
            'puntiCasa' => 54,
            'puntiOspite' => 34,
        ],
        [
            'squadraCasa'=> 'Orlando Magic',
            'squadraOspite' => 'Chicago Bulls',
            'puntiCasa' => 45,
            'puntiOspite' => 64,
        ],
        [
            'squadraCasa'=> 'Orlando Magic',
            'squadraOspite' => 'Indiana Pacer',
            'puntiCasa' => 57,
            'puntiOspite' => 31,
        ],
    ];
    ?>

    <ul>
        <?php //con lista
        for ($i = 0; $i < count($matches); $i ++) : ?>
            <li>
                <h2> <?php echo $matches[$i] ['squadraCasa']?></h2>
                <h2><?php echo $matches[$i] ['squadraOspite']?></h2>
                <h2><?php echo $matches[$i] ['puntiCasa']?></h2>
                <h2><?php echo $matches[$i] ['puntiOspite']?></h2>
    
            </li>
        <?php endfor; ?>    
    </ul>

    <ul>
        <?php //concatenazione
        for($i = 0; $i < count($matches); $i++) : ?>
            <li>
                <?php echo $matches[$i]['squadraCasa'] . ' - ' . $matches[$i]['squadraOspite'] . ' | ' . $matches[$i]['puntiCasa'] . ' - ' . $matches[$i]['puntiOspite']; ?>
            </li>
        <?php endfor; ?>
    </ul>



    <?php 
    /*SNACK2
    Passare come parametri GET (query string) name, mail e age
    verificare (cercando i metodi che non
    conosciamo nella documentazione) che:

    3. che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”*/
    ?>

    <br>

    <?php
    //creazione variabili
    $name = $_GET ['name']; //sarah
    $mail = $_GET ['mail']; //sarah@gmail.com
    $age = $_GET ['age']; //31

    if( empty($name) || empty($mail) || empty($age) ) {
        echo 'Inserisci i parametri';
    }
    elseif( strlen($name) < 3 || strpos($mail, '@') === false || strpos($mail, '.') === false || is_numeric($age) ) {
        echo 'Accesso negato' . '<br />';
    }
    else {
        echo 'Accesso riuscito' . '<br />';
    }
    ?>





</body>
</html>