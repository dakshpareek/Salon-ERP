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
<!-- Copied from http://wpdemos.lsvr.sk/beautyspot/typography/ by Cyotek WebCopy 1.3.0.405, Thursday, January 25, 2018, 7:53:05 AM -->

<head data-template-uri="http://wpdemos.lsvr.sk/beautyspot/wp-content/themes/beautyspot">

<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link rel="shortcut icon" href="../wp-content/uploads/sites/2/2017/01/favicon.png">
    <title>Therapist</title>
 <script type="text/javascript">
 	eid=10;
 	myObj={}
 </script>
    <script type="text/javascript">
    	
    	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
    <script type="text/javascript">
	function submit_by_id()
	{

		document.getElementById("eform").submit();
	}
</script>
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
							<li id="menu-item-153" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-120 current_page_item"><span><a href="index.php">Employees</a></span></li>
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
	</header>
	<!-- HEADER : end -->

	<!-- WRAPPER : begin -->
	<div id="wrapper">


<!-- CORE : begin -->
<div id="core" class="post-132 page type-page status-publish hentry">

	<!-- PAGE HEADER : begin -->
	<div id="page-header">
		<div class="container">
			<h1 class="m-secondary-font">Therapist Record</h1>
			
			<ul class="breadcrumbs">
		<li><a href="">Home</a></li><li>Therapist</li>		</ul>
	
		</div>
	</div>
	<!-- PAGE HEADER : begin -->

	<div class="container">

		<!-- PAGE CONTENT : begin -->
		<div id="page-content">
			<div class="various-content">
				

				<div >
					<a id="myanchor" href="#reservation-form" class="c-button">Add New Therapist</a>
				</div>

<hr class="c-divider m-medium m-transparent">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h2>Therapist</h2>
<table>
<thead>
<tr>
<th>Name</th>
<th>Mobile</th>
<th>Therapy</th>
<th>Email</th>
<th>Address</th>
<th>Update</th>
<th>Delete</th>
</tr>
</thead>
<script type="text/javascript">
	function getDiv(id)
	
	{
		eid=id;


var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        document.getElementById("uename").value = myObj.name;
        document.getElementById("uemail").value = myObj.email;
        document.getElementById("uphone").value = myObj.phone;
        document.getElementById("uaddress").value = myObj.address;
        document.getElementById("usalary").value = myObj.salary;
        document.getElementById("blah1").src=myObj.image;
        //document.cookie = "exp ="+myObj.expertise;
        document.getElementById('uid').value=myObj.id;
        var eser=myObj.ser.split(",");
        var eid=myObj.expertise.split(",");
        var farr=myObj.lst;
        //alert(farr[0]['mas']);
        //alert(eid);
        //alert(eser);

        select = document.getElementById("exper");
        var selectList = document.createElement("select");
		selectList.id = "experties1[]";
		selectList.name= "experties1[]";
		selectList.multiple="multiple";
		select.appendChild(selectList);

 function checkValue(value,arr){
  var status = false;
 
  for(var i=0; i<arr.length; i++){
   var name = arr[i];
   if(name == value){
    status = true;
    break;
   }
  }

  return status;
 }


eser.forEach(function(item){
  
		var option = document.createElement("option");
		option.text = item;
		option.value = item;
		x=checkValue(item,eid);
		if(x==true)
		{
			option.selected="selected";
		}
	selectList.appendChild(option);

});


       
    }
};
xmlhttp.open("GET", "get_employee.php?id="+eid, false);
xmlhttp.send();


		showDiv(id);
	}

	function showDiv(id)
	{
 document.getElementById('rform').style.display = "block";
 document.getElementById('rform1').style.display = "block";
 document.getElementById('rform2').style.display = "block";
 $("#myanchor")[0].click();
};
function closeDiv() {
	var element = document.getElementById("experties1[]");
element.outerHTML = "";
delete element;
   document.getElementById('rform').style.display = "none";
   document.getElementById('rform1').style.display = "none";
   document.getElementById('rform1').style.display = "none";
};

function delDiv(id)
{
	var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

alert("Deleted");
location.href="index.php";
    }
    };
xmlhttp.open("GET", "delete_employee.php?id="+id, true);
xmlhttp.send();
}

</script>
<tbody>
<?php 
	$sql1 = "SELECT * FROM Employee";
	$result1 = mysqli_query($conn, $sql1);
									


									if (mysqli_num_rows($result1) > 0) {
									    while($row1 = mysqli_fetch_assoc($result1)) {

echo "
<td>".$row1['ename']."</td>
<td>".$row1['phone']."</td>
<td>".$row1['experties']."</td>
<td>".$row1['email']."</td>
<td>".$row1['address']."</td>
<td>
<a onclick='getDiv(".$row1['id'].")'  class='c-button'>Update</a>
</td>
<td>
<a onclick='delDiv(".$row1['id'].")'  class='c-button'>Delete</a>
</td>
</tr>";

									    }
									}

?>


</tbody>
</table>

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
<form action="add_employee.php" id="eform" method="post" enctype="multipart/form-data" class="wpcf7-form">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="134">
<input type="hidden" name="_wpcf7_version" value="4.8.1">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f134-o1">
<input type="hidden" name="_wpcf7_container_post" value="0">
<input type="hidden" name="_wpcf7_nonce" value="69ff32fa46">
</div>
<h2>Employee Registration</h2>
<p>Fill Details Of New Employee</p>
<div class="form-field">

<h5 class="form-field-title">Expert In Services</h5>

<select name="experties[]" multiple>
									<?php 
									$sql = "SELECT DISTINCT master_cat FROM services";
									$result = mysqli_query($conn, $sql);
									
									if (mysqli_num_rows($result) > 0) {
									    while($row2 = mysqli_fetch_assoc($result)) {
									        #echo "id: " . $row['cat_name']."<br>";
echo "<option value='".$row2['master_cat']."'>".$row2['master_cat']."</option>";
									    }
									}

									
									?>

</select>


<div class="form-field">

<input name='file' type='file' onchange="readURL(this);" />
    
</div>
<div class="col-sm-6">
	<input type='radio' name='des' value='Expert'>Expert</input>
	<input type='radio' name='des' value='Assistant'>Assistant</input>
</div>
<hr class="c-divider">
<div class="wpcf7-response-output wpcf7-display-none"></div>
<div class="row">
<div class="col-sm-6">
<div class="form-field"><label for="res-your-name">Name <span>*</span></label><span class="wpcf7-form-control-wrap res-your-name">
	<input type="text" name="ename" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" required>
</span></div>
<div class="form-field"><label for="res-your-email">Email Address</label><span class="wpcf7-form-control-wrap res-your-email">
	<input type="email" name="email" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email"></span></div>
<div class="form-field"><label for="res-your-phone">Phone Number</label><span class="wpcf7-form-control-wrap res-your-phone">
	<input type="tel" name="phone"  class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"></span></div>
</div>
<div class="col-sm-6">

<div class="row">
<div class="col-sm-6">
<img id="blah" src="#" alt=""/>
</div>
</div>
<div class="row">
<div class="col-sm-6">
	<label for="res-reservation-note">Salary</label>
<input type="text" name="salary">
</div>
</div>
<div class="form-field"><label for="res-reservation-note">Address</label><span class="wpcf7-form-control-wrap res-reservation-note"><textarea name="address" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" ></textarea></span></div>
<div class="form-field"><input type="button" onclick="submit_by_id()" value="Register" class="wpcf7-form-control wpcf7-submit c-button"></div>
</div>
</div>
</form></div></div>
	</div>
</div>
<!-- RESERVATION FORM : end -->




<!-- RESERVATION FORM : begin -->
<div id="rform" class="c-modal" style="display: none;">
	<div class="modal-loading"><span class="c-loading-anim"><span></span></span></div>
	<div id="rform1" class="modal-box" style="display: none;">
		<button onclick="closeDiv()" class="modal-close" type="button"><i class="fa fa-times"></i></button>
		<div class="modal-box-inner various-content"><div role="form" class="wpcf7" id="wpcf7-f134-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="update_employee.php" method="post" class="wpcf7-form" novalidate="novalidate">
<div id="rform2" style="display: none;">
<input type="hidden" name="_wpcf7" value="134">
<input type="hidden" name="_wpcf7_version" value="4.8.1">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f134-o1">
<input type="hidden" name="_wpcf7_container_post" value="0">
<input type="hidden" name="_wpcf7_nonce" value="69ff32fa46">
</div>
<h2>Update Employee Information</h2>
<h5 class="form-field-title">Expert In Services</h5>
<div id="exper">
	</div>

<input type="hidden" name="uid" id="uid" value="">
<hr class="c-divider">
<div class="wpcf7-response-output wpcf7-display-none"></div>
<div class="row">
<div class="col-sm-6">
<div class="form-field"><label for="res-your-name">Name<span>*</span></label><span class="wpcf7-form-control-wrap res-your-name"><input type="text" name="uename" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="uename"></span></div>
<div class="form-field"><label for="res-your-email">Email Address</label><span class="wpcf7-form-control-wrap res-your-email"><input type="email" name="uemail" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" id="uemail"></span></div>
<div class="form-field"><label for="res-your-phone">Phone Number</label><span class="wpcf7-form-control-wrap res-your-phone"><input type="text" name="uphone" value="" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" 
	id="uphone" ></span></div>
	<div class="form-field"><label for="res-reservation-note">Address</label><span class="wpcf7-form-control-wrap res-reservation-note"><textarea name="uaddress" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" id="uaddress"></textarea></span></div>
</div>

<div class="row">
<div class="col-sm-6">
<label for="res-your-name">Salary</label>
<input type="text" id="usalary" name="usalary">
</div>
</div>

<div class="col-sm-6">
<div class="form-field">

<div class="row">
<div class="col-sm-6">
<img id="blah1" src="#"  alt=""/>
</div>
</div>

<div class="form-field"><input type="submit" value="Update" class="wpcf7-form-control wpcf7-submit c-button"></div>
</div>
</div>
</form></div></div>
	</div>
</div>
<!-- RESERVATION FORM : end -->







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