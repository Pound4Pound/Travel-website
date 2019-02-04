<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Banner page
                "Assignment - Day 9" 
                Author - Colin Lee-Chee
        </title>
        
        <link rel = "stylesheet" href = "modern-normalize.css">
        <link rel = "stylesheet" href = "stylesheet.css">

</head>    

<div class = "banner">

    <?php 
        $am = date('H:i:s');
        $hour = date('H');
    

        if ( "12" > $hour && $hour > "3") {    
            print("<div class = greeting>");
            print("Good morning!");
            print("</div>");
        } else if ("17" >= $hour && $hour >= "12"){
            print("<div class = greeting>");
            print("Good afternoon.");
            print("</div>"); 
            } else {
            print("<div class = greeting>");
            print("Good evening.");
            print("</div>");
        }
    ?>

</div>

</html>