<?php defined( '_JEXEC' ) or die; ?>
<?php 
JHtml::_('behavior.framework', true);
JHtml::_('bootstrap.framework');
$doc = JFactory::getDocument();
$doc->setMetaData( 'cleartype', 'on', true );
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<jdoc:include type="head" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/selectivizr-min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/modernizr.js"></script>
<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie9-10.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/responsive.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/nav.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/typography.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/responsive-template.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/print.css" media="print" />

	<script type="text/javascript">
		WebFontConfig = {
		google: { families: [ 'Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,700,800,600:latin' ] }
		};
		(function() {
		var wf = document.createElement('script');
		wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(wf, s);
	})(); </script>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/selectnav.min.js"></script>
<!--[if IE 6]> <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie6.css" media="screen" /> <![endif]-->
<!--[if IE 7]> <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie.css" media="screen" /> <![endif]-->
    <?php if($this->params->get('usetheme')==true) : ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/presets/<?php echo $this->params->get('choosetheme'); ?>.css" media="screen" />
    <?php endif; ?>
	<?php if($this->params->get("usedropdown")) : ?> 
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/superfish.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/js/supersubs.js"></script>
	<script type="text/javascript">
    jQuery(document).ready(function(){ 
        jQuery("ul.menu-nav").supersubs({ 
			minWidth: <?php echo $this->params->get("dropdownhandler1"); ?>,
            extraWidth:  1
        }).superfish({ 
            delay:500,
            animation:{opacity:'<?php if($this->params->get("dropopacity")) : ?>show<?php else: ?>hide<?php endif; ?>',height:'<?php if($this->params->get("dropheight")) : ?>show<?php else: ?>hide<?php endif; ?>',width:'<?php if($this->params->get("dropwidth")): ?>show<?php else: ?>hide<?php endif; ?>'},
            speed:'<?php echo $this->params->get("dropspeed"); ?>',
            autoArrows:true,
            dropShadows:false 
        });
    }); 
	</script>
	<?php endif; ?>
	<?php if( $this->countModules('position-1')) : ?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#menupanel').on('click', function() {
			jQuery('div.panel1').animate({
				'width': 'show'
			}, 300, function() {
				jQuery('div.menupanel').fadeIn(200);
			});
		});
		jQuery('span.closemenu').on('click', function() {
			jQuery('div.menupanel').fadeOut(200, function() {
				jQuery('div.panel1').animate({
					'width': 'hide'
				}, 300);
			});
		});
	});
	</script>
	<?php endif; ?>
	<?php echo $this->params->get("headcode"); ?>
		
	<?php if( $this->countModules('builtin-slideshow')) : ?>
	<!-- Built-in Slideshow -->
	<?php if($this->params->get("cam_turnOn")) : ?>
		<link rel="stylesheet" id="camera-css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/camera.css" type="text/css" media="all" /> 
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.easing.1.3.js"></script> 
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/camera.min.js"></script> 
		<script>
			jQuery(function(){		
				jQuery('#ph-camera-slideshow').camera({
					alignment: 'topCenter',
					autoAdvance: <?php if ($this->params->get("cam_autoAdvance")) : ?>true<?php else: ?>false<?php endif; ?>,
					mobileAutoAdvance: <?php if ($this->params->get("cam_mobileAutoAdvance")) : ?>true<?php else: ?>false<?php endif; ?>, 
					slideOn: '<?php if($this->params->get("cam_slideOn")) : echo $this->params->get("cam_slideOn"); else : ?>random<?php endif; ?>',	
					thumbnails: <?php if ($this->params->get("cam_thumbnails")) : ?>true<?php else: ?>false<?php endif; ?>,
					time: <?php if($this->params->get("cam_time")) : echo $this->params->get("cam_time"); else : ?>7000<?php endif; ?>,
					transPeriod: <?php if($this->params->get("cam_transPeriod")) : echo $this->params->get("cam_transPeriod"); else : ?>1500<?php endif; ?>,
					cols: <?php if($this->params->get("cam_cols")) : echo $this->params->get("cam_cols"); else : ?>10<?php endif; ?>,
					rows: <?php if($this->params->get("cam_rows")) : echo $this->params->get("cam_rows"); else : ?>10<?php endif; ?>,
					slicedCols: <?php if($this->params->get("cam_slicedCols")) : echo $this->params->get("cam_slicedCols"); else : ?>10<?php endif; ?>,	
					slicedRows: <?php if($this->params->get("cam_slicedRows")) : echo $this->params->get("cam_slicedRows"); else : ?>10<?php endif; ?>,
					fx: '<?php if($this->params->get("cam_fx_multiple_on")) : echo $this->params->get("cam_fx_multi"); else : echo $this->params->get("cam_fx"); endif; ?>',
					gridDifference: <?php if($this->params->get("cam_gridDifference")) : echo $this->params->get("cam_gridDifference"); else : ?>250<?php endif; ?>,
					height: '<?php if($this->params->get("cam_height")) : echo $this->params->get("cam_height"); else : ?>50%<?php endif; ?>',
					minHeight: '<?php echo $this->params->get("cam_minHeight"); ?>',
					imagePath: '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/',	
					hover: <?php if ($this->params->get("cam_hover")) : ?>true<?php else: ?>false<?php endif; ?>,
					loader: '<?php if($this->params->get("cam_loader")) : echo $this->params->get("cam_loader"); else : ?>pie<?php endif; ?>',
					barDirection: '<?php if($this->params->get("cam_barDirection")) : echo $this->params->get("cam_barDirection"); else : ?>leftToRight<?php endif; ?>',
					barPosition: '<?php if($this->params->get("cam_barPosition")) : echo $this->params->get("cam_barPosition"); else : ?>bottom<?php endif; ?>',	
					pieDiameter: <?php if($this->params->get("cam_pieDiameter")) : echo $this->params->get("cam_pieDiameter"); else : ?>38<?php endif; ?>,
					piePosition: '<?php if($this->params->get("cam_piePosition")) : echo $this->params->get("cam_piePosition"); else : ?>rightTop<?php endif; ?>',
					loaderColor: '<?php if($this->params->get("cam_loaderColor")) : echo $this->params->get("cam_loaderColor"); else : ?>#eeeeee<?php endif; ?>', 
					loaderBgColor: '<?php if($this->params->get("cam_loaderBgColor")) : echo $this->params->get("cam_loaderBgColor"); else : ?>#222222<?php endif; ?>', 
					loaderOpacity: <?php if($this->params->get("cam_loaderOpacity")) : echo $this->params->get("cam_loaderOpacity"); else : ?>8<?php endif; ?>,
					loaderPadding: <?php if($this->params->get("cam_loaderPadding")) : echo $this->params->get("cam_loaderPadding"); else : ?>2<?php endif; ?>,
					loaderStroke: <?php if($this->params->get("cam_loaderStroke")) : echo $this->params->get("cam_loaderStroke"); else : ?>7<?php endif; ?>,
					navigation: <?php if ($this->params->get("cam_navigation")) : ?>true<?php else: ?>false<?php endif; ?>,
					playPause: <?php if ($this->params->get("cam_playPause")) : ?>true<?php else: ?>false<?php endif; ?>,
					navigationHover: <?php if ($this->params->get("cam_navigationHover")) : ?>true<?php else: ?>false<?php endif; ?>,
					mobileNavHover: <?php if ($this->params->get("cam_mobileNavHover")) : ?>true<?php else: ?>false<?php endif; ?>,
					opacityOnGrid: <?php if ($this->params->get("cam_opacityOnGrid")) : ?>true<?php else: ?>false<?php endif; ?>,
					pagination: <?php if ($this->params->get("cam_pagination")) : ?>true<?php else: ?>false<?php endif; ?>,
					pauseOnClick: <?php if ($this->params->get("cam_pauseOnClick")) : ?>true<?php else: ?>false<?php endif; ?>,
					portrait: <?php if ($this->params->get("cam_portrait")) : ?>true<?php else: ?>false<?php endif; ?>
				});
			});
		</script>
	<?php endif; ?>
	<!-- End of Built-in Slideshow -->
	<?php endif; ?>
	
    <style type="text/css">
	body {font-size: <?php echo $this->params->get('contentfontsize'); ?>;}
	#site-name-handler{height:<?php echo $this->params->get('topheight'); ?>px; }
	#sn-position h1{left:<?php echo $this->params->get('H1TitlePositionX'); ?>px;top:<?php echo $this->params->get('H1TitlePositionY'); ?>px;color:<?php echo $this->params->get('sitenamecolor'); ?>;font-size:<?php echo $this->params->get('sitenamefontsize'); ?>;}
	#sn-position h1 a {color:<?php echo $this->params->get('sitenamecolor'); ?>;}
	#sn-position h2 {left:<?php echo $this->params->get('H2TitlePositionX'); ?>px;top:<?php echo $this->params->get('H2TitlePositionY'); ?>px;color:<?php echo $this->params->get('slogancolor'); ?>;font-size:<?php echo $this->params->get('sloganfontsize'); ?>;}
	ul.columns-2 {width: <?php echo $this->params->get('dropdownhandler2'); ?>px !important;}
	ul.columns-3 {width: <?php echo $this->params->get('dropdownhandler3'); ?>px !important;}
	ul.columns-4 {width: <?php echo $this->params->get('dropdownhandler4'); ?>px !important;}
	ul.columns-5 {width: <?php echo $this->params->get('dropdownhandler5'); ?>px !important;}
	<?php if( $this->countModules('builtin-slideshow')) : 
	if($this->params->get("cam_turnOn")) : ?>
	.camera_caption { top: <?php echo $this->params->get("cam_caption_y_position"); ?>; }
	.camera_caption div.container div { width: <?php echo $this->params->get("cam_caption_width"); ?>; }
	.camera_pie {
		width: <?php if($this->params->get("cam_pieDiameter")) : echo $this->params->get("cam_pieDiameter"); else : ?>38<?php endif; ?>px;
		height: <?php if($this->params->get("cam_pieDiameter")) : echo $this->params->get("cam_pieDiameter"); else : ?>38<?php endif; ?>px;
	}
	#slideshow-handler { min-height: <?php echo $this->params->get("cam_minHeight"); ?>; }
	<?php endif; endif; ?>
	
<?php							
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   return implode(",", $rgb);
}
?>
<?php if($this->params->get('usetheme')==false) : ?> 
body{background-color:<?php echo $this->params->get("bodybackground"); ?>;color:<?php echo $this->params->get("bodytextcolor"); ?>;}.main-bg, #text-background, dt.tabs.open, #content-handler, .rm-line {	background-color: <?php echo $this->params->get("contentareabg"); ?>;}a,a:hover, .moduletable_menu_light ul.menu li ul li a:hover, .moduletable_menu ul.menu li ul li a:hover {color: <?php echo $this->params->get("linkscolor"); ?>;}.button, button, a.button, dt.tabs.closed:hover, dt.tabs.closed:hover h3 a, .closemenu, .vmproduct.productdetails .spacer:hover .pr-add, .vmproduct.productdetails .spacer:hover .pr-add-bottom, a.product-details, input.addtocart-button, a.ask-a-question, .highlight-button, .vm-button-correct, .category .spacer:hover .cat-title,span.quantity-controls input.quantity-plus, span.quantity-controls input.quantity-minus, .cartpanel span.closecart, .vm-pagination ul li a, #LoginForm .btn-group > .dropdown-menu, #LoginForm .btn-group > .dropdown-menu a,.featured-view .spacer:hover h3, .latest-view .spacer:hover h3, .topten-view .spacer:hover h3, .recent-view .spacer:hover h3, .related-products-view .spacer:hover h3, .browse-view .product .spacer:hover h2  {color: <?php echo $this->params->get("buttonscolor"); ?> !important;background-color: <?php echo $this->params->get("buttonsbg"); ?> !important;}.vmproduct.productdetails .spacer:hover .pr-add a, .vmproduct.productdetails .spacer:hover .pr-add-bottom a, .vmproduct.productdetails .spacer:hover .pr-add-bottom,.featured-view .spacer:hover h3 a, .latest-view .spacer:hover h3 a, .topten-view .spacer:hover h3 a, .recent-view .spacer:hover h3 a, .related-products-view .spacer:hover h3 a, .browse-view .product .spacer:hover h2 a {color: <?php echo $this->params->get("buttonscolor"); ?>;}.button:hover, button:hover, a.button:hover, .closemenu:hover, a.product-details:hover, input.addtocart-button:hover, a.ask-a-question:hover, .highlight-button:hover, .vm-button-correct:hover, span.quantity-controls input.quantity-plus:hover, span.quantity-controls input.quantity-minus:hover, .cartpanel span.closecart:hover, .vm-pagination ul li a:hover, #LoginForm .btn-group > .dropdown-menu a:hover {color: <?php echo $this->params->get("buttonshcolor"); ?> !important;background-color: <?php echo $this->params->get("buttonshbg"); ?> !important;}#LoginForm .caret {border-top-color: <?php echo $this->params->get("buttonshcolor"); ?> !important;}#nav-line, #tab-modules .moduletable_style2 a.button {background-color: <?php echo $this->params->get("navlinebg"); ?>;color: <?php echo $this->params->get("navlinetext"); ?>;}#top-nav-handler a{color: <?php echo $this->params->get("navlinea"); ?>;}#slideshow-handler-bg {background-color: <?php echo $this->params->get("slideshowhandlerbg"); ?>;}.camera_prev > span,.camera_next > span,.camera_commands > .camera_play,.camera_commands > .camera_stop,.camera_prevThumbs div,.camera_nextThumbs div {background-color: rgba(<?php echo hex2rgb($this->params->get("slideshowarrows")); ?>,0.75) !important;}.camera_prev > span:hover,.camera_next > span:hover,.camera_commands > .camera_play:hover,.camera_commands > .camera_stop:hover,.camera_prevThumbs div:hover,.camera_nextThumbs div:hover {background-color: rgba(<?php echo hex2rgb($this->params->get("slideshowharrows")); ?>,0.75) !important;}.camera_wrap .camera_pag .camera_pag_ul li.cameracurrent > span, .camera_wrap .camera_pag .camera_pag_ul li:hover > span {background-color: <?php echo $this->params->get("slideshowarrows"); ?>;}.camera_thumbs_cont ul li > img {border: 1px solid <?php echo $this->params->get("slideshowthumbsborder"); ?> !important;}.camera_caption {color: <?php echo $this->params->get("slideshowcaptions"); ?>;}#menu-handler, .dk_options, .panel1 {background: <?php echo $this->params->get("topmenuhandler"); ?>;}#menu .menu-nav li ul, #menu .menu-nav li ul li ul, #nav ol, #nav ul, #nav ol ol, #nav ul ul, .print-icon a:hover, .email-icon a:hover{background-color: <?php echo $this->params->get("topmenuhandler"); ?> !important;}#menu .menu-nav li a, #menu .menu-nav ul a, #menu .menu-nav ul ul a, ul.menu-nav li a small, .panel1, .panel1 a, #menu .search .inputbox {color: <?php echo $this->params->get("topmenulinks"); ?>;}#menu .menu-nav a:hover, .menu-nav li.sfHover > a, .menu-nav li a:hover, .menu-nav li.active > a, .menupanel ul.selectnav li a:hover, .dk_options a:hover, .dk_option_current a, a#menupanel:hover {background-color: <?php echo $this->params->get("topmenulinkshbg"); ?>;color: #ffffff <?php echo $this->params->get("topmenulinkshcolor"); ?>;}#menu .search:hover {background-color: <?php echo $this->params->get("searchhbg"); ?>;color: <?php echo $this->params->get("searchhtext"); ?>;}#menu .search:hover .inputbox {color: <?php echo $this->params->get("searchhtext"); ?>;}fieldset, #bottom-content-modules {border-top: 1px solid <?php echo $this->params->get("defaultborders"); ?>;}thead th, table th, tbody th, tbody td {border-top: 1px solid <?php echo $this->params->get("defaultborders"); ?>;}tbody th, tbody td, h2 .contact-name, .search-results dt.result-title{border-bottom: 1px solid <?php echo $this->params->get("defaultborders"); ?>;}.moduletable_menu h3, .moduletable h3{border-bottom: 1px solid <?php echo $this->params->get("defaultborders"); ?>;}.moduletable_menu ul.menu li {border-bottom: 1px solid <?php echo $this->params->get("defaultborders"); ?>;}.moduletable_menu ul.menu li a, .latestnews_menu li a {color: <?php echo $this->params->get("linkscolor"); ?>;}.moduletable_menu ul.menu li a:hover, ul.latestnews_menu li a:hover {background-color: <?php echo $this->params->get("linkscolor"); ?>;color: <?php echo $this->params->get("contentareabg"); ?>;}.custom_style2 h3 > img, .custom_style2 h3 > a img {background-color: <?php echo $this->params->get("linkscolor"); ?>;border: 3px solid <?php echo $this->params->get("linkscolor"); ?>;}#footer {border-top: 2px solid <?php echo $this->params->get("footerborder"); ?>;}#bottom-bg {background-color: <?php echo $this->params->get("footerbg"); ?>;color: <?php echo $this->params->get("footertextcolor"); ?>;}#bottom-bg h3, #bottom-bg a { color: <?php echo $this->params->get("footerheadingslinks"); ?>;}#footer-line a {color: <?php echo $this->params->get("footertextlinks"); ?>;}#footer-line a:hover {color: <?php echo $this->params->get("footertextlinksh"); ?>;}#footer-line {color: <?php echo $this->params->get("footertextlinks"); ?>;}
<?php endif; ?>
</style>


<?php if( $this->countModules('top-1 or top-2 or top-3 or top-4 or top-5 or top-6')) : 
	if( $this->countModules('top-1') ) $a[0] = 0;
	if( $this->countModules('top-2') ) $a[1] = 1;
	if( $this->countModules('top-3') ) $a[2] = 2;
	if( $this->countModules('top-4') ) $a[3] = 3;
	if( $this->countModules('top-5') ) $a[4] = 4;
	if( $this->countModules('top-6') ) $a[5] = 5; 
	$topmodules1 = count($a); 
	if ($topmodules1 == 1) $tm1class = "span12";
	if ($topmodules1 == 2) $tm1class = "span6";
	if ($topmodules1 == 3) $tm1class = "span4";
	if ($topmodules1 == 4) $tm1class = "span3";
	if ($topmodules1 == 5) { $tm1class = "span2"; $tm1class5w = "17.9%"; };
	if ($topmodules1 == 6) $tm1class = "span2";
	endif; 
	
	if( $this->countModules('top-7 or top-8 or top-9 or top-10 or top-11 or top-12')) : 
	if( $this->countModules('top-7') ) $b[0] = 0;
	if( $this->countModules('top-8') ) $b[1] = 1;
	if( $this->countModules('top-9') ) $b[2] = 2;
	if( $this->countModules('top-10') ) $b[3] = 3;
	if( $this->countModules('top-11') ) $b[4] = 4;
	if( $this->countModules('top-12') ) $b[5] = 5; 
	$topmodules2 = count($b); 
	if ($topmodules2 == 1) $tm2class = "span12";
	if ($topmodules2 == 2) $tm2class = "span6";
	if ($topmodules2 == 3) $tm2class = "span4";
	if ($topmodules2 == 4) $tm2class = "span3";
	if ($topmodules2 == 5) { $tm2class = "span2"; $tm2class5w = "17.9%"; };
	if ($topmodules2 == 6) $tm2class = "span2";
	endif; 
	
	if( $this->countModules('bottom-1 or bottom-2 or bottom-3 or bottom-4 or bottom-5 or bottom-6')) :
	if( $this->countModules('bottom-1') ) $c[0] = 0; 
	if( $this->countModules('bottom-2') ) $c[1] = 1; 
	if( $this->countModules('bottom-3') ) $c[2] = 2; 
	if( $this->countModules('bottom-4') ) $c[3] = 3; 
	if( $this->countModules('bottom-5') ) $c[4] = 4; 
	if( $this->countModules('bottom-6') ) $c[5] = 5; 
	$botmodules = count($c); 
	if ($botmodules == 1) $bmclass = "span12";
	if ($botmodules == 2) $bmclass = "span6";
	if ($botmodules == 3) $bmclass = "span4";
	if ($botmodules == 4) $bmclass = "span3";
	if ($botmodules == 5) { $bmclass = "span2"; $bmclass5w = "17.7%"; };
	if ($botmodules == 6) $bmclass = "span2";
	endif; 
	
	if( $this->countModules('top-a or top-b or top-c or top-d')) :
	if( $this->countModules('top-a') ) $d[0] = 0; 
	if( $this->countModules('top-b') ) $d[1] = 1; 
	if( $this->countModules('top-c') ) $d[2] = 2; 
	if( $this->countModules('top-d') ) $d[3] = 3; 
	$topamodules = count($d); 
	if ($topamodules == 1) $tpaclass = "span12";
	if ($topamodules == 2) $tpaclass = "span6";
	if ($topamodules == 3) $tpaclass = "span4";
	if ($topamodules == 4) $tpaclass = "span3";
	endif; 
	
	if( $this->countModules('bottom-a or bottom-b or bottom-c or bottom-d')) :
	if( $this->countModules('bottom-a') ) $e[0] = 0; 
	if( $this->countModules('bottom-b') ) $e[1] = 1; 
	if( $this->countModules('bottom-c') ) $e[2] = 2; 
	if( $this->countModules('bottom-d') ) $e[3] = 3; 
	$bottomamodules = count($e); 
	if ($bottomamodules == 1) $bmaclass = "span12";
	if ($bottomamodules == 2) $bmaclass = "span6";
	if ($bottomamodules == 3) $bmaclass = "span4";
	if ($bottomamodules == 4) $bmaclass = "span3";
	endif; 
	
	if( $this->countModules('top-right-1 or top-right-2 or position-6 or bottom-right-1 or bottom-right-2') && $this->countModules('top-left-1 or top-left-2 or position-7 or bottom-left-1 or bottom-left-2')  ) : $mcols = 'span6'; 
	elseif( $this->countModules('top-right-1 or top-right-2 or position-6 or bottom-right-1 or bottom-right-2') && !$this->countModules('top-left-1 or top-left-2 or position-7 or bottom-left-1 or bottom-left-2')  ) : $mcols = 'span9'; 
	elseif( !$this->countModules('top-right-1 or top-right-2 or position-6 or bottom-right-1 or bottom-right-2') && $this->countModules('top-left-1 or top-left-2 or position-7 or bottom-left-1 or bottom-left-2')  ) : $mcols = 'span9'; else : $mcols = 'span12'; endif; ?>
</head>
<body>
<div class="container main-bg">
	<div class="inner">
	<?php if(JFactory::getApplication()->getMessageQueue()) : ?>
		<div class="navbar-fixed-top" id="top-com-handler">
			<div class="alert alert-block alert-error fade in">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<jdoc:include type="message" />
			</div>
		</div>
	<?php endif; ?>
		<header id="top-handler" class="row-fluid">
			<div id="top">
				<div class="span12">
					<div class="row-fluid">
						<div id="site-name-handler" class="span12">
							<div id="sn-position">
							<?php if($this->params->get('logoLinked')) : ?>
							<?php if($this->params->get('H1TitleImgText') == true) : ?>
							<h1> <a href="<?php echo $this->baseurl; ?>"><img alt="<?php echo $this->params->get("H1Title"); ?>" src="<?php echo $this->params->get("H1Titleimage"); ?>" /></a></h1>
							<?php else : ?>
							<h1> <a href="<?php echo $this->baseurl; ?>"> <?php echo $this->params->get("H1Title"); ?> </a> </h1>
							<?php endif; ?>
							<?php else : ?>
							<?php if($this->params->get('H1TitleImgText') == true) : ?>
							<h1> <img alt="<?php echo $this->params->get("H1Title"); ?>" src="<?php echo $this->params->get("H1Titleimage"); ?>" /></a></h1>
							<?php else : ?>
							<h1> <?php echo $this->params->get("H1Title"); ?> </h1>
							<?php endif; ?>
							<?php endif; ?>
							<?php if($this->params->get('H2TitleImgText') == true) : ?>
							<h2> <img alt="<?php echo $this->params->get("H2Title"); ?>" src="<?php echo $this->params->get("H2Titleimage"); ?>" /> </h2>
							<?php else : ?>
							<h2> <?php echo $this->params->get("H2Title"); ?> </h2>
							<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
		</header>
		<?php if( $this->countModules('position-1 or position-0 or search')) : ?>
		<nav id="menu">
			<div id="menu-handler">
				<div class="row-fluid">
					<?php if( $this->countModules('position-0 or search')) : ?><div class="span9"><?php else : ?><div class="span12"><?php endif; ?><jdoc:include type="modules" name="position-1" /></div>
					<?php if( $this->countModules('position-0 or search')) : ?><div id="search-position" class="span3"><jdoc:include type="modules" name="position-0" /><jdoc:include type="modules" name="search" /></div><?php endif; ?>
				</div>
			</div>
		</nav>
		<?php endif; ?>
		<?php if( $this->countModules('position-2')) : ?>
			<div id="nav-line">
				<div class="row-fluid">
					<div class="span12"><div id="brcr"><jdoc:include type="modules" name="position-2" /></div></div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>

<div class="container main-bg" id="main-handler">
	<div class="inner">
		<?php if( $this->countModules('builtin-slideshow or slideshow') ) : ?>
		<div id="slideshow-handler-bg">
			<div id="slideshow-handler"> 
				<?php if( $this->countModules('builtin-slideshow') ) : ?>
				<?php
				$count_slides = JDocumentHTML::countModules('builtin-slideshow');
				$module = JModuleHelper::getModules('builtin-slideshow');
				$moduleParams = new JRegistry();
				echo "<div class=\"camera_wrap\" id=\"ph-camera-slideshow\">"; 
				for($sld_a=0;$sld_a<$count_slides;$sld_a++) { 
					$moduleParams->loadString($module[$sld_a]->params);
					$bgimage[$sld_a] = $moduleParams->get('backgroundimage', 'defaultValue'); 
					$caption_effect[$sld_a] = $moduleParams->get('moduleclass_sfx', 'defaultValue'); 
				?>
				<div data-thumb="<?php if($bgimage[$sld_a] == "defaultValue") : echo $this->baseurl."/templates/".$this->template."/images/slideshow/no-image.png"; else : echo $this->baseurl."/".$bgimage[$sld_a]; endif; ?>" data-src="<?php if($bgimage[$sld_a] == "defaultValue") : echo $this->baseurl."/templates/".$this->template."/images/slideshow/no-image.png"; else : echo $this->baseurl."/".$bgimage[$sld_a]; endif; ?>">
					<div class="camera_caption container <?php if(($caption_effect[$sld_a] == "defaultValue")) : ?>fadeFromLeft<?php else: echo $caption_effect[$sld_a]; endif; ?>" style="<?php if(empty($module[$sld_a]->content)) : ?>display:none !important;visibility: hidden !important; opacity: 0 !important;<?php endif; ?>">
						<div class="container"><div><?php echo $module[$sld_a]->content; ?></div></div>
					</div>
				</div>
				<?php } echo "</div>"; // End of camera_wrap ?> 
				<?php elseif( $this->countModules('slideshow') ) : ?>
				<div class="sl-3rd-parties">
					<jdoc:include type="modules" name="slideshow" />
				</div>
				<?php endif; ?>
			</div>
		</div>
		<?php else: ?>
		<div id="slideshow-handler-bg" class="no-slideshow">
			<div id="slideshow-handler">
				<div id="sl-bg-cover"></div>
			</div>
		</div>
		<?php endif; ?>

		<div id="content-handler">
					
			<?php if( $this->countModules('top-1 or top-2 or top-3 or top-4 or top-5 or top-6')) : ?>
			<div id="tab-modules">
				<div id="tab-modules-handler" class="row-fluid">
					<?php if( $this->countModules('top-1')) : ?><div class="<?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-1" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('top-2')) : ?><div class="<?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-2" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('top-3')) : ?><div class="<?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-3" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('top-4')) : ?><div class="<?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-4" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('top-5')) : ?><div class="<?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-5" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('top-6')) : ?><div class="<?php echo $tm1class; ?>" style="<?php if ($topmodules1 == 5) {echo "width:".$tm1class5w;} ?>"><jdoc:include type="modules" name="top-6" style="vmdefault" /></div><?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
						
						
			<?php if( $this->countModules('top-7 or top-8 or top-9 or top-10 or top-11 or top-12')) : ?>
			<div id="top-modules">
				<div class="row-fluid">
					<?php if( $this->countModules('top-7')) : ?><div class="<?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-7" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('top-8')) : ?><div class="<?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-8" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('top-9')) : ?><div class="<?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-9" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('top-10')) : ?><div class="<?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-10" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('top-11')) : ?><div class="<?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-11" style="vmdefault" /></div><?php endif; ?>
					<?php if( $this->countModules('top-12')) : ?><div class="<?php echo $tm2class; ?>" style="<?php if ($topmodules2 == 5) {echo "width:".$tm2class5w;} ?>"><jdoc:include type="modules" name="top-12" style="vmdefault" /></div><?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
						
			<div id="tmp-container">
					
					<?php if( $this->countModules('position-3')) : ?>
					<div class="row-fluid">
						<div class="span12"><div id="newsflash-position"><jdoc:include type="modules" name="position-3" style="vmdefault" /></div></div>
					</div>
					<?php endif; ?>
					<div id="main-content-handler">
						<div class="row-fluid">
							<?php if( $this->countModules('top-left-1 or top-left-2 or position-7 or bottom-left-1 or bottom-left-2')) : ?>
							<div class="span3">
								<jdoc:include type="modules" name="top-left-1" style="vmdefault" />
								<jdoc:include type="modules" name="top-left-2" style="vmdefault" />
								<jdoc:include type="modules" name="position-7" style="vmdefault" />
								<jdoc:include type="modules" name="bottom-left-1" style="vmdefault" />
								<jdoc:include type="modules" name="bottom-left-2" style="vmdefault" />
							</div>
							<?php endif; ?>
							<div class="<?php echo $mcols; ?>">
								
								<?php if( $this->countModules('top-long')) : ?>
									<jdoc:include type="modules" name="top-long" style="vmdefault" />
									<div class="clear-sep"></div>
								<?php endif; ?>
								<?php if( $this->countModules('top-a or top-b or top-c or top-d')) : ?>
								<div id="top-content-modules">
									<div class="row-fluid">
										<?php if( $this->countModules('top-a')) : ?><div class="<?php echo $tpaclass; ?>"><jdoc:include type="modules" name="top-a" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('top-b')) : ?><div class="<?php echo $tpaclass; ?>"><jdoc:include type="modules" name="top-b" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('top-c')) : ?><div class="<?php echo $tpaclass; ?>"><jdoc:include type="modules" name="top-c" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('top-d')) : ?><div class="<?php echo $tpaclass; ?>"><jdoc:include type="modules" name="top-d" style="vmdefault" /></div><?php endif; ?>
									</div>
								</div>
								<?php endif; ?>
								<div class="tmp-content-area">
								<jdoc:include type="component" />
								</div>
								<?php if( $this->countModules('bottom-a or bottom-b or bottom-c or bottom-d')) : ?>
								<div id="bottom-content-modules">
									<div class="row-fluid">
										<?php if( $this->countModules('bottom-a')) : ?><div class="<?php echo $bmaclass; ?>"><jdoc:include type="modules" name="bottom-a" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('bottom-b')) : ?><div class="<?php echo $bmaclass; ?>"><jdoc:include type="modules" name="bottom-b" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('bottom-c')) : ?><div class="<?php echo $bmaclass; ?>"><jdoc:include type="modules" name="bottom-c" style="vmdefault" /></div><?php endif; ?>
										<?php if( $this->countModules('bottom-d')) : ?><div class="<?php echo $bmaclass; ?>"><jdoc:include type="modules" name="bottom-d" style="vmdefault" /></div><?php endif; ?>
									</div>	
								</div>
								<?php endif; ?>
							</div>
							<?php if( $this->countModules('top-right-1 or top-right-2 or position-6 or bottom-right-1 or bottom-right-2')) : ?>
							<div class="span3">
								<jdoc:include type="modules" name="top-right-1" style="vmdefault" />
								<jdoc:include type="modules" name="top-right-2" style="vmdefault" />
								<jdoc:include type="modules" name="position-6" style="vmdefault" />
								<jdoc:include type="modules" name="bottom-right-1" style="vmdefault" />
								<jdoc:include type="modules" name="bottom-right-2" style="vmdefault" />
							</div>
							<?php endif; ?>
						</div>
					</div>
					<?php if( $this->countModules('bottom-long')) : ?>
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">
								<jdoc:include type="modules" name="bottom-long" style="vmdefault" />
							</div>
						</div>
					</div>
					<?php endif; ?>

			</div>
		</div>
	</div>
</div>
<div class="container" id="bottom-bg">
	<div class="inner">
		<?php if( $this->countModules('bottom-1 or bottom-2 or bottom-3 or bottom-4 or bottom-5 or bottom-6')) : ?>
		<div id="bot-modules">
			<div class="row-fluid">
				<?php if( $this->countModules('bottom-1')) : ?><div class="<?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-1" style="vmdefault" /></div><?php endif; ?>
				<?php if( $this->countModules('bottom-2')) : ?><div class="<?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-2" style="vmdefault" /></div><?php endif; ?>
				<?php if( $this->countModules('bottom-3')) : ?><div class="<?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-3" style="vmdefault" /></div><?php endif; ?>
				<?php if( $this->countModules('bottom-4')) : ?><div class="<?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-4" style="vmdefault" /></div><?php endif; ?>
				<?php if( $this->countModules('bottom-5')) : ?><div class="<?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-5" style="vmdefault" /></div><?php endif; ?>
				<?php if( $this->countModules('bottom-6')) : ?><div class="<?php echo $bmclass; ?>" style="<?php if ($botmodules == 5) {echo "width:".$bmclass5w;} ?>"><jdoc:include type="modules" name="bottom-6" style="vmdefault" /></div><?php endif; ?>
			</div>
		</div>
		<div class="clear"> </div>
		<?php endif; ?>

		<?php if($this->params->get('twitterON') || $this->params->get('linkedinON') || $this->params->get('RSSON') || $this->params->get('facebookON') || $this->params->get('bloggerON')  || $this->params->get('myspaceON') || $this->params->get('vimeoON') || $this->params->get('stumbleuponON')  || $this->params->get('diggON') ) : ?>
		<div id="social">
			<ul id="social-links">
				<?php if($this->params->get('twitterON') == true ) : ?><li><a href="<?php echo $this->params->get('twitter'); ?>" title="Twitter" id="twitter" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/twitter.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('gplusON') == true ) : ?><li><a href="<?php echo $this->params->get('gplus'); ?>" title="Google Plus" id="gplus" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/gplus.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('facebookON') == true ) : ?><li><a href="<?php echo $this->params->get('facebook'); ?>" title="Facebook" id="facebook" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/facebook.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('RSSON') == true ) : ?><li><a href="<?php echo $this->params->get('RSS'); ?>" title="RSS" id="rss" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/rss.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('linkedinON') == true ) : ?><li><a href="<?php echo $this->params->get('linkedin'); ?>" title="Linkedin" id="linkedin" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/linkedin.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('youtubeON') == true ) : ?><li><a href="<?php echo $this->params->get('youtube'); ?>" title="youtube" id="youtube" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/youtube.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('vimeoON') == true ) : ?><li><a href="<?php echo $this->params->get('vimeo'); ?>" title="vimeo" id="vimeo" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/vimeo.png"></span></a></li><?php endif; ?>
				
				<?php if($this->params->get('pinterestON') == true ) : ?><li><a href="<?php echo $this->params->get('pinterest'); ?>" title="pinterest" id="pinterest" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/pinterest.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('instagramON') == true ) : ?><li><a href="<?php echo $this->params->get('instagram'); ?>" title="instagram" id="instagram" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/instagram.png"></span></a></li><?php endif; ?>
				
				<?php if($this->params->get('stumbleuponON') == true ) : ?><li><a href="<?php echo $this->params->get('stumbleupon'); ?>" title="stumbleupon" id="stumbleupon" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/stumbleupon.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('diggON') == true ) : ?><li><a href="<?php echo $this->params->get('digg'); ?>" title="digg" id="digg" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/digg.png"></span></a></li><?php endif; ?>
				<?php if($this->params->get('bloggerON') == true ) : ?><li><a href="<?php echo $this->params->get('blogger'); ?>" title="Blogger" id="blogger" target="_blank"><span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/blogger.png"></span></a></li><?php endif; ?>
			</ul>
		</div>
		<?php endif; ?>
		
		<?php if( $this->countModules('footer or footer-left or footer-right')) : ?>
		<footer id="footer">
			<div id="footer-line" class="row-fluid">
				<?php if( $this->countModules('footer')) : ?><div class="span12"><jdoc:include type="modules" name="footer" /></div><?php endif; ?>
				<?php if( $this->countModules('footer-left or footer-right')) : ?>
				<div id="foo-left-right">
					<?php if( $this->countModules('footer-left')) : ?><div class="<?php if( $this->countModules('footer-left and footer-right')) : ?>span6<?php else: ?>span12<?php endif;?>"><jdoc:include type="modules" name="footer-left" /></div><?php endif; ?>
					<?php if( $this->countModules('footer-right')) : ?><div class="<?php if( $this->countModules('footer-left and footer-right')) : ?>span6<?php else: ?>span12<?php endif;?>"><jdoc:include type="modules" name="footer-right" />
					<?php
					$app = JFactory::getApplication();
					$menu = $app->getMenu();
					if ($menu->getActive() == $menu->getDefault()) {
						echo '<p style="text-align:right;"></p>';
					}
					?>
					</div><?php endif; ?>
					<div class="clear"> </div>
				</div>
				<?php endif; ?>
			</div>
		</footer>
		<?php endif; ?>
	</div>
</div>

<?php if($this->params->get("bodybackgroundimage")) : ?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.backstretch.min.js"></script>
<script type="text/javascript">
jQuery.backstretch("<?php echo $this->params->get("bodybackgroundimage"); ?>");
</script>
<?php endif; ?>
<jdoc:include type="modules" name="debug" />
<?php echo $this->params->get("footercode"); ?>
</body>
</html>