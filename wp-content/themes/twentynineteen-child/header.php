<!doctype html>
<html lang="en">
  <head>
	<!-- meta tags-->	  
   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Caprome enables you to create a focused and distraction-free digital learning environment. Monitor, record, and analyze student activity to support effective learning, whether in the classroom or at home.">
    <meta name="keywords" content="digital learning, learning environments, student activity monitoring, distraction-free learning, online learning, classroom technology, education technology">
    <meta name="author" content="Caprome">
    <meta property="og:title" content="Caprome for Digital Learning Environments">
    <meta property="og:description" content="Create focused, distraction-free digital learning environments with Caprome. Monitor, record, and analyze student activities for effective learning, whether in the classroom or at home.">
    <meta property="og:image" content="URL_TO_IMAGE" />
    <meta property="og:url" content="https:caprome.edu" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Caprome for Digital Learning Environments">
    <meta name="twitter:description" content="Caprome helps create focused digital learning environments and allows you to monitor, record, and analyze student activity in real-time.">
    <meta name="twitter:image" content="URL_TO_IMAGE" />
    <title>Caprome for Digital Learning Environments</title>
     
	 <!-- Favicon Icon -->
    <link rel="icon" href="<?= home_url() ?>/wp-content/uploads/favicon.png" type="image/png" />

	 <!--style--> 
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="<?= home_url() ?>/wp-content/themes/twentynineteen-child/style.css?ver=1.1.1" media="all">
	<!-- AOS -->
	<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>  
</head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="./wp-content/uploads/Caprome-Leaning-Logo.png" alt="Caprome Learning logo" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-2">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#use-cases">Use Cases</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#features">Features</a>
              </li>
            </ul>
            <button class="request-demo-btn" type="button" id="openModal">
              <a href="#" onclick="openModal(event)">Request demo</a>
            </button>
          </div>
        </div>
      </nav>
    </header>
	  
<!-- request modal	   -->
<div id="demoModal" class="modal">
    <div class="modal-content">
        <span class="close-icon" onclick="closeModal()">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                    d="M18.3 5.71001C18.2075 5.61731 18.0976 5.54376 17.9766 5.49358C17.8556 5.4434 17.726 5.41757 17.595 5.41757C17.464 5.41757 17.3343 5.4434 17.2134 5.49358C17.0924 5.54376 16.9825 5.61731 16.89 5.71001L12 10.59L7.11 5.70001C7.01741 5.60743 6.9075 5.53399 6.78654 5.48388C6.66557 5.43378 6.53593 5.40799 6.405 5.40799C6.27406 5.40799 6.14442 5.43378 6.02345 5.48388C5.90249 5.53399 5.79258 5.60743 5.69999 5.70001C5.60741 5.79259 5.53397 5.9025 5.48387 6.02347C5.43376 6.14443 5.40797 6.27408 5.40797 6.40501C5.40797 6.53594 5.43376 6.66559 5.48387 6.78655C5.53397 6.90752 5.60741 7.01743 5.69999 7.11001L10.59 12L5.69999 16.89C5.60741 16.9826 5.53397 17.0925 5.48387 17.2135C5.43376 17.3344 5.40797 17.4641 5.40797 17.595C5.40797 17.7259 5.43376 17.8556 5.48387 17.9766C5.53397 18.0975 5.60741 18.2074 5.69999 18.3C5.79258 18.3926 5.90249 18.466 6.02345 18.5161C6.14442 18.5662 6.27406 18.592 6.405 18.592C6.53593 18.592 6.66557 18.5662 6.78654 18.5161C6.9075 18.466 7.01741 18.3926 7.11 18.3L12 13.41L16.89 18.3C16.9826 18.3926 17.0925 18.466 17.2135 18.5161C17.3344 18.5662 17.4641 18.592 17.595 18.592C17.7259 18.592 17.8556 18.5662 17.9765 18.5161C18.0975 18.466 18.2074 18.3926 18.3 18.3C18.3926 18.2074 18.466 18.0975 18.5161 17.9766C18.5662 17.8556 18.592 17.7259 18.592 17.595C18.592 17.4641 18.5662 17.3344 18.5161 17.2135C18.466 17.0925 18.3926 16.9826 18.3 16.89L13.41 12L18.3 7.11001C18.68 6.73001 18.68 6.09001 18.3 5.71001Z"
                    fill="#A0A0A0" />
            </svg>
        </span>
        <div class="form-wrap">
            <h3 class="title">Request the <span>Caprome</span> Demo</h3>
            <p class="des">
               Join the Caprome community now. Improve your <br class="d-none d-lg-block" /> student skills and lead your team to success with our <br class="d-none d-lg-block" /> innovative platform!
            </p>
            <div class="form-section">
			<div class="row">
        	<?php echo do_shortcode('[contact-form-7 id="74dac81" title="Request Demo"]');?>
			</div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Modal -->
	  
<div id="demoModal_contact" class="modal">
    <div class="modal-content">
        <span class="close-icon" onclick="closeModalContact()">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                    d="M18.3 5.71001C18.2075 5.61731 18.0976 5.54376 17.9766 5.49358C17.8556 5.4434 17.726 5.41757 17.595 5.41757C17.464 5.41757 17.3343 5.4434 17.2134 5.49358C17.0924 5.54376 16.9825 5.61731 16.89 5.71001L12 10.59L7.11 5.70001C7.01741 5.60743 6.9075 5.53399 6.78654 5.48388C6.66557 5.43378 6.53593 5.40799 6.405 5.40799C6.27406 5.40799 6.14442 5.43378 6.02345 5.48388C5.90249 5.53399 5.79258 5.60743 5.69999 5.70001C5.60741 5.79259 5.53397 5.9025 5.48387 6.02347C5.43376 6.14443 5.40797 6.27408 5.40797 6.40501C5.40797 6.53594 5.43376 6.66559 5.48387 6.78655C5.53397 6.90752 5.60741 7.01743 5.69999 7.11001L10.59 12L5.69999 16.89C5.60741 16.9826 5.53397 17.0925 5.48387 17.2135C5.43376 17.3344 5.40797 17.4641 5.40797 17.595C5.40797 17.7259 5.43376 17.8556 5.48387 17.9766C5.53397 18.0975 5.60741 18.2074 5.69999 18.3C5.79258 18.3926 5.90249 18.466 6.02345 18.5161C6.14442 18.5662 6.27406 18.592 6.405 18.592C6.53593 18.592 6.66557 18.5662 6.78654 18.5161C6.9075 18.466 7.01741 18.3926 7.11 18.3L12 13.41L16.89 18.3C16.9826 18.3926 17.0925 18.466 17.2135 18.5161C17.3344 18.5662 17.4641 18.592 17.595 18.592C17.7259 18.592 17.8556 18.5662 17.9765 18.5161C18.0975 18.466 18.2074 18.3926 18.3 18.3C18.3926 18.2074 18.466 18.0975 18.5161 17.9766C18.5662 17.8556 18.592 17.7259 18.592 17.595C18.592 17.4641 18.5662 17.3344 18.5161 17.2135C18.466 17.0925 18.3926 16.9826 18.3 16.89L13.41 12L18.3 7.11001C18.68 6.73001 18.68 6.09001 18.3 5.71001Z"
                    fill="#A0A0A0" />
            </svg>
        </span>
        <div class="form-wrap">
            <h3 class="title">Contact Us</h3>
            <p class="des">
              We’re here to support you! Please fill out the form below <br class="d-none d-lg-block" />  with your details and message, and our team will get <br class="d-none d-lg-block" /> back to you promptly. 
            </p>
            <div class="form-section">
			<div class="row">
		    <?php echo do_shortcode('[contact-form-7 id="5732528" title="Contact Us"]');?>
			</div>
            </div>
        </div>
    </div>
</div>	  
	  
<!-- request modal script	   -->
<script>
function openModal(event) {
    event.preventDefault();
    document.getElementById("demoModal").style.display = "block";
	document.getElementById("demoModal").style.overflow="hidden";
	document.getElementById("body").style.overflow="hidden";
}

function closeModal() {
    document.getElementById("demoModal").style.display = "none";
	document.getElementById("demoModal").style.overflow="auto";
	document.getElementById("body").style.overflow="auto";
}
window.onclick = function(event) {
    if (event.target == document.getElementById("demoModal")) {
        closeModal();
    }
};
</script>

<!--contact us modal script 	   -->
<script>
function openModalContact(event) {
    event.preventDefault();
    document.getElementById("demoModal_contact").style.display = "block";
	document.getElementById("demoModal_contact").style.overflow="hidden";
	document.getElementById("body").style.overflow="hidden";
}

function closeModalContact() {
    document.getElementById("demoModal_contact").style.display = "none";
	document.getElementById("demoModal_contact").style.overflow="auto";
	document.getElementById("body").style.overflow="auto";
}
window.onclick = function(event) {
    if (event.target == document.getElementById("demoModal_contact")) {
        closeModalContact();
    }
};
</script>
	  
	  
	  
<script>
if (window.location.href.includes("#wpcf7-f274-o1")) {
    window.location.href = "https://caprome.com/";
}
</script>	 	  