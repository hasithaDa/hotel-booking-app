<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php') ?>
    <title><?php echo $settings_r['site_title'] ?> - HOME</title>
    <style>
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availability-form{
            margin-top: 0px;
            padding: 0 35px;
            }
        }

    </style>
</head>
<body class="bg-light">

    
<?php require('inc/header.php') ?>

  <div class="container-fluid px-lg-4 mt-4">
    <!-- Swiper -->
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
            <?php 
            $res = selectAll('carousel');
            while($row = mysqli_fetch_assoc($res)){
                $path = CAROUSEL_IMG_PATH;
                echo <<<data
                <div class="swiper-slide">
                    <img src="$path$row[image]" class="w-100 d-block" />
                </div>  
             data;
            }
            ?>
      </div>
   </div>
 </div>

  <!-- Checking Availability -->

  <div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Checking Booking Availability</h5>
            <form action="">
                <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight:500;">Check-in</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight:500;">Check-out</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight:500;">Adult</label>
                    <select class="form-select shadow-none">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    </div>
                    <div class="col-lg-2 mb-3">
                    <label class="form-label" style="font-weight:500;">Children</label>
                    <select class="form-select shadow-none">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    </div>
                    <div class="col-lg-1 mb-lg-3 mt-2">
                        <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>

  <!-- Our Rooms -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>       

  <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/Rooms/IMG_1.jpg" class="card-img-top">

                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₨ 2000 Per Night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Fetures</h6>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 2 Room </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 1 Bathroom </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 1 Balcony </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 3 Sofa </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Fetures</h6>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> Wifi </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> Television </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> AC </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> Hot Water </span>
                    </div>
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 2 Adults </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 4 Childrens </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Ratings</h6> 
                        <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        </span>  
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                <img src="images/Rooms/IMG_2.png" class="card-img-top">

                <div class="card-body">
                    <h5>Simple Room Name</h5>
                    <h6 class="mb-4">₨ 2000 Per Night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Fetures</h6>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 2 Room </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 1 Bathroom </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 1 Balcony </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 3 Sofa </span>
                    </div>
                    <div class="facilities mb-4">
                    <h6 class="mb-1">Fetures</h6>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> Wifi </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> Television </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> AC </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> Hot Water </span>
                    </div>
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 2 Adults </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 4 Childrens </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Ratings</h6> 
                        <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        </span>  
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                <img src="images/Rooms/IMG_3.png" class="card-img-top">

                <div class="card-body">
                    <h5>Simple Room Name</h5>
                    <h6 class="mb-4">₨ 2000 Per Night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Fetures</h6>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 2 Room </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 1 Bathroom </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 1 Balcony </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 3 Sofa </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Fetures</h6>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> Wifi </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> Television </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> AC </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> Hot Water </span>
                    </div>
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 2 Adults </span>
                        <span class="badge rounded-pill text-bg-light text-dark text-wrap"> 4 Childrens </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Ratings</h6> 
                        <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        </span>  
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-outline-dark roundard fw-bold shadow-none">More Rooms >>></a>
        </div>
    </div>
  </div>

  <!-- Our Facilities -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="images/facilities/IMG_41622.svg" width="80px">
            <h5 class="mt-3">TV</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="images/facilities/IMG_43553.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="images/facilities/IMG_47816.svg" width="80px">
            <h5 class="mt-3">SPA</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="images/facilities/IMG_49949.svg" width="80px">
            <h5 class="mt-3">AC</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="images/facilities/IMG_96423.svg" width="80px">
            <h5 class="mt-3">OWEN</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-outline-dark roundard fw-bold shadow-none">More Facilities >>></a>
        </div>
    </div>
  </div>

  <!-- Testimonials -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>

  <div class="container mt-5">
    <!-- Swiper -->
    <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">

            <div class="swiper-slide bg-white p-4">
                 <div class="profile d-flex align-items-center mb-3">
                    <i class="bi bi-star-fill"></i>
                    <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Deleniti, adipisci, in ullam perferendis, velit possimus qui quaerat necessitatibus
                    quibusdam a illum dolorum aliquid ratione odit. Nulla laboriosam tempora magnam iure!
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
            <div class="swiper-slide bg-white p-4">
                 <div class="profile d-flex align-items-center mb-3">
                    <i class="bi bi-star-fill"></i>
                    <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Deleniti, adipisci, in ullam perferendis, velit possimus qui quaerat necessitatibus
                    quibusdam a illum dolorum aliquid ratione odit. Nulla laboriosam tempora magnam iure!
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
            <div class="swiper-slide bg-white p-4">
                 <div class="profile d-flex align-items-center mb-3">
                    <i class="bi bi-star-fill"></i>
                    <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Deleniti, adipisci, in ullam perferendis, velit possimus qui quaerat necessitatibus
                    quibusdam a illum dolorum aliquid ratione odit. Nulla laboriosam tempora magnam iure!
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
            <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-3">
                    <i class="bi bi-star-fill"></i>
                    <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Deleniti, adipisci, in ullam perferendis, velit possimus qui quaerat necessitatibus
                    quibusdam a illum dolorum aliquid ratione odit. Nulla laboriosam tempora magnam iure!
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
            <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center p-4">
                    <i class="bi bi-star-fill"></i>
                    <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Deleniti, adipisci, in ullam perferendis, velit possimus qui quaerat necessitatibus
                    quibusdam a illum dolorum aliquid ratione odit. Nulla laboriosam tempora magnam iure!
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- Rech Us -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

  <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100 rounded" src="<?php echo $contact_r['iframe'] ?>" height="320px" loading="lazy"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
                <h5>Call Us</h5>
                <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1'] ?>
                </a>
                <br>
                <?php 
                    if($contact_r['pn2'] != ''){
                        echo<<<data
                            <a href="tel: +$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]
                            </a>
                        data;    
                    }
                ?>
                
            </div>
            <div class="bg-white p-4 rounded mb-4">
                <h5>Follow Us</h5>
                <?php 
                    if($contact_r['tw']!=''){
                        echo<<<data
                            <a href="$contact_r[tw]" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-twitter me-1"></i>Twitter
                            </span>
                            </a>
                            <br>
                        data;
                    }
                ?>
                
                <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook me-1"></i>Facebook
                    </span>
                </a>
                <br>
                <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-instagram me-1"></i>Instagram
                    </span>
                </a>   
            </div>
        </div>
    </div>
  </div>

  <!-- Password Reset modal code -->
  <div class="modal fade" id="recoveryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="recovery-form">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                    <i class="bi bi-shield-lock fs-3 me-2"></i>Set up New Password
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="mb-4">
                        <label class="form-label">New Password</label>
                        <input type="password" name="pass" required class="form-control shadow-none">
                        <input type="hidden" name="email">
                        <input type="hidden" name="token">
                    </div>
                    <div class="mb-2 text-end">
                        <button type="button" class="btn shadow-none p-0 me-2" data-bs-dismiss="modal">
                            CANCEL
                        </button>
                        <button type="submit"class="btn btn-dark shadow-none">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

  <?php require('inc/footer.php') ?>

  <?php 

if (isset($_GET['account_recovery'])) {
    $data = filteration($_GET);

    $t_data = date("Y-m-d");

    $query = select("SELECT * FROM `user_cred` WHERE `email`=? AND `token`=? AND `t_expire`=? LIMIT 1", [$data['email'], $data['token'], $t_data], 'sss');

    if (mysqli_num_rows($query) == 1) {
        echo <<<showModal
<script>
    var myModal = document.getElementById('recoveryModal');

    myModal.querySelector("input[name='email']").value = '{$data['email']}';
    myModal.querySelector("input[name='token']").value = '{$data['token']}';

    var modal = bootstrap.Modal.getOrCreateInstance(myModal);
    modal.show();
</script>
showModal;
    } else {
        alert("error", "Invalid or Expired Link!");
    }
}


 
 
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay:{
            delay: 1800,
            disableOnInteraction: false,  
        }
        });

        var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "3",
        spaceBetween: 50,
        loop: true,
        autoplay:{
            delay: 1800,
            disableOnInteraction: false,  
        },
        coverflowEffect: {
            rotate: 0,
            stretch:0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints:{
            320:{
                slidesPerView: 1,
            },
            640:{
                slidesPerView: 1,
            },
            768:{
                slidesPerView: 2,
            },
            1024:{
                slidesPerView: 3,
            },
        }
        });

    </script>
</body>
</html>