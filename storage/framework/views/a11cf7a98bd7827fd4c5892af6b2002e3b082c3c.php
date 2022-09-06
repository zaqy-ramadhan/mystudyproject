<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    

    

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/cssku.css">
    <script src="js/bootstrap.js"></script>
    
</head>

<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top shadow">
    <div class="container">
        <a href="#"><img class="img-fluid" src="<?php echo e(URL::to('/assets/petclick_logo-light.png')); ?>" style="width: 100px"></a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse righting" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-tem">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#contact">Contact Us</a>
          </li>
          <li class="nav-item">
            <a  href="/log" ><button type="button" class="btn btn-success rounded-pill">Login / Register</button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div id="banner" class="container-fluid parallax">
    <div class="container banner-content col-lg-6 position-absolute top-50 start-50 translate-middle">
      <div class="text-center">
        <p class="fs-1 fw-semibold">
          We Care About Your Pets
        </p>
        <p class="d-none d-md-block fw-normal">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, praesentium.
        </p>
        <a href="/form"><button type="button" class="btn btn-success rounded">Make Appointement</button></a>
      </div>
    </div>
  </div>
  
  <div id="about" class="container-fluid mt-5 mb-5">
    <p class="fs-1 fw-bolder centering" style="color: #016734;">ABOUT US</p>
    <div class="container p-4">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda hic quia sit nulla impedit repudiandae facere eos maiores recusandae possimus numquam voluptate neque tempore temporibus alias placeat id sint, omnis modi necessitatibus. Assumenda placeat cum doloribus incidunt ea labore obcaecati laborum earum repellendus architecto nihil, modi enim, quisquam dolor a itaque culpa alias nemo. Praesentium modi ipsum expedita beatae deleniti debitis ipsa. Perferendis, dolorem eos debitis itaque facilis commodi modi quaerat eum natus ut, sit laboriosam provident consectetur vitae voluptatibus quos! Numquam consequuntur explicabo nihil ducimus ipsum! Autem, soluta vitae similique consequuntur quae ratione illo vel, laboriosam accusantium aspernatur temporibus.</p>
    </div>
  </div>

  
  <div id="services" class="container-fluid fb-parallax centering">
    <div class="container m-5">
        <p class="fs-1 fw-bolder centering" style="color: white;">OUR SERVICES</p>
        <div class="row m-5 centering">

            <div class="col-sm-3 centering mt-2">
                <div class="card shadow" style="width: 18rem;">
                    <img src="https://cdn-prd.content.metamorphosis.com/wp-content/uploads/sites/2/2021/03/shutterstock_1503829781-1-768x512.jpg" class="card-img-top" alt="grooming">
                    <div class="card-body">
                      <h5 class="card-title" style="color: #323D51">Healtch Check & Vaccinations</h5>
                      <p class="card-text" style="color: #323D51">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      
                    </div>
                    <a href="#" class="btn btn-success">See details</a>
                  </div>
            </div>

            <div class="col-sm-3 centering mt-2">
              <div class="card shadow" style="width: 18rem;">
                  <img src="https://d2zp5xs5cp8zlg.cloudfront.net/image-42128-800.jpg" class="card-img-top" alt="grooming">
                  <div class="card-body">
                    <h5 class="card-title" style="color: #323D51">Surgery</h5>
                    <p class="card-text" style="color: #323D51">Surgery: Performing operations as required including neutering, dentals, lump removals and referring on to specialists as required.</p>
                    
                  </div>
                  <a href="#" class="btn btn-success">See details</a>
                </div>
          </div>

            <div class="col-sm-3 centering mt-2">
                <div class="card shadow" style="width: 18rem;">
                    <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" class="card-img-top" alt="grooming">
                    <div class="card-body">
                      <h5 class="card-title" style="color: #323D51">Grooming</h5>
                      <p class="card-text" style="color: #323D51">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      
                    </div>
                    <a href="#" class="btn btn-success">See details</a>
                  </div>
            </div>

            <div class="col-sm-3 centering mt-2">
                <div class="card shadow" style="width: 18rem;">
                    <img src="https://www.westerncape.gov.za/sites/www.westerncape.gov.za/files/boy-with-dog-at-vet.jpg" alt="grooming">
                    <div class="card-body">
                      <h5 class="card-title" style="color: #323D51">Consultation</h5>
                      <p class="card-text" style="color: #323D51">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      
                    </div>
                    <a href="#" class="btn btn-success">See details</a>
                  </div>
            </div>
        </div>
    </div>
  </div>
  
  
  <div id="gallery" class="container-fluid">
    <div class="container p-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1632236542159-809925d85fc0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1571772996211-2f02c9727629?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1599443015574-be5fe8a05783?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1608220678046-22b22f2cde86?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
  </div>

  <div id="location" class="container-fluid">
    <div class="card-group">
        <div class="card">
          <img src="https://i.pinimg.com/originals/43/db/a4/43dba4ad5630f8b11c8ce3097850c9b5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Clinic 1</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <button type="button" class="btn btn-success">View Location</button>
          </div>
        </div>
        <div class="card">
          <img src="https://archello.s3.eu-central-1.amazonaws.com/images/2020/03/17/Liqui-Group--Browns-Pet-Store-1920-0282.1584452538.8015.jpg" alt="...">
          <div class="card-body">
            <h5 class="card-title">Clinic 2</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <button type="button" class="btn btn-success">View Location</button>
          </div>
        </div>
        <div class="card">
          <img src="https://cdn1-production-images-kly.akamaized.net/-sidy4lZGmd6vN1J3YPe5fXdC3M=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2386727/original/094684900_1539850439-WhatsApp_Image_2018-10-18_at_15.03.59.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Clinic 3</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <button type="button" class="btn btn-success">View Location</button>
        </div>
      </div>
  </div>

  <!-- contact -->
  <div id="contact" class="bg-contact mt-5">
    <div class="container">
        <h2 class="text-center fs-1 text-black-75 fw-bolder pt-4  " style="color: white;">CONTACT</h2>
        <div class="row mt-4">

          <div class="col-lg-4" style="color: white;">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt" ></i>
                <a href="https://goo.gl/maps/" target="_blank" style="color: white;"><h4><span class="iconify me-1" data-icon="fa6-solid:location-dot" data-width="20" data-height="20"></span>Location:</h4>
                <p>Surabaya, Indonesia - 36743</p></a>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <a href="mailto::" target="_blank" style="color: white;"><h4><span class="iconify me-1" data-icon="ic:round-email" data-width="20" data-height="20"></span>Email:</h4>
                <p>petclick@gmail.com</p></a> 
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <a href="http://wa.me/" target="_blank" style="color:white;">
                <h4><span class="iconify me-1" data-icon="fluent:call-24-filled" data-width="20" data-height="20"></span>Call:</h4>
                <p>+62 81000000000</p></a>
              </div>

              <div>
                <a href="#"><button class="btn btn-success">Back to Top</button></a>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0 shadow p-3 mb-5 bg-body rounded">

            <form action="phpmail.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="container centering">
                <button class="btn btn-success text-center mt-3" type="submit" name="submit"> Send Message</button>  
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>

</body>
</html><?php /**PATH C:\xampp\htdocs\framework\test1-app\resources\views/home.blade.php ENDPATH**/ ?>