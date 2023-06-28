<?php
  class Service {
    public $title;
    public $description;
    public $icon;
    public $image;
    public $benefits;
    
    public function __construct($title, $description, $icon, $image, $benefits) {
        $this->title = $title;
        $this->description = $description;
        $this->icon = $icon;
        $this->image = $image;
        $this->benefits = $benefits;
    }
  }

  // Create service objects
  $services = array(
    new Service(
        "Exterior Painting",
        "Transform the exterior of your property with our professional exterior painting services. Our skilled team uses high-quality paints and techniques to enhance the curb appeal and protect your property from the elements. Let us bring new life to your home or commercial building.",
        "fa-paint-roller",
        "exterior.jpg",
        array(
            "Enhanced curb appeal",
            "Protection against weather damage",
            "Increased property value"
        )
    ),
    new Service(
        "Interior Painting",
        "Revitalize the interior of your space with our expert interior painting solutions. Our experienced painters pay attention to detail and deliver flawless results. From color selection to final touch-ups, we ensure a smooth and beautiful finish that transforms your home or business.",
        "fa-paint-brush",
        "interior.jpg",
        array(
            "Fresh and inviting atmosphere",
            "Personalized color schemes",
            "Improved aesthetic appeal"
        )
    ),
    new Service(
        "Wood Rot Repair",
        "Restore and repair wood surfaces affected by rot with our professional wood rot repair services. Our team will assess the damage, replace any decayed wood, and restore the structural integrity of your property. Trust us to protect and preserve the beauty of your wooden elements.",
        "fa-tree",
        "woodrot.jpg",
        array(
            "Preservation of structural integrity",
            "Prevention of further damage",
            "Improved appearance"
        )
    ),
    new Service(
        "Pressure Washing",
        "Revive and rejuvenate your surfaces with our thorough pressure washing services. Our powerful equipment and eco-friendly cleaning solutions remove dirt, grime, and stains from various surfaces, including driveways, decks, patios, and more. Experience a fresh and clean look for your outdoor spaces.",
        "fa-water-pressure",
        "pressure_washing.jpg",
        array(
            "Restoration of surfaces to their original condition",
            "Removal of contaminants and pollutants",
            "Enhanced curb appeal"
        )
    ),
    new Service(
        "Deck Paint and Stain",
        "Enhance the beauty and longevity of your deck with our professional deck paint and stain services. Our skilled team applies high-quality products that protect your deck from the elements while highlighting its natural beauty. Transform your outdoor living space with a vibrant and durable finish.",
        "fa-chairs",
        "deck.jpg",
        array(
            "Protection against weather and UV damage",
            "Preservation of wood integrity",
            "Improved aesthetics"
        )
    )
  );
?>

<section class="services" id="services">
    <div class="">
        <?php $count = 0; ?>
        <?php foreach ($services as $index => $service): ?>
        <?php if ($count == 2): ?>
        <div class="row">
            <div class="col-12 text-center unique-section py-5">
                <h1>Finding the Right Paint Color</h1>
                <p>When it comes to your painting project, choosing the perfect color can sometimes be the most challenging part. Luckily, we've got you covered with our selection of online planning tools. These handy tools are designed to assist you in selecting from the latest color trends, finishes, and products, helping you beautify your home with confidence and ease. Say goodbye to color indecision and embrace the excitement of finding the ideal palette for your space.</p>
                <div class="row">
                  <div class="col-md-12 text-center mt-5">
                      <div class="btn-group" role="group" aria-label="Button Group">
                          <!-- <a href="http://snapyourcolors.com/" target="blank" class="btn btn-primary snap">Snap Your Color</a> -->
                          <a href="https://www.sherwin-williams.com/visualizer#/active/default" target="blank" class="btn btn-primary visualize">Visualize Your Color</a>
                      </div>
                      <div class="col-12 text-center mt-5">
                        <img class="sherwin-logo" src="img/sherwin.png"/>
                      </div>
                  </div>
              </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($count % 2 == 0): ?>
        <div class="row">
            <div class="col-md-6 service-image">
                <img src="img/<?php echo $service->image; ?>" alt="<?php echo $service->title; ?>">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="service-text p-5">
                    <h2><?php echo $service->title; ?></h2>
                    <p><br/><?php echo $service->description; ?></br/></p>
                    <ul>
                        <?php foreach ($service->benefits as $benefit): ?>
                        <li><?php echo $benefit; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="#contact" class="btn btn-primary mt-5">Learn More</a>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <div class="service-text p-5">
                    <h2><?php echo $service->title; ?></h2>
                    <p><br/><?php echo $service->description; ?><br/></p>
                    <ul>
                        <?php foreach ($service->benefits as $benefit): ?>
                        <li><?php echo $benefit; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="#contact" class="btn btn-primary mt-5">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 service-image">
                <img src="img/<?php echo $service->image; ?>" alt="<?php echo $service->title; ?>">
            </div>
        </div>
        <?php endif; ?>
        <?php $count++; ?>
        <?php endforeach; ?>
    </div>
</section>



