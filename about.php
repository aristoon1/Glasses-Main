<?php

include 'config.php';

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
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/g6.jpg" alt="">
      </div>

      <div class="content1">
         <h3>why choose us?</h3>
         <p>We at Glasses Broken pride ourselves on providing the ultimate customer experience, whether you are buying replacement spectacles, designer sunglasses or you require an eye test.
            We have a strong belief and commitment to our mission, our Mission is to provide a unique personalised service to all eyecare customers</p>
         <p>Our recognized and trustworthy team to serve the local community with the highest professional and reliable standards.
            Our vision is to provide our customers with innovative products and services consistently with enthusiasm and passion that is second to none.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>
   </div>

</section>

<section class="reviews">

   <h1 class="title">glasses's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>I came in to fix my sunglasses. It's missing a screw. nicky fixed my glasses within minutes. Great service and very professional. He was so kind. You can feel that he really cares about his customers. Will def come back!! Highly recommended.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Amily</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>We come here in three generations now! Always the best customer service, recommendations and selection to choose from. Thank you , nicky! I would highly recommend this Optical Shop. It has a special personal approach along with optical needs!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Kelvin</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Fantastic service. Very professional and understands how to help pick out glasses that fit well and are functional. He helps with the difficult decision of which frame to choose. I highly recommend nicky. He sells high quality glasses recommended.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Marie</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/authors1.1.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/profile.php?id=100020158449398" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/n._.nicky_/" class="fab fa-instagram"></a>
         </div>
         <h3>Chaipat Taengaurai</h3>
      </div>

      <div class="box">
         <img src="images/authors2.1.jpg" alt="">
         <div class="share">
            <a href="https://fb.com/flukkyurt" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/bibifiwfiww" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/flukkyurt/" class="fab fa-instagram"></a>
         </div>
         <h3>Pannatad Poomkum</h3>
      </div><br>

      <div class="box">
         <img src="images/authors3.1.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/profile.php?id=100078215214858" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>Mongkol Phengmalerng</h3>
      </div>

      <div class="box">
         <img src="images/authors4.2.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/ppurachet.promboot.1" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/19x_tew/"" class="fab fa-instagram"></a>
         </div>
         <h3>Purachet Prombout</h3>
      </div>
   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>