<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hospital website </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>LB</strong>Hospitals </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#doctors">doctors</a>
        <a href="#appointment">appointment</a>
        <a href="#review">review</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>


<section class="home" id="home">

    <div class="image">
        <img src="image/b-15.jpeg" alt="">
    </div>

    <div class="content">
        <h3>we take care of your healthy life</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>


<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>available hospitals</p>
    </div>

</section>


<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/b-1.jpg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p> Our hospital boasts a team of internationally acclaimed medical experts who provide unparalleled expertise and care , With the latest medical advancements at our fingertips, we deliver treatments that push the boundaries of innovation.</p>
            <p>Our hospital is a hub of pioneering research, allowing us to provide treatments grounded in the latest breakthroughs , With a track record of successful outcomes, we stand as a testament to our dedication to providing world-class treatment.</p>
        </div>

    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Avail yourself of a complimentary health assessment and consultation with our expert medical team during our free checkup event. Prioritize your well-being today!</p>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Count on our round-the-clock ambulance service to provide swift and responsive medical assistance whenever you need it. Your safety and health are our constant concern.</p>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>Our hospital is staffed with a team of accomplished and skilled doctors, ensuring that you receive the highest standard of medical care. Trust in their expertise for your well-being.
</p>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>We offer a comprehensive selection of top-quality medications at our hospital, sourced to ensure your health and recovery. Rely on us for the best medicines to support your treatment journey.</p>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>Experience unparalleled comfort and restorative sleep in our hospital, thanks to our state-of-the-art bed facilities designed to enhance your healing process. Your well-being is our priority, even down to your resting moments.</p>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Experience the pinnacle of total care at our hospital, where we prioritize your physical, emotional, and mental well-being through comprehensive and personalized treatment plans. Your health journey is our holistic commitment.</p>
        </div>

    </div>

</section>

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/b-3.png" alt="">
            <h3>Dr. monisha rawat</h3>
            <span>Cardiologist</span>
            <div class="share">
           
            </div>
        </div>

        <div class="box">
            <img src="image/b-4.jpg" alt="">
            <h3>Dr. laxmikant kasat</h3>
            <span>Skin care</span>
            <div class="share">
           
            </div>
        </div>

        <div class="box">
            <img src="image/b-5.png" alt="">
            <h3>Dr. anjan bhattacharya</h3>
            <span>Dental</span>
            <div class="share">
            
            </div>
        </div>

        <div class="box">
            <img src="image/b-6.jpg" alt="">
            <h3>Dr. arun mehra</h3>
            <span>Therapist</span>
            <div class="share">
            
            </div>
        </div>

        <div class="box">
            <img src="image/b-7.jpg" alt="">
            <h3>Dr. abhijith pawar</h3>
            <span>physiotherapist</span>
            <div class="share">
            </div>
        </div>

        <div class="box">
            <img src="image/b-8.jpg" alt="">
            <h3>Dr. yogesh kalyanpad</h3>
            <span>pshyciartist</span>
            
            </div>
        </div>
        

    </div>

</section>


<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/b-9.webp" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>


<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/b-10.jpg" alt="">
            <h3>win coder</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">I recently had an incredible experience at this hospital. The staff was exceptionally attentive and caring, making me feel valued and supported throughout my stay. The doctors' expertise was evident, and their thorough explanations put me at ease. The modern facilities and prompt service were impressive, ensuring a comfortable environment. Overall, I highly recommend this hospital for its outstanding care and professionalism.</p>
        </div>

        <div class="box">
            <img src="image/b-11.jpg" alt="">
            <h3>win coder</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">I was thoroughly impressed with my time at this hospital. The medical team's dedication to my well-being was evident, and their communication was clear and informative. The facility's cleanliness and organization were outstanding, creating a comfortable atmosphere. Despite the challenging situation, I felt genuinely cared for and confident in the treatment I received. This hospital exceeded my expectations, and I'm grateful for the exceptional care I received.</p>
        </div>

        <div class="box">
            <img src="image/b-12.webp" alt="">
            <h3>win coder</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">My time at this hospital was exceptional. The staff was attentive and caring, making me feel at ease. The facilities were modern and comfortable. The doctors' expertise and clear explanations gave me confidence in my treatment. Highly recommend this hospital for top-notch care.</p>
        </div>

    </div>

</section>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 1234567890 </a>
            <a href="#"> <i class="fas fa-phone"></i> 09876543210 </a>
            <a href="#"> <i class="fas fa-envelope"></i> bhoomika@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> bhoomi1302@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Nellore,India </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>


</section>

<script src="js/script.js"></script>

</body>
</html>

