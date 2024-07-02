<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Softwares Courses | SABE Ltd</title>
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
        <img src="images/logo.png" alt="logo" height="50" width="50">
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

<section class="about" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 col-lg-7 mx-auto">
        <div class="about-content text-center">
          <h1>Our Courses</h1>
          <p>We invest in your growth! Benefit from comprehensive training programs, including software training courses we offer to both new and existing employees. Stay ahead of the curve with opportunities to learn the latest industry trends and tools.</p>
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
<section
      class="properties"
      data-aos="fade-up"
      data-aos-once="true"
      data-aos-duration="1000"
    >
      <div class="container">
        <div class="grid row row-cols-xl-3 row-cols-md-2 g-4">
          <div class="properties-card">
            <div class="properties-card--thumb">
              <img src="images/courses/etabs.png" alt="etabs"/>
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
                <span>Develop a strong foundation in 2D and 3D drafting with AutoCAD, the industry leader. Learn to create precise technical drawings for architectural, engineering, and construction projects. (Course content may include: drawing tools, dimensioning,..)</span>
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

          <div class="properties-card">
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

          <div class="properties-card">
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
          
          <div class="properties-card">
            <div class="properties-card--thumb">
              <img src="images/courses/lumion.jpg" alt="Lumion" />
            </div>
            <div class="properties-card--content">
              <div
                class="d-flex align-items-center properties-card--content--address"
              >
                <span>Lumion</span>
              </div>
              <div class="d-flex align-items-center properties-card--content--address">
                  <span>Create stunning and realistic visualizations of your design projects with Lumion. Learn to render high-quality images and animations that bring your ideas to life. (Course content may include: material application, lighting effects, animation techniques, rendering settings)</span>
              </div>
              <div
                class="properties-card--footer d-flex align-items-center justify-content-between"
              >
                <a href="{{ url('/lumion') }}" class="btn btn-small"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <div class="properties-card">
            <div class="properties-card--thumb">
              <img src="images/courses/twinmotion.jpg" alt="Twin Motion" />
            </div>
            <div class="properties-card--content">
              <div
                class="d-flex align-items-center properties-card--content--address"
              >
                <span>Twinmotion</span>
              </div>
              <div class="d-flex align-items-center properties-card--content--address">
                  <span>Master another leading real-time rendering software, Twinmotion. This course equips you to create immersive virtual experiences of your designs for presentations and client engagement. (Course content may be similar to Lumion with a focus on Twinmotion's functionalities)</span>
              </div>
              <div
                class="properties-card--footer d-flex align-items-center justify-content-between"
              >
                <a href="{{ url('/twinmotion') }}" class="btn btn-small"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <div class="properties-card">
            <div class="properties-card--thumb">
              <img src="images/courses/prokon.png" alt="Prokon" />
            </div>
            <div class="properties-card--content">
              <div
                class="d-flex align-items-center properties-card--content--address"
              >
                <span>Prokon</span>
              </div>
              <div class="d-flex align-items-center properties-card--content--address">
                  <span>Gain expertise in another industry-standard structural analysis software. Prokon empowers you to analyze and design various structures, including buildings, bridges, and industrial facilities. (Course content may be similar to ETABS with specific focus on Prokon's functionalities)</span>
              </div>
              <div
                class="properties-card--footer d-flex align-items-center justify-content-between"
              >
                <a href="{{ url('/prokon') }}" class="btn btn-small"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <div class="properties-card">
            <div class="properties-card--thumb">
              <img src="images/courses/adobe-illustrator.jpg" alt="Adobe Illustrator" />
            </div>
            <div class="properties-card--content">
              <div
                class="d-flex align-items-center properties-card--content--address"
              >
                <span>Adobe Illustrator</span>
              </div>
              <div class="d-flex align-items-center properties-card--content--address">
                  <span>Expand your design skills with Adobe Illustrator, a powerful vector graphics software. Learn to create logos, illustrations, and marketing materials for your projects. (Course content include: vector drawing tools, graphic design principles)</span>
              </div>
              <div
                class="properties-card--footer d-flex align-items-center justify-content-between"
              >
                <a href="{{ url('/adobe-illustrator') }}" class="btn btn-small"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <div class="properties-card">
            <div class="properties-card--thumb">
              <img src="images/courses/adobe-photoshop.jpg" alt="Adobe Photoshop" />
            </div>
            <div class="properties-card--content">
              <div
                class="d-flex align-items-center properties-card--content--address"
              >
                <span>Adobe Photoshop</span>
              </div>
              <div class="d-flex align-items-center properties-card--content--address">
                  <span>Enhance your image editing capabilities with Adobe Photoshop, the industry standard for photo manipulation and graphic design. (Course content include: image editing tools, layer management, selection techniques, filters and effects)</span>
              </div>
              <div
                class="properties-card--footer d-flex align-items-center justify-content-between"
              >
                <a href="{{ url('/adobe-photoshop') }}" class="btn btn-small"
                  >View Details</a
                >
              </div>
            </div>
          </div>

          <div class="properties-card">
            <div class="properties-card--thumb">
              <img src="images/courses/tekla-structures.jpg" alt="Tekla Structures" />
            </div>
            <div class="properties-card--content">
              <div
                class="d-flex align-items-center properties-card--content--address"
              >
                <span>Tekla Structures</span>
              </div>
              <div class="d-flex align-items-center properties-card--content--address">
                  <span>Master BIM for steel and concrete structures with Tekla Structures. Learn to create detailed models for fabrication and construction of steel and concrete buildings. (Course content focus on steel and concrete detailing)</span>
              </div>
              <div
                class="properties-card--footer d-flex align-items-center justify-content-between"
              >
                <a href="{{ url('/tekra-structures') }}" class="btn btn-small"
                  >View Details</a
                >
              </div>
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
              <img src="images/logo.png" alt="logo" height="50" width="50">
              </div>
              <div class="footer-address">
                <p>
                  SHEMA House, KN 1 Road, Kigali
                </p>
                <p class="contact-number mb-0">
                   <a href="tel:+250794423156">+250 794 423 156</a>
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
              <img src="images/logo.png" alt="logo" height="50" width="50">
              </div>
              <div class="footer-address">
                <p>
                SHEMA House, KN 1 Road, Kigali
                </p>
                <p class="contact-number mb-0">
                <a href="tel:+250794423156">+250 794 423 156</a>
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
              <img src="images/logo.png" alt="logo" height="50" width="50">
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
                  <a href="tel:+250794423156">+250 794 423 156</a>
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
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('students.store') }}" method="POST" class="contact-form-items row">
                            @csrf
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ph-user"></i></span>
                                    <input type="text" class="form-control" name="student_full_name" placeholder="Full Name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ph-envelope-simple-open"></i></span>
                                    <input type="email" class="form-control" name="student_email" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ph-phone"></i></span>
                                    <input type="text" class="form-control" name="student_phone" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ph-map-pin"></i></span>
                                    <input type="text" class="form-control" name="student_address" placeholder="Address" required>
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
    <script>
    @if ($errors->any())
        $(document).ready(function(){
            $('#createAccount').modal('show');
        });
    @endif
</script>
</body>