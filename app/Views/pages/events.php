<section id="page-header-banner">
  <div class="page-heading header-text banner-content">
    <div class="container">
      <div class="flex-container ">
        <img src="<?= base_url(); ?>assets/images/events/Event-icon.svg" alt="Mentor Image" class="image">
          <div class=" text-content text-start text-white">
            <h1>Events</h1>
            <p>Events unite people, foster connections, inspire</p>
          </div>
      </div>
    </div>
  </div>

</section> 
<section class="contact-page section-mt events-page-content-section">
<div class="container my-5">
  <!-- Section Wrapper -->
  <div class="row mb-5">
    <!-- Event 1 -->
    <div class="row program-flex mt-5 wow fadeInUp" data-wow-delay="0.4s">
      <div class="col-lg-6 col-md-12 tab-img">
        <img src="<?= base_url()?>assets/images/events/aarambh-seassion-image.svg" alt="Event Icon" class="img-fluid">
      </div>
      <div class="col-lg-6 col-md-12 program-padding event-content-1">
        <h2>National Level Entrepreneurship Competition: ARAMBH Season-1</h2>
        <p>ARAMBH Season 1, the National Level Entrepreneurship Competition hosted by Srujan EDIC at Sri Balaji University, Pune, on January 10th 2024, proved to be a resounding success, fostering innovation and collaboration.</p>
        <div class="btn-container">
        <a href="<?= base_url()?>arambh" class="explore-btn-second openModal">Read More</a>
        </div>
       
      </div>
    </div>

    <!-- Event 2 -->
    <div class="row  program-flex-2 mt-5 wow fadeInUp" data-wow-delay="0.6s">
      <div class="col-lg-6 col-md-12 program-padding event-content-2">
        <h2>Festival of Start-up 2023</h2>
        <p>The preliminary round of the Festival of Startup - 2023, organized by Pimpri Chinchwad Startup Incubation Center (PCSIC), took place on September 4, 2023, at Sri Balaji University Pune.</p>
          <div class="btn-container">
          <a href="<?= base_url()?>festival-start-up-2023" class="explore-btn-second openModal" >Read More</a>
      
        </div>
      </div>
      <div class="col-lg-6 col-md-12 tab-img">
        <img src="<?= base_url()?>assets/images/events/startup-festival-img.svg" alt="Event Icon" class="img-fluid">
      </div>
    </div>

    <!-- Event 3 -->
    <div class="row program-flex mt-5 wow fadeInUp" data-wow-delay="0.8s">
      <div class="col-lg-6 col-md-12 tab-img ">
        <img src="<?= base_url()?>assets/images/events/iit-bombay-img.svg" alt="Event Icon" class="img-fluid">
      </div>
      <div class="col-lg-6 col-md-12 program-padding event-content-1">
        <h2>IIT Bombay 2024 - E-Summit</h2>
        <p>Srujan Entrepreneurship development and Incubation Center was privileged to participate in the prestigious IIT Bombay E-Summit as an incubator partner.</p>
        <div class="btn-container">
              <a href="<?= base_url()?>event-e-summit" class="explore-btn-second openModal" >Read More</a>
         </div>
      </div>
    </div>

    <!-- Event 4 -->
    <div class="row program-flex-2 mt-5 wow fadeInUp" data-wow-delay="0.10s">
      <div class="col-lg-6 col-md-12 program-padding event-content-2">
        <h2>Visit to - T-Hub</h2>
        <p>Mr. Chetan Kavitake, Innovation Manager at T-Hub, invited the selected students of SBUP to T-Hub on Friday, 5th April 2024 for orientation and briefing of Blitz program.</p>
       
        <div class="btn-container">
        <a href="<?= base_url()?>event-t-hub" class="explore-btn-second openModal">Read More</a>
        </div>
      </div>
      <div class="col-lg-6 col-md-12  tab-img ">
        <img src="<?= base_url()?>assets/images/events/visit-t-hub-img.svg" alt="Event Icon" class="img-fluid">
      </div>
    </div>
  </div>

</div>
<section id="let-connect" class="let-connect1 wow fadeInUp" data-wow-delay="0.6s">
  <div class="container">
    <div class="row">
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
  // Using jQuery to trigger the modal
  $(document).ready(function() {
    // When the "Read More" button is clicked
    $('.openModal').click(function() {
    // Get the modal target from the data-modal attribute
    var targetModal = $(this).data('modal');
    
    // Show the target modal
    $(targetModal).modal('show');

    // Carousel 1: Default settings (3 items for large screens)
  
  });
  });
</script>