<?php
session_start();

// Assuming you have a database connection established in 'db_connection.php'
include 'connect_db.php';

$st_id = $_SESSION['st_id'];
$st_name = isset($_SESSION['st_name']) ? $_SESSION['st_name'] : '';
$user_email = isset($_SESSION['st_email']) ? $_SESSION['st_email'] : '';
$user_profession = isset($_SESSION['st_profession']) ? $_SESSION['st_profession'] : '';
$user_image = isset($_SESSION['st_image']) ? $_SESSION['st_image'] : '';


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <header class="header">

      <section class="flex">

         <a href="home.php" class="logo">RSL Solution.</a>

         <form action="search.html" method="post" class="search-form">
            <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
            <button type="submit" class="fas fa-search"></button>
         </form>

         <div class="icons">
            <div id="notification-btn" class="fa-regular fa-bell"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
         </div>

         <div class="profile">
         <img src="images/pic-5.jpg" class="image" alt="">
            <p class="role"><?php echo $st_name; ?></p>
           
            <a href="profile.php" class="btn">View Profile</a>
            <div class="flex-btn">
               <a href="../admin/login.html" class="option-btn">Logout</a>
            </div>
         </div>

      </section>

   </header>

   <section class="user-profile">

      <h1 class="heading">Your Profile</h1>

      <div class="info">

      <div class="user">
     <!-- <img src="<?php echo $user_image; ?>" class="image" alt="<?php echo $st_name; ?>">  -->
  
    <h3 class="role"><?php echo $st_name; ?></h3><br>
    
    <!-- Add the email and profession information here -->
    <div class="box" style="font-size: small; text-align: center;">
  
        <h4>  <i class="fas fa-envelope"></i>  <?php echo $user_email; ?></h4> <br>
        <h4><?php echo $_SESSION['st_profession']; ?></h4> <!-- Display the profession here -->
    </div>
</div>

      </div>

   </section>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <?php include 'sidebar.php'; ?>

</body>

</html>
