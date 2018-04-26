<!DOCTYPE html>
<html>
<head>
	<title>my phone book</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 
<div id="app">

	<Myheader></Myheader>
	<div class="container">
		<router-view></router-view>	
		 

	</div>
	 <Myfooter></Myfooter>
</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>