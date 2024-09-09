<?php require "./components/head.php" ?>
<title>CarBooking</title>
</head>

<body id="body">
  <button type="button" class="mobile-nav-toggle" onclick="toggleMobileNav()"><i class="fa fa-bars"></i></button>
  <main id="main">
    <?php require "./components/navbar.php" ?>

    <!--Intro Section -->
    <section id="intro">
      <section id="intro">
        <div class="swiper mySwiperr">
          <div id="swiper-width-cng" class="swiper-wrapper">
            <div class="swiper-slide swiper-width-imp">
              <div id="intro-img" class="intro-imgs">
                <img class="width-auto" src="./img/c1.webp" alt="">
              </div>
            </div>
            <div class="swiper-slide swiper-width-imp">
              <div id="intro-img" class="intro-imgs">
                <img class="width-auto" src="./img/c2.webp" alt="">
              </div>
            </div>
            <div class="swiper-slide swiper-width-imp">
              <div id="intro-img" class="intro-imgs">
                <img class="width-auto" src="./img/c3.webp" alt="">
              </div>
            </div>
            <div class="swiper-slide swiper-width-imp">
              <div id="intro-img" class="intro-imgs">
                <img class="width-auto" src="./img/c1.webp" alt="">
              </div>
            </div>
            <div class="swiper-slide swiper-width-imp">
              <div id="intro-img" class="intro-imgs">
                <img class="width-auto" src="./img/c2.webp" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div><!-- #intro -->
      </section>
      <!-- #intro -->
    </section>

    <!--about Section-->
    <section id="booking" class="booking hotelbook">
      <div class="container">
        <div class="hotel-details">
          <div class="hotel-info">
            <div class="flex-hotel-head">
              <div class="hotel-header">
                <h2>Bolero</h2>
                <p class="location">K block, Tagore Park Kasba, Kolkata</p>
              </div>
              <div class="rating-box">
                <div class="rating-score">
                  4.4 <i class="fas fa-star"></i>
                </div>
                <div class="rating-count">
                  388 Ratings
                </div>
              </div>
            </div>
          </div>
          <div class="hotel-tags">
            <span class="tag">Mid range</span>
            <span class="tag wizard-member">WIZARD MEMBER</span>
            <span class="tag checkin-rating">5.0 • Check-in rating </span>
          </div>
          <div class="company-service">
            <span><i class="fas fa-heart"></i> Company Serviced</span>
          </div>

          <div class="amenities">
            <h3>Amenities</h3>
            <ul class="category-hotel">
              <li class="width-ameni"><i class="fas fa-snowflake"></i> AC</li>
              <li class="width-ameni"><i class="fa-regular fa-sun"></i> Non Ac</li>
              <li class="width-ameni"><i class="fas fa-wifi"></i> Free Wifi</li>
              <li class="width-ameni"><i class="fas fa-parking"></i> Parking facility</li>
            </ul>
          </div>
        </div>
        <div class="book-details">
          <div class="price-section">
            <div class="price-hotel">
              ₹ 598 <span class="original-price">₹321</span> <span class="discount">81% off</span>
            </div>
            <div class="taxes-fees">+ taxes & fees: ₹108</div>
          </div>

          <form class="row booking-details mb-3">
            <div class="col-md-4 form-group">
              <label for="destinationtype" class="form-label">Destination Type</label>
              <select class="form-control" id="destinationtype" name="destinationtype" required>
                <option value="Custom">Custom</option>
                <option value="Service Provider">Service Provider</option>
              </select>
            </div>
            <div class="col-md-4 form-group" id="pickupContainer">
              <!-- Dynamic input or select box for pickup location -->
              <label for="pickup" class="form-label">Pickup Location</label>
              <select class="form-control" id="pickup" name="pickup" disabled>
              </select>
            </div>
            <div class="col-md-4 form-group" id="dropContainer">
              <!-- Dynamic input or select box for drop location -->
              <label for="drop" class="form-label">Drop Location</label>
              <select class="form-control" id="drop" name="drop" disabled>
              </select>
            </div>
            <div class="col-md-4 form-group">
              <label for="acs" class="form-label">Ac or Non-Ac</label>
              <select class="form-control" id="acs" name="acs" require>
                <option value="">Ac</option>
                <option value="">Non-Ac</option>
              </select>
            </div>
            <div class="col-md-4 form-group">
              <label for="checkIn" class="form-label">Select Date To</label>
              <input type="date" class="form-control" id="checkIn" placeholder="Date" name="checkIn" require>
            </div>
            <div class="col-md-4 form-group">
              <label for="checkOut" class="form-label">Select Date Form</label>
              <input type="date" class="form-control" id="checkOut" placeholder="Date" name="checkOut">
            </div>
            <div class="col-md-4 form-group">
              <label for="adult" class="form-label">Person</label>
              <div class="counter-container">
                <div class="form-control grp-ad">
                  <input type="number" id="adult" name="adult" value="0" min="0" readonly>
                  <div class="button-person">
                    <button type="button" id="adultMinus" class="btn btn-success">-</button>
                    <button type="button" id="adultPlus" class="btn btn-danger">+</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <div class="savings-section px-4">
            <div class="savings-label">Your savings</div>
            <div class="savings-amount">₹160</div>
          </div>
          <div class="savings-section px-4">
            <div class="savings-label">Total Price <br>
              <div class="taxes-included">Including taxes & fees</div>
            </div>
            <div class="savings-amount">₹700</div>
          </div>
          <div class="booking-system mt-4">
            <button class="continue-booking">
              <a href="#!">
                Negotiate 
              </a></button>
            <button class="continue-booking">
              <a href="#!">
                Continue to Book
              </a></button>
          </div>
        </div>

      </div>
    </section><!-- #about -->

  </main>
  <?php require "./components/footer.php" ?>
  <script>
     document.addEventListener("DOMContentLoaded", function () {
      const checkInInput = document.getElementById('checkIn');
      const checkOutInput = document.getElementById('checkOut');

      // Set the minimum date for check-in as today
      const today = new Date().toISOString().split('T')[0];
      checkInInput.setAttribute('min', today);

      // Set the minimum date for check-out based on the selected check-in date
      checkInInput.addEventListener('change', function () {
        checkOutInput.value = "";  // Clear the check-out date
        checkOutInput.setAttribute('min', this.value);
      });

      checkOutInput.addEventListener('change', function () {
        if (checkOutInput.value <= checkInInput.value) {
          alert('Please Enter a Valid Date');
          checkOutInput.value = "";  // Clear the invalid check-out date
        }
      });
    });

    document.addEventListener("DOMContentLoaded", function () {
      const destinationTypeSelect = document.getElementById('destinationtype');
      const pickupContainer = document.getElementById('pickupContainer');
      const dropContainer = document.getElementById('dropContainer');

      // Initialize with default state based on selected destination type
      updateLocationInputs(destinationTypeSelect.value);

      // Event listener for when the destination type changes
      destinationTypeSelect.addEventListener('change', function () {
        updateLocationInputs(this.value);
      });

      function updateLocationInputs(destinationType) {
        if (destinationType === "Custom") {
          // Custom: Change to text input fields for custom locations
          pickupContainer.innerHTML = `
                        <label for="pickup" class="form-label">Pickup Location</label>
                        <input type="text" class="form-control" id="pickup" name="pickup" placeholder="Enter Pickup Location" required>
                    `;
          dropContainer.innerHTML = `
                        <label for="drop" class="form-label">Drop Location</label>
                        <input type="text" class="form-control" id="drop" name="drop" placeholder="Enter Drop Location" required>
                    `;
        } else if (destinationType === "Service Provider") {
          // Service Provider: Predefined select options for locations
          pickupContainer.innerHTML = `
                        <label for="pickup" class="form-label">Pickup Location</label>
                        <select class="form-control" id="pickup" name="pickup" required>
                            <option value="sealdah">Sealdah Railway Station</option>
                            <option value="howrah">Howrah Railway Station</option>
                        </select>
                    `;
          dropContainer.innerHTML = `
                        <label for="drop" class="form-label">Drop Location</label>
                        <select class="form-control" id="drop" name="drop" required>
                        <option value="howrah">Howrah Railway Station</option>
                        <option value="sealdah">Sealdah Railway Station</option>
                        </select>
                    `;
        }
      }
    });
    document.addEventListener("DOMContentLoaded", function () {
      const adultInput = document.getElementById('adult');
      const childInput = document.getElementById('child');

      document.getElementById('adultPlus').addEventListener('click', function () {
        adultInput.value = parseInt(adultInput.value) + 1;
      });

      document.getElementById('adultMinus').addEventListener('click', function () {
        if (adultInput.value > 0) {
          adultInput.value = parseInt(adultInput.value) - 1;
        }
      });

      document.getElementById('childPlus').addEventListener('click', function () {
        childInput.value = parseInt(childInput.value) + 1;
      });

      document.getElementById('childMinus').addEventListener('click', function () {
        if (childInput.value > 0) {
          childInput.value = parseInt(childInput.value) - 1;
        }
      });
    });
  </script>
</body>

</html>