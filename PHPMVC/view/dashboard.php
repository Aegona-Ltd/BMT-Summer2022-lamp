
<style type="text/css">
    .nav-link{
	color: #f9f6f6;
	font-size: 14px;
    }
	input{
		width: 400px;
		text-align: center;
		
	}	
</style>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Multi user role based application login in php mysqli</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
       <body>
	    <nav class="navbar navbar-info sticky-top bg-info flex-md-nowrap p-10">
		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="" style="color: #5b5757;"><b>Webs Codex</b></a>
		
		<a class="nav-link" type="button" onclick="GetID()">
		<input id="param" type="text" placeholder=" getbyid or delete or updated">
				<span data-feather="users"></span>
				Find
			</a>
		</nav>		
		<div class="container-fluid">
		    <div class="row">
			<nav class="col-md-2 d-none d-md-block bg-info sidebar" style="height: 569px">
		    	    <div class="sidebar-sticky">
			        <ul class="nav flex-column" style="color: #5b5757;">
				    <li class="nav-item">
					<a class="nav-link active" href="">
					<span data-feather="home"></span>
				            Dashboard <span class="sr-only">(current)</span>
					</a> 
				    </li>
		
						<h6>Delete & Updated</h6>	
						
						<li class="nav-item">
							<a class="nav-link" type="button" onclick="Delete()">
								<span data-feather="users"></span>
								Delete
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">
								<span data-feather="users"></span>
								Updated
							</a>
						</li>
				
			
					<h6>Catalog</h6>		
				    <li class="nav-item">
						<a class="nav-link" href="">
							<span data-feather="users"></span>
							Products
						</a>
				    </li>
				    <li class="nav-item">
						<a class="nav-link" href="">
							<span data-feather="users"></span>
							Category
						</a>
				    </li>	
				    <h6>Order & Shipping</h6>
					<li class="nav-item">
				    	<a class="nav-link" href="">
							<span data-feather="users"></span>
							Shipping
					    </a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="">
					        <span data-feather="users"></span>
							Customers
					    </a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="">
							<span data-feather="users"></span>
							Order
					    </a>
					</li>
							
			    </ul>
			</div>
		    </nav>
		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
		    <h1 class="h2">Dashboard</h1>
		</div>
		<div class="table-responsive">
		  <table class="table table-striped" >
		    <thead>
		       <tr>
			   <th>Id</th>
			   <th>Fullname</th>
			   <th>Companyname</th>
			   <th>Businessphone</th>
               <th>Email</th>
			   <th>Password</th>
			   <th>Created</th>
               <th>Updated</th>
			</tr>
		    </thead>
		    <tbody id="tbody">
			</tbody>
		    </table>
		</div>
	    </main>
	</div>
    </div>		
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    feather.replace();
</script>			
</body>
<script type="text/javascript" src="javascript.js"></script>
</html>