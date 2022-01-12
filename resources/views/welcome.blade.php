<style>
  .right {
      position: absolute;
      right: 0px;
      width: 300px;
  }

</style>
@include('layouts/font_end/head')


<body>


    @include('layouts/font_end/headber')


    <!-- ======= Home Section ======= -->
    <section id="hero">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(back_end/images/index.jpg)">
            <div class="carousel-container">
                <div class="container">
                    <h2 class="animate__animated animate__fadeInDown">ยินดีต้อนรับสู่ <span>ร้านตามใจสโตร์</span></h2>
                    <p class="animate__animated animate__fadeInUp">เป็นร้านขายออนไลน์</p>
                    {{-- <a href="#menu" class="btn-get-started animate__animated animate__fadeInUp scrollto">Menu More</a> --}}
                </div>
            </div>
        </div>

    </section><!-- End Home -->



    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
        <div class="container" data-aos="fade-up">


            <div class="section-title">
                <h2>menu</h2>
                <p>สินค้า</p>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-xl-4 col-lg-4 col-md-8">
                            <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                <img src="{{ asset('admin/images/' . $product->image) }}" class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <br>
                                        <div class="text-center">
                                            <h4>{{ $product->name }}</h4>
                                        </div>
                                        <div class="text-center">
                                            <h6>{{ $product->price }}</h6>
                                        </div>
                                        <div class="text-center">
                                            <h6>{{ $product->detail }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                
            </div>
            <div class="right">
              {{ $products->links() }}
          </div>
        </div>
    </section><!-- End Menu Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>ติดต่อ</p>
            </div>

            <div class="row">

                <div class="col-lg-12">

                    <div class="row">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4">
                        <i class="bx bxl-facebook"></i>
                        <h3>IG</h3>
                        <p>_tamjaistore2</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Line</h3>
                        <p>@254yknmz</p>
                    </div>
                </div>
            </div>

        </div>

        </div>

        </div>
    </section><!-- End Contact Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <p>ผู้จัดทำ</p>
            </div>

            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="font_end/assets/img/team/t1.1.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>คณพัฒน์ แตงแจ้ง</h4>
                                <span>สาขาเทคโนโลยีสารสนเทศ</span>
                            </div>
                            <div class="social">
                                <a href="https://web.facebook.com/profile.php?id=100013669964877"><i
                                        class="bi bi-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6" data-wow-delay="0.1s">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <img src="font_end/assets/img/team/t2.2.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>นายฐิติพงศ์ ตั๋นอภัย</h4>
                                <span>สาขาเทคโนโลยีสารสนเทศ</span>
                            </div>
                            <div class="social">
                                <a href="https://web.facebook.com/profile.php?id=100016019322687"><i
                                        class="bi bi-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6" data-wow-delay="0.2s">
                    <div class="member" data-aos="zoom-in" data-aos-delay="300">
                        <img src="font_end/assets/img/team/t3.3.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>นายจิรัชยา พัฒนภิรมย์</h4>
                                <span>สาขาเทคโนโลยีสารสนเทศ</span>
                            </div>
                            <div class="social">
                                <a href="https://web.facebook.com/jack.chiratchaya/"><i class="bi bi-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="footer-info">
                            <h3>ติดต่อเจ้าของร้าน</h3>
                            <p class="pb-3"><em> </em></p>
                            <p>
                                <strong>Line:</strong> @254yknmz<br>
                                <strong>IG:</strong> _tamjaistore2<br>
                            </p>
                            <div class="social-links mt-3">

                            </div>
                        </div>
                    </div>


                </div>
                </section><!-- End Team Section -->

                </main><!-- End #main -->


                @include('layouts/font_end/footer')


                <div id="preloader"></div>
                <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                        class="bi bi-arrow-up-short"></i></a>

                <!-- Vendor JS Files -->
                <script src="{{ asset('/font_end/assets/vendor/aos/aos.js') }}"></script>
                <script src="{{ asset('/font_end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                <script src="{{ asset('/font_end/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
                <script src="{{ asset('/font_end/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
                <script src="{{ asset('/font_end/assets/vendor/php-email-form/validate.js') }}"></script>
                <script src="{{ asset('/font_end/assets/vendor/purecounter/purecounter.js') }}"></script>
                <script src="{{ asset('/font_end/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

                <!-- Template Main JS File -->
                <script src="{{ asset('/font_end/assets/js/main.js') }}"></script>

</body>

</html>
