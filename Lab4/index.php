<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Order Pizza</title>
    </head>
    <body>        
        <?php
            //file containing pizza order calculations
            require_once('model/calculate_order.php');
            
            //loading varaibles from pizza order form submission
            $pizza_size = filter_input(INPUT_POST, 'pizza_size');
            $pizza_toppings = filter_input(INPUT_POST, 'pizza_toppings',
                    FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
            $action = filter_input(INPUT_POST, 'action');
            
            // if the user has selected a pizza size
            if ($pizza_size) {
                $toppings_string = '';
                $topping_count = 0;
                
                // if the user has selected any toppings
                if ($pizza_toppings) {
                    $topping_count = get_topping_count($pizza_toppings);
                }
                
                if ($topping_count == 0) {
                    $toppings_string = 'No Toppings';
                } else {
                    $toppings_string = get_toppings($pizza_toppings);
                }
                
                $total_cost = get_cost($pizza_size, $topping_count);
                
                include('views/pizza_order_display.php');
            
            //if the user clicks submit without selecting a pizza size,
            //display an error
            } else if ($action){
                //display error message
                include('views/errors.html');
            }
            
            //display order form
            include('views/pizza_order_form.html');
            
        ?>
    </body>
</html>
