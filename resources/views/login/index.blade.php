<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Aplikasi Pencatatan Tabungan</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link
      href="assets/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body>
    
      <!-- Page content wrapper-->
     
        <!-- Page content-->
        
        <div class="container-fluid">
          <section class="vh-100" style="background-color: #508bfc;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
          
                      <h3 class="mb-5">Sign in</h3>
                      <form action="{{ route('postlogin') }}" method="post">
                        {{ csrf_field() }}
                      <div class="form-outline mb-4">
                        <input type="text" name='username' id="typeEmailX-2" class="form-control form-control-lg" placeholder="username"/>
                      </div>
          
                      <div class="form-outline mb-4">
                        <input type="password" name='password' id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password"/>
                      </div>
          
                      <!-- Checkbox -->
                      <div class="form-check d-flex justify-content-start mb-4">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="form1Example3"
                        />
                        <label class="form-check-label" for="form1Example3"> Remember password </label>
                      </div>
          
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>