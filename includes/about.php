<?php
  class AboutItem {
    public $title;
    public $description;
    public $icon;
    
    public function __construct($title, $description, $icon) {
        $this->title = $title;
        $this->description = $description;
        $this->icon = $icon;
    }
  }

  // Create about items
  $item1 = new AboutItem("We're Experienced", "With 20+ years of experience, we're your trusted painting contractor for residential and commercial needs.", "fa-clock");
  $item2 = new AboutItem("We're Creative", "We bring creativity and expertise to every project. Our skilled team combines artistry with attention to detail.", "fa-palette");
  $item3 = new AboutItem("We're Detailed", "From meticulous preparation to flawless execution, we surpass expectations with attention to detail.", "fa-glasses");  

  // Store about items in an array
  $aboutItems = array($item1, $item2, $item3);
?>

<section class="about" id="about">
  <div class="container-fluid"> 
    <h1>Why Precision Paint?</h1>
    <div class="row">
      <?php foreach ($aboutItems as $item): ?>
        <div class="col-sm-4 text-center about-card">
          <h2><i class="fas <?php echo $item->icon; ?>"></i><br/><?php echo $item->title; ?></h2>
          <p><?php echo $item->description; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
