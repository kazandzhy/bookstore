<!DOCTYPE html>
<html>
  <head>
      <title>Book World | Shopping Cart</title>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="week07.css">
      <script type="text/javascript" src="week07.js"></script>
  </head>
  <body>
    <div class="navigation">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="shop.html">Online Shop</a></li>
    </ul>
    </div>

    <div id="forms">
      <div id="billing">
        <h2>1. Billing Information</h2>
        <form name="ourform" onreset="resetForm()" onsubmit="return submitForm()" action="week12.php" method="post">
          First name:<br>
          <input type="text" name="firstname" oninput="validateField(this.value, 'firstname');" size="40" autofocus required>
          <span class='firstname' style='color:red'>Required</span><br>
          Last name:<br>
          <input type="text" name="lastname" oninput="validateField(this.value, 'lastname');" size="40" required>
          <span class='lastname' style='color:red'>Required</span><br>
          Telephone:<br>
          <input type="text" name="phone" oninput="validatePhone(this.value, 'phone');" placeholder="Ex: xxx-xxx-xxxx" size="40" required>
          <span class='phone' style='color:red'>Required</span><br>
          Address:<br>
          <input type="text" name="address" oninput="validateField(this.value, 'address');" size="40" required>
          <span class='address' style='color:red'>Required</span><br>
          City:<br>
          <input type="text" name="city" oninput="validateField(this.value, 'city');" size="40" required>
          <span class='city' style='color:red'>Required</span><br>
          State:<br>
          <select name="statelist" oninput="validateDropdown(this.value, 'state');" required>
            <option value="">Select State</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select>
          <span class='state' style='color:red'>Required</span><br>
          Zip Code:<br>
          <input type="text" name="zip" oninput="validateZip(this.value, 'zip');" size="40" required>
          <span class='zip' style='color:red'>Required</span><br>  
      </div>
      
      <div id="payment">
        <h2>2. Payment</h2>
          Card Type:<br>
          <select name="cardtype" oninput="validateDropdown(this.value, 'cardtype');" required>
            <option value="">Select Card</option>
            <option value="Visa">Visa</option>
            <option value="MasterCard">MasterCard</option>
            <option value="American Express">American Express</option>
            <option value="Discover">Discover</option>
          </select>
          <span class='cardtype' style='color:red'>Required</span><br>
          Card Number:<br>
          <input type="text" name="cardnumber" oninput="validateCredit(this.value, 'cardnumber');" placeholder="Ex: xxxx xxxx xxxx xxxx OR xxxxxxxxxxxxxxxx" size="40" required>
          <span class='cardnumber' style='color:red'>Required</span><br>
          Expiration Date:<br>
          <select name="expmonth" oninput="validateDropdown(this.value, 'expmonth');" required>
            <option value="">Select Month</option>
            <option value="January">Jan (01)</option>
            <option value="February">Feb (02)</option>
            <option value="March">Mar (03)</option>
            <option value="April">Apr (04)</option>
            <option value="May">May (05)</option>
            <option value="June">June (06)</option>
            <option value="July">July (07)</option>
            <option value="August">Aug (08)</option>
            <option value="September">Sep (09)</option>
            <option value="October">Oct (10)</option>
            <option value="November">Nov (11)</option>
            <option value="December">Dec (12)</option>
          </select>
          <span class='expmonth' style='color:red'>Required</span><br>
          <select name="expyear" oninput="validateDropdown(this.value, 'expyear');" required>
            <option value="">Select Year</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
          </select>
          <span class='expyear' style='color:red'>Required</span><br>
          Security Code:<br>
          <input type="password" name="security" oninput="validateSecurity(this.value, 'security');" size="40" required>
          <span class='security' style='color:red'>Required</span><br>
          <?php
             $purchases = $_POST["purchase"];
             foreach ($purchases as $book)
             {
                echo '<input type="hidden" name="purchase[]" value="' . $book . '">';
             }
          ?>
          <br><br>
          <input type="reset" value="Reset"><br><br>
          <input type="submit" value="Submit Order">
        </form>
      </div>
      
      <div class="clear"></div>
    </div>
 
     
  </body>
</html>