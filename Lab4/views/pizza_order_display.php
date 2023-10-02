<?php
    global $pizza_size;
    global $toppings_string;
    global $total_cost;
    
    //Displays user's recent pizza order with size, toppings, and total cost    
    echo '<h2>Your Previous Order</h2>'
        . $pizza_size . ' Pizza '
        . 'with ' . $toppings_string . '<br><br>'
        . 'Total Cost: $' . number_format($total_cost, 2)
        . '<br>';
    
?>
