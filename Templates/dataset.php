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

    <style>
        .pagination-page-info {
            padding: .6em;
            padding-left: 0;
            width: 40em;
            margin: .5em;
            margin-left: 0;
            font-size: 12px;
        }
        .pagination-page-info b {
            color: black;
            background: #6aa6ed;
            padding-left: 2px;
            padding: .1em .25em;
            font-size: 150%;
        }
        </style>
 
 
</head>
 
<body>
    {% with messages = get_flashed_messages() %}
      {% if messages %}
        <script type="text/javascript">
                alert({{messages}});
        </script>
      {% endif %}
    {% endwith %}
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand " href="#"><b>Spam App</b></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav my-2 my-lg-0">
		      <li class="nav-item ">
		        <a class="nav-link" href="/">Spam Detection</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="dataset">Dataset</a>
		      </li>
		    </ul>
		  </div>
		</nav>
 
        <div class="row marketing">
            <div class="col-lg-12">
                {% if data|length %}
                    <div style="padding-bottom: 20px">
                        <a href="insert" class="btn btn-success" role="button">Tambah data</a>
                    </div>
                    {{pagination.links }}
                    <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                            <tr style="text-align: center;">
                                <th>No</th>
                                <th>Text</th>
                                <th>Label</th>
                                <th>#</th>
                            </tr>
                          </thead>
                          <tbody>
                            {% for data in data %}
                                <tr>
                                    <td>{{ loop.index + (page - 1) * per_page }}</td>
                                    <td>{{ data[1] }}</td>
                                    <td>
                                        {% if data[2]  == 1 %}
                                            Spam
                                        {% else %}
                                            Ham
                                        {% endif %}
                                    </td>
                                    <td>
                                        <a href="delete/{{ data[0] }}" class="btn btn-danger" role="button">Delete</a>
                                    </td>
                                </tr>
                            {% endfor %}
                          </tbody>
                        </table>
                    </div>
                    {{ pagination.links }}
                {% else %}
                    <h1>Null Dataset</h1>
                {% endif %}

            </div>
        </div>
 
        <footer class="footer">
            <p>&copy; Company 2015</p>
        </footer>
 
    </div>
</body>
 
</html>