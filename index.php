<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>e-Instapp - Eftal Yurtseven</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" />
	<style type="text/css">
		
		body{background: #eee; font: 12px verdana;}
		.container{widtH: 500px; padding: 10px; margin: 30px auto; background: #fff; }
		form{
			margin: 10px;
		}
		h3{
			margin: 2px;
			margin-bottom: 5px;
			border-bottom: 1px solid #eee;
			padding: 5px;
		}
		.clear{clear: both}
		ol{list-style-type: none}
		h3 span{font-size: 11px;}
		#left{
			float: left;
		}
		
		#right{
			position: relative;
			left: 20px
		}
		#right ol li{display: block}
		
	</style>
</head>
<body>

<div class="container">
	<h3>e-Instapp <span> by <a href="http://www.e-yurtseven.net">eftal yurtseven</a></span></h3>
<form class="form-inline" action="index.php" method="post">
  <div class="form-group">
    <label>Instagram Username:</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="write username">

  <button type="submit" class="btn btn-default">Connect</button>
</form>
</div>
</div>
<div class="bot"></div>
<?php 
	
	if($_POST){
	
		
		/* Including Class  */
		include "e-instapp.class.php";
		$eapp = new einstapp;
		
		## Username from input ##
		$post = strip_tags(trim($_POST["username"]));
		
		## !!!!!! *** --- Your apps CLIENT ID --- *** !!!!!! ##
			#################################################
				$clientID = "6bdf37c1050c46519079075cb5d82920"; ##
			#################################################
		
		## Connect ##
		$e = $eapp->search_cnnx($post, $clientID);
		
			## Outputs ##
			$data = json_decode($e);
			print_r($data);
		
?>
<div class="container">
	
	<div id="left">
		
		<img src="<?php echo $pp ?>" alt="<?php echo $full_name ?>" title="<?php echo $full_name ?>" style="width: 100px; height: 100px;"/>
		
	</div>
	
	<div id="right">
		
		<ol>
			<li><b>Username:</b> <?php echo $username ?> </li>
			<li><b>Full Name:</b>  <?php echo $full_name ?>  </li>
			<li><b>ID:</b>  <?php echo $id ?>  </li>
		</ol>
		
	</div>
	
</div>
<?php } ?>

<div class="container">
	<a href="http://e-yurtseven.net/31-e-instapp-instagram-arama-uygulamasi">
		<h4>&laquo; e-Instapp | eftal yurtseven </h4>
	</a>
</div>

</body>
</html>