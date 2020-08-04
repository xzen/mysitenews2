<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>My Movies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
  </head>
  <body>
    <!-- Nav -->
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
            <a class="navbar-brand" href="index.php">
              <i class="fa fa-film mr-2"></i><span>MyMovies</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <!-- Links -->
              <div class="col-8">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Action<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Aventure<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Horreur<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Comédie<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="login.php">Sign-in<span class="sr-only">(current)</span></a>
                  </li>
                </ul>
              </div>
              <!-- Search -->
              <div class="col-4">
                <form>
                  <div class="form-row">
                    <div class="col-md-9">
                      <input class="form-control" type="search" placeholder="Search Movies">
                    </div>
                    <div class="col-md-3">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- Content -->
    <div class="container">
      <div class="row mt-4">
        <div class="col-3"></div>
        <div class="col-6">
          <p class="h3 text-center">Sign-in</p>
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-block btn-primary">Submit</button>
          </form>
        </div>
        <div class="col-3"></div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/8cf770f03e.js"></script>
  </body>
</html>