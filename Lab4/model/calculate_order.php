<?php
    //($pizza_toppings array wasn't working with 'sizeof' function. This is my
    //work around)
    //
    //counts the number of toppings user selected
    function get_topping_count($pizza_toppings) {
        $topping_count = 0;
        
        foreach ($pizza_toppings as $topping) {
            $topping_count++;
        }
        
        return $topping_count;
    }
    
    // creates a comma-separated list of toppings for display
    function get_toppings($pizza_toppings) {
        return join(', ', $pizza_toppings);
    }
    
    //calcualtes the cost of the pizza the user ordered based on size of pizza 
    //and number of toppings
    function get_cost($size, $topping_count) {
        define('SMALL', 5.0);
        define('MEDIUM', 7.0);
        define('LARGE', 9.0);
        
        if ($size == 'Small') {
            return SMALL + 0.5*$topping_count;
        } else if ($size == 'Medium') {
            return MEDIUM + 1*$topping_count;
        } else if ($size == 'Large') {
            return LARGE + 1.5*$topping_count;
        }
    }
?>

