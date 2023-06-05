<!doctype html>
<html lang="en">
  <!--
    author:H.T
    date;5/31/2023
  -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTER</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body class="bg-light">
    <div style="height: 100vh;">
     <div class="row h-100">
      <div class="card m-auto" style="width: 400px;">
      <!--title-->
       <div class="text-center bg-white border-0 py-3">
         <h1 class="text-center">REGISTER</h1>
       </div>

       <!--form-->
       <div class="card-body">
         <form action="../actions/register.php" method="POST">
            <!--first_name-->
            <div class="md-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control"
                placeholder="First name" required autofocus maxlength="50">
            </div>
            
            <!--last_name-->
            <div class="md-3">
                <label for="last_name" class="form-label">last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last name" required maxleghth="50">

            </div>

            <!--username-->
            <div class="md-3">
              <label for="username" class="form-label fw-bold">User Name</label>
                <input type="text" name="username" id="username" class="form-control"
                placeholder="username" required maxlength="15">
            </div>
            
            <!--password-->
            <div class="md-3">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-control" aria-describedbly="password-info" required minleghth="8">
                <small id="password-info" class="form-text text-muted">Password must be at least 8 characters long.</small>

            </div>

            <!--button-->
            <button type="submit" class="btn btn-success w-100">Register</button>


         </form>
         <p class="text-center mt-3 small">Registered Already?<a href="../views">Login.</a></p>
       </div>

      </div>
     </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>