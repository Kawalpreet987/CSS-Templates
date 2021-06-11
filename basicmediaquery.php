<html>
	<head>
		<title></title>
	<style>
	body
	{
		margin:0px;
	}
	.container
	{
		height:850px;
		width:960px;
		background:cyan;
		margin:auto;
	}
	.header
	{
		height:200px;
		width:960px;
		background:red;
	}
	.nav
	{
		height:50px;
		width:960px;
		background:pink;
	}
	.subnav
	{
		height:50px;
		width:191px;
		text-align:center;
		line-height:50px;
		border-right:1px solid red;
		float:left;
	}
	.content
	{
		height:500px;
		width:960px;
		background:orange;
	}
	.footer
	{
		height:100px;
		width:960px;
		background:aqua;
	}
	@media screen and (min-width:240px) and (max-width:940px)
	{
			.container
		{
			width:100%;
		}
		.header
		{
			width:100%;
		}
		.nav
		{
			height:auto;
			width:960px;
			background:pink;
		}
		.subnav
		{
			height:50px;
			text-align:center;
			line-height:50px;
			border-right:0px solid red;
			border-bottom:1px solid red;
			float:none;
		}
		.content
		{
			width:100%;
		}
		.footer
		{
			width:100%;
		}
	}
	</style>
	</head>
	<body>
		<div class="container">
			<div class="header"></div>
			<div class="nav">
				<div class="subnav">Home</div>
				<div class="subnav">Home</div>
				<div class="subnav">Home</div>
				<div class="subnav">Home</div>
				<div class="subnav">Home</div>
			</div>
			<div class="content"></div>
			<div class="footer"></div>
		</div>
	</body>
</html>