<?php
// Placeholder function to fetch admin details from the database

include 'db_connection.php';

if (isset($_GET['id'])) {
    $courseId = $_GET['id'];

    $sql = "SELECT * FROM create_course WHERE course_id = $courseId"; // Replace with your actual query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $courseDetails = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Course Profile</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
            <link rel="stylesheet" href="css/style.css">
        </head>

        <body>
            <?php include 'header.php'; ?>

            <section class="teacher-profile">
                <h1 class="heading">Create Course Details</h1>
                <div class="details">
                    <div class="tutor">
                        
                        <h3>Course Name: <span><?php echo $courseDetails['course_name']; ?></span><h3>
                        <h3>Course Description:</h3><span><?php echo $courseDetails['course_description']; ?><span>
                        <h3>
                        Course Duration:<span> <?php echo $courseDetails['course_duration']; ?>
                            <span>Days</span>
                        </span></h3>
                    </div>
                    <div class="flex">
                        <!-- Display other admin details as needed -->
                    </div>
                </div>
            </section>

            <script src="js/script.js"></script>

            <?php include 'sidebar.php'; ?>
        </body>

        </html>
        <?php
    }}
?>