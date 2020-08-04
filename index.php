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
      <div class="row">
        <!-- Movies Display & Animate Pictures -->
        <div class="col-9">
          <!-- <CENTER></CENTER>arousel -->
          <div class="row mt-4">
            <div class="col">
              <h4>Bandes Annonces</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="2000">
                    <img src="http://fr.web.img6.acsta.net/carousels/20/07/23/17/50/3332121.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="http://fr.web.img6.acsta.net/carousels/20/06/16/14/51/0231613.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <hr class="my-4">
          <!-- Movies Display -->
          <div class="row">
            <div class="col">
              <h4>Movies Available</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-3 mt-2 mb-2">
              <div class="card">
                <img src="https://vignette.wikia.nocookie.net/transcripts/images/1/14/Marvel%27s_Iron_Man_2_-_iTunes_Movie_Poster.jpeg/revision/latest?cb=20170206025128" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-3 mt-2 mb-2">
              <div class="card">
                <img src="https://vignette.wikia.nocookie.net/transcripts/images/1/14/Marvel%27s_Iron_Man_2_-_iTunes_Movie_Poster.jpeg/revision/latest?cb=20170206025128" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-3 mt-2 mb-2">
              <div class="card">
                <img src="https://vignette.wikia.nocookie.net/transcripts/images/1/14/Marvel%27s_Iron_Man_2_-_iTunes_Movie_Poster.jpeg/revision/latest?cb=20170206025128" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-3 mt-2 mb-2">
              <div class="card">
                <img src="https://vignette.wikia.nocookie.net/transcripts/images/1/14/Marvel%27s_Iron_Man_2_-_iTunes_Movie_Poster.jpeg/revision/latest?cb=20170206025128" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-3 mt-2 mb-2">
              <div class="card">
                <img src="https://vignette.wikia.nocookie.net/transcripts/images/1/14/Marvel%27s_Iron_Man_2_-_iTunes_Movie_Poster.jpeg/revision/latest?cb=20170206025128" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-3 mt-2 mb-2">
              <div class="card">
                <img src="https://vignette.wikia.nocookie.net/transcripts/images/1/14/Marvel%27s_Iron_Man_2_-_iTunes_Movie_Poster.jpeg/revision/latest?cb=20170206025128" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-3 mt-2 mb-2">
              <div class="card">
                <img src="https://vignette.wikia.nocookie.net/transcripts/images/1/14/Marvel%27s_Iron_Man_2_-_iTunes_Movie_Poster.jpeg/revision/latest?cb=20170206025128" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-3 mt-2 mb-2">
              <div class="card">
                <img src="https://vignette.wikia.nocookie.net/transcripts/images/1/14/Marvel%27s_Iron_Man_2_-_iTunes_Movie_Poster.jpeg/revision/latest?cb=20170206025128" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Login & Pub -->
        <div class="col-3">
          <!-- Login -->
          <div class="mt-2">
            <div class="row">
              <div class="col-12">
                <p class="h3">Sign-in</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
          <hr class="my-4">
          <!-- Pub -->
          <div>
            <div class="row">
              <div class="col-12">
                <img src="https://crello.com/common/900a60d4-79ad-424f-a1dd-76e71124cc81.jpg" class="img-fluid" alt="pub">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/8cf770f03e.js"></script>
  </body>
</html>