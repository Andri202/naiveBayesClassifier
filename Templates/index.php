<!DOCTYPE html>
<html lang="en">
 
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Python Flask Bucket List App</title>
 
 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <link href="https://getbootstrap.com/docs/3.4/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
 
 
</head>
 
<body>
 
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand " href="#"><b>Spam App</b></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav my-2 my-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Spam Detection<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="dataset">Dataset</a>
		      </li>
		    </ul>
		  </div>
		</nav>

		 <div class="jumbotron">
            <div class="col-lg-12">
	                <form method="POST" action="">
				    <center>
				    <H3>Enter your text </H3> <br>
				    SMS :
				    <textarea rows="4" cols="50" name= "text_sms"></textarea>
				    <input type = "submit">
				    </center>
				</form>
			</div>
			<div class="col-lg-12">
                Result : <h1>{{ result }}</h1>
            </div>
        </div>
 
        <div class="row marketing">
            <div class="col-lg-6">
                <h4>Bucket List</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
 
                <h4>Bucket List</h4>
                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
 
                <h4>Bucket List</h4>
                <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
            </div>
 
            <div class="col-lg-6">
                <h4>Bucket List</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
 
                <h4>Bucket List</h4>
                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
 
                <h4>Bucket List</h4>
                <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
            </div>
        </div>
 
        <footer class="footer">
            <p>&copy; Company 2015</p>
        </footer>
 
    </div>
</body>
 
</html>