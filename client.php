<html lang="en" dir="ltr">
    <head>
        <title> Sorted </title>
    </head>

    <body>
        <?php
            include("functions.php");
            
            echo "Your array:<br>";
            showArr();
            bubbleSort();
            echo "<br>";
            echo "Sorted array:<br>";
            showArr();
        ?>
        <button><a href= "index.php"> Go privious page </a></button><br>
    </body>
</html>