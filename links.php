<!DOCTYPE html>
<html>
<head>

    <title>Links Page</title>
    <style>
        td {
            padding: 5px;
            border: 2px double black;
        }
    </style>

    <link rel = "stylesheet" href = "modern-normalize.css">
    <link rel = "stylesheet" href = "stylesheet.css">

</head>
<body>
    <nav>   
        <?php include_once("navbar.php"); ?>

    </nav>
    <header>
        <?php include_once("header.php"); ?>
        <h1>My Links Page.</h1>
    </header>

    <section>
    <?php
        include_once("variables.php");

            print("<table>");

        $row=1;
    foreach ($travelArray as $url => $label){
            print("<tr>");
            print("<td>$row</td>");
            print("<td>link to <a href='". $url. "'target='_blank'>$label<a/></td>");
            print("</tr>");
            $row++;
        }
        print("</table>");
     


    ?>
    </section>

    <footer>

    <?php include_once("footer.php"); ?>

    </footer>

</body>
</html>