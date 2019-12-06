    <!-- START CONTENT SECTION FOR INDIVIDUAL PAGES -->



<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
<legend>Let Night Owl Mercantile know your thoughts!</legend>
    <label>Name</label>
    <input type="text" name="name" size= "44" value ="<?php if (isset($_POST['name'])) {
            echo htmlspecialchars($_POST['name']);} ?>">
    <label>Email</label>
    <input type="Email" name="Email" size= "44" value ="<?php if (isset($_POST['Email'])) {
            echo htmlspecialchars($_POST['Email']);} ?>">
    <label>Topic</label>
        <ul>
          <li><input type="checkbox" name="topic[]" value="general question"
            <?php if(isset($_POST['topic']) && in_array('general question', $topic)) echo 'checked = "checked" ' ; ?>
            >General Question</li>
            <li><input type="checkbox" name="topic[]" value="product question"
            <?php if(isset($_POST['topic']) && in_array('product question', $topic)) echo 'checked = "checked" ' ; ?>
            >Product Question</li>
            <li><input type="checkbox" name="topic[]" value="Order/Billing question"
            <?php if(isset($_POST['topic']) && in_array('Order/Billing question', $topic)) echo 'checked = "checked" ' ; ?>
            >Order/Billing question</li>
            <li><input type="checkbox" name="topic[]" value="Comment/Feedback"
            <?php if(isset($_POST['topic']) && in_array('Comment/Feedback', $topic)) echo 'checked = "checked" ' ; ?>
            >Comment/Feedback</li>
        </ul>
    <label>Add your comments/questions below:</label>
            <textarea name="comments" cols="44" rows="6"><?php if (isset($_POST['comments'])) {
            echo htmlspecialchars($_POST['comments']);} ?></textarea>
  <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>  
    <input type="submit" name="submit" value="Send It" >

<input type="button" onclick= "window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'" value="Reset">

</fieldset>
</form>

