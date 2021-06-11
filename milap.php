<html>
	<head>
		<title></title>
	</head>
	<style>
		body
		{ 
			margin: 0; 
		}
			.container
		{
			height:904px;
			width:1000px;
			margin:auto;
		}
		.subcontainer
		{
			height:900px;
			width:960px;
			background-image: linear-gradient (to bottom ,#fff, #e6e7e9);
			margin-left:20px;
		}
		.header{
			height:100px;
			width:960px;
			background:#f6f6f6;
		}
		.subheader1
		{
			height:100px;
			width:220px;
			float:left;
		}
		.subheader1 img
		{
			height:93px;
			width:201px;
			
		}
		.subheader2
		{
			height:80px;
			width:540px;
			float:left;
			color:#188cca;
		}
		.subheader2 p{
			font-weight:bold;
			font-size:25px;
		}
		.subheader2 p span{
			float: right;
			padding-right: 100px;
		}
		.subheader3
		{	
			height:100px;
			width:200px;
			float:left;
		}
		.subheader3 img
		{
			height:93px;
			width:201px;
		}
		.wrap_navbar{
			height:50px;
			width: 960px;
			background: #0783c0;
			border-radius: 87px;
		}
		.navbar
		{
			height:45px;
			width:860px;
			margin:auto;
			background:#a7cce6;
		}
		.subnav
		{
			height:45px;
			width:106px;
			border-right:1px  solid blue;
			float:left;
			line-height:50px;
			text-align:center;
		}
		.subnav a
		{
			text-decoration:none;
		}
		.subnav:last-child{
			border-right:none;
		}
		.slider
		{
			height:300px;
			width:960px;
			background:#f6f6f6;
		}
		.subslider1
		{
			height:300px;
			width:596px;
			
			float:left;			
		}
		.subslider1 span
		{
			font-size:50px;
			font-weight:bold;
			padding-bottom:25px;
			padding-left:40px;
		}
		.subslider1 h5
		{
			font-size:20px;
			padding:left:40px;
		}
		.subslider2
		{
			height:300px;
			width:360px;
			
			float:left;
		}
		.subslider2 img
		{
			height:250px;
			width:200px;
			padding-left:80px;
			padding-top:28px;
		}
		.content
		{
			height:250px;
			width:900px;
			background:#d6d6d6;
			margin-left:29px;
			border-radius:10px;
			border-top:3px  solid #f3d258;
		}
		.subcontent
		{
			height:300px;
			width:224px;
			border-right:1px white;
			float:left;
			
		}
		.heading
		{
			height:60px;
			width:235px;
			
		}
		.text
		{
			height:60px;
			width:140px;
			
			float:left;
		}
		.text
		{
			line-height:60px;
			text-align:center;
			font-size:20px;
			font-weight:bold;
		}
		.image
		{
			height:60px;
			width:91px;
			
			float:left;
		}
		.image img
		{
			height:40px;
			width:60px;
			padding-top:8px;
		}
		.paragraph 
		{
			height:240px;
			width:230px;
			
		}
		.button
		{
			height:20px;
			width:60px;
			
		}
		.button button
		{
			height:20px;
			width:60px;
			border-radius:5px;
			background:#5a6c7d;
		}
		.button button a
		{
			text-decoration:none;
			color:white;
		}
		.footer
		{
			height:150px;
			width:960px;
			background:#0289c9;
			margin-top:50px;
			background-image: linear-gradient (to bottom ,#fff, #e6e7e9);
		}
		.subfooter
		{
			height:150px;
			width:318px;
			
			float:left;
		}
		.subfooter ul
		{
			list-style-type:none;
			font-size:12px;
		}
		.subfooter span
		{
			font-size:20px;
			
			
		}
		.subfooter1
		{
			height:30px;
			width:100px;
		
			margin:auto;
			margin-top:25px;
		}
		.subfooter1 img
		{
			height:30px;
			width:100px;
		}
		@media screen and ( min-width:240px ) and ( max-width:940px )
		{
			
			.container
			{
				height:auto;
				width:100%;
			}
			.subcontainer
			{
				height:auto;
				width:95%;
				background-image: linear-gradient (to bottom ,#fff, #e6e7e9);
				margin-left:20px;
			}
			.header{
				height:auto;
				width:100%;
				
			}
			.subheader1
			{
				height:100px;
				width:74%;
				float:none;
				margin-left:120px;
			}
			.subheader1 img
			{
				height:93px;
				width:50%;
				
			}
			.subheader2
			{
				height:80px;
				width:100%;
				float:none;
				color:#188cca;
			}
			.subheader2 p{
				font-weight:bold;
				font-size:20px;
				text-align:center;
			}
			.subheader2 p span{
				float:none;
				padding-right: 100px;
			}
			.subheader3
			{	
				height:100px;
				width:74%;
				float:none;
				margin-left:120px;
			}
			.subheader3 img
			{
				height:93px;
				width:50%;
			}
			.wrap_navbar{
				height:400px;
				width: 100%;
				border-radius: 87px;
			}
			.navbar
			{
				height:auto;
				width:95%;
				margin:auto;
				background:#a7cce6;
			}
			.subnav
			{
				height:50px;
				width:100%;
				border-right:0px  solid blue;
				border-bottom:1px  solid blue;
				float:none;
				line-height:50px;
				text-align:center;
			}
			.subnav a
			{
				text-decoration:none;
			}
			.slider
			{
				height:auto;
				width:100%;
			}
			.subslider1
			{
				height:280px;
				width:55%;
				float:none;
				padding-left:20px;
			}
			.subslider1 span
			{
				font-size:50px;
				font-weight:bold;
				padding-bottom:25px;
				padding-left:40px;
			}
			.subslider1 h5
			{
				font-size:20px;
				padding:left:40px;
			}
			.subslider2
			{
				height:300px;
				width:40%;
				float:none;
				margin-left:15px;
			}
			.subslider2 img
			{
				height:auto;
				width:100%;
				padding-left:80px;
				padding-top:28px;
			}
			.content
			{
				height:auto;
				width:90%;
				background:#d6d6d6;
				margin-left:29px;
				border-radius:10px;
				border-top:3px  solid #f3d258;
			}
			.subcontent
			{
				height:170px;
				width:100%;
				border-right:1px white;
				float:none;
				padding-left:15px;
				
			}
			.heading
			{
				height:60px;
				width:235px;
				
			}
			.text
			{
				height:60px;
				width:140px;
				
				float:left;
			}
			.text
			{
				line-height:60px;
				text-align:center;
				font-size:20px;
				font-weight:bold;
			}
			.image
			{
				height:60px;
				width:91px;
				
				float:left;
			}
			.image img
			{
				height:40px;
				width:60px;
				padding-top:8px;
			}
			.paragraph 
			{
				height:240px;
				width:230px;
				
			}
			.button
			{
				height:20px;
				width:60px;
				
			}
			.button button
			{
				height:20px;
				width:60px;
				border-radius:5px;
				background:#5a6c7d;
			}
			.button button a
			{
				text-decoration:none;
				color:white;
			}
			.footer
			{
				height:auto;
				width:100%;
				background:#0289c9;
				margin-top:25px;
				background-image: linear-gradient (to bottom ,#fff, #e6e7e9);
			}
			.subfooter
			{
				height:150px;
				width:90%;
				padding-left:30px;
				float:none;
			}
			.subfooter ul
			{
				list-style-type:none;
				font-size:12px;
			}
			.subfooter span
			{
				font-size:20px;
				
				
			}
			.subfooter1
			{
				height:30px;
				width:100px;
			
				margin:auto;
				margin-top:25px;
			}
			.subfooter1 img
			{
				height:30px;
				width:80px;
			}
		}
	</style>
	<body>
		<div class="container">
			<div class="subcontainer">
				<div class="header">
					<div class="subheader1">
						<img src="img/h1.PNG">
					</div>
					<div class="subheader2">
						<p>MILAP INDUSTRAIL CORPORATION<br><span>Since 1990</span></p>
					</div>
					<div class="subheader3">
						<img src="img/h3.PNG">
					</div>
				</div>
				<div class="wrap_navbar">
					<div class="navbar">
						<div class="subnav"><a href="">Home</a></div>
						<div class="subnav"><a href="">About Us</a></div>
						<div class="subnav"><a href="">Products</a></div>
						<div class="subnav"><a href="">Infrastructure</a></div>
						<div class="subnav"><a href="">Services</a></div>
						<div class="subnav"><a href="">Quality Policy</a></div>
						<div class="subnav"><a href="">Contact Us</a></div>
						<div class="subnav"><a href="">Feedback</a></div>
					</div>
				</div>
				<div class="slider">
					<div class="subslider1">
							<h1>Pillar Type <br>or H Frame Presses</span>
							<h5>Manufactures of</h5>
							<p>Power Presses,Shearing Machines,Press Brake,<br>Pneumatic Clucth & Accessories</p>
					</div>
					<div class="subslider2">
						<img src="img/s2.PNG">
					</div>
				</div>
				<div class="content">
					<div class="subcontent">
						<div class="heading">
							<div class="text">About Us</div>
							<div class="image">
								<img src="img/img1.PNG">
							</div>
						</div>
						<div class="paragrapgh">
							<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.
							Lorem Ipsum has been the industry's standard dummy text ever since the 150.
							</p>
						</div>
						<div class="button">
							<button>
								<a href="">More</a>
							</button>
						</div>
					</div>
					<div class="subcontent">
						<div class="heading">
							<div class="text">Infrastructure</div>
							<div class="image">
								<img src="img/img2.PNG">
							</div>
						</div>
						<div class="paragrapgh">
							</p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
							</p>
						</div>
						<div class="button">
							<button>
								<a href="">More</a>
							</button>
						</div>
					</div>
					<div class="subcontent">
						<div class="heading">
							<div class="text">Quality</div>
							<div class="image">
								<img src="img/img3.PNG">
							</div>
						</div>
						<div class="paragrapgh">
							<p>	
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
							</p>
						</div>
						<div class="button">
							<button>
								<a href="">More</a>
							</button>						
						</div>
					</div>
					<div class="subcontent">
						<div class="heading">
							<div class="text">Services</div>
							<div class="image">
								<img src="img/img4.PNG">
							</div>
						</div>
						<div class="paragrapgh">
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								Lorem Ipsum has been the industry's standard dummy text ever since the 150.
							</p>
						</div>
						<div class="button">
							<button>
								<a href="">More</a>
							</button>
						</div>
					</div>
				</div>
				<div class="footer">
					<div class="subfooter">
						<ul>
							<li><span>Links</span></li>
							<li>Home</li>
							<li>About Us</li>
							<li>Products</li>
							<li>Quality</li>
							<li>Infrastructure</li>
							<li>Contact Us</li>
						</ul>
					</div>
					<div class="subfooter">
						<ul>
							<li><span>Contact Us</span></li>
							<li>Address:street no-2,phase-3,Focal Point <br> Ludhiana,141008</li>
							<li>phone no- +91-161-460903</li>
							<li>mobile no- +91-62590827957</li>
							<li>Email-gfdhhd@gmail.com</li>
							<li>website- www.uhffhhdf.com</li>
						</ul>
					</div>
					<div class="subfooter">
						<div class="subfooter1"><span>Find Us On</div>
						<div class="subfooter1">
							<img src="img/f.PNG">
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>