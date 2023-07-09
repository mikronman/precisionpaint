<?php
    class AddService {
        public $name;
        public $icon;
        
        public function __construct($name, $icon) {
            $this->name = $name;
            $this->icon = $icon;
        }
    }

    // Create service objects
    $services = array(
        new AddService("Carpentry", "fa-hammer"),
        new AddService("Siding", "fa-home"),
        new AddService("Tile", "fa-square"),
        new AddService("Kitchen", "fa-sink"),
        new AddService("Basement", "fa-dungeon"),
        new AddService("Bathrooms", "fa-shower"),
    );
?>

<div class="additional-services">
    <div class="container">
        <h1>Additional Services We Offer</h1>
        <div class="row">
            <?php foreach ($services as $service): ?>
            <div class="col-4 col-lg-2">
                <div class="service-item">
                    <i class="fas <?php echo $service->icon; ?>"></i>
                    <h3><?php echo $service->name; ?></h3>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <p class="mt-5">Contact us for a more comprehensive list of what we offer!</p>
        <a href="#contact" class="btn btn-primary mt-5">Learn More</a>
    </div>
</div>