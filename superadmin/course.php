<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Course</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   

</head>
<body>
<?php include 'header.php'; ?>
<section class="home-grid">

   <h1 class="heading">Course</h1>

   <div class="box-container">

      

      <div class="box">
         <h3 class="title">Create Course</h3>
         <p class="tutor">.......</p>
         <a href="create_courses_display.php" class="inline-btn">create course here</a>
      </div>

      <div class="box">
         <h3 class="title">course detail</h3><!--Newly created-->
         <p class="tutor">.......</p>
         <a href="course_details.php" class="inline-btn">course contain</a>
      </div>

      <div class="box">
         <h3 class="title">Assign to Admin</h3><!--Newly created-->
         <p class="tutor">.......</p>
         <a href="assign_course_admin.php" class="inline-btn">Assign to Admin</a>
      </div>

    

   </div>

</section>
<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'sidebar.php'; ?>
   
</body>
</html>