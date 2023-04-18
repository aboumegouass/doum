<?php $bg = get_template_directory_uri() . '/img/16.jpg'; ?>
<?php $bg2 = get_template_directory_uri() . '/img/16_2.jpg'; ?>
<?php $bg3 = get_template_directory_uri() . '/img/16_3.jpg'; ?>
<?php $bg4 = get_template_directory_uri() . '/img/16_4.jpg'; ?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true" data-interval="4000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo $bg2; ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="container">
            <div class="najd-navbar-hero">
                <div class="najd-navbar-hero-body">
                    <p class="meta"> Lorem, ipsum dolor.</p>
                    <h1 class="title">Lorem ipsum dolor sit amet consectetur</h1>
                    <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex quas sunt tempora fugit. Nisi doloribus quaerat in nam recusandae. Ipsum?</p>
                    <div class="najd-btns pt-3">
                        <a href="/" class="btn butt-xl butt-primary2"><i class="fa fa-play-circle"></i> Watch Video</a>
                        <a href="/" class="btn butt-xl butt-primary2-out">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo $bg3; ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="container">
            <div class="najd-navbar-hero">
                <div class="najd-navbar-hero-body">
                    <p class="meta"> Lorem, ipsum dolor.</p>
                    <h1 class="title">Lorem ipsum dolor sit amet consectetur</h1>
                    <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex quas sunt tempora fugit. Nisi doloribus quaerat in nam recusandae. Ipsum?</p>
                    <div class="najd-btns pt-3">
                        <a href="/" class="btn butt-xl butt-primary2">Watch Video</a>
                        <a href="/" class="btn butt-xl butt-primary2-out">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo $bg; ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class="container">
            <div class="najd-navbar-hero">
                <div class="najd-navbar-hero-body">
                    <p class="meta"> Lorem, ipsum dolor.</p>
                    <h1 class="title">Lorem ipsum dolor sit amet consectetur</h1>
                    <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex quas sunt tempora fugit. Nisi doloribus quaerat in nam recusandae. Ipsum?</p>
                    <div class="najd-btns pt-3">
                        <a href="/" class="btn butt-xl butt-primary2">Watch Video</a>
                        <a href="/" class="btn butt-xl butt-primary2-out">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
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