        <!-- ========================
      Footer
    ========================== -->
        <footer class="footer">
          <div class="footer-primary">
            <div class="container">
              <div class="row">
                <div class="col-md-6 my-auto mx-auto">
                  <div class="footer-widget-about">
                    <img src="<?= base_url() ?>assets/pasien/images/RSUD JOMBANG.png" alt="" class="">
                  </div><!-- /.footer-widget__content -->
                </div><!-- /.col-xl-2 -->
                <div class="col-md-6">
                  <div class="footer-widget-contact">
                    <ul class="contact-list list-unstyled text-center">
                      <li>
                        <div class="phone__number">
                          <i class="icon-phone"></i> <span>(0321)863502</span>
                        </div>
                      </li>
                      <li>
                        <div class="phone__number">
                          <i class="fa fa-envelope" aria-hidden="true"></i> <span>rsudjombang@yahoo.co.id</span>
                        </div>
                      </li>
                      <li>
                        <div class="phone__number">
                          <i class="fa fa-map-marker" aria-hidden="true"></i><span>Jl. KH. Wahid Hasyim No.52, Jombang</span>
                        </div>
                      </li>


                    </ul>
                  </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.footer-primary -->
        </footer><!-- /.Footer -->
        <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
        </div><!-- /.wrapper -->


        <script src="<?= base_url('assets/pasien/js/plugins.js') ?>"></script>
        <script src="<?= base_url('assets/pasien/js/main.js') ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->

        <script>
          $(document).ready(function() {
            $('#exampleModalToggle').modal('show');
          });

          const flashData = $('.cek-status').data('flashdata');
          if (flashData) {
            Swal.fire({
              icon: "error",
              title: "Oops...",
              text: flashData
            });
          }
        </script>

        </body>

        </html>