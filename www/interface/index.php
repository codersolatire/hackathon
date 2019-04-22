<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Workshop &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/style.css">

  </head>
  <body onload="renderonload()">
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-11 col-xl-2">
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">HSST|<span class="text-primary">SRHU</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="speakers.php">Speakers</a></li>
                <li><a href="contact.php">Contacts</a></li>
                <li class="cta"><a href="register.php">Register</a></li>
              </ul>
            </nav>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>
    </header>

    <div class="site-section site-hero">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="d-block mb-3 caption" data-aos="fade-up" data-aos-delay="100">Tech Event 2019</span>
            <h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="200">Hackathon 2.0</h1>
            <span class="d-block mb-5 caption" data-aos="fade-up" data-aos-delay="300">May 2nd-4th,HSST</span>
            <a href="register.php" class="btn-custom" data-aos="fade-up" data-aos-delay="400"><span>Register</span></a>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="site-section-heading">
              <h2>About Hackathon</h2>
            </div>
          </div>
          <div class="col-lg-8 mt-8 pl-lg-8" data-aos="fade-up" data-aos-delay="200">
            <p>The ideas of this event comes in a handy way.You have a chance to make ur thoughts shine as a pearl. Thoughts can be like “Controlling TV signals using mobile phones”.Ideas are to be explained precisely (need not to be proved).So what are you waiting for? get your brain cells at work and come forward with all new ideas and startle the world.</p>
			</div>
        </div>
		</div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-4" data-aos="fade-up">
            <div class="site-section-heading">
              <h2>Programs</h2>
            </div>
          </div>
          <div class="col-lg-6 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="100">
            <p>You will get to attend workshops, participate in Tech-events,and enjoy Fun activites like gaming,Doddle quiz,Treasure hunt,photography....</p>
          </div>
        </div>

        <div class="row align-items-stretch program">
    			<div class="col-lg-4 mt-3 pl-lg-3" data-aos="fade-up" data-aos-delay="100">
    				<button class="btn-custom" data-aos="fade-up" data-aos-delay="400" id = "day1event" onclick="renderday1(this,event)"><span>Day-1</span></a>
          </div>
    			
    			<div class="col-lg-4 mt-3 pl-lg-3" data-aos="fade-up" data-aos-delay="100">
    				<button class="btn-custom" data-aos="fade-up" data-aos-delay="400" id = "day2event" onclick="renderday2(this,event)"><span>Day-2</span></a>
          </div>
    			
    			<div class="col-lg-4 mt-3 pl-lg-3" data-aos="fade-up" data-aos-delay="100">
    				<button class="btn-custom" data-aos="fade-up" data-aos-delay="400" id = "day3event" onclick="renderday3(this,event)"><span>Day-3</span></a>
          </div>
        </div>

        <!-- Program Details Start -->
        <div class="row align-items-stretch program" id = "program_details">
      
        </div>
        <!-- Program Details End -->
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-4 ">
            <div class="site-section-heading" data-aos="fade-up">
              <h2>Sponsors</h2>
            </div>
          </div>
          <div class="col-lg-6 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="100">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus error deleniti dolores necessitatibus eligendi. Nesciunt repellendus ab voluptatibus.</p>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <img src="/images/logo_1.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <img src="/images/logo_2.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="400">
            <img src="/images/logo_3.png" alt="Image" class="img-fluid">
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="500">
            <img src="/images/logo_4.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="600">
            <img src="/images/logo_5.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="700">
            <img src="/images/logo_6.png" alt="Image" class="img-fluid">
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="500">
          <div class="col-12 text-center pt-5">
            <a href="#" class="btn-custom" data-aos="fade-up" data-aos-delay="800"><span>Be a Sponsor</span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-4">
            <div class="site-section-heading" data-aos="fade-up">
              <h2>News</h2>
            </div>
          </div>
          <div class="col-lg-6 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="100">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus error deleniti dolores necessitatibus eligendi. Nesciunt repellendus ab voluptatibus.</p>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 blog-entry"  data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="d-block mb-4">
              <img src="/images/person_1.jpg" alt="Image" class="img-fluid"> 
            </a>
            <h2 class="mb-4"><a href="#">Design your open source strategy</a></h2>
            <div class="mb-4 post-meta d-flex align-items-center">
              <div class="mr-2"><img src="/images/person_1.jpg" alt="Image" class="img-fluid"></div>
              <div><span>By <a href="#">Emely Peters</a></span> &mdash; <span>Sep. 10, 2019</span></div> 
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus error deleniti dolores necessitatibus eligendi. Nesciunt repellendus ab voluptatibus.
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 blog-entry" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="d-block mb-4">
              <img src="/images/person_1.jpg" alt="Image" class="img-fluid"> 
            </a>
            <h2 class="mb-4"><a href="#">Design your open source strategy</a></h2>
            <div class="mb-4 post-meta d-flex align-items-center">
              <div class="mr-2"><img src="/images/person_1.jpg" alt="Image" class="img-fluid"></div>
              <div><span>By <a href="#">Emely Peters</a></span> &mdash; <span>Sep. 10, 2019</span></div> 
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus error deleniti dolores necessitatibus eligendi. Nesciunt repellendus ab voluptatibus.
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 blog-entry" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="d-block mb-4">
              <img src="/images/person_1.jpg" alt="Image" class="img-fluid"> 
            </a>
            <h2 class="mb-4"><a href="#">Design your open source strategy</a></h2>
            <div class="mb-4 post-meta d-flex align-items-center">
              <div class="mr-2"><img src="/images/person_1.jpg" alt="Image" class="img-fluid"></div>
              <div><span>By <a href="#">Emely Peters</a></span> &mdash; <span>Sep. 10, 2019</span></div> 
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus error deleniti dolores necessitatibus eligendi. Nesciunt repellendus ab voluptatibus.
          </div>

        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="500">
          <div class="col-12 text-center">
            <a href="#" class="btn-custom" data-aos="fade-up" data-aos-delay="400"><span>More Blog Posts</span></a>
          </div>
        </div>
      </div>
    </div>
      
    <footer class="site-footer">
      <div class="container">
        
        <div class="row">
          
            <div class="col-md-12 text-center">
              <div class="border-top pt-5">
              <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy; <script>document.write(new Date().getFullYear());</script> All Rights Reserved| Hackathon HSST|</i><a href="https://www.google.com/http://srhu.edu.in" target="_blank" >SRHU</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  </div>

  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/jquery-ui.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/jquery.countdown.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/bootstrap-datepicker.min.js"></script>
  <script src="/js/aos.js"></script>
  <script src="/locus/locusjs/wrapjs.js"></script>

  <script src="/js/main.js"></script>

  <script type="text/javascript">
    function renderday1(target,event)
    {
      ajax(document.getElementById("day1event"),"day1event.php",document.getElementById("program_details"));
    }

    function renderday2(target,event)
    {
      ajax(document.getElementById("day2event"),"day2event.php",document.getElementById("program_details"));
    }

    function renderday3(target,event)
    {
      ajax(document.getElementById("day3event"),"day3event.php",document.getElementById("program_details"));
    }

    function renderonload()
    {
      ajaxonload("day1event.php",document.getElementById("program_details"))
    }

    // document.getElementById("day1event").click()
  </script>
  </body>
</html>