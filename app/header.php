<!--- Slider Indicators --->
<div id="carousel-HomeJumbotron" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carousel-HomeJumbotron" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
    <button type="button" data-bs-target="#carousel-HomeJumbotron" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
    <button type="button" data-bs-target="#carousel-HomeJumbotron" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
  </div>
  <!--- Carousel Inner --->
  <div class="carousel-inner">
    <!--- Slide One --->
    <div class="carousel-item slide-one-image active" role="img" aria-label="adorable photo of a squirrel">
      <div class="carousel-item-bg"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="home-hero-header">
              <p>Slide One</p>
              <a class="btn btn-primary" role="button" href="#">Learn More About Squirrels</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--- End of Slide One--->
    <!--- Slide Two --->
    <div class="carousel-item slide-two-image" role="img" aria-label="photo of the woods">
      <div class="carousel-item-bg"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="home-hero-header">
              <p>Slide Two</p>
              <a class="btn btn-primary" role="button" href="#">Take A Walk in the Woods</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--- End of Slide Two--->
    <!--- Slide Three --->
    <div class="carousel-item slide-three-image" role="img" aria-label="photo of a pond">
      <div class="carousel-item-bg"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="home-hero-header">
              <p>Slide Three</p>

              <a class="btn btn-primary" role="button" href="#">Take a Dip in the Pond</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--- End of Slide Three--->
  <!--- End of Carousel Inner --->
</div>
<!--- Left and Right Slide Buttons--->
<button class="carousel-control-prev" type="button" data-bs-target="#carousel-HomeJumbotron" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carousel-HomeJumbotron" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>


<style>
/* Carousel Section Styles ============================ */
body {
  background-color: #000;
}

.slide-one-image {
  background-image: url("https://chrislanejones.com/wp-content/uploads/2023/03/Squirrel.jpg");
  background-position: top center;
}

.slide-two-image {
  background-image: url("https://chrislanejones.com/wp-content/uploads/2023/03/Woods.jpg");
  background-position: top center;
}

.slide-three-image {
  background-image: url("https://chrislanejones.com/wp-content/uploads/2023/03/Pond.jpg");
  background-position: top center;
}

.home-hero-header {
  background-color: #031531;
  color: #fff;
  padding: 30px 30px;
  margin-top: 65vh;
  margin-left: 5vw;
}

.home-hero-header .btn {
  position: relative;
  bottom: -5px;
}

.carousel-item {
  background-size: cover;
  height: 100vh;
  z-index: -1;
  position: relative;
}

.carousel .container {
  z-index: 9999;
  position: relative;
}

.carousel-item-bg {
  position: absolute;
  z-index: 2;
  width: 100%;
  background: #1740808a;
  height: 100%;
}

.home-hero-header p {
  font-weight: 500;
  font-size: 1.4rem;
}

.carousel-item-bg img {
  width: 100% !important;
  height: auto !important;
  opacity: 0.5;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
  height: 100vh;
}
.carousel-control-next,
.carousel-control-prev {
  top: 0;
}

nav + .carousel {
  top: -60px;
  margin-bottom: -60px;
}

.carousel-item .container img {
  margin: auto 10px;
  display: block;
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -35%);
  width: 100% !important;
  height: auto !important;
  max-width: 60%;
}
/* Mobile Slider */
@media (max-width: 768px) {
  .carousel-item {
    height: 100vh;
  }

  .carousel-inner {
    height: 100vh;
  }
  .home-hero-header {
    background-color: #031531;
    color: #fff;
    padding: 3vh 3vw;
    margin-top: 60vh !important;
    margin-left: 0vw;
  }
  .carousel-control-next,
  .carousel-control-prev {
    bottom: 350px;
  }
  .home-hero-header p {
    font-weight: 500;
    font-size: 1.4rem;
  }
  .carousel-control-next,
  .carousel-control-prev {
    top: 40vh;
  }
}
/* Large Screen Slider */
@media (min-width: 1700px) {
  .carousel-item {
    width: 80vw;
    margin: 0 auto;
  }
  .carousel-inner {
    width: 80vw;
    margin: 0 auto;
  }
  .carousel-control-next,
  .carousel-control-prev {
    width: 25%;
  }
}

</style>