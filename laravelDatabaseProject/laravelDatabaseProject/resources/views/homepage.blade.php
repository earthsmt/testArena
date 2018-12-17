<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<title> Attractions Resort </title>
		<style>
		#signIn , #signUp
		{
			height:300px;
			width:500px;
			font-size:45px;
			color:#a3a375;
			border-radius: 90px;
		}
		#signIn
		{
			background-color: #42f4e8;
		}
		#signUp
		{
			background-color: #42f4e8;
		}
		.logo {
			height:150px;
			width:150px;
			vertical-align:middle
		}
		body 
		{
			background-color: lightblue;
		}
		.header1
		{
			font-size:50px;
		}
		</style>
		<script type='text/javascript'>
			function redirect(option)
			{
				if(option=='existing')
				{
					window.location.href = "{{ route('signIn') }}";
				}
				else if(option=='new')
				{
					window.location.href = "{{ route('newUser') }}";
				}
			}

		</script>
	</head>
	<body>
		<div align='center'>
		<h1 class=header1><img class='logo' src="https://media-cdn.tripadvisor.com/media/photo-s/06/5e/dc/79/ingang.jpg" /> Welcome to Attractions Resort <img class='logo' src="https://media-cdn.tripadvisor.com/media/photo-s/06/5e/dc/79/ingang.jpg" /></h1><br /><br /><br />
		<button id='signIn' onclick="redirect('existing')"><b>Sign In</b></button>&nbsp;&nbsp;&nbsp;&nbsp;
		<button id='signUp' onclick="redirect('new')"><b>Sign Up</b></button>
		</div>
	</body>
</html>




