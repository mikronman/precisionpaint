<?php 
    require __DIR__ . '/vendor/autoload.php';

    if (file_exists(__DIR__ . '/../.env')) {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
        $dotenv->load();
    }
?>
<!DOCTYPE html>
    <!-- Head Metadata -->
    <?php include 'includes/head.php'; ?>
    <body>
        <!-- Navigation Bar -->
        <?php include 'includes/nav.php'; ?>
        <!-- Hero Section -->
        <?php include 'includes/hero.php' ?>
        <!-- About Section - Why Precision Painting? -->
        <?php include 'includes/about.php'  ?>
        <!-- Services Section -->
        <?php include 'includes/services.php' ?>
        <!-- Additional Services Section -->
        <?php include 'includes/additional-services.php' ?>
        <!-- Customer Review Section in Columns -->
        <?php include 'includes/reviews.php' ?>
        <!-- Contact Section -->
        <?php include 'includes/contact.php' ?>
        <!-- Footer -->
        <?php include 'includes/footer.php' ?>
        <script>
            document.getElementById('submit-btn').addEventListener('click', function(event) {
                event.preventDefault();

                var form = document.getElementById('contact-form');
                var formData = new FormData(form);
                
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'includes/mail.php', true);
                xhr.onload = function() {
                    var response = JSON.parse(xhr.responseText);
                    document.getElementById('message-container').textContent = response.message;
                    if (response.success) {
                        form.reset();
                    }
                };
                xhr.send(formData);
            });
        </script>
    </body>
</html>