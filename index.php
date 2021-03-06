<?php

// $name = 'Pietro';

$text = 'Harry Potter è una serie di romanzi fantasy scritta da J. K. Rowling, incentrata sulle avventure del giovane mago Harry Potter e dei suoi migliori amici Ron Weasley ed Hermione Granger, studenti della Scuola di Magia e Stregoneria di Hogwarts. Il mondo magico nel quale è ambientata la saga consiste in una società parallela che vive celata al resto del mondo reale, quello delle persone comuni, che vengono definite "babbani". L arco narrativo segue principalmente lo scontro tra il protagonista e il mago oscuro Lord Voldemort, desideroso di conquistare il mondo magico e l immortalità.
Ideata nei primi anni 1990, la serie, pubblicata in sette libri tra il 1997 e il 2007, riscosse un ampio successo commerciale e mediatico, generando un grande seguito sia tra i più giovani, sia tra gli adulti. Tradotta in oltre ottanta lingue, tra le quali il latino e il greco antico, Harry Potter resta una delle serie di libri più vendute nella storia dell editoria, con una vendita complessiva di 500 milioni di copie fino al 2018.[1] Oltre ai sette romanzi, l autrice ha pubblicato tre pseudobiblia come supplemento alla saga: Gli animali fantastici: dove trovarli, Il Quidditch attraverso i secoli e Le fiabe di Beda il Bardo. A ciò si aggiunge la sceneggiatura dello spettacolo teatrale Harry Potter e la maledizione dell erede, pubblicata nel 2016. Nel 2012 è stato inoltre aperto il portale web Pottermore, dedicato alla divulgazione di nuovi approfondimenti sul mondo magico.
Associata anche al genere del romanzo di formazione, la saga si concentra da una parte nel tratteggiare l evoluzione psicologica di molti dei personaggi e, dall altra, nel presentare e approfondire diversi temi, tra i quali la morte, l amore, il libero arbitrio, il razzismo, il classismo e il potere politico, generando numerose critiche letterarie, oltre a dibattiti religiosi relativi ai valori morali trasmessi nell opera. Molti critici hanno notato similitudini tra Harry Potter e varie altre saghe fantasy, in particolare evidenziando punti di contatto con le opere di C. S. Lewis e di J. R. R. Tolkien. Il mondo costruito dalla Rowling è ispirato alla tradizione e al folclore di molti paesi, in modo particolare al folclore britannico. La popolarità della saga ha esercitato un notevole impatto culturale, espressosi inizialmente su internet, nel quale il fandom ha avuto modo di aggregarsi e di confrontarsi su varie piattaforme, quali forum e fansite. In ambito sportivo si è affermato il quidditch, nuovo sport ispiratosi all omonimo gioco della saga, mentre in ambito musicale alcuni gruppi hanno dato vita al genere del wizard rock.
La serie cinematografica ispirata alla saga, prodotta dalla Warner Bros., è stata al momento della sua conclusione la più remunerativa della storia del cinema, con un incasso di oltre sette miliardi di dollari, e i film della serie hanno ottenuto numerosi premi cinematografici. Ai lungometraggi della saga si sono ispirati numerosi videogiochi, i primi dei quali sviluppati dalla EA Games, e una serie di parchi tematici. A partire dal 2016 la Warner Bros. ha dato avvio alla serie di Animali fantastici, incentrata sulle avventure dell immaginario autore degli Animali fantastici: dove trovarli.';
$lunghezza = strlen($text);
$numero_sostituzioni =0;
$name = $_GET['name'];
$testo_modificato = str_replace($name,'***',$text,$numero_sostituzioni);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php echo $testo_modificato ?>
    </p>
    <h1>
        Il testo è lungo <?php echo $lunghezza ?> caratteri spazi inclusi.
    </h1>
    <h1>
        Il numero di sostituzioni è <?php echo $numero_sostituzioni ?>.
    </h1>
</body>
</html>