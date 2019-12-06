    <!-- START CONTENT SECTION FOR INDIVIDUAL PAGES -->
<?php
include 'includes/Fheader.php'; 
?>

<h2 class="pageID"><i class="<?=$logo ?>"></i> <?=$PageID ?></h2>

 <p class="important"><em>This form will be more detailed than the contact form, with some drop down options, possibly checkboxes and radio buttons, and likely a number of comment field categories.</em></p>

<?php
    include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "zen.sorcere@gmail.com";  //place your/your client's email address here
        $toName = "Mike Gilson"; //place your client's name here
        $website = "Night Owl Mercantile - Order";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('orderform.php');#demonstrates multiple form elements

?>
 <!--END CONTENT SECTION FOR INDIVIDUAL PAGES -->

 <?php include 'includes/Ffooter.php'; ?>