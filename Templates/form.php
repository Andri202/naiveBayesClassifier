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
 <style type="text/css">
     tr, td{
        height: 40px;
     }
     .alignTop {
        vertical-align: top;
     }
     .widthTbl{
        width: 50px;
        text-align: center;
     }
 </style>


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
		        <a class="nav-link" href="index">Spam Detection</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="dataset">Dataset</a>
		      </li>
		    </ul>
		  </div>
		</nav>

		 <div class="jumbotron">
            <div class="col-lg-12" style="margin-left: 13%;text-align: left;">
                <form method="POST" action="">
                    <table>
                        <tr>
                            <td class="alignTop">Text SMS</td><td class="alignTop widthTbl">:</td><td><textarea name="text_sms" rows="4" cols="40"></textarea></td>
                        </tr>
                        <tr>
                            <td>Label</td><td class="alignTop widthTbl">:</td>
                            <td><select name="label" style="width: 100%">
                                    <option value="1">Spam</option>   
                                    <option value="0">Ham</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: right;"><input type = "submit"></td>
                        </tr>
                    </table>  
				</form>
			</div>
        </div>
 
        <div class="row marketing">
        </div>
 
        <footer class="footer">
            <p>&copy; Company 2015</p>
        </footer>
 
    </div>
</body>
 
</html>