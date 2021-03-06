<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<title>Hackference - A developer's dream</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo $site_url; ?>css/normalize.css" />
	<link rel="stylesheet" href="<?php echo $site_url; ?>css/gridpak.css" />
	<link rel="stylesheet" href="<?php echo $site_url; ?>css/global.css" />

    <!-- JS -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" ></script>
    <script type="text/javascript" src="<?php echo $site_url; ?>js/main.js" ></script>
    
    <!-- FancyBox -->
    <link rel="stylesheet" href="<?php echo $site_url; ?>fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo $site_url; ?>fancybox/jquery.fancybox.pack.js"></script>

<!-- start Mixpanel --><script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==
typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);
b._i.push([a,e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
mixpanel.init("7cf987c65e643194eadf4c8e0024c708");</script><!-- end Mixpanel -->
</head>
<body>

	<?php

	if ($early_bird == false)
	{
		?>
        <div id="flashMessageAnchor" ></div>
		<div id="flashMessage">
			Get in quick - <strong><a href='<?php echo $site_url; ?>buy'>Early bird tickets only £65 (saving 35%)</a></strong> - Ends 9th August
            <span class="buy-button"><a href="/buy">Buy Tickets</a></span>
		</div>
		<?php
	}

	?>
<?php if(!isset($_REQUEST['wrapper'])): ?>
	<header>
		<div class="section group">
			<div id="header-logo" class="col span_4_of_10">
				<a href='<?php echo $site_url; ?>'><img src='<?php echo $site_url; ?>img/hackference_logo.png' width="100%"></a>
			</div>
			<div class="col span_6_of_10 header-information">
				<div class="topNavInfo">
					Digbeth, August 30 - September 1 2013
				</div>
                <div class="openClose" >
                    <img src="<?php echo $site_url; ?>img/menu.png" />
                </div>
				<ul class="topNav">
					<li><a href='<?php echo $site_url; ?>speakers' <?php if ($page == "speakers") { echo "class='active'"; } ?>>Speakers</a></li>
					<li><a href='<?php echo $site_url; ?>schedule' <?php if ($page == "schedule") { echo "class='active'"; } ?>>Schedule</a></li>
					<li><a href='<?php echo $site_url; ?>hackathon' <?php if ($page == "hackathon") { echo "class='active'"; } ?>>Hackathon</a></li>
					<li><a href='<?php echo $site_url; ?>location' <?php if ($page == "location") { echo "class='active'"; } ?>>Location</a></li>
					<li class="navButton"><a href='<?php echo $site_url; ?>buy'>Buy Tickets</a></li>
                    <!--
                    <li><a href='<?php echo $site_url; ?>about' <?php if ($page == "about") { echo "class='active'"; } ?>>About</a></li>
                    -->
                    <li><a href='<?php echo $site_url; ?>contact' <?php if ($page == "contact") { echo "class='active'"; } ?>>Contact</a></li>
				</ul>
			</div>
		</div>
	</header>
<?php endif; ?>
