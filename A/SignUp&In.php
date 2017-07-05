
<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn, .signinbtn {float:left;width:50%}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn, .signinbtn {
       width: 100%;
    }
}
</style>
<body>

<h2>Purwanews Sign Up & Sign In Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content animate" action="/action_page.php">


<div class="container">
<table>
    <tbody>
      <tr>
        <td>Email</td>
        <td><input type="text" placeholder="Enter Email" name="email" required></td>
      </tr>
      <tr>
        <td>Username</td>
        <td><input type="text" placeholder="Choose Username" name="username" required></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" placeholder="Choose Password" name="password" required></td>
      </tr>
      <tr>
        <td>Retype Password</td>
        <td><input type="password" placeholder="Retype Your Password" name="password-check" required></td>
      </tr>   
      <tr>
        <td>First Name</td>
        <td><input type="text" placeholder="Type Your First Name" name="first-name" required></td>
      </tr>
      <tr>
        <td>Last Name</td>
        <td><input type="text" placeholder="Type Your Last Name" name="last-name" required></td>
      </tr>
      <tr>
        <td>Date of Birth</td>
        <td><input type="Date" name="dob" required></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><input type="text" placeholder="Your Current Home or Work Address" name="address" required></td>
      </tr>
      <tr>
        <td>Gender</td>
          <td>
          <input type="radio" name="gender" required>Male
          <input type="radio" name="gender" required>Female
          </td>
      </tr>
      <tr>
        <td>Phone</td>
        <td><input type="text" placeholder="Mobile or Home Phone Number" name="phone" required></td>
      </tr>
    </tbody>
  </table>

      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
      <input type="checkbox" value="" name="terms">I Agree
      <input type="checkbox" value="" name="terms">I Disgree

<br>
<br>
      <div class="clearfix">
        <button type="submit" class="signinbtn">Sign In</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
</div>

</div>


  </form>
</div>


<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign In</button>

<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content animate" action="/action_page.php">
    <div class="container">
      <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label><b>Retype Password</b></label>
      <input type="password" placeholder="Retype Password" name="psw-repeat" required>
      <input type="checkbox" checked="checked"> Remember me

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign In</button>
      </div>
    </div>
  </form>
</div>


<script>
// Get the modal
var signup = document.getElementById('id01');
var signin = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(up) {
    if (event.target == signup) {
        modal.style.display = "none";
    }
}


window.onclick = function(in) {
    if (event.target == signin) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>