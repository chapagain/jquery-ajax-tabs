<html>
	<head>
		<title>jQuery: AJAX Tabs</title>	
		<style type="text/css">
			body
			{
				font-family: Arial;
				font-size: 12px;
			}
			.container
			{
				float: left;
				width: 400px;
				border: 1px solid #000000;
			}
			.navcontainer ul
			{
				background-color: #5F707A;
				border-bottom:1px solid #DFDFDF;
				border-top:1px solid #DFDFDF;
				float:left;
				font-family:arial,helvetica,sans-serif;
				font-size:12px;
				margin:0pt;
				padding:0pt;
				width:100%;
			}
			.navcontainer ul li
			{
				display: inline;
				text-align: center;
			}
			.navcontainer ul li a:hover
			{
				background-color:#CCCCCC;
				color:#FFFFFF;
			}
			.navcontainer ul li a
			{
				border-right:1px solid #DFDFDF;
				background-color: #BBBBBB;
				font-weight: bold;
				color:#FFFFFF;
				float:left;
				padding:10px;
				text-decoration:none;
				width: 50px;
			}
			.navcontainer ul li a.current
			{
				border-right:1px solid #f00;
				background-color: #f00;
				font-weight: bold;
				color:#fff;
				float:left;
				padding:10px;
				text-decoration:none;
				width: 50px;
			}
			#tabcontent
			{
				min-height: 200px;
				padding-top: 80px;
				padding-left: 10px;
			}
			#preloader
			{
				position: absolute;
				top: 150px;
				left: 100px;
				z-index: 100;
				padding: 5px;
				text-align: center;
				background-color: #FFFFFF;
				border: 1px solid #000000;
			}
		</style>
		<script type="text/javascript" src="jquery-1.2.3.pack.js"></script>
		<script type="text/javascript">			
			
			function loadTabContent(tabUrl){
				$("#preloader").show();
				jQuery.ajax({
					url: tabUrl, 
					cache: false,
					success: function(message) {
						jQuery("#tabcontent").empty().append(message);
						$("#preloader").hide();
					}
				});
			}
			
			jQuery(document).ready(function(){				
				
				$("#preloader").hide();				
				jQuery("[id^=tab]").click(function(){	
					
					// get tab id and tab url
					tabId = $(this).attr("id");										
					tabUrl = jQuery("#"+tabId).attr("href");
					
					jQuery("[id^=tab]").removeClass("current");
					jQuery("#"+tabId).addClass("current");
					
					// load tab content
					loadTabContent(tabUrl);
					return false;
				});
			});
			
		</script>
	</head>
	<body>
		
		<div class="container">
		
			<div class="navcontainer">
				<ul>
					<li><a id="tab1" href="tabs.php?id=1">Google</a></li>
					<li><a id="tab2" href="tabs.php?id=2">Yahoo</a></li>
					<li><a id="tab3" href="tabs.php?id=3">Hotmail</a></li>
					<li><a id="tab4" href="tabs.php?id=4">Twitter</a></li>
				</ul>
			</div>

			<div id="preloader">
				<img src="loading.gif" align="absmiddle"> Loading...				
			</div>
			
			<div id="tabcontent">
			Simple AJAX Tabs
			</div>
					
		</div>
	</body>
</html>