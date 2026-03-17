<!-- loops.php -->
<?php
// while
$counter = 10;
$packs = 5;
$price = 1.99;



//do...while

//foreach
$products = [
    'Toffee'=> 2.99,
    'Mints' => 1.99,
    'Fudge' => 3.49,
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title> while, for, foreach</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1> The Candy Store</h1>

        <h2>Chocolate</h2>
        <ol>
            <?php 
        do {
       
            echo '<li>';
            echo " $counter packs cost $"; // escape $
            echo $price * $counter;
            echo '</il>';
            $counter++;
        } while ($counter <= $packs) ;

        ?>
        </ol>

        <h2>Mints</h2>
        <ul>
        <?php 
        for ($i = 1; $i <=100; $i += 10) {
            echo '<li>';
            echo " $i packs cost $"; // escape $
            echo $price * $counter;
            echo '</il>';
        }
        ?>
        </ul>
        <p><? = $offer ?></p>


        <h2>$products</h2>
        <table>
            <tr>
                <th>Item</th>
                <th>Price</th>
            </tr>
<?php foreach($products as $item => $price) { ?>
    <tr>
        <td><?=$item ?></td>
        <td><?=$price; ?></td>
</tr>
<?php } ?>
</table>
        
    </body>

</html>

