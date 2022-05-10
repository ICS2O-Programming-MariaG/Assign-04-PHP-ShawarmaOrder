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
    <!-- Code for MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-red.min.css">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Shawarma Haven Menu - Maria Goemans</title>
  </head>
  <body>
    <!-- More MDL code -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!-- Adding an image as a background for the text -->
    <img src="./images/chicken-shawarma.jpg" alt="shawarma">
    <!-- Div to style text to be placed over image -->
    <div id="text-in-front">
      <h2>Shawarma Haven - PHP Menu</h2>
      <p>Welcome to Shawarma Haven! Use this web page to view our menu and place your order online! Then, review your order and total and submit it to us. You can get your order delivered or you can select a location for pickup.</p>
    </div>
    <!-- Div for style -- background colour -->
    <div id="first-coloured-div">
      <?php echo "<h4>Our Menu and Prices:</h4>"; ?>
      <center>
        <!-- Table listing options and prices -->
        <table>
          <tr>
            <th>Item</th>
            <th>Price</th>
          </tr>
          <tr>
            <td>Chicken Shawarma Sandwich</td>
            <td>Small: $6.00, Medium: $7.00, Large: $8.00</td>
          </tr>
          <tr>
            <td>Beef Shawarma Sandwich</td>
            <td>Small: $6.50, Medium: $7.50, Large: $8.50</td>
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
      </center>
    </div>
    <!-- Table to place image and form side-by-side -->
    <table id="increased-table-margin">
      <tr>
        <td id="td-left">
          <!-- Div for style -->
          <div id="grey">
            <?php
              echo "<h4>Your Order:</h4>";
              echo "<h5>Choose Your Base Shawarma Sandwich:</h5>";
            ?>
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
              <h5>Choose Your Toppings:</h5>
              <!-- MDL checkboxes for toppings -->
              <!-- First checkbox - for tabbouleh -->
              <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                <span class="mdl-checkbox__label">Tabbouleh</span>
                <input type="checkbox" id="tabbouleh" name="tabbouleh" class="mdl-checkbox__input"><br><br>
              </label>
              <!--Second checkbox - for hummus -->
              <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                <span class="mdl-checkbox__label">Hummus</span>
                <input type="checkbox" id="hummus" name="hummus" class="mdl-checkbox__input"><br><br>
              </label>
              <!-- Third checkbox - for garlic sauce -->
              <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                <span class="mdl-checkbox__label">Garlic sauce</span>
                <input type="checkbox" id="garlic" name="garlic" class="mdl-checkbox__input"><br><br>
              </label>
              <!-- Fourth checkbox - for pickled turnips -->
              <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                <span class="mdl-checkbox__label">Pickled turnips</span>
                <input type="checkbox" id="turnips" name="turnips" class="mdl-checkbox__input"><br><br>
              </label>
              <!-- Fifth checkbox - for pickles -->
              <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                <span class="mdl-checkbox__label">Pickles</span>
                <input type="checkbox" id="pickles" name="pickles" class="mdl-checkbox__input"><br><br>
              </label>
              <!-- Sixth checkbox - for onions -->
              <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                <span class="mdl-checkbox__label">Onions</span>
                <input type="checkbox" id="onions" name="onions" class="mdl-checkbox__input"><br><br>
              </label>
              <h5>Choose Your Sides</h5>
              <!-- MDL number input with floating label for garlic potato side -->
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="number" id="potatoes" value="0" step="1" min="0" max="3" name="potatoes">
                <label class="mdl-textfield__label" for="drinks">Pick a number of garlic potato sides:</label>
              </div><br>
              <!-- MDL number input with floating label for drinks -->
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="number" id="drinks" step="1" value="0" min="0" max="6" name="drinks">
                <label class="mdl-textfield__label" for="drinks">Pick a number of drinks:</label>
              </div><br>
              <input type="submit" id="submit-button" value="Submit Your Order">
            </form>
          </div>
        </td>
        <!-- Second cell for image and results div on right side of screen -->
        <td id="td-right">
          <img src="./images/chicken.webp" alt="shawarma image" id="shawarma-image">
          <?php echo "<h4 id='left-margin'>Your Total:</h4>"; ?>
          <iframe id="results" name="results"></iframe>
        </td>
      </tr>
  </body>
</html>