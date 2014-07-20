<?
$title = "Anleitung zur Aktualisierung unter Mac OS X 10.6";
$cvs_author = '$Author: k-m_schindler $';
$cvs_date = '$Date: 2014/07/20 00:04:08 $';

include "header.inc";
?>

<h1>Anleitung zur Aktualisierung unter Mac OS X 10.6</h1>
<h2>Wichtige Anmerkungen:</h2>
<p>Haben sie Xquartz 2.4 unter 10.5 installiert, wird es wahrscheinlich
einfacher sein, einen <a href="./srcdist.php">clean install</a> aus
den Quellen durchzuf�hren.
<p><br>
<p>F�hren sie folgende Sequenz auf um ihre Installation von Fink von
10.5/32 bit auf 10.6/32 bit zu aktualisieren (Es gibt keinen direkten Weg
von fr�heren Betriebsystemversionen):
</p>
<ol>
	<li>Vor der Installation von OS X 10.6, f�hren sie 
	<pre>fink selfupdate</pre> aus, wobei rsync oder cvs eingeschaltet ist,
	d. h. <pre>fink selfupdate-rsync</pre> oder 
	<pre>fink selfupdate-cvs</pre>.  Dies aktualisiert <em>fink</em> auf eine
	laufende Version.
  <br>
	�berpr�fen sie die Version ihres Paketmanagers mittels 
	<pre>fink -V</pre>.  Die Version muss vor der Aktualisierung mindestens
	0.29.9 sein.
  <br>
	<strong>Machen sie auf keinen Fall weiter, wenn ihre Version niedriger
	ist als 0.29.9!</strong> Sie m�ssen diesen
  <a href="../faq/upgrade-fink.php#leopard-bindist1">Anweisungen</a> 
  folgen, um fink zu aktualisieren.
  </li>
	<li>Editieren sie die Datei <em>/sw/etc/fink.conf</em> und f�gen sie
	folgende Zeile ein: <strong>NoAutoIndex: true</strong>.  (Sie werden
	<em>sudo</em> oder eine �hnliche Methode brauchen, um die Rechte zu
	erhalten, die f�r das Editieren der Datei notwendig sind.)
  </li>
	<li>Installieren sie OS X 10.6 und Xcode 3.2 (oder eine sp�tere 
	Version).
  </li>
	<li>F�hren sie das Kommando <pre>fink reinstall fink</pre> aus, damit
	<em>fink</em> erf�hrt, dass es jetzt auf 10.6 l�uft.  (Bekommen sie eine
	Meldung �ber eine korrupte Paket-Datenbank, f�hren sie 
	<pre>fink index -f</pre> aus und versuchen sie diesen Schritt noch
	einmal.)
  </li>
	<li>F�hren sie das Kommando <pre>fink update fink</pre> aus, damit sie
	das neueste <em>fink</em> f�r 10.6 erhalten.
  </li>
	<li>F�hren sie das Kommando <pre>fink install perl588-core</pre> aus,
	wenn sie Fink-Pakete haben, die von Perl abh�ngen.  Die Perl-Version des
	Systems Perl wurde beim Upgrade ver�ndert.
  </li>
	<li>Entfernen sie die Zeile <strong>NoAutoIndex: true</strong> aus der
	Datei <em>fink.conf</em>.
  </li>
</ol>
<p>Nach dem Upgrade wollen sie vermutlich das Kommando <pre>fink
configure</pre> ausf�hren, um ein wenig aufzur�umen.
</p>

<?
include "footer.inc";
?>
