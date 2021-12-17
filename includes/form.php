<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <h4>Please fill out the form</h4>
    <fieldset id="contact-fieldset">



        <!-- sticky -->

        <span class="error">
            <?php echo $username_error; ?>
        </span>

        <label for="email">Email</label>
        <input type="email" name="email" value="<?php if (isset($_POST['email'])) {
    echo htmlspecialchars($_POST['email']);
}

?>">

        <span class="error">
            <?php echo $email_error; ?>
        </span>

        <span class="error">
            <?php echo $age_error; ?>
        </span>

        <span class="error">
            <?php echo $song_error; ?>
        </span>
        <label for="age">Age</label>
        <select name="age" id="">
            <option value="" NULL <?php if (isset($_POST['age']) && $_POST['age'] == null) {
    echo 'selected="unselected"';
}?>>Select One</option>
            <option value="12-18" <?php if (isset($_POST['age']) && $_POST['age'] == '12-18') {
    echo 'selected="unselected"';
}?>> 12-18</option>
            <option value="18-24" <?php if (isset($_POST['age']) && $_POST['age'] == '18-24') {
    echo 'selected="unselected"';
}?>> 18-24</option>
            <option value="25-34" <?php if (isset($_POST['age']) && $_POST['age'] == '25-34') {
    echo 'selected="unselected"';
}?>> 25-34</option>
            <option value="35-49" <?php if (isset($_POST['age']) && $_POST['age'] == '35-49') {
    echo 'selected="unselected"';
}?>>50+</option>
            <span class="error">
                <?php echo $age_error; ?>
            </span>
            <label for="comments"><textarea name="comments"
                    placeholder="Leave a comment"><?php if (isset($_POST['comments'])) {echo htmlspecialchars($_POST['comments']);}?></textarea></label>
            <span class="error">
                <?php echo $comments_error; ?>
            </span>

        </select>

    </fieldset>
    <input type="submit" value="Send It">
    <p><a href="">Reset</a></p>
</form>