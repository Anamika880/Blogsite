  <!-- Footer section start-->
  <footer class="contact">
      <!-- Gradient -->
      <div class="gradient"></div>
      <!-- container Start-->
      <div class="container">
          <div class="row" data-aos="fade-up" data-aos-duration="400">
              
              <div class="col-lg-1 col-md-12 col-12"></div>
              <div class="col-lg-5 col-md-12 col-12 columns-2">
                  <h2>Quick Contact</h2>
                      <div class="col-md-6 form-group">
                          <input type="text" name="name" class="form-control" placeholder="Your Name" required />
                      </div>
                      <div class="col-md-6 form-group">
                          <input type="number" name="mobile" class="form-control" placeholder="Your Mobile No." required />
                      </div>
                      <div class="col-md-12 form-group">
                          <input type="email" name="email" class="form-control" placeholder="Your Email" required />
                      </div>
                      <div class="col-md-12 form-group">
                          <textarea class="form-control" name="message" placeholder="Message" rows="5" cols="70" required></textarea>
                      </div>
                      <div class="col-md-12">
                          <button type="button" class="btn btn-primary">Submit</button>
                      </div>
              </div>
          </div>
      </div>
      <!-- container Ended-->
      <div class="copyright">
          <div class="container">
              <div class="row border-img">
                  <div class="col-md-12">
                      <img src="{{asset('frontend/images/border.png')}}" alt="">
                  </div>
              </div>
          </div>
          <div class="container">
              <div class="row" data-aos="fade-up" data-aos-duration="400">
                  <div class="col-lg-3 col-md-12">
                      <!-- <a href="/"><img src="{{asset('frontend/images/footer-logo-bg.png')}}" alt="logo"></a> -->
                  </div>
                  <div class="col-lg-9 col-md-12 right-part">
                      <ul class="ml-auto">
                         
                          <li class="nav-item"><a class="nav-link" href="">Privacy Policy</a></li>
                          <li><a class="hidden-xs">~</a></li>
                          <li class="nav-item"><a class="nav-link" href="">Terms & Conditions</a></li>
                          <li><a class="hidden-xs">~</a></li>
                          <li class="nav-item"><a class="nav-link" href="">Return & Refund</a></li>
                      </ul>
                      <p> (C) <script>
                              document.write(new Date().getFullYear())
                          </script> All Rights Reserved.</p>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- Footer section Ended-->
  <!-- Return to Top -->
  <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Custom JavaScript -->
  <script src="{{asset('frontend/js/animate.js')}}"></script>
  <script src="{{asset('frontend/js/custom.js')}}"></script>
  <script src="{{ asset('toastr/toastr.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script>
      $(document).ready(function() {
          if ("{{ !empty(session('success')) }}") {
              successMsg("{{ session('success') }}")
          }
          if ("{{ !empty(session('error')) }}") {
              errorMsg("{{ session('error') }}")
          }
      })
  </script>
  </body>

  </html>