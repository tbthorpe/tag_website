<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php 
			echo "TAG, MOTHERFUCKER. YOU'RE IT."
			// echo $title_for_layout;
		?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
	<script src="http://js.pusher.com/1.12/pusher.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	    WEB_SOCKET_DEBUG = true;
		
	    var pusher = new Pusher('9ec5c264ad44cff7999e');
	    var channel = pusher.subscribe('test_channel');
	    channel.bind('my_event', function(data) {
	      alert(data);
	    })
  </script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
  <style type="text/css">
		@font-face {
			font-family: 'Bazar';
			src: url('/files/fonts/Bazar.eot?') format('eot'), 
			     url('/files/fonts/Bazar.woff') format('woff'), 
			     url('/files/fonts/Bazar.ttf')  format('truetype'),
			     url('/files/fonts/Bazar.svg#Bazar') format('svg');
		}
		@font-face {
	    font-family: 'skarpaltultra_light';
	    src: url('/files/fonts/skarpalt-webfont.eot');
	    src: url('/files/fonts/skarpalt-webfont.eot?#iefix') format('embedded-opentype'),
	         url('/files/fonts/skarpalt-webfont.woff') format('woff'),
	         url('/files/fonts/skarpalt-webfont.ttf') format('truetype'),
	         url('/files/fonts/skarpalt-webfont.svg#skarpaltultra_light') format('svg');
	    font-weight: normal;
	    font-style: normal;
	  }
		body{
			background:#f4efbd;
			/*font-family:'Bazar';*/
			font-family:"Open Sans", arial;
			font-weight:400;
			padding-bottom:100px;
			color:#76918A;
		}
		.headline{
			font-family:"Georgia";
			font-weight:700;
		}
		p{margin:0;padding:0;}
		#container{}
		#navbar{
			font-size:20px;
			width:923px;
			margin: 15px auto;
		}
		#content{
			width:600px;
			margin:20px auto 20px auto;
			
			text-align:center;
			color:#76918a
		}

		#content .main{
			font-size:150px;
			margin-bottom:15px;
		}
		#content .secondary{
			font-size:38px;
		}
		.section{
			width:923px;
			border-bottom:1px solid #D4CFA4;
			margin:50px auto 0 auto;
			padding: 0 0 40px 0;
		}
		#members {
			
		}
		#members UL{list-style-type: none;padding:0;margin:0;}
		#members UL LI{
			float:left;
			position:relative;
			margin-right:20px;
			margin-bottom:20px;
			border:6px solid #999;
			margin-right:25px;
/*			-webkit-box-shadow: 0 0px 0 #fff;
			-moz-box-shadow: 0 0px 0 #fff;*/
			overflow:hidden;
		}
		#members UL LI:nth-child(4n+0){
			margin-right:0;
		}
		#members UL LI:nth-last-child(3){
			margin-left:237px;
		}
		#members UL LI.it{
			border:6px solid red;
		}
		#members UL LI IMG{
			display: block;
			height: 200px;
			width: 200px;
			/*-webkit-transition: -webkit-filter 0.2s ease-in-out;
			-moz-transition: -moz-filter 0.2s ease-in-out;
			transition: filter 0.2s ease-in-out;
			-webkit-filter: grayscale(100%);
			-moz-filter: grayscale(100%);
			filter: grayscale(100%);*/
		}

		#members UL LI IMG:hover{
			/*-webkit-filter: grayscale(0%);
			-moz-filter: grayscale(0%);
			filter: grayscale(0%);*/
		}
		
		.round{
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			-ms-border-radius: 50%;
			-o-border-radius: 50%;
			border-radius: 50%;
		}
		.it_amount{
			position:absolute;
			bottom:0;
			left:0;
			width:100%;

			background: rgba(255,0,0,0.4);
			z-index:2;
			/*-webkit-border-radius: 0px 0px 250px 250px;
			-moz-border-radius:  0px 0px 250px 250px;
			-ms-border-radius:  0px 0px 250px 250px;
			-o-border-radius:  0px 0px 250px 250px;*/
		}
		.head_title{font-size:32px;text-align:center;}
		#countdown_container{text-align: center;}
		#rules_list {list-style-type: none;}
		#rules_list LI{
			font-family:"skarpaltultra_light";
			margin-bottom:20px;
			line-height:20px;
			line-height: 26px;
			font-size: 20px;
			letter-spacing: 1px;
		}

	</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/js/jquery.countdown.js"></script>
	<script type="text/javascript">
		
		$(document).ready(function(){
			$('#members UL LI').mouseenter(function() {
			  $(this).animate({
			    top: '-=10',
			  }, 200, function() {
			    // Animation complete.
			    $(this).animate({
				    top: '+=10',
				  });
			  });
			});

			var untilYear = new Date();
			var sinceYear = new Date('03/01/2013');
			$('#countdown').countdown({since: sinceYear,
			                                  until: untilYear,
			                                  tickInterval: 30,
			                                  format: 'YdHMS',
			                                  layout:'<b>{yn} {yl},{dn} {dl} and '+ 
			                                       '{hn} {hl}, {mn} {ml}</b>'});



		});
	</script>
</head>
<body>
	<div id="container">
		<div id="content">
			<p class="main headline">Tank</p>
			<p class="secondary headline">got got.</p>
		</div>
		<!-- <div id="navbar">navigation goes here</div> -->



			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		<div id="footer">
			&copy; <?php echo date('Y'); ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<script src="/jquery-2.0.0.min.js"></script>



	    <!-- The runtime script.  You can rename it, but don't forget to rename the reference here as well.
	    This file will have been minified and obfuscated if you enabled "Minify script" during export. -->
		<script src="/c2runtime.js"></script>

	    <script>
			// Size the canvas to fill the browser viewport.
			jQuery(window).resize(function() {
				cr_sizeCanvas(jQuery(window).width(), jQuery(window).height());
			});

			// Start the Construct 2 project running on window load.
			jQuery(document).ready(function ()
			{			
				// Create new runtime using the c2canvas
				cr_createRuntime("c2canvas");
			});

			// Pause and resume on page becoming visible/invisible
			function onVisibilityChanged() {
				if (document.hidden || document.mozHidden || document.webkitHidden || document.msHidden)
					cr_setSuspended(true);
				else
					cr_setSuspended(false);
			};

			document.addEventListener("visibilitychange", onVisibilityChanged, false);
			document.addEventListener("mozvisibilitychange", onVisibilityChanged, false);
			document.addEventListener("webkitvisibilitychange", onVisibilityChanged, false);
			document.addEventListener("msvisibilitychange", onVisibilityChanged, false);

	    </script>
</body>
</html>