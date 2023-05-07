<h1 class="center">Contact form</h1>

<p>Please fill out the contact form.</p>

<form action="processRegistration.php" method="post">
    <fieldset class="info">
        <div class="form-row required">
            <label for="firstName">First name:</label>
            <input type="text" name="firstName" id="firstName" required>
        </div>

        <div class="form-row required">
            <label for="lastName">Last name:</label>
            <input type="text" name="lastName" id="lastName" required>
        </div>
        <div class="form-row required">
            <label for="emailAddress">Email Address:</label>
            <input type="text" name="emailAddress" id="emailAddress" required>
        </div>
        <div class="form-row">
            <label for="contactNumber">Contact Number:</label>
            <input type="tel" name="contactNumber" id="contactNumber">
        </div>

        <div class="form-row">
            <label for="comments">Any questions?</label>
            <textarea name="comments" id="comments" cols="30" rows="4"></textarea>
        </div>

        <div class="form-row">
            <button type="submit" name="submitRegister">Submit</button>
        </div>
    </fieldset>
</form>
