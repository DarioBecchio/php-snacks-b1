<?php
/*Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. */

$text = "Mr e Mrs Dursley, di Privet Drive numero 4, erano orgogliosi di poter affermare che erano
perfettamente normali, e grazie tante. Erano le ultime persone al mondo da cui aspettarsi che
avessero a che fare con cose strane o misteriose, perché sciocchezze del genere proprio non le
approvavano. Mr Dursley era direttore di una ditta di nome Grunnings, che fabbricava trapani. Era
un uomo corpulento, nerboruto, quasi senza collo e con un grosso paio di baffi. Mrs Dursley era
magra, bionda e con un collo quasi due volte più lungo del normale, il che le tornava assai utile,
dato che passava gran parte del tempo ad allungarlo oltre la siepe del giardino per spiare i vicini. I
Dursley avevano un figlioletto di nome Dudley e secondo loro non esisteva al mondo un bambino
più bello. Possedevano tutto quel che si poteva desiderare, ma avevano anche un segreto, e il
loro più grande timore era che qualcuno potesse scoprirlo. Non credevano che avrebbero potuto
sopportare che qualcuno venisse a sapere dei Potter. Mrs Potter era la sorella di Mrs Dursley, ma
non si vedevano da anni. Anzi, Mrs Dursley faceva addirittura finta di non avere sorelle, perché
Mrs Potter e quel buono a nulla del marito non avrebbero potuto essere più diversi da loro di così.
I Dursley rabbrividivano al solo pensiero di quel che avrebbero detto i vicini se i Potter si fossero
fatti vedere nei paraggi. Sapevano che i Potter avevano anche loro un figlio piccolo, ma non lo
avevano mai visto. E il ragazzino era un'altra buona ragione per tenere i Potter a distanza: non
volevano che Dudley frequentasse un bambino di quel genere. Quando i coniugi Dursley si
svegliarono, la mattina di quel martedì grigio e coperto in cui inizia la nostra storia, nel cielo
nuvoloso nulla faceva presagire le cose strane e misteriose che di lì a poco sarebbero accadute in
tutto il paese. Mr Dursley scelse canticchiando la cravatta da giorno più anonima del suo
guardaroba, e Mrs Dursley continuò a chiacchierare ininterrottamente mentre con grande sforzo
costringeva sul seggiolone Dudley che urlava a squarciagola. Nessuno notò il grosso gufo bruno
che passò con un frullo d'ali davanti alla finestra.";

$paragraphs = explode('.', $text);
var_dump($paragraphs);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack_5_PHP</title>
</head>
<body>
    <?php foreach ($paragraphs as $paragraph) : ?>
        <!-- Equivale a scrivere /*(?php echo $paragraph?)*/ -->
        <p><?= $paragraph ?></p>
    <?php endforeach;?>
</body>
</html>