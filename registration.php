<!doctype html>
<html lang="en">
<style>
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
}
</style>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title></title>
  </head>
  <body >
  
        <div class =" col-lg-10 m-auto" >
		
         <div class="card ">
	        <div class="card-header" style="background-color:#db4319;height:40px";>
			  <h1 class="text-black text-center" style="height:20px";>FIELD EXECUTIVE REGISTRATION FORM  </h1> </div>
			     <div style="background-color: #adffff; padding-left:120px; padding-right: 70px"; >
				
			     <form method="POST" action ="insertvalue.php">
				  <table >
				 
				 <div class=" column-span=1"></div>
				 <div class=" column-span=4">
				  <tr >
				    <td style="margin:30px;padding-right: 20px "><font size="4" color="black",>1) Full Name</font></td><td><input type="text" name= "vill"></td><span> </span></div>
				    <div><td></td>
					 <td><font size="4" color="black",>2) Father/Husband Name</font></td><td><input type="text" name= "po"></td>
					 </div>
				 </tr>
				
				  <tr>
				    <td><font size="4" color="black",>3) Dateof birth</font></td><td><input type="text" name= "vill"></td><td></td>
					 <td><font size="4" color="black",>4) Blood Group</font></td><td><input type="text" name= "po"></td>
					 
				 </tr>
				
				 <tr>
				 <td> <font size="4" color="black",>5) Qualification:-</font></td>
				 <td><input type="text" name= "qualification"><br><br></td><td></td>
				 <td> <font size="4" color="black",>5) Gender:-</font></td>
				 <td> <select class="form-control" name="gender">
                                                       
                      <option value="teacher">Male</option>
                      <option value="teacher">Female</option>
                       </select> 
                       </td>                            
                                                   
                                                  
                                         

				 </tr>
				 <tr>
				 <td><font size="4" color="black",> 6)  Address</font></td>
				 <td></td>
				 <br><br>
				    
				 </tr>
				 <tr>
				    <td><font size="4" color="black",>Village</font></td><td><input type="text" name= "vill"></td><td></td>
					 <td><font size="4" color="black",>Post</font></td><td><input type="text" name= "po"></td>
					 
				 </tr>
				 <tr>
				     <td><font size="4" color="black",>Ps</font></td><td><input type="text" name= "ps"></td><td></td>
					 <td><font size="4" color="black",>distict:-</font></td><td><input type="text" name= "dist"></td>
					 
				 </tr>
				 <tr>
				     <td><font size="4" color="black",>Email</font></td><td><input type="text" name= "ps"></td><td></td>
					 <td><font size="4" color="black",>distict:-</font></td><td><input type="text" name= "dist"></td>
					 
				 </tr>
				 <tr>
				     <td><font size="4" color="black",>State</font></td><td><input type="text" name= "state"></td><td></td>
					 <td><font size="4" color="black",>Pincode</font></td><td><input type="number" name= "pin"></td>
					 
				 </tr>
				 
				 <tr>
                <td><font size="4" color="black",> 7) Adhar No</font></td>	
				<td> <input type="text"  name="adhar_no"></td><td></td>
				<td><font size="4" color="black",>Pan No</font></td><td><input type="text"name="pan_no"></td><br><br>
				</tr>
				
				<tr>
				<td><font size="4" color="black",> 8) E_mail</font></td>
				<td><input type="email" name="email"></td>
                <td>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</td>
				<td><font size="4" color="black",>mobile No</font></td>
				<td> <input type="number" name="mobile_no"><br></br></td>
				</tr>
				
				</table>
                 <br><br>
                  <tr><h3 class="text-white text-center"><u>FIELD EXECUTIVE REGISTRATION FORM </u> </h3></tr>
				  <tr>
                   <label class="cotainer">
				   <input type="checkbox" checked="unchecked">
				  <b> 1. I hereby declare that the information given by this applicant is true or correct to
				      the best of my knowledge and belief .In case of any information given in this
                      application is proves to be false or incorrect, I shall be responsible for the 
                      consequenses.</b>
					  
					  <span class="checkmark">
                     </label>					  
				      </tr><br>
					  <tr>
                   <label class="cotainer">
				   <input type="checkbox" checked="unchecked">
				  <b> 2. I also declare that if any information provided by me is found false ,my
				      candidature may be rejected at any point of time.</b>
					  
					  <span class="checkmark">
                     </label>					  
				      </tr><br>
				      </tr>
					  <tr>
                   <label class="cotainer">
				   <input type="checkbox" checked="unchecked">
				  <b> 3. I am agree to purchase the LPG Safety device at the price of INR-3000.00(Rupees
                      Three Thousand only,Non refundable amount) and agree to join in survey team.</b>
					  
					  <span class="checkmark">
                     </label>					  
				      </tr><br>
				
				
				  
				  <tr><button class="btn btn-success">Register</button></tr>
				  <a class="btn btn-large" href=""><font size="5"color="white">Ready To Pay</font></a>
				 </table>
				 </div>
			 
			
	  
	   
	   
	   
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>