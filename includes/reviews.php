<?php
class Review {
  public $name;
  public $rating;
  public $comment;
  
  public function __construct($name, $rating, $comment) {
      $this->name = $name;
      $this->rating = $rating;
      $this->comment = $comment;
  }
}

// Create review objects
$reviews = array(
  new Review("Brittany K", "&#11088 &#11088 &#11088 &#11088 &#11088", "So kind and attentive to our concerns. He was very knowledgeable and very helpful throughout the painting process. The crew were really nice, clean, and got the job done in just a few short days."),
  new Review("Carol S", "&#11088 &#11088 &#11088 &#11088 &#11088", "He knew exactly what needed to be done. I had lots of woodrot and needed help. The woodrot is gone and the house looks fabulous."),
  new Review("Mike T", "&#11088 &#11088 &#11088 &#11088 &#11088", "The advice and guidance the owner gave was very helpful and right on point. My expectations were exceeded tenfold.")
);
?>

<section class="reviews" id="reviews">
  <h1>Our Sterling Reviews</h1><br/>
  <div id="customer-reviews-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
          <?php foreach ($reviews as $index => $review): ?>
          <div class="carousel-item text-center <?php if ($index == 0) echo 'active'; ?>">
              <div class="row align-items-center">
                  <div class="col-sm-4 offset-sm-4">
                      <div class="d-flex flex-column h-100 justify-content-center">
                          <h3 class="text-center"><?php echo $review->name; ?><br/>&#11088 &#11088 &#11088 &#11088 &#11088</h3>
                          <p><i>"<?php echo $review->comment; ?>"</i></p>
                      </div>
                  </div>
              </div>
          </div>
          <?php endforeach; ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#customer-reviews-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#customer-reviews-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </div>
</section>