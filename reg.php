<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
   .dd {
    
    box-shadow: 0px 0px 12px 0px grey;
    padding:20px;
    border-radius: 5px;

}
</style>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
        <div class="row">
<div class="col-md-12" style="min-height: 50px;"></div>
            <div class="col-md-8 col-md-offset-2 dd" style="background-color:#AED6F1 ">
                <form role="form" method="POST" action="PayUMoney_form.php">
                    

                    <legend class="text-center" style="color: black";>FIELD EXECUTIVE REGISTRATION FORM </legend>

                    <fieldset>
                        

                        <div class="form-group col-md-6">
                            <label for="first_name">Full Name</label>
                            <input type="text" class="form-control" name="fname" id="first_name" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="last_name">Father/Husband Name</label>
                            <input type="text" class="form-control" name="hname" id="" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="" required >
                        </div>
                         <div class="form-group col-md-6">
                            <label for="confirm_password">mobile Number</label>
                            <input type="text" class="form-control" name="mobile_no" id="mobile"  required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="confirm_password">Date of birth</label>
                            <input type="date" class="form-control" name="date" id="mobile"  required>
                        </div>
                         <div class="form-group col-md-6">
                            <label for="password">Blood Group</label>
                            <input type="text" class="form-control" name="blood" id="password" required >
                        </div>

                        <div class="form-group col-md-6">
                            <label for="Qualification">Qualification</label>
                            <input type="text" class="form-control" name="qualification" id="first_name" required>
                        </div>

                         <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="gender" id="country">
                                <option>Female</option>
                                <option>male</option>
                               
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                        <h3>Address</h3></div>
                        <div class="form-group col-md-6">
                            <label for="village">Village</label>
                            <input type="text" class="form-control" name="vill" id="first_name" required >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="post">Post</label>
                            <input type="text" class="form-control" name="po" id="first_name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ps">Ps</label>
                            <input type="text" class="form-control" name="ps" id="ps" required >
                        </div>
                         <div class="form-group col-md-6">
                            <label for="distict">distict</label>
                            <input type="text" class="form-control" name="dist" id="first_name" requird >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="state">State</label>
                            <input type="text" class="form-control" name="state" id="first_name"  required>
                        </div>
                         <div class="form-group col-md-6">
                            <label for="state">Pincode</label>
                            <input type="text" class="form-control" name="pin" id="first_name"  required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Adhar Number</label>
                            <input type="text" class="form-control" name="adhar_no" id="password" required >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">PAN Number</label>
                            <input type="text" class="form-control" name="pan_no" id="password" required>
                        </div>
                       


                       


                    </fieldset>

                    <fieldset>
                        <legend class="text-center" style="color: black";>FIELD EXECUTIVE REGISTRATION FORM </legend>

                       

                        

                        
                    </fieldset>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="" id="">
                                   <b> I accept the <a href="#">terms and conditions</a>.</b>
                                </label>
                            </div>
                            
                                <div class="checkbox">
                                   <label>
                                       <input type="checkbox" id="" name="">
                                       <b> 1. I hereby declare that the information given by this applicant is true or correct to
                      the best of my knowledge and belief .In case any information given in this
                      application is proves to be false or incorrect, I shall be responsible for the 
                      consequenses.</b>
                                   </label> 
                                </div>
                               
                                <div class="checkbox">
                                   <label>
                                       <input type="checkbox" id="" name="">
                                      <b> 2. I also declare that if any information provided by me is found false ,my
                      candidature may be rejected at any point of time.</b>
                                   </label> 
                                </div>

                                <div class="checkbox">
                                   <label>
                                       <input type="checkbox" id="" name="">
                                        <b> 3. I am agree to purchase the LPG Safety device at the price of INR-3000.00(Rupees
                      Three Thousand only,Non refundable amount) and agree to join in survey team.</b>
                                   </label> 
                                </div>


                            </div>
                        </div>
                        <button class="btn btn-success" value="Ready to Pay">Ready To Pay</button>
                        <a class="btn btn-large" href="PayUMoney_form.php"><font size="5"color="Red">Ready To Pay</font></a>
                    </div>

                    

                </form>
            </div>
<div class="col-md-12" style="min-height: 50px;"></div>
        </div>
    </div>
</body>
</html>