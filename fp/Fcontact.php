    <!-- START CONTENT SECTION FOR INDIVIDUAL PAGES -->
<?php

include 'includes/Fheader.php'; 
?>

<h2 class="pageID"><i class="<?=$logo ?>"></i> <?=$PageID ?></h2>

 <p class="important"><em>This will be a simple form for general questions. Likely just a few fields, maybe a few radio buttons for topic of general questions/comments.</em></p>

 <p>Have a question or comment?  Connect with us below!</p>

<?php
    include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "zen.sorcere@gmail.com";  //place your/your client's email address here
        $toName = "Mike Gilson"; //place your client's name here
        $website = "Night Owl Mercantile - Contact";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('contact.php');#demonstrates multiple form elements

?>
 <!--END CONTENT SECTION FOR INDIVIDUAL PAGES -->

 <?php include 'includes/Ffooter.php'; ?>