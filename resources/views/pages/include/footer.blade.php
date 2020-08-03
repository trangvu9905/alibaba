<!-- admission section -->
<section class="admission_section ">
    <div class="container-fluid position-relative">
      <div class="row h-100">
        <div id="map" class="h-100 w-100 ">
        </div>
        <div class="container">
          <div class="admission_container position-absolute">
            <div class="admission_img-box">
              <img src="images/kidss.jpg" alt="">
            </div>
            <div class="admission_detail">
              <h3>
                Apply for Admission
              </h3>
              <p class="mt-3 mb-4">
                There are many variations of passages of Lorem Ipsum available, but the majority h
              </p>
              <div class="">
                <a href="" class="admission_btn btn_on-hover">
                  Read More
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>






  <!-- admission section -->


  <!-- landing section -->
  <section class="landing_section layout_padding">
    <div class="container">
      <h2 class="main-heading">
        Free Multipurpose Responsive

      </h2>
      <h2 class="main-heading number_heading">
        Landing Page 2019

      </h2>
      <p class="landing_detail text-center">
        There are many variations of passages of Lorem Ipsum available, but the majority There are many variations of
        passages of Lorem Ipsum available, but the majority h

      </p>
    </div>
  </section>

  <!-- end landing section -->




  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2020 All Rights Reserved By
      <a href="https://dova-vn.com/">Dova Việt Nam</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
</body>

</html>