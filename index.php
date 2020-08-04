<?php include('./app/views/html-properties/top.php'); ?>
    <!-- Nav  -->
    <?php include('./app/views/menu/index.php'); ?>
    <!-- Content -->
    <div class="container">
      <div class="row">
        <!-- Movies Display & Animate Pictures -->
        <div class="col-9">
          <!-- Carousel -->
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
          <?php include('./app/controllers/home/get-movies.php'); ?>
        </div>
        <!-- Login & Pub -->
        <div class="col-3">
          <!-- Login -->
          <div class="mt-2">
            <?php include('./app/views/home/login.php'); ?>
          </div>
          <hr class="my-4">
          <!-- Pub -->
          <div>
            <?php include('./app/views/home/pub.php'); ?>
          </div>
        </div>
      </div>
    </div>
<?php include('./app/views/html-properties/bottom.php'); ?>