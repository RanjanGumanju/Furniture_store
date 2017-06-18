<link href="<?php echo base_url(); ?>assets/css/loginstyle.css" rel="stylesheet"/>
<form class="login" action="<?php echo base_url();?>usercontroller/checkLogin" method="post">
    <div class="container">
        <label><b>Email</b></label>
        <input type="text" placeholder="Enter email address" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <b>Don't have an account</b>
    </div>
</form>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register</button>
<div id="id01" class="modal">
    <form action="<?php echo base_url();?>usercontroller/register" method="post" class="modal-content animate">
        <div class="container">
            <label><b>First name:</b></label><input type="text" placeholder="Enter firstname" name="fname" required>

            <label><b>Last name:</b></label><input type="text" placeholder="Enter lastname" name="lname" required>

            <label><b>Email</b></label><input type="text" placeholder="Enter Email" name="email" required>

            <label><b>Password</b></label><input type="password" placeholder="Enter Password" name="psw" required>

            <label><b>Address</b></label><input type="password" placeholder="Enter address" name="address" required>

            <label><b>Phone number</b></label><input type="text" placeholder="Enter phone number" name="phone" required>

            <input type="checkbox" checked="checked"> Remember me
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
        </div>
    </form>

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>




