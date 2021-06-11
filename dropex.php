<html>
	<head>
		<title></title>
	<style>
		body {
			margin:0; 
		}
		.container
		{
			height:750px;
			width:960px;
			margin:auto;
		}
		.navbar {
			
			height:90px;
			width:960px;
			background:#dedede;
		}
		.subnav {
			height:90px;
			width:191px;
			border-right:1px solid white;
			text-align:center;
			line-height:90px;
			background-image: linear-gradient(to top, #d3d3d3, #efefef);
			float:left;
		}
		.subnav a
		{
			text-decoration:none;
		}
		.slider
		{
			height:600px;
			width:960px;
			background:white;
		}
		.article
		{
			margin-top:40px;
			margin-left:40px;
			height:230px;
			width:264px;
			border-radius:10px;
			border:1px solid blue;
			float:left;
			background:#0097b8;
		}
		 .images
		{
			height:64px;
			width:64px;
			float:left;
		}
		.images img
		{
			margin-left:10px;
			height:39px;
			width:44px;
		}		
		.text
		{
			height:60px;
			width:263px;
			color:white;
		}
		.paragraph
		{
			height:159px;
			width:258px;
			color:white;
			padding:5px;
		}
		.slider .image img
		{
			height:300px;
			width:654px;
		}
		.sub
		{
			height:200px;
			width:900px;
			margin:auto;
			border-radius: 30px;
			border:10px solid white;
			background-image: linear-gradient(to top, #d3d3d3, #a6a6a6);
		}
		.subsliders
		{
			height:180px;
			width:279px;
			margin:10px;
			float:left;
		}
		.subsliders .image
		{
			height:20px;
			width:20px;
			float:left;
		}
		.subsliders .image img
		{
		    height: 35px;
			width: 43px;
			float: left;
			
		}
		.subsliders .texts
		{
			height:35px;
			width:154px;
			border-bottom:px solid white;
		}
		.subsliders .texts h3
		{
			line-height:20px;
			font-size:17px;
			text-align:center;
			color:black;
			font-weight:bold;
		}
		.subsliders .paragraphs
		{
			height:140px;
			padding:10px;	
			font-size:10px;
			text-align:center;
			margin-left: 22px;
			border-left: 1px solid #fff;
		}
		.content
		{
			height:110px;
			width:960px;
		}
		.heading
		{
			height:20px;
			width:960px;
			padding-left:10px;
		}
		.paragraph
		{
			height:80px;
			width:600px;
			padding-left:10px;
		}
		.footer
		{
			height:100px;
			width:960px;
			background-image: linear-gradient(to top, #d3d3d3, #a6a6a6);
		}
		.footer p
		{
			text-align:center;
			font-size:20px;
			padding-top: 23px;
		}
		@media screen and ( min-width:240px ) and ( max-width:940px )
		{
			.container
			{
				width:100%;
			}
			.navbar {
				
				height:auto;
				width:100%;
			}
			.subnav {
				height:90px;
				width:99%;
				border-bottom:1px solid white;
				text-align:center;
				line-height:90px;
				background-image: linear-gradient(to top, #d3d3d3, #efefef);
				float:none;
			}
			.subnav a
			{
				text-decoration:none;
			}
			.slider
			{
				width:100%;
			}
			.article
			{
				height:200px;
				width:35%;
				border-radius:10px;
				border:1px solid red;
				float:left;
			}
			.images
			{
				width:15%;
				float:left;
			}
			 .images img
			{
				margin-left:10px;
				width:100%;
			}
			.paragraph {
				font-size:12px;
				word-break: break-all;
				width:auto;
			}
			.text
			{
				width:40%;
				margin-left:60px;
			}
			.slider .image img
			{
				width:55%;
			}
			.sub
			{
				height:auto;
				width:95%;
				border-radius: 30px;
				border:10px solid white;
				background-image: linear-gradient(to top, #d3d3d3, #a6a6a6);
			}
			.subsliders
			{
				width:95%;
				margin:10px;
				float:none;
			}
			.subsliders .image
			{
				width:20%;
				float:left;
			}
			.subsliders .image img
			{
				width: 100%;
				float: left;	
			}
			.subsliders .texts
			{
				width:20%;
				border-bottom:0px solid white;
				margin-left:25%;

			}
			.subsliders .texts h3
			{
				line-height:20px;
				font-size:17px;
				text-align:center;
				color:black;
				font-weight:bold;
			}
			.subsliders .paragraphs
			{
				font-size:10px;
				text-align:center;
				margin-left: 11%;
				border-bottom: 0px solid #fff;
				width:60%;
			}
			.content
			{
				width:100%;
			}
			.heading
			{
				width:80%;
			}
			.paragrapgh
			{
				width:90%;
			}
			.footer
			{
				width:100%;
				margin-top:443px;
			}
			.footer p
			{
				text-align:center;
				font-size:20px;
			}
		}
	</style>
	</head>
	<body>
		<div class="container">
			<div class="navbar">
				<div class="subnav"><a href="">Home</a></div>
				<div class="subnav"><a href="">Products</a></div>
				<div class="subnav"><a href="">Services</a></div>
				<div class="subnav"><a href="">Partners</a></div>
				<div class="subnav"><a href="">Contact</a></div>
			</div>
			<div class="slider">
				<div class="article">
					<div class="images"><img src="img/e.PNG"></div>
					<div class="text"><h3>About</h3></div>
					<div class="paragraph"><p>Lorem Ipsum is simply dummy text <br>of the printing and typesetting industry<br>
						Lorem Ipsum has been the industry's standard <br>dummy text ever since the 1500s,</p></div>
				</div>
				<div class="image">
					<img src="img/dropex.jpg">
				</div>
				<div class="sub">
					<div class="subsliders">
						<div class="image"><img src="img/b.PNG"></div>
						<div class="texts"><h3>Solutions</h3></div>
						<div class="paragraphs"><p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
						when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
					</div>
					<div class="subsliders">
						<div class="image"><img src="img/c.PNG"></div>
						<div class="texts"><h3>Why We</h3></div>
						<div class="paragraphs"><p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
						when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
					</div>
					<div class="subsliders">
						<div class="image"><img src="img/d.PNG"></div>
						<div class="texts"><h3>Info</h3></div>
						<div class="paragraphs"><p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
						when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>	
					</div>
				</div>
				<div class="content">
					<div class="heading"><h3>Our Company</h3></div>
					<div class="paragrapgh"><p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p></div>
				</div>
				
			</div>
			<div class="footer">
				<p>Copyright &copy; by Kawal 2019-2020<br>All rights Reserved by Dropex<br>*** Happy Tuesday ***</p>
			</div>
		</div>
	</body>
</html>