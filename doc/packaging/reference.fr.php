<?
$title = "Paquets - Référence";
$cvs_author = 'Author: michga';
$cvs_date = 'Date: 2004/05/13 09:11:05';
$metatags = '<link rel="contents" href="index.php?phpLang=fr" title="Paquets Contents"><link rel="prev" href="fslayout.php?phpLang=fr" title="Organisation des fichiers">';

include_once "header.inc";
?>

<h1>Paquets - 5 Référence</h1>



<h2><a name="build">5.1 Construction d'un paquet</a></h2>

<p>Pour comprendre l'utilité de certains des champs, vous devez d'abord savoir comment Fink construit un paquet. La construction se déroule en cinq phases : décompression, application des rustines, compilation, installation et construction proprement dite. L'exemple ci-dessous correspond à une installation dans <code>/sw</code> du paquet gimp-1.2.1-1.</p>
<p>Lors de la <b>phase de décompression</b>, le répertoire <code>/sw/src/gimp-1.2.1-1</code> est créé et l'archive tar y est décompressée (il peut y avoir plusieurs archives tar). Dans la plupart des cas, un répertoire gimp-1.2.1, contenant le source, sera créé ; toutes les étapes suivantes seront exécutées dans ce répertoire (par exemple <code>/sw/src/gimp-1.2.1-1/gimp-1.2.1</code>). Les champs SourceDirectory, NoSourceDirectory et Source<b>N</b>ExtractDir permettent de contrôler quels sont les répertoires à utiliser.</p>
<p>Lors de la <b>phase d'application des rustines</b>, le code source est modifié par les rustines, pour qu'il compile sous Darwin. Les actions dérivées des champs UpdateConfigGuess, UpdateLibtool, Patch et PatchScript sont exécutées dans l'ordre d'énumération de ces champs.</p>
<p>Lors de la <b>phase de compilation</b>, le source est configuré et compilé. En général, cela correspond au lancement du script <code>configure</code> avec certains paramètres, puis à l'exécution de la commande <code>make</code>. Voir la description du champ CompileScript pour de plus amples informations.</p>
<p>Lors de la <b>phase d'installation</b>, le paquet est installé dans un répertoire temporaire, <code>/sw/src/root-gimp-1.2.1-1</code> (= %d). (Notez la partie "root-"). Tous les fichiers qui sont normalement installés dans <code>/sw</code> sont installés dans <code>/sw/src/root-gimp-1.2.1-1/sw</code> (= %i = %d%p). Voir la description du champ InstallScript pour de plus amples informations.</p>
<p>(<b>À partir de fink 0.9.9.</b>, il est possible de générer plusieurs paquets à partir d'une seule description de paquet en utilisant le champ <code>SplitOff</code>. À la fin de la phase d'installation, des répertoires d'installation distincts sont créés pour chaque paquet à construire et les fichiers sont placés dans le répertoire approprié.)</p>
<p>Lors de la <b>phase de construction</b>, un fichier binaire (.deb) est construit à partir du répertoire temporaire. On ne peut agir directement sur cette étape, néanmoins différentes informations issues de la description du paquet sont utilisées afin de générer un fichier de  <code>contrôle</code> pour dpkg.</p>


<h2><a name="fields">5.2 Champs</a></h2>

<p>Nous avons classé les champs en plusieurs catégories. Cette liste n'est pas forcément exhaustive. <code>:-)</code></p>
<p><b>Données initiales :</b></p>
<table border="0" cellpadding="0" cellspacing="10"><tr valign="bottom"><th align="left">Champ</th><th align="left">Utilisation</th></tr><tr valign="top"><td>Package</td><td>
<p>
Nom du paquet. Peut contenir des minuscules, des nombres ou les caractères spéciaux suivants : '.', '+' et '-'. Pas de trait de soulignement ('_'), ni de majuscules. Champ obligatoire.
</p>
<p>Seuls les raccourcis %N, %Ni, %type_raw[] et %type_pkg[] sont applicables à ce champ.</p>
<p>
Selon les règles de Fink, un paquet donné doit toujours être compilé avec les mêmes options activées. Si un paquet peut avoir plusieurs variantes (voir la documentation sur le champ <code>Type</code>), vous devez encoder les informations concernant la variante dans le champ <code>Package</code> (voir la documentation sur le raccourci  %type_pkg[]). De cette façon, chaque variante possédera un nom unique. Le nom du paquet indique quelles variantes sont incluses. Notez que l'usage des raccourcis %type_pkg[] et %type_raw[] dans le nom du paquet est récent et grandement incompatible avec les anciennes versions de fink ; les descriptions de ces paquets doivent être insérés dans un champ <code>InfoN</code> avec N&gt;=2.
</p>
</td></tr><tr valign="top"><td>Version</td><td>
<p>
Le numéro de version en amont. Même limitations que pour champ Package. Champ obligatoire.</p>
</td></tr><tr valign="top"><td>Revision</td><td>
<p>
Le numéro de révision du paquet. Incrémentez ce numéro quand vous faites une nouvelle description pour la même version en amont. Les numéros de révision commencent à 1. Champ obligatoire.
</p>
</td></tr><tr valign="top"><td>Epoch</td><td>
<p>
<b>Introduit à partir de fink 0.12.0.</b>
Ce champ facultatif peut être utilisé pour spécifier l'ère du paquet (défaut 0 si ce champ n'est pas renseigné). Pour de plus amples informations, voir <a href="http://www.debian.org/doc/debian-policy/ch-controlfields.html#s-f-Version">Debian Policy Manual</a>.
</p>
</td></tr><tr valign="top"><td>Description</td><td>
<p>
Courte description du paquet (répond à la question qu'est-ce c'est ?). C'est une description d'une ligne qui est affichée sous forme de liste, elle doit donc être courte et bien ciblée. Elle peut avoir moins de 45 caractères, mais ne peut dépasser 60 caractères. Il n'est pas nécessaire d'indiquer le nom du paquet, il sera affiché de toute façon. Champ obligatoire.
</p>
</td></tr><tr valign="top"><td>Type</td><td>
<p>
Peut être <code>bundle</code>. Les paquets lots sont utilisés pour regrouper plusieurs paquets. Ils n'ont que des dépendances, mais ni code ni fichiers installés. Les champs Source, PatchScript, CompileScript, InstallScript et ceux qui leur sont liés sont ignorés pour ce type de paquets.
</p>
<p>
<code>nosource</code> est un type très voisin.
Il sert à indiquer qu'il n'y a pas d'archive tar source. Rien n'est téléchargé et la phase de décompression crée simplement un répertoire vide. Néanmoins, les phases d'application de rustine, de compilation et d'installation sont exécutées normalement. De cette façon, on peut incorporer tout le code avec une rustine, ou créer quelques répertoires avec InstallScript. À partir de la version 0.18.0 de fink, on peut utiliser <code>Source: none</code> pour obtenir le même résultat. Ceci permet d'utiliser "Type" pour d'autres usages (<code>Type: perl</code>, etc...).
</p>
<p>
À partir de fink 0.9.5, il existe un type  <code>perl</code>, qui permet d'offrir un choix de valeurs par défaut pour les scripts de compilation et d'installation. À partir de  fink 0.13.0, il existe une nouvelle variante de ce type, <code>perl $version</code>, où $version est une version spécifique de perl, constituée de trois chiffres séparés par un point, par exemple : <code>perl 5.6.0</code>.
</p>
<p>
Dans une version CVS postérieure à fink-0.19.2, l'utilisation de langage/langage-version a été généralisée pour permettre à tout mainteneur de définir des types et sous-types associés et ainsi d'utiliser plus d'un type par paquet. Les types et sous-types sont des chaînes de caractères arbitraires ; toutefois, les blancs sont interdits et les parenthèses, virgules, crochets et signe pourcentage ne doivent pas être utilisés. Les raccourcis ne sont pas interprétés et le type (mais non le sous-type) est converti en minuscules. Les valeurs du type sont définies dans une liste , chaque valeur étant séparée de la suivante par des virgules ; chaque valeur peut elle-même avoir une liste de sous-types associés séparés par des blancs.
</p>
<p>
De plus, il existe un concept de "variantes", qui permet de décrire dans un fichier .info unique une famille de paquets étroitement liés, ayant chacun des options différentes activées. La clé de ce processus est l'utilisation d'une liste de sous-types. Au lieu d'une simple chaîne de caractères, on utilise une liste de chaînes de caractères séparés par des blancs et mise entre parenthèses. Fink clone le fichier de description du paquet pour chaque sous-type de la liste et remplace cette liste par un unique sous-type dans le clone. Par exemple :
</p>
<pre>Type: perl (5.6.0 5.8.1)</pre>
<p>
provoque la création de deux descriptions de paquet, une qui se comporte comme si on avait <code>Type: perl 5.6.0</code> et l'autre comme si on avait <code>Type: perl 5.8.1</code>. Le sous-type spécial "(boolean)" est un raccourci pour une liste contenant le type lui-même et un point. Ainsi les deux formes suivantes sont identiques :
</p>
<pre>
Type: -x11 (boolean)
Type: -x11 (-x11 .)
</pre>
<p>
L'interprétation de la liste de sous-types / clonage du paquet est récursive. S'il y a plusieurs types avec des listes de sous-types, on obtient toutes les combinaisons possibles :
</p>
<pre>Type: -ssl (boolean), perl (5.6.0 5.8.1)</pre>
<p>
Dans les autres champs, on accède à un sous-type donné de variante en utilisant les fonctions de pseudo-hachage %type_raw[] et %type_pkg[]. Voici deux exemples de fragments de fichiers .info :
</p>
<pre>
Info2: &lt;&lt;
Package: foo-pm%type_pkg[perl]
Type: perl (5.6.0 5.8.1)
Depends: perl-core%type_pkg[perl]
 &lt;&lt;
</pre>
<pre>
Info2: &lt;&lt;
Package: bar%type_pkg[-x11]
Type: -x11 (boolean)
Depends: (%type_raw[-x11] = -x11) x11
CompileScript:  &lt;&lt;
  #!/bin/bash -ev
  if [ "%type_raw[-x11]" == "-x11" ]; then
    ./configure %c --with-x11
  else
    ./configure %c --without-x11
  fi
  make
&lt;&lt;
&lt;&lt;
</pre>
</td></tr><tr valign="top"><td>License</td><td>
<p>
Ce champ indique la nature de la licence sous laquelle le paquet est distribué. Sa valeur doit être l'une de celles décrites plus haut dans la section <a href="policy.php?phpLang=fr#licenses">Licences de paquet</a>. De plus, ce champ ne doit être renseigné que si le paquet respecte effectivement les règles de construction des paquets, c'est-à-dire installe une copie de la licence dans le répertoire doc.
</p>
</td></tr><tr valign="top"><td>Maintainer</td><td>
<p>
Nom et adresse e-mail de la personne responsable du paquet. Ce champ est obligatoire et ne doit mentionner qu'un nom et qu'une adresse e-mail sous le format suivant :
</p>
<pre>Prénom Nom &lt;utilisateur@hôte.domaine.com&gt;</pre>
</td></tr><tr valign="top"><td>InfoN</td><td>
<p>
Ce champ permet à fink d'implémenter des changements de syntaxe incompatibles avec les versions précédentes dans les fichiers de description de paquet. Une version donnée de fink est configurée avec un nombre entier maximum "N", qu'il sait gérer. Tout paquet dont le champ InfoN est supérieur à ce nombre sera ignoré. Il ne faut donc utiliser ce mécanisme que dans les cas d'absolue nécessité, faute de quoi on priverait de ces paquets les personnes utilisant des versions plus anciennes de fink.  Quand un autre champ doit utiliser un numéro InfoN spécifique, mention en est faite dans la description du champ. Pour utiliser ce mécanisme, il faut insérer l'ensemble de la description du paquet dans le champ InfoN. Voir plus haut la section "Format de fichier" pour une description de la syntaxe des champs constitués de plusieurs lignes.
</p>
</td></tr></table>
<p><b>Dépendances :</b></p>
<table border="0" cellpadding="0" cellspacing="10"><tr valign="bottom"><th align="left">Champ</th><th align="left">Utilisation</th></tr><tr valign="top"><td>Depends</td><td>
<p>
Liste de paquets à installer pour que le paquet puisse compiler. L'interprétation des raccourcis a lieu dans ce champ (tout comme dans les autres champs de cette catégorie : BuildDepends, Provides, Conflicts, Replaces, Recommends, Suggests et Enhances). C'est, en général, une liste de noms de paquets séparés par des virgules, mais Fink gère maintenant les clauses de choix et de version avec la même syntaxe que dpkg. En voici un exemple :
</p>
<pre>Depends: daemonic (&gt;= 20010902-1), emacs | xemacs</pre>
<p>
Notez qu'on ne peut indiquer de réelles options de dépendances. Si un paquet fonctionne avec ou sans un autre paquet, vous devez soit vous assurer que l'autre paquet n'est pas utilisé, même s'il est présent, soit l'ajouter à la liste des dépendances. Si vous voulez donner à l'utilisateur le choix entre les deux options, faîtes deux paquets distincts, par exemple : wget et wget-ssl.
</p>
<p>
Ordre des opérations: le "OU" logique (liste de choix exclusifs) a priorité sur le "ET" logique entre chaque paquet (ou jeu de choix) dans la liste séparée par des virgules. À moins de mettre des parenthèses comme celles utilisées en arithmétique, il n'y a aucun moyen de spécifier des groupes de choix ou de changer l'ordre des opérations dans le champ <code>Depends</code> et les champs similaires.
</p>
<p>
À partir d'une version CVS postérieure à la version 0.18.2 de fink, on peut utiliser des dépendances conditionnelles. Celles-ci sont indiquées en plaçant <code>(chaîne1 opérateur chaîne2)</code> avant le nom du paquet. L'interprétation des raccourcis se fait normalement, puis les deux chaînes sont comparées en fonction de l'<code>opérateur</code> utilisé, qui peut être : &lt;&lt;, &lt;=, =, !=, &gt;&gt;, &gt;=. Le paquet qui suit n'est considéré comme une dépendance que si la comparaison est vraie.
</p>
<p>
Vous pouvez utiliser ce format pour simplifier la maintenance de paquets similaires. Par exemple, elinks et elinks-ssl peuvent avoir :
</p>
<pre>Depends: (%n = elinks-ssl) openssl097-shlibs, expat-shlibs</pre>
<p>Ce qui a le même effet que si elinks avait :</p>
<pre>Depends: expat-shlibs</pre>
<p>et elinks-ssl avait :</p>
<pre>Depends: openssl097-shlibs, expat-shlibs</pre>
</td></tr><tr valign="top"><td>BuildDepends</td><td>
<p>
<b>Introduit dans fink 0.9.0.</b> Liste de dépendances utilisées uniquement lors de la compilation.
Il sert à spécifier des outils (par exemple flex) qui doivent être présents pour compiler les paquets, mais qui ne sont pas nécessaires à l'exécution. Utilise la même syntaxe que Depends.
</p>
</td></tr><tr valign="top"><td>Provides</td><td>
<p>
Liste de noms de paquets séparés par des virgules que ce paquet est censé "fournir". Si un paquet nommé "pine" indique <code>Provides: mailer</code>, alors toute dépendance à "mailer" est considérée comme satisfaite si "pine" est installé. En général, on énumère aussi ces paquets dans les champs "Conflicts" et "Replaces".
</p>
</td></tr><tr valign="top"><td>Conflicts</td><td>
<p>
Liste de noms de paquets séparés par des virgules qui ne doivent pas être installés en même temps que le paquet. Pour les paquets virtuels, on peut énumérer dans ce champ les noms des paquets fournis ; ils seront gérés correctement. Ce champ gère aussi les clauses de versions tout comme le champ Depends, mais pas les clauses de choix (cela n'aurait aucun sens). Si un paquet est nommé dans son propre champ Conflicts, il sera supprimé de cette liste (sans avertissement). (Introduit dans une version CVS de fink postérieure à la version 0.18.2).
</p>
<p>
<b>Note :</b> Fink lui-même ignore ce champ à l'heure actuelle. Néanmoins, il est passé à dpkg et est géré en conséquence. Bref, il n'a d'effet qu'à l'exécution, pas à la compilation.
</p>
</td></tr><tr valign="top"><td>Replaces</td><td>
<p>
Utilisé en général avec "Conflicts", quand le paquet non seulement remplace les fonctions du paquet en conflit, mais a aussi des fichiers en commun. Sans ce champ, dpkg pourrait générer des erreurs lors de la phase d'installation du paquet, car certains fichiers appartiendraient toujours à un autre paquet. C'est aussi l'indication que les deux paquets en cause sont équivalents l'un l'autre, et que l'un peut être remplacé par l'autre. Si un paquet est nommé dans son propre champ Replaces, il sera supprimé (sans avertissement) de cette liste. (Introduit dans une version CVS de fink postérieure à la version 0.18.2).
</p>
<p>
<b>Note :</b> Fink lui-même ignore ce champ à l'heure actuelle. Néanmoins, il est passé à dpkg et est géré en conséquence. Bref, il n'a d'effet qu'à l'exécution, pas à la compilation.
</p>
</td></tr><tr valign="top"><td>Recommends, Suggests, Enhances</td><td>
<p>
Ces champs indiquent des relations supplémentaires spécifiques dans le même style que les autres champs de dépendances. Ces trois champs n'ont aucun effet sur l'installation via <code>dpkg</code> ou <code>apt-get</code>. Néanmoins, ils sont utilisés par <code>dselect</code> et d'autres interfaces pour aider l'utilisateur à faire des choix.
</p>
</td></tr><tr valign="top"><td>Pre-Depends</td><td>
<p>
Une variante spéciale du champ Depends avec une sémantique plus stricte. Ce champ ne doit être utilisé qu'après en avoir discuté sur la liste de développeurs et qu'il soit apparu évident que cela était nécessaire.
</p>
</td></tr><tr valign="top"><td>Essential</td><td>
<p>
Valeur booléenne qui signale les paquets essentiels. Ceux-ci sont installés lors du processus de bootstrap. Tous les paquets non essentiels dépendent implicitement des paquets essentiels. dpkg refusera de supprimer les paquets essentiels du système, à moins d'utiliser des options spéciales, qui permettent de lever cette interdiction.
</p>
</td></tr><tr valign="top"><td>BuildDependsOnly</td><td>
<p>
<b>Introduit dans fink 0.9.9.</b>
Valeur booléenne qui indique qu'aucun autre paquet ne doit avoir un champ Depend le mentionnant, seul le champ BuildDepend est autorisé.
</p>
</td></tr></table>

<p><b>Phase de décompression :</b></p>
<table border="0" cellpadding="0" cellspacing="10"><tr valign="bottom"><th align="left">Champ</th><th align="left">Utilisation</th></tr><tr valign="top"><td>CustomMirror</td><td>
<p>
Liste de sites miroirs. Chaque ligne correspond à un site miroir, sous le format suivant : <code>&lt;emplacement&gt;: &lt;url&gt;</code>. L'<b>emplacement</b> peut être un code continent (par exemple : <code>nam</code> - Amérique du Nord), un code pays (par exemple : <code>nam-us</code> - Amérique du Nord-États-Unis), ou bien autre chose ; les archives sont recherchées sur les miroirs dans l'ordre d'énumération de ces derniers. Exemple :
</p>
<pre>CustomMirror: &lt;&lt;
nam-US: ftp://ftp.fooquux.com/pub/bar
asi-JP: ftp://ftp.qiixbar.jp/pub/mirror/bar
eur-DE: ftp://ftp.barfoo.de/bar
Primary: ftp://ftp.barbarorg/pub/
&gt;&gt;</pre>
</td></tr><tr valign="top"><td>Source</td><td>
<p>
URL de l'archive tar du source. Ce doit être une URL HTTP ou FTP, mais Fink ne fait pas de vérification  - il se contente de passer l'URL à wget. Ce champ gère un type spécial d'URL pour les miroirs : <code>miroir:&lt;nom-miroir&gt;:&lt;chemin-relatif&gt;</code>. Ainsi, la définition du miroir <b>nom-miroir</b> est récupérée dans le fichier de configuration de Fink, la partie <b>chemin-relatif</b> y est ajoutée, et  c'est l'ensemble qui est utilisé comme réelle URL. Chaque <b>nom-miroir</b> reconnu est stocké dans le fichier <code>/sw/lib/fink/mirror/_list</code>, qui fait partie du paquet fink ou du packet fink-mirrors. Par ailleurs, l'utilisation de  <code>custom</code> comme <b>nom-miroir</b> oblige Fink à utiliser le champ <code>CustomMirror</code>. L'interprétation des raccourcis a lieu avant utilisation de l'URL. N'oubliez pas que %n correspond à toutes les variantes du champ  %type_, il est donc conseillé d'utiliser ici %ni (avec, éventuellement, des spécifications de %type_).
</p>
<p>
À partir de fink 0.18.0, <code>Source: none</code> indique qu'il n'y a pas de source à récupérer. Voir la description du champ <code>Type</code> pour de plus amples informations. La valeur <code>gnu</code> est un raccourci pour <code>mirror:gnu:%n/%n-%v.tar.gz</code> ; de même, <code>gnome</code> est un raccourci pour <code>mirror:gnome:stable/sources/%n/%n-%v.tar.gz</code>. La valeur par défaut est <code>%n-%v.tar.gz</code> (correspond à un téléchargement ordinaire).
</p>
</td></tr><tr valign="top"><td>Source<b>N</b></td><td>
<p>
Quand un paquet est constitué de plusieurs archives tar, vous devez les énumérer en utilisant ces champs supplémentaires, où N commence à 2. Le premier fichier archive tar (sorte d'archive tar "principale") est indiqué dans <code>Source</code>, le second dans <code>Source2</code>, et ainsi de suite. Les règles sont les mêmes que celles en vigueur pour le champ Source, mais les raccourcis "gnu" et "gnome" ne sont pas interprétés - cela n'aurait aucune utilité par ailleurs. À partir d'une version CVS de fink postérieure à la version 0.19.2, vous pouvez utiliser n'importe quels nombres entiers N &gt;= 2 (non nécessairement consécutifs). Néanmoins, les doublons ne sont pas autorisés.
</p>
</td></tr><tr valign="top"><td>SourceDirectory</td><td>
<p>
Doit être utilisé quand la décompression de l'archive tar aboutit à la création d'un répertoire dont le nom est différent du nom de base de l'archive. En général, une archive tar nommée "foo-1.0.tar.gz" crée un répertoire nommé "foo-1.0". Si le répertoire créé porte un nom différent, indiquez-le dans ce champ. L'interprétation des raccourcis y est effectuée.
</p>
</td></tr><tr valign="top"><td>NoSourceDirectory</td><td>
<p>
Donnez à ce paramètre booléen la valeur "true" si la décompression de l'archive tar ne crée pas de répertoire. En général, une archive tar nommée "foo-1.0.tar.gz" crée un répertoire nommé "foo-1.0". Si les fichiers sont simplement décompressés dans le répertoire en cours, utilisez ce champ et donnez-lui la valeur "true".
</p>
</td></tr><tr valign="top"><td>Source<b>N</b>ExtractDir</td><td>
<p>
Normalement, une archive tar auxiliaire est extraite dans le même répertoire que l'archive tar principale. Si vous devez l'extraire dans un sous-répertoire spécifique, utilisez ce champ pour l'indiquer. Source2ExtractDir correspond, bien évidemment, à l'archive tar Source2. Voir ghostscript, vim et tetex comme exemples d'utilisation de ce champ.
</p>
</td></tr><tr valign="top"><td>SourceRename</td><td>
<p>
Ce champ renomme une archive tar à la volée. Ceci est utile, par exemple, lorsque la version du source est encodée dans le nom du répertoire du serveur, mais que l'archive elle-même porte le même nom pour toutes les versions, comme //www.foobar.org/coolapp/1.2.3/source.tar.gz. Pour résoudre les problèmes que cela cause, vous pouvez utiliser quelque chose de similaire à :
</p>
<pre>SourceRename: %n-%v.tar.gz</pre>
<p>
Dans l'exemple ci-dessus, l'archive tar sera sauvegardée sous <code>/sw/src/coolapp-1.2.3.tar.gz</code>.
</p>
</td></tr><tr valign="top"><td>Source<b>N</b>Rename</td><td>
<p>
Ce champ est semblable au champ <code>SourceRename</code>, mais il est utilisé pour renommer l'archive tar correspondant au champ <code>Source<b>N</b></code>. Voir context ou hyperref comme exemples d'utilisation de ce champ.
</p>
</td></tr><tr valign="top"><td>Source-MD5</td><td>
<p>
<b>Introduit dans fink 0.10.0.</b>
Vous pouvez indiquer dans ce champ la somme de contrôle MD5 du fichier source. La valeur sera alors utilisée par Fink pour détecter les fichiers sources incorrects, c'est-à-dire les archives tar qui ne correspondent pas à celles que le créateur du paquet a utilisées. Les causes les plus courantes de ce type de problème sont : téléchargement incomplet de l'archive, mainteneurs en amont ayant changé l'archive sans le signaler, chevaux de Troie ou attaques similaires, etc... 
</p>
<p>
Exemple :
</p>
<pre>Source-MD5: 4499443fa1d604243467afe64522abac</pre>
<p>
La somme de contrôle est calculée avec l'outil <code>md5sum</code>. Si vous voulez calculer la somme de contrôle de l'archive tar <code>/sw/src/apache_1.3.23.tar.gz</code>, exécutez la commande suivante (le résultat est affiché au-dessous) :
</p>
<pre>fingolfin% md5sum /sw/src/apache_1.3.23.tar.gz 
4499443fa1d604243467afe64522abac  /sw/src/apache_1.3.23.tar.gz</pre>
<p>
La valeur affichée à gauche correspond à la valeur recherchée.
</p>
</td></tr><tr valign="top"><td>Source<b>N</b>-MD5</td><td>
<p>
<b>Introduit dans fink 0.10.0.</b>
Ce champ est semblable au champ <code>Source-MD5</code>, mais il est utilisé pour indiquer la somme de contrôle MD5 de l'archive tar correspondant au champ <code>Source<b>N</b></code>.
</p>
</td></tr><tr valign="top"><td>TarFilesRename</td><td>
<p>
<b>Introduit dans fink 0.10.0.</b>
Ce champ ne s'applique qu'aux fichiers sources utilisant le format tar.
</p>
<p>
Avec ce champ, vous pouvez renommer les fichiers d'une archive tar donnée durant l'extraction. Ceci est très utile pour gérer les problèmes dus au fait que le système de fichiers HFS+ ne tient pas compte de la casse. En effet, sur un système standard Mac OS X, les fichiers <code>install</code> et <code>INSTALL</code> ne sont pas distinguables. L'utilisation de ce champ permet d'éviter ces problèmes sans avoir à changer l'archive tar (comme on le faisait auparavant dans de tels cas).
</p>
<p>
Indiquez juste la liste des fichiers à renommer dans ce champ. Vous pouvez utiliser des caractères joker. Par défaut, à tout fichier spécifié dans la liste est ajouté le suffixe <code>_tmp</code>. Vous pouvez modifier ce comportement en utilisant la même syntaxe que celles des champs <code>Files</code> et <code>DocFiles</code>, c'est-à-dire en écrivant l'ancien nom suivi de deux-points, puis du nouveau nom. Exemple :
</p>
<pre>TarFilesRename: foo bar.* qux:quux
Tar2FilesRename: directory/INSTALL:directory/INSTALL.txt</pre>
<p>
<b>Note :</b> ce champ est implémenté via une fonctionnalité spéciale de l'outil BSD tar. L'outil GNU tar ne gère pas cette fonctionnalité. Fink utilise GNU tar par défaut (car certaines archives tar ne peuvent être décompressées que par GNU tar) ; mais quand un paquet utilise TarFilesRename, Fink utilise BSD tar en invoquant directement <code>/usr/bin/tar</code>.
</p>
</td></tr><tr valign="top"><td>Tar<b>N</b>FilesRename</td><td>
<p>
<b>Introduit dans fink 0.10.0.</b>
Ce champ est similaire au champ <code>TarFilesRename</code>, mais il est utilisé pour renommer l'archive tar correspondant au champ <code>Source<b>N</b></code>.
</p>
</td></tr></table>


<p><b>Phase d'application des rustines :</b></p>
<table border="0" cellpadding="0" cellspacing="10"><tr valign="bottom"><th align="left">Champ</th><th align="left">Utilisation</th></tr><tr valign="top"><td>UpdateConfigGuess</td><td>
<p>
Valeur booléenne. Si elle est vraie ("true"), les fichiers config.guess et config.sub présents dans le répertoire de compilation sont remplacés par des versions reconnaissant Darwin. Ce remplacement se produit lors de la phase d'application des rustines avant que le script PatchScript soit exécuté. <b>N'utilisez</b> ce champ quand cas d'absolue nécessité, c'est-à-dire lorsque le script configure se termine inopinément par un message "unknown host" (système inconnu).
</p>
</td></tr><tr valign="top"><td>UpdateConfigGuessInDirs</td><td>
<p>
<b>Introduit dans une version CVS postérieure à la version 0.9.0.</b>
Liste de sous-répertoires. A le même effet que UpdateConfigGuess, mais dans toute l'arborescence du source ; utile lorsque plusieurs fichiers config.guess existent dans différents répertoires du source. Auparavant, il fallait copier ou déplacer les fichiers dans le script PatchScript. Avec ce nouveau champ, il suffit de donner la liste des répertoires. Utilisez <code>.</code> pour mettre à jour les fichiers dans le répertoire de compilation.
</p>
</td></tr><tr valign="top"><td>UpdateLibtool</td><td>
<p>
Valeur booléenne. Si elle est vraie ("true"), les fichiers ltconfig et ltmain.sh présents dans le répertoire de compilation sont remplacés par des versions reconnaissant Darwin. Ce remplacement se produit lors de la phase d'application des rustines avant que le script PatchScript soit exécuté. <b>N'utilisez</b> ce champ quand cas d'absolue nécessité. Certains paquets ne fonctionnent plus lorsqu'on modifie la version des scripts libtool. Voir la <a href="http://fink.sourceforge.net/doc/porting/libtool.php">page libtool</a> pour de plus amples informations.
</p>
</td></tr><tr valign="top"><td>UpdateLibtoolInDirs</td><td>
<p>
<b>Introduit dans une version CVS postérieure à la version 0.9.0.</b>
Liste de sous-répertoires. A le même effet que UpdateLibtool ; utile lorsque plusieurs fichiers scripts libtool 1.3.x sont présents dans différents répertoires de l'arborescence du source. Auparavant, il fallait copier ou déplacer les fichiers dans le script PatchScript. Avec ce nouveau champ, il suffit de donner la liste des répertoires. Utilisez <code>.</code> pour mettre à jour les fichiers dans le répertoire de compilation.
</p>
</td></tr><tr valign="top"><td>UpdatePoMakefile</td><td>
<p>
Valeur booléenne. Si elle est vraie ("true"), le fichier <code>Makefile.in.in</code> présent dans le sous-répertoire <code>po</code> est remplacé par une version modifiée. Ce remplacement se produit lors de la phase d'application des rustines avant que le script PatchScript soit exécuté.
</p>
<p>
La version modifiée prend en compte DESTDIR et garantit que les catalogues de messages seront placés dans <code>/sw/share/locale</code>, et non pas dans <code>/sw/lib/locale</code>. Assurez-vous, avant d'utiliser ce champ, qu'il est absolument nécessaire et que le paquet continuera à fonctionner. Vous pouvez exécuter <code>diff</code> pour trouver les différences entre la version du paquet et celle de Fink (située dans <code>/sw/lib/fink/update</code>).
</p>
</td></tr><tr valign="top"><td>Patch</td><td>
<p>
Le nom d'une rustine à appliquer avec <code>patch -p1 &lt;<b>nom-rustine</b></code>. Ne donnez que le nom du fichier ; le chemin est ajouté automatiquement devant le nom du fichier. L'interprétation des raccourcis y est effectuée, si bien qu'on trouve, en général : <code>%f.patch</code> ou <code>%n.patch</code>. La rustine est appliquée avant que le script PatchScript soit exécuté (s'il existe).
</p>
<p>
N'oubliez pas que %n inclut implicitement toutes les variantes %type_. Le cas échéant, utilisez %ni (éventuellement avec des variantes spécifiques %type_). Il est plus facile de gérer une seule rustine et de faire des changements spécifiques à certaines variantes dans le script <code>PatchScript</code> que de gérer une rustine par variante.
</p>
</td></tr><tr valign="top"><td>PatchScript</td><td>
<p>
Liste de commandes à exécuter lors de la phase d'application des rustines. Voir plus bas la note sur les scripts. C'est là où vous pouvez placer les commandes qui modifient le paquet. Il n'existe pas de script par défaut. L'interprétation des raccourcis (voir la section précédente) a lieu avant que les commandes ne soient exécutées.
</p>
</td></tr></table>
<p><b>Phase de compilation :</b></p>
<table border="0" cellpadding="0" cellspacing="10"><tr valign="bottom"><th align="left">Champ</th><th align="left">Utilisation</th></tr><tr valign="top"><td>Set<b>ENVVAR</b></td><td>
<p>
Définit certaines variables d'environnement pendant les phases de compilation et d'installation. On peut utiliser ce champ pour passer des drapeaux de compilation, etc... aux scripts configure et aux Makefile. Les variables reconnues à l'heure actuelle sont : CC, CFLAGS, CPP, CPPFLAGS, CXX, CXXFLAGS, LD, LDFLAGS, LIBS, MAKE, MFLAGS, MAKEFLAGS. L'interprétation des raccourcis a lieu sur la valeur spécifiée, comme expliquée dans la section précédente. Exemple courant : 
</p>
<pre>SetCPPFLAGS: -no-cpp-precomp</pre>
<p>
Les variables CPPFLAGS et LDFLAGS sont spéciales. Elles ont pour valeur par défaut respective : <code>-I%p/include</code> et <code>-L%p/lib</code>. Si vous spécifiez une valeur pour l'une de ces deux variables, elle sera ajoutée avant la valeur par défaut.
</p>
</td></tr><tr valign="top"><td>NoSet<b>ENVVAR</b></td><td>
<p>
Quand la valeur de ce champ est true (vraie), les valeurs par défaut de CPPFLAGS et LDFLAGS mentionnées ci-dessus sont désactivées. Autrement dit, si vous ne voulez pas que LDFLAGS ait une valeur par défaut, utilisez <code>NoSetLDFLAGS: true</code>.
</p>
</td></tr><tr valign="top"><td>ConfigureParams</td><td>
<p>
Paramètres supplémentaires à passer au script configure. (Voir CompileScript pour de plus amples informations). À partir des versions de fink &gt; 0.13.7, ce champ fonctionne aussi avec les modules perl <code>Type: Perl</code> ; il ajoute les paramètres à la chaîne perl par défaut Makefile.PL.
</p>
</td></tr><tr valign="top"><td>GCC</td><td>
<p>
Version requise du compilateur gcc à utiliser. Les valeurs autorisées sont : <code>2.95.2</code> ou <code>2.95</code> (pour l'arborescence des paquets 10.1 uniquement), <code>3.1</code> (pour l'arborescence des paquets 10.2 uniquement) et <code>3.3</code> (pour l'arborescence des paquets 10.2-gcc3.3 et 10.3 uniquement).
</p>
<p>À partir de la version 0.13.8 de fink, quand ce champ est utilisé, la version de gcc est testée via <code>gcc_select</code>, et fink se termine avec un message d'erreur si la version requise n'est pas présente.
</p>
<p>
Ce champ a été ajouté pour faciliter la transition entre les compilateurs gcc, qui ont introduit une incompatibilité binaire entre librairies ; cette incompatibilité concerne des parties de code C++ non reproduites dans les différentes versions.
</p>
</td></tr><tr valign="top"><td>CompileScript</td><td>
<p>
Liste de commandes à exécuter durant la phase de compilation. Voir plus bas la note au sujet des scripts. C'est là qu'il faut mettre les commandes de configuration et de compilation du paquet. Normalement, les commandes sont les suivantes :
</p>
<pre>./configure %c
make</pre>
<p>
Elles conviennent pour les paquets utilisant GNU autoconf. Pour ceux de type perl (indiqué via le champ Type) dont la version perl n'est pas indiquée, les commandes par défaut sont les suivantes :
</p>
<pre>perl Makefile.PL PREFIX=%p \
 INSTALLPRIVLIB=%p/lib/perl5 \
 INSTALLARCHLIB=%p/lib/perl5/darwin \
 INSTALLSITELIB=%p/lib/perl5 \
 INSTALLSITEARCH=%p/lib/perl5/darwin \
 INSTALLMAN1DIR=%p/share/man/man1 \
 INSTALLMAN3DIR=%p/share/man/man3
make
make test</pre>
<p>Si le type est du style <code>perl $version</code> (où $version est, par exemple,  5.6.0), les commandes par défaut sont les suivantes :
</p>
<pre>perl$version Makefile.PL \
 PERL=perl$version PREFIX=%p \
 INSTALLPRIVLIB=%p/lib/perl5/$version \
 INSTALLARCHLIB=%p/lib/perl5/$version/darwin \
 INSTALLSITELIB=%p/lib/perl5/$version \
 INSTALLSITEARCH=%p/lib/perl5/$version/darwin \
 INSTALLMAN1DIR=%p/share/man/man1 \
 INSTALLMAN3DIR=%p/share/man/man3
make
make test</pre>
<p>
L'interprétation des raccourcis (voir la section précédente) a lieu avant que les commandes soient exécutées.
</p>
</td></tr><tr valign="top"><td>NoPerlTests</td><td> 
<p>
<b>Introduite dans une version de fink &gt; 0.13.7.</b>
Valeur booléenne spécifique aux paquets de module perl. Si sa valeur est true (vraie), la partie <code>make test</code> de <code>CompileScript</code> est ignorée pour ce paquet.
</p>
</td></tr></table>
<p><b>Phase d'installation :</b></p>
<table border="0" cellpadding="0" cellspacing="10"><tr valign="bottom"><th align="left">Champ</th><th align="left">Utilisation</th></tr><tr valign="top"><td>UpdatePOD</td><td>
<p>
<b>Introduit dans la version 0.9.5 de fink.</b>
Valeur booléenne réservée aux paquets de module perl. Si sa valeur est true (vraie), du code est ajouté aux scripts install, postrm et postinst, qui gèrent les fichiers .pod fournis par les paquets perl. En particulier, la date .pod est ajoutée et ôtée du fichier central <code>/sw/lib/perl5/darwin/perllocal.pod</code>. (Si le type est du style <code>perl $version</code>, où $version est, par exemple, 5.6.0, les scripts sont adaptés pour gérer le fichier central .pod <code>/sw/lib/perl5/$version/perllocal.pod</code>.)
</p>
</td></tr><tr valign="top"><td>InstallScript</td><td>
<p>
Liste de commandes à exécuter durant la phase d'installation. Voir plus bas la note au sujet des scripts. C'est là où il faut mettre les commandes qui copient tous les fichiers requis dans le répertoire de construction du paquet. Normalement, on utilise :
</p>
<pre>make install prefix=%i</pre>
<p>
Ceci convient pour les paquets utilisant GNU autoconf. Pour ceux de type perl (indiqué via le champ Type) dont la version perl n'est pas indiquée, les commandes par défaut sont les suivantes :
</p>
<pre>make install INSTALLPRIVLIB=%i/lib/perl5 \
 INSTALLARCHLIB=%i/lib/perl5/darwin \
 INSTALLSITELIB=%i/lib/perl5 \
 INSTALLSITEARCH=%i/lib/perl5/darwin \
 INSTALLMAN1DIR=%i/share/man/man1 \
 INSTALLMAN3DIR=%i/share/man/man3</pre>
<p>Si le type est du style <code>perl $version</code> (où $version est, par exemple,  5.6.0), les commandes par défaut sont les suivantes :
</p>
<pre>make install INSTALLPRIVLIB=%i/lib/perl5/$version \
 INSTALLARCHLIB=%i/lib/perl5/$version/darwin \
 INSTALLSITELIB=%i/lib/perl5/$version \
 INSTALLSITEARCH=%i/lib/perl5/$version/darwin \
 INSTALLMAN1DIR=%i/share/man/man1 \
 INSTALLMAN3DIR=%i/share/man/man3</pre>
<p>
Si le paquet l'admet, il est préférable d'utiliser <code>make install DESTDIR=%d</code>. L'interprétation des raccourcis (voir section précédente) a lieu avant que les commandes ne soient exécutées .
</p>
</td></tr><tr valign="top"><td>JarFiles</td><td>
<p>
<b>Introduit dans la version 0.10.0 de fink.</b>
Champ similaire au champ DocFiles. Il installe les fichiers jar spécifiés dans <code>%p/share/java/%n</code>. Exemple :
</p>
<pre>JarFiles: lib/*.jar foo.jar:fooBar.jar</pre>
<p>
Cette commande installe tous les fichiers jar situés dans le répertoire lib, puis installe le fichier foo.jar sous le nom de fooBar.jar.
</p>
<p>
Elle garantit aussi que les fichiers jar (en fait, tous les fichiers d'extension .jar situés dans <code>%p/share/java/%n</code>) sont ajoutés à la variable d'environnement CLASSPATH. Ceci permet aux outils tels configure ou ant de détecter correctement les fichiers jar installés.
</p>
</td></tr><tr valign="top"><td>DocFiles</td><td>
<p>
Ce champ fournit un moyen simple d'installer les fichiers README et COPYING dans le répertoire doc du paquet, soit <code>%p/share/doc/%n</code>. Sa valeur consiste en une liste de fichiers séparés par des espaces. Vous pouvez copier les fichiers à partir de sous-répertoires du répertoire de compilation, ils seront placés dans le répertoire lui-même et non pas dans un sous-répertoire. Les caractères joker reconnus par le shell sont autorisés. On peut aussi renommer des fichiers à la volée en faisant suivre le nom du fichier de deux-points (:), puis du nouveau nom. Exemple :<code>libgimp/COPYING:COPYING.libgimp</code>. Ce champ ajoute les commandes <code>install</code> appropriées au script InstallScript.
</p>
</td></tr><tr valign="top"><td>Shlibs</td><td>
<p>
<b>Introduit dans la version 0.11.0 de fink.</b>
Ce champ déclare les librairies partagées installées dans le paquet. Il y a une ligne par librairie partagée, cette ligne est constituée de trois éléments séparés par des blancs : le nom d'installation de la librairie <code>-install_name</code>, le numéro de version de compatibilité de la librairie <code>-compatibility_version</code> et des informations de dépendance de version qui indiquent quel paquet de Fink fournit la librairie à cette version de compatibilité. Les informations de dépendance doivent être spécifiées sous la forme <code> foo (&gt;= version-revision)</code>, où  <code>version-revision</code> représente la <b>première</b> version d'un paquet Fink qui rend disponible cette librairie (avec cette version de compatibilité). La déclaration Shlibs revient à dire que le mainteneur du paquet garantit qu'une librairie portant ce nom et ayant une version de compatibilité au moins égale à <code>-compatibility_version</code> sera présente dans toutes les versions postérieures de ce paquet Fink.
</p></td></tr><tr valign="top"><td>RuntimeVars</td><td>
<p>
<b>Introduit dans fink 0.10.0.</b>
Ce champ fournit un moyen pratique de donner une valeur statique à des variables d'environnement pendant l'exécution (si vous voulez avoir plus de latitude dans ce domaine, voir la <a href="#profile.d">section scripts profile.d</a>). À partir du moment où le paquet est installé, ces variables sont définies par les scripts <code>/sw/bin/init.[c]sh</code>.
</p>
<p>
La valeur de la variable peut contenir des espaces (seuls les espaces de fin de chaîne sont supprimés) ; l'interprétation des raccourcis a eu lieu sur ce champ. Exemple :
</p>
<pre>RuntimeVars: &lt;&lt;
 UneVariable: %p/Valeur
 UneAutreVariable: toto tata
&lt;&lt;</pre>
<p>
définit deux variables d'environnement 'UneVariable' et 'UneAutreVariable' ; leurs valeurs seront respectivement '/sw/Valeur' (si votre préfixe est /sw) et 'toto tata'.
</p>
<p>
Ce champ ajoute les commandes appropriées au script InstallScript. Ces commandes ajoutent une ligne setenv/export pour chaque variable aux scripts profile.d du paquet ; vous pouvez donc spécifier vos propres commandes, elles ne seront pas remplacées. Les lignes sont ajoutées en début de scripts, vous pouvez donc utiliser ces variables dans vos scripts.
</p>
</td></tr><tr valign="top"><td>SplitOff</td><td>
<p>
<b>Introduit dans fink 0.9.9.</b>
Génère un second paquet à partir d'une seule exécution du couple compilation/installation. Pour avoir de plus amples informations sur la façon dont ce champ fonctionne, voir la <a href="#splitoffs">section splitoff</a> ci-dessous.
</p>
</td></tr><tr valign="top"><td>SplitOff<b>N</b></td><td>
<p>
<b>Introduit dans fink 0.9.9.</b>
Similaire au champ <code>SplitOff</code>, utilisé pour générer un N-ième paquet à partir d'une seule exécution du couple compilation/installation. À partir d'une version CVS de fink postérieure à la version 0.19.2, vous pouvez utiliser des valeurs entières (non nécessairement consécutives) de N &gt;= 2. Néanmoins, il ne peut pas y avoir de doublons.
</p>
</td></tr><tr valign="top"><td>Files</td><td>
<p>
<b>Introduit dans fink 0.9.9.</b>
Utilisé <b>uniquement</b> avec un champ <code>SplitOff</code> ou <code>SplitOff<b>N</b></code>, ce champ indique quels fichiers et répertoires doivent être déplacés du répertoire d'installation %I du paquet parent vers le répertoire d'installation en cours %i. Notez que le déplacement a lieu après l'exécution des scripts InstallScript et DocFiles du paquet parent, mais avant l'exécution des mêmes scripts du paquet en cours d'installation.
</p>
</td></tr></table>
<p><b>Build Phase:</b></p>
<table border="0" cellpadding="0" cellspacing="10"><tr valign="bottom"><th align="left">Field</th><th align="left">Value</th></tr><tr valign="top"><td>PreInstScript, PostInstScript, PreRmScript, PostRmScript</td><td>
<p>
These fields specify pieces of shell scripts that will be called when the package is installed, upgraded or removed. Fink automatically adds the shell script header <code>#!/bin/sh</code>, and calls <code>set -e</code> so any command that fails will result in instant termination of the script. Fink also adds an <code>exit 0</code> at the end. To indicate an error, exit from the script with a non-zero exit code. The first parameter (<code>$1</code>) is set to a value indicating what action is being performed. Some possible values are <code>install</code>, <code>upgrade</code>, <code>remove</code> and <code>purge</code>. Note that there are more values, used during error rollback or when removing a package in favor of another one.
</p>
<p>
The scripts are called at the following times:
</p>
<ul>
<li>PreInstScript: When the package is installed for the first time and before upgrading the package to this version.</li>
<li>PostInstScript: After unpacking and setting up the package.</li>
<li>PreRmScript: Before the package is removed or upgraded to a later version.</li>
<li>PostRmScript: After the package was removed or upgraded to a later version.</li>
</ul>
<p>
To make it more clear, an upgrade invokes both the ...Inst scripts of the new version and the ...Rm scripts of the old version. Details can be found in the Debian Policy Manual, <a href="http://www.debian.org/doc/debian-policy/ch-maintainerscripts.html">Chapter 6</a>.
</p>
<p>
Percent expansion is performed on the scripts. Commands can generally be called without giving a full path.
</p>
</td></tr><tr valign="top"><td>ConfFiles</td><td>
<p>
A space-separated list of files that are user-modifiable configuration files. The files must be specified with an absolute path, e.g. <code>%p/etc/foo.conf</code>. The named files will receive special treatment by dpkg. When a package is upgraded and the file has changed both on disk and in the package, the user is asked which version to use and backups of the file will be made. When a package is "remove"d, the configuration files will remain on disk. Only a "purge" also removes the configuration files.
</p>
</td></tr><tr valign="top"><td>InfoDocs</td><td>
<p>
Lists the names of Info documents that the package installs in %p/share/info. This will add appropriate code to the postinst and prerm scripts to maintain the Info directory file, <code>dir</code>. This feature is still in flux, more fields for finer control may be added in the future.
</p>
</td></tr><tr valign="top"><td>DaemonicFile</td><td>
<p>
Gives a service description for <code>daemonic</code>. <code>daemonic</code> is used by Fink to create and remove StartupItems for daemon processes (e.g. web servers). The description will added to the package as a file named <code>%p/etc/daemons/<b>name</b>.xml</code>, where <b>name</b> is specified by the DaemonicName field and defaults to the package name. Percent expansion is performed on the contents of this field. Note that you must add <code>daemonic</code> to the dependency list if your package uses it.
</p>
</td></tr><tr valign="top"><td>DaemonicName</td><td>
<p>
A name for the <code>daemonic</code> service description file. See the description of DaemonicFile for details.
</p>
</td></tr></table>
<p><b>Additional Data:</b></p>
<table border="0" cellpadding="0" cellspacing="10"><tr valign="bottom"><th align="left">Field</th><th align="left">Value</th></tr><tr valign="top"><td>Homepage</td><td>
<p>
The URL of the upstream home page of the package.
</p>
</td></tr><tr valign="top"><td>DescDetail</td><td>
<p>
A more detailed description than the one in the <code>Description</code> field (what is it, what can I use it for?). Multiple lines allowed. Because this field will be displayed without the benefit of word-wrap, you should manually insert line breaks in order to keep lines less than 79 chars (if possible).
</p>
</td></tr><tr valign="top"><td>DescUsage</td><td>
<p>
This is for information that is needed to use the package (how do I use it?). As in "run wmaker.inst once before using WindowMaker". Multiple lines allowed. Because this field will be displayed without the benefit of word-wrap, you should manually insert line breaks in order to keep lines less than 79 chars (if possible).
</p>
</td></tr><tr valign="top"><td>DescPackaging</td><td>
<p>
Notes about the packaging. Stuff like "patches the Makefile to put everything in place" goes here. Multiple lines allowed.
</p>
</td></tr><tr valign="top"><td>DescPort</td><td>
<p>
Notes that are specific to porting the package to Darwin. Stuff like "config.guess and libtool scripts are updated, -no-cpp-precomp is necessary" goes here. Multiple lines allowed.
</p>
</td></tr></table>


<h2><a name="splitoffs">5.3 SplitOffs</a></h2>
<p>
Beginning with fink 0.9.9, a single .info file can be used to build multiple packages.   The install phase begins as usual, with the execution of the  <code>InstallScript</code> and <code>DocFiles</code> commands. A <code>SplitOff</code> or <code>SplitOff<b>N</b></code> field, if present, then triggers the creation of an additional install directory.  Within the  <code>SplitOff</code> or <code>SplitOff<b>N</b></code> field, the new install directory is referred to as %i, while the original install directory of the parent  package is referred to as %I.
</p>
<p>
Each <code>SplitOff</code> and <code>SplitOff<b>N</b></code> field must contain a number of fields of its own.  In fact, it resembles a complete package description, but with certain fields missing.  Here is what belongs in the sub-description (by category):
</p>
<ul>
<li>Initial Data: Only the <code>Package</code> needs to be specified, everything else is inherited from the parent package.  You may modify <code>Type</code> and <code>License</code> by declaring the field within the <code>SplitOff</code> or <code>SplitOff<b>N</b></code>.  Percent expansion can be used, and it is often convenient to refer to the name %N of the parent package.</li>
<li>Dependencies: All of these are allowed.</li>
<li>Unpack Phase, Patch Phase, Compile Phase: These fields are irrelevant and will be ignored.</li>
<li>Install Phase, Build Phase: Any of these fields are allowed (except that SplitOffs cannot themselves contain additional SplitOffs).</li>
<li>Additional Data: These are inherited from the parent package but may be modified by declaring the field within the <code>SplitOff</code> or <code>SplitOff<b>N</b></code>.</li>
</ul>
<p>
During the install phase, the <code>InstallScript</code> and <code>DocFiles</code> of the parent package are executed first. Next comes processing of the <code>SplitOff</code> and <code>SplitOff<b>N</b></code> fields. For each such field in turn, the <code>Files</code> command causes the listed files and directories to be moved from the parent's installation directory %I to the current installation directory %i.  Then the <code>InstallScript</code> and <code>DocFiles</code> of the given <code>SplitOff</code> or <code>SplitOff<b>N</b></code> package are executed.  
</p>
<p>
At this time, the <code>SplitOff</code> is processed first (if present), followed by each <code>SplitOff<b>N</b></code> in numerical order by N. However, this may change in the future, so, for example, instead of:
</p>
<pre>
SplitOff: &lt;&lt;
  Description: Some header files
  Files: include/foo.h include/bar.h
&lt;&lt;
SplitOff2: &lt;&lt;
  Description: All other header files
  Files: include/*
&lt;&lt;
</pre>
<p>
which only works correctly if <code>SplitOff</code> is processed before <code>SplitOff2</code> it's safer to list explicitly the files for each (or use more specific filename globs).
</p>
<p>
During the build phase, the pre/post install/remove scripts for each of the packages is constructed by using the build phase commands which were specified for that package.
</p>
<p>
Each package being built is required to document the licensing arrangement in %i/share/doc/%n (and of course %n takes a different value for each package).  Note that <code>DocFiles</code> copies files rather than moving them, so it is possible to install identical copies of the documentation into each  of the packages by using <code>DocFiles</code> several times.
</p>


<h2><a name="scripts">5.4 Scripts</a></h2>

<p>
The PatchScript, CompileScript and InstallScript fields allow you to specify shell commands to be executed. The build directory (<code>%b</code>) is the current directory when scripts are executed. You should always use relative pathnames or percent-expansions for files and directories in the fink hierarchy, not complete absolute pathnames. Two forms are supported.
</p>
<p>
This field can be a simple list of commands. This is sort of like a shell script. However, the commands are executed via system(), one line at a time, so setting variables or changing the directory only affects commands on that same line. Starting in a CVS version of fink after 0.18.2, you can wrap long lines similar to normal shell scripts: a backslash (<code>\</code>) at the end of a line indicates that the next line is a continuation.
</p>
<p>
Alternately, you can embed a complete script here, using the interpreter of your choice. As with any Unix script, the first line must begin with <code>#!</code> followed by the full pathname of to the interpreter and any needed flags (e.g., <code>#!/bin/csh</code>, <code>#!/bin/bash -ev</code>, etc.). In this situation, the whole *Script field is dumped into a temporary file that is then executed.
</p>


<h2><a name="patches">5.5 Patches</a></h2>

<p>
If your package needs a patch to compile on Darwin (or to work with fink), name the patch with the same name as the package description, using the extension ".patch" instead of ".info" and put it in the same directory as the .info file. If you use the full package in the filename specify either one of these (they are equivalent):
</p>
<pre>Patch: %f.patch</pre>
<pre>PatchScript: patch -p1 &lt;%a/%f.patch</pre>
<p>
If you use the newer simple package filename convention, use %n insead of %f. These two fields are not mutually-exclusive - you can use both, and they will both be executed. In that case the PatchScript is executed last.
</p>
<p>
Because you may need to have the users chosen prefix in the patch file it is recommended that you have a variable such as <code>@PREFIX@</code>  instead of <code>/sw</code> in the patch and then use:
</p>
<pre>PatchScript: sed 's|@PREFIX@|%p|g' &lt;%a/%f.patch | patch -p1</pre>
<p>Patches should be in unidiff format and are normally generated by using:</p>
<pre>diff -urN &lt;originalsourcedir&gt; &lt;patchedsourcedir&gt;</pre>
<p>
If you have used emacs to edit files, you can add <code>-x'*~'</code> to the diff command above in order to exclude automatically-generated backup files.</p>
<p>
It must also be noted that extremely large patches should not be put in cvs. They should be put on a web/ftp server and specified using the <code>SourceN:</code> field. If you don't have a website, fink project admins can make the file available from fink's own website. If your patch is larger than about 30Kb, you should consider making it a separate download.
</p>


<h2><a name="profile.d">5.6 Profile.d scripts</a></h2>

<p>
If your package needs some run-time initialization  (e.g. to setup environment variables), you can use profile.d scripts. These script fragments are sourced by the <code>/sw/bin/init.[c]sh</code> scripts. Normally, all fink users will load these scripts in their shell startup files (<code>.cshrc</code> and comparable files). Your package must provide each script in two variants: one for sh compatible shells (sh, zsh, bash, ksh, ...) and one for csh compatible shells (csh, tcsh). They have to be installed as <code>/sw/etc/profile.d/%n.[c]sh</code> (where %n as usual stands for the package name). Also, their executable and read bits have to be set (i.e. install them with -m 755), otherwise they will not be loaded correctly.
</p>
<p>
If you just need to set some environment variables (for example, QTDIR to '/sw'), you can use the RuntimeVars field which is provided as a convenient way to achieve exactly this.
</p>



<? include_once "footer.inc"; ?>
