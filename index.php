<?php 
$vedi_lista = $_GET['lista']
?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Yamaha</title>
  </head>
  <body style="background-color: green">
  	<?php 
  	if ($vedi_lista =='si') {
  	?>
  	<ul>
    <?php
    	$a = ["mela","banana","pera","mango"];
    	foreach ($a as $mela) {
    		print '<li>'. $mela.' </li>';
    	}
    ?>
    <ul>
    	<?php 
    }
    ?>
    <div class="container">
  <div class="row">
    <div class="col-sm">
     <h1 style="color:red;">YAMAHA</h1>
    <img class="img-fluid" src="yamaha-logo.png">
    <h2 style="color:yellow;">Yamaha Corporation</h2>
    <p>Fu fondata nel 1887 a Hamamatsu, prefettura di Shizuoka come Nippon Gakki Company, Limited (日本楽器製造株式会社, Nippon Gakki Seizō Kabushiki Gaisha) da Torakusu Yamaha, un costruttore di pianoforti e organi a canne, e costituita il 12 ottobre 1897. L'origine della società come produttrice di strumenti musicali è ancora percepibile dal logo dell'azienda, un trio di diapason incrociati.

Nel 1955 ha iniziato a diversificare la produzione, indirizzandosi anche a quella dei motocicli e dei motori, fondando una divisione autonoma, la Yamaha Motor Co., di cui, al 31 dicembre 2006, possedeva il 22,7% del capitale sociale.

Nel mese di ottobre 1987, in occasione del 100º anniversario, il suo nome è stato cambiato in Yamaha Corporation.

Nel 1989, Yamaha ha presentato al mondo il primo masterizzatore CD. Da allora, la Yamaha ha acquistato Sequential Circuits nel 1989. Ha inoltre acquisito il produttore tedesco di software audio musicale Steinberg nel 2004.
Yamaha da allora è cresciuta fino a diventare il più grande costruttore mondiale di strumenti musicali (pianoforti e tastiere, strumenti ad arco, chitarre e bassi, strumenti a fiato, batterie, percussioni orchestrali e per marching band), così come è oggi leader nella produzione di semiconduttori, prodotti hi-fi e audio/video, elettrodomestici e mobili, metalli speciali, macchine utensili e robot industriali[senza fonte].

Yamaha Corporation è molto conosciuta per il suo programma di insegnamento musicale, che ha avuto inizio nel 1980.

Dal 2014 è sponsor ufficiale della squadra di calcio argentina Club Atlético Lanús che milita nella massima divisione dell'Argentina.
    </div>
    <div class="col-sm">
      <h2 style="color:pink;">Yamaha Motor</h2>
<p>La Yamaha Motor Co. Ltd (ヤマハ発動機株式会社 Yamaha Hatsudōki Kabushikigaisha?) è un'azienda produttrice di veicoli motorizzati, motoveicoli e motori marini. Nasce il 1º luglio 1955 come scorporo dalla Yamaha Corporation, a sua volta inizialmente Nippon Gakki nata nel 1897 e impostasi come costruttrice di organi e pianoforti.

La Yamaha è la seconda azienda produttrice di moto al mondo in ordine di grandezza, dopo la connazionale Honda.
La Yamaha si è impegnata nel mondo delle corse fin dall'anno di nascita, nel quale vinse la 3ª edizione della prestigiosa corsa in salita sul circuito del Monte Fuji con la "YA-1", primo modello costruito dalla casa. La divisione sportiva dell'azienda motociclistica è denominata Yamaha Racing.

Ha vinto 9 edizioni del Rally Dakar tra le moto e 5 con i quad.
La Yamaha è stata costruttrice di motori per Mondiale di Formula 1, fornendo varie scuderie, dal 1989 al 1997.

Nel 1997, come motorista della Arrows, sfiorò la vittoria nel Gran Premio d'Ungheria, quando Damon Hill, autorevolmente in testa alla corsa, ebbe un problema al cambio nell'ultimo giro. Quel secondo posto resta comunque tra i risultati migliori nei Gran Premi.
    </div>
    <div class="col-sm">
    <a  style="color:red;"title="Yamaha Motor EU"
    href="https://www.yamaha-motor.eu/it/it/" target="_blank" >
    <button style="background-color:red;">Yamaha Motor EU</button> 
</a>
    </div>
  </div>
</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>