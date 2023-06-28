<?php
  class Benefit {
      public $name;
      public $description;
      
      public function __construct($name, $description) {
          $this->name = $name;
          $this->description = $description;
      }
  }

  // Create exterior benefits objects
  $exteriorBenefits = array(
      new Benefit("Improved Curb Appeal", "Exterior painting can significantly improve the curb appeal of your property..."),
      new Benefit("Protection Against Weather Damage", "Exterior painting can provide a protective layer against weather damage..."),
      new Benefit("Increased Property Value", "A fresh coat of exterior paint can increase the value of your property..."),
      new Benefit("Enhanced Durability", "Exterior paint can help protect your property from wear and tear..."),
      new Benefit("Cost-Effective", "Exterior painting can be a cost-effective way to improve the look and value of your property..."),
      new Benefit("Aesthetic Flexibility", "Exterior painting offers a wide range of color and finish options...")
  );

  // Create interior benefits objects
  $interiorBenefits = array(
      new Benefit("Improved Interior Ambiance", "Interior painting can greatly enhance the ambiance of your living spaces..."),
      new Benefit("Personalization", "With interior painting, you can personalize your rooms and express your unique style..."),
      new Benefit("Visual Enhancement", "A fresh coat of paint can visually transform your interior spaces and make them look fresh and updated..."),
      new Benefit("Mood Enhancement", "Colors can impact moods and emotions. Interior painting allows you to create a desired atmosphere..."),
      new Benefit("Hide Imperfections", "Painting interior walls can help conceal any imperfections or blemishes..."),
      new Benefit("Clean and Hygienic", "Regularly painting interior walls can contribute to a clean and hygienic living environment...")
  );
?>

<section class="benefits" id="benefits">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1>Why Exterior Paint?</h1>
        <div class="accordion" id="exterior-benefits-accordion">
        <?php foreach ($exteriorBenefits as $index => $benefit): ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="exterior-benefit-<?php echo $index; ?>-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#exterior-benefit-<?php echo $index; ?>-collapse" aria-expanded="false" aria-controls="exterior-benefit-<?php echo $index; ?>-collapse">
                <?php echo $benefit->name; ?>
              </button>
            </h2>
            <div id="exterior-benefit-<?php echo $index; ?>-collapse" class="accordion-collapse collapse" aria-labelledby="exterior-benefit-<?php echo $index; ?>-header" data-bs-parent="#exterior-benefits-accordion">
              <div class="accordion-body">
                <?php echo $benefit->description; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
      <div class="col-sm-6">
        <h1>Why Interior Paint?</h1>
        <div class="accordion" id="interior-benefits-accordion">
        <?php foreach ($interiorBenefits as $index => $benefit): ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="interior-benefit-<?php echo $index; ?>-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#interior-benefit-<?php echo $index; ?>-collapse" aria-expanded="false" aria-controls="interior-benefit-<?php echo $index; ?>-collapse">
                <?php echo $benefit->name; ?>
              </button>
            </h2>
            <div id="interior-benefit-<?php echo $index; ?>-collapse" class="accordion-collapse collapse" aria-labelledby="interior-benefit-<?php echo $index; ?>-header" data-bs-parent="#interior-benefits-accordion">
              <div class="accordion-body">
                <?php echo $benefit->description; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
