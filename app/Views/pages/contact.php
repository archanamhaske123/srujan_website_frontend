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
<section class="contact-page section-mt">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.4s">
        <div class=" text-center heading ">
          <h2>Embark on this adventure with us</h2>
          <p>Let's explore our options for collaboration</p>
          <br>
          <!-- <img src="<?= base_url() ?>assets/images/contact/Contactus-scroller.svg" alt="Address Icon" class="icon"> -->
        </div>
      </div>
      <section id="contact-carousel" class="contact-carousel wow fadeInUp" data-wow-delay="0.8s">

        <div class="container">
          <div id="contact-owl-carousel" class="contact-carousel-1 owl-carousel owl-theme ">

            <div class="item">
              <img src="<?= base_url(); ?>assets/images/contact/Incubate-with-us/Incubate-with-us.svg">
            </div>
            <div class="item">
              <img src="<?= base_url(); ?>assets/images/contact/Incubate-with-us/Incubate-with-us2.svg">
            </div>
            <div class="item">
              <img src="<?= base_url(); ?>assets/images/contact/Incubate-with-us/Incubate-with-us3.svg">
            </div>
            <div class="item">
              <img src="<?= base_url(); ?>assets/images/contact/Incubate-with-us/Incubate-with-us4.svg">
            </div>
            <div class="item">
            <img src="<?= base_url(); ?>assets/images/contact/Incubate-with-us/Incubate-with-us5.svg">

            </div>
            <div class="item">
            <img src="<?= base_url(); ?>assets/images/contact/Incubate-with-us/Incubate-with-us6.svg">
            </div>

        
          </div>
        </div>

      </section>
    </div>
  </div>
</section>
<section class="contact-page section-mt" id="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12  mb-5 pb-5 wow fadeInUp" data-wow-delay="0.6s">
        <div class="text-center heading">
          <h2>Connect with Us Today!</h2>
        </div>
      </div>
      <div id="contact-card">
        <div class="row mb-5 pb-5">
          <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.8s">
            <div class="program-cards-c program-cards-1-c">
              <img src="<?= base_url() ?>assets/images/contact/address-icon.svg" alt="Address Icon" class="icon">
              <h3>Address</h3>
              <p>Survey No. 55/2-7, Tathawade, Off Mumbai-Bangalore Bypass, Pune – 411033, Maharashtra, India.</p>
            </div>
          </div>
          <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.8s">
            <div class="program-cards-c program-cards-1-c">
              <img src="<?= base_url() ?>assets/images/contact/Call-icon.svg" alt="Address Icon" class="icon">
              <h3>Contact</h3>
              <!-- <p>02066741252</p> -->
              <a href="tel:02066741252"> 02066741252</a>
            </div>
          </div>
          <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.8s">
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
      <div class="col-lg-6" i>
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
                  <option value="Incubate with us">Incubate with us</option>
                  <option value="CSR Partnership">CSR Partnership</option>
                  <option value="Co-create a program">Co-create a Program</option>
                  <option value="Volunteer with us">Volunteer with us</option>
                
                  <option value="Become a Mentor">Become a Mentor</option>
                  <option value="Become an Investor">Become an Investor</option>
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
            <!-- <div class="explore-btn-second">
            <a href="<?= base_url()?>festival-start-up-2023">Read more ➤</a>
          </div> -->
              <fieldset  class="explore-btn-second">
                <button type="submit" id="form-submit">Send Message</button>
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
<section id="let-connect" class="let-connect1 wow fadeInUp section-mt" data-wow-delay="0.6s">
  <div class="container">
    <div class="row let-connect-pt">
      <div class="col-lg-8 col-md-12 col-sm-12">
        <h4> Join us for your exciting journey!</h4>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 let-mt-30">
        <a href="<?= base_url(); ?>contact-us/#contact-section"><span>Let’s Connect?</span> <img src="<?= base_url(); ?>assets/images/Arrow-icon.svg"
            alt=">Arrow-icon" class="image img-fluid">
        </a>
  
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

      function getCountry()
      {
        $.ajax({ url: "https://restcountries.com/v3.1/all", type: 'GET', 
            success: function(response){ 
              const countrySelect = $("#country");
              // Clear existing options and add a placeholder
              countrySelect.empty().append('<option value="">Select a country...</option>');
              console.log('country:',response[0]);
              response.forEach(function(country) {
                const countryName = country.name.common;  // Get the common country name
                const flag = country.flag;  // Get the country's flag emoji
                const capital = country.capital ? country.capital[0] : 'N/A'; // Get the capital city (if available)
                
                // Append the country as an option in the dropdown
                countrySelect.append(
                    `<option value="${countryName}" data-flag="${flag}" data-capital="${capital}">
                        ${countryName} ${flag}
                    </option>`
                );
            });

            }
          });
      }
      getCountry();
       // When an owl-item is clicked, scroll to the contact form
    $('#contact-owl-carousel .owl-item').on('click', function() {
        // Scroll to the contact form
        $('html, body').animate({
            scrollTop: $('#contact-form').offset().top  // Scroll to the contact form's top position
        }, 1000);  // 1000 milliseconds for smooth scroll

        // Focus the first input field in the form
        $('#contact-form input:first').focus();
    });
    });
  }
  );
</script>