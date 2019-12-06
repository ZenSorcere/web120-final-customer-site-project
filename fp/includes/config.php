<?php



// this constant allows a page to know it's own url/name
define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// this allows us to dynamically change certain elements based on the page we are on
switch(THIS_PAGE)
{
    case 'catalog.php':
        $title = 'Night Owl Mercantile - Home';
        $logo = 'fas fa-images'; //change to this font awesome icon
        $PageID = 'Catalog';
        break;
    case 'Forderform.php':
        $title = 'Custom Order Form';
        $logo = 'fas fa-file-alt';
        $PageID = 'Custom Order Form';
        break;
    case 'about.php':
        $title = 'About Us';
        $logo = 'fas fa-address-card';
        $PageID = 'Who We Are';
        break;
    case 'Fcontact.php':
        $title = 'Contact Us';
        $logo = 'fas fa-envelope';
        $PageID = 'Contact Us';
        break;
    case 'cart.php':
        $title = 'Shopping Cart';
        $logo = 'fas fa-cart-plus';
        $PageID = 'Shopping Cart';
        break;
    case 'thanks.php':
        $title = 'Thank You!';
        $logo = 'fas fa-smile';
        $PageID = 'Thank You!';
        break;
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}

?>