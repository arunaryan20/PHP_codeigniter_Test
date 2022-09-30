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
		form{
			margin-left: 20px;
			margin-right: 20px;
		}
	</style>
</head>
<body>

  <nav class="navbar navbar-dark bg-primary">
       <h2 class="display-6" >CAREER GUIDANCE</h2>
</nav>
<h2 align="center">Registration Form</h2>
<hr>
   
     <form id="frm">
  <div class="form-row">
  	 <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name">

    </div>
    <div class="form-group col-md-6">
      <label for="fathername">Father's Name</label>
      <input type="text" class="form-control" id="fathername" name="fathername" placeholder="Father's Name">
    </div>
    <div class="form-group col-md-6">
      <label for="phone">Mobile Number</label>
      <input type="text" class="form-control" name="phone" id="phone" placeholder="Mobile Number">
    </div>

     <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
     
      <!-- Example single danger button -->
<lebel for="course">Choose course: </lebel>&emsp;
<select name="course" id="course">
 		<option value="B.sc">B.sc(CS)</option>
	<option value="BCA">BCA</option>
	<option value="B.tech">B.tech</option>
	<option value="MCA">MCA</option>

</select>

  </div>
  <br><br><button type="button" name="submit" id="submit" class="btn btn-primary">Register</button>
 <div id="message"></div> 
 <div id="error"></div> 
</form>

    <script type="text/javascript">
    	  $(document).ready(function(){
              
              $('#submit').on('click',function(){
           
               var name=$('#name').val();
               var fathername=$('#fathername').val();
               var phone=$('#phone').val();
               var email=$('#email').val();
               var course=$('#course').val();
               $.ajax({                              
                 url:"http://localhost/CI_project/index.php/Home_c/set_data",
                  type:"POST",
                 data:{
                 	name: name,
                 	fathername: fathername,
                 	phone: phone,
                 	email: email,
                 	course: course
                 },
                 cache:false,
                 success:function(response)
                      {
                        console.log(response);
                        if(response.status=='success')
                        {
                          window.location.href="http://localhost/CI_project/index.php/Home_c/ques_view";
                        }else if(response.status=='error'){
                          $("#message").html(response.message); 
                        }else{
                          $("#error").html("Email or Mobile no. already exist");    
                         
                        }

                        
                      } 
               
               });

              });
    	  });

    </script>
   


</body>
</html>