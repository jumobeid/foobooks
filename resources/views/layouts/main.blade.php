<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title', 'Cattle Mng System')
    </title>

    <meta charset='utf-8'>
    <link href="/css/orders.css" type='text/css' rel='stylesheet'>
	 <!-- Latest compiled and minified CSS -->
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @stack('head')

</head>
<body class="container">

    <header>
	    <div class="row">
			<div class="col-md-3">
				<img
				src='/images/CMSlogo.jpg'
				style='width:248px'
				alt='BillSplitter Logo'>
			</div>
		
			<div class="col-md-5">
				<div class="page-header">
					<h1>Cattle Management System</h1>
				</div>
				<div class="col-md-5">
				    <p>Welcome Administrator</p>
				</div>
			</div>
			
			<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
			  <table class="table table-striped">
				<tbody>
				   <tr>
				    <th>Pasture:</th>
						<td>Al Moroj</td>
				   </tr>
				   <tr>
					<th>Herd:</th>
						<td>Snow White</td>
				   </tr>
				   <tr>
					<th>Number of Animals:</th>
						<td>58</td>
				   </tr>
				   <tr>
					<th>Total No of Coworkers:</th>
						<td>4</td>
				   </tr>
				   <tr>
					<th>Owner:</th>
						<td>Sead Salem</td>
				   </tr>
				   <tr>
					<th>Location:</th>
						<td>Al Ain</td>
				   </tr>		
				</tbody>
			  </table>
			</div>
			</div>
			</div>
		</div>
    </header>

	
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">WebSiteName</a>
			</div>
			<ul class="nav navbar-nav">
			  <li class="active"><a href="#">Home</a></li>
			  <li><a href="#">Page 1</a></li>
			  <li><a href="#">Page 2</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		  </div>
		</nav>
    <section>
        @yield('content')
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<a href="https://www.w3schools.com">
					<img src="/images/CM1_r3_c4.gif" alt="Go to W3Schools!" width="137" height="116" border="0">
					</a>
				</div>
			</div>
		<div>
    </section>

    <footer class="endit">
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    @stack('body')

</body>
</html>
