<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Contact Us</h5>
        <p class="card-text">7111 West 151st Street suite 348,</p>
        <p class="card-text"> Overland Park, Kansas 66223, United States</p>
        <p class="card-text">Phone: 913-271-3167</p>
        <p class="card-text">Office Hours: Monday - Friday 8 AM to 6 PM, Saturday 8 AM to 6 PM (24/7 phone support)</p>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <form action="includes/mail.php" method="post">
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
      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
</div>