<?php
require 'inc/header.php';
?>



<header class="bg-primary-gradient">
  <section class="text-center banner-sec pb-48" style="
          height: 720px;
          background: url('assets/img/hero-banner.png');
          width: 100%;
          background-size: cover;
          margin-top: 100px;
        ">
    <div>
      <div class="container cont-c" data-aos="fade-up" data-aos-delay="200">
        <h5 class="text-start" style="
                font-size: 47px;
                --bs-body-font-weight: 600;
                font-weight: bold;
              ">
          Your
        </h5>
        <h2 class="text-start" style="font-size: 80px; height: 90px">
          <strong><span style="color: rgb(44, 45, 47)">ONE STOP SHOP</span></strong><br /><strong><span style="color: rgb(44, 45, 47)">&nbsp;&nbsp;</span></strong><br /><br />
        </h2>
        <p class="text-start description">
          <br /><span style="color: rgb(44, 45, 47)">Sweet Tea is your one-stop shop for all your grocery needs. We
            have</span>
          <br /><span style="color: rgb(44, 45, 47)">Wide range of products including milk tea, peach tea, coffee
            and</span>
          <br /><span style="color: rgb(44, 45, 47)">snacks, all at affordable prices. Plus, we offer free
            shipping.</span><br /><br />
        </p>
        <div class="text-end" style="height: 56px; margin-right: 150px">
          <a data-bss-hover-animate="bounce" class="cus-btn dark" href="#" style="
                  padding: 12px 32px;
                  border-radius: 15px;
                  font-size: 21px;
                  text-shadow: 0px 0px;
                  transition: ease-in-out;
                  box-shadow: 42px 42px 24px rgba(0, 0, 0, 0.01),
                    24px 24px 20px rgba(0, 0, 0, 0.03),
                    11px 11px 15px rgba(0, 0, 0, 0.04),
                    3px 3px 8px rgba(0, 0, 0, 0.05),
                    0px 0px 0px rgba(0, 0, 0, 0.05);
                ">Khám Phá Ngay</a>
        </div>
      </div>
    </div>
    <img src="assets/img/brands/tea%20cold%20bubble.png" style="height: 300px; filter: drop-shadow(20px 7px 18px black)" class="animated-ud" data-aos="zoom-in"
            data-aos-delay="200"/>
  </section>
</header>

<section class="category mt-100 pb-48">
  <div class="container">
    <div class="row">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="category-box">
          <img src="assets/img/c-1.png" alt="" />
          <div class="content-box">
            <div class="discount">
              <h3>20%</h3>
              <span>OFF</span>
            </div>
            <h4>Trà Sữa Than Tre</h4>
            <a href="#" class="cus-btn dark">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="category-box">
          <img src="assets/img/c-2.png" alt="" />
          <div class="content-box">
            <div class="discount">
              <h3>20%</h3>
              <span>OFF</span>
            </div>
            <h4>Bubble-Tea</h4>
            <a href="#" class="cus-btn dark">Buy Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="product pt-48 pb-48">
  <div class="container" data-aos="fade-up">
    <div class="heading text-center">
      <h2>Tất cả sản phẩm</h2>
    </div>
    <div class="tab-content">
      <div id="all-products" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <?php
          $show_product = $sp->show_product_limit(8);
          if ($show_product) {
            $i = 0;
            while ($result = $show_product->fetch_assoc()) {
              $i++;
          ?>
              <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="product-card">
                  <div class="showcase-box">
                    <img src="<?php echo $result['img'] ?>" alt="">
                    <div class="overlay">
                      <div class="d-flex align-items-center justify-content-center">
                        <!-- <a href="#"> -->
                        <span class="price"><?php echo $result['price'] ?> VND</span>
                        <!-- </a> -->
                      </div>
                    </div>
                  </div>
                  <a href="#" class="title"><?php echo $result['productName'] ?></a>
                  <a href="detail.php?productID=<?php echo $result['productID']?>" class="cus-btn dark">Buy Now</a>
                </div>
              </div>

          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="shop.php" class="cus-btn bordered">Xem Nhiều Hơn</a>
    </div>

  </div>
</section>



<section class="inner-banner">
  <div class="container">
    <div class="content pt-48">
      <h5>Dry Fruits</h5>
      <h2>BACK IN STOCK</h2>
      <img src="" alt="">
      <ul class="timer countdown list-unstyled">
        <li>29<small>d</small></li>
        <li>23<small>h</small></li>
        <li>50<small>m</small></li>
        <li>34<small>s</small></li>
      </ul>
    </div>
  </div>
</section>


<section class="product pt-48 pb-48">
  <div class="container" data-aos="fade-up">
    <div class="heading text-center">
      <h2>Sản phẩm nổi bật</h2>
    </div>
    <div class="tab-content">
      <div id="all-products"  data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <?php
          $show_product = $sp->show_product_limit(8);
          if ($show_product) {
            $i = 0;
            while ($result = $show_product->fetch_assoc()) {
              $i++;
          ?>
              <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="product-card">
                  <div class="showcase-box">
                    <img src="<?php echo $result['img'] ?>" alt="">
                    <div class="overlay">
                      <div class="d-flex align-items-center justify-content-center">
                        <!-- <a href="#"> -->
                        <span class="price"><?php echo $result['price'] ?> VND</span>
                        <!-- </a> -->
                      </div>
                    </div>
                  </div>
                  <a href="#" class="title"><?php echo $result['productName'] ?></a>
                  <a href="#" class="cus-btn dark">Add to cart</a>
                </div>
              </div>

          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>

  </div>
</section>


<section class="py-5 mt-5">
  <div class="container py-5"  data-aos="fade-up">
    <div class="row mb-5">
      <div class="col-md-8 col-xl-6 text-center mx-auto">
        <div class="heading text-center">
          <h2>Reviews</h2>
        </div>
        <h2 class="fw-bold"><strong>What People Say About us</strong></h2>
        <p class="text-muted">
          No matter the project, our team can handle it.&nbsp;
        </p>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 d-sm-flex justify-content-sm-center">
      <div class="col mb-4">
        <div class="d-flex flex-column align-items-center align-items-sm-start">
          <p class="bg-body-tertiary border rounded border-0 border-light p-4">
            Nisi sit justo faucibus nec ornare amet, tortor torquent.
            Blandit class dapibus, aliquet morbi.
          </p>
          <div class="d-flex">
            <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/team/avatar2.jpg" />
            <div>
              <p class="fw-bold text-primary mb-0">John Smith</p>
              <p class="text-muted mb-0">Erat netus</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="d-flex flex-column align-items-center align-items-sm-start">
          <p class="bg-body-tertiary border rounded border-0 border-light p-4">
            Nisi sit justo faucibus nec ornare amet, tortor torquent.
            Blandit class dapibus, aliquet morbi.
          </p>
          <div class="d-flex">
            <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/team/avatar4.jpg" />
            <div>
              <p class="fw-bold text-primary mb-0">John Smith</p>
              <p class="text-muted mb-0">Erat netus</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="d-flex flex-column align-items-center align-items-sm-start">
          <p class="bg-body-tertiary border rounded border-0 border-light p-4">
            Nisi sit justo faucibus nec ornare amet, tortor torquent.
            Blandit class dapibus, aliquet morbi.
          </p>
          <div class="d-flex">
            <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="assets/img/team/avatar5.jpg" />
            <div>
              <p class="fw-bold text-primary mb-0">John Smith</p>
              <p class="text-muted mb-0">Erat netus</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-8 col-xl-6 text-center mx-auto">
        <p class="fw-bold text-success mb-2">Contacts</p>
        <h2 class="fw-bold">How you can reach us</h2>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 col-xl-4">
        <div>
          <form class="p-3 p-xl-4" method="post" data-bs-theme="light">
            <div class="mb-3">
              <input class="form-control" type="text" id="name-1" name="name" placeholder="Name" />
            </div>
            <div class="mb-3">
              <input class="form-control" type="email" id="email-1" name="email" placeholder="Email" />
            </div>
            <div class="mb-3">
              <textarea class="form-control" id="message-1" name="message" rows="6" placeholder="Message"></textarea>
            </div>
            <div>
              <button class="btn btn-primary shadow d-block w-100" type="submit">
                Send
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-4 col-xl-4 d-flex justify-content-center justify-content-xl-start">
        <div class="d-flex flex-wrap flex-md-column justify-content-md-start align-items-md-start h-100">
          <div class="d-flex align-items-center p-3">
            <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
              </svg>
            </div>
            <div class="px-2">
              <h6 class="fw-bold mb-0">Phone</h6>
              <p class="text-muted mb-0">+123456789</p>
            </div>
          </div>
          <div class="d-flex align-items-center p-3">
            <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
              </svg>
            </div>
            <div class="px-2">
              <h6 class="fw-bold mb-0">Email</h6>
              <p class="text-muted mb-0">info@example.com</p>
            </div>
          </div>
          <div class="d-flex align-items-center p-3">
            <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin">
                <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354zm1.58 1.408-.002-.001.002.001m-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a4.922 4.922 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a4.915 4.915 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.775 1.775 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14c.06.1.133.191.214.271a1.78 1.78 0 0 0 .37.282"></path>
              </svg>
            </div>
            <div class="px-2">
              <h6 class="fw-bold mb-0">Location</h6>
              <p class="text-muted mb-0">12 Example Street</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-5">
  <div class="container">
    <div class="border rounded border-0 border-white d-flex flex-column justify-content-between align-items-center flex-lg-row bg-primary-gradient p-4 p-lg-5">
      <div class="text-center text-lg-start py-3 py-lg-1">
        <h2 class="fw-bold mb-2">Subscribe to our newsletter</h2>
        <p class="mb-0">Imperdiet consectetur dolor.</p>
      </div>
      <form class="d-flex justify-content-center flex-wrap flex-lg-nowrap" method="post" data-bs-theme="light">
        <div class="my-2">
          <input class="border rounded-pill shadow-sm form-control" type="email" name="email" placeholder="Your Email" />
        </div>
        <div class="my-2">
          <button class="btn btn-primary shadow ms-2" type="submit">
            Subscribe
          </button>
        </div>
      </form>
    </div>
  </div>
</section>


<?php
require 'inc/footer.php';
?>