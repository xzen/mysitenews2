<!-- Movies Display -->
<div class="row">
  <div class="col">
    <h4>Movies Available</h4>
  </div>
</div>
<div class="row">
  <?php
    while ($row = $results->fetch_assoc()) {
      include 'movie.php';
    }
  ?>
</div>