<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Shawarma Haven Menu - Maria Goemans">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="MariaG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Shawarma Haven Menu - Maria Goemans</title>
  </head>
  <body>
    <?php echo "<h1>Shawarma Haven - PHP Menu</h1>"; ?>
    <?php
      echo "<p>Welcome to Shawarma Haven! Use this web page to view our menu and place your order online! Then, review your order and total and submit it to us. You can get your order delivered or you can select a location for pickup.</p>";
      echo "<h3>Our Menu and Prices:</h3>";
    ?>
    <!-- Table listing options and prices -->
    <table>
      <tr>
        <td>Chicken Shawarma Sandwich</td>
        <td>Small: $6.00<br>Medium: $7.00<br>Large: $8.00</td>
      </tr>
      <tr>
        <td>Beef Shawarma Sandwich</td>
        <td>Small: $6.50<br>Medium: $7.50<br>Large: $8.50</td>
      </tr>
      <tr>
        <td>Toppings (tabbouleh, hummus, pickles, onions, etc.)</td>
        <td>$0.25 each</td>
      </tr>
      <tr>
        <td>Drinks (canned and bottled juices and pops)</td>
        <td>$3.00 each</td>
      </tr>
      <tr>
        <td>Garlic Potatoes</td>
        <td>$6.00</td>
      </tr>
    </table>
    <h3>Your Order:</h3>
    <h4>Choose Your Base Shawarma Sandwich:</h4>
    <!-- Form for user input -->
    <form action="./order.php" method="post" target="results">
      <!-- Multiple choice - picking a meat type -->
      <label for="meat-type">Choose a type of meat for your sandwich:</label>
      <select id="meat-type" name="meat-type">
        <option value="chicken">Chicken</option>
        <option value="beef">Beef</option>
      </select><br><br>
      <!-- Multiple choice - picking a sandwich size -->
      <label for="sandwich-size">Choose a sandwich size</label>
      <select id="sand-size" name="sand-size">
        <option value="small">Small</option>
        <option value="medium">Medium</option>
        <option value="large">Large</option>
      </select>
      <h4>Choose Your Toppings:</h4>
      <!-- Checkboxes for toppings -->
      <label for="tabbouleh">Tabbouleh</label>
      <input type="checkbox" id="tabbouleh" name="tabbouleh"><br><br>
      <label for="hummus">Hummus</label>
      <input type="checkbox" id="hummus" name="hummus"><br><br>
      <label for="garlic">Garlic sauce</label>
      <input type="checkbox" id="garlic" name="garlic"><br><br>
      <label for="turnips">Pickled turnips</label>
      <input type="checkbox" id="turnips" name="turnips"><br><br>
      <label for="pickles">Pickles</label>
      <input type="checkbox" id="pickles" name="pickles"><br><br>
      <label for="onions">Onions</label>
      <input type="checkbox" id="onions" name="onions"><br><br>
      <h4>Choose Your Sides</h4>
      <!-- Number input for garlic potato side -->
      <label for="potatoes">Garlic potatoes</label>
      <input type="number" id="potatoes" value="0" step="1" min="0" max="4" name="potatoes"><br><br>
      <!-- Number input for drinks -->
      <label for="drinks">Pick a number of drinks:</label>
      <input type="number" step="1" min="0" value="0" max="6" id="drinks" name="drinks"><br><br>
      <input type="submit" value="Submit Your Order">
    </form>
    <iframe id="results" name="results"></iframe>
  </body>
</html>