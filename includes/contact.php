<section class="contact mb-5" id="contact">
  <div class="container-fluid">
    <h1>Contact Us For A Free Quote</h1>
    <div class="row">
      <div class="col-md-6 d-flex align-items-center">
        <div class="card">
          <div class="card-body">
            <div class="main-logo">
              <img src="img/main_logo.jpg"/>
            </div>
            <p class="card-text"><i class="fas fa-map-marker-alt"></i> 7111 West 151st Street suite 348, Overland Park, Kansas 66223, United States</p>
            <p class="card-text"><i class="fas fa-phone"></i> Phone: 913-271-3167 (24/7 phone support)</p>
            <p class="card-text"><i class="far fa-clock"></i> Hours: M - F 8 AM to 6 PM, Saturday 8 AM to 6 PM</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <form id="contact-form" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="number" class="form-label">Phone Number:</label>
            <input type="tel" class="form-control" id="number" name="number" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <input type="text" class="form-control" id="address" name="address" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message:</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
          </div>
          <button id="submit-btn" type="submit" class="btn-primary btn btn-dark">Submit</button>
          <div id="message-container" class="message-container"></div>
        </form>
      </div>
    </div>
  </div>
</section>