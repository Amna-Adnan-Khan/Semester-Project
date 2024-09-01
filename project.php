<?php
  $db_server = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "job_listing";

  $conn = mysqli_connect ( $db_server,
                           $db_user,
                           $db_pass,
                           $db_name);
                           

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB PORTAL PROJECT</title>
    <link rel="stylesheet" href="project.css">

</head>
<body>
    <header> 
       <h1><b>RAHA'S COMPANY</b></h1>
    </header>    
    <div id="navbar">
        <a href="company.html">Home</a>
        <a href="joblisting.html">Job Listing</a>
        <a href="resumesubmit.html">Resume Submission</a>
        <a href="cv.html">Upload Your CV</a>
        <a href="application.html">Application Tracking</a>
    </div>
    <div class="container">
        <nav> 
            <ul>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Our Services</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>

    <section id="about" class="section">
        <div class="container">
            <h2>About Us</h2>
            <p>Raha's Company is a leading recruitment agency dedicated to connecting talented people with multinational companies. We specialize in matching job seekers with the right employers. We are also passionate about helping people to find best jobs for themself.</p>
        </div>
    </section>

    <section id="services" class="section">
        <div class="container">
            <h2>Our Services</h2>
            <p>We offer a range of services including job matching, career counseling, and recruitment consultancy.</p>
        </div>
    </section>

    <section id="team" class="section">
        <div class="container">
            <h2>Our Team</h2>
            <p>Our team consists of experienced professionals committed to helping you find the perfect job.</p>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Email: amnakhan6043@gmail.com | Phone: 03240156043</p>
            <p>Email: emanbibi296@gmail.com  | Phone: 03240156043</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Jobs Portal All rights reserved.</p>
        </div>
    </footer>
    
</body>
</html>