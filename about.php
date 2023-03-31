<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <h3>why choose our zoo?</h3>
         <p>We have a total of over 5137 specimen from
              476 species of mammals, birds, reptiles, amphibians and fish.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <h3>our vision</h3>
         <p>To be one of the world’s premier zoological park and aquaria dedicated to conservation, recreation, education, training and research of various animal and plant species.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">past visitor experiences</h1>

   <div class="box-container">

      <div class="box">
         <!--<img src="images/pic-1.png" alt="">-->
         <p>"The zoo was a great experience, the animal enclosures were well-maintained and the staff were very informative."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anna</h3>
      </div>

      <div class="box">
         <!--<img src="images/pic-2.png" alt="">-->
         <p>"I had a fantastic time at the zoo, the animal exhibits were diverse and I learned a lot about the different species."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tina</h3>
      </div>

      <div class="box">
         <!--<img src="images/pic-3.png" alt="">-->
         <p>"The zoo had a great atmosphere and the animals seemed very content in their enclosures. It was a lovely day out!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Huda</h3>
      </div>

      <div class="box">
         <!--<img src="images/pic-4.png" alt="">-->
         <p>"I was impressed with the variety of animals at the zoo, from the big cats to the penguins, it was a fun and educational experience."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Angela</h3>
      </div>

      <div class="box">
         <!--<img src="images/pic-5.png" alt="">-->
         <p>"The zoo was a great day out for the family, the kids loved seeing all the different animals and learning about their habitats."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jackson Wang</h3>
      </div>

      <div class="box">
         <!--<img src="images/pic-6.png" alt="">-->
         <p>"The zoo was a highlight of my trip, the animal shows were entertaining and the zookeepers were very knowledgeable."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Christopher</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>