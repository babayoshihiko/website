<?
$title = "Porting";
$cvs_author = 'Author: fingolfin';
$cvs_date = 'Date: 2002/04/14 23:10:35';

$metatags = '<link rel="contents" href="index.php" title="Porting Contents"><link rel="next" href="basics.php" title="Basics">';

include "header.inc";
?>

<h1>Porting Unix software to Darwin and Mac OS X</h1>
<p>
This document contains hints for porting Unix applications to Darwin
and Mac OS X.
The information here applies to Mac OS X version 10.0.x and Darwin
1.3.x.
Both systems will be referred to as Darwin, since Mac OS X is actually
a superset of Darwin.
</p>
<h2>Contents</h2><ul>
<li><a href="basics.php"><b>1 Basics</b></a></li>
<ul>
<li><a href="basics.php#heritage">1.1 Where Darwin came from</a></li>
<li><a href="basics.php#compiler">1.2 The Compiler and Tools</a></li>
<li><a href="basics.php#host-type">1.3 Host type</a></li>
<li><a href="basics.php#libraries">1.4 Libraries</a></li>
</ul>
<li><a href="shared.php"><b>2 Shared Code</b></a></li>
<ul>
<li><a href="shared.php#lib-and-mod">2.1 Shared Libraries vs. Loadable Modules</a></li>
<li><a href="shared.php#version">2.2 Version Numbering</a></li>
<li><a href="shared.php#cflags">2.3 Compiler Flags</a></li>
<li><a href="shared.php#build-lib">2.4 Building a Shared Library</a></li>
<li><a href="shared.php#build-mod">2.5 Building a Module</a></li>
</ul>
<li><a href="libtool.php"><b>3 GNU libtool</b></a></li>
<ul>
<li><a href="libtool.php#situation">3.1 The Situation</a></li>
<li><a href="libtool.php#patch-135">3.2 The 1.3.5 Patch</a></li>
<li><a href="libtool.php#fixing-14x">3.3 Fixing 1.4.x</a></li>
<li><a href="libtool.php#notes">3.4 Further Notes</a></li>
</ul>
</ul><p>Generated from <i>$Fink: porting.xml,v 1.8 2002/04/14 23:10:35 fingolfin Exp $</i></p>


<?
include "footer.inc";
?>

