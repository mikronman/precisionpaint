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
        <!-- Benny Section -->
        <?php include 'includes/benny.php' ?>
        <!-- Footer -->
        <?php include 'includes/footer.php' ?>
        <script>
            document.getElementById('submit-btn').addEventListener('click', function() {
            var form = document.getElementById('contact-form');
            var formData = new FormData(form);
            
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'includes/mail.php', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById('message-container').textContent = 'Your message has been sent. We will be in touch with you soon!';
                    form.reset();
                } else {
                    document.getElementById('message-container').textContent = 'We were unable to send your message. Please email or call us directly.';
                }
            };
            xhr.send(formData);
            });
        </script>
    </body>
</html>