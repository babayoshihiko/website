<?php
$title = "News";
$cvs_author = 'Author: alexkhansen';
$cvs_date = 'Date: 2016/07/30 18:14:16';
$metatags = '';

include_once "header.inc";
?>

<a name="2017-10-07%20fink-0.42.0%20released"><span class="news-date">2017-10-07: </span><span class="news-headline">fink-0.42.0 released</span></a><?php gray_line(); ?>
  <p>The Fink Project has released <code>fink-0.42.0</code> to provide High Sierra (10.13) support.
  This release officially supports 10.9.0-10.13.0.  It also adds support for Oracle's Java 9.  
  In addition, it incorporates other bug fixes and enhancements.  
  The best update sequence from going to 10.9 or 10.10 to 10.12 is as follows:</p>
  <p>0) Start on 10.9-10.12.  Don't update your OS yet.</p>
  <p>1) In a terminal window, run <code>fink selfupdate</code> and install <code>fink-0.42.0</code></p>
  <p>2) Update to High Sierra.</p>
  <p>3) In a terminal window, run <code>fink reinstall fink</code>.</p>
  <p>If you happen to have updated your OS X before updating fink, follow the instructions below, and then run "fink selfupdate" again.</p>
 <a name="2017-10-03%20Fixing%20updates%20when%20you%20have%20installed%20High%20Sierra%20before%20updating%20fink"><span class="news-date">2017-10-03: </span><span class="news-headline">Fixing updates when you have installed High Sierra before updating fink</span></a><?php gray_line(); ?>
  <p>If you have updated to High Sierra before updating fink, your <code>fink</code> command 
  won't be able to function any more.  Fortunately, a workaround is now available.</p>
  <p>1) Download an updated <a href="http://bindist.finkproject.org/10.13/dists/stable/main/binary-darwin-x86_64/base/fink_0.41.999.git-20171001.2306_darwin-x86_64.deb">fink</a>.</p>
  <p>2) In a terminal window, run <code>sudo dpkg -i fink_0.41.999.git-20171001.2306_darwin-x86_64.deb</code> from the directory where you downloaded the file.</p>
 <a name="2017-09-28%20Fink%20for%20High%20Sierra%20(10.13)"><span class="news-date">2017-09-28: </span><span class="news-headline">Fink for High Sierra (10.13)</span></a><?php gray_line(); ?>
  <p>Because of a recent Sourceforge outage, we haven't been able to do a proper <code>fink</code> 
  release that supports High Sierra.  However, since the <code>fink</code> source on 
  Github isn't affected by this, it is possible to get a pre-release version out of our
  <code>git</code> repository and install that.</p>
  <p>The following sequence of steps should allow you to update your Fink installation
  on 10.9 (Mavericks) or later for High Sierra.  10.8 (Mountain Lion) or earlier 
  have no supported upgrade path.</p>
  <p>0) Don't update your OS yet!</p>
  <p>1) Download a copy of the 
  <a href="https://github.com/fink/fink/archive/master.zip">repository archive</a> and
  uncompress it if your browser doesn't do that automatically.</p>
  <p>2) Open a Terminal window and change to the resulting <code>fink-master</code> directory
  e.g. <code>cd ~/Downloads/fink-master</code> .</p>
  <p>3) Run the command <code>sudo ./inject.pl</code> to update <code>fink</code>.</p>
  <p>4) Update your OS to High Sierra.</p>
  <p>5) Open a Terminal window and run <code>fink reinstall fink</code> to reset your distribution.</p>
  <p></p>
  <p>For new installs on High Sierra:</p>
  <p>1) Install the Xcode 9 command-line tools by running <code>sudo xcode-select --install</code> 
  in a Terminal window.</p>
  <p>2) Install the latest JDK from Oracle, e.g. by running <code>javac</code> in a Terminal 
  window.</p>
  <p>3) Follow steps 1-2) from the upgrade instructions above.</p>
  <p>4) Run <code>sudo ./bootstrap</code></p>
  <p>5) The default bootstrap operation will error out at the end for the time being, until 
  an official High Sierra binary distribution has been uploaded.  Go ahead and run <code>
  /sw/bin/pathsetup.sh</code> as usual, however.</p>
 <a name="2016-11-12%20fink-0.41.0%20released"><span class="news-date">2016-11-12: </span><span class="news-headline">fink-0.41.0 released</span></a><?php gray_line(); ?>
  <p>The Fink Project has released <code>fink-0.41.1</code> to help us deal with adjustments
  to the libXt library from XQuartz via the use of the XQuartz version in the <code>system-xfree86*</code>
  packages, and to support OS X 10.12.1 .
  </p>
 <a name="2016-09-20%20fink-0.41.0%20released"><span class="news-date">2016-09-20: </span><span class="news-headline">fink-0.41.0 released</span></a><?php gray_line(); ?>
  <p>The Fink Project has released <code>fink-0.41.0</code> to provide Sierra (10.12) support.
  This release officially supports 10.9.0-10.12.0 and incorporates other bug fixes and enhancements.  
  The best update sequence from going to 10.9 or 10.10 to 10.12 is as follows:</p>
  <p>0) Start on 10.9 or 10.10.</p>
  <p>1) <code>fink cleanup --deb</code></p>
  <p>2) <code>fink selfupdate</code></p>
  <p>4) Update to 10.12</p>
  <p>5) <code>fink reinstall fink</code></p>
  <p>If you happen to have updated your OS X before updating fink, see if you can install
  <code>fink-0.41.0</code> for your former distribution by using <code> sudo apt-get update ; sudo apt-get install fink </code> 
  and then use <code>fink reinstall fink</code> to switch your distribution.</p>
  <p>Otherwise you can download a <a href="http://bindist.finkmirrors.net/10.12/dists/stable/main/binary-darwin-x86_64/base/fink_0.41.0-111_darwin-x86_64.deb">
  .deb  archive</a> manually, and install it using 
  <code>sudo dpkg -i fink_0.41.1-111_darwin-x86_64.deb</code> from the directory where 
  you downloaded it, then use <code>fink reinstall fink</code> to update the distribution.
  </p>
 <a name="2016-08-13%20fink-0.39.5%20released"><span class="news-date">2016-08-13: </span><span class="news-headline">fink-0.39.5 released</span></a><?php gray_line(); ?>
   <p>The Fink Project has released <code>fink-0.39.5</code> for 10.9-10.11.  This 
  officially supports 10.9.0-10.11.6, and among other fixes and enhancements it
  switches from using <code>otool</code> to <code>otool-classic</code> to maintain
  compatibility with Xcode 8.</p>
 <a name="2016-07-30%20Development%20support%20for%2010.12"><span class="news-date">2016-07-30: </span><span class="news-headline">Development support for 10.12</span></a><?php gray_line(); ?>
  <p>The Fink Project has created a github branch named <code>sierra-alpha-bravo</code>
  for 10.12 development.  This is accessible via <code>git</code> as well as through the 
  <a href="https://github.com/fink/fink/tree/sierra-alpha-bravo">branch webpage</a>.</p>
 <a name="2016-07-30%20fink-0.39.4%20released"><span class="news-date">2016-07-30: </span><span class="news-headline">fink-0.39.4 released</span></a><?php gray_line(); ?>
  <p>The Fink Project has released <code>fink-0.39.4</code> for 10.9-10.11.  This 
  officially supports 10.9.0-10.11.5 and incorporates bug fixes and enhancements.  
  The best update sequence from going to 10.9 or 10.10 to 10.11 is as follows:</p>
  <p>0) Start on 10.9 or 10.10.</p>
  <p>1) fink cleanup --deb</p>
  <p>2) fink selfupdate</p>
  <p>3) fink selfupdate</p>
  <p>4) Update to 10.11</p>
  <p>If you happen to have updated your OS X before updating Fink, you can download a
  <a href="http://downloads.sourceforge.net/fink/fink_0.39.4-101_darwin-x86_64.deb">
  .deb  archive</a> , and install it using 
  <code>sudo dpkg -i fink_0.39.4-101_darwin-x86_64.deb</code> from the directory where 
  you downloaded it.
  </p>
 <a name="2015-10-31%20fink-0.39.2%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2015-10-31: </span><span class="news-headline">fink-0.39.2 リリース</span></a><?php gray_line(); ?>
  <p>The Fink Project は、10.9-10.11 向けに <code>fink-0.39.2</code> をリリースしました。
  これは、バグ修正と機能向上を含みます。
  10.9 または 10.10 から 10.11 に更新する最善の方法は、以下の通りです:</p>
  <p>0) 10.9 または 10.10 をスタート</p>
  <p>1) fink cleanup --deb</p>
  <p>2) fink selfupdate</p>
  <p>3) fink selfupdate</p>
  <p>4) 10.11 にアップグレード</p>
  <p>もし Fink を更新する前に OS X をアップグレードしてしまった場合、
  <a href="http://downloads.sourceforge.net/fink/fink_0.39.2-101_darwin-x86_64.deb">
  .deb  archive</a> をダウンロードし、ダウンロードしたディレクトリで
  <code>sudo dpkg -i fink_0.39.2-101_darwin-x86_64.deb</code>
  と実行し、インストールすることができます。
  </p>
 <a name="2015-09-30%20fink-0.39.0%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2015-09-30: </span><span class="news-headline">fink-0.39.0 リリース</span></a><?php gray_line(); ?>
  <p>The Fink Project は、 <code>fink-0.39.0</code>  OS X El Capitan 
  (10.11) 向けにリリースしました。
  このリリースは、 10.9 と 10.10 で fink が使用するディストリビューションツリーを変更します。
  This release also switches the distribution tree used by fink on 10.9 and 10.10.  
  10.9 または 10.10 から 10.11 に更新する最善の方法は、以下の通りです:</p>
  <p>0) 10.9 または 10.10 をスタート</p>
  <p>1) fink cleanup --deb</p>
  <p>2) fink selfupdate</p>
  <p>3) fink selfupdate</p>
  <p>4) 10.11 にアップグレード</p>
  <p>もし Fink を更新する前に OS X をアップグレードしてしまった場合、
  <a href="http://downloads.sourceforge.net/fink/fink_0.39.0-101_darwin-x86_64.deb">
  .deb  archive</a> をダウンロードし、ダウンロードしたディレクトリで
  <code>sudo dpkg -i fink_0.39.0-101_darwin-x86_64.deb</code>
  と実行し、インストールすることができます。
  </p>
 <a name="2015-09-12%20Beta%20support%20for%20OS%20X%2010.11%20now%20in%20fink%20master"><span class="news-date">2015-09-12: </span><span class="news-headline">Beta support for OS X 10.11 now in fink master</span></a><?php gray_line(); ?>
  <p>
  Support for OSX 10.11 beta is now available in Fink master, but not yet in release.
  This can be downloaded from <a href="https://github.com/fink/fink/"> fink's 
  github site</a>.
  </p>
 <a name="2008-08-15%20fink-0.38.7%20released"><span class="news-date">2008-08-15: </span><span class="news-headline">fink-0.38.7 released</span></a><?php gray_line(); ?>
  <p>
  <code>fink-0.38.7</code> was released on 15 August, 2015.  This release supports
  OS X up to 10.10.
  </p>
 <a name="2015-07-31%20CVS%20access%20restored"><span class="news-date">2015-07-31: </span><span class="news-headline">CVS access restored</span></a><?php gray_line(); ?>
  <p>
  We now have CVS access back for services including selfupdate, package updates, and
  website updates.
  </p>
 <a name="2015-06-13%20fink-0.38.6%20and%20dpkg-base-files-0.4%20released."><span class="news-date">2015-06-13: </span><span class="news-headline">fink-0.38.6 and dpkg-base-files-0.4 released.</span></a><?php gray_line(); ?>
  <p>
  <code>fink-0.38.6</code> was released on 13 June, 2015.  This release fixes an
  issue which prevented bootstrapping on Yosemite (or later) using Xcode newer
  than 6.2 .
  </p>
  <p>
  <code>dpkg-base-files-0.4</code> was also released on 13 June, 2015.  This update
  mitigates an issue in which packages with app bundles couldn't be updated on 
  Yosemite:
  </p>
  <pre>
 unable to make backup link of 
 `.%p/Applications/FOO.app/Contents/PkgInfo' 
 before installing new version: 
 Operation not permitted
</pre>
  <p>
  Users are encouraged to run <code>fink selfupdate</code> and install these new versions.
  </p>
  <a name="2015-06-9%20fink%20development%20branch%20for%2010.11%20on%20github"><span class="news-date">2015-06-9: </span><span class="news-headline">fink development branch for 10.11 on github</span></a><?php gray_line(); ?>
  <p>
	If you are interested in helping us with the migration to 10.11, a current released
	fink won't do the job.  A branch has been set up on 
	<a href="https://github.com/fink/fink/tree/TheCaptain">fink's github site</a> for this.
  </p>
  <p>
  Please note that right now we are in an alpha stage and you might need to wipe your 
  Fink distribution out a as stuff gets changed around.</p>
  <a name="2015-05-14%20fink-0.38.5%20released."><span class="news-date">2015-05-14: </span><span class="news-headline">fink-0.38.5 released.</span></a><?php gray_line(); ?>
  <p>
  <code>fink-0.38.5</code> was released on 14 May, 2015.  This release enables
  official OS X 10.10.3 support, and reverts a change made in <code>fink-0.38.4</code>
  to restore the requirement that the /usr/X11R6 convenience symlink be present for
  the <code>x11*</code> virtual packages to be active.
  </p>
  <p>
  It also downgrades building libraries with flat namespace from a fatal validation
  error to a warning, since some packages require such a build.  There are a number
  of additional validation enhancements as well.  Check the commit logs on fink's 
  github site for additional information.
  </p>
  <a name="2014-11-29%20fink-0.38.3%20released."><span class="news-date">2014-11-29: </span><span class="news-headline">fink-0.38.3 released.</span></a><?php gray_line(); ?>
  <p>
  <code>fink-0.38.3</code> was released on 29 November, 2014.  This release enables the
  official 10.10 binary distribution by default, along with official OS X 10.10.1 support
  and other fixes and enhancements.
  </p>
  <a name="2014-10-18%20Yosemite%20support:%20fink-0.38.0%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2014-10-18: </span><span class="news-headline">Yosemite support: fink-0.38.0 リリース</span></a><?php gray_line(); ?>
  <p>
  <code>fink-0.38.0</code> が、2014年10月18日にリリースされました。
  Fink Project は、<code>fink-0.38.0</code> のリリースにともない、
  Yosemite (OS X 10.10) の公式サポートをお知らせいたします。
  </p>
  <p>
  10.9 ユーザで、10.9 から 10.10 へ Fink をアップグレードしたい場合は、
  10.9 上で、 10.10 に更新する前に  <code>fink-0.38.0</code> (またはそれ以降) をインストールしなければなりません。
  10.8 以前からの 10.10 へのアップグレードは対応していません。
  </p>
 <a name="2014-9-20%20fink-0.37.1%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2014-9-20: </span><span class="news-headline">fink-0.37.1 リリース</span></a><?php gray_line(); ?>
  <p>
  <code>fink-0.37.1</code> が、2014年11月20日にリリースされました。
  このリリースでは、10.9 上で Xcode 6.x を使った bootstrap をはじめとして、
  いくつかの修正を行いました。
  さらに、10.9.4 と 10.9.5 に公式に対応しました。
  </p>
 <a name="2014-06-04%20fink-0.36.5%20%E3%81%A8%20fink-0.37.0%20%E3%81%8C%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9%E3%81%95%E3%82%8C%E3%81%BE%E3%81%97%E3%81%9F%E3%80%8210.6%20%E3%81%AE%E5%85%AC%E5%BC%8F%E3%82%B5%E3%83%9D%E3%83%BC%E3%83%88%E3%81%8C%E7%B5%82%E4%BA%86%E3%81%97%E3%81%BE%E3%81%97%E3%81%9F%E3%80%82"><span class="news-date">2014-06-04: </span><span class="news-headline">fink-0.36.5 と fink-0.37.0 がリリースされました。10.6 の公式サポートが終了しました。</span></a><?php gray_line(); ?>
  <p>
  <code>fink-0.36.5</code> と <code>fink-0.37.0</code> が、2014年6月4日にリリースされました。
  これらの <code>fink</code> バージョンは、古い Apple Java SDK がインストールされている場合の
  10.6 上の Java 検出の修正を含みます。
  <code>fink-0.37.0</code> は、公式に OS 10.9.3 を認識します。
  さらに、Fink のコンパイルラッパーが、修正を容易にするために直接インストールされます。
  </p>
  <p>
  <code>fink-0.36.5</code> は、Fink Project による 10.6 のサポートを終了します。
  パッケージの更新を希望するユーザは、それぞれのパッケージのメンテナに連絡してください。
  メンテナのいないパッケージも、要求があれば更新されることもあります。
  </p>
 <a name="2014-04-06%20fink-0.36.4%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2014-04-06: </span><span class="news-headline">fink-0.36.4 リリース</span></a><?php gray_line(); ?>
  <p>
  <code>fink-0.36.4</code> が、2014年4月6日にリリースされました。
  この <code>fink</code> リリースにより、10.8 と 10.9 におけるバイナリ配布を再開します
  (10.6 と 10.7 も作成次第対応予定)。
  さらに、10.8 と 10.9 の Xcode 5.1 によって引き起こされた多くのビルド時の問題を解決します。
  また、OS X 10.9.2 への公式サポートを含み、
  Xcode.app がない場合の bootstrap を修正し、
  10.6 の bootstrap でのデフォルトアーキテクチャを x86_64 とします。
  </p>
  <p>
  Xcode 5.1 ビルド問題などのため、
  ユーザの皆さんが <code>fink selfupdate</code> をすることを推奨します。
  </p>
 <a name="2014-04-06%20rsync%20%E3%81%AE%E5%95%8F%E9%A1%8C"><span class="news-date">2014-04-06: </span><span class="news-headline">rsync の問題</span></a><?php gray_line(); ?>
  <p>
  マスター rsync サーバに問題が発生しており、まだ解決されていません。
  残念なことに、ほかのサーバにも影響しており、２つだけ動作しています。
  <code>/sw/etc/fink.conf</code> を管理者権限で開き、
  <code>Mirror-rsync</code> を下記のいずれかに設定してください。
  </p>
<pre>
rsync://ber.de.eu.finkmirrors.net/finkinfo/
rsync://hnd.jp.asi.finkmirrors.net/finkinfo/
</pre>
  <p>
  または <code>fink selfupdate-cvs</code> を実行して、更新方法を変えてください。
  </p>
 <a name="2013-12-30%20fink-0.36.3.1%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2013-12-30: </span><span class="news-headline">fink-0.36.3.1 リリース</span></a><?php gray_line(); ?>
  <p>
  <code>fink-0.36.3.1</code> は、2013年12月30日にリリースされました。
  このリリースは、OS X 10.9.1 への公式サポートを含み、
  また 64 bit プラットフォーム上で、
  公式または非公式のバイナリディストリビューションへ直接アクセスできない問題を修正します。
  さらに、fink-0.36.3 で導入された 32 bit プラットフォームの問題も修正します。  </p>
 <a name="2013-11-17%20fink-0.36.1%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2013-11-17: </span><span class="news-headline">fink-0.36.1 リリース</span></a><?php gray_line(); ?>
  <p>
  <code>fink-0.36.1</code> は、2013年11月17日にリリースされました。
  このリリースは、fink-0.36.0 に導入された Perl モジュールを
  ビルドする時に発生する断続的な問題を修正します。
  この問題を修正するため、fink-0.36.1 をインストールすることを勧めます。
  Perl モジュールに問題がある場合は、<code>fink rebuild</code> 
  をしてみてください。
  </p>
  <p>
  さらに、bootstrap スクリプトが Mavericks command line build tools が、
  該当する OS バージョンにインストールされているか確認し、
  間違ったツールで bootstrap することを防ぎます。
  </p>
 <a name="2013-10-31%20fink-0.36.0%20released"><span class="news-date">2013-10-31: </span><span class="news-headline">fink-0.36.0 released</span></a><?php gray_line(); ?>
  <p>
  <code>fink-0.36.0</code> は、2013年11月17日にリリースされました。
  これは、 OS X 10.9 (Mavericks) に対応した最初のリリースです。
  現在、パッケージ化も進めています。
  </p>
 <a name="2013-05-08%20fink-0.34.8%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2013-05-08: </span><span class="news-headline">fink-0.34.8 リリース</span></a><?php gray_line(); ?>
  <p><code>fink-0.34.8</code> が、2013年5月8日にリリースされました。
  このリリースは、0.34.7 での修正を拡張し、
  <code>fink list --format=dotty-build</code>
  を改良し、また多の改良が加えられています。</p>
 <a name="2013-03-29%20fink-0.34.7%20released"><span class="news-date">2013-03-29: </span><span class="news-headline">fink-0.34.7 released</span></a><?php gray_line(); ?>
  <p><code>fink-0.34.7</code> が、2013年3月29日にリリースされました。
  このリリースでは、root アクセスで稀に <code>tar</code> が固まってしまう問題に対処しました。</p>
 <a name="2013-03-16%20fink-0.34.6%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2013-03-16: </span><span class="news-headline">fink-0.34.6 リリース</span></a><?php gray_line(); ?>
  <p><code>fink-0.34.6</code> が、2013年3月16日にリリースされました。
  このリリースは、OS 10.8.3 に対応しています。</p>
 <a name="2013-01-28%20fink-0.34.5%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2013-01-28: </span><span class="news-headline">fink-0.34.5 リリース</span></a><?php gray_line(); ?>
  <p><code>fink-0.34.5</code> が、2013年1月28日にリリースされました。
  このリリースは、 Xcode 4.6 以降の <code>clang</code> バージョンを検出する問題に対処するなど、
  いくつかの改良があります。</p>
 <a name="2012-12-10%20%E3%81%99%E3%81%B9%E3%81%A6%E3%81%AE%20SourceForge%20%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E3%81%AE%E5%95%8F%E9%A1%8C"><span class="news-date">2012-12-10: </span><span class="news-headline">すべての SourceForge サービスの問題</span></a><?php gray_line(); ?>
  <p>Sourceforge はダウン中です。 今後のお知らせは、<a href="https://twitter.com/sfnet_ops">
  the SF.net Operations Twitter feed</a> と 
<a href="http://finkers.wordpress.com/2012/12/10/general-sourceforge-outage/">
  the Finkers blog</a> をご覧ください。</p>
  <p>
  ファイアーウォールの内側にいない人は、<code>fink selfupdate-rsync</code> は機能しているのでこれを使うといいでしょう。
  ファイアーウォールの内側にいる人は、短期的な対処はメンテナに直接特定パッケージの更新を尋ねることでしょう。
  </p>
 <p>
    メーリングリストとバグトラッカーもダウン中です。
    メンテナンスされていないパッケージ（のみ）の暫定的なバグレポートは、
    <a href="http://finkers.wordpress.com/2012/12/10/general-sourceforge-outage">
    the Finkers entry</a>に報告してください。
    メンテナンスされているパッケージは、メンテナに報告してください。 ‎</p>
  <p><b>追記: 2012-12-12:</b> Anonymous CVS は復活しました。</p>
 <a name="2012-11-30%20sourceforge%20CVS%20%E3%81%AE%E5%95%8F%E9%A1%8C"><span class="news-date">2012-11-30: </span><span class="news-headline">sourceforge CVS の問題</span></a><?php gray_line(); ?>
  <p>Sourceforge の anonymous CVS がダウン中です。
  いつ復旧されるかわかっておらず、また
  <a href="http://fink.cvs.sourceforge.net/viewvc/fink/">web interface</a>
  は更新されていません。</p>
  <p>
  ファイアーウォールの内側にいない人は、<code>fink selfupdate-rsync</code> は機能しているのでこれを使うといいでしょう。  
  ファイアーウォールの内側にいる人は、短期的な対処はメンテナに直接特定パッケージの更新を尋ねることでしょう。
  </p>
  <p><b>Addendum: 2012-12-07:</b> Anonymous CVS is working again.</p>
 <a name="2012-09-25%20fink-0.34.4%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2012-09-25: </span><span class="news-headline">fink-0.34.4 リリース</span></a><?php gray_line(); ?>
  <p><code>fink-0.34.4</code> が、2012年9月25日にリリースされました。
  このリリースは、<code>fink</code>がパッケージビルド時に使うディレクトリのパーミッションが適切であるか診断します。
  さらに、OSX 10.7.5 と 10.8.2 を認識します。</p>
 <a name="2012-07-25%20Mountain%20Lion%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2012-07-25: </span><span class="news-headline">Mountain Lion リリース</span></a><?php gray_line(); ?>
   <p>Mountain Lion が公開されました。
   OS のアップデートの前に、<code>fink-0.34.0</code> 以降に更新することが理想的です。
   さらに、 Xcode 4.4 （すくなくともコマンドラインツール）が必要です。
   Lion でもインストールできますが、Mountain Lion には別のバージョンのコマンドラインツールがあります。
   こちらの方をインストールすることが大事です。
   まず、</p>
  <p><code>fink list xcode</code></p>
  <p>
  として、Xcode 4.4 のコマンドラインツールがインストールされ、Fink が Xcode.app の位置を認識しているか確認してください。
  CLI がないか、あるいは Xcode4.4 のものでない場合、Xcode Preferences からインストールしてください。
  もし、<code>fink</code>が Xcode.app の位置を認識しないのであれば、</p>
  <p><code>sudo xcode-select -switch /path/to/Xcode.app</code></p>
  <p>として、システムツールが正しい場所を示すようにしてください。その後、</p>
  <p><code>sudo xcodebuild -license</code></p>
  <p>
  と実行して、Xcode ライセンスをシステム全体、とくに fink ユーザーに適用してください。</p>
 <p>OS をアップデートしたら、</p>
 <p><code>fink reinstall fink</code></p>
 <p>として 10.8 ディストリビューションにし、Lion からの Perl モジュールが動作するよう</p>
 <p><code>fink install perl5123-core</code></p>
 <p>としてください。</p>
 <p>もし、OS を先にアップデートし、Mountain Lion を認識しない古い<code>fink</code>
 を使っている場合、おそらく動作しません。
 この場合は、
 (1) 
  <a href="https://raw.github.com/fink/fink/master/perlmod/Fink/Services.pm">
  Services.pm</a>をダウンロード 
  (2) このファイルを /sw/lib/perl5/Fink にコピー。
  例えば、</p>
  <p><code>sudo mv /path/to/Services.pm /sw/lib/perl5/Fink</code></p><p>; 
  (必要に応じて <code>/sw</code> and <code>/path/to</code> を変更); 
  (3) 以下のコマンドを実行 </p><p><code>fink selfupdate</code></p>
  <p> これで <code>fink-0.34.0</code> をダンロードしてインストールします。; 
  (4) </p><p><code>fink reinstall fink</code></p>
  <p>これで、 <code>fink</code> が 10.8 ディストリビューションを使います。
  (5) <code>perl5123-core</code> をインストール。上述の通り。</p>
  <p><b>追記, 2012-07-26:</b> OSアップデートは、Fink が作成したユーザーを消去する（ただしグループはそのまま）ようです。
  上のステップに加えて、
  (1) </p><p><code>fink configure</code></p><p> としてビルドユーザーのバックアップをし、
  (2) </p><p><code>fink list -it passwd | cut -f2 | xargs fink reinstall</code></p><p> 
  として、さまざまな  <code>passwd*</code> パッケージとそのユーザーを再インストールします。</p>
  <a name="2012-07-16%20fink-0.34.0%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2012-07-16: </span><span class="news-headline">fink-0.34.0 リリース</span></a><?php gray_line(); ?>
   <p><code>fink-0.34.0</code> が、2012年7月16日にリリースされました。
   これは、Mountain Lion (10.8) 対応の初めてのリリースとなります。</p>
   <p>
   Moutain Lion が公開されるまで、
   バグレポートは<a href="mailto:fink-seed@lists.sourceforge.net">
   Fink Seed List</a>　にまで送ってください。
   これは、NDA違反を避けるためです。
   </p>
  <a name="2012-07-05%20fink-0.33.3%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2012-07-05: </span><span class="news-headline">fink-0.33.3 リリース</span></a><?php gray_line(); ?>
   <p><code>fink-0.33.3</code> が、2012年7月5日にリリースされました。
   このリリースは、何らかの <code>su</code> または <code>sudo</code> オプションが選択された際に、
   <code>fink</code> が <code>fink-bld</code> ユーザーとしてパッケージをビルドできないバグを修正します。
   さらに、診断のためパッケージはファイル全体の md5 を記録します。
   Xcode Command-Line Tools のみを使っているユーザーは、Xcode.app が見つからないというメッセージが減ります。
   </p>
  <a name="2012-06-11%20fink-0.33.0%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2012-06-11: </span><span class="news-headline">fink-0.33.0 リリース</span></a><?php gray_line(); ?>
   <p><code>fink-0.33.0</code> が、2012年6月6日にリリースされました。
   このリリースは、以下のような新機能があります。</p>
   <p>このバージョンの <code>fink</code> から、パッケージは一般ユーザーとしてビルドされることがデフォルトになります。
   ファイルシステム中の他の場所にファイルをインストールする危険がなくなります。
   (<code>fink-0.33.0</code> 以前は、メンテナにこの方法でテストすることに頼っていた。）
   このモードでビルドできないパッケージを見つけた場合は、いつものとおりフィードバックをください。
   みなさんのフィードバックによって問題をみつけて直すことができるのです。</p>
   <p>さらに、この Fink バージョンから、メンテナ向けにオプションを追加しました。
   さらに、この Fink バージョンではメンテナ向けのオプションを追加しました。
   <b>/sw/Library/Python</b> が、内蔵 Python 用のモジュールをインストールする共通場所として追加されました。
   <code>xcodebuild</code> にBuildDepend するパッケージのために <code>xcode.app</code> のバーチャルパッケージを追加しました。
   これのバージョンが Xcode.app のバージョンです。
   <code>xcode</code>バーチャルパッケージは、コマンドラインツールに基づき、バージョンもこれらのバージョンです。
   Xcode 4.3 以前は、<code>xcode</code> と <code>xcode.app</code> は同じです。
   </p>
  <a name="2012-04-14%20fink-0.32.6%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2012-04-14: </span><span class="news-headline">fink-0.32.6 リリース</span></a><?php gray_line(); ?>
   <p>
    <code>fink-0.32.6</code> が、2012年4月14日にリリースされました。
    このリリースでは、<code>BuildAsNobody: false</code> というパッケージ記述フィールドが追加されました。
    この場合、<code>fink --build-as-nobody</code> でパッケージがビルドできないことを示します。
    現在のところ、これ自体は何も影響がありませんが、<code>fink-0.33.0</code> 以降では
    デフォルトでは権限のないユーザーでビルドするようになり、このフィールドがある場合は root でビルドします。
   </p>
  <a name="2012-04-09%20fink-0.32.5.5%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2012-04-09: </span><span class="news-headline">fink-0.32.5.5 リリース</span></a><?php gray_line(); ?>
   <p>
    <code>fink-0.32.5.5</code> が、2012年4月9日にリリースされました。
    <b>10.5/PowerPC</b> で bootstrap する際の問題に対処するバグ修正です。
   </p>
  <a name="2012-04-08%20fink-0.32.5.4%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2012-04-08: </span><span class="news-headline">fink-0.32.5.4 リリース</span></a><?php gray_line(); ?>
   <p>
    <code>fink-0.32.5.4</code> が、2012年4月8日にリリースされました。
    これにより、Xcode Command Line Tools に対して bootstrap ができるようになります。
    パッケージによっては、ビルドに完全な Xcode を必要とする場合もあることに注意してください。
   </p>
  <a name="2012-03-27%20fink-0.32.4.1%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2012-03-27: </span><span class="news-headline">fink-0.32.4.1 リリース</span></a><?php gray_line(); ?>
      <p><code>fink-0.32.4.1</code> が、2012年3月27日にリリースされました。
      これにより、 XCode 4.3.x を任意の場所にインストールすることができます。</p>
      <p>XCode 4.3.x をインストール後、
      (1) XCode-&gt;初期設定-&gt;ダウンロードからコンポーネントを選択してコマンドラインツールをインストールするか、
      connect.apple.com で専用インストーラでインストールしてください。</p>
      <p>(2)<code>sudo xcode-select -switch /path/to/Xcode.app/Contents/Developer</code>
      (<code>/path/to</code> は実際の XCode へのパスに変更)
      を実行し、全て正しく示されているか確認します。</p>
      <p><code>fink-0.32.4.1</code> はまた、<code>fink fetch</code> でチェックサム確認をします。</p>
    <a name="2012-02-16%20fink-0.32.3%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2012-02-16: </span><span class="news-headline">fink-0.32.3 リリース</span></a><?php gray_line(); ?>
      <p><code>fink-0.32.3</code> was released on 16 February, 2012.  This
      release recognizes changes that were made for Xcode 4.3.</p>
      <p>After installing Xcode 4.3 in <code>/Applications</code> <b>(and only there)</b>
      , users should:  (1) Select the Components pane from Xcode-&gt;Preferences-&gt;Downloads and 
      install the Command Line Tools, or install them via the separate installer from 
      connect.apple.com, and (2) run</p><p><code>sudo xcode-select -switch /Applications/Xcode.app/Contents/Developer</code></p>
      <p>to make sure that everything is pointed in the right place.</p>
    <a name="2012-02-03%20fink-0.32.2%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2012-02-03: </span><span class="news-headline">fink-0.32.2 リリース</span></a><?php gray_line(); ?>
      <p><code>fink-0.32.2</code> was released on 3 February, 2012.  This
      release contains a fix for a bug in the handling of multiple source
      archives in a package, and recognizes OS 10.7.3.</p>
    <a name="2012-01-26%20fink-0.32.1%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2012-01-26: </span><span class="news-headline">fink-0.32.1 リリース</span></a><?php gray_line(); ?>
      <p><code>fink-0.32.1</code> was released on 26 January, 2012.  This
      release introduces a number of new features.</p>
      <p>Those that impact package maintainers include: <code>RuntimeDepends</code>,
      which are dependencies that are only required when a package is installed,
      improvements to the package validator, updated manpages, and direct support
      for <code>.xz</code> archives.</p>
      <p>Those that impact users include improvements in the bootstrap script and
      additional helpful suggestions in the post-error output.
      </p>
    <a name="2012-01-03%20fink-0.31.6%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2012-01-03: </span><span class="news-headline">fink-0.31.6 リリース</span></a><?php gray_line(); ?>
      <p><code>fink-0.31.6</code> was released on 3 January, 2012.  This
      is a bugfix release to address issues with the use of HTTP proxies
      under cvs selfupdates.</p>
    <a name="2011-11-22%20fink-0.31.5%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2011-11-22: </span><span class="news-headline">fink-0.31.5 リリース</span></a><?php gray_line(); ?>
      <p><code>fink-0.31.5</code> 
      は、2011年11月22日、10.4/stable と 10.7/stable ツリーにリリースされました。
      これは、OS X 10.6 と Xcode 4.2 上での bootstrap とビルドに対処するバグ修正リリースです。
      </p>
    <a name="2011-10-28%20fink-0.31.4%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2011-10-28: </span><span class="news-headline">fink-0.31.4 リリース</span></a><?php gray_line(); ?>
      <p>2011年10月28日、<code>fink-0.31.4</code> 
      が10.4/stable と 10.7/stable ツリーにリリースされました。
      このリリースの主な機能は、OS X 10.6 でデフォルトコンパイラが
      XCode 3.2.x と 4.2 とで同じになることです。
      また、 bootstrap 時にインストールされる必須パッケージの一部が更新されました。</p>
    <a name="2011-10-12%20fink-0.31.3%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2011-10-12: </span><span class="news-headline">fink-0.31.3 リリース</span></a><?php gray_line(); ?>
      <p>2011年10月12日、<code>fink-0.31.4</code> 
      が10.4/stable と 10.7/stable ツリーにリリースされました。
      これは、OS 10.7.2 をサポートする OS X バージョンとして認識し、
      App Store の Growl 1.3 を認識します。
      </p>
    <a name="2011-09-30%20Phasing%20out%20the%20unstable%20tree.%20unstable%20%E3%83%84%E3%83%AA%E3%83%BC%E3%82%92%E3%81%AA%E3%81%8F%E3%81%99"><span class="news-date">2011-09-30: </span><span class="news-headline">Phasing out the unstable tree. unstable ツリーをなくす</span></a><?php gray_line(); ?>
      <p>メンテナンスを容易にし、ユーザーにとってもよくするため、
      unstable ツリーを削除し始めています。
      ユーザーにとっては、<b>fink.conf</b> の <code>Trees:</code> 行から
      <code>stable</code> を消していない限り、とくに違いはありません。
      また、そのようにすることは推奨されていません。</p>
    <a name="2011-09-26%20fink-0.31.2%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2011-09-26: </span><span class="news-headline">fink-0.31.2 リリース</span></a><?php gray_line(); ?>
      <p><code>fink-0.31.2</code> が、10.4/unstable と 10.7/stable に、
      2011年11月26日にリリースされました。
      このバージョンより、<code>MaxBuildJobs</code> を <code>fink configure</code>
      で設定することで、ビルド時の最大スレッド数の既定値を設定します。
      また、メンテナは、<code>PatchFile</code> を使用する際に　<code>fink</code> 
      バージョンを指定する必要がなくなり、Pel の問題も解決しています。</p>
      <p>10.4/stable にもすぐに追加される予定です。</p>
    <a name="2011-09-11%20fink-0.31.1%20released"><span class="news-date">2011-09-11: </span><span class="news-headline">fink-0.31.1 released</span></a><?php gray_line(); ?>
      <p><code>fink-0.31.1</code> が、10.4/unstable と 10.7/stable に、
      2011年11月11日にリリースされました。
      このバージョンでは、OS 10.6 を実行している 32 bit 機で、bootstrap ができない問題を修正しました。
      さらに、エラーメッセージ中の Xcode バージョンの報告に関して、
      以前の <code>fink</code> よりもしっかりした仕組みを提供しています。
      また、OS 10.7.1 をサポートする OS と認識します。</p>
      <p>10.4/stable にもすぐに追加される予定です。</p>
      <p><b>更新 2011-09-26:</b>   10.4/stable に追加されました。</p>
   <a name="2011-07-20%20Fink%20%E3%81%A8%20Lion--%E6%9B%B4%E6%96%B0"><span class="news-date">2011-07-20: </span><span class="news-headline">Fink と Lion--更新</span></a><?php gray_line(); ?>
      <p>Apple は、OS X 10.7 Lion が７月にリリースされました。
Lion がリリースされた後のことについてお知らせします。</p>
<p>まず、  <code>fink</code> コマンド自体は、Lion にアップグレードされたシステムでは動作しません。
しかし、<code>dpkg</code> コマンドで、10.6 でインストールされた Fink パッケージを解凍し、10.7 で再インストールすることは可能です。
Fink for 10.7 をインストール後、
</p>
<p><code>dpkg --get-selections | cut -f1 &gt; fink_packages.txt</code></p>
<p>でパッケージを解凍し、</p>
<p><code>cat fink_packages.txt | xargs fink install</code></p>
<p>とします。</p>
<p>Lion にアップグレード後に Fink をアップグレードするには、
<code>fink-0.31.0</code>　以降を使って
fink を bootstrap し直してください。</p>
<p>次に、目に見えない多くの変更により、10.6 に比べて 10.7 で動作するのは当面非常に少なくなります。
よって、10.6 でインストールされた Fink パッケージも、
10.7 ではインストールできないこともあります。
現在、10.7 でインストール可能なパッケージのデータベースを作成中です。
このデータベースには随時パッケージが追加されます。</p>
<p>10.7 は、システム動作に関して大きな変更が導入されています。
これにとって短期的には Fink の機能が制限されますが、
長期的には Fink がよりよく動作することになります。</p>
    <a name="2011-07-16%20Fink%20%E3%81%A8%20Lion"><span class="news-date">2011-07-16: </span><span class="news-headline">Fink と Lion</span></a><?php gray_line(); ?>
      <p>Apple は、OS X 10.7 Lion を７月にリリースすると発表しました。
Lion がリリースされた後のことについてお知らせします。</p>
<p>まず、  <code>fink</code> コマンド自体は、Lion にアップグレードされたシステムでは動作しません。
しかし、<code>dpkg</code> コマンドで、10.6 でインストールされた Fink パッケージを解凍し、10.7 で再インストールすることは可能です。
Fink for 10.7 をインストール後、
</p>
<p><code>dpkg --get-selections | cut -f1 &gt; fink_packages.txt</code></p>
<p>でパッケージを解凍し、</p>
<p><code>cat fink_packages.txt | xargs fink install</code></p>
<p>とします。</p>
<p>(Lion にアップグレード後に fink をアップグレードすると、
Lion リリース直後にリリースされた新しい fink を用いて、
fink を bootstrap し直さなければ行けません。
今後の発表をお待ちください。)</p>
<p>次に、目に見えない多くの変更により、10.6 に比べて 10.7 で動作するのは当面非常に少なくなります。
よって、10.6 でインストールされた Fink パッケージも、
10.7 ではインストールできないこともあります。
現在、10.7 でインストール可能なパッケージのデータベースを作成中です。
しかし、このデータベースは Lion リリースの前にはできません。</p>
<p>10.7 は、システム動作に関して大きな変更が導入されています。
これにとって短期的には Fink の機能が制限されますが、
長期的には Fink がよりよく動作することになります。</p>
    <a name="2011-07-11%20fink-0.30.2%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2011-07-11: </span><span class="news-headline">fink-0.30.2 リリース</span></a><?php gray_line(); ?>
      <p>2011年7月11日、<code>fink-0.30.2</code> が unstable ツリーにリリースされました。
      これは、おそらく OS 10.4 をサポートする最後のバージョンとなります。</p>
      <p>すぐに stable にもリリースされる予定です。</p>
      <p><b>Update, 2011-07-15:</b> stable にもリリースされました。</p>
    <a name="2011-06-28%20fink-0.30.1%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2011-06-28: </span><span class="news-headline">fink-0.30.1 リリース</span></a><?php gray_line(); ?>
      <p>2011年6月28日、<code>fink-0.30.1</code> が unstable ツリーにリリースされました。
      これは、OS 10.6.8 を認識するためのマイナーアップデートです。</p>
      <p>すぐに stable にもリリースされる予定です。</p>
      <p><b>Update, 2011-07-02:</b> stable にもリリースされました。</p>
    <a name="2011-04-30%20fink-0.30.0%20released."><span class="news-date">2011-04-30: </span><span class="news-headline">fink-0.30.0 released.</span></a><?php gray_line(); ?>
      <p><code>fink-0.30.0</code> が unstable ツリーにリリースされました。</p>
      <p>The 0.30.x シリーズが、OS X 10.4 をサポートする最後のバージョンとなる予定です。</p>
    <a name="2011-03-24%20fink-0.29.21%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2011-03-24: </span><span class="news-headline">fink-0.29.21 リリース</span></a><?php gray_line(); ?>
      <p><code>fink</code> の 0.29.21 が unstable ツリーにリリースされました。
      この <code>fink</code>  は、OS 10.6.8 を認識し、
      <code>fink</code> が index できない問題を修正しています。</p>
      <p>すぐに stable にもリリースされる予定です。</p>
     <p><b>Update, 2011-03-29:</b> stable にもリリースされました。</p>
     <a name="2011-03-09%20fink-0.29.20%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2011-03-09: </span><span class="news-headline">fink-0.29.20 リリース</span></a><?php gray_line(); ?>
      <p><code>fink</code> の 0.29.20 が unstable ツリーにリリースされました。
        このバージョンの <code>fink</code> は、Leopard の最新バージョンの Xquartz に対し、 X11 認識の問題を修正します。  
      </p>
      <p>他のアップデートがない限り、すぐに stable にもリリースされる予定です。</p>
      <p><b>Update, 2011-03-24:</b> stable にもリリースされました。</p>
    <a name="2011-02-10%20CVS%20%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B9%E3%81%AE%E5%9B%9E%E5%BE%A9"><span class="news-date">2011-02-10: </span><span class="news-headline">CVS アクセスの回復</span></a><?php gray_line(); ?>
      <p>checkout と commit ができるようになりました。ご迷惑をおかけいたしました。</p>
    <a name="2011-01-26%20CVS%20%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B9%E4%B8%8D%E8%83%BD"><span class="news-date">2011-01-26: </span><span class="news-headline">CVS アクセス不能</span></a><?php gray_line(); ?>
      <p>
      攻撃を受けたため、Sourceforge から CVS でファイルをダウンロードできません。
      ステータスを見るには、
      <a href="http://sourceforge.net/apps/wordpress/sourceforge/"> the Project
      sourceforge page</a> をご覧ください。</p>
    <a name="2011-01-16%20fink-0.29.19%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2011-01-16: </span><span class="news-headline">fink-0.29.19 リリース</span></a><?php gray_line(); ?>
      <p><code>fink</code>  0.29.19 が unstable ツリーにリリースされました。
      このバージョンの <code>fink</code> は、デバッグ用に 'fink --version' がより多くの情報を表示します。
      また、OS 10.6.6 を認識します (0.29.17 も 10.6.6 で動作しますが)。
      </p>
      <p>このバージョンは、unstable ユーザからの動作不良の報告がない限り、
      stable ツリーに統合される予定です。
      </p>
      <p><b>Update, 2011-01-22:</b> <code>fink-0.29.19</code> は stable にリリースされました。</p>
    <a name="2011-01-05%20rysnc%20%E3%83%9F%E3%83%A9%E3%83%BC%E3%81%AE%E4%B8%80%E6%99%82%E7%9A%84%E5%81%9C%E6%AD%A2"><span class="news-date">2011-01-05: </span><span class="news-headline">rysnc ミラーの一時的停止</span></a><?php gray_line(); ?>
      <p>
      rsync ミラーの一部に一時的な問題が発生しています。
      最近更新をしていないようであれば、
      以下のようにして rsync ミラーをかえることができます。
      <code>/sw/etc/fink.conf</code> 
      を管理者権限で開き、
      <code>Mirror-rsync</code> で始まる行を、
        <code>Mirror-rsync: rsync://fink.gecko.ig42.org/finkinfo/</code></p>
        <p>または</p><p>
        <code>Mirror-rsync: rsync://hnd.jp.asi.finkmirrors.net/finkinfo/</code></p>
        <p>または</p><p>
        <code>Mirror-rsync: rsync://ber.de.eu.finkmirrors.net/finkinfo</code></p>
         <p>または</p><p>
        <code>Mirror-rsync: rsync://ams.nl.eu.finkmirrors.net/finkinfo/</code></p>       
      <p>として保存します。
      これは、<code>fink configure</code>からも設定することができます。
      そうするには、大陸を Asia (option 2)、国を　Japan (10) 、として
      rsync://distfiles.hnd.jp.asi.finkmirrors.net/finkinfo/ (2) を Rsync Selfupdate mirror　にします。
      あるいは、 Europe (4)、 Germany (13)、 rsync://ber.de.eu.finkmirrors.net/finkinfo/ (3) とします。
      あるいは、 Netherlands (27) rsync://distfiles.ams.nl.eu.finkmirrors.net/finkinfo/ (2) とします。</p>
      <p><b>Update, 2011-01-07</b>  ミラーは更新できるようになりました。</p>
    <a name="2010-12-31%2010%E5%91%A8%E5%B9%B4%E8%A8%98%E5%BF%B5%E3%80%81%E3%81%8A%E3%82%81%E3%81%A7%E3%81%A8%E3%81%86%20Fink!"><span class="news-date">2010-12-31: </span><span class="news-headline">10周年記念、おめでとう Fink!</span></a><?php gray_line(); ?>
      <p>Fink プロジェクトは、2000年12月の暮れに、Christoph Pfisterer によって、
      Mac OS X のパブリックベータ版を使って始まった。
      1年も経たないうちに、OS X の 10.0 と 10.1 がリリースされ、Fink が使われるようになった。
      創設者の chrisp は 2001年11月にプロジェクトから離れ、コミュニティが跡を継いだ。</p>
      <p>Fink コミュニティは、パッケージメンテナとユーザ、それに全体システムを良い形に保とうとする小さなコアチームから構成され、Fink のハートです。
      Fink を10年間にわたり活発にしてきたこのコミュニティの取組みは、まさに驚愕です!
      皆さんも一緒に、Fink が長く続きますように。</p>
      <p>どれくらい長く続くのだろうか? Buzz Lightyear の言葉を借りるならば、
      <code>無限の彼方まで!</code></p>
     <a name="2010-11-09%20fink-0.29.16%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9%E3%80%82"><span class="news-date">2010-11-09: </span><span class="news-headline">fink-0.29.16 リリース。</span></a><?php gray_line(); ?>
      <p><code>fink-0.29.16</code> が unstable ツリーにリリースされました。
      このバージョンの <code>fink</code> は、bootstrap に使われるパッケージを更新します。</p>
      <p>間もなく、この <code>fink</code> は stable ツリーにも反映されます。</p>
     <a name="2010-11-02%20Libtool%20%E3%82%A2%E3%83%BC%E3%82%AB%E3%82%A4%E3%83%96%E3%83%95%E3%82%A1%E3%82%A4%E3%83%AB%E3%81%AE%E3%82%AF%E3%83%AA%E3%82%A2%E3%81%8C%20stable%20%E3%81%AB%E3%80%82"><span class="news-date">2010-11-02: </span><span class="news-headline">Libtool アーカイブファイルのクリアが stable に。</span></a><?php gray_line(); ?>
      <p><code>dpkg-1.10.21-1229</code> が stable に追加されました。
      このリビジョンは、これまで10.5 から 10.6 にアップグレードする際に問題を起こしてきた、
      libtool アーカイブ (<code>.la</code>) を自動的に削除しいます。</p>  
    <a name="2010-11-02%20KDE3%20%E3%81%A8%20GNOME%20%E3%81%8C%20stable%E3%80%82"><span class="news-date">2010-11-02: </span><span class="news-headline">KDE3 と GNOME が stable。</span></a><?php gray_line(); ?>
      <p><code>KDE-3.5.10</code> andと <code>GNOME-2.28</code>
      が、他の依存パッケージとともに stable ツリーに追加されました。
      </p>
    <a name="2010-10-23%20fink-0.29.15%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9%E3%80%82"><span class="news-date">2010-10-23: </span><span class="news-headline">fink-0.29.15 リリース。</span></a><?php gray_line(); ?>
      <p><code>fink-0.29.15</code>
      が unstable ツリーにリリースされました。
      このバージョンの <code>fink</code> は、 <code>system-java-dev</code> 
      というバーチャルパッケージの作成時のエラー修正を含んでいます。
      </p>
      <p>全ての <code>system-java-dev</code> パッケージが 10.5 と 10.6 で表示されるには、
      この修正とあわせて、<a href="http://connect.apple.com/">The Apple Developer Connection site</a>
      適切なバージョンの Java Developer Package をダウンロードする必要もあります。
      </p>
      <p>このバージョンの <code>fink</code> は、すぐに stable ツリーにも追加される予定です。</p>
      <p><b>Update, 2010-11-01:</b>  <code>fink-0.29.15</code> が stable ツリーに追加されました。</p>
    <a name="2010-10-20%20Java%20%E6%9B%B4%E6%96%B0%E3%81%8C%20system-java-dev%20virtual%20package%20%E7%94%9F%E6%88%90%E3%82%92%E5%A3%8A%E3%81%99%E3%80%82"><span class="news-date">2010-10-20: </span><span class="news-headline">Java 更新が system-java-dev virtual package 生成を壊す。</span></a><?php gray_line(); ?>
      <p>
      最近の 10.5 と 10.6 の Java アップデート
       (APPLE-SA-2010-10-20-1 Java for Mac OS X 10.6 Update 3
      および APPLE-SA-2010-10-20-2 Java for Mac OS X 10.5 Update 8 )
      は、Java ファイル設定を変えてしまい、
      <code>fink</code> が 10.5 上の <code>system-java16-dev</code> あるいは
      10.6 上の <code>system-java-dev</code> が生成されなくなりました。</p>
      <p>Fink ユーザは、この問題を解決する新しいバージョンの <code>fink</code>
      がリリースされるまで待って頂くようお願い申し上げます。
      この問題は、現在インストールされているパッケージには影響は<b>ありません</b>が、
      java に依存するパッケージのビルドができなくなります。</p>
      <p>適切な時バージョンの Java Developer Package を 
      <a href="http://connect.apple.com/">The Apple Developer Connection site</a>
      からダウンロードすることもできます。</p>
      <p><b>Update, 2010-10-23:</b> この問題は <code>fink-0.29.15</code> で対処されました。</p>
    <a name="2010-10-19%20fink-0.29.14%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9%E3%80%82"><span class="news-date">2010-10-19: </span><span class="news-headline">fink-0.29.14 リリース。</span></a><?php gray_line(); ?>
      <p><code>fink-0.29.14</code> 
      が unstable ツリーにリリースされました。
      このバージョンの <code>fink</code> は、 
      高速ダウンロード <code>aria2</code> (Fink からインストール可能) を使えるよう、
       <code>DownloadMethod</code> に <code>aria2</code> が加わり、
       また、よくある "node exists" というエラーの修正など、
       多くの変更点があります。
      </p>
      <p>It is planned to add this version to the stable tree shortly.</p>
      <p><b>Addendum, 2010-10-19:</b>  because of the Java update (2010-10-20),
      <code>fink-0.29.15</code> is now slated to be the version next to go to stable.</p>
    <a name="2009-10-30%20%E3%82%B5%E3%83%BC%E3%83%90%E3%83%BC%E5%BE%A9%E5%B8%B0%E3%80%82"><span class="news-date">2009-10-30: </span><span class="news-headline">サーバー復帰。</span></a><?php gray_line(); ?>
      <p>
      ユーザーサービスが復帰しました。
      10月28日に、ウェブサイト及び一部のミラー (rsync, source files, binary distribution) 
      が復帰し、
      10月30日にはすべての rsync ミラーが復帰しました。
      重ねますが、ご迷惑と、
      これからのご支持をお願い申し上げます。
      </p>
    <a name="2009-10-24%20Server%20%E5%95%8F%E9%A1%8C"><span class="news-date">2009-10-24: </span><span class="news-headline">Server 問題</span></a><?php gray_line(); ?>
	  <p>
	  以前よりサーバーに問題があり、結果として Fink のウェブサイトとバイナリディストリビューションがダウンしております。
	  rsync サーバも停滞しています。
	  現在復旧作業中ですが、現在のところ以下のように対処してください。
	  </p>
	  <ul>
		<li>(Web site) ウェブサイトは、<a href="http://fink.thetis.ig42.org">http://fink.thetis.ig42.org</a>
		の仮サーバーをご覧ください。</li>
		<li>(selfupdate) パッケージを更新する selfupdate は、CVS をお使いください。
		rsync より時間がかかりますが、CVS は SourceForge.net にホストされているため、正常に作動しています。
		後ほど、rsync に戻すことができます。
		CVS に変更するには、<code>fink selfupdate-cvs</code>　とします。</li>
		<li>(source files) <code>/sw/etc/fink.conf</code> を開き、<code>Mirror-apt:
		http://bindist.finkmirrors.net/bindist</code> を <code>Mirror-apt:
		http://fink-bindist.gecko.ig42.org</code> としてください。
		</li>
        <li>(bindist) <code>/sw/etc/fink.conf</code>を開き、<code>Mirror-apt:</code> で始まる行を <code>Mirror-apt:
        http://fink-bindist.gecko.ig42.org</code> としてください。</li>

        <li>(bindist) <code>/sw/etc/apt/sources.list</code> を開き、
        <code>http://bindist.finkmirrors.net/bindist</code> という行を
        <code>http://fink-bindist.gecko.ig42.org</code> としてください。</li>

        <li>(bindist) <code>fink scanpackages</code> を実行してください。</li>
	  </ul>
      <p>ご迷惑をおかけしていることをお詫び申し上げます。</p>
	<a name="2009-08-28%20Fink%20on%2010.6."><span class="news-date">2009-08-28: </span><span class="news-headline">Fink on 10.6.</span></a><?php gray_line(); ?>
      <p>
Fink は、雪豹 (OS X v. 10.6) への準備を整えました。
32-bit版と64-bit版がありますので、どちらかを選択してご利用ください。
現在のところ、32-bit版の方が多くのパッケージがあります。
しかし、64-bit版は OS X および　Fink の将来の方向性を示しています。
各ユーザーがどちらかを選択するか判断してください。
32-bit版から64-bit版への「アップグレード」は<b>できません</b>。
</p><p>
現在、Snow Leopard に Fink をインストールするには、二つの方法があります。
バイナリインストーラはないので、
<b>まず Snow Leopard ディスクからオプションインストールで XCode をインストールしてください。</b>
64-bit版を使われる方、または 10.4 以前から直接アップグレードされる方は、ディストリビューション 
tarball (0.29.9 以降のバージョン) を<a href="http://sourceforge.net/projects/fink/files/fink/0.29.9/fink-0.29.9.tar.gz/download">sourceforge.net</a> からダウンロードし、fink をブートストラップしてください。
この方法は<a href="<?php print $root; ?>download/srcdist.php">こちら</a>に説明されています。
また、下記の方法で 10.5 から 32-bit版に直接アップグレードすることもできます。
(注意: リリース版ではなく開発版の fink をインストールした場合、問題が発生することがあります。
この場合、リリース版にダウングレードし、バージョン番号の高い .deb ファイルを削除してください。)
</p><p>
アップグレードするには、以下の4ステップをしてください。
<b>Step 1:</b>
<code>/sw/etc/fink.conf</code> を開き、 <code>NoAutoIndex: true</code>　という一行を追加します。
(編集するには、パーミッションを得るため <code>sudo</code> する必要があるかもしれません。)
<b>Step 2:</b> 
10.6上にあることを伝えるため、コマンド
<code>fink reinstall fink</code>
を実行します。
(もし package database corruption といったメッセージが出た場合、
<code>fink index -f</code> としてから、再び上のコマンドを実行してください。)
<b>Step 3:</b> 
<code>fink update fink</code> を実行して、10.6用の最新 fink を入手します。 
<b>Step 4:</b>
<code>fink install perl588-core</code> と実行し、OS X のアップグレード時に 
Apple が変更した perl を置き換えます。
fink パッケージが依存している可能性があるためです。
</p><p>
アップグレードした後、<code>fink configure</code>
としてきれいにすることができます。
</p><p>
fink の stable パッケージは、ほぼすべて 10.6 上でコンパイルすることが可能です。
しかし、10.5 パッケージのほんのわずかしか 10.6 で使用することができません。
近い将来、fink のパッケージデータベースが更新され、
10.6用パッケージの情報が追加されます。
あなたの使用したいパッケージがあるかどうか、パッケージデータベースをご覧ください。
</p>
<a name="2009-07-25%20Fink%20Core%20Group%20changes."><span class="news-date">2009-07-25: </span><span class="news-headline">Fink Core Group changes.</span></a><?php gray_line(); ?>
      <p>
The Fink Core Group announces two new members: Alexander Hansen (<b>akh</b>)
and Augusto Devegili (<b>monipol</b>), both of whom have been very active
in fink.  Please join us in welcoming the new members!
</p><p>
The Group also announces that Christian Schaffner has stepped down,
returning to "ordinary member" status.  We thank Christian for his help
on the team over the past several years.
</p><p>
Members of the Fink project are working hard to provide user support,
to keep Fink up to date, and to prepare for the upcoming Snow Leopard
release.  More volunteers are always needed, so please consider
getting involved at some level!
</p>
<a name="2008-07-23%20End%20of%2010.3%20support."><span class="news-date">2008-07-23: </span><span class="news-headline">End of 10.3 support.</span></a><?php gray_line(); ?>
      <p>
The Fink project is no longer able to offer support for users of Fink
on Mac OS X 10.3. In reality there has been very little support for
some time, so this announcement simply formalizes that fact.
</p><p>
This means that there will not be any further updates, not even
security updates, for Mac OS X 10.3 users. Their existing
installations will continue to work, but the software that is
installed will not be updated.
</p><p>
We believe that the majority of our users are using Mac OS X 10.4 or
10.5 and hope that this does not inconvenience too many people. 
</p>
<a name="2008-07-17%20Mass%20package%20migration."><span class="news-date">2008-07-17: </span><span class="news-headline">Mass package migration.</span></a><?php gray_line(); ?>
      <p>
The massive GNOME update which has been in process for
many months was merged into fink's unstable tree.  This is well
tested, and updates by users appear to be going fairly smoothly.
</p><p>
We are now merging the gnome update into the stable tree.  Because
we have been unable to test the dependencies of these new packages in
the stable tree in advance, users can expect the "stable" tree to be
"not so stable" during the next few weeks, while the bugs get worked
out.
</p><p>
If you are eager to start using this massive gnome update immediately,
we suggest that you switch to the unstable tree.  If not, we suggest
that you hold off running "fink selfupdate" for a while (perhaps a
week or two) until things have again stabilized.</p>
<a name="2008-06-26%20New%20Fink%20release."><span class="news-date">2008-06-26: </span><span class="news-headline">New Fink release.</span></a><?php gray_line(); ?>
      <p>
A new (binary) Fink release for OS X 10.5 (Leopard) is 
<a href="<?php print $root; ?>download/index.php">available</a>
 today: version 0.9.0, which can be installed on either Intel or PowerPC
hardware.
The release includes source files, binary packages, and  Fink
installers for both kinds of hardware.
</p>
      <p>
Users who have already installed Fink on Leopard from source, who now wish
to switch to the binary distribution, may do so as follows.  First,
run <code>fink selfupdate</code> to update to the latest version of the
fink package manager.  Next, run <code>fink configure</code>, and be sure
to <b>change</b> your choice about using the binary distribution from No
to yes.  Finally, run <code>fink scanpackages</code> to activate the binary
distribution.
</p>
<p><b>Update, 2008-07-11:</b> If you use the binary installer, you
should run <code>fink selfupdate</code> after installation.</p>
<a name="2008-02-03%20Mirror,%20mirror%20on%20the%20wall,%20will%20someone%20sponsor%20Fink%20at%20all?"><span class="news-date">2008-02-03: </span><span class="news-headline">Mirror, mirror on the wall, will someone sponsor Fink at all?</span></a><?php gray_line(); ?>
<p>大規模なオープンソースプロジェクトは、おおむね配布の仕方に問題をかかえており、Fink も例外ではありません。
我々は、お好きなアプリケーションをビルドするために必要なファイルを可能な限り速く提供したいと思っています。
このためには、ミラーサイトが近くにあることが最初のステップだと考えます。</p>

<p>我々は、大学や企業のスポンサーによるミラーを使い、信頼できる配布インフラを構築しようとしています。
近年、ミラーの数が大幅に減少してしまい、品質を向上させるために<b>助け</b>を必要としています。</p>

<p>学生ですか？教授ですか？データセンターを運営していますか？空き時間のある開発者ですか？このいずれでなくても、手伝って頂けます。
ミラーを運営したり、スポンサーになるための情報は
<a href="http://wiki.finkproject.org/index.php/Fink:FinkMirrors">FinkWiki</a>
にあります。
質問がある場合は <a href="mailto:fink-core-private@lists.sourceforge.net">contact us</a> までメールをください。
現在、ミラーを世界中で探していますが、特に以下の国で募集しています:</p>
<ul><li>アメリカ合衆国</li><li>日本</li><li>ドイツ</li><li>フランス</li><li>イギリス</li><li>カナダ</li><li>イタリア</li><li>スペイン</li><li>スイス</li><li>オーストラリア</li></ul>
<p>また、これまでに Fink にミラーを提供して頂いている方々に感謝致します。
彼らの継続サポートなしに、Fink は現在のレベルのサービスを提供できなかったでしょう。</p>
<a name="2008-01-12%20Fink%20website%20down"><span class="news-date">2008-01-12: </span><span class="news-headline">Fink website down</span></a><?php gray_line(); ?>
<p>The fink website is not functioning correctly at present.  (You may
have noticed that many of the links on this page do not function correctly.)  The
fink team is working to resolve the problem as quickly as possible.</p>
<p><b>Update, 2008-01-13:</b> The website is back to normal.</p>
<a name="2007-12-10%20Leopard,%20X11,%20and%20Fink"><span class="news-date">2007-12-10: </span><span class="news-headline">Leopard, X11, and Fink</span></a><?php gray_line(); ?>
    <p>
    Leopard X11 を更新したい方は、
    <a href="http://xquartz.macosforge.org/downloads/Xquartz-1.3.0-apple-fink.bz2">Fink-friendly update to Xquartz</a>
    をお使い下さい。
    既に macosxforge.org の X11-2.1.0.1.pkg を適用された方は、<b>必ず</b> Fink-対応の Xquartz をお使い下さい。
      (注記: X11-2.1.1.pkg リリースは現在保留中ですが、これは Xquatz のパッチが不要になりです。
      X11 2.1.1 以降を使う場合は Xquartz パッチを適用する必要は<b>ありません</b>。)</p>
    <p><b>2007-12-11追記:</b> The X11 2.1.1 リリースは、 <a href="http://trac.macosforge.org/projects/xquartz/wiki/Releases">Xquartz リリースページにあります</a>.  
    X11-2.1.0.1.pkg にパッチを当てて利用されている方、 パッチ適用後の　macosxforge.org の Xquartz-1.3.0-apple-fink
    ファイルを使われている方は、<b>2.1.1 以降にアップグレードして</b>から Fink をお使い下さい。
    このリリースは、 fink 専用の Xquartz も含めたこれまでの全てのリリースの後任リリースです。</p>
  <a name="2007-11-18%20PDB%20Website%20Down"><span class="news-date">2007-11-18: </span><span class="news-headline">PDB Website Down</span></a><?php gray_line(); ?>
    <p>
    パッケージデータベースのウェブが現在停止しており、ご不便をかけております。
    できる限り早く解決できるよう復旧に向けて作業中です。
    ハードウェアとソフトウェアのアップグレードが完了するまでお待ち下さい。
    </p>
<p><b>2007年12月10日追記:</b> パッケージデータベースは、より強力になって帰ってきました。</p>
  <a name="2007-10-26%20%E5%BD%93%E9%9D%A2%E3%81%AE%20Leopard%20%E3%82%B5%E3%83%9D%E3%83%BC%E3%83%88"><span class="news-date">2007-10-26: </span><span class="news-headline">当面の Leopard サポート</span></a><?php gray_line(); ?>
    <p>The Fink Project は Mac OS X Leopard (10.5) のサポートを開始します。</p>
<p>10.5 を利用されている方は、バイナリディストリビューションができるまでは、bootstrap で行う必要があります。
fink-0.27.7 を<a href="http://downloads.sourceforge.net/fink/fink-0.27.7.tar.gz">ここから</a>ダウンロードしてください。</p>
<p>10.4から10.5への更新は、 <code>fink selfupdate</code> を実行することで <code>fink-0.27.7</code> に更新されます。
10.5 でこれを行う場合は、 XCode 3.0 がインストールされていることを確認してください。
10.5 がインストールされましたら、<code>fink reinstall fink</code> を実行してください。</p>
<p>10.3 から 10.5 へ直接移行する方法は今のところありません。
どうしても使いたい方は、 <code>fink-0.27.7</code> tarball をダウンロードし、上述のように Fink ツリーを　bootstrap する必要があります。</p>
<p><b>2007年10月29日追記:</b> アップグレードした場合、 <code>fink cleanup</code> を実行すると<b>全ての</b> .deb ファイルが削除されます。
この問題は次回のアップデート時に解決される予定です。</p>
<a name="2007-03-04%20tar%20%E3%81%AE%E5%95%8F%E9%A1%8C"><span class="news-date">2007-03-04: </span><span class="news-headline">tar の問題</span></a><?php gray_line(); ?>
<p>
fink の unstable ツリーを使用していると、大きなパッケージをビルドする最後に、
<b>tar: File changed as we read it</b> のようなエラーが出ることがあり、
.deb ファイルがビルドされないことがあります。
</p><p>
fink team は、この問題を恒久的に直す方法を研究しています。
当面のところ、この問題にであったら、 <code>fink install tar-1.15.1-14</code>
で回避することができます。
これは、<code>fink update-all</code> をする度に実行する必要があるかもしれません。
</p><p>
この問題を恒久的に直す方法を決定ししだい、こちらで再度告知をいたします。
</p>
<p><b>2007年3月16日追記: </b>
<code>dpkg</code> の新バージョンにて問題が解決されます。
Unstable を利用している方は、通常通り update を実行してください。
</p>
		<a name="2006-08-19%20%E3%82%B5%E3%83%BC%E3%83%90%E3%83%80%E3%82%A6%E3%83%B3;%20%E5%9B%9E%E9%81%BF%E7%AD%96%E6%9C%89%E3%82%8A%E3%80%82"><span class="news-date">2006-08-19: </span><span class="news-headline">サーバダウン; 回避策有り。</span></a><?php gray_line(); ?>
<p><b>Update: 2006年8月21日:</b> サーバーが復旧されました。</p>
	<p> 
現在、fink の４つの重要なサービス (rsync 更新、バイナリ配布, ソースファイルの "master mirror", パッケージデータベース)
をホストしているサーバがダウンしています。
8月21日月曜日頃には復旧すると思われますが、それまでの間は回避策を提供いたします。
</p><p>
fink を更新する際は、primary ミラー以外の rsync ミラーを選択する (次のパラグラフで解説) か、
<code>fink selfupdate-cvs</code> コマンドを使います。
このコマンドはいっぱい実行するだけで、次回からの更新も CVS を用いるようになります。
サーバが復旧したら、<code>fink selfupdate-rsync</code> とすることで rsync 更新に戻すことができます。
</p><p>
バイナリ配布の不在と、ソースファイルの "master mirror" に関しては、
<code>fink configure</code> コマンドを実行します。
以下の質問以外に対しては、既定の答を受け入れてください。
"Should Fink try to download pre-compiled packages from 
the binary distribution if available?" には "no" を
(バイナリ配布を無効化する)。
ミラー設定を変えるか聞かれた場合 "yes" と答える。
この後、"What mirror order should fink use 
when downloading sources?" と聞かれるので、
"2: Search Master Mirrors last"
(master mirror サーバを自動的に選択する機能を無効化)
と答えます。
最後に、 更新に rsync を用いると決めていて、
"Choose a mirror for 'RSync SelfUpdate'" 
と聞かれた場合、
rsync://master.us.finkmirrors.net/finkinfo/
以外を選択してください。
米国にいる場合、残念ながら他には選択肢がないかもしれません。
</p><p>
最後に、パッケージデータベースを使うには、
<a href="http://pdb.finkproject.org/pdb/">データベースのバックアップ</a>
を使いください。
ただし、これは数週間遅れたデータになります。
</p>
<p><b>Update: 2007年6月2日</b> 10.4.9 の <code>sudo</code> の挙動が変わりました。
これによって、更新スクリプトはそのままでは作動しなくなりました。
最初に <code>sudo -s</code> として、スーパーユーザーにすれば大丈夫です。</p>
		<a name="2006-07-24%20%E6%B3%A8%E6%84%8F:%20%2210.4-transitional%22%20%E3%83%84%E3%83%AA%E3%83%BC%E3%81%AE%E3%82%B5%E3%83%9D%E3%83%BC%E3%83%88%E3%81%AF2006%E5%B9%B48%E6%9C%881%E6%97%A5%E3%81%AB%E7%B5%82%E4%BA%86"><span class="news-date">2006-07-24: </span><span class="news-headline">注意: "10.4-transitional" ツリーのサポートは2006年8月1日に終了</span></a><?php gray_line(); ?>
			<p>
				"10.4-transitional" ツリーは、 GCC 3.3 (Mac OS X 10.3 のデフォルトコンパイラ) と
				GCC 4.0 (Mac OS X 10.4 のデフォルトコンパイラ) のバイナリ間の非互換性問題にたいする暫定的な解決策でした。
				ようやく Fink は GCC 4.0 へ移行する作業が終了しましたので、 "10.4" ツリーへ移行してください。
				"10.4-transitional" ツリーのサポートは、2006年8月1日をもって終了いたします。
			</p>
			<p><b>"fink --version" が "0.8.1.cvs" または "0.8.1.rsync" と表示する場合、特にすることはありません。</b></p>
			<p>
				<a href="<?php print $root; ?>news/#2006-07-01%20July%20is%20%22Fink%20Update%20Month%22">以前述べたとおり</a>、
				"10.4" ツリーへの移行方法は2種類あります。
			</p>
			<p>
				一番簡単な方法は、既存の Fink インストールを削除し、<a href="<?php print $root; ?>download">ダウンロードページ</a>から 0.8.1 インストーラを入手してインストールし直すことです。
			</p>
			<p>
				既存の Fink を残す方法は、
				<a href="http://prdownloads.sourceforge.net/fink/scripts-10.4-update-0.4.tar.gz?download">アップグレードスクリプト</a>
				をダウンロードし、README を読みながら既存のインストールされているものをアップグレードすることです。
				これは Fink インストールをソースから再ビルドし、全てをアップグレードします。
				インストール状況によっては、相当な時間がかかります！
			</p>
			<p>
				アップグレードスクリプトの評判は上々です。多くのユーザがこれで "10.4" ツリーへスイッチしています。
				それでも何か問題がありましたら、<a href="<?php print $root; ?>lists">メーリングリスト</a>にメールをしてください。
			</p>
		<a name="2006-07-24%20Fink%20Birds-of-a-Feather%20at%20OSCON%202006"><span class="news-date">2006-07-24: </span><span class="news-headline">Fink Birds-of-a-Feather at OSCON 2006</span></a><?php gray_line(); ?>
			<p>OSCON 2006 にきてる人? 集まれ!</p>
			<p>
				<a href="mailto:oscon2006@racoonfink.com">Benjamin Reed</a> (RangerRick on #fink)
				は OSCON に来ており、Fink に興味がある人も嫌いな人も大歓迎です。
			</p>
			<p>
				7月26日午後8時半、 room F150 にて Fink や Mac OS X 、その他諸々のことを話します、
			</p>
		<a name="2006-07-01%20%E6%96%87%E6%9C%88%E3%81%AF%20%22Fink%20%E6%9B%B4%E6%96%B0%E6%9C%88%22%20%E3%81%A7%E3%81%99"><span class="news-date">2006-07-01: </span><span class="news-headline">文月は "Fink 更新月" です</span></a><?php gray_line(); ?>
      <p>
PowerPC 上の Fink ユーザは、古い "10.4-transitional" から、より新しい "10.4" ツリーへ fink を更新することをお勧めします。
2006年7月末には 10.4-transitional ツリーはサポートを終了する予定です。
</p><p>
背景: OS X 10.4 とともに来た、新しいバージョンの g++ コンパイラ
(Fink の馬車馬の一頭) は、以前のバージョンとはバイナリ非互換なコードを生成します。
10.4-transitional ツリーを使う際は、Fink は新しい gcc-4.0 コンパイラと古い g++-3.3 コンパイラを組み合わせて使います。
この戦略は、g++-4.0 と互換のパッケージをつくるため、更なる時間を必要とします。
すでに移行完了に達しましたので、新しいツリーをお使いください。
しかし、g++ ライブラリを用いている、あるいは提供している全てのパッケージを、正しい順序で再ビルドしなければいけないのが少し厄介です。
</p><p>
OS X 10.4 を使っている方は、
<code>fink --version</code>
というコマンドを実行することで、Fink を更新する必要があるかどうかわかります。
Distribution version が 0.8.1.cvs か 0.8.1.rsync であれば、更新の必要は<b>ありません</b>。
Distribution version が 0.8.0.cvs か 0.8.0.rsync であれば、以下に述べるように更新してください。
</p>
<p>
多くのユーザは、簡単に、fink インストールを削除し、0.8.1 インストーラでインストールしてください。
他の方は、コンパイル済みの基本 fink パッケージと既存 fink インストールを更新するスクリプトの入っている
<a href="http://prdownloads.sourceforge.net/fink/scripts-10.4-update-0.3.tar.gz?download">10.4-update tarball (v. 0.3)</a> (およそ 12 MB)　
を使うと良いでしょう。
(tarball を解凍後、)詳細については 10.4-update ディレクトリ内の README ファイルを参考にしてください。
</p>
<p>
注記: OS X 10.3 から OS X 10.4 へアップグレードするには、同じく二つの方法があります。
古い fink インストールを削除して新規にインストールするか、
同じ 10.4-update tarball を使います。
OS X をアップグレードしてから、更新スクリプトを実行してください。
</p>
<a name="2006-06-15%20%E6%96%B0%E3%81%97%E3%81%84%20Fink%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2006-06-15: </span><span class="news-headline">新しい Fink リリース</span></a><?php gray_line(); ?>
      <p>
本日より、10.4 (Tiger) 用の新しい Fink リリースが
<a href="<?php print $root; ?>download/index.php">あります</a>
: version 0.8.1。
これは、Intel または PowerPC のマシンにインストールすることができます。
このリリースには、ソースファイル、バイナリパッケージ、両ハードウェアのインストーラがあります。
</p>
      <p>
Intel プラットフォーム上での Fink は、まだ"ベータ"の扱いで、
多くのパッケージ (特に "unstable" ツリーにあるもの)は、コンパイルできなかったり、
コンパイルできても動作しなかったりします。
状況の改善作業はこれからも続きます。
</p>
<p>
10.4-transitional ツリー (0.8.0 ディストリビューションから) を使っているこれまでの fink インストールを使っている Fink ユーザには、
2つのアップグレード方法があります。
アップグレードの作業には、g++ ライブラリの ABI 変更がライブラリの再コンパイルを必要とするため、問題があります。
多くのユーザは、簡単に、fink インストールを削除し、0.8.1 インストーラでインストールしてください。
他の方は、コンパイル済みの基本 fink パッケージと既存 fink インストールを更新するスクリプトの入っている
<a href="http://prdownloads.sourceforge.net/fink/scripts-10.4-update-0.3.tar.gz?download">10.4-update tarball (v. 0.3)</a> (およそ 12 MB)　
を使うと良いでしょう。
</p>
<a name="2006-05-10%20CVS%20%E3%83%88%E3%83%A9%E3%83%96%E3%83%AB"><span class="news-date">2006-05-10: </span><span class="news-headline">CVS トラブル</span></a><?php gray_line(); ?>
      <p>
Fink ユーザの多くが気づいているように、sourceforge.net の Fink CVS レポジトリは3月30日より、完全には機能していませんでした。
anonymous CVS アクセスは、この時より update ができていません。
数日前より、開発者もどのような形であれ CVS update ができませんでした。
</p><p>
sourceforge のスタッフによる現在の計画を理解する限り 
(<a href="http://sourceforge.net/docman/display_doc.php?docid=2352&amp;group_id=1">サイト状態ページ</a>を参照)、
古い CVS サーバは、現在の形では戻ってこないようです。
これにより、Fink ユーザの分断が予想されますが、どのような形で分断されるかは今の段階では述べることができません。
</p><p>
Fink ユーザへの現在のアドバイスとしては、更新方法を 'rsync' に変更することです
(コマンド 'fink selfupdate-rsync' を実行します)。
これにより、５月７日時点の fink インストールにまで上げることができます。
もし、fink の通常の selfupdate コマンドで、新しい CVS へ完全に更新することが不可能であれば、
更新手順が決まり次第、ここでお知らせいたします。
</p>
<p>Update 5/24/06: CVS は再び機能しています。
rsync による selfupdate を行っているユーザは、最新の情報を得ることができます。
cvs を用いている場合で、 rsync にスイッチできない (またはしたくない) 場合、
<a href="http://sourceforge.net/project/showfiles.php?group_id=17203&amp;package_id=69685">
Sourceforge ファイルリリースページ</a>
から
<code>fink-mirrors-0.24.15.2.tar.gz</code>
というファイルをダウンロードし、解凍し、
<code>fink-mirrors-0.24.15.2</code> ディレクトリ内で
<code>./inject.pl</code> を実行します。
この後、 <code>fink selfupdate</code> コマンドが通常通り機能するはずです。
</p>
    <a name="2006-03-03%20Apple%20%E3%81%AE%E6%9C%80%E6%96%B0%E3%81%AE%20Security%20Update%E3%80%80%E3%81%AB%E4%BB%98%E9%9A%8F%E3%81%99%E3%82%8B%E5%95%8F%E9%A1%8C"><span class="news-date">2006-03-03: </span><span class="news-headline">Apple の最新の Security Update　に付随する問題</span></a><?php gray_line(); ?>
      <p>
Fink チームは、 <code>rsync</code> を実行した際の問題についての報告を受けました。
このプログラムは Apple の Security Update 2006-001 にて更新されました: 
ユーザーによっては、Security Update 後、<code>fink selfupdate</code> が使用不能になります。
(原因は <code>rsync</code> の <code>--delete</code> にあるようです。)
</p>
      <p>
対処方法として、<code>fink install rsync</code> とし、 fink の rsync を用います。
あるいは、Apple の方に特有の機能 (例えば Extended Attributes のサポート) を使いたい場合、
<code>fink selfupdate-cvs</code> として、更新時に rsync の代わりに cvs を用います。
</p>
      <p>
このニュースは、状況が変わりしだい更新されます。
</p>
<p>Update 3/13/06: security update 2006-002 によって修正されました。
<a href="http://docs.info.apple.com/article.html?artnum=303453">アップルの文書を参照</a>。
</p>
    <a name="2006-02-21%20Intel%20%E4%B8%8A%E3%81%A7%E3%81%AE%E6%BA%96%E5%82%99%E3%83%90%E3%83%BC%E3%82%B8%E3%83%A7%E3%83%B3"><span class="news-date">2006-02-21: </span><span class="news-headline">Intel 上での準備バージョン</span></a><?php gray_line(); ?>
<p>
Fink の Intel アーキテクチュアに向けた準備バージョンが用意されました。
バイナリパッケージはまだありませんし、まだ細部には荒さが残っていますが、辛抱強いあなたなら使えるでしょう!
</p>
<p>
インストールには、
 <a href="http://sourceforge.net/project/showfiles.php?group_id=17203&amp;package_id=13043">
Sourceforge の Fink 用ファイルリリースページ</a>
から <code>fink-0.24.12.tar.gz</code> ファイルを取得し、解凍後、 <code>./bootstrap.sh</code>
というコマンドを実行します。
bootstrap プロセスの最後に、 <code>fink selfupdate</code> を実行し、現在インストール可能なパッケージ一覧が取得できます。
</p>
<p>
最後に確認した時点では、およそ1750のパッケージが "stable" ツリーにありましたが、
およそ 150 はビルドできませんでした。
真の意味で stable となった時には、ここで再度アナウンスされます。
</p>
<a name="2006-01-10%20Fink%20%E3%81%8C%20XCode%202.2%20%E3%81%AB%E5%AF%BE%E5%BF%9C%20(Intel%20%E3%81%AF%E6%9C%AA%E5%AF%BE%E5%BF%9C)."><span class="news-date">2006-01-10: </span><span class="news-headline">Fink が XCode 2.2 に対応 (Intel は未対応).</span></a><?php gray_line(); ?>
<p>
Fink は XCode 2.2 への準備ができました。例外は openoffice.org パッケージです
(10.4 ツリーへ移行時には機能すると予定されています）。
ユーザーは、都合のいいときに XCode 2.2 へアップグレードしてください。
10.4 ツリーがリリースされるさいには、 XCode 2.2 が必要です。
</p>
<p>
他方、本日の Apple の発表にも関わらず、Fink はまだ Intel プロセッサに対応していません。
Fink チームは、数週間以内に Intel 対応版の fink をリリースできるものを考えております。
Fink チームとしては、新しい iMac に Fink をインストールせず、対応バージョンがリリースされるまで待つようお願い申し上げます。
</p>
<p>
Fink パッケージメンテナの方は、新しい <code>Architecture</code> フィールドに注意してください。
パッケージ化のマニュアルに説明されています。
</p>
<a name="2005-11-16%20XCode%202.2%20(10.4%20only)."><span class="news-date">2005-11-16: </span><span class="news-headline">XCode 2.2 (10.4 only).</span></a><?php gray_line(); ?>
<p>
Fink チームは、 XCode 2.2 コンパイラによるビルドがうまくいかないという報告を受けています。
問題が解決されるまで、XCode のアップグレードを控えてください。
</p>
<p>
既に XCode 2.2 をインストールし、2.1 に戻したくない方は、
動作しないパッケージを見つけ、修正していただくようご協力をお願い申し上げます!
</p>

<a name="2005-06-09%20%E6%96%B0%E3%81%97%E3%81%84%20Fink%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9."><span class="news-date">2005-06-09: </span><span class="news-headline">新しい Fink リリース.</span></a><?php gray_line(); ?>
<p>
３つの新しい Fink リリースが今日から
<a href="<?php print $root; ?>download/index.php">ダウンロードできます</a>
 : version 0.8.0 (for 10.4),
version 0.7.2 (for 10.3), および version 0.6.4 (for 10.2).
いずれも、ソースファイル、バイナリパッケージ、新規ユーザー用インストーラが含まれています。
</p>
<p>
10.4 用の新しいリリースは、現在のすべての "stable" パッケージを、ソースとバイナリで提供します:
これは 1565 あり、10.3 リリースの 1909 パッケージの80%を超えるものです。
更なるパッケージの提供にむけて fink 開発者は作業を続けています。
</p>
<p>
新しい 10.2 用のリリースは、最後の公式リリースとなります。
今後の更新は (セキュリティアップデートを含めて) ありませんが、0.6.4 リリ−スは数年間の使用に耐えることができるでしょう。
</p>
<p>
10.4 へアップグレードするには、
<code>fink selfupdate</code> を実行し、
(10.4 で初めての更新時には) <code>sudo /sw/lib/fink/postinstall.pl</code> を実行し、
<code>fink scanpackages</code> と <code>sudo apt-get update</code> を実行します。
現在は bootstrap を勧めていません。
これは、Apple の XCode 2.1 では動作しないためです。
</p>
<p>
追補 6/19/05: 
Fink-0.8.0 バイナリインストーラが、volume does not support symlinks という場合、
(アプリケーションフォルダー内のユーティリティ内の) ディスクユーティリティから問題のボリュームを
選択し、"ディスクのアクセス権を修復"をクリックします。
また、インストールには管理者権限を必要とします。管理者権限のあるユーザでインストールを行ってください。
</p>
<p>
追補 6/30/05:  
古いヘッダファイルなどの混在を避けるため、ソースからパッケージをビルドされる方は
XCode をクリーンインストールすることをお勧めします。これを行うには、
<code>/Developer/Tools/uninstall-devtools.pl</code> スクリプトを実行します。
OS を更新する前にこの操作を行うことが一番確実です。
</p>

<a name="2005-04-29%20Fink%20%E3%81%A8%20Tiger."><span class="news-date">2005-04-29: </span><span class="news-headline">Fink と Tiger.</span></a><?php gray_line(); ?>
			<p>
Fink が OS X 10.4 に対応! 更新は以下の通り:
</p>
			<ul>
				<li>
バイナリの利用者に、バイナリインストーラは数週間以内に提供いたします。
それまでの間は、新規インストールは下記のように bootstrap してください。
</li>
				<li>
stable ツリーの利用者は、現在の fink を <code>sudo rm -Rf /sw</code> で削除し、
<a href="http://sourceforge.net/project/showfiles.php?group_id=17203&amp;package_id=13043&amp;release_id=326600">
fink-0.23.10.tar.gz</a> をダウンロード後、解凍し、"bootstrap"します。
つまり、 <code>tar -xvzf fink-0.23.10.tar.gz</code> し、
<code>fink-0.23.10</code> 内で <code>./bootstrap.sh </code> を実行します。
その後、<code>fink selfupdate</code> を実行する必要があります。
</li>
				<li>
unstable ツリーの利用者は、 fink のバージョンが 0.24.6 以前であれば <code>fink selfupdate</code> 
することでアップグレードされます。
10.4 にアップグレードしたら、<code>fink --version</code> で現在の fink のバージョンを確認してください。
0.24.6 以前であれば、 <code>fink selfupdate</code> を実行してください。
次に、 selfupdate をしたいても、していなくても、 <code>fink rebuild fink</code> し <code>fink selfupdate</code> を実行してください。
</li>
			</ul>
			<p>
全てのパッケージが 10.4 で動作する訳ではありませんが、数週間で改善されるでしょう。
stable ツリーのパッケージは 10.3 よりもだいぶ少ないですが、全てがコンパイルできるはずです。
</p>
		<a name="2004-11-20%20gcc%20%E5%95%8F%E9%A1%8C%E3%81%AE%E8%A7%A3%E6%B1%BA"><span class="news-date">2004-11-20: </span><span class="news-headline">gcc 問題の解決</span></a><?php gray_line(); ?>
			<p>Apple は、2004年11月に gcc3 アップデータをリリースしました。
(無料登録の後、) connect.apple.com からダウンロードできます。
このアップデータは、XCode 1.5 に含まれる gcc3 コンパイラの問題を修正しています。
XCode 1.5 の利用者はこのアップデータをインストールしてください。
(このアップデータは、何も手をつけていない XCode 1.5 をアップデートし、また Fink Project が以前推奨していた回避策をインストールしていてもアップデートします)</p>
			<p>この件に関して、われわれの報告に対処し、迅速に解決していただいた Apple に謝意を表します。</p>
		<a name="2004-10-15%20gcc%20%E5%95%8F%E9%A1%8C%E3%81%AE%E5%9B%9E%E9%81%BF"><span class="news-date">2004-10-15: </span><span class="news-headline">gcc 問題の回避</span></a><?php gray_line(); ?>
			<p>XCode 1.5 に付属されているバージョンの gcc は、特定の条件下で c++ コードから間違った出力をすることがわかっています。Fink にはユーザーに警告するメカニズムがあり、この問題のある"壊れた" gcc を使ったパッケージのコンパイルを拒否します。</p>
			<p>既に XCode をバージョン1.5にアップグレードしている場合の回避方法は、<a href="http://article.gmane.org/gmane.os.apple.fink.beginners/13580">ここ</a>と<a href="http://article.gmane.org/gmane.os.apple.fink.beginners/14200">ここ</a>に書かれています。</p>
			<p>まだアップグレードしていない方は、この問題が解決されるまで XCode バージョン1.2を使う方が良いかもしれません。
</p>
		<a name="2004-09-20%20Fink%200.7.1%20%E3%83%AA%E3%83%AA%E3%83%BC%E3%82%B9"><span class="news-date">2004-09-20: </span><span class="news-headline">Fink 0.7.1 リリース</span></a><?php gray_line(); ?>
			<p>最新版の Fink、バージョン0.7.1 (10.3用) がソースとバイナリユーザーを対象にリリースされました。このリリースは Panther (10.3) 系の Mac OS X 用です。 Jaguar (10.2) 系の Mac OS X バージョンには、今まで通り0.6.3 リリースをお使いください。</p>
			<p>パッケージマネージャの修正と、多くのバイナリパッケージの追加によって1650のバイナリパッケージ化がこのリリースの内容です。KDE 3.1.4 と GNOME 2.4 のバイナリを含んでいます。</p>
			<p>Fink を完全にインストールするには、<a href="<?php print $root; ?>download/index.php">ここ</a>に投稿された方法で行う必要があります。現在の Fink を最新の Fink にアップグレードすることもできます。0.7.0と0.7.1の変更一覧は<a href="http://pdb.finkproject.org/pdb/compare.php?tree1=0.7.1-stable&amp;cmp=0&amp;tree2=0.7.0-stable&amp;splitoffs=on&amp;sort=name">このページ</a>にあります。
</p>
			<p>疑問や問題がある場合、 Fink メーリングリストをご利用ください。リストについては<a href="<?php print $root; ?>lists/index.php">ここ</a>を参照してください。</p>
			<p>自分のプラットフォーム用のインストーラを使用してください。
Fink 0.6.3 が Mac OS X 10.2.* 用で、 Fink 0.7.1 が Mac OS X 10.3.* 用です。</p>
			<p>Fink Team は、このリリースの貢献者、手伝ってくれた方、開発者の方々に謝意を表します。
また、 この前の 0.7.0 リリースを 130,000 以上もダウンロードしてくれたコミュニティにも感謝しています。
彼らの永きにわたる支持と価値あるポインタなくして、現在の Fink はありえませんでした。</p>
		<a name="2004-08-23%20Problems%20with%20XCode%201.5"><span class="news-date">2004-08-23: </span><span class="news-headline">Problems with XCode 1.5</span></a><?php gray_line(); ?>
			<p>
	In the past few days, there have been reports that some fink packages 
	do not compile correctly using XCode 1.5.  If you have not already
	upgraded to XCode 1.5, we suggest that you wait until this issue
	is resolved before doing so.
	</p>
			<p>
	If you are having problems with a package which compiled under
	XCode 1.2 but does not compile correctly under XCode 1.5, 
	please report the package to
	the fink-devel mailing list.  (The usual symptom is: some symbols
	are  missing after compiling with g++.)  
	Packages already known to have this problem include
	octave, singular-factory, singular-libfac, and possibly sdl.
	</p>
		<a name="2004-08-21%20Error%20in%20fink-0.22.0"><span class="news-date">2004-08-21: </span><span class="news-headline">Error in fink-0.22.0</span></a><?php gray_line(); ?>
			<p>
	The fink-0.22.0 package manager, which was available briefly in the 
	unstable tree this past week, had a bug which prevents further
	updating via rsync.  If you installed this version of fink, you
	can recover by running the command 
	<code>fink install fink-0.21.2-1</code> which will downgrade fink
	to the version in the stable tree, and subsequently running
	<code>fink selfupdate</code>
	</p>
			<p>
	If for any reason those commands don't work, go to 
	<a href="http://sourceforge.net/project/showfiles.php?group_id=17203">the 
	fink file release page at sourceforge</a> and download the
	file <code>fink-0.22.1.tar.gz</code> (or a more recent, i.e.,
	higher numbered, version).  Unpack this file with
	<code>tar xfz fink-0.22.1.tar.gz</code> , and then from within the
	fink-0.22.1 directory, run the command <code>./inject.pl</code>
	</p>
			<p>
	The fink team apologizes for the error, and thanks the user 
	community for bringing it to our attention quickly.
	</p>
		<a name="2004-08-01%20Improving%20our%20mirrors.%20Can%20you%20help?"><span class="news-date">2004-08-01: </span><span class="news-headline">Improving our mirrors. Can you help?</span></a><?php gray_line(); ?>
			<p>
	Fink's decision to gradually build its own network of mirrors
	has paid off. To make sure that we can continue to offer
	a high quality service we need to improve our mirror network.
	It has been some time since we last asked for more mirrors. 
	It is time to do so again. Fink is very grateful for the resources 
	granted to us by our community. To further improve our service to the 
	community we require an even better mirror system. We especially lack 
	mirrors in central Europe, Russia and the Far East. If you feel that 
	you have at least two Mbit to spare for a rsync mirror, or more to offer 
	a distfiles mirror, please <a href="mailto:mirrors@finkmirrors.net">contact us</a>.
	</p>
			<p>
	 To get a better understanding of the different types of mirrors 
	 Fink offers, please review <a href="http://finkmirrors.net/">finkmirrors.net</a>. This is the official homepage for all mirror related issues.
	 If you feel that you can offer other types of resources, 
	 web-space for testing as an example, please do not hesitate in <a href="mailto:mirrors@finkmirrors.net">contacting us</a> as well.
	</p>
		<a name="2004-04-06%20Fink%200.6.3%20and%200.7.0%20released."><span class="news-date">2004-04-06: </span><span class="news-headline">Fink 0.6.3 and 0.7.0 released.</span></a><?php gray_line(); ?>
			<p>
The latest Fink releases, version 0.6.3 (for 10.2) and 0.7.0 (for 10.3), 
are now available for both source and binary users.  The 0.6.3 release has 
been built on <b>10.2</b>, while release 
0.7.0 has been built on <b>10.3</b>. This should facilitate better support for the different platforms. 
	</p>
			<p>
These new releases incorporate various fixes to the package manager, many previously 
unavailable binary packages have been added and problematic packages for 10.3 users have been rebuilt. 
	</p>
			<p>
To complete a new Fink installation you should follow the instructions posted 
<a href="<?php print $root; ?>download/index.php?phpLang=en">here</a>.
You may upgrade your existing Fink installation to the latest Fink release by following the instructions posted <a href="<?php print $root; ?>download/upgrade.php?phpLang=en">here</a>.

If you have questions or problems, please try the Fink mailing lists you can learn more about them 
<a href="<?php print $root; ?>lists/index.php?phpLang=en">here</a>.
		</p>
			<p>
Please make sure you pick the <b>appropriate installer</b> for your Platform.
Fink 0.6.3 will only install on Mac OS X 10.2.* while Fink 0.7.0 will only install on Mac OS X 10.3.* 
		</p>
			<p>
The Fink Team would like to thank its many contributors, frequent helpers 
and developers for making this release happen. 
We also thank our community, without their constant support and valuable 
pointers Fink would not be where we are now.. 

</p>
		<a name="2004-02-19%20Raise%20your%20Flag."><span class="news-date">2004-02-19: </span><span class="news-headline">Raise your Flag.</span></a><?php gray_line(); ?>
			<p>
Thanks to Baba Yoshihiko, Fink has now taken the necessary steps to allow for 
internationalisation efforts. 
The improved infrastructure enables us to display a multilingual web-site to our visitors from all over the world. 
</p>
			<p>
This also means that we need volunteers. The Fink web-site needs to be translated into the language of your choice. 
A translation into Japanese is being worked on and the translation into French has been taken over by Michele Garoche. 
Which language are you willing to translate?
</p>
			<p>
If you are willing to become a member of the internationalisation team or wish to provide feedback on 
the web-site feel free to join the new mailing-list.
You can do so by going to our <a href="<?php print $root; ?>lists/index.php">mailing-lists page</a>. The full announcement on the existing 
mailing lists can be read <a href="http://article.gmane.org/gmane.os.apple.fink.devel/7554">here</a>.
</p>
		<a name="2004-02-02%20Java%201.4.2%20Update%20Removes%20Java%20SDK"><span class="news-date">2004-02-02: </span><span class="news-headline">Java 1.4.2 Update Removes Java SDK</span></a><?php gray_line(); ?>
			<p>
If you previously had Java 1.4.1 and the Java SDK installed, the new
Java 1.4.2 update from apple will upgrade the Java runtime to 1.4.2,
but will <b>remove</b> the previous 1.4.1 Java runtime and
SDK <b>without</b> upgrading the JDK.  To build Java packages in Fink
you will need to <a href="http://connect.apple.com/">go to
connect.apple.com and download the Java 1.4.2 SDK</a> (free
registration required).
	</p>
		<a name="2004-01-18%2010.3%20binaries%20updated"><span class="news-date">2004-01-18: </span><span class="news-headline">10.3 binaries updated</span></a><?php gray_line(); ?>
			<p>
Many of the binary files for 10.3 have been updated, eliminating problems
with qt and kde, among others.  To access the updated files, bring your
index of binary files up-to-date by running the
command <code>sudo apt-get update</code> .  After this, you can use
apt-get, dselect or FinkCommander to install binary files as usual.
	</p>
		<a name="2004-01-10%20Pssst%20want%20to%20install%20GNOME%202.4?"><span class="news-date">2004-01-10: </span><span class="news-headline">Pssst want to install GNOME 2.4?</span></a><?php gray_line(); ?>
			<p>
	Thanks to the new Fink GNOME Core team, including a lot of hard work by packaging
	newcomer Keith Conger and GNOME 1.x maintainer Masanori Sekino, GNOME 2.4 has
	finally been released to the 10.3 unstable tree.
	</p>
			<p>
	It is there for the taking; please offer some of your time and test these packages
	if you are on unstable already.  Because of the massive number of changes, it is
	expected that there will be issues upgrading or installing the new GNOME.  If you
	have problems, you can reach the GNOME-savvy people at
	<a href="mailto:fink-gnome-core@lists.sourceforge.net">fink-gnome-core@lists.sourceforge.net</a>.
	Please do report success stories there as well.  The more good reports we get, the
	faster GNOME 2.4 can be moved to stable.
	</p>
			<p>
	For those of you who do not read our mailing lists, <a href="<?php print $root; ?>lists/index.php">why aren't you subscribed yet</a>?
	Here is a link to detailed 
	<a href="http://article.gmane.org/gmane.os.apple.fink.gnome/57/match=gnome">instructions</a> 
	how to install or upgrade GNOME and what new stuff it brings.
	</p>
		<a name="2004-01-02%20Whaaazaaap%20Dawgs,%20Two%20Zero%20Zero%20Four%20is%20on!"><span class="news-date">2004-01-02: </span><span class="news-headline">Whaaazaaap Dawgs, Two Zero Zero Four is on!</span></a><?php gray_line(); ?>
			<p>
	A happy new year to all of you from the whole team. Blame this outburst of an 
	attempt at slang language on some of us having to watch the MTV Music Awards all
   day long.
	</p>
			<p>
	Last year has been a good year for Fink. We have had hard times keeping up with 
	the changes introduces by Apple, but we also learned that we have a great community
	which is willing to go through great lengths to support us. 
	For this, we say "Thank You". Much of what happens in the Fink project
   happens because of the amazing support and encouragement we get from our users.
	</p>
			<p>
	Two Zero Zero Four should not make us slow down, but speed up. There are some 
	interesting things in the pipeline, including GNOME 2.4, a new release of KDE, major 
	changes to the package manager itself, and organisational restructuring. 
	Hopefully we will advance into an even bigger project with developer conferences, 
	real life meetings, and a CD in your favourite shop.
	</p>
			<p>
	High ambitions can make one fall very deeply, thus we shall take it carefully, but 
	still we are all counting on your support during this year. Tell us what you think 
	about Fink; tell us what you like or dislike; show us ways to improve ourselves.
	Lend us your resources and sponsor a mirror or hardware. Devote some of your time
	to improve the package manager or add another piece of software by creating an
	info file. Browse this website and hopefully indulge yourself. We enjoy serving
	such a nice community; hopefully we shall make it a smooth ride for you and
	your Macintosh in Two Zero Zero Four.
	</p>
		<a name="2003-12-28%20Merry%20Christmas%20and%20a%20happy%20new%20year"><span class="news-date">2003-12-28: </span><span class="news-headline">Merry Christmas and a happy new year</span></a><?php gray_line(); ?>
			<p>
 The Fink team and I wish all of you a merry Christmas and happy Holidays. We are looking
 forward to yet another year where we can help the Macintosh community grow into the 
 world of UNIX together with Mac OS X.
 		</p>
			<p>
 We wish you all, that your hope is not too frail and that you will carry on following 
 through with your wishes. May the world we live in gradually become a better place and
 may peace and understanding settle just for a few days. 
		</p>
			<p>
 Enjoy your quiet time and in case we do not get around to saying it soon enough. 
 A happy new year to all of you, stay with us we count on your support.
		
		</p>
		<a name="2003-11-30%20There%20they%20are!%20New%20mirrors.."><span class="news-date">2003-11-30: </span><span class="news-headline">There they are! New mirrors..</span></a><?php gray_line(); ?>
			<p>
	Thank you, thank you, thank you. What a great community we have.
	Thank you for providing us with more mirrors. 
		</p>
			<p>
	Matthew Healey, member of the Western <a href="http://www.wamug.org.au">
	Australian</a> Macintosh User Group, and their 
	ISP <a href="http://www.extremedsl.com.au">extremedsl</a>
	are providing Fink with a full mirror in Perth, Australia. This is our first
	mirror in down under, thus I am pleased to welcome them to the family.
	Furthermore the <a href="http://www.mirror.ac.uk">UKMIRROR</a> service 
	has accepted us, making distfile services available for Fink 
	on 21 load balanced server.
		</p>
			<p>
	We are very happy about this development, but we still need more rsync mirrors.
	Thus, once more, if you feel like helping, please visit 
	<a href="http://finkmirrors.net">finkmirrors.net</a> and get in touch.
		</p>
		<a name="2003-11-24%20More%20mirrors....pretty%20please?"><span class="news-date">2003-11-24: </span><span class="news-headline">More mirrors....pretty please?</span></a><?php gray_line(); ?>
			<p>While we welcome our latest full mirror in Norway, sponsored by Havar Valeur, 
        we crave more. To improve our service to all of you, we would like to ask that
        you evaluate carefully if you maybe do have the resources to become a mirror. 
        </p>
			<p>     
        All it takes is a 10Mbit link, around 100MB of disk space  and some bandwidth you are 
        willing to share for Fink. The exact setup instructions for rsync mirrors can be found 
        <a href="http://finkmirrors.net/rsync.html">here</a>. Especially mirrors in
        Asia, Australia, New Zealand, South Europe and Middle Europe are welcome, since we have none in 
        those regions yet. If you feel generous and wish to donate even more resources, please visit
        <a href="http://finkmirrors.net">finkmirrors.net</a> to learn about your options.
        </p>
			<p>     
        The current status of all available rsync mirrors can be viewed on the finkmirrors.net pages as well.
        We hope to improve this service in the future, yet this depends on your willingness to help us out. 
        We are looking forward to many new applications and thank our community in advance. 
        </p>
		<a name="2003-11-17%20Fink%200.6.2%20released"><span class="news-date">2003-11-17: </span><span class="news-headline">Fink 0.6.2 released</span></a><?php gray_line(); ?>
			<p>The latest Fink release, version 0.6.2, is now available
for both source and binary users.  This is a bug-fix release, intended
to address two problems: the dselect/user deletion bug, and a 
problem with ownership of files.  The dselect bug was addressed by
updating the fink, dpkg, and apt packages.  After updating to 0.6.2,
it is safe to once again use dselect.  However, if you ran dselect
at any time since 0.6.0, you should carefully check the integrity
of the file at <code>/sw/etc/apt/sources.list</code>.  If you have
any doubts about this file, you should replace it with
<a href="<?php print $root; ?>files/sources.list">the default sources.list file</a>.
</p>
			<p>Users who have installed binary files from the 0.6.1 distribution
may find that certain files in their Fink installation are owned
by UID 2011 rather than by root.  To correct this problem,
run the command:</p>
			<pre>sudo find /sw/ -user 2011 -exec chown root:admin {} \;</pre>
			<p>This release, like the previous one, was built on OS X 10.2
using the gcc 3.3 compiler, and runs fine with some exceptions* on OS X 10.3.  Most Fink 
users who upgrade to 10.3 will continue to
want to only use the binaries from this
new distribution for now, while the Fink team continues to modify
Fink packages for 10.3.
</p>
			<p>*Exceptions include: emacs, qt.
</p>
		<a name="2003-11-04%20User%20Deletion%20Bug/%20Dselect%20Troubles"><span class="news-date">2003-11-04: </span><span class="news-headline">User Deletion Bug/ Dselect Troubles</span></a><?php gray_line(); ?>
			<p><b>Quick Summary: DO NOT USE DSELECT,</b> and if you've used it,
check your /sw/etc/apt/sources.list file carefully.</p>
			<p>Users who have bootstrapped or installed Fink 0.5.3 or Fink 0.6.0
		on Mac OS X 10.3 could exhibit a problem where all users get deleted
		from the netinfo database, and you become unable to log in.
We believe that this problem can only occur if you've used dselect.</p>
			<p>If you are using Mac OS X 10.3, please be sure you're using the
		latest Fink version to avoid the issue.  To make sure you don't have
		upgrade problems, check your <code>/sw/etc/apt/sources.list</code>
		file.  You will need to modify it if it contains <code>deb</code>
		lines that point to "release" or "current" without a version number.
		In other words, if your <code>sources.list</code> file contains
		these lines:</p>
			<pre>deb http://us.dl.sourceforge.net/fink/direct_download release main
deb http://us.dl.sourceforge.net/fink/direct_download current main</pre>
			<p>...you should change them to this:</p>
			<pre>deb http://us.dl.sourceforge.net/fink/direct_download 10.3/release main
deb http://us.dl.sourceforge.net/fink/direct_download 10.3/current main</pre>
			<p>We are working on updating the repository to make sure that even
		if you update you don't get the broken code, and to
repair dselect, but in the meantime,
		make sure your <code>sources.list</code> file has the correct entries.</p>
			<p>Other users have experienced problems with dselect itself, particularly
complaints about a missing "darwin" package.  If you are running dselect
under 10.3 and you <b>don't</b> get this warning, then your 
<code>sources.list</code> file is likely to be corrupted and you should
repair it as above.
</p>
		<a name="2003-11-01%20Fink%200.6.1%20released"><span class="news-date">2003-11-01: </span><span class="news-headline">Fink 0.6.1 released</span></a><?php gray_line(); ?>
			<p>The latest Fink release, version 0.6.1, is now available
for both source and binary users.  This release was built on OS X 10.2
using the gcc 3.3 compiler, and runs well on OS X 10.3.  Most Fink
users who upgrade to 10.3 will want to only use the binaries from this
new distribution for now, while the Fink team continues to modify
Fink packages for 10.3.
</p>
			<p>
If you wish to access the 
new binaries, use apt-get, dselect, or the binary mode of
FinkCommander.  Unless you are interested in helping the Fink team
to test packages which are compiled on 10.3, 
do not use the command-line <code>fink</code> program to do your
installations for the
next few weeks.
</p>
			<p>The simplest way to upgrade a binary installation is to run
"sudo apt-get update".  Further details and
other issues related to upgrading Fink to 10.3 are addressed on the
<a href="<?php print $root; ?>download/10.3-upgrade.php">Special 10.3 upgrade page.</a>
</p>
			<p>
Before using the latest version of
the command-line <code>fink</code> program 
under OS X 10.2, be sure to install the August2003gccUpdater, available
after free registration from connect.apple.com.
</p>
		<a name="2003-10-31%20Happy%20Halloween%20and%20welcome%20new%20mirrors"><span class="news-date">2003-10-31: </span><span class="news-headline">Happy Halloween and welcome new mirrors</span></a><?php gray_line(); ?>
			<p>
		We wish all of you a happy Halloween.
		</p>
			<p>
		Furthermore I would like to welcome our new mirrors to the Fink family.
		From Europe in Rijeka, Croatia a new full mirror joins us. This mirrors 
		has been sponsored by the <a href="http://mac.dir.hr/">Jabucnjak</a> Apple user group. 
		This is our first mirror in Europe, so I hope that more will be joining us 
		soon.
		</p>
			<p>
		Dave Schroeder from the <a href="http://mirror.services.wisc.edu/">University of 
		Wisconsin</a> in Madison is sponsoring a 100Mbit dedicated Master server.
		A. J. Wright and <a href="http://sunsite.utk.edu/">SunSITE@UTK</a> are helping out with 
		another full mirror in the United states. 
		</p>
			<p>
		This raises our full mirror count to four and the rsync mirror count to 
		five. We are happy to have such a great community back us up, but I know 
		that more mirrors will join over time. I will not stop nagging you until
		Fink has its own mirror in every state of the USA. Yet, with such a 
		brilliant community backing us up, I am not too worried about not
		reaching my goal very soon.
		</p>
			<p>
		Trick or treat! Our most wanted treat is more mirrors, so come forth 
		Administrators and fill our bag. Information on how you can be a mirror
		can be found on the official <a href="http://finkmirrors.net">
		mirroring website</a>.
		</p>
		<a name="2003-10-25%20Look%20Ma,%20a%20logo%20for%20Fink"><span class="news-date">2003-10-25: </span><span class="news-headline">Look Ma, a logo for Fink</span></a><?php gray_line(); ?>
			<p>As you surely noticed, Fink has a logo. This is the result of our
	Logo <a href="<?php print $root; ?>logo.php">contest</a> held earlier this year.
	This new, official, logo has been displayed since the 24th of October and
	those of you who wondered how it has been picked and what the name of the
	winner is should read up in the PR <a href="<?php print $root; ?>pr/index.php">section</a>.
	</p>
			<p>
	The longer explanation also features a larger version of the logo itself,
	so that you may have a closer look at its details. We like our new logo,
	we hope that you will like it too.
	</p>
			<p>IMPORTANT: We do not yet have a formal licensing agreement for the new
   logo and so are unable to give permission to distribute it.  Currently, it
   can only be displayed on the Fink web page.  Thank you for your understanding.
	</p>
		<a name="2003-10-24%20Upgrade%20to%20gcc%203.3%20and/or%2010.3"><span class="news-date">2003-10-24: </span><span class="news-headline">Upgrade to gcc 3.3 and/or 10.3</span></a><?php gray_line(); ?>
			<p>It is now possible to upgrade Fink to take full advantage of the gcc 3.3
compiler, or to use OS X 10.3 if you have that installed.  Binary packages
corresponding to these upgrades are not yet available, so if you make 
extensive use of binary packages you may wish to wait a few days before 
upgrading.
</p>
			<p>
If you wish to perform this upgrade, and you had previously installed the
June 2003 Developer Tools update from Apple, you will need to install
the August 2003 Developer Tools update BEFORE you upgrade Fink.  Under
10.3, be sure to install XCode from the XCode disk before upgrading
Fink.
</p>
			<p>
Running "fink selfupdate" should perform the upgrade for you.  The latest
version of the fink package manager will automatically detect which
version of OS X and which version of gcc you have installed, and will
adjust itself accordingly.
</p>
			<p>
If you wish to do a fresh install of Fink on a 10.3 system, we recommend
<a href="<?php print $root; ?>download/srcdist.php">bootstrapping from
source,</a> starting from fink-full-0.6.0.tar.gz available
on fink's <a href="http://sourceforge.net/project/showfiles.php?group_id=17203">sourceforge 
download page.</a>  You'll need XCode for this as
well.
</p>
			<p>
Also note that once you have Fink version 0.15.0 or higher, you do
not need to install system-xfree86 anymore.  Fink is
capable of automatically determining your system-xfree86 version if you
don't already have any fink x11 packages installed.  If you currently
have an old system-xfree86 package of any kind installed, please run the
following:
</p>
			<pre>sudo dpkg -r --force-all system-xfree86 system-xfree86-42 \
system-xfree86-43; fink selfupdate; fink index</pre>
			<p>
The Fink team is still working on getting Fink packages working under 10.3,
but many many packages already work.
</p>
		<a name="2003-10-23%20Say%20Hello%20to%20Mirror%20Numero%20Uno"><span class="news-date">2003-10-23: </span><span class="news-headline">Say Hello to Mirror Numero Uno</span></a><?php gray_line(); ?>
			<p>You are too late. Rus Foster from <a href="http://www.jvds.com">JVDS</a>
	beat you all to it. He is the first one to provide us with resources 
	for a Fink rsync mirror.
	The mirror is located in Atlanta, GA and is updated every two hours, at 35 minutes past.
	</p>
			<p>For those of you who are still waiting, join in. The more mirrors we have
	the faster you can rsync your info files. As per usual, updated and current
	information on the mirror structure can be found on <a href="http://finkmirrors.net"> Finkmirrors.net </a>
	</p>
		<a name="2003-10-22%20Mirror,%20mirror%20on%20the%20wall..."><span class="news-date">2003-10-22: </span><span class="news-headline">Mirror, mirror on the wall...</span></a><?php gray_line(); ?>
			<p>..who will mirror Fink above all? There is a new player on the turf
	and it belongs to the Fink team. <a href="http://finkmirrors.net"> Finkmirrors.net</a> tells you everything you wanted to know about mirroring Fink and its related resources on your Server. As our mirror structure will hopefully grow in the future, this web-site will also hold information about each individual mirror.
	</p>
			<p>To ensure that our service remains as stable as possible and to distribute the load imposed onto our main rsync server, we are looking for rsync mirrors or full mirrors. Those of you who are willing to share resources will find all the necessary information on <a href="http://finkmirrors.net"> Finkmirrors.net</a>. 
</p>
			<p>
UPDATE: Yes, I screwed up when I initially installed the DNS records. If you cannot connect please try again later. I am very sorry for this inconvenience. Thank you for your understanding.
</p>
		<a name="2003-10-12%20New%20update%20method%20available"><span class="news-date">2003-10-12: </span><span class="news-headline">New update method available</span></a><?php gray_line(); ?>
			<p>The latest version of the fink package manager offers a new update
method, <code>fink selfupdate-rsync</code>, as an alternative to the
CVS updates which have been so problematic in the past few months.
If you have difficulty updating to the new version, please follow
<a href="<?php print $root; ?>download/rsync-upgrade.php">these 
special update instructions</a>.
</p>
			<p>In addition, this version of the fink package manager is compatible
with last summer's Developer Tools updates.  After installing both the new
package manager and the Developer Tools update, 
fink will ask you to reset your gcc version whenever
that is necessary.</p>
		<a name="2003-09-02%20Logo%20contest%20ends"><span class="news-date">2003-09-02: </span><span class="news-headline">Logo contest ends</span></a><?php gray_line(); ?>
			<p>The Logo contest held by Fink, announced <a href="<?php print $root; ?>logo.php">here</a>,
ended yesterday. With over 80 different proposals from countries all over the world we 
consider the contest a big success.  
In the next couple of days all the submitted entries will be put on-line in a publicly accessible gallery and more details on the participants shall be published. For those who are 
curious and cannot wait may have a look at an incomplete <a href="http://nour.net/logo/incomplete.html">preview</a>.</p>
			<p>Fink is proud to be part of such a supportive community and would like to thank those who submitted entries and <a href="http://www.macwelt.de">MacWelt</a> for their continued support.
</p>
		<a name="2003-08-18%20Source%20files%20from%20ftp.gnu.org"><span class="news-date">2003-08-18: </span><span class="news-headline">Source files from ftp.gnu.org</span></a><?php gray_line(); ?>
			<p>As announced in <a href="http://www.cert.org/advisories/CA-2003-21.html">this CERT 
advisory</a>, it has recently been discovered that
the ftp servers for GNU software were compromised back in March, 
although it is not believed that any of the source code housed there
was affected.
</p>
			<p>
Fink relies on MD5 checksums when downloading software, and we have had
no reports of incorrect checksums in Fink packages.  The Free Software
Foundation is in the process of verifying the integrity of all of the
source code distributed from that ftp site.  As of this writing, the source
code for the following Fink packages have not yet been verified:
<code>autoconf2.54</code>,
<code>emacs21</code>,
<code>gprolog</code>,
<code>groff</code>,
<code>guile16</code>,
<code>help2man</code>,
<code>jwhois</code>,
<code>libtool14</code>,
<code>libosip1</code>,
<code>sed</code>,
<code>slib</code>.
It may be difficult to install those packages at present.
</p>
		<a name="2003-06-26%20Developer%20Tools%20Update."><span class="news-date">2003-06-26: </span><span class="news-headline">Developer Tools Update.</span></a><?php gray_line(); ?>
			<p>
				<b>Quick Summary: DO NOT INSTALL THIS UPDATE.</b>
			</p>
			<p>
Apple has released a patch to the December 2002 
Developer Tools which includes gcc 3.3,
their new compiler.
</p>
			<p>
Fink does not yet support compiling with gcc 3.3.  In addition, it is important
not to "mix and match" between compilers:  all C++ code in fink packages
needs to be compiled
with the same compiler.
</p>
			<p>
For this reason, the Fink team recommends that if you update your
Developer Tools with the new patch, you should be careful to run
<code>sudo gcc_select 3</code>
prior to any "fink build" or "fink install" commands.
</p>
			<p><b>Update 30 June 2003:</b> A 
<a href="http://sourceforge.net/mailarchive/forum.php?thread_id=2680195&amp;forum_id=2056">problem
has now been detected</a> with
the new assembler program which the update installs, which may prevent
certain Fink packages from being compiled at all if you install this
update.  
</p>
			<p><b>Generally, Fortran programs will break if you install the update;
the breakage does not stop by simply switching back to gcc 3.1.</b>
The Fink team is working on a workaround for this problem, but until it
is ready, if you need Fortran-related programs you should not install
the update.</p>
		<a name="2003-06-20%20Darwin%20packaging%20groups%20to%20coordinate%20efforts."><span class="news-date">2003-06-20: </span><span class="news-headline">Darwin packaging groups to coordinate efforts.</span></a><?php gray_line(); ?>
			<p>
The <a href="<?php print $root; ?>">Fink</a>, 
<a href="http://www.gentoo.org">Gentoo</a>, 
and 
<a href="http://opendarwin.org/projects/darwinports/">DarwinPorts</a> 
projects are pleased to announce the formation of  a cooperative development 
alliance forged to facilitate delivery of freely available software to 
Mac OS X.  Under this new alliance, the projects will share information and 
coordinate efforts for porting software to 
Apple's <a href="http://www.apple.com/macosx">Mac OS X</a> 
and <a href="http://www.apple.com/darwin">Darwin</a> operating 
systems.  Members of the alliance will share information using 
the <a href="http://www.metapkg.org">www.metapkg.org</a> Web 
site,  which  will provide a home for this cooperative effort. 
</p>
		<a name="2003-06-16%20Fink%20logo%20contest%20begins."><span class="news-date">2003-06-16: </span><span class="news-headline">Fink logo contest begins.</span></a><?php gray_line(); ?>
			<p>Fink and 
<a href="http://www.macwelt.de/">MacWelt</a> have managed to organize a logo contest.
For the next six weeks everyone is invited to submit their logo creations. 
Fink needs a new face and with your help we might just get one.  We are curious to see what you imagine Fink to be as a graphical representation.
The initial announcement by Macnews is in German, for those of you not capable of reading German a translated version can be found
 <a href="<?php print $root; ?>logo.php">here</a>. 
                </p>
			<p>
Fink and MacWelt hope that many of you will participate as we might just find some prices for the winners. Good luck and.... start drawing.
</p>
		<a name="2003-05-05%20KDE%203.1.1%20Binaries%20Available"><span class="news-date">2003-05-05: </span><span class="news-headline">KDE 3.1.1 Binaries Available</span></a><?php gray_line(); ?>
			<p>KDE 3.1.1 binaries are now available.  Since they
have been released after 0.5.2 came out, you will need to update
your package descriptions by running <code>sudo apt-get update</code>
(or equivalent) before they will be available for installation.
For pointers to the changes and security fixes in this release,
see <a href="http://sourceforge.net/mailarchive/forum.php?thread_id=2068947&amp;forum_id=2022">the
announcement</a>.
</p>
		<a name="2003-04-16%20Virex%20problem%20resolved"><span class="news-date">2003-04-16: </span><span class="news-headline">Virex problem resolved</span></a><?php gray_line(); ?>
			<p>McAfee has released Virex 7.2.1, which no longer
overwrites the main Fink directory <code>/sw</code>.  Fink users should
continue to avoid Virex 7.2.
</p>
			<p>Early reports indicate that upgrading Virex from 7.2 to 7.2.1
still leaves some problems however.  If you upgrade Virex with Fink not
installed, and subsequently
wish to install Fink, you will need to delete the <code>/sw</code>
directory by hand before installing.  And if you upgrade Virex with
Fink already installed, you should immediately run
<b>
fink reinstall openssl-shlibs dlcompat-shlibs curl-ssl-shlibs
</b>
to restore files which the Virex upgrade may have deleted.
</p>
		<a name="2003-04-14%20Fink%200.5.2%20released"><span class="news-date">2003-04-14: </span><span class="news-headline">Fink 0.5.2 released</span></a><?php gray_line(); ?>
			<p>Fink is proud to announce that the Fink binary distribution 0.5.2 is available from the <a href="<?php print $root; ?>download.php">download</a> page.
		With over 190 new binary packages, KDE, KOffice and KDevelop binaries amongst other various improvements this is a recommended download for any new and all existing Fink users.
		The full announcement can be read on the <a href="http://sourceforge.net/mailarchive/forum.php?forum=fink-announce">fink-announce</a> mailing list.
		</p>
			<p>(If you are having trouble upgrading a source installation, consult
<a href="<?php print $root; ?>download/fix-upgrade.php">these
special instructions</a>.)</p>
		<a name="2003-04-09%20Interview%20on%20OSNews.com"><span class="news-date">2003-04-09: </span><span class="news-headline">Interview on OSNews.com</span></a><?php gray_line(); ?>
			<p><a href="http://osnews.com/">OSNews.com</a> today is featuring a
	<a href="http://osnews.com/story.php?news_id=3236">mini-interview</a> with
	one of our project leaders, Max Horn. It contains some rather unusual questions,
	so even if you know Fink fairly well, you might find it informative.
</p>
		<a name="2003-03-29%20KDE%203.1.1%20Final%20In%20Unstable"><span class="news-date">2003-03-29: </span><span class="news-headline">KDE 3.1.1 Final In Unstable</span></a><?php gray_line(); ?>
			<p>KDE 3.1.1 is now in Fink unstable.  The full announcement can be
<a href="http://sourceforge.net/mailarchive/forum.php?thread_id=1898907&amp;forum_id=2022">read here</a>.
	Improvements over 3.1 final include many upstream bugfixes,
	build improvements, koffice bugfixes, kmail crash fixes,
	and other miscellaneous updates.  Binary packages will not
	be available in time for the next binary distribution, but
	will be released as an update shortly thereafter.
</p>
		<a name="2003-03-18%20KDE%203.1%20Final%20In%20Stable"><span class="news-date">2003-03-18: </span><span class="news-headline">KDE 3.1 Final In Stable</span></a><?php gray_line(); ?>
			<p>KDE 3.1 is now in Fink stable.  The full announcement can be
<a href="http://sourceforge.net/mailarchive/forum.php?thread_id=1833081&amp;forum_id=2022">read here</a>.
	Improvements over 3.1 beta1 include an updated audio driver, 
	faster startup times, cleaned up fink package info, support
	for Apple X11's window manager, and many bugfixes.  Binary
	packages will be available in the next binary distribution
	release.
</p>
		<a name="2003-03-17%20Apple%20X11%20Beta%203%20Released"><span class="news-date">2003-03-17: </span><span class="news-headline">Apple X11 Beta 3 Released</span></a><?php gray_line(); ?>
			<p><a href="http://www.apple.com/macosx/x11/download/">A new
version of Apple's X11 for Mac OS X is available</a>.  It fixes a number
of bugs including a few that can cause problems with building Fink packages.
It is recommended that all Fink users who are using Apple X11 upgrade.
A new version of the system-xfree86 package has been released to unstable
that takes the new Apple X11 into account.  It should be appearing in stable
shortly.
</p>
		<a name="2003-02-14%20New%20version%20of%20FinkCommander"><span class="news-date">2003-02-14: </span><span class="news-headline">New version of FinkCommander</span></a><?php gray_line(); ?>
			<p><a href="http://finkcommander.sourceforge.net/">FinkCommander</a>,
 a separate project which provides a GUI for Fink,
has released version 0.5.0, their first Jaguar-only version.  The new
version includes a package browser which allows you to view the files 
that Fink has installed for a particular package, as well as <a href="http://finkcommander.sourceforge.net/pages/VERSION_HISTORY.html">many 
other improvements.</a></p>
		<a name="2003-02-07%20DO%20NOT%20INSTALL%20VIREX%207.2"><span class="news-date">2003-02-07: </span><span class="news-headline">DO NOT INSTALL VIREX 7.2</span></a><?php gray_line(); ?>
			<p>
        The Virex 7.2 package, currently being distributed free to all .Mac 
members, has a serious conflict with Fink.  <b>Fink users should not install 
Virex 7.2 under any circumstances.</b>
  Installing it after Fink is installed
will damage your Fink installation; installing it prior to Fink will make
it impossible to install Fink without damaging Virex.
</p>
			<p>
This bug has been <a href="http://forums.mcafeehelp.com/viewtopic.php?t=6318&amp;sid=33d08f3c34f7e09dc546aa1ddf1c299c">reported 
to Virex's manufacturer.</a>  We will keep the
Fink community informed about the situation as it develops.
</p>
		<a name="2003-01-26%20Apple%20X11%20Library%20Warning"><span class="news-date">2003-01-26: </span><span class="news-headline">Apple X11 Library Warning</span></a><?php gray_line(); ?>
			<p>
	While Apple's X11 works just fine with existing binaries, it
has a bug in the install name of the libraries that can cause some
software to build incorrectly, and will break forward-compatibility
with future X11 releases.
</p>
			<p>
	Ben Hines has created a script (available <a href="http://fink.cvs.sourceforge.net/*checkout*/fink/fix-fink/install_name_fix.pl">here</a>) that you can use
that will fix the install_name entries in Apple's X11 libraries,
but it will not repair software you have already built against the
broken libraries.
</p>
			<p><b>Update 11 February 2003:</b> This script is not needed with 
version 0.2 of Apple's X11.app which was released yesterday.
</p>
		<a name="2003-01-21%20Gnome,%20libpng,%20and%20the%20unstable%20tree"><span class="news-date">2003-01-21: </span><span class="news-headline">Gnome, libpng, and the unstable tree</span></a><?php gray_line(); ?>
			<p>
        A problem was uncovered today concerning the versions of imlib,
 libpng, and gnome in Fink's unstable tree.  The Fink team is hard at
 work addressing this problem.  As a workaround, users can downgrade
their imlib package to the stable version, "<code>fink install
 imlib-1.9.10-9</code>", until the problem is fixed.
</p>
			<p>
   Many Fink users may be using Fink's unstable tree without being
fully aware of what this entails.  For a few months in the fall,
enabling the unstable tree was the only way to gain access to
 10.2-compatible versions of Fink packages.  
<b>That is no longer the case.</b>
Fink users who do not wish to help the Fink team with testing should
disable their unstable tree.  To do this, edit the file
<code>/sw/etc/fink.conf</code> and remove the items
 <code>unstable/main</code> and <code>unstable/crypto</code> from the
 <code>Trees</code> line.
	</p>
			<p>The Fink team appreciates those users who are willing to stick with
the unstable tree, even when there are problems like today's, and provide
the team with prompt feedback.  This is a community effort and we
appreciate your participation.
</p>
		<a name="2003-01-17%20Anonymous%20CVS%20issues%20resolved"><span class="news-date">2003-01-17: </span><span class="news-headline">Anonymous CVS issues resolved</span></a><?php gray_line(); ?>
			<p>
	UPDATE: We are pleased to announce that SourceForge have resolved the issues with anonymous CVS access, and the selfupdate-cvs command should work again. Further details on the downtime can be found on the SourceForge.net <a href="http://sourceforge.net/docman/display_doc.php?docid=2352&amp;group_id=1#cvs">site status</a> page.
	</p>
		<a name="2003-01-07%20Fink%20Interaction%20with%20Apple's%20X11%20Public%20Beta"><span class="news-date">2003-01-07: </span><span class="news-headline">Fink Interaction with Apple's X11 Public Beta</span></a><?php gray_line(); ?>
			<p>
	Fink works just fine with the <a href="http://www.apple.com/macosx/x11/">public beta X11 release</a>
	with some caveats.  Please read <a href="<?php print $root; ?>doc/x11/inst-xfree86.php#apple-binary">the newly added Apple X11</a> section of the Fink X11 Documentation for details.</p>
		<a name="2003-01-07%20RSS%20Feeds%20available"><span class="news-date">2003-01-07: </span><span class="news-headline">RSS Feeds available</span></a><?php gray_line(); ?>
			<p>
	Thanks to Benjamin Reed, it is now possible to receive RSS 1.0 Feeds that contain a lot of valuable information.

<a href="<?php print $root; ?>news/rdf/fink-stable.rdf">fink-stable.rdf</a> will tell you about the changes and additions in the stable tree, reflecting packages which have been added or modified.
</p>
			<p><a href="<?php print $root; ?>news/rdf/fink-unstable.rdf">fink-unstable.rdf</a> will tell you about changes or additions to the unstable tree and is most likely the most active RSS feed.
The above Feeds are automatically updated every 60 minutes to make sure that they keep you all on top of the latest development.
</p>
			<p><a href="<?php print $root; ?>news/news.rdf">news.rdf</a> This feed reflects the contents of the Fink News Page. The Feed is updated as soon as a new item is added on the Website.
</p>
		<a name="2002-12-22%20New%20Upgrade%20Matrix"><span class="news-date">2002-12-22: </span><span class="news-headline">New Upgrade Matrix</span></a><?php gray_line(); ?>
			<p>A new <a href="<?php print $root; ?>download/upgrade.php">Upgrade Matrix</a> is
  now available, for use in upgrading earlier versions of Fink to the
  current version, under either OS X 10.1 or OS X 10.2.  Users upgrading
  under 10.1 will be brought to Fink version 0.4.1a, while users
  upgrading under 10.2 will be brought to Fink version 0.5.0a.
  </p>
		<a name="2002-12-11%20New%20Upgrade%20Matrix%20coming"><span class="news-date">2002-12-11: </span><span class="news-headline">New Upgrade Matrix coming</span></a><?php gray_line(); ?>
			<p>The Fink team is aware of the shortcomings of the current
  <b>Upgrade Matrix</b> page, which is inadequate for upgrading
to Fink 0.5.0a.  Please be patient as we construct
  a new version of that page, whose existence will be announced
  here.  In the meantime, some of you may wish to use the <a href="<?php print $root; ?>news/jaguar.php">test version of the Jaguar updater</a> which was
made available on 2002-09-08.
  </p>
		<a name="2002-12-09%20Fink%200.5.0a%20Released"><span class="news-date">2002-12-09: </span><span class="news-headline">Fink 0.5.0a Released</span></a><?php gray_line(); ?>
			<p>
    Fink 0.5.0a for Mac OS X 10.2 is now complete. (Note: 0.5.0a is a final
    release, and replaces 0.5.0 which was never officially released.) This
    release includes over 700 
    binary packages for OS X 10.2 as well as over 1800 source packages of
    all kinds. 
  </p>
			<p>
      The source release and the binary installer are available now, as well as all binary packages. For information about upgrading, visit the <a href="<?php print $root; ?>download/upgrade.php">Upgrade Matrix</a>. 
  </p>
			<p>
  This release is for Mac OS X 10.2 only. 10.1 users should use Fink 0.4.1.
  </p>
		<a name="2002-11-11%20Update%20XFree86%20for%20use%20with%20OS%20X%2010.2.2"><span class="news-date">2002-11-11: </span><span class="news-headline">Update XFree86 for use with OS X 10.2.2</span></a><?php gray_line(); ?>
			<p>
Users should update their XFree86 installations to version 4.2.1.1
for use with OS X 10.2.2.  If you are using system-xfree86, you
can get the new version from the <a href="https://sourceforge.net/project/shownotes.php?release_id=118483">XonX 
project</a>.  If you are using Fink's
xfree86 packages, you should update to xfree86-base-4.2.1.1-1 and
xfree86-rootless-4.2.1.1-1.  These packages are recent additions to
the 10.2/unstable tree; to gain access to them, you may need to run 
"fink selfupdate-cvs" and/or enable the unstable tree
  </p>
		<a name="2002-10-30%20Don't%20reuse%20binary%20installer"><span class="news-date">2002-10-30: </span><span class="news-headline">Don't reuse binary installer</span></a><?php gray_line(); ?>
			<p>
  Users are cautioned to use the binary installer for Fink 0.4.1 <b>only
once</b> on a given machine.  Due to an apparent bug in Apple's
Installer.app program, attempting a second installation on the same
machine can result in permissions being altered in the machine's root
directory, in some cases leaving the machine in a non-bootable state.
</p>
			<p> If Installer.app presents you with an "Upgrade" button rather
than an "Install" button when installing Fink 0.4.1, <b>do not proceed
any further!</b> </p>
			<p>A new version of the binary installer for Fink 0.4.1 became available
on November 5.  The new version avoids
the problem of the machine not booting, but even with the new version,
users are advised to only "Install",
not "Upgrade."  (You can recognize the new version by its filesize of
12582912 bytes, while the old version had a filesize of 10541112 bytes.)
</p>
		<a name="2002-09-28%20Fink%200.4.1%20released"><span class="news-date">2002-09-28: </span><span class="news-headline">Fink 0.4.1 released</span></a><?php gray_line(); ?>
			<p>
      The source release and the binary installer are available now, as well as all binary packages. For information about upgrading, visit the <a href="<?php print $root; ?>download/upgrade.php">Upgrade Matrix</a>. 
    </p>
			<p>
    This is the <b>last release for Mac OS X 10.1</b>. Future versions of Fink will <b>not</b> officially support Mac OS X 10.1 anymore, we are gearing all our efforts towards 10.2.
    </p>
			<p>
    At the same time, this release is not meant for Mac OS X 10.2. Fink 0.5.0. which is targeted for October, will be geared towards 10.2. In the meantime refer to the news item below on how to upgrade Fink for 10.2.
    </p>
		<a name="2002-09-27%20Possible%20conflicts%20with%20anti-virus%20software"><span class="news-date">2002-09-27: </span><span class="news-headline">Possible conflicts with anti-virus software</span></a><?php gray_line(); ?>
			<p> A number of recent reports on the 
<a href="http://www.mail-archive.com/fink-users@lists.sourceforge.net/">fink-users
mailing list</a> have indicated problems (including kernel panics and
infinite hangs during patching) when using Fink to compile packages while
anti-virus software is installed.  You may need to switch off any anti-virus
software before using Fink.
</p>
		<a name="2002-09-08%20Test%20version%20of%20Jaguar%20updater%20available"><span class="news-date">2002-09-08: </span><span class="news-headline">Test version of Jaguar updater available</span></a><?php gray_line(); ?>
			<p>
			A test version of the 10.2 updater for Fink is now available. The update process is somewhat complicated at the moment, but is explained in <a href="<?php print $root; ?>news/jaguar.php">step-by-step instructions for updating</a>. We also have separate <a href="<?php print $root; ?>news/jag-bootstrap.php">instructions to install Fink from scratch on 10.2</a>. 
		</p>
			<p>
			At the moment, approximately 800 out of 1150 Fink packages have been made ready for 10.2. However, virtually all of these packages are still being tested and have not yet been moved to the "stable" tree in the 10.2 section; moreover, binaries for 10.2 packages are not yet available. 
		</p>
		<a name="2002-08-20%20Mac%20OS%20X%2010.2%20/%20Jaguar"><span class="news-date">2002-08-20: </span><span class="news-headline">Mac OS X 10.2 / Jaguar</span></a><?php gray_line(); ?>
			<p>
      During the last few weeks, we got a lot of emails asking whether Fink will work Mac OS X 10.2.
    </p>
			<p>
      The answer is: Yes, we will support 10.2. However, due to some
      major changes in this new OS version, we had to make a lot of adjustments both
      to the Fink tool itself and to many packages. The current binary distribution,
      0.4.0a, will only work partially on 10.2. We are working on an upgrade guide,
      as well as a new Fink release, to support 10.2.
    </p>
			<p>
	 If you upgrade your system to 10.2 before the official Fink update for 10.2 is ready,
	 many Fink packages built on 10.1 are going to work fine, but others need to be rebuilt.
	 Some packages need special changes to build on 10.2. Adding "unstable/main" to your
	 list of trees in /sw/etc/fink.conf (see also the <a href="<?php print $root; ?>faq/usage-fink.php#unstable">FAQ</a>)
	 will give you access to the latest versions of packages, many of which include important
	 fixes for 10.2.
	</p>
			<p>
     As of now, please do not email us asking about 10.2 support. If you can't wait,
     consult the <a href="<?php print $root; ?>lists/index.php">mailing list archives</a> instead.
    </p>
		<a name="2002-08-06%20Fink%20package%20manager%200.10.0%20released"><span class="news-date">2002-08-06: </span><span class="news-headline">Fink package manager 0.10.0 released</span></a><?php gray_line(); ?>
			<p>
      Yesterday version 0.10.0 of the Fink package manager was released to the unstable tree, along with version 1.6 of the base-files package. All Fink users which are using the unstable tree are recommended to update to this version. The easiest way to do so usually is to run 'fink selfupdate-cvs' which will automatically take care of updating these essential packages.
    </p>
			<p>
      Please report any problems you encounter with this version via our bug tracker.
    </p>
			<p>
      An overview of what changed since version 0.9.12 can be found <a href="http://sourceforge.net/project/shownotes.php?release_id=103599">here.</a>
    </p>
		<a name="2002-07-17%20Binary%20distribution%20moves"><span class="news-date">2002-07-17: </span><span class="news-headline">Binary distribution moves</span></a><?php gray_line(); ?>
			<p>
      The Fink binary distribution has moved to a new location. All Fink users wishing to use the binary distribution will have to make sure they are using the new binary distribution (many of you already are using it, maybe without even noticing). If you want to know how to switch and why we do this, <a href="<?php print $root; ?>news/bindist_move.php">read more here.</a>.
    </p>
		<a name="2002-05-29%20KDE%20support"><span class="news-date">2002-05-29: </span><span class="news-headline">KDE support</span></a><?php gray_line(); ?>
			<p>
      Fink <a href="<?php print $root; ?>news/kde.php">announces support</a> for <a href="http://www.kde.org">KDE</a>. Packages are available in the unstable distribution, as well as pre-built binaries. For more information on installing and running it, see the full <a href="<?php print $root; ?>news/kde.php">KDE Support In Fink</a> announcement. 
    </p>
		<a name="2002-05-03%20Bug%20in%20passwd%20package"><span class="news-date">2002-05-03: </span><span class="news-headline">Bug in passwd package</span></a><?php gray_line(); ?>
			<p>
      All Fink users are urged to update their <b> passwd </b> package to version 20020329 or newer. Older versions of the <b> passwd </b> package are affected by a bug which could lead to the loss of all data on your hard disk if you remove system users created by Fink manually from the system via System Preferences. (Removing them via the NetInfo tool is safe.) You can check the version of your passwd package by entering <b> dpkg -s passwd</b>. If your version is outdated, you can update to the current one in two ways: 
    </p>
			<ul>
				<li>
        Via the binary distribution. First make sure you have the latest list of packages available: <b> sudo apt-get update</b>. Then you can perform the actual update: <b> sudo apt-get install passwd</b>. 
      </li>
				<li>
        Via the source distribution. First make sure you have the latest set of package descriptions: <b> fink selfupdate-cvs</b>. Then, update the passwd package: <b> fink update passwd</b> 
      </li>
			</ul>
			<p>
      See <a href="<?php print $root; ?>faq/usage-general.php#passwd">Fink's FAQ, question 6.3,</a> for more information about the passwd package. 
    </p>
		<a name="2002-04-18%20Fink%200.4.0%20released"><span class="news-date">2002-04-18: </span><span class="news-headline">Fink 0.4.0 released</span></a><?php gray_line(); ?>
			<p>
      The source release and the binary installer are available now, as well as many of the binary packages. As usual, the rest of the binaries will be made available during the next few days. For information about upgrading, visit the <a href="<?php print $root; ?>download/upgrade.php">Upgrade Matrix</a>. 
    </p>
		<a name="2002-01-16%20Fink%200.3.2a%20is%20released"><span class="news-date">2002-01-16: </span><span class="news-headline">Fink 0.3.2a is released</span></a><?php gray_line(); ?>
			<p>
      The source release and the binary installer are available now, the bulk of binary packages will be built and made available gradually over the next few days as usual. For information about upgrading, visit the <a href="<?php print $root; ?>download/upgrade.php">Upgrade Matrix</a> and the <a href="<?php print $root; ?>doc/users-guide/index.php">User's Guide</a>. 
    </p>
		<a name="2002-01-09%20Fink%200.3.2%20is%20released"><span class="news-date">2002-01-09: </span><span class="news-headline">Fink 0.3.2 is released</span></a><?php gray_line(); ?>
			<p>
      The source release is available now, the binary installer will follow soon. The bulk of binary packages will be built and made available gradually over the next few days as usual. For information about upgrading, visit the <a href="<?php print $root; ?>download/upgrade.php">Upgrade Matrix</a> and the <a href="<?php print $root; ?>doc/users-guide/index.php">User's Guide</a>. 
    </p>
		<a name="2002-01-08%20Binary%20distribution%20lost"><span class="news-date">2002-01-08: </span><span class="news-headline">Binary distribution lost</span></a><?php gray_line(); ?>
			<p>
      Due to a faulty script, the whole fink website, including our binary distro, has been wiped! This means you can't use the binary distro right now. I am working as quick as I can on uploading the new Fink 0.3.2 binary distro. In addition, the package database is not working for now. Please bear with us. 
    </p>
		<a name="2001-12-16%20Yes,%20we%20are%20alive!"><span class="news-date">2001-12-16: </span><span class="news-headline">Yes, we are alive!</span></a><?php gray_line(); ?>
			<p>
      Despite the fact that no news were listed here for over a month, the fink project was quite busy in the recent time. Sadly, our leader, Christoph, left us last month. But despite this, development is going on actively. 
    </p>
			<p>
      Version 0.9.5 of the Fink package manager was recently released, and many updated and new packages are in our <a href="<?php print $root; ?>doc/cvsaccess/index.php">CVS</a>. 
    </p>
		<a name="2001-11-04%20Fink%200.3.1%20is%20released"><span class="news-date">2001-11-04: </span><span class="news-headline">Fink 0.3.1 is released</span></a><?php gray_line(); ?>
			<p>
      The source release and the binary installer are available now, the bulk of binary packages will be built and made available gradually over the next few days as usual. For information about upgrading, visit the <a href="<?php print $root; ?>download/upgrade.php">Upgrade Matrix</a> and the recently updated <a href="<?php print $root; ?>doc/users-guide/index.php">User's Guide</a>. 
    </p>
		<a name="2001-11-02%20Running%20X11%20document%20updated"><span class="news-date">2001-11-02: </span><span class="news-headline">Running X11 document updated</span></a><?php gray_line(); ?>
			<p>
      The <a href="<?php print $root; ?>doc/x11/index.php">Running X11</a> document has had a significant update. The troubleshooting section now has a comprehensive list of XDarwin error messages with explanations. 
    </p>
		<a name="2001-10-31"><span class="news-date">2001-10-31</span></a><?php gray_line(); ?>
			<p><a href="http://www.macosxhints.com/">MacOSXHints</a> has
      posted an <a href="http://homepage.mac.com/rgriff/xdarwin.html">
      installation guide</a> for XFree86, Fink, Window Maker and The GIMP.
    </p>
		<a name="2001-10-23%20forked.net"><span class="news-date">2001-10-23: </span><span class="news-headline">forked.net</span></a><?php gray_line(); ?>
			<p>
      In addition to ripping off Fink packages and breaking the GPL, the ports
      collection at <a href="http://macosx.forked.net/">forked.net
      </a> has just gone commercial. More details soon. 
    </p>
		<a name="2001-10-03%20Binary%20distribution%20complete"><span class="news-date">2001-10-03: </span><span class="news-headline">Binary distribution complete</span></a><?php gray_line(); ?>
			<p>The binary distribution update is now complete.
    The <a href="<?php print $root; ?>news/puma.php">10.1 compatibility report</a> has been
    updated to reflect the fixes in Fink 0.3.0.
    </p>
		<a name="2001-09-30%20Fink%200.3.0%20is%20released"><span class="news-date">2001-09-30: </span><span class="news-headline">Fink 0.3.0 is released</span></a><?php gray_line(); ?>
			<p>The source release, the binary installer and a binary upgrade kit for
    broken-by-10.1 installations are available in the new <a href="<?php print $root; ?>download/index.php">download section</a>.
    The bulk of the binary distribution will be updated gradually over the
    next few days, as usual.
    </p>
		<a name="2001-09-26%20Mac%20OS%20X%2010.1%20released"><span class="news-date">2001-09-26: </span><span class="news-headline">Mac OS X 10.1 released</span></a><?php gray_line(); ?>
			<p>Mac OS X 10.1 has been officially released yesterday. Before you use Fink
    on 10.1, check out the <a href="<?php print $root; ?>news/puma.php">compatibility report</a>.
    <b>Update:</b> The apt-get issue has been solved, expect a new release
    this weekend.
    </p>
		<a name="2001-09-07%20Binary%20distribution%20fully%20updated"><span class="news-date">2001-09-07: </span><span class="news-headline">Binary distribution fully updated</span></a><?php gray_line(); ?>
			<p>The binary distribution is now fully updated to
    Fink 0.2.6. Enjoy.
    </p>
		<a name="2001-09-04%20Fink%200.2.6%20is%20released"><span class="news-date">2001-09-04: </span><span class="news-headline">Fink 0.2.6 is released</span></a><?php gray_line(); ?>
			<p>Fink 0.2.6 is released, fixing several bootstrap problems. The source
    release is available from the <a href="<?php print $root; ?>download.php">download page</a>
    or via the 'fink selfupdate' command. The binary release will follow soon.
    </p>
		<a name="2001-09-02%20Fink%20IRC%20Channel"><span class="news-date">2001-09-02: </span><span class="news-headline">Fink IRC Channel</span></a><?php gray_line(); ?>
			<p>Chat with the developers and other users! We now have a #fink channel
    on the <a href="http://openprojects.net/">openprojects.net</a>
    IRC network.
    </p>
		<a name="2001-08-25%20Fink%200.2.5%20was%20released"><span class="news-date">2001-08-25: </span><span class="news-headline">Fink 0.2.5 was released</span></a><?php gray_line(); ?>
			<p>The source release is
    available from the <a href="<?php print $root; ?>download.php">download page</a>, the
    binary release will follow soon.
    </p>
		<a name="2001-08-23%20OpenOSX.com"><span class="news-date">2001-08-23: </span><span class="news-headline">OpenOSX.com</span></a><?php gray_line(); ?>
			<p>OpenOSX.com refuses to give fair credit after using Fink to create GIMP
    CDs. Read Christoph's <a href="<?php print $root; ?>pr/openosx.php">public statement</a>
    on the issue.
    </p>
		<a name="2001-08-22%20New%20help%20page"><span class="news-date">2001-08-22: </span><span class="news-headline">New help page</span></a><?php gray_line(); ?>
			<p>The new <a href="<?php print $root; ?>help/index.php">help page</a> lists various ways
    to get help using Fink. It also lists some ideas how you can give back to
    the project.
    </p>
		<a name="2001-08-13%20Porting%20tips%20and%20X11%20document%20updated"><span class="news-date">2001-08-13: </span><span class="news-headline">Porting tips and X11 document updated</span></a><?php gray_line(); ?>
			<p>The <a href="<?php print $root; ?>doc/porting/index.php">porting tips</a> document has
    a new chapter on shared libraries and modules. The <a href="<?php print $root; ?>doc/x11/index.php">X11</a> document was also updated recently.
    </p>
		<a name="2001-08-01%20Version%200.2.4a%20is%20released"><span class="news-date">2001-08-01: </span><span class="news-headline">Version 0.2.4a is released</span></a><?php gray_line(); ?>
			<p>There was a bootstrapping problem in Fink 0.2.4. It is fixed in Fink
    0.2.4a. You only need this if you're doing a first time install, updates
    are not affected.
    </p>
		<a name="2001-08-01%20Version%200.2.4%20is%20released"><span class="news-date">2001-08-01: </span><span class="news-headline">Version 0.2.4 is released</span></a><?php gray_line(); ?>
			<p>Version 0.2.4 is released. Get it from the <a href="<?php print $root; ?>download.php">download page</a>. Some highlights: The GIMP
    1.2.2, sound playback and recording via esound (thanks to Shawn Hsiao
    and Masanori Sekino for the CoreAudio patch), xmms 1.2.5.
    </p>
		<a name="2001-07-19%20New%20document:%20X11%20on%20Darwin%20and%20Mac%20OS%20X"><span class="news-date">2001-07-19: </span><span class="news-headline">New document: X11 on Darwin and Mac OS X</span></a><?php gray_line(); ?>
			<p>A comprehensive document about <a href="<?php print $root; ?>doc/x11/index.php">X11 on
    Darwin and Mac OS X</a> is now available. It was written to be useful
    for anyone, not just Fink users.
    </p>
		<a name="2001-07-13%20Package%20database%20now%20online"><span class="news-date">2001-07-13: </span><span class="news-headline">Package database now online</span></a><?php gray_line(); ?>
			<p>A prototype of the <a href="http://pdb.finkproject.org/pdb/index.php">package database</a>
    is now online.
    </p>
		<a name="2001-07-09%20Version%200.2.3%20is%20released"><span class="news-date">2001-07-09: </span><span class="news-headline">Version 0.2.3 is released</span></a><?php gray_line(); ?>
			<p>Get it from the <a href="<?php print $root; ?>download.php">download page</a>. This
    version fixes the dpkg download problems many of you were having.
    </p>
		<a name="2001-07-03%20Packaging%20Manual%20updated"><span class="news-date">2001-07-03: </span><span class="news-headline">Packaging Manual updated</span></a><?php gray_line(); ?>
			<p>The <a href="<?php print $root; ?>doc/packaging/index.php">Packaging Manual</a> was
    updated to include all recently added fields.
    </p>
		<a name="2001-06-30%20Web%20site%20restructuring"><span class="news-date">2001-06-30: </span><span class="news-headline">Web site restructuring</span></a><?php gray_line(); ?>
			<p>A major restructuring of the web site has started. The non-Fink-specific
    documents were removed because I don't have the time to maintain them. All
    documentation will be consolidated in the new <a href="<?php print $root; ?>doc/index.php">
    Documentation section</a>.
    </p>
		<a name="2001-06-24%20Version%200.2.2%20is%20released"><span class="news-date">2001-06-24: </span><span class="news-headline">Version 0.2.2 is released</span></a><?php gray_line(); ?>
			<p>Version 0.2.2 is finally released. Get it from the <a href="<?php print $root; ?>download.php">download page</a>. Be sure to read the notes
    about X11 in the INSTALL file.
    </p>
		<a name="2001-05-19%20CVS%20instructions%20updated"><span class="news-date">2001-05-19: </span><span class="news-headline">CVS instructions updated</span></a><?php gray_line(); ?>
			<p>The <a href="<?php print $root; ?>doc/cvsaccess/index.php">CVS instructions</a> have
    been updated for Fink 0.2.x.
    </p>
		<a name="2001-04-26%20FAQ%20online"><span class="news-date">2001-04-26: </span><span class="news-headline">FAQ online</span></a><?php gray_line(); ?>
			<p>
      This site now sports a <a href="<?php print $root; ?>faq/index.php">FAQ section</a>. Not much content yet, but it's here to stay. 
    </p>
		<a name="2001-04-20%20Version%200.2.0%20is%20released"><span class="news-date">2001-04-20: </span><span class="news-headline">Version 0.2.0 is released</span></a><?php gray_line(); ?>
			<p>
      It now uses dpkg for binary package management. You can get it from the download page, but be aware that this version is not yet as stable as the 0.1.x series. 
    </p>
		<a name="2001-04-15%20Released%20version%200.1.8a"><span class="news-date">2001-04-15: </span><span class="news-headline">Released version 0.1.8a</span></a><?php gray_line(); ?>
			<p>
      Released version 0.1.8a, fixing install problems. You only need this if you downloaded 0.1.8 and had install problems ("stow not found"). Get it from the <a href="<?php print $root; ?>download.php">download page</a>. 
    </p>
		<a name="2001-04-14%20Version%200.1.8%20is%20out"><span class="news-date">2001-04-14: </span><span class="news-headline">Version 0.1.8 is out</span></a><?php gray_line(); ?>
			<p>
      Get it from the <a href="<?php print $root; ?>download.php">download page</a>. 
    </p>
		<a name="2001-03-30%20Porting%20notes%20updated"><span class="news-date">2001-03-30: </span><span class="news-headline">Porting notes updated</span></a><?php gray_line(); ?>
			<p>
      The <a href="<?php print $root; ?>doc/porting/index.php">porting notes</a> have been updated with information on Mac OS X Final. 
    </p>
		<a name="2001-03-30%20Version%200.1.7%20is%20out!"><span class="news-date">2001-03-30: </span><span class="news-headline">Version 0.1.7 is out!</span></a><?php gray_line(); ?>
			<p>
      Get it from the <a href="<?php print $root; ?>download.php">download page</a>. 
    </p>
		<a name="2001-03-24%20Mac%20OS%20X%20is%20released!"><span class="news-date">2001-03-24: </span><span class="news-headline">Mac OS X is released!</span></a><?php gray_line(); ?>
			<p>
      Expect Fink packages to be adapted to the final release within the next one or two weeks. 
    </p>
		<a name="2001-03-15%20Libtool%20page%20updated"><span class="news-date">2001-03-15: </span><span class="news-headline">Libtool page updated</span></a><?php gray_line(); ?>
			<p>
      Updated the <a href="<?php print $root; ?>doc/porting/libtool.php">libtool page</a> with a revised patch that does full shared library versioning. 
    </p>
		<a name="2001-03-08%20Version%200.1.6%20is%20out"><span class="news-date">2001-03-08: </span><span class="news-headline">Version 0.1.6 is out</span></a><?php gray_line(); ?>
			<p>
      Get it from the <a href="<?php print $root; ?>download.php">download page</a>. 
    </p>
		

<?php include_once "footer.inc"; ?>
