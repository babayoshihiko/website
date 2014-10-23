<?php
$title = "Lisez-moi";
$cvs_author = 'Author: gecko2';
$cvs_date = 'Date: 2012/11/11 15:20:15';
$metatags = '';


include_once "header.inc";
?>
<h1>Fink Lisez-moi</h1>
<!--Generated from $Fink: readme.fr.xml,v 1.6 2012/11/11 15:20:15 gecko2 Exp $-->
    <p>
Voici Fink, un système de gestion de paquets qui a pour but d'ouvrir toutes grandes les portes du monde des logiciels Open Source à  Darwin et Mac OS X.
</p>
    <p>
Grâce à  dpkg, il maintient une hiérarchie de répertoires dédiés.
Il récupère les versions sources originales, leur applique éventuellement des rustines, les configure pour Darwin, les compile et les installe.
Les informations concernant les paquets disponibles et les rustines nécessaires (les "descriptions de paquets") sont gérées séparément, bien qu'elles soient généralement incluses dans cette distribution.
Le code source est, quant à  lui, récupéré sur Internet, si nécessaire.
</p>
    <p>
Bien que Fink ne puisse être considéré comme "mature", qu'il comporte quelques aspects non polis et que certaines fonctionnalités lui fassent défaut, un grand nombre de personnes l'utilisent sans problèmes.
Lisez soigneusement les instructions et ne soyez pas surpris si quelque chose ne fonctionne pas exactement comme prévu.
Il existe des explications détaillées pour la plupart des dysfonctionnements ; voyez le site web en cas de besoin.
</p>
    <p>
Fink est distribué sous licence Publique Générale GNU. 
Voir le fichier COPYING pour plus d'informations.
</p>
  <h2><a name="req">Configuration requise</a></h2>
    
    <p>
Vous devez disposer :
</p>
    <ul>
      <li>
        <p>
D'un système Mac OS X installé, version 10.0 ou postérieure (il peut y avoir quelques problèmes relatifs à  l'édition de liens avec 10.1).
Darwin 1.3.1 devrait aussi fonctionner, mais il n'a pas été testé.
Il est <b>impossible</b> de faire fonctionner Fink sous des versions antérieures de l'un ou l'autre de ces systèmes.
</p>
      </li>
      <li>
        <p>
Des outils de développement.
Sous Mac OS X, installez le paquet Developer.pkg à partir du CD Developer
Tools.
Vérifiez que la version des outils de développement que vous installez correspond à  celle de Mac OS X.
Sous Darwin, les outils de développement sont inclus dans l'installation par défaut.</p>
      </li>
      <li>
        <p>
D'un accès Internet.
Tous les sources sont chargés à partir des sites miroirs.
</p>
      </li>
      <li>
        <p>
De la patience.
Compiler plusieurs gros paquets prend du temps.
Il peut s'agir de plusieurs heures, voire de plusieurs jours.
</p>
      </li>
    </ul>
  <h2><a name="install">Installation</a></h2>
    
    <p>
Le processus d'installation est décrit en détail dans le fichier INSTALL.
Veuillez le lire avant de faire quoi que ce soit, ce processus n'est pas trivial.
Le fichier décrit aussi la procédure de mise à  jour.
</p>
  <h2><a name="usage">Utilisation de Fink</a></h2>
    
    <p>
Le fichier USAGE explique comment définir les chemins nécessaires et comment installer et désinstaller des paquets.
Il comprend aussi une liste complète des commandes disponibles.
</p>
  <h2><a name="questions">Autres questions</a></h2>
    
    <p>
Si la documentation incluse ne répond pas à  vos questions, allez sur le site web de Fink <a href="/">/</a> et consultez la page Aide :
<a href="/help/">/help/</a>.
Elle vous conduira au reste de la documentation disponible et à d'autres sources de support, le cas échéant.
</p>
    <p>
Si vous voulez apporter votre contribution à Fink, la page Aide mentionnée ci-dessus contient également une liste de tâches à réaliser, tels les tests et la création de paquets.
</p>
  <h2><a name="uptodate">Dernières nouvelles</a></h2>
    
    <p>
La page du projet se trouve sur <a href="/">/</a>.
</p>
    <p>
Pour vous tenir informé des dernières versions, allez à <a href="/lists/fink-announce.php">/lists/fink-announce.php</a>
et abonnez-vous à la liste de diffusion fink-announce. 
La liste est modérée et son trafic est très faible.
</p>
  
<?php include_once "../footer.inc"; ?>
