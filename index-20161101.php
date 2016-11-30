<!DOCTYPE html>
<html lang="ja">
<head>
	<title>GakuNinポータル</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache, max-age=0, must-revalidate, no-store">
	<meta http-equiv="cleartype" content="on">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">

	<meta name="Author" content="Osamu HASEGAWA">
	<meta name="generator" content="coda2">
	<meta name="description" content="信州大学 SPサイト">
	<meta name="Keywords" content="eラーニング, eALPS, 信州大学, Shinshu University">
	<meta name="Robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="http://www.ealps.shinshu-u.ac.jp/shibboleth/favicon.ico">
	<link rel="icon" href="http://www.ealps.shinshu-u.ac.jp/shibboleth/favicon.ico" type="image/vnd.microsoft.icon">
	
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-override.css" rel="stylesheet" type="text/css" />
	<link href="css/common.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
	
	<!--[if lte IE 9]>
		<script type="text/javascript" src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<style>
		article,aside,dialog,figure,footer,header,hgroup,menu,nav,section {
			display: block;
		}
	</style>
	
</head>

<body>

	<div class="container">
				
		<header>
			<h1>GakuNin</h1>
		</header>

		<section class="well">
			<h1>GakuNinポータル</h1>
<!--
				<div class="alert alert-danger hidden-xs" role="alert">
					<section>
						<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					認証システムの障害により，2015/09/30 の午後より，学外からのアクセスにおいて認証に失敗するという問題が発生しております．<br />
					現在，復旧作業を行っておりますが，復旧は 2015/10/06 頃になる見込みです．<br />
					ご不便をおかけしまして，申し訳ありませんが，もうしばらく，お待ち下さい．
					</section>
				</div>
-->
			
			<div id="gakunin" class="tab-pane fade in">
				<p>
					<a href="https://www.gakunin.jp/" target="_blank">学術認証フェデレーション「GakuNin」</a>
					より以下のwebサービスがご利用できます．各webサービスについては，それぞれの利用規約を遵守してご利用ください．詳しくは，各図書館にお問い合わせください．また，ご利用する際は，必ずACSUにログインした状態で，アクセスして下さい．
				</p>
				<nav class="well">
					<div>
						<dl class="dl-horizontal">
							<a href="http://ci.nii.ac.jp/" target="_blank">
								<dt class="logo cinii-logo">
									CiNii Articles（国立情報学研究所）
								</dt>
							</a>
							<dd>
								<a href="http://ci.nii.ac.jp/" target="_blank">
									<p>CiNii Articles（国立情報学研究所）</p>
								</a>
								論文や図書・雑誌などの学術情報が検索できるデータベースサービスです．日本の学術論文を中心に，本文や引用文献へのナビゲーション機能を提供しています．
								利用手順は<a href="http://www.shinshu-u.ac.jp/institution/library/e-information/r-access.html#CiNii" target="_blank">附属図書館ホームページ</a>をご覧ください．
							</dd>
						</dl>
					</div>
					
					<div>
						<dl class="dl-horizontal">
							<a href="http://japanknowledge.com/library/" target="_blank">
								<dt class="logo japanknowledge-logo">
									ジャパンナレッジLib（ネットアドバンス社）
								</dt>
							</a>
							<dd>
								<a href="http://japanknowledge.com/library/" target="_blank">
									<p>ジャパンナレッジLib（ネットアドバンス社）</p>
								</a>
								日本大百科全書（ニッポニカ）」、「日本国語大辞典」、「現代用語の基礎知識」等百科事典や辞書類のデータベースです。
								「東洋文庫」や「新編 日本古典文学全集」などの叢書、「週刊エコノミスト」の記事も利用可能です。
								利用手順は<a href="http://www.shinshu-u.ac.jp/institution/library/e-information/r-access.html#JapanK" target="_blank">附属図書館ホームページ</a>をご覧ください．
							</dd>
						</dl>
					</div>
					
					<div>
						<dl class="dl-horizontal">
							<a href="https://elib.maruzen.co.jp/" target="_blank">
								<dt class="logo maruzen-logo">
									Maruzen eBook Library（丸善雄松堂）
								</dt>
							</a>
							<dd>
							    <a href="https://elib.maruzen.co.jp/" target="_blank">
									<p>Maruzen eBook Library（丸善雄松堂）</p>
								</a>
								Maruzen eBook Libraryは日本語学術書を中心とした電子書籍（eBook）を提供するプラットフォームです。
書名や著者だけでなく全文検索も可能になっており、ページごとにPDFファイルをダウンロードして印刷することもできます。
								利用手順は<a href="http://www.shinshu-u.ac.jp/institution/library/e-information/r-access.html#MaruzeneB" target="_blank">附属図書館ホームページ</a>をご覧ください．
							</dd>
						</dl>
					</div>
					
					<div>
						<dl class="dl-horizontal">
							<a href="http://reo.nii.ac.jp/hss" target="_blank">
								<dt class="logo niileo-logo">
									NII-REO 人文社会科学系コレクション（国立情報学研究所）
								</dt>
							</a>
							<dd>
								<a href="http://reo.nii.ac.jp/hss" target="_blank">
									<p>NII-REO 人文社会科学系コレクション（国立情報学研究所）</p>
								</a>
								NII電子ジャーナルリポジトリは，安定・継続的な電子ジャーナルの提供を目的として，大学図書館コンソーシアムとの連携のもとに，電子ジャーナルコンテンツを保管し，利用提供するものです．コンテンツの利用条件は，各出版社の契約に基づいています．
								利用手順は<a href="http://www.shinshu-u.ac.jp/institution/library/e-information/r-access.html#HCPP" target="_blank">附属図書館ホームページ</a>をご覧ください．
							</dd>
						</dl>
					</div>
					
					<div>
						<dl class="dl-horizontal">
							<a href="http://search.ebscohost.com/login.aspx?authtype=shib" target="_blank">
								<dt class="logo ebscohost-logo">
									EBSCOhost（EBSCO）
								</dt>
							</a>
							<dd>
								<a href="http://search.ebscohost.com/login.aspx?authtype=shib" target="_blank">
									<p>EBSCOhost（EBSCO）</p>
								</a>
								EBSCO社提供の電子ジャーナル・データベースです．
								利用手順は<a href="http://www.shinshu-u.ac.jp/institution/library/e-information/r-access.html#EBSCO" target="_blank">附属図書館ホームページ</a>をご覧ください．
							</dd>
						</dl>
					</div>
					
					<div>
						<dl class="dl-horizontal">
							<a href="http://ovidsp.ovid.com/" target="_blank">
								<dt class="logo ovid-logo">
									OvidSP（Ovid）
								</dt>
							</a>
							<dd>
								<a href="http://ovidsp.ovid.com/" target="_blank">
									<p>OvidSP（Ovid）</p>
								</a>
								Ovid社の電子ジャーナル・データベースです．利用は，医学部所属の方限定です．
								利用手順は<a href="http://www.shinshu-u.ac.jp/institution/library/medicine/ovidsp-remote.html" target="_blank">医学部図書館ホームページ</a>をご覧ください．
							</dd>
						</dl>
					</div>
					
					<div>
						<dl class="dl-horizontal">
							<a href="http://www.sciencedirect.com/" target="_blank">
								<dt class="logo sciverse-sd-logo">
									<p>SciVerse ScienceDirect（Elsevier）</p>
								</dt>
							</a>
							<dd>
								<a href="http://www.sciencedirect.com/" target="_blank">
									<p>SciVerse ScienceDirect（Elsevier）</p>
								</a>
								Elsevier社の電子ジャーナルパッケージです．
								利用手順は<a href="http://www.shinshu-u.ac.jp/institution/library/e-information/r-access.html#SD" target="_blank">附属図書館ホームページ</a>をご覧ください．
							</dd>
						</dl>
					</div>
					
					<div>
						<dl class="dl-horizontal">
							<a href="http://www.springerlink.com/" target="_blank">
								<dt class="logo springer-logo">
									<p>SpringerLink（Springer）</p>
								</dt>
							</a>
							<dd>
								<a href="http://www.springerlink.com/" target="_blank">
									<p>SpringerLink（Springer）</p>
								</a>
								Springer社の電子ジャーナルパッケージです．
								利用手順は<a href="http://www.shinshu-u.ac.jp/institution/library/e-information/r-access.html#SL" target="_blank">附属図書館ホームページ</a>をご覧ください．
							</dd>
						</dl>
					</div>
					
					<div>
						<dl class="dl-horizontal">
							<a href="http://www.webofknowledge.com/" target="_blank">
								<dt class="logo web-of-knowledge-logo">
									<p>Web of Knowledge（Thomson Reuters）</p>
								</dt>
							</a>
							<dd>
								<a href="http://www.webofknowledge.com/" target="_blank">
									<p>Web of Knowledge（Thomson Reuters）</p>
								</a>
								Thomson Reuters社の文献・引用データベースです．
								利用手順は<a href="http://www.shinshu-u.ac.jp/institution/library/e-information/r-access.html#WoK" target="_blank">附属図書館ホームページ</a>をご覧ください．
							</dd>
						</dl>
					</div>
					
					<div>
						<dl class="dl-horizontal">
							<a href="https://www.dreamspark.com/default.aspx" target="_blank">
								<dt class="logo dream-spark-logo">
									<p>DreamSpark（Microsoft）</p>
								</dt>
							</a>
							<dd>
								<a href="https://www.dreamspark.com/default.aspx" target="_blank">
									<p>DreamSpark（Microsoft）</p>
								</a>
								Microsoft社のソフトウェア開発製品、アプリケーションデザイン製品などの無償提供プログラムです．
								Visual Studio や Windows Server，Expression などの製品を無償でダウンロードできます．
								利用手順は<a href="http://www.microsoft.com/japan/academic/dreamspark/default.mspx" target="_blank">Microsoft Academic Portal >> DreamSpark</a>をご覧ください．
							</dd>
						</dl>
					</div>
				</nav>
			</div>
		</section>
		
		<hr>
		
		<footer>
			Copyright &copy; 2009-<?php echo date('Y') ?> <a href="http://www.shinshu-u.ac.jp/institution/e-L/" target="_blank">e-Learning Center</a>, Shinshu University. All Rights Reserved.
		</footer>
		
	<script>
		$(document).ready(function(){
			
		});
	</script>
	
	<?php include_once("analyticstracking.php") ?>
</body>
</html>
