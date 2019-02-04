<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> "Assignment - Day 1" 
                Author - Colin Lee-Chee
        </title>
        
        <link rel = "stylesheet" href = "modern-normalize.css">
        <link rel = "stylesheet" href = "stylesheet.css">

    </head>

    <body id = 'index'>
    <?php
        include_once("navbar.php");
        include_once("time.php"); 
        include_once("banner.php");
        include_once("header.php");
       
        
        ?>


        <!-- <header id = 'header'>
 

        Looking to plan your trip of a life time?

            
                <img src = "img/Ik-9JTBn_400x400.jpeg" style ="display: block; margin-left: auto; margin-right:auto;"/>
                
        </header> -->

        

                <h1>Welcome to Travel Experts</h1>

        
        <h3>The premier travel organizer in Western Canada!</h3>
       

        <!-- inline trial of background image.
        created an accent block in the middle of the page 
    
        background-image: url('img/kido-dong-500-unsplash.jpg')"-->

       <div class = box2 style="height: 300px; width: 500px; color: #e0a709; 
        background-color: #e0a709;
        background-repeat: repeat-x;">
        </div>

        <article id = 'story'><p> Here at Travel Experts we work for you.</p><br>
        All of our travel agents are available to answer your questions about your trip. <br>
        If it across the country or even across the globe, we are here to help. </article>

        <div class = box><p>Choose travel packages from across the globe.</p><img src ="img/photo-1516738901171-8eb4fc13bd20.jpg">
            
        </div>

        <div class = box1><img src ="img/Call-Center-Inbound-image-2-266x300.jpg">
        </div>
        <div class = box><img src ="img/photo-1503970999490-4404449dc349.jpg">
        </div>

        
    
<br> 
<!-- 
    These lines were experiments on how to imbed pictures into anchor <a></a> tags
    
    <a href = "contact.html" target = "_blank"> Contact &nbsp </a>
<a href = "register.html" target = "_blank"> Register </a> -->

<!-- <br><a href = "contact.html" target = "_blank"> <h4>Contact </h1><img src = "img/contact.jpg"> </a>
<a href = "register.html" target = "_blank"> <h4></h4>Register</h4><img src = "img/register_now_blue_sign.jpg"> </a> -->


<div class = box2>  <a href = "contact.php"> <h2> Contact</h2> <img src = "img/contact.jpg">  </a>
<a href = "register.php"> <img src = "img/register_now_blue_sign.jpg"> <h2>Register</h2> </a> 
</div>

<footer class ="footer">
    <br><br><br>
    All rights reserved &copy; SAIT <img src = "img/sait logo.jpg">
</footer>

</body>

<script src = "script.js">

</script>



</html>