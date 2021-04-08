<template>
  <div>
    <Navbar />
    <main id="page-container">
      <div id="content-wrap">
        <!-- section 1 -->
        <div class="home-banner position-relative">
          <div class="container mt-5 mb-5">
            <div class="text-center mx-auto col-lg-8 col-md-12">
              <div
                id="carouselBanner"
                class="carousel slide"
                data-ride="carousel"
                data-interval="5000"
              >
                <ol class="carousel-indicators">
                  <li
                    data-target="#carouselBanner"
                    data-slide-to="0"
                    class="active"
                  ></li>
                  <li data-target="#carouselBanner" data-slide-to="1"></li>
                  <li data-target="#carouselBanner" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="py-5 mb-5">
                      <div class="row">
                        <div
                          class="col-md-5 d-flex justify-content-center align-items-center"
                        >
                          <button
                            class="btn btn-warning text-white rounded-pill py-5 mt-4 mb-4 custom-button"
                          >
                            <i class="fas fa-donate fa-3x"></i>
                            <h5 class="mt-3">what is title</h5>
                          </button>
                        </div>
                        <div class="col-md-7">
                          <p
                            class="text-white text-justify custom-font-size mb-4"
                          >
                            what is definition
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="py-5 mb-5">
                      <div class="row">
                        <div
                          class="col-md-5 d-flex justify-content-center align-items-center"
                        >
                          <a
                            class="btn btn-danger text-white rounded-pill py-5 mt-4 mb-4 custom-button"
                          >
                            <i class="fas fa-cogs fa-3x"></i>
                            <h5 class="mt-3">how work title</h5>
                          </a>
                        </div>
                        <div class="col-md-7">
                          <p
                            class="text-white text-justify custom-font-size mb-4"
                          >
                            how work definition
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="py-5 mb-5">
                      <div class="row">
                        <div
                          class="col-md-5 d-flex justify-content-center align-items-center"
                        >
                          <a
                            class="btn btn-primary text-white rounded-pill py-5 mt-4 mb-4 custom-button"
                          >
                            <i class="fas fa-users fa-3x"></i>
                            <h5 class="mt-3">members title</h5>
                          </a>
                        </div>
                        <div class="col-md-7">
                          <p
                            class="text-white text-justify custom-font-size mb-4"
                          >
                            members definition
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- {{ $page.props.user }} -->
      </div>
    </main>
  </div>
</template>

<script>
import Navbar from "@/Layouts/Navbar";
export default {
  components: { Navbar },
};
</script>