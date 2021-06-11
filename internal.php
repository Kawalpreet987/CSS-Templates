<html>
	<head>
		<title></title>
	  <style>
		.container
		{
			height:auto;
			width:960px;
			background:red;
			margin:auto;
		}
		.header{
			height:150px;
			width:960px;
			background:green;
		}
		.nav{
			height:50px;
			width:960px;
			background:gray;
		}
		.subnav
		{
			height:50px;
			width:191px;
			border-right:1px solid white;
			float:left;
			text-align:center;
			color:#fff;
			line-height:50px;
			font-size:17px;
			font-weight:bold;
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
			border-right:0px solid white;
			float:left;
			background:red;
			text-align:center;
			color:#fff;
			line-height:50px;
			font-size:17px;
			font-weight:bold;
			font-family:arial;
		}
		.content{
			height:500px;
			width:960px;
			background:cyan;
		}
		.footer{
			height:100px;
			width:960px;
			background:green;
		}
	  </style>
	</head>
	<body>
		<div class="container">
			<div class="header"></div>
			<div class="nav">
				<div class="subnav"><a href="">Home</a></div>
				<div class="subnav"><a href="">Home</a></div>
				<div class="subnav"><a href="">Home</a></div>
				<div class="subnav"><a href="">Home</a></div>
				<div class="subnav"><a href="">Home</a></div>
			</div>
			<div class="content"></div>
			<div class="footer"></div>
		</div>
	</body>
</html>