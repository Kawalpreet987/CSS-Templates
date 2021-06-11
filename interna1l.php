<html>
	<head>
		<title></title>
	</head>
	<style>
		.container
		{
			height:800px;
			width:960px;
			margin:auto;
			background:red;
			margin:auto;
		}
		.header
		{
			height:150px;
			width:960px;
			background:red;
		}
		.nav
		{
			height:50px;
			width:960px;
			background:blue;
		}
		.subnav
		{
			height:50px;
			width:191px;
			border-right: 1px solid white;
			color:#white;
			text-align:center;
			line-height:50px;
			float:left;
			font-height:17px;
			font-width:bold;
			font-family:arial;
		}
		.subnav a
		{
			color:#fff;
			text-decoration:none;
		}
		.subnav:hover a
		{
			height:50px;
			width:191px;
			border-right: 0px solid white;
			background:pink;
			color:#white;
			text-align:center;
			line-height:50px;
			float:left;
			font-height:17px;
			font-weight:bold;
			font-family:arial;
		}
		.content
		{
			height:500px;
			width:960px;
			background:gray;
		}
		.footer
		{
			height:100px;
			width:960px;
			background:red;
		}
	</style>
	<body>
		<div class="container">
			<div class="header"></div>
			<div class="nav">
				<div class="subnav"><a href="">Home</a></div>				
				<div class="subnav"><a href="">About Us</a></div>
				<div class="subnav"><a href="">Services</a></div>
				<div class="subnav"><a href="">Gallery</a></div>
				<div class="subnav"><a href="">Contact Us</a></div>
			</div>
			<div class="content"></div>
			<div class="footer"></div>
		</div>
	</body>
</html>