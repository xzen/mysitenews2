<div class="col-3 mt-2 mb-2">
  <div class="card">
    <img height="250" src="<?php echo $row['photo']; ?>" alt="...">
    <div class="card-body">
      <h5 class="card-title">
        <?php echo $row['title']; ?>
      </h5>
      <p class="card-text">
        <?php echo $row['description']; ?>
      </p>
      <a href="#" class="btn btn-primary">Show</a>
    </div>
  </div>
</div>