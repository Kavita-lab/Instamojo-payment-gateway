<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Register Form Start</title>
        <link rel="stylesheet" href="style.css" />
        @import url("httpss://fonts.googleapis.com/css?family=Roboto");
        <style type="text/css">
    background: linear-gradient(to right, #78a7ba 0%, #385d6c 50%, #78a7ba 99%);
}
.signup-form {
    font-family: "Roboto", sans-serif;
    width: 650px;
    margin: 30px auto;
    background: linear-gradient(to right, #ffffff 0%, #fafafa 50%, #ffffff 99%);
    border-radius: 10px;
}
.form-header {
    background-color: #eff0f1;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.form-header h1 {
    font-size: 30px;
    text-align: center;
    color: #666;
    padding: 20px 0;
    border-bottom: 1px solid #cccccc;
}</style>
    </head>
<body>
       <form class="signup-form" action="/register" method="post">
    <!-- form header -->
    <div class="form-header">
         <h1>FIELD EXECUTIVE REGISTRATION FORM</h1>
    </div>
    <!-- form body -->
    <div class="form-body"><!-- form body -->
       <div class="form-body">
    <!-- Firstname and Lastname -->
        <div class="horizontal-group">
        <div class="form-group left">
            <label for="firstname" class="label-title">First name *</label>
            <input type="text" id="firstname" class="form-input" placeholder="enter your first name" required="required" />
        </div>
        <div class="form-group right">
            <label for="lastname" class="label-title">Last name</label>
            <input type="text" id="lastname" class="form-input" placeholder="enter your last name" />
        </div>
    </div>
</div></div>
<!-- form footer -->
    <div class="form-footer"></div>
</form>
    </body>
</html>