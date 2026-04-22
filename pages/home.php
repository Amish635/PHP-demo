<?php

$nSql="SELECT * FROM news";
$newsData = mysqli_query($conn,$nSql);



?>

<div class="top-news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 tn-left">
                <div class="tn-img">
                    <img src="https://demo.htmlcodex.com/456/news-website-templates/img/top-news-1.jpg" alt="">
                    <div class="tn-content">
                        <div class="tn-content-inner">
                            <a class="tn-date" href="">05-11-2023</a>
                            <a class="tn-title" href="">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                            <a class="tn-link" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-md-6 tn-right">
            <div class="row">
                <div class="col-md-6">
                    <div class="tn-img">
                        <img src="https://demo.htmlcodex.com/456/news-website-templates/img/top-news-2.jpg" alt="">
                        <div class="tn-content">
                            <div class="tn-content-inner">
                                <a class="tn-date" href="">05-11-2023</a>
                            <a class="tn-title" href="">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tn-img">
                        <img src="https://demo.htmlcodex.com/456/news-website-templates/img/top-news-3.jpg" alt="">
                        <div class="tn-content">
                            <div class="tn-content-inner">
                                <a class="tn-date" href="">05-11-2023</a>
                            <a class="tn-title" href="">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tn-img">
                        <img src="https://demo.htmlcodex.com/456/news-website-templates/img/top-news-4.jpg" alt="">
                        <div class="tn-content">
                            <div class="tn-content-inner">
                                <a class="tn-date" href="">05-11-2023</a>
                            <a class="tn-title" href="">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tn-img">
                        <img src="https://demo.htmlcodex.com/456/news-website-templates/img/top-news-5.jpg" alt="">
                        <div class="tn-content">
                            <div class="tn-content-inner">
                                <a class="tn-date" href="">05-11-2023</a>
                            <a class="tn-title" href="">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                            </div>
                        </div>
                    </div>
                </div>
                
        </div>


            
        </div>
    </div>
</div>


<div class="categories py-4">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="category-item">
          <i class="bi bi-trophy fs-3"></i>
          <h5>Sports</h5>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="category-item">
          <i class="bi bi-laptop fs-3"></i>
          <h5>Technology</h5>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="category-item">
          <i class="bi bi-briefcase fs-3"></i>
          <h5>Business</h5>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="category-item">
          <i class="bi bi-film fs-3"></i>
          <h5>Entertainment</h5>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="category-item">
          <i class="bi bi-globe fs-3"></i>
          <h5>World</h5>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="category-item">
          <i class="bi bi-heart-pulse fs-3"></i>
          <h5>Health</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container py-5 latest-news">

  <!-- First Row: Sports and Technology -->
  <div class="row">
    <div class="col-md-6 n-card">
      <h4><i class="bi bi-list"></i> Sports</h4>
      <div class="row g-3">
        <div class="col-md-6">
          <div class="card bg-dark text-white">
            <img src="https://demo.htmlcodex.com/456/news-website-templates/img/top-news-1.jpg" class="card-img" alt="">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <small><i class="bi bi-clock"></i> 05-Feb-2020</small>
              <h6>Cras sed semper puru vitae lobortis velit</h6>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card bg-dark text-white">
            <img src="https://demo.htmlcodex.com/456/news-website-templates/img/top-news-2.jpg" class="card-img" alt="">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <small><i class="bi bi-clock"></i> 05-Feb-2020</small>
              <h6>Vestibulum ante ipsum primis</h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 n-card">
      <h4><i class="bi bi-list"></i> Technology</h4>
      <div class="row g-3">
        <div class="col-md-6">
          <div class="card bg-dark text-white">
            <img src="https://demo.htmlcodex.com/456/news-website-templates/img/top-news-3.jpg" class="card-img" alt="">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <small><i class="bi bi-clock"></i> 05-Feb-2020</small>
              <h6>Vivamus vel felis nec magna</h6>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card bg-dark text-white">
            <img src="https://demo.htmlcodex.com/456/news-website-templates/img/top-news-3.jpg" class="card-img" alt="">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <small><i class="bi bi-clock"></i> 05-Feb-2020</small>
              <h6>Phasellus vitae fermentum est</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Second Row: Business and Entertainment -->
  <div class="row mt-5">
    <div class="col-md-6 n-card">
      <h4><i class="bi bi-list"></i> Business</h4>
      <div class="row g-3">
        <div class="col-md-6">
          <div class="card bg-dark text-white">
            <img src="https://demo.htmlcodex.com/456/news-website-templates/img/top-news-3.jpg" class="card-img" alt="">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <small><i class="bi bi-clock"></i> 05-Feb-2020</small>
              <h6>Interdum et malesuada fames ac ante</h6>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card bg-dark text-white">
            <img src="https://demo.htmlcodex.com/456/news-website-templates/img/top-news-3.jpg" class="card-img" alt="">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <small><i class="bi bi-clock"></i> 05-Feb-2020</small>
              <h6>Mauris non ligula eget ante sagittis</h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 n-card">
      <h4><i class="bi bi-list"></i> Entertainment</h4>
      <div class="row g-3">
        <div class="col-md-6">
          <div class="card bg-dark text-white">
            <img src="https://demo.htmlcodex.com/456/news-website-templates/img/top-news-3.jpg" class="card-img" alt="">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <small><i class="bi bi-clock"></i> 05-Feb-2020</small>
              <h6>Ut laoreet justo non ornare</h6>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card bg-dark text-white">
            <img src="https://demo.htmlcodex.com/456/news-website-templates/img/top-news-3.jpg" class="card-img" alt="">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <small><i class="bi bi-clock"></i> 05-Feb-2020</small>
              <h6>Proin a nulla ut enim feugiat</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>