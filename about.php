<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/company-img.jpeg" alt="" style="border-radius:10px;">
      </div>

      <div class="content">
         <h3>Our Company</h3>
         <p>Choco Choko, founded in 2000, is a premier chocolatier dedicated to crafting exquisite chocolate experiences that tantalize the taste buds and ignite moments of pure delight. Our journey began with a simple yet profound passion for creating indulgent treats that go beyond mere confectionery, aiming to create memories and evoke emotions with every bite.</p>
         <p>What sets Choco Choko apart is our unwavering commitment to quality and innovation. Our team of talented chocolatiers, led by Mr. John Jeo, brings together a wealth of experience and expertise in the art of chocolate-making. With backgrounds in culinary arts and a deep-seated love for all things chocolate, our team continuously pushes the boundaries of creativity to deliver unique and unforgettable chocolate creations.</p>
         <p>Over the years, Choco Choko has grown from a small artisanal kitchen to a beloved brand known for its exceptional quality, meticulous craftsmanship, and dedication to customer satisfaction. Our chocolates are crafted using only the finest ingredients sourced from sustainable and ethical suppliers, ensuring that every piece reflects our commitment to excellence and sustainability.</p>
         <p>From classic favorites like creamy milk chocolates and decadent dark varieties to innovative flavor combinations and seasonal specials, each Choco Choko creation is a labor of love. Whether you're treating yourself or looking for the perfect gift, we invite you to indulge in the magic of Choco Choko and experience chocolate like never before. Join us in celebrating the sweet moments that make life extraordinary.</p>
 
      </div>

   </div>

</section>

<section class="about">

   <div class="row">

      <div class="content">
         <h3>Our Team</h3>
         <p>Our team at Choco Choko is dedicated to the artistry of chocolate-making, blending time-honored techniques with cutting-edge innovation to create a diverse range of indulgent delights. From the velvety richness of our dark chocolate varieties to the creamy decadence of our milk chocolates, each product is a symphony of flavors meticulously crafted to perfection.</p>
         <p>Behind every Choco Choko creation lies a commitment to sourcing only the finest ingredients. We work closely with trusted suppliers who share our values of quality and sustainability, ensuring that each ingredient contributes to the exceptional taste and texture of our chocolates. Whether it's the smooth cocoa beans sourced from exotic origins or the luscious dairy products that enrich our recipes, every element is carefully selected to meet our rigorous standards.</p>
         <p>Our chocolate-making process is a labor of love, starting with the careful roasting and grinding of cocoa beans to unlock their full potential. We then blend these premium cocoa blends with other natural ingredients to create signature flavors that captivate the palate. Each batch undergoes rigorous testing and refinement, guided by our team of experienced chocolatiers who strive for nothing less than perfection.</p>
         
      </div>

      <div class="image">
         <img src="images/team.jpg" alt="" style="border-radius:10px;">
      </div>

   </div>

</section>

<section class="vision-mission">
   <div class="row">
      <div class="box1">
         <h3>Vision</h3>
         <p>To establish ourselves as the foremost destination for unparalleled chocolate experiences that transcend the ordinary. We aspire to be recognized globally as a beacon of excellence in the chocolate-making, where each creation is not just a confection but a gateway to moments of pure joy. To set standards of quality, innovation the chocolate industry to new chocolate enthusiasts around the world.</p>
      </div>
      <div class="box1">
         <h3>Mission</h3>
         <p>Our mission at Choco Choko is to craft exquisite chocolates using the finest ingredients and innovative techniques, delivering unparalleled quality, taste, and delight to our customers. We are committed to fostering a culture of creativity, sustainability, and customer satisfaction, ensuring that every Choco Choko experience is a celebration of sweetness and happiness.</p>
      </div>
   </div>
</section>


<section class="reviews">
   
   <h1 class="heading">Client's Reviews.</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-5.jpg" alt="">
         <p>I've never tasted chocolate like Choco Choko's! Each bite is a journey of flavor and quality. It's become a staple in my life, and I can't recommend it enough.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> Sarah M.</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-1.jpg" alt="">
         <p>As a chocolate enthusiast, I'm always on the lookout for unique blends. Choco Choko exceeded my expectations with their innovative flavors. A true delight!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>David L.</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.jpg" alt="">
         <p>I ordered a custom gift box from Choco Choko for my friend's birthday. Not only was the packaging stunning, but the chocolates were divine! It made the perfect present.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emily W.</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-7.jpg" alt="">
         <p>Choco Choko's commitment to sustainability is impressive. Knowing that they source ethically and responsibly makes me enjoy their chocolates even more.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Michael H.</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.jpg" alt="">
         <p>I've tried chocolates from all over the world, but Choco Choko's truffles are unmatched. Each one is a miniature masterpiece of flavor and texture.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alex P.</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.jpg" alt="">
         <p>The customer service at Choco Choko is top-notch. They go above and beyond to ensure every order is perfect. I'm a loyal customer for life!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ryan S.</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>