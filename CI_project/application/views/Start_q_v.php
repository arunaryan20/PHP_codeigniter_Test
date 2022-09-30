<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		form{
			margin-top: 20px;
			margin-left: 300px;
			margin-bottom: 50px;
		}

	</style>
	<script type="text/javascript">
		function timeout()
		{
		   var minute=Math.floor(timeLeft/60);
		var second=timeLeft%60;
		if(timeLeft<0){
			//$('#frm').submit();
			clearTimeout(timeout);
			document.getElementById("frm").submit();
		}else{
			document.getElementById("time").innerHTML=minute+":"+second;
		}
		timeLeft--;
		var tm=setTimeout(function(){timeout()},1000);
	
		} 
		
	</script>
</head>
<body onload="timeout()">
          <nav class="navbar navbar-dark bg-primary">
       <h2 class="display-6" >CAREER GUIDANCE</h2>
     <?php echo $this->session->userdata('name'); ?> &emsp;
     <div id="time" style="float: right;"><h4>timeout</h4></div>
     </nav>

      <script type="text/javascript">
      	var timeLeft=2*60;
      </script>

     

     <form action="result" method="post" id="frm">
   
  <strong>  1. Do you do certain activities because you think it's what you have to do?<br> </strong>
         <div id="opt"> 
          <input type="radio" name="ques_1" value="yes"> Yes<br>
          <input type="radio" name="ques_1" value="no"> No<br>
          <input type="radio" name="ques_1" value="nomatter"> Doesn’t Matter<br>
          <input type="radio" name="ques_1" value="nosure"> Not Sure<br>
        </div>
 <br>


<strong>  2. Do you believe that you can love what you do and also make money doing it? <br> </strong>
         <div id="opt"> 
          <input type="radio" name="ques_2" value="yes"> Yes<br>
          <input type="radio" name="ques_2" value="no"> No<br>
          <input type="radio" name="ques_2" value="nomatter"> Doesn’t Matter<br>
          <input type="radio" name="ques_2" value="nosure"> Not Sure<br>
        </div>
        <br>

 <strong> 3. Do you believe in yourself? <br> </strong>
         <div id="opt"> 
          <input type="radio" name="ques_3" value="yes"> Yes<br>
          <input type="radio" name="ques_3" value="no"> No<br>
          <input type="radio" name="ques_3" value="nomatter"> Doesn’t Matter<br>
          <input type="radio" name="ques_3" value="nosure"> Not Sure<br>
        </div>
<br>
        <strong> 4. Do you have a career vision? <br> </strong>
         <div id="opt"> 
          <input type="radio" name="ques_4" value="yes"> Yes<br>
          <input type="radio" name="ques_4" value="no"> No<br>
          <input type="radio" name="ques_4" value="nomatter"> Doesn’t Matter<br>
          <input type="radio" name="ques_4" value="nosure"> Not Sure<br>
        </div>

<br>
         <strong> 5. Do you think of that vision often? <br> </strong>
         <div id="opt"> 
          <input type="radio" name="ques_5" value="yes"> Yes<br>
          <input type="radio" name="ques_5" value="no"> No<br>
          <input type="radio" name="ques_5" value="nomatter"> Doesn’t Matter<br>
          <input type="radio" name="ques_5" value="nosure"> Not Sure<br>
        </div>
<br>

<!-- <a class="btn btn-info" href="<?php echo site_url('Home_c/result') ?>" role="button">Submit</a> -->
   
   <button type="submit" class="btn btn-info">Submit</button>

<br>
</form>
<script type="text/javascript">
	window.history.forward();
function noBack()
{
	window.history.forward();
}
</script>

</body>
</html>