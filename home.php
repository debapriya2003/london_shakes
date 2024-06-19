<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LONDON SHAKES</title>
    <meta content="width=device-width,initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
<style>
    .box:hover {
        background-color: yellow;
    }
</style>
    <!-- Template Stylesheet -->
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> -->

   <!-- custom css file link  -->
   
</head>





<body>

<?php include 'components/user_header.php'; ?>



<section class="hero">

   
    <div class="swiper hero-slider">

      <div class="swiper-wrapper">

         <div   style="  background-image: url(img/baground.png);"      class="swiper-slide slide">
            <div class="content">
               <span  style="color: #f0f0f0;"  >order online</span>
               <h3  style="color: #ffd700;"  >Chocklate Waffle Icecream</h3>
               <a href="menu.php" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="img/a-scrumptious-top-down-view-of-a-luscious-vanilla--BbWDea4vSrWsO8Y1ToIrAA-SktswjIZS36S1hhEiTiEyQ-removebg-preview.png" alt="">
            </div>
         </div>

         <div   style="  background-image: url(img/baground.png);"     class="swiper-slide slide">
            <div class="content">
               <span  style="color: #f0f0f0;"   >order online</span>
               <h3  style="color: #ffd700;"     >chezzy Tangy Nachos </h3>
               <a href="menu.php" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="img/a-tantalizing-top-down-image-of-a-mouthwatering-na-lzfr1r0RSXuDIjGm9znTcQ-aAMTt6B2SwyfvOh10j_--A-removebg-preview (1).png" alt="">
            </div>
         </div>

         <div   style="  background-image: url(img/baground.png);"     class="swiper-slide slide">
            <div class="content">
            <span  style="color: #f0f0f0;"   >order online</span>
               <h3  style="color: #ffd700;"      >Juicy White Sauce Pasta</h3>
               <a href="menu.php" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="img/a-mouthwatering-top-down-view-of-a-delicious-white-hB75Qcx5RcaFb329afjnJA-Yr3T24OsS9eSu4rUnAT-GQ-removebg-preview.png" alt="">
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>
   </div>

</section>
<div class="container-xxl bg-white p-0">
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Good Staff</h5>
                                <p>Dedicated and Friendly Team
                                    At London Shakes, our staff is our family. Each member is committed to providing you with exceptional service and a warm, welcoming atmosphere. Our team is trained to ensure your experience is delightful from the moment you walk in until your last sip.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>Fresh Ingredients, Incredible Taste
                                    Quality is at the heart of everything we do. We source only the freshest ingredients to craft our shakes, ensuring every sip is a burst of flavor. Our commitment to excellence means you can always expect delicious, high-quality shakes at London Shakes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Order</h5>
                                <p>Enjoy the deliciousness of London Shakes from the comfort of your home. Our easy-to-use online ordering system ensures you can get your favorite shakes delivered right to your doorstep quickly and conveniently. Just a few clicks, and your shake is on its way!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>Shakes Anytime, Anywhere
                                    Craving a shake at midnight or early in the morning? No problem! London Shakes offers 24/7 service to satisfy your cravings at any hour. We're here to serve you delicious shakes around the clock, so you never have to wait to indulge.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-200 wow zoomIn" data-wow-delay="0.1s" src="img/2021-02-03 (1).jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-150 wow zoomIn" data-wow-delay="0.3s" src="img/2021-02-03.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-150 wow zoomIn" data-wow-delay="0.5s" src="img/2021-02-03.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-200 wow zoomIn" data-wow-delay="0.7s" src="img/unnamed.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>London Shakes</h1>
                        <p class="mb-4">Experience the magic of London in every sip at London Shakes. Our menu features classic favorites and innovative creations, all made to perfection just for you.</p>
                        <p class="mb-4">Welcome to London Shakes, where every sip tells a story. Our mission is to bring you the best shakes in town, crafted with love and the finest ingredients. Whether you're looking for a classic flavor or something adventurous, we’ve got you covered. Come and experience the taste of London in every cup!</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">4</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">5000  </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">And More</p>
                                        <h6 class="text-uppercase mb-0">Customers Served</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a class="btn btn-primary py-3 px-5 mt-2" href=""></a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-bold">Testimonial</h5>
                    <h1 class="mb-5">Our Customers Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <h4>Love it so much the food was fantastic
                            The staff was good
                            I love to go there and hang out with my friends</h4>
                        <div class="d-flex align-items-center">
                            <!-- <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div> -->
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <h4>THE MANNER OF WAITER TOWARDS YOU IS SO WELL, I AM IN LOVE WITH CHOCO LOVE 😍 HERE❤️</h4>
                        <div class="d-flex align-items-center">
                            <!-- <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1"></h5>
                                <small>Profession</small>
                            </div> -->
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <h4>Probably one of the best and affordable cafe in silchar.</h4>
                        <div class="d-flex align-items-center">
                            <!-- <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small>
                            </div> -->
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <h4>Cozy ambience and very clean. The staff are very friendly. Quality of the shakes are very good. Also the prices are very reasonable. Overall a very good experience and highly recommended.</h4>
                        <div class="d-flex align-items-center">
                            <!-- <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Client Name</h5>
                                <small>Profession</small> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
    
        <section class="category" style="background-color: #f8f8f8; padding: 20px 0; text-align: center; transition: background-color 0.5s ease-in-out;">
    <h1 class="title" style="font-size: 24px; color: #333; margin-bottom: 20px; transition: color 0.5s ease-in-out;">Food Category</h1>
    <div class="box-container" style="display: flex; justify-content: center; flex-wrap: wrap;">
        <a href="category.php?category=fast food" class="BOX" style="margin: 10px; text-decoration: none; color: #333; box-shadow: 0 0 10px rgba(0,0,0,0.2); transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; background-color: white; display: inline-block; padding: 20px; border-radius: 10px; overflow: hidden;">
            <img src="images/cat-1.png" alt="" style="max-width: 100px; height: 100px; transition: transform 0.3s ease-in-out;">
            <h3 style="font-size: 16px;color:black; margin: 10px 0; transition: color 0.3s ease-in-out;">Fast Food</h3>
        </a>
        <a href="category.php?category=main dish" class="BOX" style="margin: 10px; text-decoration: none; color: #333; box-shadow: 0 0 10px rgba(0,0,0,0.2); transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; background-color: white; display: inline-block; padding: 20px; border-radius: 10px; overflow: hidden;">
            <img src="images/cat-2.png" alt="" style="max-width: 100px; height: 100px; transition: transform 0.3s ease-in-out;">
            <h3 style="font-size: 16px;color:black ;margin: 10px 0; transition: color 0.3s ease-in-out;">Main Dishes</h3>
        </a>
        <a href="category.php?category=drinks" class="BOX" style="margin: 10px; text-decoration: none; color: #333; box-shadow: 0 0 10px rgba(0,0,0,0.2); transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; background-color: white; display: inline-block; padding: 20px; border-radius: 10px; overflow: hidden;">
            <img src="images/cat-3.png" alt="" style="max-width: 100px; height: 100px; transition: transform 0.3s ease-in-out;">
            <h3 style="font-size: 16px; color:black; margin: 10px 0; transition: color 0.3s ease-in-out;">Drinks</h3>
        </a>
        <a href="category.php?category=desserts" class="BOX" style="margin: 10px; text-decoration: none; color: #333; box-shadow: 0 0 10px rgba(0,0,0,0.2); transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; background-color: white; display: inline-block; padding: 20px; border-radius: 10px; overflow: hidden;">
            <img src="images/cat-4.png" alt="" style="max-width: 100px;   color:black; height: 100px; transition: transform 0.3s ease-in-out;">
            <h3 style="font-size: 16px; color:black;margin: 10px 0; transition: color 0.3s ease-in-out;">Desserts</h3>
        </a>
    </div>
</section>

<style>
    .box:hover {
        background-color: #ffd700;
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }
    .BOX:hover {
        background-color: #ffd700;
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    .box:hover img {
        transform: scale(0.85);
    }
    .BOX:hover img {
        transform: scale(0.85);
    }


    .box:hover h3 {
        color: #333;
    }

    section.category:hover {
        background-color: #f0f0f0;
    }

    section.category:hover h1.title {
        color: #ffd700;
    }
</style>

<!-- <style>
    .box:hover {
        background-color: black;
    }
</style> -->
<!-- Team Start -->
<div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="section-title ff-secondary text-center text-primary fw-normal">Best on the table</h2>
                    <h1 class="mb-5">Our Most Special </h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/a-delectable-and-refreshing-image-of-a-green-apple-zo3HTzqWS8OKIWfKTfB2Qg-R3RWFYztQjq24MUZkp_BpA-removebg-preview.png" alt="">
                            </div>
                            <h5 class="mb-0">Green Apple Mojito</h5>
                            <small>The Delicacy</small>
                            <div class="d-flex justify-content-center mt-3">
                                <!-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/a-delectable-top-down-view-of-a-gourmet-red-sauce--MluJ8I7SQpSZOHMqWD1I8A-fcOzcoksRiaOUk8bKr70Fw-removebg-preview.png" alt="">
                            </div>
                            <h5 class="mb-0">Red Sauce Spaghetti</h5>
                            <small>Finger Licking Good</small>
                            <div class="d-flex justify-content-center mt-3">
                                <!-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/a-mouthwatering-top-down-view-of-a-delicious-white-hB75Qcx5RcaFb329afjnJA-Yr3T24OsS9eSu4rUnAT-GQ-removebg-preview.png" alt="">
                            </div>
                            <h5 class="mb-0">White Sauce Pasta</h5>
                            <small>The Music to Tongue</small>
                            <div class="d-flex justify-content-center mt-3">
                                <!-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/a-scrumptious-top-down-view-of-a-luscious-vanilla--BbWDea4vSrWsO8Y1ToIrAA-SktswjIZS36S1hhEiTiEyQ-removebg-preview.png" alt="">
                            </div>
                            <h5 class="mb-0">Chocklate Waffle Icecream </h5>
                            <small>Designation</small>
                            <div class="d-flex justify-content-center mt-3">
                                <!-- <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->



                            <section class="products">

                            <h1 class="title">latest dishes</h1>

                            <div class="box-container">

                                <?php
                                    $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
                                    $select_products->execute();
                                    if($select_products->rowCount() > 0){
                                        while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
                                ?>
                                <form action="" method="post" class="box">
                                    <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
                                    <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
                                    <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
                                    <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
                                    <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
                                    <button  href="components/add_cart.php"   type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                                    <img src="project-images/<?= $fetch_products['image']; ?>" alt="">
                                    <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
                                    <div class="name"><?= $fetch_products['name']; ?></div>
                                    <div class="flex">
                                        <div class="price"><span>Rupees </span><?= $fetch_products['price']; ?></div>
                                        <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
                                    </div>
                                </form>
                                <?php
                                        }
                                    }else{
                                        echo '<p class="empty">no products added yet!</p>';
                                    }
                                ?>

                            </div>

                            <div class="more-btn">
                                <a href="menu.php" class="btn">veiw all</a>
                            </div>

                            </section>

</div>










<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
<?php include 'components/footer.php'; ?>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>


</body>
</html>