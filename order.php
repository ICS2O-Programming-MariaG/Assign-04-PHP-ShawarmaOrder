<?php
  //setting a constant for tax
  define("HST", 0.13);

  //initializing variable for the base sandwich cost
  $baseSandCost = 0;

  //declaring variables for base sandwich and sides
  $meatType = $_POST["meat-type"];
  $sandSize = $_POST["sand-size"];
  $numDrinks = intval($_POST["drinks"]);
  $numPotatoes = intval($_POST["potatoes"]);

  //initializing variable for the number of toppings
  $numToppings = 0;

  //Changing the number of toppings based on the number of checkboxes checked - method found at https://stackoverflow.com/questions/18572351/counting-how-many-checkbox-are-checked-php-html
  //if tabbouleh is checked
  if(isset($_POST["tabbouleh"])){
    //++ adds one to the total
    $numToppings++;
  }
  //if hummus is checked
  if(isset($_POST["hummus"])){
    $numToppings++;
  }
  //if garlic sauce is checked
  if(isset($_POST["garlic"])){
    $numToppings++;
  }
  //if pickled turnips are checked
  if(isset($_POST["turnips"])){
    $numToppings++;
  }
  //if pickles are checked
  if(isset($_POST["pickles"])){
    $numToppings++;
  }
  //if onions are checked
  if(isset($_POST["onions"])){
    $numToppings++;
  }

  //calculating the total cost of toppings
  $costToppings = $numToppings * 0.25;

  //determining the cost of the base sandwich using compound if/then statements
  //if the meat type is chicken and the size is small
  if (($meatType == "chicken") && ($sandSize == "small")) {
    $baseSandCost = 6.00;
  }
  //if the meat type is beef and the size is small
  else if (($meatType == "beef") && ($sandSize == "small")) {
    $baseSandCost = 6.50;
  }
  //if the meat type is chicken and the size is medium
  else if (($meatType == "chicken") && ($sandSize == "medium")) {
    $baseSandCost = 7.00;
  }
  //if the meat type is beef and the size is medium
  else if (($meatType == "beef") && ($sandSize == "medium")) {
    $baseSandCost = 7.50;
  }
  //if the meat type is chicken and the size is large
  else if (($meatType == "chicken") && ($sandSize == "large")) {
    $baseSandCost = 8.00;
  }
  //else indicates that the meat type is beef and the size is large
  else {
    $baseSandCost = 8.50;
  }

  //determining the cost of the sides
  $costDrinks = $numDrinks * 3.00;
  $costPotatoes = $numPotatoes * 6.00;

  //calculating the totals
  $subtotal = $baseSandCost + $costToppings + $costDrinks + $costPotatoes;
  $tax = $subtotal * HST;
  $total = $subtotal + $tax;

  //displaying the cost (totals) to the screen
  echo "Your subtotal is $" . number_format($subtotal, 2) . ".<br>The amount of HST added is $" . number_format($tax, 2) . ".<br>Your total is $" . number_format($total, 2) . ".";
?>
