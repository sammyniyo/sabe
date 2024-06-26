<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | SABE Ltd</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/prism/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/phosphor-icons/css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
     <!-- Custom CSS -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-white" id="navigationBar">
    <div class="container-fluid navbar-container">
      <div class="d-flex align-items-center">
        <a class="navbar-brand" href="index.html">
          <img src="images/logo.svg" alt="logo">
        </a>
        <a href="tel:+250788896603" class="navbar-number align-items-center">
                <svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="3" cy="3.5" r="3" fill="#417086"/>
                </svg>
                <i class="ph-phone-bold"></i>
                  +250 788 896 603     
        </a>
      </div>
      <div class=" d-none d-sm-flex align-items-center ms-auto ms-lg-0 order-lg-last">
        <a class="btn btn-small btn-outline d-none d-lg-inline-block" data-bs-toggle="modal" href="#login" role="button">Book Your Slot</a>
      </div>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="open ">
          <svg width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="1" y1="14.4004" x2="23" y2="14.4004" stroke="#1C4456" stroke-width="2" stroke-linecap="round"/>
            <line x1="1" y1="8.40039" x2="23" y2="8.40039" stroke="#1C4456" stroke-width="2" stroke-linecap="round"/>
            <line x1="1" y1="1.2002" x2="23" y2="1.2002" stroke="#1C4456" stroke-width="2" stroke-linecap="round"/>
          </svg>
            Menu
        </span>
        
        <span class="close">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#1C4456" stroke-width="2.3" stroke-miterlimit="10"/>
            <path d="M15 9L9 15" stroke="#1C4456" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M15 15L9 9" stroke="#1C4456" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Close              
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/about-us') }}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/services') }}">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/software-training') }}">Software Training</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/contact-us') }}">Contact</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block d-lg-none">
            <a class="btn btn-small btn-outline" data-bs-toggle="modal" href="#login" role="button">Book Your Slot</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<section class="about" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 col-lg-7 mx-auto">
        <div class="about-content text-center">
          <h1>Reimagining real estate to make it easier to unlock.</h1>
          <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="about-thumbs">
          <div class="about-thumbs-item grid-col-span-2 order-1 order-sm-1">
            <img src="images/about/about1.png" alt="about">
          </div>
          <div class="about-thumbs-item order-3 order-sm-2">
            <img src="images/about/about2.png" alt="about">
          </div>
          <div class="about-thumbs-item order-4 order-sm-3">
            <img src="images/about/about3.png" alt="about">
          </div>
          <div class="about-thumbs-item grid-col-span-2 oreder-2 order-sm-4">
            <img src="images/about/about4.png" alt="about">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--
  ###########
  counter Section
  ###########
-->
<section class="counter bg-transparent" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
  <div class="container">
    <div class="row">
      <!--==== Srart counter-up Section  =====-->
      <div class="col-12 ">
        <div class="counter--container d-flex">

          <div class="counter--content">
            <div class="counter--content-icon">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.0001 2.66675C13.363 2.66675 10.7851 3.44873 8.59248 4.91382C6.39983 6.37891 4.69086 8.46129 3.68169 10.8976C2.67253 13.334 2.40848 16.0149 2.92295 18.6013C3.43742 21.1877 4.7073 23.5635 6.572 25.4282C8.4367 27.2929 10.8125 28.5627 13.3989 29.0772C15.9853 29.5917 18.6662 29.3276 21.1025 28.3185C23.5389 27.3093 25.6213 25.6003 27.0863 23.4077C28.5514 21.215 29.3334 18.6372 29.3334 16.0001C29.3334 14.2491 28.9885 12.5153 28.3185 10.8976C27.6484 9.27996 26.6663 7.81011 25.4282 6.57199C24.1901 5.33388 22.7202 4.35175 21.1025 3.68169C19.4849 3.01162 17.751 2.66675 16.0001 2.66675ZM16.0001 26.6667C13.8904 26.6667 11.8281 26.0412 10.074 24.8691C8.31988 23.697 6.95271 22.0311 6.14537 20.082C5.33804 18.133 5.1268 15.9882 5.53838 13.9191C5.94995 11.85 6.96586 9.94937 8.45761 8.45761C9.94938 6.96585 11.85 5.94995 13.9191 5.53837C15.9883 5.1268 18.133 5.33803 20.082 6.14537C22.0311 6.9527 23.697 8.31987 24.8691 10.074C26.0412 11.8281 26.6668 13.8904 26.6668 16.0001C26.6668 18.8291 25.5429 21.5422 23.5426 23.5426C21.5422 25.5429 18.8291 26.6667 16.0001 26.6667Z" fill="#417086"/>
                <path d="M16.0001 14.6667C13.3334 14.6667 13.3334 13.8267 13.3334 13.3333C13.3334 12.84 14.2667 12 16.0001 12C17.7334 12 17.8534 12.8533 17.8667 13.3333H20.5334C20.5154 12.425 20.1887 11.5499 19.6071 10.8519C19.0255 10.154 18.2236 9.67486 17.3334 9.49333V8H14.6667V9.45333C12.0001 9.89333 10.6667 11.6133 10.6667 13.3333C10.6667 14.8267 11.3601 17.3333 16.0001 17.3333C18.6667 17.3333 18.6667 18.24 18.6667 18.6667C18.6667 19.0933 17.8401 20 16.0001 20C13.5467 20 13.3334 18.8533 13.3334 18.6667H10.6667C10.6667 19.8933 11.5467 22.0667 14.6667 22.56V24H17.3334V22.56C20.0001 22.1067 21.3334 20.3867 21.3334 18.6667C21.3334 17.1733 20.6401 14.6667 16.0001 14.6667Z" fill="#417086"/>
              </svg>                  
            </div>
            <div class="counter--content-percent">
              <h2> $<span class="counter--content-number">150</span>+ </h2>
            </div>
            <p class="bold">Owned from <br> Properties transactions</p>
          </div>

          <div class="counter--content">
            <div class="counter--content-icon">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.0001 22.6667L17.3334 20.0001V13.1441C19.6281 12.5481 21.3334 10.4774 21.3334 8.00008C21.3334 5.05875 18.9414 2.66675 16.0001 2.66675C13.0587 2.66675 10.6667 5.05875 10.6667 8.00008C10.6667 10.4774 12.3721 12.5481 14.6667 13.1441V20.0001L16.0001 22.6667Z" fill="#417086"/>
                <path d="M21.6894 14.0841L20.9787 16.6548C24.4334 17.6094 26.6667 19.4454 26.6667 21.3334C26.6667 23.8561 22.2867 26.6668 16.0001 26.6668C9.71341 26.6668 5.33341 23.8561 5.33341 21.3334C5.33341 19.4454 7.56675 17.6094 11.0227 16.6534L10.3121 14.0828C5.59608 15.3868 2.66675 18.1641 2.66675 21.3334C2.66675 25.8188 8.52408 29.3334 16.0001 29.3334C23.4761 29.3334 29.3334 25.8188 29.3334 21.3334C29.3334 18.1641 26.4041 15.3868 21.6894 14.0841Z" fill="#417086"/>
              </svg>                                  
            </div>
            <div class="counter--content-percent">
              <h2> <span class="counter--content-number">25</span>K+ </h2>
            </div>
            <p class="bold">Properties for Buy <br> & sell Successfully</p>
          </div>

          <div class="counter--content">
            <div class="counter--content-icon">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.425 17.5C21.2096 18.8613 20.5686 20.1195 19.5941 21.0941C18.6195 22.0686 17.3613 22.7096 16 22.925" stroke="#417086" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9 8.17505C7.075 11.075 5.5 14.4001 5.5 17.5001C5.5 20.2848 6.60625 22.9555 8.57538 24.9247C10.5445 26.8938 13.2152 28.0001 16 28.0001C18.7848 28.0001 21.4555 26.8938 23.4246 24.9247C25.3938 22.9555 26.5 20.2848 26.5 17.5001C26.5 11 22 6.00005 18.35 2.36255L14 11.5L9 8.17505Z" stroke="#417086" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>                                 
            </div>
            <div class="counter--content-percent">
              <h2> <span class="counter--content-number">500</span> </h2>
            </div>
            <p class="bold">Daily completed <br> transactions</p>
          </div>

          <div class="counter--content">
            <div class="counter--content-icon">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.525 27.475C18.3822 27.8223 17.1944 27.9992 16 28C13.6266 28 11.3066 27.2962 9.33316 25.9776C7.35977 24.6591 5.8217 22.7849 4.91345 20.5922C4.0052 18.3995 3.76756 15.9867 4.23058 13.6589C4.6936 11.3312 5.83649 9.19295 7.51472 7.51472C9.19295 5.83649 11.3312 4.6936 13.6589 4.23058C15.9867 3.76756 18.3995 4.0052 20.5922 4.91345C22.7849 5.8217 24.6591 7.35977 25.9776 9.33316C27.2962 11.3066 28 13.6266 28 16C27.9992 17.1944 27.8223 18.3822 27.475 19.525L19.525 27.475Z" stroke="#417086" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M21.2 19C20.6714 19.9107 19.9128 20.6667 19.0003 21.1922C18.0877 21.7176 17.0531 21.9942 16 21.9942C14.947 21.9942 13.9124 21.7176 12.9998 21.1922C12.0873 20.6667 11.3287 19.9107 10.8 19" stroke="#417086" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20.5 15C21.3284 15 22 14.3284 22 13.5C22 12.6716 21.3284 12 20.5 12C19.6716 12 19 12.6716 19 13.5C19 14.3284 19.6716 15 20.5 15Z" fill="#417086"/>
                <path d="M11.5 15C12.3284 15 13 14.3284 13 13.5C13 12.6716 12.3284 12 11.5 12C10.6716 12 10 12.6716 10 13.5C10 14.3284 10.6716 15 11.5 15Z" fill="#417086"/>
              </svg>                 
            </div>
            <div class="counter--content-percent">
              <h2> $<span class="counter--content-number">600</span>+ </h2>
            </div>
            <p class="bold">Reagular Clients</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


<!-- 
  #############
  Company Page Section
  #############
-->
<section class="company" >
  <div class="container">
    <div class="row">
      <div class="col-md-6 order-2 order-md-1">
        <div class="company-history" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000" data-aos-delay="50">
          <div class="company-history--header">
            <h3>A note from our <br> founders.</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. In a free hour,</p>
          </div>
          <ol class="company-history--list">
            <li>
              <div class="company-history--details">
                <h6>  It all started in 1995</h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  In a free hour, On the other hand, we denounce with righteous.</p>
              </div>
            </li>
            <li>
              <div class="company-history--details">
                <h6>  Donate launches in 2007</h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  In a free hour, On the other hand, we denounce with righteous.</p>
              </div>
            </li>
            <li>
              <div class="company-history--details">
                <h6> RealStatic holds its initial public offering in 2008</h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  In a free hour, On the other hand, we denounce with righteous.</p>
              </div>
            </li>
          </ol>
        </div>
      </div>
      <div class="col-lg-5 col-md-6  order-1 order-md-2">
        <div class="company-history--thumb" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500" data-aos-delay="200">
          <img src="images/about/company-history1.png" alt="company-details1">
        </div>
      </div>
    </div>
    <div class="row align-items-center" >
      <div class="col-md-6 order-lg-1 order-md-2">
        <div class="company-vision--thumb" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000" data-aos-delay="400">
          <img src="images/about/company-history2.png" alt="company-details2">
        </div>
      </div>
      <div class="col-md-6 col-lg-5 ms-lg-auto  order-lg-2 order-md-1" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500" data-aos-delay="200">
        <div class="company-vision--content">
          <h3>
            Our vision is simple.
          </h3>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
             In a free hour, On the other hand, we denounce with righteous 
             indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.
             <br><br>
            In a free hour, On the other hand, we denounce with righteous indignation and dislike men .
          </p>
          <div class="company-vision--content--author">
            <h6>Jacob Pial</h6>
            <p>CEO at Staticmania</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 
  #############
  Team Section
  #############
-->
<section class="team">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-10 mx-auto">
        <div class="team-title text-center">
          <h3>RealStatic Team members</h3>
        </div>
      </div>
    </div>
    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 g-md-4 g-3">
      <div class="team-member" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
        <div class="team-member--thumb">
          <img src="images/team/team1.png" alt="team">
        </div>
        <div class="team-member--content">
          <h6>Blonde Kyle</h6>
          <p>CEO</p>
        </div>
      </div>

      <div class="team-member" data-aos="fade-up" data-aos-once="true" data-aos-duration="1200" >
        <div class="team-member--thumb">
          <img src="images/team/team2.png" alt="team">
        </div>
        <div class="team-member--content">
          <h6>Floid Miles Kyle</h6>
          <p>President of sales</p>
        </div>
      </div>

      <div class="team-member" data-aos="fade-up" data-aos-once="true" data-aos-duration="1400">
        <div class="team-member--thumb">
          <img src="images/team/team3.png" alt="team">
        </div>
        <div class="team-member--content">
          <h6>Dale Robertson</h6>
          <p>Marketing Cordinator</p>
        </div>
      </div>

      <div class="team-member" data-aos="fade-up" data-aos-once="true" data-aos-duration="1600">
        <div class="team-member--thumb">
          <img src="images/team/team4.png" alt="team">
        </div>
        <div class="team-member--content">
          <h6>Guy Hawkins</h6>
          <p>Markeiting Manager</p>
        </div>
      </div>

      <div class="team-member" data-aos="fade-up" data-aos-once="true" data-aos-duration="1800">
        <div class="team-member--thumb">
          <img src="images/team/team5.png" alt="team">
        </div>
        <div class="team-member--content">
          <h6>Jerome Bell</h6>
          <p>Marketing Executive</p>
        </div>
      </div>

      <div class="team-member" data-aos="fade-up" data-aos-once="true" data-aos-duration="2000">
        <div class="team-member--thumb">
          <img src="images/team/team6.png" alt="team">
        </div>
        <div class="team-member--content">
          <h6>Ralph Edwards</h6>
          <p>Production Manager</p>
        </div>
      </div>

      <div class="team-member next-team-member" data-aos="fade-up" data-aos-once="true" data-aos-duration="2200">
        <div class="team-member--thumb">
          <img src="images/team/team7.png" alt="team">
        </div>
        <div class="team-member--content">
          <h6>Allen McCoy</h6>
          <p>Quality Manager</p>
        </div>
      </div>

      <div class="team-member next-team-member" data-aos="fade-up" data-aos-once="true" data-aos-duration="2400">
        <div class="team-member--thumb">
          <img src="images/team/team8.png" alt="team">
        </div>
        <div class="team-member--content">
          <h6>Devon Lane</h6>
          <p>Field Instructor</p>
        </div>
      </div>

      <div class="team-member next-team-member" data-aos="fade-up" data-aos-once="true" data-aos-duration="2600">
        <div class="team-member--thumb">
          <img src="images/team/team9.png" alt="team">
        </div>
        <div class="team-member--content">
          <h6>Courney Hell</h6>
          <p>Field Operator</p>
        </div>
      </div>

      <div class="team-member next-team-member" data-aos="fade-up" data-aos-once="true" data-aos-duration="2800">
        <div class="team-member--thumb">
          <img src="images/team/team10.png" alt="team">
        </div>
        <div class="team-member--content">
          <h6>Bessie Cooper</h6>
          <p>Field Officer</p>
        </div>
      </div>

      <div class="team-member next-team-member" data-aos="fade-up" data-aos-once="true" data-aos-duration="3000">
        <div class="team-member--thumb">
          <img src="images/team/team11.png" alt="team">
        </div>
        <div class="team-member--content">
          <h6>Cody Fisher</h6>
          <p>Marketing Analyzer</p>
        </div>
      </div>

    </div>
    <div class="row  justify-content-center">
      <div class="col-6 col-md-5">
        <a href="#"  class="btn btn-small btn-outline d-md-none align-items-center d-flex load-more justify-content-center">
          <span>Load More</span>
          <i class="ph-caret-down"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- 
  #############
  Blog Home Section
  #############
-->
<section class="blog">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center justify-content-between blog-header">
          <h3>News & Consultant</h3>
          <a href="blog.html"  class="d-md-flex align-items-center d-none ">
            <span>Explore All </span>
            <i class="ph-arrow-right"></i>               
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"  data-aos="fade-up"  data-aos-once="true" data-aos-duration="1000" data-aos-delay="0">
        <div class="blog-card position-relative">
          <div class="blog-card-thumb">
            <img src="images/blog/blog1.png" alt="blog-image">
          </div>
          <div class="blog-card-content">
            <a href="blog-single.html">
              <h5>10 popular Buliding designs that increse site values</h5>
            </a>
            <a href="blog-single.html" class="d-flex align-items-center stretched-link ">
              <span>Read the Article</span>
              <i class="ph-arrow-right"></i>               
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4"  data-aos="fade-up"  data-aos-once="true" data-aos-duration="1500" data-aos-delay="50">
        <article class="blog-card position-relative">
          <div class="blog-card-thumb">
            <img src="images/blog/blog2.png" alt="blog-image">
          </div>
          <div class="blog-card-content">
            <a href="blog-single.html">
              <h5>Popular designs to beautify your Construction </h5>
            </a>
            <a href="blog-single.html" class="d-flex align-items-center stretched-link ">
              <span>Read the Article</span>
              <i class="ph-arrow-right"></i>               
            </a>
          </div>
        </article>
      </div>
      <div class="col-md-4"  data-aos="fade-up" data-aos-once="true" data-aos-duration="2000" data-aos-delay="100">
        <article class="blog-card position-relative">
          <div class="blog-card-thumb">
            <img src="images/blog/blog3.png" alt="blog-image">
          </div>
          <div class="blog-card-content">
            <a href="blog-single.html">
              <h5>Delightful home decor trend for Summer</h5>
            </a>
            <a href="blog-single.html" class="d-flex align-items-center stretched-link ">
              <span>Read the Article</span>
              <i class="ph-arrow-right"></i>               
            </a>
          </div>
        </article>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <a href="blog.html"  class="btn btn-small btn-outline btn-mobile d-md-none align-items-center d-flex w-auto">
          <span>Explore All </span>
          <i class="ph-caret-right"></i>
        </a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="cta">
          <h4>For Recent Update, News.</h4>
          <p>We helps businesses customize, automate and scale up their ad production and delivery.</p>
          <form action="GET" class="flex align-items-center">
            <input type="text" class="form-control" placeholder="Enter Your Email">
            <button class="btn d-block d-md-inline-block w-md-auto w-100">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

    <!--For Desktops -->
    <section class="footer d-none d-xl-block">
      <div class="container-fluid footer-container">
        <div class="row">
          <div class="offset-xl-1 col-xl-4">
            <div class="footer-widget">
              <div class="footer-logo">
                <img src="images/logo.svg" alt="logo" />
              </div>
              <div class="footer-address">
                <p>
                  SHEMA House, KN 1 Road, Kigali
                </p>
                <p class="contact-number mb-0">
                  <a href="tel:+250788896603">+250 788 896 603</a>
                </p>
                <p class="contact-email mb-0">
                  <a href="mailto:sabeltdrw@gmail.com">sabeltdrw@gmail.com</a>
                </p>
              </div>
              <div class="footer-social">
                <ul class="list-unstyled list-inline">
                  <li class="list-inline-item">
                    <a href="https://web.facebook.com/profile.php?id=61558816670684">
                      <svg
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M15 26.25C21.2132 26.25 26.25 21.2132 26.25 15C26.25 8.7868 21.2132 3.75 15 3.75C8.7868 3.75 3.75 8.7868 3.75 15C3.75 21.2132 8.7868 26.25 15 26.25Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M19.6875 10.3125H17.8125C17.0666 10.3125 16.3512 10.6088 15.8238 11.1363C15.2963 11.6637 15 12.3791 15 13.125V26.25"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M11.25 16.875H18.75"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://twitter.com/sabeltdrw">
                      <svg
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M15.0001 10.3128C15.0002 9.23584 15.3712 8.19171 16.0505 7.35601C16.7299 6.5203 17.6762 5.94397 18.7305 5.72391C19.7848 5.50386 20.8827 5.6535 21.8396 6.14767C22.7966 6.64185 23.5542 7.45042 23.9851 8.43746L28.1251 8.4375L24.3444 12.2183C24.0982 16.021 22.414 19.5875 19.6338 22.1935C16.8536 24.7996 13.1858 26.2499 9.37514 26.25C5.62514 26.25 4.68764 24.8438 4.68764 24.8438C4.68764 24.8438 8.43764 23.4375 10.3126 20.625C10.3126 20.625 2.81264 16.875 4.68764 6.5625C4.68764 6.5625 9.37514 11.25 14.9985 12.1875L15.0001 10.3128Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.instagram.com/sabeltdrw/?next=%2F&hl=en">
                      <svg
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M15 19.6875C17.5888 19.6875 19.6875 17.5888 19.6875 15C19.6875 12.4112 17.5888 10.3125 15 10.3125C12.4112 10.3125 10.3125 12.4112 10.3125 15C10.3125 17.5888 12.4112 19.6875 15 19.6875Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-miterlimit="10"
                        />
                        <path
                          d="M20.1562 4.21875H9.84375C6.73715 4.21875 4.21875 6.73715 4.21875 9.84375V20.1562C4.21875 23.2629 6.73715 25.7812 9.84375 25.7812H20.1562C23.2629 25.7812 25.7812 23.2629 25.7812 20.1562V9.84375C25.7812 6.73715 23.2629 4.21875 20.1562 4.21875Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M21.0938 10.3125C21.8704 10.3125 22.5 9.6829 22.5 8.90625C22.5 8.1296 21.8704 7.5 21.0938 7.5C20.3171 7.5 19.6875 8.1296 19.6875 8.90625C19.6875 9.6829 20.3171 10.3125 21.0938 10.3125Z"
                          fill="#417086"
                        />
                      </svg>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.linkedin.com/in/sabe-ltd-bab9a2304/">
                      <svg
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M24.8438 4.21875H5.15625C4.63848 4.21875 4.21875 4.63848 4.21875 5.15625V24.8438C4.21875 25.3615 4.63848 25.7812 5.15625 25.7812H24.8438C25.3615 25.7812 25.7812 25.3615 25.7812 24.8438V5.15625C25.7812 4.63848 25.3615 4.21875 24.8438 4.21875Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M14.0625 13.125V20.625"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M10.3125 13.125V20.625"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M14.0625 16.4063C14.0625 15.536 14.4082 14.7014 15.0236 14.0861C15.6389 13.4707 16.4735 13.125 17.3438 13.125C18.214 13.125 19.0486 13.4707 19.6639 14.0861C20.2793 14.7014 20.625 15.536 20.625 16.4063V20.625"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M10.3125 10.7812C11.0892 10.7812 11.7188 10.1517 11.7188 9.375C11.7188 8.59835 11.0892 7.96875 10.3125 7.96875C9.53585 7.96875 8.90625 8.59835 8.90625 9.375C8.90625 10.1517 9.53585 10.7812 10.3125 10.7812Z"
                          fill="#417086"
                        />
                      </svg>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.tiktok.com/@sabeltd?lang=en">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#417086" class="bi bi-tiktok" viewBox="0 0 16 16">
                    <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                     </svg>
                    
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="footer-widget">
              <h5>Pages</h5>
              <ul class="list-unstyled">
                <li><a href="{{ url('/') }}" class="footer-link">Home</a></li>
                <li><a href="{{ url('/about-us') }}" class="footer-link">About</a></li>
                <li><a href="{{ url('/services') }}" class="footer-link">Services</a></li>
                <li><a href="{{ url('/contact-us') }}" class="footer-link">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="footer-widget">
              <h5>Other Pages</h5>
              <ul class="list-unstyled">
                <li><a href="{{ url('/software-training') }}" class="footer-link">Software Training</a></li>
                <li>
                  <a href="{{ url('/register') }}" class="footer-link">Register Now</a>
                </li>
                <li>
                  <a href="{{ url('/privacy-policy') }}" class="footer-link">Privacy Policy</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="offset-1 col-11">
            <p class="footer-copyright">
              SABE Ltd © <span class="newYear"></span>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--For Tablet -->
    <section class="footer d-none d-sm-block d-xl-none">
      <div class="container-fluid footer-container">
        <div class="row">
          <div class="col-sm-6">
            <div class="footer-widget">
              <div class="footer-logo">
                <img src="images/logo.svg" alt="logo" />
              </div>
              <div class="footer-address">
                <p>
                SHEMA House, KN 1 Road, Kigali
                </p>
                <p class="contact-number mb-0">
                  <a href="tel:+250788896603">+250 788 896 603</a>
                </p>
                <p class="contact-email mb-0">
                  <a href="mailto:sabeltdrw@gmail.com">sabeltdrw@gmail.com</a>
                </p>
              </div>
              <div class="footer-social">
                <ul class="list-unstyled list-inline">
                  <li class="list-inline-item">
                    <a href="#">
                      <svg
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M15 26.25C21.2132 26.25 26.25 21.2132 26.25 15C26.25 8.7868 21.2132 3.75 15 3.75C8.7868 3.75 3.75 8.7868 3.75 15C3.75 21.2132 8.7868 26.25 15 26.25Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M19.6875 10.3125H17.8125C17.0666 10.3125 16.3512 10.6088 15.8238 11.1363C15.2963 11.6637 15 12.3791 15 13.125V26.25"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M11.25 16.875H18.75"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <svg
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M15.0001 10.3128C15.0002 9.23584 15.3712 8.19171 16.0505 7.35601C16.7299 6.5203 17.6762 5.94397 18.7305 5.72391C19.7848 5.50386 20.8827 5.6535 21.8396 6.14767C22.7966 6.64185 23.5542 7.45042 23.9851 8.43746L28.1251 8.4375L24.3444 12.2183C24.0982 16.021 22.414 19.5875 19.6338 22.1935C16.8536 24.7996 13.1858 26.2499 9.37514 26.25C5.62514 26.25 4.68764 24.8438 4.68764 24.8438C4.68764 24.8438 8.43764 23.4375 10.3126 20.625C10.3126 20.625 2.81264 16.875 4.68764 6.5625C4.68764 6.5625 9.37514 11.25 14.9985 12.1875L15.0001 10.3128Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <svg
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M15 19.6875C17.5888 19.6875 19.6875 17.5888 19.6875 15C19.6875 12.4112 17.5888 10.3125 15 10.3125C12.4112 10.3125 10.3125 12.4112 10.3125 15C10.3125 17.5888 12.4112 19.6875 15 19.6875Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-miterlimit="10"
                        />
                        <path
                          d="M20.1562 4.21875H9.84375C6.73715 4.21875 4.21875 6.73715 4.21875 9.84375V20.1562C4.21875 23.2629 6.73715 25.7812 9.84375 25.7812H20.1562C23.2629 25.7812 25.7812 23.2629 25.7812 20.1562V9.84375C25.7812 6.73715 23.2629 4.21875 20.1562 4.21875Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M21.0938 10.3125C21.8704 10.3125 22.5 9.6829 22.5 8.90625C22.5 8.1296 21.8704 7.5 21.0938 7.5C20.3171 7.5 19.6875 8.1296 19.6875 8.90625C19.6875 9.6829 20.3171 10.3125 21.0938 10.3125Z"
                          fill="#417086"
                        />
                      </svg>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <svg
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M24.8438 4.21875H5.15625C4.63848 4.21875 4.21875 4.63848 4.21875 5.15625V24.8438C4.21875 25.3615 4.63848 25.7812 5.15625 25.7812H24.8438C25.3615 25.7812 25.7812 25.3615 25.7812 24.8438V5.15625C25.7812 4.63848 25.3615 4.21875 24.8438 4.21875Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M14.0625 13.125V20.625"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M10.3125 13.125V20.625"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M14.0625 16.4063C14.0625 15.536 14.4082 14.7014 15.0236 14.0861C15.6389 13.4707 16.4735 13.125 17.3438 13.125C18.214 13.125 19.0486 13.4707 19.6639 14.0861C20.2793 14.7014 20.625 15.536 20.625 16.4063V20.625"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M10.3125 10.7812C11.0892 10.7812 11.7188 10.1517 11.7188 9.375C11.7188 8.59835 11.0892 7.96875 10.3125 7.96875C9.53585 7.96875 8.90625 8.59835 8.90625 9.375C8.90625 10.1517 9.53585 10.7812 10.3125 10.7812Z"
                          fill="#417086"
                        />
                      </svg>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <svg
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M18.75 15L13.125 11.25V18.75L18.75 15Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M2.8125 15C2.8125 18.4869 3.17275 20.5328 3.44661 21.5843C3.51982 21.8715 3.6604 22.1371 3.85671 22.3591C4.05302 22.5812 4.2994 22.7532 4.57546 22.861C8.49853 24.3686 15 24.3272 15 24.3272C15 24.3272 21.5014 24.3686 25.4245 22.861C25.7006 22.7532 25.9469 22.5812 26.1433 22.3592C26.3396 22.1371 26.4802 21.8715 26.5534 21.5844C26.8272 20.5329 27.1875 18.4869 27.1875 15C27.1875 11.513 26.8272 9.4671 26.5534 8.41559C26.4802 8.12842 26.3396 7.86282 26.1433 7.6408C25.947 7.41878 25.7006 7.24673 25.4245 7.13891C21.5015 5.63132 15 5.67272 15 5.67272C15 5.67272 8.49861 5.63132 4.57549 7.1389C4.29944 7.24671 4.05305 7.41876 3.85674 7.64078C3.66043 7.8628 3.51984 8.1284 3.44664 8.41557C3.17277 9.46707 2.8125 11.513 2.8125 15Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </a>
                  </li>
                </ul>
                <p class="footer-copyright">
                  SABE Ltd ©<span class="newYearDesktop"></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row row-cols-2 gutter-5">
              <div class="col">
                <div class="footer-widget">
                  <h5>Pages</h5>
                  <ul class="list-unstyled">
                     <li><a href="{{ url('/') }}" class="footer-link">Home</a></li>
                     <li><a href="{{ url('/about-us') }}" class="footer-link">About</a></li>
                     <li><a href="{{ url('/services') }}" class="footer-link">Services</a></li>
                     <li><a href="{{ url('/contact-us') }}" class="footer-link">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col">
                <div class="footer-widget">
                <h5>Other Pages</h5>
               <ul class="list-unstyled">
                <li><a href="{{ url('/software-training') }}" class="footer-link">Software Training</a></li>
                <li>
                  <a href="{{ url('/register') }}" class="footer-link">Register Now</a>
                </li>
                <li>
                  <a href="{{ url('/privacy-policy') }}" class="footer-link">Privacy Policy</a>
                </li>
              </ul>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--For Mobile -->
    <section class="footer d-block d-sm-none">
      <div class="container-fluid footer-container">
        <div class="row gutter-5">
          <div class="col-12">
            <div class="footer-widget">
              <div class="footer-logo">
                <img src="images/logo.svg" alt="logo" />
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row row-cols-2 gutter-5">
              <div class="col">
                <div class="footer-widget">
                  <h5>Pages</h5>
                  <ul class="list-unstyled">
                     <li><a href="{{ url('/') }}" class="footer-link">Home</a></li>
                     <li><a href="{{ url('/about-us') }}" class="footer-link">About</a></li>
                     <li><a href="{{ url('/services') }}" class="footer-link">Services</a></li>
                     <li><a href="{{ url('/contact-us') }}" class="footer-link">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col">
                <div class="footer-widget">
                <h5>Other Pages</h5>
               <ul class="list-unstyled">
                <li><a href="{{ url('/software-training') }}" class="footer-link">Software Training</a></li>
                <li>
                  <a href="{{ url('/register') }}" class="footer-link">Register Now</a>
                </li>
                <li>
                  <a href="{{ url('/privacy-policy') }}" class="footer-link">Privacy Policy</a>
                </li>
              </ul>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-12">
            <div class="footer-widget">
              <div class="footer-address">
                <p>
                SHEMA House, KN 1 Road, Kigali
                </p>
                <p class="contact-number mb-0">
                  <a href="tel:+250788896603">+250 788 896 603</a>
                </p>
                <p class="contact-email mb-0">
                  <a href="mailto:info@staticmania.com">sabeltdrw@gmail.com</a>
                </p>
              </div>
              <div class="footer-social">
                <ul class="list-unstyled list-inline">
                  <li class="list-inline-item">
                    <a href="#">
                      <svg
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M15 26.25C21.2132 26.25 26.25 21.2132 26.25 15C26.25 8.7868 21.2132 3.75 15 3.75C8.7868 3.75 3.75 8.7868 3.75 15C3.75 21.2132 8.7868 26.25 15 26.25Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M19.6875 10.3125H17.8125C17.0666 10.3125 16.3512 10.6088 15.8238 11.1363C15.2963 11.6637 15 12.3791 15 13.125V26.25"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M11.25 16.875H18.75"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <svg
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M15.0001 10.3128C15.0002 9.23584 15.3712 8.19171 16.0505 7.35601C16.7299 6.5203 17.6762 5.94397 18.7305 5.72391C19.7848 5.50386 20.8827 5.6535 21.8396 6.14767C22.7966 6.64185 23.5542 7.45042 23.9851 8.43746L28.1251 8.4375L24.3444 12.2183C24.0982 16.021 22.414 19.5875 19.6338 22.1935C16.8536 24.7996 13.1858 26.2499 9.37514 26.25C5.62514 26.25 4.68764 24.8438 4.68764 24.8438C4.68764 24.8438 8.43764 23.4375 10.3126 20.625C10.3126 20.625 2.81264 16.875 4.68764 6.5625C4.68764 6.5625 9.37514 11.25 14.9985 12.1875L15.0001 10.3128Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <svg
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M15 19.6875C17.5888 19.6875 19.6875 17.5888 19.6875 15C19.6875 12.4112 17.5888 10.3125 15 10.3125C12.4112 10.3125 10.3125 12.4112 10.3125 15C10.3125 17.5888 12.4112 19.6875 15 19.6875Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-miterlimit="10"
                        />
                        <path
                          d="M20.1562 4.21875H9.84375C6.73715 4.21875 4.21875 6.73715 4.21875 9.84375V20.1562C4.21875 23.2629 6.73715 25.7812 9.84375 25.7812H20.1562C23.2629 25.7812 25.7812 23.2629 25.7812 20.1562V9.84375C25.7812 6.73715 23.2629 4.21875 20.1562 4.21875Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M21.0938 10.3125C21.8704 10.3125 22.5 9.6829 22.5 8.90625C22.5 8.1296 21.8704 7.5 21.0938 7.5C20.3171 7.5 19.6875 8.1296 19.6875 8.90625C19.6875 9.6829 20.3171 10.3125 21.0938 10.3125Z"
                          fill="#417086"
                        />
                      </svg>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <svg
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M24.8438 4.21875H5.15625C4.63848 4.21875 4.21875 4.63848 4.21875 5.15625V24.8438C4.21875 25.3615 4.63848 25.7812 5.15625 25.7812H24.8438C25.3615 25.7812 25.7812 25.3615 25.7812 24.8438V5.15625C25.7812 4.63848 25.3615 4.21875 24.8438 4.21875Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M14.0625 13.125V20.625"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M10.3125 13.125V20.625"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M14.0625 16.4063C14.0625 15.536 14.4082 14.7014 15.0236 14.0861C15.6389 13.4707 16.4735 13.125 17.3438 13.125C18.214 13.125 19.0486 13.4707 19.6639 14.0861C20.2793 14.7014 20.625 15.536 20.625 16.4063V20.625"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M10.3125 10.7812C11.0892 10.7812 11.7188 10.1517 11.7188 9.375C11.7188 8.59835 11.0892 7.96875 10.3125 7.96875C9.53585 7.96875 8.90625 8.59835 8.90625 9.375C8.90625 10.1517 9.53585 10.7812 10.3125 10.7812Z"
                          fill="#417086"
                        />
                      </svg>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <svg
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M18.75 15L13.125 11.25V18.75L18.75 15Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M2.8125 15C2.8125 18.4869 3.17275 20.5328 3.44661 21.5843C3.51982 21.8715 3.6604 22.1371 3.85671 22.3591C4.05302 22.5812 4.2994 22.7532 4.57546 22.861C8.49853 24.3686 15 24.3272 15 24.3272C15 24.3272 21.5014 24.3686 25.4245 22.861C25.7006 22.7532 25.9469 22.5812 26.1433 22.3592C26.3396 22.1371 26.4802 21.8715 26.5534 21.5844C26.8272 20.5329 27.1875 18.4869 27.1875 15C27.1875 11.513 26.8272 9.4671 26.5534 8.41559C26.4802 8.12842 26.3396 7.86282 26.1433 7.6408C25.947 7.41878 25.7006 7.24673 25.4245 7.13891C21.5015 5.63132 15 5.67272 15 5.67272C15 5.67272 8.49861 5.63132 4.57549 7.1389C4.29944 7.24671 4.05305 7.41876 3.85674 7.64078C3.66043 7.8628 3.51984 8.1284 3.44664 8.41557C3.17277 9.46707 2.8125 11.513 2.8125 15Z"
                          stroke="#417086"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p class="footer-copyright">
        SABE Ltd ©<span class="newYearMobile"></span>
      </p>
    </section>

    <!-- 
  #############
  Login Modals Section
  #############
-->
    <!-- Modal Log In -->
    <div
      class="modal fade modal-login"
      id="login"
      tabindex="-1"
      aria-labelledby="loginLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="loginLabel">Log In</h4>
            <button
              type="button"
              class="btn-modal-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                  stroke="#1C4456"
                  stroke-width="2.3"
                  stroke-miterlimit="10"
                ></path>
                <path
                  d="M15 9L9 15"
                  stroke="#1C4456"
                  stroke-width="2.3"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M15 15L9 9"
                  stroke="#1C4456"
                  stroke-width="2.3"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </svg>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="modal-property-details-form">
                <form class="contact-form-items row">
                  <div class="col-12">
                    <div class="input-group">
                      <span class="input-group-text">
                        <i class="ph-user"></i>
                      </span>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="user / email address"
                      />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-group">
                      <span class="input-group-text">
                        <i class="ph-keyhole"></i>
                      </span>
                      <input
                        type="password"
                        class="form-control"
                        placeholder="Password"
                      />
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckDefault"
                      />
                      <label class="form-check-label" for="flexCheckDefault">
                        Remember
                      </label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-check text-end">
                      <a
                        href="#resetPassword"
                        data-bs-toggle="modal"
                        data-bs-dismiss="modal"
                      >
                        Forget Password</a
                      >
                    </div>
                  </div>
                  <div class="w-100 contact-form-button">
                    <button type="submit" class="btn btn-large d-block w-100">
                      Log In
                    </button>
                  </div>
                  <div class="w-100 contact-form-button">
                    <button
                      type="submit"
                      class="btn btn-large btn-outline d-block w-100 mt-3"
                    >
                      <i class="ph-google-logo align-top"></i>
                      <span> Log In with Google </span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer text-center justify-content-center">
            <p class="bold">
              Don’t have an account?
              <a
                href="#createAccount"
                data-bs-toggle="modal"
                data-bs-dismiss="modal"
                >Create Account</a
              >
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Create Account -->
    <div
      class="modal fade modal-createAccount"
      id="createAccount"
      tabindex="-2"
      aria-labelledby="createAccountLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="createAccountLabel">Request for Visit</h4>
            <button
              type="button"
              class="btn-modal-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                  stroke="#1C4456"
                  stroke-width="2.3"
                  stroke-miterlimit="10"
                ></path>
                <path
                  d="M15 9L9 15"
                  stroke="#1C4456"
                  stroke-width="2.3"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M15 15L9 9"
                  stroke="#1C4456"
                  stroke-width="2.3"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </svg>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="modal-property-details-form">
                <form class="contact-form-items row">
                  <div class="col-sm-6">
                    <div class="input-group">
                      <span class="input-group-text">
                        <i class="ph-user"></i>
                      </span>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Full Name"
                      />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-group">
                      <span class="input-group-text">
                        <i class="ph-envelope-simple-open"></i>
                      </span>
                      <input
                        type="email"
                        class="form-control"
                        placeholder="Email Address"
                      />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-group">
                      <span class="input-group-text">
                        <i class="ph-phone"></i>
                      </span>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Phone Number"
                      />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-group">
                      <span class="input-group-text">
                        <i class="ph-map-pin"></i>
                      </span>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Address"
                      />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-group">
                      <span class="input-group-text">
                        <i class="ph-keyhole"></i>
                      </span>
                      <input
                        type="password"
                        class="form-control"
                        placeholder="Password"
                      />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-group">
                      <span class="input-group-text">
                        <i class="ph-keyhole"></i>
                      </span>
                      <input
                        type="password"
                        class="form-control"
                        placeholder="Re-Password"
                      />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckDefault2"
                      />
                      <label class="form-check-label" for="flexCheckDefault2">
                        <span>I agree to All </span
                        ><a href="">Terms & Conditions</a>
                      </label>
                    </div>
                  </div>
                  <div class="w-100 contact-form-button">
                    <button type="submit" class="btn btn-large d-block w-100">
                      Create Account
                    </button>
                  </div>
                  <div class="w-100 contact-form-button">
                    <button
                      type="submit"
                      class="btn btn-large btn-outline d-block w-100 mt-3"
                    >
                      <i class="ph-google-logo align-top"></i>
                      <span> Create Account with Google </span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer text-center justify-content-center">
            <p class="bold">
              Have an account?
              <a href="#login" data-bs-toggle="modal" data-bs-dismiss="modal"
                >Log In
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Reset Password -->
    <div
      class="modal fade modal-resetPassword"
      id="resetPassword"
      tabindex="-1"
      aria-labelledby="loginLabel2"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="loginLabel2">Reset Password</h4>
            <button
              type="button"
              class="btn-modal-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                  stroke="#1C4456"
                  stroke-width="2.3"
                  stroke-miterlimit="10"
                ></path>
                <path
                  d="M15 9L9 15"
                  stroke="#1C4456"
                  stroke-width="2.3"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M15 15L9 9"
                  stroke="#1C4456"
                  stroke-width="2.3"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </svg>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="modal-property-details-form">
                <p>
                  Enter the email address associated with your account and we'll
                  send you a link to reset your password.
                </p>
                <form class="contact-form-items row">
                  <div class="col-12">
                    <div class="input-group">
                      <span class="input-group-text">
                        <i class="ph-user"></i>
                      </span>
                      <input
                        type="email"
                        class="form-control"
                        placeholder="Email Address"
                      />
                    </div>
                  </div>

                  <div class="w-100 contact-form-button">
                    <button
                      type="submit"
                      class="btn btn-large d-block w-100 mt-3"
                      data-bs-target="#otp"
                      data-bs-toggle="modal"
                      data-bs-dismiss="modal"
                    >
                      Get OTP
                    </button>
                  </div>
                  <div class="w-100 contact-form-button">
                    <button
                      type="submit"
                      class="btn btn-large btn-outline d-block w-100 mt-3"
                      data-bs-target="#login"
                      data-bs-toggle="modal"
                      data-bs-dismiss="modal"
                    >
                      <span> Return To sign In </span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer text-center justify-content-center">
            <p class="bold">
              Don’t have an account?
              <a
                href="#createAccount"
                data-bs-toggle="modal"
                data-bs-dismiss="modal"
                >Create Account</a
              >
            </p>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ asset('vendor/jQuery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/prism/prism.js') }}"></script>
    <script src="{{ asset('vendor/isotope/isotope.min.js') }}"></script>
    <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/counter-up/countup.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/scrollit/scrollit.min.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>