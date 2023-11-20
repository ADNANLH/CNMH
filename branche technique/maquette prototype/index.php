<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Solicoders | Management des projets</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card-body login-card-body">
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 text-center">
            <img src="./app/images/logo.png" class="img-circle" width="70px" alt="User Image">
          </div>
        </div>
      </div>
    
    <p class="login-box-msg">Management des projets</p>

    <form action="" method="post">
        <div class="input-group mb-3">
            <input type="email" class="form-control" id="email" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" id="password" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="row">
            
    
            <div class="col-6">
                <button type="submit" id="button" class="btn btn-primary btn-block">Sign In</button>
            </div>
    
        </div>
    </form>
    
    
    <p class="mb-1">
    <a href="#">oublié votre mot de passe ?</a>
    </p>
    </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- script for login -->
<script>
    let email = document.getElementById('email');
    let password = document.getElementById('password');
    let button = document.getElementById('button');
    button.addEventListener('click', (e)=>{
        e.preventDefault();
        if(email.value == 'admin@gmail.com' && password.value =='admin'){
            window.location.href = "projectLeader/index.php"
        }else if(email.value == 'member@gmail.com' && password.value =='member'){
            window.location.href = "members/index.php"
        }

    })
    
    
</script>
<!-- end of script for login -->

<!-- jQuery -->
<script src="app/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="app/dist/js/adminlte.min.js"></script>
</body>
</html>


