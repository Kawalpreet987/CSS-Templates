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
		height:800px;
		width:960px;
		margin:auto;
	}
	.header
	{
		height:80px;
		width:960px;
		background:#3a5795;
	}
	.header1
	{
		height:78px;
		width:491px;
		float:left;
		color:white;
	}
	.header1 h2{
		padding-left:120px;
		line-height:6px;
		font-size: 30px;
		color: white;
		font-weight:bold;
	}
	.header2
	{
		height:78px;
		width:465px;
		float:left;
		color:white;
	}
	
	.subheader1{ 
		float:left;
		margin-left:10px;
		font-size:15px;
	}
	.subheader2{
		float:left;
		width:60px;
	}
	.email
	{
		margin-top:10px;
	}
	.passwords
	{
		margin-top:10px;
	}
	 .subcontent1 .textbox .login_password
	{
		height:20px;
		width:167px;
		outline:none;
	}
	.subheader2 button{
		margin-top:  20px;
		margin-left: 18px;
		background:#6075a1;
		color:white;
	}
	.checkbox
	{
		color:#eee;
	}
	.email{
		height:20px;
	}
	.password{
		height:20px;
	}
	.text
	{
		margin-top:3px;
	}
	.text a{
		color: #eee;
		text-decoration:none;
	}
	.content
	{
		height:600px;
		width:960px;
		background:#edf0f5;
	}
	.subcontent1
	{
		height:600px;
		width:471px;
		background:#edf0f5;
		float:left;
	}
	.sub1
	{
		height:250px;
		width:268px;
		background:#edf0f5;
		padding:30px;
		margin-top:50px;
		margin-left:48px;
		
	}
	.heading
	{
		height:100px;
		width:268px;
		color:black;
		line-height:50px;
		text-align:center;
		font-size:20px;
		font-weight:bold;	
	}
	.article{
		height:56px;
		width:268px;
	}
	.image img
	{
		height:45px;
		width:45px;
		float:left;
	}
	.article .text
	{
		height:50px;
		width:288px;
		text-align:left;
		font-size:10px;
		padding-left:63px;
	}
	.subcontent2
	{
		height:600px;
		width:487px;
		float:left;
		background:#edf0f5;	
	}
	.footer
	{
		height:126px;
		width:960px;
	}
	 .subfooter1
	{
		height:28px;
		width:960px;
		background:white;
	}
	.subfooter1 li
	{
		list-style-type:none;
		margin-left:2px;
		float:left;
		margin-left:15px;
	}
	.subfooter1 li a
	{
		text-decoration:none;
	}
	.subfooter2
	{
		height:60px;
		width:960px;
		border-bottom:2px #edf0f5;
	}
	.subfooter2 li
	{
		list-style-type:none;
		margin-left:2px;
		float:left;
		margin-left:15px;
		border-bottom:2px #edf0f5;
	}
	.subfooter2 li a
	{
		text-decoration:none;
	}
	 .subfooter3
	{
		height:40px;
		width:960px;
		background:white;
		color:black;
	}
	
	.subcontent2 .form
	{
		height:400px;
		width:400px;
		background:#edf0f5;	
		margin-right:61px;
		margin-top:35px;
		float:right;
	}
	.form .text 
	{
		height:85px;
		width:400px;
	}
	.form .text h3
	{
		line-height:6px;
		font-size:30px;
	}
	.name
	{
		height:50px;
		width:198px;
		float:left;
	}
	.name input[type="textbox"]
	{
		height:35px;
		width:196px;
		border:1px solid black;
		padding-left:10px;
		outline:none;
		float:left;
		margin-top:10px;
		border-radius:5px;
	}
	.email input[type="email"]:last-child
	{
		height:35px;
		width:394px;
		border:1px solid black;
		padding-left:10px;
		outline:none;
		border-radius:5px;
		margin-top:10px;
	}
	.number
	{
		height:40px;
		width:396px;
		margin-top:80px;
	}
	.number input[type="number"]{
		height:35px;
		width:394px;
		padding-left:10px;
		outline:none;
		border:1px solid black;
		border-radius:5px;
	}
	.password
	{
		height:40px;
		width:396px;
		margin-top:3px;
	}
	 .password input[type="password"]
	{
		height:35px;
		width:394px;
		padding-left:10px;
		outline:none;
		border-radius:5px;
		margin-top:10px;
		border:1px solid black;
	}
	.date
	{
		height:40px;
		width:396px;
		margin-top:23px;
	}
	select
	{
		height:27px;
		width:65px;
		float:left;
		padding-left:4px;
	}
	.birth{ 
		float:left;
	}
	 .articles
	{
		height:40px;
		width:171px;
		float:left;
		font-size:15px;
		margin-left:16px;
	}
	.articles a
	{
		text-decoration:none;
		float:left;
	}
	.gender
	{
		height:40px;
		width:396px;
		margin-top:-9px;
		float:left;
	}
	.gender input[type="radio"]
	{
		margin-left:15px;
		color:black;
		margin-top:10px;
	}
	.txt
	{
		height:86px;
		width:396px;
		color:white;
	}
	.signup button
	{
		height:35px;
		width:200px;
		color:white;
		background:#5f9c4c;
		margin-left:15px;
		border:1px solid transparent;
		border-radius:8px;
		-moz-box-shadow: 0px 3px 8px rgb(100,100,100);
		-webkit-box-shadow: 0px 3px 8px rgb(100,100,100);
		box-shadow: 0px 3px 8px rgb(100,100,100);
	}
	</style>
	<body>
		<div class="container">
			<div class="header">
				<div class="header1">
					<h2>facebook</h2>
				</div>
				<div class="header2">
					<form>
						<div class="subheader1">
							<div class="email">
								<label> Email or Phone </label>
							</div>
							<div class="textbox">
								<input type="email" class="login_email" id="email">
							</div>
							<div class="checkbox">
								<input type="checkbox">Keep me logged in
							</div>
						</div>
						<div class="subheader1">
							<div class="passwords">
								<label> Password </label>
							</div>
							<div class="textbox">
								<input type="password" class="login_password" id="password">
							</div>
							<div class="text">
								<a href="#">Forget my password?</a>
							</div>
						</div>
						<div class="subheader2">
							<button>Login</button>
						</div>
					</form>
			    </div>
			</div>
			<div class="content">
				<div class="subcontent1">
					<div class="sub1">
						<div class="heading">Connect with friends and world with you on facebook.</div>
						<div class="article">
							<div class="image"><img src="img/11.PNG"></div>
							<div class="text">see photos and upadates from friends in news feed</div>
						</div>
						<div class="article">
							<div class="image"><img src="img/22.PNG"></div>
							<div class="text">see what's new in your life in your timeline</div>
						</div>
						<div class="article">
							<div class="image"><img src="img/33.PNG"></div>
							<div class="text">fint more of whats's you are looking for with graph search</div>
						</div>
					</div>
				</div>
				<div class="subcontent2">
					<form>
						<div class="form">
							<div class="text">
								<h3>Sign Up</h3>
								<p>It's free and always will be</p>
							</div>
							<div class="name">
								<input type="textbox" placeholder="first name">
							</div>
							<div class="name">
								<input type="textbox" placeholder="last name">
							</div>
							<div class="email">
								<input type="email" placeholder="email or mobile number">
							</div>
							<div class="number">
								<input type="number" placeholder="Re-enter email or mobile number">
							</div>
							<div class="password">
								<input type="password"  placeholder="password">
							</div>
							<div class="date">
								<p>Birthday</p>
								<div class="birth">
									<select>
										<option>month</option>
									</select>
									<select>
										<option>day</option>
									</select>
									<select>
										<option>year</option>
									</select>
								</div>
								<div class="articles">
									<a href="">Why Do I Need To Provide My Birthday</a>
								</div>
							</div>
							<div class="gender">
								<input type="radio" name="gender" id="male">Male
								<input type="radio" name="gender" id="female">Female
							</div>
							<div class="txt">
								<p>by clicking sign up you are agree to the terms and conditions.</p>
							</div>
							<div class="signup">
								<button>sign up</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="footer">
				<div class="subfooter1">
					<ul>
						<li><a href="">english</a></li>
						<li><a href="">ਪੰਜਾਬੀ</a></li>
						<li><a href="">हिन्दी</a></li>
						<li><a href="">മലയാളം</a></li>
						<li><a href="">ಕನ್ನಡ</a></li>
						<li><a href="">తెలుగు</a></li>
						<li><a href="">தமிழ்</a></li>
						<li><a href="">বাংলা</a></li>
						<li><a href="">ગુજરાતી</a></li>
						<li><a href="">मराठी</a></li>
						<li><a href="">اردو</a></li>

					</ul>
				</div>
				<div class="subfooter2">
					<ul>
						<li><a href="">sign up</a></li>
						<li><a href="">login </a></li>
						<li><a href="">Messenger</a></li>
						<li><a href="">Facebook Lite</a></li>
						<li><a href="">Watch</a></li>
						<li><a href="">People</a></li>
						<li><a href="">Profiles</a></li>
						<li><a href="">Pages</a></li>
						<li><a href="">Page categories</a></li>
						<li><a href="">Events</a></li>
						<li><a href="">Places</a></li>
						<li><a href="">Games</a></li>
						<li><a href="">Locations</a></li>
						<li><a href="">Marketplace</a></li>
						<li><a href="">Groups</a></li>
						<li><a href="">Instagram</a></li>
						<li><a href="">local</a></li>
						<li><a href="">services</a></li>
						<li><a href="">about</a></li>
						<li><a href="">create ad</a></li>
						<li><a href="">create page</a></li>
						<li><a href="">developers</a></li>
						<li><a href="">carrers</a></li>
						<li><a href="">privacy</a></li>
						<li><a href="">cookies</a></li>
						<li><a href="">terms</a></li>
						<li><a href="">account privacy</a></li>
						<li><a href="">help</a></li>
					</ul>
				</div>
				<div class="subfooter3">
					<p>Facebook &copy; 2015<br>English(US)</p>
				</div>	
			</div>
		</div>
	</body>
</html>