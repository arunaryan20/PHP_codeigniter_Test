<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.card{
			margin-left: 500px;
			margin-top: 100px;
		}
	</style>	
</head>
<body>

         <nav class="navbar navbar-dark bg-primary">
       <h2 class="display-6" >CAREER GUIDANCE</h2>
      <?php echo $this->session->userdata('name'); ?>
</nav>
   
<div class="card text-center" style="width: 18rem;">
  <div class="card-body" id="card">
    <h5 class="card-title">Result</h5>
    <p class="card-text">This is the final result of your test. According to this result you can decide your career path. </p>
        <h3>  <?php echo $hello; ?>  </h3>
  </div>
</div>

</body>
</html>