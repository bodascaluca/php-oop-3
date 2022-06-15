<!--  
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali. 
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti. :carello_della_spesa:
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
-->

<?php 
    // include_once __DIR__ . "/Prodotto.php";
    include_once __DIR__ . "/Alimentazione.php";
    include_once __DIR__ . "/Cuccia.php";
    include_once __DIR__ . "/Guinzaglio.php";
    include_once __DIR__ . "/Utente.php";

    $crocchetta_magica = new Alimentazione("Polox", "Next", 16, 2000, "Secco");
    // var_dump($crocchetta_magica);

    $bustina = new Alimentazione("Bustinux", "Purino", 10, 30, "Umido" );
    // var_dump($bustina);

    $cuccia_iglu_rosa = new Cuccia("Igloo rosa", "Zolux", 42, "peluche", "dentro casa");
    // var_dump($cuccia_iglu_rosa);

    $cuccia_rex= new Cuccia("Rex", "Zolux", 100, "legno", "fuori casa");
    // var_dump($cuccia_rex);

    $guinzaglio_Disney = new Guinzaglio("Baz", "Brexit", 20, "Disney", "no GPS", "cane picolo");
    // var_dump($guinzaglio_Disney );

    $guizaglio_proxy = new Guinzaglio("Proxy", "War_tech", 50, "", "con GPS", "cane piccolo");
    // var_dump($guizaglio_proxy);

    $matteo = new Utente("Matteo","matteo.rocca@gmail.com", "1234 4567 1230 2309", 11, 2021 );
    $matteo->addProductCart($guinzaglio_Disney);
    $matteo->addProductCart($crocchetta_magica);

    $marco = new Utente("Marco","marco.zampoglio@gmail.com", "0934 4567 0123 2309", 02, 2021 );
    $marco->addProductCart($guizaglio_proxy);
    $marco->addProductCart($bustina);

    var_dump($crocchetta_magica);
    var_dump($marco);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>
</head>
<body>

    <h3>Proditti disponibili :</h3>
    <ul>
        <li> <?php echo $crocchetta_magica->printInfo(); ?> </li>
        <li> <?php echo $bustina->printInfo(); ?> </li>
        <li> <?php echo $cuccia_iglu_rosa->printInfo(); ?> </li>
        <li> <?php echo $cuccia_rex->printInfo(); ?> </li>
        <li> <?php echo $guinzaglio_Disney->printInfo(); ?> </li>
        <li> <?php echo $guizaglio_proxy->printInfo(); ?> </li>
    </ul>

    <h2>Ciao <?php echo $matteo->nome ?>. Ecco il tuo carello:</h2>
    <ul>
        <?php foreach($matteo->carello as $carelloItem) {?>
        <li> <?php echo $carelloItem ->printInfo() ?></li>
        <?php } ?>
    </ul>

    <h2> Totale : € <?php echo $matteo->getTotalPrice(); ?></h2>
  
    <h2> <?php echo $matteo->yearValidation(); ?></h2>
    <h2> <?php echo $matteo->emailCheck(20); ?></h2>

</body>
</html>