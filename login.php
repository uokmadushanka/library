<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body >
    
    <center>
        <div class="container"><br><br>
            <div class="card card-body" style="width: 40rem; border-radius: 10px;">
               <center> <img class="card-img-top" src="img/login.png" alt="Card image cap" style="width: 300px; align-items: center;"></center>
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 35px;">Login LMS</h5>
                  
                </div>
               
                <form action="server.php" method="post">
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label" style="text-align: left;">Email</label>
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" id="Email" placeholder="Input Email" name="email">
                      </div><br>
                    </div><br>
                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label" style="text-align: left;" >Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                      </div>
                    </div><br>
                    <div class="p-t-10">
                        <button class="btn btn-info" type="submit" style="width: 200px;">Login</button>
                        
                    </div>
                  </form>
                
              </div>
        </div>
          
    </center>

                
                

                
           


</body>
</html>