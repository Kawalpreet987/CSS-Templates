<html>
	<head>
		<title></title>
		<style>
			.container
			{
				height:830px;
				width:960px;
				margin:auto;
			}
			.header
			{
				height:70px;
				width:960px;
				background:white;
			}
			.header_left{
				height:70px;
				width:100px;
				float:left;
			}
			.header_left img
			{
				height:70px;
				width:100px;
				float:left;
			}
			.header_center
			{
				height:70px;
				width:664px;
				padding-left: 15px;
				float:left;
			}
			.header_right
			{
				height:70px;
				width:179px;
				float:left;
			}
			.header_right .home{
				float: left;
				margin: 7px;
			}
			.header_right .home img{
				height: 20px;
				width: 20px;
			}
			.nav
			{
				height:50px;
				width:960px;
				background:#7cb70f;
			}
			.subnav
			{
				height:50px;
				width:136px;
				border-right:1px solid white;
				float:left;
				text-align:center;
				color:#fff;
				line-height:50px;
				font-weight:bold;
				font-family:arial;
			}
			.subnav a
			{
				color:#fff;
				text-decoration:none;
			}
			.slider
			{
				height:254px;
				width:960px;
			}
			.slider  img
			{
				height:287px;
				width:960px;
			}
			.content
			{
				height:375px;
				width:960px;
				margin-top: 40px;
				background:white;
			}
			.subcontent
			{
				box-shadow: -3px 10px 18px 2px rgba(171,158,158,0.84) inset;
				-webkit-box-shadow: -3px 10px 18px 2px rgba(171,158,158,0.84) inset;
				-moz-box-shadow: -3px 10px 18px 2px rgba(171,158,158,0.84) inset;
				height: 162px;
				border-radius: 10px;
				width: 458px;
				float: left;
				margin: 10px;
				border: 1px solid #eaeaea;
				shadow: 1px;
			}
			.subcontent .heading{
				height:20px;
				padding-left:10px;
			}
			.subcontent .heading p{
				font-weight: bold;
			}
			
			.subcontent .heading p span{
				color: green;
			}
			.subcontent .paragraph{
				height:125px;
				border-bottom-left-radius: 10px;
				float:left;
				color:black;
				width:318px;
			}
			.subcontent .image{
				height:125px;
				float:left;
				border-bottom-right-radius: 10px;
				width:138px;
				opacity: 0.8;
			}
			.image img{
			  width: 138px;
			  height:125px;
			}
			.subcontent .product_images{
				width: 130px;
				margin:10px;
				background: aqua;
				height:105px;
				float:left;
			}
			.product_images img{
			  width: 130px;
			  height:105px;
			}
			.footer
			{
				height:50px;
				width:960px;
				background:#7cb70f;
			}
			.subfooter_left
			{
				height:50px;
				width:391px;
				border-right:1px solid white;
				float:left;
				color:#fff;
				line-height:50px;
				font-weight:bold;
				font-family:arial;
				font-size:10px;
			}
			.subfooter
			{
				height:50px;
				width:80px;
				border-right:1px solid white;
				float:left;
				text-align:center;
				color:#fff;
				line-height:50px;
				font-weight:bold;
				font-family:arial;
				font-size:10px;
			}
			
			.subfooter a
			{
				color:#fff;
				text-decoration:none;
			}
			.paragraph ul{
				list-style-type: none;
				color:black;
			}
			.paragraph ul li:first-child{
				color: green;
			}
			
			.subfooter_left a
			{
				color:#fff;
				text-decoration:none;
			}
			.subnav:last-child{
				border-right: none;
			}
			.subfooter:last-child{
				border-right: none;
			}
			.subfooter_left {
				padding-left: 2px;
			}
			@media screen and ( min-width:240px ) and ( max-width:940px )
			{
				.container
				{
					width:100%;
				}
				.header
				{
					height:auto;
					width:100%;
				}
				.header_left{
					height:60px;
					width:50%;
					float:none;
					margin-left:40%;
				}
				.header_left img
				{
					width:30%;
					float:none;
				}
				.header_center
				{
					height:60px;
					width:50%;
					float:none;
					line-height:20px;
					margin-left:30%;
					font-size:20px
				}
				.header_right
				{
					height:120px;
					width:50%;
					float:none;
					margin-left:45%;
				}
				.header_right .home{
					width:35%;
					float: none ;
				}
				.header_right .home img{
					width: 30%;
				}
				.nav
				{
					height:auto;
					width:100%;
				}
				.subnav
				{
					height:50px;
					width:100%;
					border-bottom:1px solid white;
					float:none;
					text-align:center;
					color:#fff;
					line-height:50px;
					font-weight:bold;
					font-family:arial;
				}
				.subnav a
				{
					color:#fff;
					text-decoration:none;
				}
				.slider
				{
					width:100%;
				}
				.slider  img
				{
					width:100%;
				}
				.content
				{
					height:auto;
					width:100%;
					margin-top: 40px;
				}
				.subcontent
				{
					height:162px;
					border-radius: 10px;
					width: 94%;
					float: none;
					margin: 10px;
					border: 1px solid #eaeaea;
					shadow: 1px;
				}
				.subcontent .heading{
					padding-left:10px;
				}
				.subcontent .heading p{
					font-weight: bold;
				}
				
				.subcontent .heading p span{
					color: green;
				}
				.subcontent .paragraph{
					border-bottom-left-radius: 10px;
					float:left;
					width:73%;
				}
				.subcontent .image{
					float:left;
					border-bottom-right-radius: 10px;
					width:23%;
					opacity: 0.8;
				}
				.image img{
				  width:100%;
				}
				.subcontent .product_images{
					width: 23%;
					margin:10px;
					background: aqua;
					float:left;
				}
				.product_images img{
				  width: 100%;
				}
				.footer
				{
					width:100%;
					height:auto;
				}
				.subfooter_left
				{
					width:100%;
					height:50px;
					border-bottom:1px solid white;
					float:none;
					color:#fff;
					line-height:50px;
					font-weight:bold;
					font-family:arial;
					font-size:10px;
					text-align:center;
				}
				.subfooter
				{
					width:100%;
					height:50px;
					border-bottom:1px solid white;
					float:none;
					text-align:center;
					color:#fff;
					line-height:50px;
					font-weight:bold;
					font-family:arial;
					font-size:10px;
				}
				
				.subfooter a
				{
					color:#fff;
					text-decoration:none;
				}
				.paragraph ul{
					list-style-type: none;
					color:black;
				}
				.paragraph ul li:first-child{
					color: green;
				}
				
				.subfooter_left a
				{
					color:#fff;
					text-decoration:none;
				}
				.subnav:last-child{
					border-right: none;
				}
				.subfooter:last-child{
					border-right: none;
				}
				.subfooter_left {
					padding-left: 2px;
				}
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="header">
				<div class="header_left"><img src="img/logo.PNG"></div>
				<div class="header_center">
					<h3>BHAGWAN PRODUCTS(INDIA)</h3>
				</div>
				<div class="header_right">
					<div class="home">
						<img src="img/home.PNG">
						<br>
						home 	
					</div>
					<div class="home">
						<img src="img/email.PNG">
						<br>
						email
					</div>
				</div>
			</div>
			<div class="nav">
				<div class="subnav"><a href="">Home Page</a></div>
				<div class="subnav"><a href="">About Us</a></div>
				<div class="subnav"><a href="">Our Products</a></div>
				<div class="subnav"><a href="">Infrastructure</a></div>
				<div class="subnav"><a href="">Enquiry Form</a></div>
				<div class="subnav"><a href="">Contact Us</a></div>
				<div class="subnav"><a href="">Email Send</a></div>
			</div>
			<div class="slider">
				<img src="img/s.PNG">
			</div>
			<div class="content">
				<div class="subcontent">
					<div class="heading">
						<p><span> » Welcome to</span> Our Site !</p>
					</div>
					<div class="paragraph">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
						
					</div>
					<div class="image">
						<img src="img/4.PNG">
					</div>
				</div>
				<div class="subcontent">
					<div class="heading">
						<p><span> » Welcome to</span> Our Site !</p>
					</div>
					<div class="paragraph">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
					</div>
					<div class="image">
						<img src="img/2.PNG">
					</div>
				</div>
				<div class="subcontent">
					<div class="heading">
						<p><span> » Welcome to</span> Our Site !</p>
					</div>
					<div class="product_images">
						<img src="img/1.PNG">
					</div>
					<div class="product_images">
						<img src="img/1.PNG">
					</div>
					<div class="product_images">
						<img src="img/1.PNG">
					</div>	
				</div>
				<div class="subcontent">
					<div class="heading">
						<p><span> » Welcome to</span> Our Site !</p>
					</div>
					<div class="paragraph">
						<ul>
							<li>M/S Bhagwan Products</li>
							<li>Address</li>
							<li>673960379</li>
							<li>bhag@gmail.com</li>
						</ul>
					</div>
					<div class="image">
						<img src="img/1.PNG">
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="subfooter_left"><a href="">Copyright_Bhagwan(India) All Rights Reserved</a></div>
				<div class="subfooter"><a href="">Home Page</a></div>
				<div class="subfooter"><a href="">About Us</a></div>
				<div class="subfooter"><a href="">Our Products</a></div>
				<div class="subfooter"><a href="">Infrastructure</a></div>
				<div class="subfooter"><a href="">Enquiry Form</a></div>
				<div class="subfooter"><a href="">Contact Us</a></div>
				<div class="subfooter"><a href="">Email Send</a></div>
			</div>
		</div>
	</body>
</html>