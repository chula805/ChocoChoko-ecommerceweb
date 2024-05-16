<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Choco Choko</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Welcome to Choco Choko's Chocolate Wonderland</h3>
            <a href="category.php?category=smartphone" class="btn">Shop Now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Explore Choco Choko's Tempting Choco Creations!</h3>
            <a href="category.php?category=watch" class="btn">Shop Now.</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dive into Choco Choko's Chocolate Paradise!</h3>
            <a href="shop.php" class="btn">Shop Now.</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.png" alt="" style="border-radius:10px;">
      </div>

      <div class="content">
         <h3>About Us</h3>
         <p>Choco Choko is more than just a chocolate store; it's a haven for chocolate enthusiasts seeking premium quality and exquisite flavors. Our chocolates are meticulously crafted using the finest ingredients sourced from trusted suppliers, ensuring each bite is a moment of pure delight. From velvety milk chocolates to intense dark varieties, Choco Choko offers a diverse range to suit every palate.</p>

         <p>What sets Choco Choko apart is our dedication to innovation and craftsmanship. Our skilled chocolatiers blend tradition with creativity, resulting in unique and delectable chocolate creations that stand out. Whether you're treating yourself or searching for the perfect gift, Choco Choko invites you to experience the magic of exceptional chocolate and create memorable moments of indulgence.</p>

         <p>Choco Choko is not just about selling chocolate; it's about creating moments of joy and connection. We believe that chocolate has the power to bring people together and make ordinary moments extraordinary. That's why we pour our passion and expertise into every chocolate creation, ensuring that each piece tells a story of craftsmanship and indulgence. Whether you're unwinding after a long day or celebrating a special occasion, Choco Choko's chocolates are here to make your experiences sweeter and more memorable. Join us in savoring the magic of chocolate, one delicious bite at a time.</p>
         <a href="about.php" class="btn">Read More</a>
      </div>

   </div>

</section>

<section class="about">

   <div class="row">

      <div class="content">
         <h3>Masterful Chocolate Artisans</h3>
         <p>At Choco Choko, we take immense pride in our team of master chocolatiers who bring years of experience and passion to every chocolate creation. Our skilled artisans have honed their craft through years of dedicated practice, blending traditional techniques with innovative flair to produce chocolates that are truly exceptional.</p>

         <p>With a deep understanding of flavor profiles, quality ingredients, and meticulous attention to detail, our chocolatiers elevate chocolate-making to an art form. Each chocolate is carefully crafted by hand, ensuring that every piece is a masterpiece of flavor and texture.</p>

         <p>Our commitment to excellence is reflected in every bite, making Choco Choko a destination for those who appreciate the artistry and expertise behind fine chocolate. Trust in our talented chefs to deliver chocolate creations that delight the senses and leave a lasting impression.</p>
         <a href="about.php" class="btn">Read More</a>
      </div>

      <div class="image">
         <img src="images/chef.jpg" alt="" style="border-radius:10px;">
      </div>

   </div>

</section>


<section class="home-products">

   <h1 class="heading">Latest products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>Nrs.</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>