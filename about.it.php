<?
$title = "Informazioni";
$cvs_author = '$Author: babayoshihiko $';
$cvs_date = '$Date: 2004/11/07 14:20:45 $';

include "header.inc";
?>


<h1>Informazioni su Fink</h1>

<h2>Cos'� Fink?</h2>

<p>
Fink � un progetto che vuole portare il mondo di Unix
<a href="http://www.opensource.org/">e del software Open Source</a> in
<a href="http://www.opensource.apple.com/">Darwin</a> e
<a href="http://www.apple.com/macosx/">Mac OS X</a>.
Come scopo, abbiamo due obiettivi principali.
Primo, modificare codice esistente di software Open Source in modo che si compili
e che funzioni su Mac OS X.
(Questo processo � chiamato porting.)
Secondo, rendere disponibili i nostri risultati agli utenti normali,
distribuzioni semplici che assomiglino a quelle usate dagli utenti Linux.
(Questo processo � chiamato packaging.)
Il progetto offre pacchetti binari precompilati cos� come buona parte del
sistema di compilazione automatica da codice sorgente.
</p>
<p>
Per raggiungere questi obiettivi, Fink si basa su un eccellente gestore di pacchetti
prodotto dal progetto <a href="http://www.debian.org/">Debian</a> - <code>dpkg</code>,
<code>dselect</code> e <code>apt-get</code>.
Oltre questo, Fink aggiunge suoi personali gestori di pacchetti, chiamati (sorpresa!)
<code>fink</code>.
Puoi vedere <code>fink</code> come un compilatore - esso prende le descrizioni pacchetti
e ne produce dei pacchetti binari .deb.
In questo processo, scarica il codice sorgente direttamente da internet,
rattoppa il tutto se necessario, quindi passa attraverso il completo processo
di configurazione e costruzione del pacchetto.
Per ultima cosa, raccoglie i risultati in un pacchetto che � pronto per
essere installato da <code>dpkg</code>.
</p>
<p>
Da quando Fink � nato su Mac OS X, esso ha una ristretta politica per evitare
ogni tipo di interferenza con il sistema base.
Come risultato, Fink gestisce un albero di cartelle e prevede le infrastrutture
per renderlo di facile uso.
</p>


<h2>Perch� usare Fink?</h2>

<p>
Cinque motivi per usare Fink per installare software Unix sul tuo Mac:
</p>

<p>
<b>Potenza.</b>
Mac OS X include solo una serie di comandi base.
Fink ti apporta un accrescimento di queste utility cos� come una selezione
di programmi di grafica sviluppati per Linux e altre varianti di Unix.
</p>

<p>
<b>Comodit�.</b>
con Fink il processo di compilazione � completamente automatizzato; non dovrai mai
preoccuparti riguardo a Makefiles o script di configurazione ed i loro parametri.
Il sistema di dipendenza automatica tiene conto che tutte le librerie sono presenti.
I tuoi pacchetti sono impostati per dare il massimo delle caratteristiche.
</p>

<p>
<b>Sicurezza.</b>
La stretta politica di Fink rende sicure le parti vulnerabili
del sistema Mac OS X che non vengono toccate.
Ancora, l'impacchettamento del sistema ti permette di rimuovere senza problemi il software
di cui non hai pi� bisogno</p>

<p>
<b>coerenza.</b>
Fink non � solo una collezione casuale di pacchetti, � una distribuzione 
coerente.
I file installati vengono posizionati in luoghi precisi.
La documentazione viene mantenuta aggiornata.
C'� un'interfaccia di controllo dei processi.
E c'� molto, molto di questo che lavora per te.
</p>

<p>
<b>Flessibilit�.</b>
Tu devi solo scaricare e installare il programma di cui hai bisogno.
Fink ti d� la libert� di installare XFree86 o altre soluzioni X11
in qualsiasi modo tu voglia.
Se non vuoi X11 comunque, fa lo stesso.
</p>


<p>
<a href="index.php">Back Home</a> -
<a href="download/index.php">Download</a>
</p>


<?
include "footer.inc";
?>
