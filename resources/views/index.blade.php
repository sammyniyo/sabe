<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to SABE Ltd</title>
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
        <a class="navbar-brand" href="{{ url('/') }}">
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
        <a class="btn btn-small btn-outline d-none d-lg-inline-block" data-bs-toggle="modal" href="#createAccount" role="button">Book Your Slot</a>
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
            <a class="btn btn-small btn-outline" data-bs-toggle="modal" href="#createAccount" role="button">Book Your Slot</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<section class="hero">
    <div class="container">
        <div class="row">
          <div class="col-xl-8 col-lg-10">
            <div class="hero-shape">
              <img src="images/hero/hero-bg-im.png" alt="hero-bg" />
            </div>
            <div
              class="hero-content"
              data-aos="fade-up"
              data-aos-once="true"
              data-aos-duration="1000"
            >
              <h1 class="hero-content-title">
              Empowering Progress Through Engineering Excellence
              </h1>
              <p class="hero-content-description">
              We go beyond simply providing blueprints.  We collaborate closely with you to understand your goals and challenges, offering valuable insights and expertise at every step.  Our commitment to clear communication ensures transparency and fosters a collaborative environment.
              </p>
              <div class=" d-none d-sm-flex align-items-center ms-auto ms-lg-0 order-lg-last">
                 <a class="btn btn-small btn-outline d-none d-lg-inline-block" data-bs-toggle="modal" href="#createAccount" role="button">Book Your Slot</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--
  ###########
  Work Process Area Section
  ###########
-->
    <section
      class="work-area"
      data-aos="fade-up"
      data-aos-once="true"
      data-aos-duration="1000"
    >
      <div class="container">
        <div class="row g-3">
          <div class="col-xl-6 col-lg-5">
            <div class="work-area--card">
              <h3>Shape your future with a comprehensive learning and practical experience package</h3>
              <p>
              We offer diverse live projects across all districts of Rwanda, allowing you to gain practical experience while contributing to your nation's development.
              </p>
              <a href="{{ url('/software-training') }}" class="btn btn-small">Get Started</a>
            </div>
          </div>
          <div class="col-xl-6 col-lg-7">
            <div class="d-grid work-area--service">
              <div class="work-area--service--items order-2 order-md-1">
                <svg
                  width="30"
                  height="30"
                  viewBox="0 0 30 30"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M2.5 14.375C2.5 7.8125 7.8125 2.5 14.375 2.5"
                    stroke="#1C4456"
                    stroke-width="2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M26.2499 14.375C26.2499 20.9375 20.9374 26.25 14.3749 26.25C9.6999 26.25 5.6499 23.55 3.7124 19.6125"
                    stroke="#1C4456"
                    stroke-width="2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M17.5 6.25H25"
                    stroke="#1C4456"
                    stroke-width="2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M17.5 10H21.25"
                    stroke="#1C4456"
                    stroke-width="2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M27.5 27.5L25 25"
                    stroke="#1C4456"
                    stroke-width="2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>

                <h4>
                Surveying
                </h4>
              </div>
              <div class="work-area--service--items order-1 order-md-2">
                <svg
                  width="30"
                  height="30"
                  viewBox="0 0 30 30"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11.2875 17.4999C10.8 16.7874 10.525 15.9249 10.525 14.9999C10.525 12.5249 12.525 10.5249 15 10.5249C17.475 10.5249 19.475 12.5249 19.475 14.9999C19.475 17.4749 17.475 19.4749 15 19.4749"
                    stroke="#1C4456"
                    stroke-width="2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M21.95 6.9751C19.8375 5.4751 17.4625 4.6626 15 4.6626C10.5875 4.6626 6.47505 7.2626 3.61255 11.7626C2.48755 13.5251 2.48755 16.4876 3.61255 18.2501C6.47505 22.7501 10.5875 25.3501 15 25.3501C19.4125 25.3501 23.525 22.7501 26.3875 18.2501C27.5125 16.4876 27.5125 13.5251 26.3875 11.7626"
                    stroke="#1C4456"
                    stroke-width="2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>

                <h4>
                Architectural Work
                </h4>
              </div>
              <div class="work-area--service--items order-4 order-md-3">
                <svg
                  width="30"
                  height="30"
                  viewBox="0 0 30 30"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M6.50011 13.0751C6.26261 13.0751 6.01261 12.9751 5.83761 12.8001C5.57511 12.5251 5.48761 12.1251 5.63761 11.7751L7.96261 6.22509C8.01261 6.11259 8.03761 6.03759 8.07511 5.97509C9.92511 1.71259 12.2876 0.67509 16.4626 2.27509C16.7001 2.36259 16.8876 2.55009 16.9876 2.78759C17.0876 3.02509 17.0876 3.28759 16.9876 3.52509L13.3251 12.0251C13.1751 12.3751 12.8376 12.5876 12.4626 12.5876H8.90011C8.18761 12.5876 7.51261 12.7251 6.86261 13.0001C6.75011 13.0501 6.62511 13.0751 6.50011 13.0751ZM13.2626 3.43759C11.7126 3.43759 10.7626 4.45009 9.77511 6.75009C9.76261 6.78759 9.73761 6.82509 9.72511 6.86259L8.08761 10.7501C8.36261 10.7251 8.62511 10.7126 8.90011 10.7126H11.8376L14.8501 3.71259C14.2626 3.52509 13.7376 3.43759 13.2626 3.43759Z"
                    fill="#1C4456"
                  />
                  <path
                    d="M22.8625 12.8376C22.775 12.8376 22.675 12.8251 22.5875 12.8001C22.1125 12.6626 21.6125 12.5876 21.0875 12.5876H12.4625C12.15 12.5876 11.85 12.4251 11.675 12.1626C11.5125 11.9001 11.475 11.5626 11.6 11.2751L15.225 2.86255C15.4125 2.41255 15.9625 2.10005 16.425 2.26255C16.575 2.31255 16.7125 2.37505 16.8625 2.43755L19.8125 3.67505C21.5375 4.38755 22.6875 5.13755 23.4375 6.03755C23.5875 6.21255 23.7125 6.40005 23.8375 6.60005C23.975 6.81255 24.1 7.06255 24.1875 7.32505C24.225 7.41255 24.2875 7.57505 24.325 7.75005C24.675 8.93755 24.5 10.3876 23.75 12.2626C23.5875 12.6126 23.2375 12.8376 22.8625 12.8376ZM13.8875 10.7126H21.1C21.5 10.7126 21.8875 10.7501 22.275 10.8126C22.625 9.72505 22.7 8.88755 22.5 8.21255C22.475 8.10005 22.45 8.05005 22.4375 8.00005C22.3625 7.80005 22.3125 7.68755 22.25 7.58755C22.1625 7.45005 22.1 7.33755 22 7.22505C21.4625 6.57505 20.5125 5.97505 19.0875 5.38755L16.625 4.36255L13.8875 10.7126Z"
                    fill="#1C4456"
                  />
                  <path
                    d="M19.875 28.4376H10.125C9.775 28.4376 9.45 28.4126 9.125 28.3751C4.7375 28.0876 2.2375 25.5751 1.9375 21.1376C1.9 20.8626 1.875 20.5251 1.875 20.1876V17.7501C1.875 14.9376 3.55 12.4001 6.1375 11.2751C7.025 10.9001 7.95 10.7126 8.9125 10.7126H21.1125C21.825 10.7126 22.5125 10.8126 23.15 11.0126C26.0875 11.9001 28.15 14.6751 28.15 17.7501V20.1876C28.15 20.4626 28.1375 20.7251 28.125 20.9751C27.85 25.8626 25 28.4376 19.875 28.4376ZM8.9 12.5876C8.1875 12.5876 7.5125 12.7251 6.8625 13.0001C4.9625 13.8251 3.7375 15.6876 3.7375 17.7501V20.1876C3.7375 20.4501 3.7625 20.7126 3.7875 20.9626C4.025 24.5251 5.775 26.2751 9.2875 26.5126C9.6 26.5501 9.85 26.5751 10.1125 26.5751H19.8625C23.9875 26.5751 26.0125 24.7626 26.2125 20.8876C26.225 20.6626 26.2375 20.4376 26.2375 20.1876V17.7501C26.2375 15.4876 24.725 13.4626 22.575 12.8001C22.1 12.6626 21.6 12.5876 21.075 12.5876H8.9Z"
                    fill="#1C4456"
                  />
                  <path
                    d="M2.80005 18.6875C2.28755 18.6875 1.86255 18.2625 1.86255 17.75V14.0875C1.86255 10.15 4.65005 6.75 8.50005 6C8.83755 5.9375 9.18755 6.0625 9.41255 6.325C9.62505 6.5875 9.68755 6.9625 9.55005 7.275L7.36255 12.5C7.26255 12.725 7.08755 12.9 6.87505 13C4.97505 13.825 3.75005 15.6875 3.75005 17.75C3.73755 18.2625 3.32505 18.6875 2.80005 18.6875ZM7.00005 8.525C5.40005 9.425 4.23755 11 3.87505 12.8375C4.42505 12.275 5.06255 11.8 5.78755 11.45L7.00005 8.525Z"
                    fill="#1C4456"
                  />
                  <path
                    d="M27.1999 18.6875C26.6874 18.6875 26.2624 18.2625 26.2624 17.75C26.2624 15.4875 24.7499 13.4625 22.5999 12.8C22.3499 12.725 22.1374 12.55 22.0249 12.3125C21.9124 12.075 21.8999 11.8 21.9999 11.5625C22.5874 10.1 22.7374 9.03747 22.4999 8.21247C22.4749 8.09997 22.4499 8.04997 22.4374 7.99997C22.2749 7.63747 22.3624 7.21247 22.6499 6.93747C22.9374 6.66247 23.3749 6.59997 23.7249 6.78747C26.4499 8.21247 28.1374 11.0125 28.1374 14.0875V17.75C28.1374 18.2625 27.7124 18.6875 27.1999 18.6875ZM24.0624 11.3625C24.8499 11.725 25.5499 12.2375 26.1374 12.85C25.8999 11.625 25.3124 10.5125 24.4499 9.63747C24.3874 10.1625 24.2624 10.7375 24.0624 11.3625Z"
                    fill="#1C4456"
                  />
                </svg>

                <h4>
                Building Engineering
                </h4>
              </div>
              <div class="work-area--service--items order-3 order-md-4">
                <svg
                  width="30"
                  height="30"
                  viewBox="0 0 30 30"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11.25 27.5H18.75C25 27.5 27.5 25 27.5 18.75V11.25C27.5 5 25 2.5 18.75 2.5H11.25C5 2.5 2.5 5 2.5 11.25V18.75C2.5 25 5 27.5 11.25 27.5Z"
                    stroke="#1C4456"
                    stroke-width="2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M19.375 12.1875C20.4105 12.1875 21.25 11.348 21.25 10.3125C21.25 9.27697 20.4105 8.4375 19.375 8.4375C18.3395 8.4375 17.5 9.27697 17.5 10.3125C17.5 11.348 18.3395 12.1875 19.375 12.1875Z"
                    stroke="#1C4456"
                    stroke-width="2.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M10.625 12.1875C11.6605 12.1875 12.5 11.348 12.5 10.3125C12.5 9.27697 11.6605 8.4375 10.625 8.4375C9.58947 8.4375 8.75 9.27697 8.75 10.3125C8.75 11.348 9.58947 12.1875 10.625 12.1875Z"
                    stroke="#1C4456"
                    stroke-width="2.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M10.5 16.625H19.5C20.125 16.625 20.625 17.125 20.625 17.75C20.625 20.8625 18.1125 23.375 15 23.375C11.8875 23.375 9.375 20.8625 9.375 17.75C9.375 17.125 9.875 16.625 10.5 16.625Z"
                    stroke="#1C4456"
                    stroke-width="2.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>

                <h4>
                Engineering Software <br>Training
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 
  #############
  courses
  #############
-->
    <section
      class="properties"
      data-aos="fade-up"
      data-aos-once="true"
      data-aos-duration="1000"
    >
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div
              class="d-flex align-items-center justify-content-between properties-header"
            >
              <h3>Featured Software Courses</h3>
              <a
                href="{{ url('/software-training') }}"
                class="d-md-flex align-items-center d-none"
              >
                <span>Explore All </span>
                <i class="ph-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="grid row row-cols-xl-3 row-cols-md-2 g-4">
          <div class="properties-card industrial">
            <div class="properties-card--thumb">
              <img src="images/courses/etabs.png" alt="etabs" />
            </div>
            <div class="properties-card--content">
              <div
                class="d-flex align-items-center properties-card--content--address"
              >
                <span>ETABS</span>
              </div>
              <div class="d-flex align-items-center properties-card--content--address">
                  <span>ETABS is a structural analysis and design software used for building structures. It integrates various structural analysis and design processes to provide a comprehensive solution for the analysis and design of building systems.</span>
              </div>
              <div
                class="properties-card--footer d-flex align-items-center justify-content-between"
              >
                <a href="{{ url('/etabs') }}" class="btn btn-small"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <div class="properties-card">
            <div class="properties-card--thumb">
              <img src="images/courses/autocad.jpg" alt="autocad" />
            </div>
            <div class="properties-card--content">
              <div
                class="d-flex align-items-center properties-card--content--address"
              >
                <span>AutoCAD</span>
              </div>  
              <div class="d-flex align-items-center properties-card--content--address">
                <span>Develop a strong foundation in 2D and 3D drafting with AutoCAD, the industry leader. Learn to create precise technical drawings for architectural, engineering, and construction projects. (Course content includes: drawing tools, dimensioning,..)</span>
            </div>           
              <div
                class="properties-card--footer d-flex align-items-center justify-content-between"
              >
                <a href="{{ url('/autocad') }}" class="btn btn-small"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <div class="properties-card industrial">
            <div class="properties-card--thumb">
              <img src="images/courses/revit.jpg" alt="Autodesk Revit" />
            </div>
            <div class="properties-card--content">
              <div
                class="d-flex align-items-center properties-card--content--address"
              >
                <span>Autodesk Revit</span>
              </div>
              <div class="d-flex align-items-center properties-card--content--address">
                <span>aster Building Information Modeling (BIM) with Revit, a powerful software for creating intelligent 3D models of buildings. Learn to design, document, and collaborate on projects with greater efficiency(modeling tools, parametric components,..).</span>
            </div>
              <div
                class="properties-card--footer d-flex align-items-center justify-content-between"
              >
                <a href="{{ url('/autodesk-revit') }}" class="btn btn-small"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <div class="properties-card agriculture">
            <div class="properties-card--thumb">
              <img src="images/courses/sketchup.jpg" alt="sketchup" />
            </div>
            <div class="properties-card--content">
              <div
                class="d-flex align-items-center properties-card--content--address"
              >
                <span>SketchUp</span>
              </div>
              <div class="d-flex align-items-center properties-card--content--address">
                <span>Get started with 3D modeling using the user-friendly SketchUp platform. This course is ideal for beginners or those seeking to create basic 3D models for design visualization. (Course content may include: basic modeling tools, creating shapes, applying textures,..)</span>
            </div>
              <div
                class="properties-card--footer d-flex align-items-center justify-content-between"
              >
                <a href="{{ url('/sketchup') }}" class="btn btn-small"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <div class="properties-card">
            <div class="properties-card--thumb">
              <img src="images/courses/civil3d.jpg" alt="civil3d" />
            </div>
            <div class="properties-card--content">
              <div
                class="d-flex align-items-center properties-card--content--address"
              >
                <span>Civil 3D</span>
              </div>
              <div class="d-flex align-items-center properties-card--content--address">
                <span>Specialize in civil engineering design with Civil 3D. Learn to create detailed models of roads, bridges, and other site elements, optimizing project planning and construction. (Course content may include: site modeling tools, road and drainage design, quantity takeoffs)</span>
            </div>
              
              <div
                class="properties-card--footer d-flex align-items-center justify-content-between"
              >
                <a href="{{ url('/civil-3d') }}" class="btn btn-small"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <div class="properties-card">
            <div class="properties-card--thumb">
              <img src="images/courses/archicad.png" alt="Archicad" />
            </div>
            <div class="properties-card--content">
              <div
                class="d-flex align-items-center properties-card--content--address"
              >
                
                <span>Archicad</span>
              </div>
              <div class="d-flex align-items-center properties-card--content--address">
                <span>Explore architectural design with Archicad, a BIM software tailored for architects. Learn to create intelligent building models, generate construction documents, and collaborate seamlessly with other professionals. (Content will focus on architectural elements)</span>
            </div>
              <div
                class="properties-card--footer d-flex align-items-center justify-content-between"
              >
                <a href="{{ url('/archicad') }}" class="btn btn-small"
                  >View Details</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <a
              href="{{ url('/software-training') }}"
              class="btn btn-small btn-outline btn-mobile d-md-none align-items-center d-flex w-auto"
            >
              <span>Explore All </span>
              <i class="ph-caret-right"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- 
  #############
  Feature Section
  #############
-->
    <section class="feature">
      <div class="container">
        <div
          class="row align-items-center feature-top"
          data-aos="fade-up"
          data-aos-once="true"
          data-aos-duration="1000"
        >
          <div class="col-lg-6 order-lg-1 order-2">
            <div class="feature-content">
              <h3>Launch Your Career to New Heights</h3>
              <p>
              We invest in your growth! Benefit from comprehensive training programs, including software training courses we offer to both new and existing employees. Stay ahead of the curve with opportunities to learn the latest industry trends and tools.
              </p>
              <a href="{{ url('/contact-us') }}" class="btn btn-small">Get In Touch</a>
            </div>
          </div>
          <div class="col-lg-6 order-lg-2 order-1">
            <div class="row">
              <div class="col-6">
                <div class="feature-grid-image">
                  <img src="images/feature/feature1.png" alt="feature1" />
                  <img src="images/feature/feature2.png" alt="feature2" />
                </div>
              </div>
              <div class="col-6">
                <div class="feature-grid-image">
                  <img src="images/feature/feature3.png" alt="feature3" />
                  <img src="images/feature/feature4.png" alt="feature4" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="row align-items-center feature-bottom"
          data-aos="fade-up"
          data-aos-once="true"
          data-aos-duration="1000"
          data-aos-delay="200"
        >
          <div class="col-md-6 order-xl-1 order-md-2">
            <div class="feature-content-thumb">
              <img src="images/feature/feature5.png" alt="feature" />
            </div>
          </div>
          <div
            class="col-md-6 col-lg-5 me-lg-auto ms-xl-auto order-xl-2 order-md-1"
          >
            <div class="feature-content">
              <h3>Practice Makes Perfect</h3>
              <p>
              After completing the section of learning in SABE Ltd, We have different live projects that will shape you into real and stable one in your career path.
              </p>
              <ul class="">
                <li>
                  <span class="bold">Master in-demand Engineering Software</span>
                </li>
                <li>
                  <span class="bold">Practice Makes Perfect</span>
                </li>
                <li>
                  <span class="bold">Become a Real-World Engineering Professional</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

  
    <!-- 
  #############
  Footer Navigation Section
  #############
-->
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

<div class="modal fade modal-createAccount" id="createAccount" tabindex="-2" aria-labelledby="createAccountLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="createAccountLabel">Book Your Slot</h4>
                <button type="button" class="btn-modal-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#1C4456" stroke-width="2.3" stroke-miterlimit="10"></path>
                        <path d="M15 9L9 15" stroke="#1C4456" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M15 15L9 9" stroke="#1C4456" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="modal-property-details-form">
                        <form action="{{ route('students.store') }}" method="POST" class="contact-form-items row">
                            @csrf
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ph-user"></i></span>
                                    <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ph-envelope-simple-open"></i></span>
                                    <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ph-phone"></i></span>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ph-map-pin"></i></span>
                                    <input type="text" class="form-control" name="address" placeholder="Address" required>
                                </div>
                            </div>
                            <div class="w-100 contact-form-button">
                                <button type="submit" class="btn btn-large d-block w-100">Book Your Slot</button>
                            </div>
                        </form>
                    </div>
                </div>
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
