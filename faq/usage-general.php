<?
$title = "F.A.Q. - Usage (1)";
$cvs_author = 'Author: fingolfin';
$cvs_date = 'Date: 2002/01/11 00:04:44';

$metatags = '<link rel="contents" href="index.php" title="F.A.Q. Contents"><link rel="next" href="usage-packages.php" title="Package Usage Problems - Specific Packages"><link rel="prev" href="comp-packages.php" title="Compile Problems - Specific Packages">';

include "header.inc";
?>

<h1>F.A.Q. - 6 Package Usage Problems - General</h1>



<a name="gnome-icons"><div class="question"><p><b>Q6.1: Some GNOME applications display
black icons only. What's wrong?</b></p></div>
<div class="answer"><p><b>A:</b> 
This is caused by limitations in the operating system kernel.
The only solution so far is to turn off shared memory.
The Running X11 document has <a href="http://fink.sourceforge.net/doc/x11/trouble.php#black">details</a>.
</p></div></a>

<a name="xlocale"><div class="question"><p><b>Q6.2: I'm getting lots of messages
like "locale not supported by C library". Is that bad?</b></p></div>
<div class="answer"><p><b>A:</b> 
It's not bad, it just means that the program will use the default
English messages, date formats, etc.
The program will function normally otherwise.
The Running X11 document has <a href="http://fink.sourceforge.net/doc/x11/trouble.php#locale">details</a>.
</p></div></a>

<p align="right">
Next: <a href="usage-packages.php">7 Package Usage Problems - Specific Packages</a></p>


<?
include "footer.inc";
?>
