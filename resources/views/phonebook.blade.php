<!DOCTYPE html>
<html>
<head>
	<title>my phone book</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
</head>
<body>
 
<div id="app">
	<Myheader></Myheader>
	  <router-view></router-view>
	<Myfooter></Myfooter>
</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>