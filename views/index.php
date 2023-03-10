<?php
$data = new glowController();
$products = $data->getAllProduct();
?>

<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo BASE_Images; ?>maqui.jpg" class="d-block w-100" alt="maqui">
      <div class="carousel-caption">
        <h5>Your Dream Catalogs</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates architecto ipsam itaque molestiae provident velit soluta aliquid aspernatur.</p>
        <p><a href="#" class="btn btn-warning mt-3">learn more</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo BASE_Images; ?>maqui2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates architecto ipsam itaque molestiae provident velit soluta aliquid aspernatur.</p>
        <p><a href="#" class="btn btn-warning mt-3">learn more</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo BASE_Images; ?>maqui3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>Third slide label</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates architecto ipsam itaque molestiae provident velit soluta aliquid aspernatur.</p>
        <p><a href="#" class="btn btn-warning mt-3">learn more</a></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- about section -->
<section id="about" class="about section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-12">
        <div class="about-img">
          <img src="<?php echo BASE_Images; ?>make.jpg" alt="abt" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="about-text">
          <h2>We Provide Best Quality <br>Service Ever</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt repellat minima a, aliquid esse accusantium temporibus, velit maiores nostrum beatae assumenda, doloribus aspernatur laborum. Quas tempore a rem veritatis incidunt Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt repellat minima a, aliquid esse accusantium temporibus, velit maiores nostrum beatae assumenda, doloribus aspernatur laborum. Quas tempore a rem veritatis incidunt.</p>
          <a href="#" class="btn btn-warning">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="text-center">
  <hr class="border border-warning border-2 opacity-50 w-50 m-auto">
</div>

<!-- service section -->
<section id="services" class="services section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h2>Our Services</h2>
          <p>Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Doloribus eveniet?</p>
        </div>
      </div>
    </div>
    <!-- card 1 -->
    <div class="row">
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-dark pb-2 mb-2">
          <div class="card-body">
            <i class="bi bi-subtract"></i>
            <h3 class="card-title">Best Quality</h3>
            <p class="lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores cupiditate voluptate voluptatibus id nemo consectetur, quia illum itaque, excepturi a quas doloremque deserunt iure! Nulla at eaque tempora magni ratione.</p>
            <button class="btn btn-warning text-dark">Read More</button>
          </div>
        </div>
      </div>
      <!-- card2 -->
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-dark pb-2 mb-2">
          <div class="card-body">
            <i class="bi bi-slack"></i>
            <h3 class="card-title">Sustainability</h3>
            <p class="lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores cupiditate voluptate voluptatibus id nemo consectetur, quia illum itaque, excepturi a quas doloremque deserunt iure! Nulla at eaque tempora magni ratione.</p>
            <button class="btn btn-warning text-dark">Read More</button>
          </div>
        </div>
      </div>
      <!-- card3 -->
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-dark pb-2 mb-2">
          <div class="card-body">
            <i class="bi bi-balloon-fill"></i>
            <h3 class="card-title">integrity</h3>
            <p class="lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores cupiditate voluptate voluptatibus id nemo consectetur, quia illum itaque, excepturi a quas doloremque deserunt iure! Nulla at eaque tempora magni ratione.</p>
            <button class="btn btn-warning text-dark">Read More</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section id="portfolio" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h2>Our Product</h2>
          <p>Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Doloribus eveniet?</p>
        </div>
      </div>

      <div class="container mb-3 text-center">
        <div class="btn-search">
          <input type="text" placeholder="Search For Product" class="search">
          <i class="bi bi-search"></i>
        </div>
      </div>
      </div>
  </div>
    
      <div class="all d-flex justify-content-around mb-4 flex-wrap col-12 col-sm-10 mx-auto mt-3">

        <?php foreach ($products as $product) : ?>

          <div class="card text-center mb-3" style="width: 20rem;">
            <!-- <img src="views/images/laptop.jpg" class="card-img-top" alt="Image"> -->
            <?php echo '<img class="wiheight" src="data:image/jpeg;base64,' . base64_encode($product["image"]) . '" />'; ?>

            <div class="card-body">
              <h5 class="card-title ProductName text-success"><?php echo $product['name']; ?></h5>
              <p class="card-text"><?php echo $product['description']; ?></p>
              <button class="btn bg-warning text-dark">Learn More</button>
            </div>
          </div>
        <?php endforeach; ?>






      </div>


</section>



<script>

</script>