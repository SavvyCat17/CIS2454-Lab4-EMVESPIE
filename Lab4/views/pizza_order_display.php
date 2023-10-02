<?php
    //Displays user's recent pizza order with size, toppings, and total cost    
    echo '<h2>Your Previous Order</h2>'
        . $size . ' Pizza '
        . 'with ' . $toppings_str . '<br><br>'
        . 'Total Cost: $' . number_format($cost, 2)
        . '<br>';
    
?>
