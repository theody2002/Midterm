<h3>Provide the Required Information</h3>
<div id="form-block3">
    <form method="POST" action="processes/process.user.php?action=new">
        <div id="form-block-half3">
            <label for="fname">First Name</label>
            <input type="text" id="fname" class="input" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" class="input" name="lastname" placeholder="Your last name..">

            <label for="access">Access Level</label>
            <select id="access" name="access">
              <option value="staff">Staff</option>
              <option value="Owner">Owner</option>
              <option value="Manager">Manager</option>
            </select>
        </div>
        <div id="form-block-half3">
            <label for="email">Email</label>
            <input type="email" id="email" class="input" name="email" placeholder="Your email..">

            <label for="password">Password</label>
            <input type="password" id="password" class="input" name="password" placeholder="Enter password..">

            <label for="confirmpassword">Confirm Password</label>
            <input type="password" id="confirmpassword" class="input" name="confirmpassword" placeholder="Confirm password..">
            
        </div>
        <div id="button-block3">
        <input type="submit" value="Save">
        </div>
  </form>
</div>