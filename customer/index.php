<?php
include('../database/connection.php');
session_start();
if(!isset($_SESSION['login'])){
echo "<script>
alert('You Are Not Authorised');
location.href='../home.html'</script>";
}
$sql00 = "SELECT * from active";
$result00 = mysqli_query($conn, $sql00);



$sprice="";
$sdetail=array();
$a = "";
$sql11 = "SELECT * from services";
$result11 = mysqli_query($conn, $sql11);
while($row11 = mysqli_fetch_assoc($result11)) {
 		$st1="<option value='".$row11['service_name']."'>".$row11['service_name']."</option>";
 		$dm0=$row11['price'].",";
 		$sprice .= $dm0;
 		$dm1=$row11['service_name'];
 		array_push($sdetail, $dm1);
		$a .= $st1;
	 }

$a1 = "";
$sql1 = "SELECT * from employee";
$result1 = mysqli_query($conn, $sql1);
while($row1 = mysqli_fetch_assoc($result1)) {
 		$st1="<option value='".$row1['ename']."'>".$row1['ename']."  (".$row1['experties'].")</option>";
		$a1 .= $st1;
	 }
		

$a1a = "";
$sql1a = "SELECT DISTINCT master_cat from services";
$result1a = mysqli_query($conn, $sql1a);
while($row1a = mysqli_fetch_assoc($result1a)) {
 		$st1="<option value='".$row1a['master_cat']."'>".$row1a['master_cat']."</option>";
		$a1a .= $st1;
	 }						

?>
<!DOCTYPE html>
<html lang="en-US">
<!-- Copied from http://wpdemos.lsvr.sk/beautyspot/typography/ by Cyotek WebCopy 1.3.0.405, Thursday, January 25, 2018, 7:53:05 AM -->

<head data-template-uri="http://wpdemos.lsvr.sk/beautyspot/wp-content/themes/beautyspot">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link rel="shortcut icon" href="../wp-content/uploads/sites/2/2017/01/favicon.png">
    <title>Book Appointment</title>
<link rel='dns-prefetch' href='//fonts.googleapis.com'>
<script type="text/javascript">
	function submit_by_id()
	{

		document.getElementById("add_therapy").submit();
	}
</script>
<link rel='dns-prefetch' href='//s.w.org'>
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/wpdemos.lsvr.sk\/beautyspot\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.5"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b!==c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>

		<script type="text/javascript">

			
			function num_service()
			{
				ppp=0;
				document.getElementById('price').innerHTML="";
				var num_service = document.getElementById("_num_service").value;
				jQuery('#_service div').html('');
				i=1;
				for(i=1;i<=num_service;i++)
				{
					var div = document.createElement('div');
					var s_no = 's'+i;
					var c_no ='c'+i;
					var e_no = 'e'+i;
					var m_no = 'm'+i;
					div.className =s_no;
					
					datastr="<?php echo $a;?>";
					datastr2="<?php echo $a1;?>";
					datastr010="<?php echo $a1a;?>";
					
					div.innerHTML =
        			'</br><h5 class="form-field-title">Choose Main Service Category '+ i +'</h5><select onchange="get_mainservice('+i+')" id="'+m_no+'" name="'+m_no+'"">\
        			<option value="Select">Select</option>\
        			'+datastr010+'\
        			</select>\
        			</br><h5 class="form-field-title">Choose Sub Category '+ i +'</h5><select onchange="get_service('+i+')" id="'+c_no+'" name="'+c_no+'">\
        			'+c_no+'\
        			</select>\
        			</br><h5 class="form-field-title">Choose Service '+ i +'</h5><select id="'+s_no+'" name="'+s_no+'" onchange="cal_price('+i+')">\
        			<option value="Select">Select</option>\
					</select>\
					</br><h5 class="form-field-title">Therapist Avialable For Service '+ i +'</h5>\
					<select id="'+e_no+'" name="'+e_no+'">\
					'+datastr2+'\
  					</select>\
  					\
  					<hr>\
					';
					document.getElementById('_service').appendChild(div);
				}
    			


    			

    		
			}

//getting all master_categories
			function get_mainservice(id)
			{
			var idd='m'+id;
			var cid='c'+id;
			var cat = document.getElementById(idd).value;
			

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

		myObj = this.responseText;
		document.getElementById(cid).innerHTML=myObj;

}
    };
xmlhttp.open("GET", "get_master_service.php?id="+cat, true);
xmlhttp.send();

}








			function get_service(id)
			{
			var idd='c'+id;
			var cat = document.getElementById(idd).value;
			

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

		myObj = JSON.parse(this.responseText);
		//var services=myObj.ser.split(",");
		
		//alert(myObj[0]['id']);

		var sid='s'+id;
		select = document.getElementById(sid);
		document.getElementById(sid).options.length = 0;


		var option = document.createElement("option");
		option.value ="Select";
		option.text= "Select";
		select.appendChild(option);
for(i=0;i<myObj.length;i++)
{
		var option = document.createElement("option");
		option.value =myObj[i]['id'];
		var price=myObj[i]['pri'];
		option.text =myObj[i]['ser']+"    Rs:"+price;
		select.appendChild(option);

}

}
    };
xmlhttp.open("GET", "get_service.php?id="+cat, true);
xmlhttp.send();




}


price_array="<?php echo $sprice; ?>";

function cal_price(id)
	{
		var ss='s'+id;
		x=document.getElementById(ss).value;
		
		p=price_array.split(",");
		p=p[x-1];
		//b=document.getElementById('price').value;
		//alert(b);
		ppp=ppp+Number(p);
		document.getElementById('price').innerHTML=ppp;
	}
	
		</script>
		





		<style type="text/css">
}
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
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/beautyspot\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/beautyspot\/typography\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/wpdemos.lsvr.sk\/beautyspot\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
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
<link rel='shortlink' href='http://wpdemos.lsvr.sk/beautyspot/?p=132'>
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed-10?url=http%3A%2F%2Fwpdemos.lsvr.sk%2Fbeautyspot%2Ftypography%2F">
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed-11?url=http%3A%2F%2Fwpdemos.lsvr.sk%2Fbeautyspot%2Ftypography%2F&#038;format=xml">
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
})('//wpdemos.lsvr.sk/beautyspot/?wordfence_logHuman=1&hid=A50AD82AD5D57DD6467A59189653DEDB');
</script>	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress.">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://wpdemos.lsvr.sk/beautyspot/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="http://wpdemos.lsvr.sk/beautyspot/wp-content/themes/beautyspot/library/css/oldie.css"><![endif]--><!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]--><!--[if lt IE 9]><script src="http://wpdemos.lsvr.sk/beautyspot/wp-content/themes/beautyspot/library/js/respond.min.js"></script><![endif]--><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
</head>

<body class="page-template-default page page-id-132 m-has-style-switcher wpb-js-composer js-comp-ver-5.0.1 vc_responsive">

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
							<li id="menu-item-152" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="../services/">Services</a></span></li>
							<li id="menu-item-153" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="../employee/">Employees</a></span></li>
							<li id="menu-item-153" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="../Attendance/">Employees Attendance</a></span></li>
							<li id="menu-item-165" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-120 current_page_item"><span><a href="index.php">Customer Status</a></span></li>
								<li id="menu-item-165" class="menu-item menu-item-type-post_type menu-item-object-page"><span><a href="../records/">Records</a></span></li>
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
	</header>
	<!-- HEADER : end -->

	<!-- WRAPPER : begin -->
	<div id="wrapper">


<!-- CORE : begin -->
<div id="core" class="post-132 page type-page status-publish hentry">

	<!-- PAGE HEADER : begin -->
	<div id="page-header">
		<div class="container">
			<h1 class="m-secondary-font">Clients</h1>
			
			<ul class="breadcrumbs">
		<li><a href="">Home</a></li><li>Client</li>		</ul>
	
		</div>
	</div>
	<!-- PAGE HEADER : begin -->

	<div class="container">

		<!-- PAGE CONTENT : begin -->
		<div id="page-content">
			<div class="various-content">
				

				<div >
					<a href="#reservation-form" class="c-button">Book Appointment</a>
				</div>

<hr class="c-divider m-medium m-transparent">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h2>Clients</h2>
<table>
<thead>
<tr>
<th>Name</th>
<th>Mobile</th>
<th>Therapy</th>
<th>Therapist</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<?php
while($row00 = mysqli_fetch_assoc($result00)) {

?>

<tr>
<td><?php echo $row00['ename'];?></td>
<td><?php echo $row00['phone'];?></td>
<?php 
$tth=$row00['therapy'];
$tth=explode(',', $tth);


$eep=$row00['therapist'];
$eep=explode(',', $eep);
?>
<td>
	<?php 
	foreach ($tth as $key) {
		
	?>
	<div><?php echo $sdetail[$key-1]; ?></div>
	<?php
	}
	?>
</td>
<td>
		<?php 
	foreach ($eep as $key) {
		
	?>
	<div><?php echo $key;?></div>
	<?php
	}
	?>
</td>
<td><a href=javascript:test(<?php echo $row00['id']; ?>) class="remove" data-product_sku="">×</a></td>
</tr>
<?php } ?>
</tbody>
</table>
<script type="text/javascript">
	function test(id)
	{
		x=prompt("Discount ?? Percentage");
		location.href="invoice.php?id="+id+"&d="+x;
	}
</script>
		</div>
	</div>
</div></div></div></div>
			</div>
		</div>
		<!-- PAGE CONTENT : end -->

	</div>

</div>
<!-- CORE : end -->

                       
        
			</div>
		</div>
	</div>
</div>
<!-- BOTTOM PANEL : end -->

<!-- FOOTER : begin -->
<footer id="footer">
	<div class="container">

				<!-- FOOTER TWITTER : begin -->
	
		<!-- FOOTER TWITTER : end -->
		
		<!-- FOOTER BOTTOM : begin -->
		<div class="footer-bottom">

			<!-- FOOTER MENU : begin -->
<nav class="footer-menu">

    <ul id="menu-footer-items" class="footer-menu menu-items"><li id="menu-item-149" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-149"><a href="../index.htm"><span>Home</span></a></li>

</ul>
</nav>
<!-- FOOTER MENU : end -->

									<!-- FOOTER TEXT : begin -->
		
			<!-- FOOTER TEXT : end -->
			
		</div>
		<!-- FOOTER BOTTOM : end -->

	</div>
</footer>
<!-- FOOTER : end -->

</div>
<!-- WRAPPER : end -->

<!-- RESERVATION FORM : begin -->
<!-- RESERVATION FORM : end -->



<!-- RESERVATION FORM : begin -->
<div id="reservation-form" class="c-modal" style="display: none;">
	<div class="modal-loading"><span class="c-loading-anim"><span></span></span></div>
	<div class="modal-box" style="display: none;">
		<button class="modal-close" type="button"><i class="fa fa-times"></i></button>
		<div class="modal-box-inner various-content"><div role="form" class="wpcf7" id="wpcf7-f134-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="add_appointment.php" method="post" id="add_therapy" class="wpcf7-form" >

<h2>New Appointment</h2>
<p>Fill Details Of New Client</p>
<div class="form-field">
<h3>Number Of Therapy Client Wants</h3>




<select id="_num_service" onchange="num_service()">
	<option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
<div id="_service">

</div>



<div class="form-field">

</div>


<div class="form-field">


<hr class="c-divider">
<div class="wpcf7-response-output wpcf7-display-none"></div>
<div class="row">
<div class="col-sm-6">
<div class="form-field"><label for="res-your-name">Your Name <span>*</span></label><span class="wpcf7-form-control-wrap res-your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="res-your-name" aria-required="true" aria-invalid="false"></span></div>
<div class="form-field"><label for="res-your-email">Your Email Address</label><span class="wpcf7-form-control-wrap res-your-email"><input type="email" name="mail" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" id="res-your-email" aria-invalid="false"></span></div>
<div class="form-field"><label for="res-your-phone">Your Phone Number</label><span class="wpcf7-form-control-wrap res-your-phone"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" id="res-your-phone" aria-invalid="false"></span></div>
</div>
<div class="col-sm-6">
<span><b>Total Price: Rs. </b></span><span value="0" id="price"></span>
</div>
<div class="col-sm-6">

<div class="form-field"><label for="res-reservation-note">Address</label><span class="wpcf7-form-control-wrap res-reservation-note"><textarea name="address" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" id="res-reservation-note" aria-invalid="false"></textarea></span></div>
<div class="form-field"><input type="button" onclick="submit_by_id()" value="Make Appointment" class="wpcf7-form-control wpcf7-submit c-button"></div>
</div>
</div>
</form></div></div>
	</div>
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
var woocommerce_params = {"ajax_url":"\/beautyspot\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/beautyspot\/typography\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.1.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/beautyspot\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/beautyspot\/typography\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments_6be441c0684c24d83ee46473b5d1fbef"};
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
<!-- Copied from http://wpdemos.lsvr.sk/beautyspot/typography/ by Cyotek WebCopy 1.3.0.405, Thursday, January 25, 2018, 7:53:05 AM -->
</html>
<!-- Dynamic page generated in 0.507 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-01-25 07:41:36 -->

<!-- super cache -->