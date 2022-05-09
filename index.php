
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CE12 Validation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <style>
            .is-invalid {
                border: 1px solid red;
            }
        </style>
        <script>
            function validLogin() {
                var error = false;
                var nameExpression = /^[a-zA-Z]+$/;
                var emailExpression = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
                var passwordExpression = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
                console.log("Validating...");
                console.log(document.getElementById("Email").value);
                if (document.getElementById("CapName").value == "" || !document.getElementById("CapName").value.match(nameExpression)) {
                    console.log("Name");
                    document.getElementById("CapName").classList.add("is-invalid");
                    error = true;
                }
                if (document.getElementById("Email").value == "" || !emailExpression.test(document.getElementById("Email").value)) {
                    console.log("Email");
                    document.getElementById("Email").classList.add("is-invalid");
                    error = true;
                }
                if (document.getElementById("Password").value == "" || !document.getElementById("Password").value.match(passwordExpression)) {
                    console.log("Password");
                    document.getElementById("Password").classList.add("is-invalid");
                    error = true;
                }
                if (error = true) {
                    return false;
                }
            }
        </script>

    </head>
        <body style="background-color: #facbe3;">
          <div style= "background-color: #f6a8c3;" class="container-fluid p-3">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                  <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2"></div>
                <!-- <div class="col-sm-8"> -->
            <form class="form-horizontal" action="index.php" method="post">

<!-- Form Name -->
<legend class="display-3 text-center">Form Name</legend>

<!-- name input-->
<div style="background-color:#ffd5d6; border-radius: 4px;" class="form-group m-2 p-3">
  <label class="col-md-4 control-label" for="CapName">Captain Name</label>
  <div class="col-md-4">
  <input id="CapName" name="CapName" type="text" placeholder="Christopher" class="form-control input-md" required="">
  <span class="help-block">This is the name of your Captain, all will see this</span>
  </div>
</div>

<!-- email input-->
<div style="background-color:#ffd5d6; border-radius: 4px;" class="form-group m-2 p-3">
  <label class="col-md-4 control-label" for="Email">Email</label>
  <div class="col-md-4">
  <input id="Email" name="Email" type="text" placeholder="janedoe@gmail.com" class="form-control input-md" required="">
  <span class="help-block">This will be your contact email and username</span>
  </div>
</div>

<!-- Password input-->
<div style="background-color:#ffd5d6; border-radius: 4px;" class="form-group m-2 p-3">
  <label class="col-md-4 control-label" for="Password">Password</label>
  <div class="col-md-4">
    <input id="Password" name="Password" type="password" placeholder="******************" class="form-control input-md" required="">
    <span class="help-block">This is the password you will use to access the account</span>
  </div>
</div>

<!-- Submit button-->
<div class="form-group">
  <br>
  <!-- <label class="col-md-4 control-label" for="Submit">Create Me</label> -->
  <div class="col-md-4">
  <input id="Submit" name="Submit" type="Submit" placeholder="" class="form-control input-md" onclick="return validLogin()">

  </div>
</div>

</form>
    </body>
</html>
