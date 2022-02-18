<!doctype html>
<?php include('server.php') ?>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Corpus</title>
  </head>
  <body>
  <form class="vh-100" method="post" style="background-color: #2779e2;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

        <h1 class="text-white mb-4">Regisztrálás</h1>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Teljesnév</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type="text" name="name" class="form-control form-control-lg" required />
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Jelszó</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type="password" name="password" class="form-control form-control-lg" required/>
              </div>
            </div>
            <hr class="mx-n3">
            <div class="px-5 py-4">
              <button type="submit" name="reg_user" class="btn btn-primary btn-lg">Regisztráció</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

