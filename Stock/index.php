<?php
include('../database/connection.php');
session_start();
if(!isset($_SESSION['login'])){
echo "<script>
alert('You Are Not Authorised');
location.href='../home.html'</script>";
}
?>
<!DOCTYPE html>
<html lang="en-US">
<!-- Copied from http://wpdemos.lsvr.sk/beautyspot/services/ by Cyotek WebCopy 1.3.0.405, Thursday, January 25, 2018, 7:53:05 AM -->

<head data-template-uri="http://wpdemos.lsvr.sk/beautyspot/wp-content/themes/beautyspot">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



	<link rel="shortcut icon" href="../wp-content/uploads/sites/2/2017/01/favicon.png">
    <title>Stock</title>
<link rel='dns-prefetch' href='//fonts.googleapis.com'>
<link rel='dns-prefetch' href='//s.w.org'>
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/wpdemos.lsvr.sk\/beautyspot\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.5"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b!==c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='woocommerce-layout-css' href='../wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=3.1.2' type='text/css' media='all'>
<link rel='stylesheet' id='woocommerce-smallscreen-css' href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=3.1.2' type='text/css' media='only screen and (max-width: 768px)'>
<link rel='stylesheet' id='woocommerce-general-css' href='../wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=3.1.2' type='text/css' media='all'>
<link rel='stylesheet' id='main-style-css' href='../wp-content/themes/beautyspot/style.css?ver=2.3.2' type='text/css' media='all'>
<style id='main-style-inline-css' type='text/css'>
body, input, textarea, select, h2 em { font-family: 'Source Sans Pro', Arial, sans-serif; font-size: 16px; font-weight: 400; } .wpcf7-list-item-label { font-family: 'Source Sans Pro', Arial, sans-serif; }
.m-secondary-font, .heading-2, .header-menu > ul > li > span, .various-content h1, .various-content h2, .various-content h3, .various-content h4, .various-content h5, .c-button, .default-form label, .wpcf7-form label, table th, .header-cart a, .header-search .search-toggle,.woocommerce .product .product_title, .woocommerce form label, .checkout h3 .checkout-input label { font-family: 'Montserrat', Arial, sans-serif; }
</style>
<link rel='stylesheet' id='theme-skin-css' href='../wp-content/themes/beautyspot/library/css/skin/default.css?ver=2.3.2' type='text/css' media='all'>
<link rel='stylesheet' id='js_composer_front-css' href='../wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.0.1' type='text/css' media='all'>
<link rel='stylesheet' id='redux-google-fonts-theme_options-css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro%3A200%2C300%2C400%2C600%2C700%2C900%2C200italic%2C300italic%2C400italic%2C600italic%2C700italic%2C900italic%7CMontserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic&#038;subset=latin&#038;ver=1484044305' type='text/css' media='all'>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<style type="text/css">
	#fom{
    display: inline-block; //Or display: inline; 
}

</style>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/beautyspot\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/beautyspot\/services\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/wpdemos.lsvr.sk\/beautyspot\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.1.2'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=5.0.1'></script>
<script type='text/javascript' src='../wp-content/themes/beautyspot/library/js/modernizr.custom.min.js?ver=2.3.2'></script>
<link rel='https://api.w.org/' href='../wp-json/index.htm'>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml">
<meta name="generator" content="WordPress 4.8.5">
<meta name="generator" content="WooCommerce 3.1.2">
<link rel="canonical" href="index.htm">
<link rel='shortlink' href='http://wpdemos.lsvr.sk/beautyspot/?p=130'>
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed-2?url=http%3A%2F%2Fwpdemos.lsvr.sk%2Fbeautyspot%2Fservices%2F">
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed-3?url=http%3A%2F%2Fwpdemos.lsvr.sk%2Fbeautyspot%2Fservices%2F&#038;format=xml">
<script type="text/javascript">
	function submit_by_id()
	{

		document.getElementById("add_therapy").submit();
	}
</script>
<script type="text/javascript">
(function(url){
	if(/(?:Chrome\/26\.0\.1410\.63 Safari\/537\.31|WordfenceTestMonBot)/.test(navigator.userAgent)){ return; }
	var addEvent = function(evt, handler) {
		if (window.addEventListener) {
			document.addEventListener(evt, handler, false);
		} else if (window.attachEvent) {
			document.attachEvent('on' + evt, handler);
		}
	};
	var removeEvent = function(evt, handler) {
		if (window.removeEventListener) {
			document.removeEventListener(evt, handler, false);
		} else if (window.detachEvent) {
			document.detachEvent('on' + evt, handler);
		}
	};
	var evts = 'contextmenu dblclick drag dragend dragenter dragleave dragover dragstart drop keydown keypress keyup mousedown mousemove mouseout mouseover mouseup mousewheel scroll'.split(' ');
	var logHuman = function() {
		var wfscr = document.createElement('script');
		wfscr.type = 'text/javascript';
		wfscr.async = true;
		wfscr.src = url + '&r=' + Math.random();
		(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(wfscr);
		for (var i = 0; i < evts.length; i++) {
			removeEvent(evts[i], logHuman);
		}
	};
	for (var i = 0; i < evts.length; i++) {
		addEvent(evts[i], logHuman);
	}
})('//wpdemos.lsvr.sk/beautyspot/?wordfence_logHuman=1&hid=DDAED6EC03241EA4B75E397F03DC09C2');
</script>	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress.">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://wpdemos.lsvr.sk/beautyspot/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="http://wpdemos.lsvr.sk/beautyspot/wp-content/themes/beautyspot/library/css/oldie.css"><![endif]--><!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]--><!--[if lt IE 9]><script src="http://wpdemos.lsvr.sk/beautyspot/wp-content/themes/beautyspot/library/js/respond.min.js"></script><![endif]--><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
</head>

<body class="page-template-default page page-id-130 m-has-style-switcher wpb-js-composer js-comp-ver-5.0.1 vc_responsive">

<!-- HEADER : begin -->
<header id="header" style="background-image: url( wp-content/uploads/sites/2/2017/01/header_bg.jpg );" class=" m-animated m-has-header-panel">
	<div class="header-bg">
		<div class="header-inner">
			<!-- HEADER BRANDING : begin -->
			<div class="header-branding">
				<img src="../logo.png" width="291" alt="Hair Creation">
				<!--<img src="wp-content/uploads/sites/2/2017/01/logo.png" data-hires="http://wpdemos.lsvr.sk/beautyspot/wp-content/uploads/sites/2/2017/01/logo.2x.png" width="291" alt="Hair Creation">-->
			</div>
			<!-- HEADER BRANDING : end -->

			<!-- HEADER NAVIGATION : begin -->
			<div class="header-navigation">
				<!-- HEADER MENU : begin -->
				<nav class="header-menu">
					<button class="header-menu-toggle" type="button"><i class="fa fa-bars"></i>MENU</button>
					<ul id="menu-header-items" class="main-menu menu-items clearfix">
						<li id="menu-item-151" class="menu-item menu-item-type-custom menu-item-object-custom">
							<span><a href="../index.php">Home</a></span>
						</li>
						<li id="menu-item-152" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-120 current_page_item"><span><a href="index.php">Services</a></span></li>
						<li id="menu-item-153" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="../employee/">Employees</a></span></li>
						<li id="menu-item-153" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="../Attendance/">Employees Attendance</a></span></li>
							<li id="menu-item-165" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="../salary/">Employee Salary</a></span></li>
						
						<li id="menu-item-165" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="../customer/">Customer Status</a></span></li>
							<li id="menu-item-165" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="../records/">Records</a></span></li>
							<li id="menu-item-165" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="../stock/">Stock</a></span></li>
					</ul>
				</nav>
				<!-- HEADER MENU : end -->

				<!-- HEADER CART : begin -->

				<!-- HEADER CART : end -->

				<!-- HEADER SEARCH : begin
				<div class="header-search">
					<div class="header-search-inner">
						<form class="search-form" action="http://wpdemos.lsvr.sk/beautyspot/" method="get">
							<i class="search-ico fa fa-search"></i>
							<input class="search-input" type="text" id="s" name="s" placeholder="Search for ...">
							<button class="search-submit" type="submit"><i class="fa fa-angle-right"></i></button>
							<button class="search-toggle" type="button">Search</button>
						</form>
					</div>
					<button class="search-toggle-mobile" type="button"><i class="fa"></i></button>
				</div>
				 HEADER SEARCH : end -->

			</div>
			<!-- HEADER NAVIGATION : end -->

			<!-- HEADER PANEL : begin -->
			<div class="header-panel m-has-reservation-btn">
				<button class="header-panel-toggle" type="button"><i class="fa"></i></button>

				<!-- HEADER RESERVATION : begin -->
				<div class="header-reservation">
				<a href="../logout.php" class="c-button">LOGOUT</a>
				</div>
				<!-- HEADER RESERVATION : end -->

				<!-- HEADER CONTACT : begin -->
					<div class="header-contact">
						<ul>
							<li>
								<div class="item-inner">
									<i class="ico fa fa-phone"></i>
									<p><strong>321 654 987</strong></p>
								</div>
							</li>

							<li>
								<div class="item-inner">
									<i class="ico fa fa-envelope-o"></i>
									<p><a href="#">hello@haircreation.com</a></p>
								</div>
							</li>

							<li>
								<div class="item-inner">
									<i class="ico fa fa-map-marker"></i>
									<p><strong></strong><br>Malviya Nagar,Jaipur<br>Ind 401015</p>
								</div>
							</li>

							<li>
								<div class="item-inner">
									<i class="ico fa fa-clock-o"></i>
									<dl>
										<dt>Mo. - Fr.:</dt>
										<dd>10:00 - 16:00</dd>
										<dt>Sa.:</dt>
										<dd>10:00 - 14:00</dd>
										<dt>Su.:</dt>
										<dd>Closed</dd>
									</dl>
								</div>
							</li>

						</ul>
					</div>
				<!-- HEADER CONTACT : end -->

				<!-- HEADER SOCIAL : begin
				<div class="header-social">
					<ul>
						<li><a href="#facebook"><i class="soc-facebook"></i></a></li>
						<li><a href="#twitter"><i class="soc-twitter-bird"></i></a></li>
						<li><a href="#yelp"><i class="fa fa-yelp"></i></a></li>
						<li><a href="#vk"><i class="fa fa-vk"></i></a></li>
						<li><a href="mailto:#email"><i class="fa fa-envelope-o"></i></a></li>
					</ul>
				</div>
				 HEADER SOCIAL : end -->

				</div>
				<!-- HEADER PANEL : end -->

		</div>
	</div>
	<script>
    function submitForm(action,id,cat,nam)
    {
    	//alert(action);
    	x=document.getElementById('num'+id).value;
    
    		nm=prompt("Enter Name of User");
    	
    	location.href=action+"?id="+id+"&num="+x+"&cat="+cat+"&nm="+nm+"&nam="+nam;
        //ocument.getElementById(id).action = action;
        //document.getElementById(id).submit();
    }
        function submitForm1(action,id)
    {
    	//alert(action);
    	
        document.getElementById(id).action = action;
        document.getElementById(id).submit();
    }
</script>
</header>
<!-- HEADER : end -->

	<!-- WRAPPER : begin -->
	<div id="wrapper">


<!-- CORE : begin -->
<div id="core" class="post-130 page type-page status-publish has-post-thumbnail hentry" style="background-image: url(../wp-content/uploads/sites/2/2017/01/core_bg_01.jpg);">

	<!-- PAGE HEADER : begin -->
	<div id="page-header">
		<div class="container">
			<h1 class="m-secondary-font">Stock Management</h1>

			<ul class="breadcrumbs">
		<li><a href="">Home</a></li><li>Stock</li>		</ul>

		</div>
	</div>
	<!-- PAGE HEADER : begin -->

	<div class="container">

		<!-- PAGE CONTENT : begin -->
		<div id="page-content">
			<div class="various-content">
				<div >
					<a href="#reservation-form" class="c-button">Add New Product</a>
					<a href="stock_record.php" class="c-button">Show Record</a>
				</div>
				<!--
				<div class="vc_row wpb_row vc_row-fluid">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner ">
							<div class="wpb_wrapper">

								<div class="vc_row wpb_row vc_inner vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-2">
										<div class="vc_column-inner "><div class="wpb_wrapper">
											<div class="c-image">
												
												<a href="#reservation-form" class="c-button m-color-1 default" style="padding:0% 25%;">Add New</a>
												
											</div>
										</div>
									</div>
								</div>

								</div> -->




<?php
									$sql = "SELECT DISTINCT category FROM stock";
									$result = mysqli_query($conn, $sql);
									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        

?>

							<hr class="c-divider m-medium m-transparent">


								<div class="wpb_text_column wpb_content_element ">
									<div class="wpb_wrapper">
										<h2 id="cosmetics"><?php echo $row['category']; ?></h2>
									</div>
								</div>
								<div class="vc_row wpb_row vc_inner vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-10">
										<div class="vc_column-inner ">
											<div class="wpb_wrapper">
												<ul class="c-accordion ">
<?php 

									$sql1 = "SELECT * FROM stock where category='".$row['category']."'";
									$result1 = mysqli_query($conn, $sql1);
									#echo $sql1;
									if (mysqli_num_rows($result1) > 0) {
									    // output data of each row
									    while($row1 = mysqli_fetch_assoc($result1)) {

?>

							<li>
							<h3 class="accordion-title m-has-price"><?php echo $row1['name']; ?>
											
												</h3><p class="accordion-price"> <?php echo $row1['quant']; ?></p>
														<div class="accordion-content">									

		
						 <div class="form-fields">
						 	
	 	<input type="hidden" name="id" value='<?php echo $row1['id'];?>' />
        <input  type="text" id="num<?php echo $row1['id'];?>" name="num" data-placeholder="Numbers">
        <button class="c-button submit-btn" onclick="submitForm('increase.php','<?php echo $row1['id'];?>','<?php echo $row['category']; ?>','<?php echo $row1['name']; ?>')" type="submit">Increase</button>
         <button class="c-button submit-btn" onclick="submitForm('decrease.php','<?php echo $row1['id'];?>','<?php echo $row['category']; ?>','<?php echo $row1['name']; ?>')" type="submit">Decrease</button>
         <button class="c-button submit-btn" onclick="submitForm('delete.php','<?php echo $row1['id'];?>','<?php echo $row['category']; ?>','<?php echo $row1['name']; ?>')" type="submit">Delete</button>
					
                        
                        </div>
						
														</div>
													</li>
												
												<?php }}	
												
												?>
												</ul>
											</div>
										</div>
									</div>
								</div>



<?php
   
									    }
									}
									
?>




								
								<hr class="c-divider m-medium m-transparent"></div></div></div></div>
			</div>
		</div>
		<!-- PAGE CONTENT : end -->

	</div>

</div>
<!-- CORE : end -->




	<!-- FOOTER : begin -->
	<footer id="footer">
		<div class="container">

			<!-- FOOTER BOTTOM : begin -->
			<div class="footer-bottom">

				<!-- FOOTER MENU : begin -->
				<nav class="footer-menu">
					<ul id="menu-footer-items" class="footer-menu menu-items">
						<li id="menu-item-149" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-149">
							<a href="../index.htm"><span>Home</span></a>
						</li>
					</ul>
				</nav>
				<!-- FOOTER MENU : end -->

				<!-- FOOTER TEXT : begin -->
				<div class="footer-text">
					<p>Hair Creation</p>
				</div>
				<!-- FOOTER TEXT : end -->

			</div>
			<!-- FOOTER BOTTOM : end -->

		</div>
	</footer>
	<!-- FOOTER : end -->

</div>
<!-- WRAPPER : end -->

<!-- RESERVATION FORM : begin -->
<div id="reservation-form" class="c-modal" style="display: none;">
	<div class="modal-loading"><span class="c-loading-anim"><span></span></span></div>
	<div class="modal-box" style="display: none;">
	<button class="modal-close" type="button"><i class="fa fa-times"></i></button>
	<div class="modal-box-inner various-content">
		<div role="form" class="wpcf7" id="wpcf7-f134-o1" lang="en-US" dir="ltr">
			<div class="screen-reader-response"></div>
				<form action="add_product.php" id="add_therapy" method="post" class="wpcf7-form">
					<h2>Add Product</h2>
					<hr class="c-divider">
					<div class="wpcf7-response-output wpcf7-display-none"></div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-field">
								<label for="res-your-email">Product Category</label>
								<span class="wpcf7-form-control-wrap res-your-email">
									<select name="cat_name" id="cat_name">
									<option value="Sale">Sale</option>
									<option value="Use">Use</option>
									</select>
							
								</span>
							</div>
</br>
							 
							<div class="form-field">
								<label for="res-your-email">Product Name</label>
								<span class="wpcf7-form-control-wrap res-your-email">
									<input type="text" class="wpcf7-form-control wpcf7-text" name="pname" aria-invalid="false">
								</span>
							</div>
</br>

							<div class="form-field">
								<label for="res-your-email">Quantity</label>
								<span class="wpcf7-form-control-wrap res-your-email">
									<input type="text" class="wpcf7-form-control wpcf7-text" name="quantity" aria-invalid="false">
								</span>
							</div>

						</div>
					</div>
		</div>
		</br>
		<button class="c-button submit-btn" onclick="submitForm1('add_product.php','add_therapy')" type="submit">Add</button>
	</div>
	</div>
</form>
</div>
<!-- RESERVATION FORM : end -->

<script type="text/javascript">
			var lsvr_datepicker_strings = { closeText: 'Done',
			prevText: 'Prev', nextText: 'Next', currentText: 'Today',
			monthNames: ['January','February','March',
			'April','May','June',
			'July','August','September',
			'October','November','December'],
			monthNamesShort: ['Jan', 'Feb', 'Mar',
			'Apr', 'May', 'Jun',
			'Jul', 'Aug', 'Sep',
			'Oct', 'Nov', 'Dec'],
			dayNames: ['Sunday', 'Monday', 'Tuesday',
			'Wednesday', 'Thursday', 'Friday',
			'Saturday'],
			dayNamesShort: ['Sun', 'Mon', 'Tue',
			'Wed', 'Thu', 'Fri', 'Sat'],
			dayNamesMin: ['Su','Mo','Tu','We',
			'Th','Fr','Sa'],
			weekHeader: 'Wk' };</script><script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/wpdemos.lsvr.sk\/beautyspot\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.8.1'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/beautyspot\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/beautyspot\/services\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.1.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/beautyspot\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/beautyspot\/services\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments_6be441c0684c24d83ee46473b5d1fbef"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.1.2'></script>
<script type='text/javascript' src='../wp-content/themes/beautyspot/library/js/third-party.js?ver=2.3.2'></script>
<script type='text/javascript' src='../wp-content/themes/beautyspot/library/js/library.js?ver=2.3.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var lsvrMainScripts = {"ajaxurl":"http:\/\/wpdemos.lsvr.sk\/beautyspot\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/themes/beautyspot/library/js/scripts.js?ver=2.3.2'></script>
<script type='text/javascript'>
var lsvrGmapApiKey = "AIzaSyAZhg-YFUyvDhxDt-lezjUS-5F_8he--f0";
</script>
<script type='text/javascript' src='../wp-includes/js/comment-reply.min.js?ver=4.8.5'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embed.min.js?ver=4.8.5'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=5.0.1'></script>

</body>
<!-- Copied from http://wpdemos.lsvr.sk/beautyspot/services/ by Cyotek WebCopy 1.3.0.405, Thursday, January 25, 2018, 7:53:05 AM -->
</html>
<!-- Dynamic page generated in 0.557 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-01-25 07:41:34 -->

<!-- super cache -->
