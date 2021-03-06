<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <title> "Assignment - Day 1" 
            Author - Colin Lee-Chee

    </title>

    <link rel = "stylesheet" href = "stylesheet.css"> 
    
    

</head>


<body id = 'register'>

    <?php
        include_once("navbar.php");
        include_once("header.php");
        
    ?>
    
    <!-- <h1 id = 'warning'> This page is under construction.</h1> -->



    <div class = "align-right">

            <form action="/bouncer.php" method="POST" name = myform>
                <h1>Personal Details</h1><br><br>

            <!-- Left- Hand side of the form -->
                <div id = "credentials">
                    <label for="name1" class= "labelColor"> First Name:</label>
                    <input class="inputs" type="text" name="firstName" id="name1" required > <br>

                <!-- hidden instructions for the field that will be displayed once focused by user-->
                        <p id = "firstNameInstr" class = 'instructionLeft'  > Enter your first name. </p> 


                    <label for="name2" class= "labelColor">Last Name:</label>
                    <input class="inputs" type="text" name="lastName" id="name2" required> <br>

                        <p id = "lastNameInstr" class = 'instructionLeft' > Enter your last name. </p>

                    <label for="userPassword" class= "labelColor"> Password: </label> 
                    <input class="inputs" type="password" name="password" id="userPassword"  required> <br>

                        <p id = "passwordInstr" class = 'instructionLeft' > Enter password. </p>
                </div>
                        


                <!-- Right Hand side of the form -->


                  <div id = "addressDetails">      
                    <label for="userStreetAddress" class= "labelColor"> Address:</label>
                    <textarea class="inputs" type="text" name="address" id="userStreetAddress" class = textAreaLabelColor rows="4" cols="50"
                     required="required"> </textarea><br>
                <!-- text area 'required' attribute not working. -->

                        <!-- hidden instructions for the field that will be displayed once focused by user-->
                        <p id = "AddressInstr" class = 'instructionRight'> Enter your Address. </p>

                    <label for="userCity" class= "labelColor"> City:</label>
                    <input class="inputs" type="text" name="city" id="userCity" required> <br>

                        <p id = "CityInstr" class = 'instructionRight'> Enter the city you live in. </p>

                    <label for="userProvince" class= "labelColor"> Province:</label>
                    <input class="inputs" type="text" name="province" id="userProvince" required> <br>

                        <p id = "provinceInstr" class = 'instructionRight'> Enter the province you live in. </p>

                    <label for="userPostCode" class= "labelColor"> Postal Code: </label>
                    <input class="inputs" type="text" name="postCode" id="userPostCode" value = '0000' required> <br>

                    <p id = "postCodeInstr" class = 'instructionRight'> Enter your postal code. (i.e A1A 1A1)</p>
                </div>
                        
               
               <!-- control buttons for the form -->
                <div id = formBtns>
                    <br> <br> 
                    <input type="submit" Value="Click to submit" id = "submitBtn" formaction="/bouncer.php">
                    <input type="reset" Value="reset form" id = "resetForm">
                </div>

            </form>

            

    </div>


<footer id="footer">
        <br><br><br>
            All rights reserved &copy; SAIT <img src = "img/sait logo.jpg">
</footer>

<script src = "script.js">
    </script>
    
</body>


</html>