
<!DOCTYPE HTML>
<!--[if lt IE 7 ]> <html lang="en" class="ie ie6"> <![endif]--> 
<!--[if IE 7 ]>	<html lang="en" class="ie ie7"> <![endif]--> 
<!--[if IE 8 ]>	<html lang="en" class="ie ie8"> <![endif]--> 
<!--[if IE 9 ]>	<html lang="en" class="ie ie9"> <![endif]--> 
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<?php
	session_start();
	include("php/db_con.php"); // includere la connessione al database
	
	$row = mysql_fetch_row(mysql_query("SELECT * FROM utenti WHERE id='".$_GET["id"]."'"));


?>
	
  <meta charset="utf-8">
  <title>POST IT | <?php echo $_GET["nome"]; echo " "; echo $_GET["cognome"];  ?></title>
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="chrome=1">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold"> 
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

    <section id="profile" class="container-fluid">

        <!--Foto/Nome Profilo e Info-->
        <div id="profile-box" class="panel panel-info">
	        <div class="media">
	          	<div class="media-left">
	            	<a href="#">
	             		<img class="media-object" width="100" height="100" src="images/fotoprofilo.jpg" alt="foto-profilo">
	            	</a>
	          	</div>
		        <div class="media-body"><br>
		         	<h2 class="media-heading"> <?php echo $_GET["nome"]; echo " "; echo $_GET["cognome"];  ?>
			         	<div class="btn-group" role="group" aria-label="...">
			         		<button type="button" class="btn btn-default btn-lg">
	  							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
							</button>
			         	  	<button type="button" class="btn btn-default btn-lg">
	  							<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
							</button>
			         	</div>
					</h2>
		            	<?php echo $_GET["tipo"]; ?>
		        </div>
	        </div>
        </div>


        <!-- Inbox -->
        <div class="panel panel-success">
          	<div class="panel-heading">
            	<h6 class="panel-title">Message Inbox</h6>
          	</div>
          	<div class="panel-body">
            	Panel content
          	</div>
        </div>


        <!-- Corsi e Appunti -->
        <div class="row">
        	<div class="col-md-6">
		        <!-- Corsi -->
		        <div class="panel panel-warning">
		          	<div class="panel-heading">Corsi</div>

		          	<!-- Table -->
		          	<table class="table table-striped">
		          		<thead>
		          			<th>Nome corso</th>
		          			<th>ECTS</th>
		          		</thead>
		          	    <tbody>
		          	      <tr>
		          	        <td>Finanza Aziendale</td>
		          	        <td>6</td>
		          	      </tr>
		          	      <tr>
		          	        <td>Sistemi Operativi</td>
		          	        <td>12</td>
		          	      </tr>
		          	      <tr>
		          	        <td>Programmazione Internet</td>
		          	        <td>18</td>
		          	      </tr>
		          	    </tbody>
		          	  </table>
		        </div>
		    </div>

		    <div class="col-md-6">
	        <!-- Appunti -->
		        <div class="panel panel-warning">
		          	<div class="panel-heading">Appunti</div>

		          	<!-- Table -->
		          	<table class="table table-striped">
			          	<thead>
			          		<th>Nome appunto</th>
			          		<th>Data</th>
			          	</thead>
		          	    <tbody>
		          	      <tr>
		          	        <td>Lezione di Strategia</td>
		          	        <td>16/02/2015</td>
		          	      </tr>
		          	      <tr>
		          	        <td>Appunti sui Computer</td>
		          	        <td>12/03/2014</td>
		          	      </tr>
		          	      <tr>
		          	        <td>La mia vita</td>
		          	        <td>01/01/0001</td>
		          	      </tr>
		          	    </tbody>
		          	  </table>
		        </div>
	    	</div>
		</div>
        
    </section>



<!--Scripts-->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
