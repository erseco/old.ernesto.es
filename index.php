<?php

// Codigo para reducir el html eliminando saltos de linea, tabuladores y espacios
// function sanitize_output($buffer) {

//     $search = array(
//         '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
//         '/[^\S ]+\</s',  // strip whitespaces before tags, except space
//         '/(\s)+/s',       // shorten multiple whitespace sequences
//         '/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/' // Comentarios html (sin quitar las excepciones de IE)
//     );

//     $replace = array(
//         '>',
//         '<',
//         '\\1',
//         ''
//     );

//     $buffer = preg_replace($search, $replace, $buffer);

//     return $buffer;
// }

// ob_start("sanitize_output");

?>
<?php
//Detección del idioma
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

//Idioma definido por GET
if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
}

switch ($lang){
    case "es":
        include("lang/es.php");
        break;
    case "fr":
        include("lang/fr.php");
        break;
    case "en":
        include("lang/en.php");
        break;
    case "de":
        include("lang/de.php");
        break;
    default:
    	// Si no detectamos idioma saltamos a la versión en inglés
    	header("location: https://ernesto.es/en/");
        break;
}
?>
<!doctype html>
<html lang="<?php echo $lang; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1"  />
	<meta charset="utf-8">
	<title>Ernesto Serrano Collado - <?php echo $subtitle; ?></title>
	<meta name="description" content="<?php echo $web_description; ?>">
	<meta name="author" content="Ernesto Serrano <info@ernesto.es>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<!--[if lt IE 9]>
		<script src="js/html5shiv/html5shiv.js" type="text/javascript"></script>
		<script src="js/html5shiv/html5shiv-printshiv.js" type="text/javascript"></script>
		<style type="text/css">.site_nav { border-bottom: 1px solid #d4d4d4; }</style>
	<![endif]-->



	<style>@font-face{font-family:'Arvo';font-style:normal;font-weight:400;src:local('Arvo'),url(https://fonts.gstatic.com/s/arvo/v9/MViwy4K6e56oHcyeMzjbCQ.ttf) format('truetype')}@font-face{font-family:'Arvo';font-style:normal;font-weight:700;src:local('Arvo Bold'),local('Arvo-Bold'),url(https://fonts.gstatic.com/s/arvo/v9/F-uvpIj1hF17IDyvQvI50Q.ttf) format('truetype')}@font-face{font-family:'Droid Sans';font-style:normal;font-weight:400;src:local('Droid Sans Regular'),local('DroidSans-Regular'),url(https://fonts.gstatic.com/s/droidsans/v7/s-BiyweUPV0v-yRb-cjciC3USBnSvpkopQaUR-2r7iU.ttf) format('truetype')}@font-face{font-family:'Droid Sans';font-style:normal;font-weight:700;src:local('Droid Sans Bold'),local('DroidSans-Bold'),url(https://fonts.gstatic.com/s/droidsans/v7/EFpQQyG9GqCrobXxL-KRMfEr6Hm6RMS0v1dtXsGir4g.ttf) format('truetype')}@font-face{font-family:'fontello';src:url(../font/fontello.eot?78850315);src:url(../font/fontello.eot?78850315#iefix) format('embedded-opentype'),url(../font/fontello.woff?78850315) format('woff'),url(../font/fontello.ttf?78850315) format('truetype'),url(../font/fontello.svg?78850315#fontello) format('svg');font-weight:400;font-style:normal}[class^="icon-"]:before{font-family:"fontello";font-style:normal;font-weight:400;speak:none;display:inline-block;text-decoration:inherit;width:1em;margin-right:.2em;text-align:center;font-variant:normal;text-transform:none;line-height:1em;margin-left:.2em}.icon-up-open-big:before{content:'\e801'}.icon-mobile:before{content:'\e802'}.icon-location:before{content:'\e803'}.icon-mail:before{content:'\e805'}.icon-file-pdf:before{content:'\e816'}header,nav,section{display:block}html{font-size:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}img{width:auto\9;height:auto;max-width:100%;vertical-align:middle;border:0;-ms-interpolation-mode:bicubic}select{margin:0;font-size:100%;vertical-align:middle}body{margin:0;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:20px;color:#333;background-color:#fff}a{color:#08c;text-decoration:none}[class*="span"]{float:left;min-height:1px;margin-left:20px}.container{width:940px}.span6{width:460px}.span5{width:380px}.span4{width:300px}.span3{width:220px}.row-fluid{width:100%;*zoom:1}.row-fluid:before,.row-fluid:after{display:table;line-height:0;content:""}.row-fluid:after{clear:both}.row-fluid [class*="span"]{display:block;float:left;width:100%;min-height:30px;margin-left:2.127659574468085%;*margin-left:2.074468085106383%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.row-fluid [class*="span"]:first-child{margin-left:0}.row-fluid .span6{width:48.93617021276595%;*width:48.88297872340425%}.row-fluid .span5{width:40.42553191489362%;*width:40.37234042553192%}.row-fluid .span4{width:31.914893617021278%;*width:31.861702127659576%}.row-fluid .span3{width:23.404255319148934%;*width:23.351063829787233%}.container{margin-right:auto;margin-left:auto;*zoom:1}.container:before,.container:after{display:table;line-height:0;content:""}.container:after{clear:both}.container-fluid{padding-right:20px;padding-left:20px;*zoom:1}.container-fluid:before,.container-fluid:after{display:table;line-height:0;content:""}.container-fluid:after{clear:both}p{margin:0 0 10px}h1,h2,h3,h4,h5{margin:10px 0;font-family:inherit;font-weight:700;line-height:20px;color:inherit;text-rendering:optimizelegibility}h1,h2,h3{line-height:40px}h1{font-size:38.5px}h2{font-size:31.5px}h3{font-size:24.5px}h4{font-size:17.5px}h5{font-size:14px}ul{padding:0;margin:0 0 10px 25px}li{line-height:20px}select{font-size:14px;font-weight:400;line-height:20px}select{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif}select{display:inline-block;height:20px;padding:4px 6px;margin-bottom:10px;font-size:14px;line-height:20px;color:#555;vertical-align:middle;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}select{height:30px;*margin-top:4px;line-height:30px}select{width:220px;background-color:#fff;border:1px solid #ccc}[class^="icon-"]{display:inline-block;width:14px;height:14px;margin-top:1px;*margin-right:.3em;line-height:14px;vertical-align:text-top;background-image:url(../img/glyphicons-halflings.png);background-position:14px 14px;background-repeat:no-repeat}@-ms-viewport{width:device-width}@media (min-width:1200px){[class*="span"]{float:left;min-height:1px;margin-left:30px}.container{width:1170px}.span6{width:570px}.span5{width:470px}.span4{width:370px}.span3{width:270px}.row-fluid{width:100%;*zoom:1}.row-fluid:before,.row-fluid:after{display:table;line-height:0;content:""}.row-fluid:after{clear:both}.row-fluid [class*="span"]{display:block;float:left;width:100%;min-height:30px;margin-left:2.564102564102564%;*margin-left:2.5109110747408616%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.row-fluid [class*="span"]:first-child{margin-left:0}.row-fluid .span6{width:48.717948717948715%;*width:48.664757228587014%}.row-fluid .span5{width:40.17094017094017%;*width:40.11774868157847%}.row-fluid .span4{width:31.623931623931625%;*width:31.570740134569924%}.row-fluid .span3{width:23.076923076923077%;*width:23.023731587561375%}}@media (min-width:768px) and (max-width:979px){[class*="span"]{float:left;min-height:1px;margin-left:20px}.container{width:724px}.span6{width:352px}.span5{width:290px}.span4{width:228px}.span3{width:166px}.row-fluid{width:100%;*zoom:1}.row-fluid:before,.row-fluid:after{display:table;line-height:0;content:""}.row-fluid:after{clear:both}.row-fluid [class*="span"]{display:block;float:left;width:100%;min-height:30px;margin-left:2.7624309392265194%;*margin-left:2.709239449864817%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.row-fluid [class*="span"]:first-child{margin-left:0}.row-fluid .span6{width:48.61878453038674%;*width:48.56559304102504%}.row-fluid .span5{width:40.05524861878453%;*width:40.00205712942283%}.row-fluid .span4{width:31.491712707182323%;*width:31.43852121782062%}.row-fluid .span3{width:22.92817679558011%;*width:22.87498530621841%}}@media (max-width:767px){body{padding-right:20px;padding-left:20px}.container-fluid{padding:0}.container{width:auto}.row-fluid{width:100%}[class*="span"],.row-fluid [class*="span"]{display:block;float:none;width:100%;margin-left:0;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}}@media (max-width:979px){body{padding-top:0}}.progressbar{width:100%;height:13px;margin:0 auto 20px auto;padding:0;background:#cfcfcf;border-width:1px;border-style:solid;border-color:#aaa #bbb #fff #bbb;box-shadow:inset 0 2px 3px #bbb}.progressbar,.progressbar-inner{border-radius:4px;-moz-border-radius:4px;-webkit-border-radius:4px;-o-border-radius:4px}.progressbar-inner{width:77%;height:100%;background:#999;background-size:18px 18px;background-color:#ac0;background-image:-webkit-linear-gradient(135deg,rgba(255,255,255,.2) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.2) 50%,rgba(255,255,255,.2) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(135deg,rgba(255,255,255,.2) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.2) 50%,rgba(255,255,255,.2) 75%,transparent 75%,transparent);background-image:-ms-linear-gradient(135deg,rgba(255,255,255,.2) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.2) 50%,rgba(255,255,255,.2) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(135deg,rgba(255,255,255,.2) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.2) 50%,rgba(255,255,255,.2) 75%,transparent 75%,transparent);background-image:linear-gradient(135deg,rgba(255,255,255,.2) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.2) 50%,rgba(255,255,255,.2) 75%,transparent 75%,transparent);box-shadow:inset 0 2px 8px rgba(255,255,255,.5),inset -1px -1px 0 rgba(0,0,0,.2)}.progressbar-inner{background-color:#f2c345}.percent_100 .progressbar-inner{width:100%}body:after{content:url(../img/close.png) url(../img/loading.gif) url(../img/prev.png) url(../img/next.png);display:none}html{font-size:16px}body{font-size:62.5%}.borderbtn{border-bottom:1px solid #d4d4d4}.borderleft{border-left:1px solid #d4d4d4}ul,li{list-style:none;margin:0;padding:0}.aside_el{text-align:right;padding-right:5px}.aside_el h2{font:2.9em 'Arvo',serif;line-height:.8em;color:#464646;font-weight:400;margin-bottom:3px;margin-top:0}.aside_el h5{font:1.35em 'Droid Sans',sans-serif;line-height:1.2em;color:#0099e8;font-weight:400}.par_el{padding-left:30px;position:relative}.par_el p{font-family:'Droid Sans',sans-serif;font-size:1.4em;line-height:1.8em;color:#8e8d8d;text-align:justify}.page{padding-bottom:80px}body{background:#b9babe url(../img/body-bg.png) repeat}.wrapper{margin:0;padding:0;width:100%}.container{width:100%;max-width:940px;margin:0 auto;margin-top:55px;margin-bottom:320px;position:relative;background:#fff url(../img/container-bg.png);-webkit-box-shadow:0 0 20px rgba(3,3,3,.3);-moz-box-shadow:0 0 20px rgba(3,3,3,.3);box-shadow:0 0 20px rgba(3,3,3,.3)}.site_nav{height:85px;font-family:'Droid Sans',serif;z-index:5000;background:#fff url(../img/container-bg.png);-webkit-box-shadow:0 2px 4px rgba(3,3,3,.2);-moz-box-shadow:0 2px 4px rgba(3,3,3,.2);box-shadow:0 2px 4px rgba(3,3,3,.2)}.site_nav ul{text-align:center;margin:0;padding:0}.site_nav li{vertical-align:middle;margin:0;margin-left:-2px;padding:0 18px;display:inline-block;border-top:10px solid transparent}select{background-color:#fff;border:1px solid #ccc;width:60px;margin-left:-90px;margin-top:20px;position:relative;float:left}.site_nav a{font-size:1.6em;line-height:5.3125em;color:#0099e8;top:-10px;position:relative;margin:0;padding:0}.site_header{padding-top:30px;padding-bottom:33px;position:relative;text-align:center}.site_header h1{font:6em 'Arvo',serif;line-height:.66666666em;font-weight:700;color:#464646;display:inline-block;padding-right:5px;padding-left:5px;z-index:2}#logoline{text-align:center}.site_header h1:before,.site_header h1:after{border-top:1px solid #d4d4d4;content:" ";display:block;height:1px;width:15%;position:absolute;left:0;top:1em;z-index:1}.site_header h1:after{right:0;left:auto}.site_header h2{font:2.1em 'Arvo',serif;font-weight:400;color:#616161;margin:-4px 0 25px 0}.site_header h3{font:2.5em 'Droid Sans',sans-serif;line-height:1.2em;font-weight:400;color:#a4a5a6;margin-right:8%;margin-left:8%}.about_me{margin-top:50px}.circle{border-radius:50%;width:84px;height:84px;display:inline;position:relative;float:left;margin-right:20px;margin-top:4px;border:4px solid white;-webkit-box-shadow:0 0 15px rgba(3,3,3,.3);-moz-box-shadow:0 0 15px rgba(3,3,3,.3);box-shadow:0 0 15px rgba(3,3,3,.3);overflow:hidden}.upbtnwrapp{display:none;text-align:center}.upbtn{border-radius:50%;width:48px;height:48px;display:inline;position:fixed;right:5px;bottom:5px;background:black;opacity:.3;margin:0 auto;z-index:10000}.upbtn span{color:white;line-height:48px;text-align:center;font-size:35px;position:relative;bottom:5px;right:18px}.cont_info{padding-left:5px;width:95%;margin:0 auto;overflow:hidden}.soc ul li{display:inline-block;width:18%;margin:0 2% 2% 0;float:left}.info{margin-top:0}.info ul li{padding-bottom:20px}.info ul li span{font-size:2.4em;color:#222;margin:0;padding:0;margin-top:-4px;position:relative}.info ul li a{font-size:1.4em;color:#959595;text-decoration:none;line-height:0em;padding-left:30px}.slink{-webkit-filter:drop-shadow(1px 1px 1px #222);filter:drop-shadow(1px 1px 1px #222)}.my_expertise{margin-top:60px}.skill_level{margin-top:10px;padding:0 12px 0 7px}.skill_level h4{font:1.4em 'Droid Sans',sans-serif;line-height:1.071428em;color:#464646;text-align:center;font-weight:700;margin-top:-10px}@media only screen and (max-width:950px){.container{margin-top:20px;margin-bottom:20px}}@media only screen and (max-width:870px){.site_header h1:before,.site_header h1:after{width:28%}.cont_info{padding-left:0}.site_header h3{font:2em 'Droid Sans',sans-serif}.upbtnwrapp{display:block}}@media only screen and (max-width:767px){.site_nav a{font-size:1.6em;line-height:5.3125em}.borderleft{border-left:none}.site_header{padding-top:17px;padding-bottom:25px}.site_header h1{font:4em 'Arvo',serif;line-height:.66666666em;font-weight:700;color:#464646}.site_header h2{font:1.9em 'Arvo',serif}.site_header h3{font:1.7em 'Droid Sans',sans-serif;line-height:1.2em}.aside_el{text-align:center;padding-right:0;margin-bottom:30px}.aside_el h5{margin-top:15px}.par_el{padding-left:20px;padding-right:20px}.cont_info{padding-left:0;margin-top:40px}.soc{width:200px;margin:0 auto;overflow:hidden}.info{padding-top:20px;width:200px;margin:0 auto;overflow:hidden}.skill_level{margin-top:10px;padding:0 18px 0 14px}.about_me{margin-top:35px}.my_expertise{margin-top:35px}}@media only screen and (max-width:630px){.site_nav a{font-size:1.4em;line-height:6.071428571428571em}.site_header{padding-top:10px;padding-bottom:15px}.site_header h1{font:3em 'Arvo',serif;line-height:.66666666em;font-weight:700;color:#464646}.site_header h2{font:1.7em 'Arvo',serif}.site_header h3{font:1.6em 'Droid Sans',sans-serif;line-height:1.2em;margin-top:-15px}.aside_el h2{font:2em 'Arvo',serif;line-height:.8em;margin-bottom:-10px}.aside_el h5{font:1.35em 'Droid Sans',sans-serif;line-height:1.1em}.cont_info{margin-top:25px}.about_me{margin-top:20px}.my_expertise{margin-top:25px}}@media only screen and (max-width:540px){.site_nav{height:163px;padding-top:10px}.site_nav ul{display:block}.site_nav li{display:block;border-top:none;margin-left:0;padding:0}.site_nav a{font-size:1.5em;line-height:1.7em;display:block;top:0}.cont_info{margin-top:20px}.info{padding-top:10px}.info ul li{padding-bottom:10px}.aside_el{margin-bottom:20px}}@media only screen and (max-width:480px){.site_header{padding-top:0;padding-bottom:10px}.site_header h1{font:bold 2.6em 'Arvo',serif}.site_header h2{font:1.5em 'Arvo',serif}.site_header h3{font:1.3em 'Droid Sans',sans-serif;line-height:1.2em;margin-top:-15px}.aside_el h2{font:1.8em 'Arvo',serif;line-height:.8em;margin-bottom:-10px}.aside_el h5{font:1.5em 'Droid Sans',sans-serif;line-height:1.1em}.par_el p{font:1.3em 'Droid Sans',sans-serif;color:#8e8d8d;text-align:left}.skill_level h4{font:1.3em 'Droid Sans',sans-serif;line-height:1.071428em;margin-top:-10px}.page{padding-bottom:40px}}@media only screen and (max-width:360px){.site_header h1{font:bold 2em 'Arvo',serif}}@media (-webkit-min-device-pixel-ratio:2),(min-resolution:192dpi){body{background:#b9babe url(../img/body-bg@2x.png) repeat}.container,.site_nav{background:url(../img/container-bg@2x.png)}}</style>





	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<!-- <link rel="alternate" type="application/rss+xml" title="Ernesto Serrano Feed" href="feed.xml" /> -->

	<link rel="canonical" href="https://ernesto.es/<?php if ($lang != 'es') echo $lang.'/'; ?>" />

	<link rel="alternate" hreflang="es" href="https://ernesto.es/">
	<link rel="alternate" hreflang="en" href="https://ernesto.es/en/">
	<link rel="alternate" hreflang="fr" href="https://ernesto.es/fr/">
	<link rel="alternate" hreflang="de" href="https://ernesto.es/de/">



	<meta property="og:url" content="https://ernesto.es">
	<meta property="og:title" content="Ernesto Serrano">
	<meta property="og:description" content="<?php echo $web_description; ?>">

	<meta property="og:image" content="https://ernesto.es/img/thumbnail_fb.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="621">
	<meta property="og:image:height" content="381">
</head>
<body>
<!--
				<div class="qrcode">
					<a href="ernesto.vcf"><img src="img/qrcode.png" width="165" alt="vCard" title="vCard" /></a>
				</div>
 -->
<div class="wrapper">
	<div class="container">

		<div class="upbtnwrapp"><div class="upbtn"><span class="icon-up-open-big"></span></div></div>

				<div class="hidden-xs hidden-sm">
					<select id="languages" onChange="window.location.href='https://ernesto.es/'+this.value">
					    <option value=""<?php if($lang == "es") echo " selected"; ?>>es - Castellano</option>
					    <option value="en/"<?php if($lang == "en") echo " selected"; ?>>en - English</option>
					    <option value="fr/"<?php if($lang == "fr") echo " selected"; ?>>fr&nbsp; - Français</option>
					    <option value="de/"<?php if($lang == "de") echo " selected"; ?>>de - Deutsch</option>
					</select>
				</div>

		<!-- NAVIGATION -->
		<nav class="site_nav" id="site_nav">
			<ul class="">
			<!-- <div class="hidden-xs hidden-sm">
					<img class="qrcode" src="img/qrcode.png" title="Contact info" alt="Contact info" />
				</div> -->
				<li><a href="#about_me"><?php echo $about_me; ?></a></li>
				<li><a href="#my_expertise"><?php echo $my_expertise; ?></a></li>
				<li><a href="#experience"><?php echo $experience; ?></a></li>
				<li><a href="#education"><?php echo $education; ?></a></li>
				<li><a href="#portfolio"><?php echo $portfolio; ?></a></li>
				<li><a href="#countries"><?php echo $countries; ?></a></li>
				<!-- <li><a href="#contact"><?php echo $contact; ?></a></li> -->
			</ul>
		</nav> <!-- /site_nav -->
		<div id="aftermenuspace"></div>
		<!-- HEADER -->
		<header class="site_header centerise borderbtn">
			<div id="logoline"><h1><?php echo $title; ?></h1></div>
			<h2><?php echo $subtitle; ?></h2>
			<h3><?php echo $subtitle_long; ?></h3>
		</header> <!-- /site_header -->
		<!-- end HEADER -->
		<div class="container-fluid page">

			<!-- ABOUT ME -->
			<section class="row-fluid about_me" id="about_me">
				<header class="span3 aside_el">
					<h2><?php echo $about_me; ?></h2>
					<h5><?php echo $about_me_long; ?></h5>
				</header>
				<div class="span6 borderleft par_el">
					<span class="circle"><img style="float:left" src="img/mypic.jpg" alt=""/></span>
					<?php echo $about_me_text; ?>

				</div>
				<div class="span3 cont_info">

					<div class="soc">
						<ul>
							<?php /*<li><a href="https://www.facebook.com/erseco" target="_blank"><img class="slink" src="img/icons/fk.png" alt="Face book" title="Face book" /></a></li> */ ?>
                            <li><a href="https://github.com/erseco" target="_blank"><img class="slink" src="img/icons/github.png" alt="GitHub" title="GitHub" /></a></li>
							<li><a href="https://twitter.com/erseco" target="_blank"><img class="slink" src="img/icons/tw.png" alt="Twit ter" title="Twit ter" /></a></li>
							<li><a href="https://www.linkedin.com/in/erseco" target="_blank"><img class="slink" src="img/icons/ln.png" alt="Linked in" title="Linked in" /></a></li>
							<?php /*<li><a href="https://plus.google.com/+ErnestoSerrano83" target="_blank"><img class="slink" src="img/icons/gp.png" alt="Google" title="Google" /></a></li> */ ?>
							<?php /*<!-- <li><a href="feed.xml" target="_blank"><img class="" src="img/icons/rss.png" alt="Feed RSS" title="Feed RSS" /></a></li> --> */ ?>
						</ul>
					</div>
					<br />
					<br />
					<div class="info">
						<ul>
							<li><span class="icon-file-pdf"></span><a href="cv.html" target="_blank" title="Descargar currículum en PDF">Curriculum Vitae</a></li>
							<!-- <li><span class="icon-mobile"></span><a href="https://api.whatsapp.com/send?phone=34654594460&text=Hola, Ernesto!" title="Envíame un WhatsApp">+34 654 594 460</a></li> -->
							<li><span class="icon-location"></span><a href="https://maps.google.es/maps?q=El Hierro,+Spain" target="_blank" title="Mi residencia actual">El Hierro, Spain</a></li>
							<li><span class="icon-mail"></span><a href="mailto:info@ernesto.es">info@ernesto.es</a></li>
						</ul>

					</div>
				</div> <!-- /cont_info -->
			</section> <!-- /about_me -->
			<!-- end ABOUT ME -->

			<!-- MY EXPERTISE -->
			<section class="row-fluid my_expertise" id="my_expertise">
				<header class="span3 aside_el">
					<h2><?php echo $my_expertise; ?></h2>
					<h5><?php echo $my_expertise_long; ?></h5>
				</header>
				<div class="span4 borderleft par_el">
					<?php echo $my_expertise_text; ?>
				</div>
				<div class="span5 skill_level">
					<h4>GNU/Linux (Debian, Ubuntu, Red Hat)</h4>
					<div class="progressbar percent_100">
						<div class="progressbar-inner"></div>
					</div>
					<h4>Android / iOS / Windows Phone</h4>
					<div class="progressbar percent_100">
						<div class="progressbar-inner"></div>
					</div>
					<h4>PHP / C++ / Java / Ruby / Python / C#</h4>
					<div class="progressbar percent_100">
						<div class="progressbar-inner"></div>
					</div>
					<h4>Hardware &amp; Network</h4>
					<div class="progressbar percent_100">
						<div class="progressbar-inner"></div>
					</div>
					<h4>HTML5 &amp; CSS3</h4>
					<div class="progressbar percent_100">
						<div class="progressbar-inner"></div>
					</div>
					<h4>Javascript / jQuery / Ajax / Bootstrap</h4>
					<div class="progressbar percent_100">
						<div class="progressbar-inner"></div>
					</div>
<!-- 					<h4>Photoshop &amp; GIMP </h4>
					<div class="progressbar percent_30">
						<div class="progressbar-inner"></div>
					</div> -->
					<h4>Prestashop / WordPress</h4>
					<div class="progressbar percent_100">
						<div class="progressbar-inner"></div>
					</div>
					<h4>MySQL / SQL Server / PostgreSQL </h4>
					<div class="progressbar percent_100">
						<div class="progressbar-inner"></div>
					</div>
					<h4>Apache / IIS / cPanel / Plesk</h4>
					<div class="progressbar percent_100">
						<div class="progressbar-inner"></div>
					</div>
					<h4>VMware vSphere / ESXi / Workstation / Fusion</h4>
					<div class="progressbar percent_100">
						<div class="progressbar-inner"></div>
					</div>



				</div> <!-- /skill_level -->
			</section> <!-- /my_expertise -->
			<!-- end MY EXPERTISE -->

			<!-- EXPERIENCE -->
			<section class="row-fluid experience" id="experience">
				<header class="span3 aside_el">
					<h2><?php echo $experience; ?></h2>
					<h5><?php echo $experience_long; ?></h5>
				</header>
				<div class="span9">

<!--                     <div class="row-fluid">
                        <article class="span12  borderleft par_el in_spacingbottom">
                            <span class="period">2020 - <?php echo $present; ?></span>
                            <div class="bigspacing">
                                <header>
                                    <h2><a href="https://www.exolever.com">ExO Works Europe S.L.U.</a></h2>
                                    <h3>DevOps Engineer</h3>
                                </header>
                                <?php //echo $experience_8_description; ?>
                            </div>
                        </article>
                    </div> -->

                    <div class="row-fluid">
                        <article class="span12  borderleft par_el in_spacingbottom">
                            <span class="period">2017 - 2019</span>
                            <div class="bigspacing">
                                <header>
                                    <h2><a href="https://www.openexo.com">ExO Works Europe S.L.U.</a></h2>
                                    <h3>DevOps Engineer</h3>
                                </header>
                                <?php echo $experience_7_description; ?>
                            </div>
                        </article>
                    </div>

					<div class="row-fluid">
						<article class="span12  borderleft par_el in_spacingbottom">
							<span class="period">2017 - 2017</span>
							<div class="bigspacing">
								<header>
									<h2><a href="https://wazuh.com">Wazuh, Inc.</a></h2>
									<h3>DevOps</h3>
								</header>
								<?php echo $experience_6_description; ?>
							</div>
						</article>
					</div>

					<div class="row-fluid">
						<article class="span12  borderleft par_el in_spacingbottom">
							<span class="period">2015 - 2016</span>
							<div class="bigspacing">
								<header>
									<h2><a href="https://www.trevenque.es" rel="nofollow">Grupo Trevenque (Granada)</a></h2>
									<h3><?php echo $experience_0_name; ?></h3>
								</header>
								<?php echo $experience_0_description; ?>
							</div>
						</article>
					</div>

					<div class="row-fluid">
						<article class="span12  borderleft par_el in_spacingbottom">
							<span class="period">2009 - 2015</span>
							<div class="bigspacing">
								<header>
									<h2>Freelancer</h2>
									<h3><?php echo $experience_1_name; ?></h3>
								</header>
								<?php echo $experience_1_description; ?>
							</div>
						</article>
					</div>

					<div class="row-fluid">
						<article class="span12  borderleft par_el in_spacing">
							<span class="period">2008 - 2009</span>
							<div class="bigspacing">
								<header>
									<h2><a href="https://www.abartiateam.com/" rel="nofollow">Abartia Team (Grupo Orbere)</a></h2>
									<h3><?php echo $experience_2_name; ?></h3>
								</header>
								<?php echo $experience_2_description; ?>
							</div>
						</article>
					</div>
					<div class="row-fluid">
						<article class="span12  borderleft par_el in_spacing">
							<span class="period">2004 - 2007</span>
							<div class="bigspacing">
								<header>
									<h2><a href="https://www.virtualysoft.com/">VirtualySoft Yecla</a></h2>
									<h3><?php echo $experience_3_name; ?></h3>
								</header>
								<?php echo $experience_3_description; ?>
							</div>
						</article>
					</div>

					<div class="row-fluid">
						<article class="span12  borderleft par_el in_spacing">
							<span class="period">2003 - 2004</span>
							<div class="bigspacing">
								<header>
									<h2>Attempt Informática</h2>
									<h3><?php echo $experience_4_name; ?></h3>
								</header>
								<?php echo $experience_4_description; ?>
							</div>
						</article>
					</div>
					<div class="row-fluid">
						<article class="span12  borderleft par_el in_spacing">
							<span class="period">2002 - 2003</span>
							<div class="bigspacing">
								<header>
									<h2>Diseño gráfico punto de mira</h2>
									<h3><?php echo $experience_5_name; ?></h3>
								</header>
								<?php echo $experience_5_description; ?>
							</div>
						</article>
					</div>


				</div>
			</section> <!-- /experience -->
			<!-- end EXPERIENCE -->

			<!-- EDUCATION -->
			<section class="row-fluid education" id="education">
				<header class="span3 aside_el">
					<h2><?php echo $education; ?></h2>
					<h5><?php echo $education_long; ?></h5>
				</header>
				<div class="span9">
                    <div class="row-fluid">
                        <article class="span12  borderleft par_el in_spacing">
                            <span class="period">2018 - 2019</span>
                            <div class="bigspacing">
                                <header>
                                    <h2>Máster Profesorado de Enseñanza Secundaria Obligatoria y Bachillerato, Formación Profesional y Enseñanzas de Idiomas</h2>
                                    <h3>Universidad de Granada, Granada, Spain</h3>
                                </header>
                            </div>
                        </article>
                    </div>
                    <div class="row-fluid">
                        <article class="span12  borderleft par_el in_spacing">
                            <span class="period">2017 - 2018</span>
                            <div class="bigspacing">
                                <header>
                                    <h2>Máster Profesional en Ingeniería Informática</h2>
                                    <h3>Universidad de Granada, Granada, Spain</h3>
                                </header>
                            </div>
                        </article>
                    </div>
					<div class="row-fluid">
						<article class="span12  borderleft par_el in_spacing">
							<span class="period">2013 - 2017</span>
							<?php /*<span class="period">2013 - <?php echo $present; ?></span> */ ?>
							<div class="bigspacing">
								<header>
									<h2>Grado en Ingeniería Informática</h2>
									<h3>Universidad de Granada, Granada, Spain</h3>
								</header>
<ul class="subjects">


	<li><?php echo $course_alg  	?><span class="score"><?php echo $calification_1 ?></span></li>
	<li><?php echo $course_dai  	?><span class="score"><?php echo $calification_1 ?></span></li>
	<li><?php echo $course_es  		?><span class="score"><?php echo $calification_1 ?></span></li>
	<li><?php echo $course_ec  		?><span class="score"><?php echo $calification_1 ?></span></li>
	<li><?php echo $course_pw  		?><span class="score"><?php echo $calification_1 ?></span></li>
	<li><?php echo $course_pdoo 	?><span class="score"><?php echo $calification_1 ?></span></li>
	<li><?php echo $course_swap 	?><span class="score"><?php echo $calification_1 ?></span></li>
	<li><?php echo $course_sibw 	?><span class="score"><?php echo $calification_1 ?></span></li>
	<li><?php echo $course_sie 		?><span class="score"><?php echo $calification_1 ?></span></li>
	<li><?php echo $course_smm 		?><span class="score"><?php echo $calification_1 ?></span></li>
	<li><?php echo $course_tw 		?><span class="score"><?php echo $calification_1 ?></span></li>

	<li><?php echo $course_ig  		?><span class="score"><?php echo $calification_2 ?></span></li>
	<li><?php echo $course_mc  		?><span class="score"><?php echo $calification_2 ?></span></li>
	<li><?php echo $course_tfg  	?><span class="score"><?php echo $calification_2 ?></span></li>


	<li><?php echo $course_aa  		?><span class="score"><?php echo $calification_3 ?></span></li>
	<li><?php echo $course_ddsi 	?><span class="score"><?php echo $calification_3 ?></span></li>
	<li><?php echo $course_ed  		?><span class="score"><?php echo $calification_3 ?></span></li>
	<li><?php echo $course_fft  	?><span class="score"><?php echo $calification_3 ?></span></li>
	<li><?php echo $course_fis  	?><span class="score"><?php echo $calification_3 ?></span></li>
	<li><?php echo $course_fp  		?><span class="score"><?php echo $calification_3 ?></span></li>
	<li><?php echo $course_ia  		?><span class="score"><?php echo $calification_3 ?></span></li>
	<li><?php echo $course_lmd  	?><span class="score"><?php echo $calification_3 ?></span></li>
	<li><?php echo $course_mp  		?><span class="score"><?php echo $calification_3 ?></span></li>
	<li><?php echo $course_pld 		?><span class="score"><?php echo $calification_3 ?></span></li>
	<li><?php echo $course_sso  	?><span class="score"><?php echo $calification_3 ?></span></li>
	<li><?php echo $course_scd  	?><span class="score"><?php echo $calification_3 ?></span></li>

	<li><?php echo $course_alem  	?><span class="score"><?php echo $calification_4 ?></span></li>
	<li><?php echo $course_ac  		?><span class="score"><?php echo $calification_4 ?></span></li>
	<li><?php echo $course_ca  		?><span class="score"><?php echo $calification_4 ?></span></li>
	<li><?php echo $course_so  		?><span class="score"><?php echo $calification_4 ?></span></li>
	<li><?php echo $course_toc  	?><span class="score"><?php echo $calification_4 ?></span></li>

<?php if ($lang == 'es') { ?>
	<li>Fundamentos de bases de datos 				<span class="score">EXENTO CFGS</span></li>
	<li>Fundamentos de redes 						<span class="score">EXENTO CFGS</span></li>
	<li>Fundamentos del software 					<span class="score">EXENTO CFGS</span></li>
	<li>Ingenieria de servidores 					<span class="score">EXENTO CFGS</span></li>
	<li>Ingeniería, empresa y sociedad 				<span class="score">EXENTO CFGS</span></li>
<?php } ?>
</ul>
							</div>
						</article>
					</div>
					<div class="row-fluid">
						<article class="span12  borderleft par_el in_spacingbottom">
							<span class="period">2011 - 2013</span>
							<div class="bigspacing">
								<header>
									<h2>Técnico Superior en Administración de Sistemas Informáticos en Red</h2>
									<h3>IES José Luis Castillo Puche, Yecla, Murcia</h3>
								</header>


<ul class="subjects">
	<li>Lenguajes de marcas y sistemas de gestión de información.	<span class="score">10</span></li>
	<li>Administración de sistemas operativos.						<span class="score">10</span></li>
	<li>Servicios de red e Internet.								<span class="score">10</span></li>
	<li>Implantación de aplicaciones web.							<span class="score">10</span></li>
	<li>Administración de sistemas gestores de bases de datos.		<span class="score">10</span></li>
	<li>Seguridad y alta disponibilidad.							<span class="score">10</span></li>
	<li>Planificación y administración de redes.					<span class="score">10</span></li>
	<li>Empresa e iniciativa emprendedora.							<span class="score">10</span></li>
	<li>Implantación de sistemas operativos.						<span class="score">9</span></li>
	<li>Fundamentos de hardware.									<span class="score">9</span></li>
	<li>Gestión de bases de datos.									<span class="score">9</span></li>
	<li>Proyecto de administración de sistemas informáticos en red.	<span class="score">9</span></li>
	<li>Formación y orientación laboral.							<span class="score">9</span></li>

</ul>

							</div>
						</article>
					</div>
					<br />
					<div class="row-fluid">
						<article class="span12  borderleft par_el in_spacingbottom">
							<span class="period">2000 - 2002</span>
							<div class="bigspacing">
								<header>
									<h2>Técnico en Equipos Electrónicos de Consumo</h2>
									<h3>IES Pintor Rafael Requena, Caudete, Albacete</h3>
								</header>

<ul class="subjects">
	<li>Sistemas electrónicos de información.								<span class="score">10</span></li>
	<li>Equipos microinformáticos y terminales de telecomunicación.			<span class="score">10</span></li>
	<li>Calidad.															<span class="score">9</span></li>
	<li>Instalaciones básicas.												<span class="score">9</span></li>
	<li>Relaciones en el Entorno de Trabajo.								<span class="score">8</span></li>
	<li>Electrónica digital y microprogramable.								<span class="score">8</span></li>
	<li>Formación y Orientación Laboral.									<span class="score">8</span></li>
	<li>Equipos de sonido.													<span class="score">7</span></li>
	<li>Equipos de imagen.													<span class="score">7</span></li>
	<li>Administración, gestión y comercialización en la pequeña empresa.	<span class="score">7</span></li>
	<li>Electrónica general.												<span class="score">7</span></li>
</ul>
							</div>
						</article>
					</div>

					<br />
					<div class="row-fluid">
						<article class="span12  borderleft par_el in_spacingbottom">
							<span class="period">2017</span>
							<div class="bigspacing">
								<header>
									<h2>PREMIO "MEJORES EXPEDIENTES"</h2>
									<h3>Premio mejor expediente académico UGR 2016-2017</h3>
								</header>
							</div>
						</article>
					</div>


					<br />
					<div class="row-fluid">
						<article class="span12  borderleft par_el in_spacingbottom">
							<span class="period">2016</span>
							<div class="bigspacing">
								<header>
									<h2>TOEFL iBT - 74 Points</h2>
									<h3>TOEFL iBT (Internet Based Test)</h3>
								</header>
							</div>
						</article>
					</div>

					<br />

					<div class="row-fluid">
						<article class="span12  borderleft par_el in_spacingbottom">
							<span class="period">2014</span>
							<div class="bigspacing">
								<header>
									<h2>SEO. POSICIONAMIENTO WEB EN BUSCADORES. II EDICIÓN</h2>
									<h3>Fundación General UGR-Empresa - <?php echo $calification_2 ?></h3>
								</header>
							</div>
						</article>
					</div>

					<br />
					<div class="row-fluid">
						<article class="span12  borderleft par_el in_spacingbottom">
							<span class="period">2013</span>
							<div class="bigspacing">
								<header>
									<h2>Certificado B1 de inglés</h2>
									<h3>Centro de Lenguas Modernas (CLM-UGR)</h3>
								</header>
							</div>
						</article>
					</div>







				</div>
			</section> <!-- /education -->
			<!-- end EDUCATION -->

			<!-- PORTFOLIO -->
			<section class="row-fluid portfolio" id="portfolio">
				<header class="span3 aside_el">
					<h2><?php echo $portfolio; ?></h2>
					<h5><?php echo $portfolio_long; ?></h5>
				</header>
				<div class="span9 borderleft">

					<div class="galleryContainer">
						<div class="galleryItem">
							<a href="img/1.png" data-lightbox="portfolio"><img src="img/gallery_1.png" alt="" /></a>
							<h3><a href="https://play.google.com/store/apps/details?id=erseco.soft">Trivial Mobile</a></h3>
							<p>Android Game</p>
						</div>

						<div class="galleryItem">
							<a href="img/2.png" data-lightbox="portfolio"><img src="img/gallery_2.png" alt="" /></a>
							<h3><a href="https://itunes.apple.com/us/app/geek-trivia/id662377761?mt=8">Trivial Friki</a></h3>
							<p>iOS Game</p>
						</div>

						<div class="galleryItem">
							<a href="img/3.png" data-lightbox="portfolio"><img src="img/gallery_3.png" alt="" /></a>
							<h3><a href="https://www.virtualysoft.com">VirtualyGEST .NET</a></h3>
							<p>ERP</p>
						</div>

						<div class="galleryItem">
							<a href="img/4.png" data-lightbox="portfolio"><img src="img/gallery_4.png" alt="" /></a>
							<h3><a href="https://www.liceografico.com">Liceo Gráfico</a></h3>
							<p>Magento</p>
						</div>

						<div class="galleryItem">
							<a href="img/5.png" data-lightbox="portfolio"><img src="img/gallery_5.png" alt="" /></a>
							<h3><a href="https://www.sonoramamusical.com">Sonorama Musical</a></h3>
							<p>PrestaShop</p>
						</div>

						<div class="galleryItem">
							<a href="img/6.png" data-lightbox="portfolio"><img src="img/gallery_6.png" alt="" /></a>
							<h3><a href="https://play.google.com/store/apps/details?id=erseco.soft.stevie.wonder.simulator">Stevie Wonder Simulator</a></h3>
							<p>Android joke app</p>
						</div>

						<div class="galleryItem">
							<a href="img/7_isabelleon.png" data-lightbox="portfolio"><img src="img/gallery_7_isabelleon.png" alt="" /></a>
							<h3><a href="https://www.isabelleon.com">Isabel León - Arte de acción</a></h3>
							<p>Wordpress</p>
						</div>

						<div class="galleryItem">
							<a href="img/8_liceografico.png" data-lightbox="portfolio"><img src="img/gallery_8_liceografico.png" alt="" /></a>
							<h3><a href="https://www.liceografico.com">Liceo Gráfico</a></h3>
							<p>PrestaShop</p>
						</div>

						<div class="galleryItem">
							<a href="img/9_isabelvives.png" data-lightbox="portfolio"><img src="img/gallery_9_isabelvives.png" alt="" /></a>
							<h3><a href="https://www.isabelvives.photo">Isabel Vives - Photography & design</a></h3>
							<p>Wordpress</p>
						</div>


					</div>
				</div>
			</section> <!-- /portfolio -->
			<!-- end PORTFOLIO -->

		<!-- COUNTRIES -->
			<section class="row-fluid contries" id="countries">
				<header class="span3 aside_el">
					<h2><?php echo $countries; ?></h2>
					<h5><?php echo $countries_long; ?></h5>
				</header>
				<div class="span9 borderleft">
					<div id="map" style="height:300px; width:100%;"></div>
				    <script>

					var map;
					function initMap() {

						var locations = [
							 ['Yecla', 			38.61221,	-1.11011, 	1],
						     ['Granada', 		37.17734,	-3.59856, 	1],
						     ['Bilbao', 		43.26301,	-2.93499, 	1],
						     ['Barcelona', 		41.38506,	2.17340, 	1],
						     ['Idanha-a-Velha', 40.00149,	-7.15209, 	1],

						     ['Madrid', 		40.41678,	-3.70379, 	1],
						     ['Maury', 			42.81125,	2.59303, 	1],
						     ['Grenoble', 		45.18853,	5.72452, 	1],
						     ['Samso', 			55.81467,	10.58863, 	1],
						     ['Copenhaguen',	55.67610,	12.56834, 	1],
						     ['Amsterdam', 		52.37022,	4.89517, 	1],
						     ['Leiden', 		52.16011,	4.49701, 	1],
						     ['Athens', 		37.98392,	23.72936, 	1],
							 ['Cagliari', 		39.22384,	9.12166, 	1],
							 ['Bologna', 		44.49489,	11.34262, 	1],
							 ['Ascoli Piceno', 	42.85360,	13.57494, 	1],
						     ['Heraklion', 		35.33874,	25.14421, 	1],
						     ['Krakow', 		50.06465,	19.94498, 	1],
						     ['Torun', 			53.00604,	18.59613, 	1],
						     ['Prague', 		50.07554,	14.43780, 	1],
						     ['London', 		51.50735,	-0.12776, 	1],
						     ['Klaipeda', 		55.70329,	21.14428, 	1],
						     ['Vilnius', 		54.68716,	25.27965, 	1],
						     ['Riga', 			56.94965,	24.10519, 	1],
						     ['Tallinn', 		59.43696,	24.75357, 	1],
						     ['Stockholm', 		59.32932,	18.06858, 	1],
						     ['Istanbul', 		41.03333,	29.10136, 	1],
						     ['Capadoccia', 	38.72049,	35.48260, 	2],
						     ['Izmir', 			38.42373,	27.14283, 	1],
						     ['Bangkok', 		13.75633,	100.50177, 	3],
						     ['Siem Reap', 		13.36710,	103.84481, 	3],
						     ['Lanzarote', 		29.04685,	-13.58997, 	3],
						     ['Lviv', 			49.83968,	24.02972, 	3],
						     ['Fes', 			34.01812	,-5.00785, 	4],
						     ['Merzouga', 		31.08017,	-4.01336, 	4],
						     ['Princeton',	 	40.35730,	-74.66722,  4],
						     ['Munich',	 		48.135125,	11.581981,  4]

						];
						map = new google.maps.Map(document.getElementById('map'), {
						     zoom: 2,
						     center: new google.maps.LatLng(43.48437,57.20528),
						     mapTypeId: google.maps.MapTypeId.ROADMAP
						});

						var infowindow = new google.maps.InfoWindow;

						var marker, i;

						for (i = 0; i < locations.length; i++) {
						    marker = new google.maps.Marker({
						         position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						         map: map
						    });

						    google.maps.event.addListener(marker, 'click', (function(marker, i) {
						         return function() {
						             infowindow.setContent(locations[i][0]);
						             infowindow.open(map, marker);
						         }
						    })(marker, i));
						}

					}

				</script>
	    		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbvdSakXauNKVpUOK1tAFvyRBV9n5_blY&callback=initMap" async defer></script>
			</div>
			</section> <!-- /portfolio -->
			<!-- end COUNTRIES -->

		</div> <!-- /page -->
		<!-- <footer class="row-fluid siteFooter">
			<div id="contact">
				<aside class="span3 aside_el">
					<h2><?php echo $contact; ?></h2>
					<h5><?php echo $contact_long; ?></h5>
				</aside>
				<div class="span9 borderleft">
					<form class="comment_form" data-validate="parsley">
						<fieldset>
							<input type="email" name="form_email" id="form_email" data-required="true" data-trigger="focusin focusout" data-type="email" placeholder="e-mail" required>
							<textarea rows="8" name="form_message" id="form_message" data-required="true" data-trigger="focusin focusout" placeholder="mensaje"></textarea>
							<div class="send-button pull-right"> <a>ENVIAR EL MENSAJE </a> </div>
						</fieldset>
					</form>
				</div>
			</div>
		</footer> -->
	</div> <!-- /container -->
</div> <!-- /wrapper -->


	<div id="privacyoff">
	</div>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/parsley.min.js" async></script>
	<!-- <script src="js/lightbox.js"></script> -->
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" async></script>
	<!-- <script src="js/jquery.cookie.js"></script> -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" async></script>


	<script type="text/javascript" src="js/retina.js" async></script>
	<script type="text/javascript" src="js/main.js" async></script>


	<!-- bsie js patch, it will only execute in IE6 -->
	<!--[if lte IE 6]>

	<script type="text/javascript" src="js/bootstrap-ie.js"></script>
	<![endif]-->

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-89832-5', 'auto');
	  ga('require', 'displayfeatures');
	  ga('send', 'pageview');

	</script>

	<link href='//fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="fontello/css/fontello.css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="fontello/css/fontello-ie7.css">
	<![endif]-->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/2.2.2/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->
	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css"> -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/2.2.2/css/bootstrap-responsive.min.css" rel="stylesheet">

	<!-- bsie css patch -->
	  <!--[if lte IE 6]>

	  <link rel="stylesheet" type="text/css" href="css/bootstrap-ie6.css">
	  <link rel="stylesheet" type="text/css" href="css/ie.css">
	  <![endif]-->

	<!--[if lt IE 8]>
		<link href="css/bootstrap-ie7.css" rel="stylesheet">
	<![endif]-->

	<!-- <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script> -->




	<link rel="stylesheet" href="css/progressbar.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link rel="stylesheet" href="css/styles.min.css">

</body>
</html>