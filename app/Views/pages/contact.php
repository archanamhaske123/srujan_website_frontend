<section id="page-header-banner">
  <div class="page-heading header-text banner-content">
    <div class="container">
      <div class="flex-container ">
        <img src="<?= base_url(); ?>assets/images/contact/phone-rotary-icon.svg" alt="Mentor Image" class="image">
        <div class="text-content">
          <h1>Contact Us</h1>
          <p>Developing Entrepreneurial Mindset</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-page section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class=" text-center heading ">
          <h2>Embark on this adventure with us</h2>
          <p>Let's explore our options for collaboration</p>
          <br>
          <!-- <img src="<?= base_url() ?>assets/images/contact/Contactus-scroller.svg" alt="Address Icon" class="icon"> -->
        </div>
      </div>
      <section id="contact-carousel" class="contact-carousel">

        <div class="container mt-5">
          <div id="contact-owl-carousel" class="contact-carousel-1 owl-carousel owl-theme ">

            <div class="item">
              <img src="<?= base_url(); ?>assets/images/contact/contact-01.svg">
            </div>
            <div class="item">
              <img src="<?= base_url(); ?>assets/images/contact/contact-02.svg">
            </div>
            <div class="item">
              <img src="<?= base_url(); ?>assets/images/contact/contact-03.svg">
            </div>
            <div class="item">
              <img src="<?= base_url(); ?>assets/images/contact/contact-04.svg">
            </div>
            <div class="item">
              <img src="<?= base_url(); ?>assets/images/contact/contact-05.svg">
            </div>
            <div class="item">
              <img src="<?= base_url(); ?>assets/images/contact/contact-06.svg">
            </div>

            <div class="item">
              <img src="<?= base_url(); ?>assets/images/contact/contact-07.svg">
            </div>

            <div class="item">
              <img src="<?= base_url(); ?>assets/images/contact/contact-08.svg">
            </div>

            <div class="item">
              <img src="<?= base_url(); ?>assets/images/contact/contact-09.svg">
            </div>

            <div class="item">
              <img src="<?= base_url(); ?>assets/images/contact/contact-10.svg">
            </div>
          </div>
        </div>

      </section>
    </div>
  </div>
</section>
<section class="contact-page section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12  mb-5 pb-5">
        <div class="text-center heading">
          <h2>Reach Out and Touch Base</h2>
        </div>
      </div>
      <div id="contact-card">
        <div class="row mb-5 pb-5 ">
          <div class="col-lg-4">
            <div class="program-cards-c program-cards-1-c">
              <img src="<?= base_url() ?>assets/images/contact/address-icon.svg" alt="Address Icon" class="icon">
              <h3>Address</h3>
              <p>Survey No. 55/2-7, Tathawade, Off Mumbai-Bangalore Bypass, Pune – 411033, Maharashtra, India.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="program-cards-c program-cards-1-c">
              <img src="<?= base_url() ?>assets/images/contact/Call-icon.svg" alt="Address Icon" class="icon">
              <h3>Contact</h3>
              <!-- <p>02066741252</p> -->
              <a href="tel:02066741252"> 02066741252</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="program-cards-c program-cards-1-c">
              <img src="<?= base_url() ?>assets/images/contact/mail-icon.svg" alt="Address Icon" class="icon">
              <h3>Email</h3>
              <!-- <p>edu@sbup.edu.in</p> -->
              <a href="mailto:edu@sbup.edu.in">edu@sbup.edu.in</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9404.607410334433!2d73.74950014694664!3d18.60322563659646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b97940cfbe6d%3A0x65762d676c6584a9!2sBalaji%20Institute%20Of%20Modern%20Management%2C%2055%2F2-7%2C%20Tathawade%2C%20Pimpri-Chinchwad%2C%20Maharashtra%20411033!5e0!3m2!1sen!2sin!4v1732703411667!5m2!1sen!2sin"
            width="100%" height="500px" frameborder="0"
            style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);"
            allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-6">
        <form id="contact-form" action="<?= base_url() ?>contact-us/save" method="POST" method="post">
          <div class="row">
            <div class="col-lg-6">
              <fieldset>
                <!-- <label for="name">Full Name</label> -->
                <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <!-- <label for="email">Email Address</label> -->
                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..."
                  required="">
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <select name="country" id="country" autocomplete="on">
                  <option value="">Select a country...</option>
                  <option value="USA">United States</option>
                  <option value="UK">United Kingdom</option>
                  <option value="Canada">Canada</option>
                  <!-- Add more country options here -->
                </select>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="" name="phone_no" id="phone" placeholder="phone..." autocomplete="on">
              </fieldset>
            </div>

            <div class="col-lg-6">
              <fieldset>
                <select name="interest" id="interest" autocomplete="on">
                  <option value="">Select a Interest...</option>
                  <option value="USA">United States</option>
                  <option value="UK">United Kingdom</option>
                  <option value="Canada">Canada</option>
                  <!-- Add more country options here -->
                </select>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="" name="company_name" id="company_name" placeholder="company_name" autocomplete="on">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="message" id="message" placeholder="Your Message"></textarea>
              </fieldset>
            </div>
            <div id="alertPlaceholder"></div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="orange-button">Send Message</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-12">

      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
</section>
<script>
  $(document).ready(function () {
    $(document).ready(function () {

      function showAlert(message, type) {
        const alertHTML = `
          <div class="alert alert-${type} alert-dismissible fade show" role="alert">
            ${message}
          </div>
        `;
        $('#alertPlaceholder').html(alertHTML);
      }

      // When the form is submitted
      $('#contact-form').on('submit', function (e) {
        e.preventDefault();

        // Example of form data to be sent via AJAX
        var formData = $(this).serialize();

        // Perform an AJAX POST request
        $.ajax({
          url: "<?= base_url() ?>contact-us/save",
          type: 'POST',
          data: formData,
          success: function (response) {
            // Assuming the response indicates success
            if (response.status === "warning") {
              showAlert(response.message, 'warning');

            } else {
              showAlert(response.message, 'success');
            }
            // $.notify("Access granted", "success"); // Success notification
          },

          error: function (xhr, status, error) {
            // If there's an error
        
          }

        });
      });
    });
  }
  );
</script>