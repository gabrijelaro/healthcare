<?php
get_header();
?>
<?php $description = get_field('description'); ?>
<?php $contact = get_field('contact_us'); ?>
<?php $products = get_field('products'); ?>




<div id="main1" class="content-divs">

    <h3>
        <?php echo $description['main_title']; ?>
    </h3>
    <?php echo $description['embed_a_video']; ?>

    <p>
        <?php echo $description['main_text_area']; ?>
    </p>
    <p>
        <?php echo $description['main_text_area_2']; ?>
    </p>
    <p>
        <?php echo $description['main_text_area_3']; ?>
    </p>
    <p>
        <?php echo $description['main_text_area_4']; ?>
    </p>

</div>

<div id="main2" class="content-divs">
        
        <h4 class="titles">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <?php the_field('contact_us'); ?>
        </h4>
        <?php echo do_shortcode('[contact-form-7 id="28" title="Contact"]'); ?>

</div>



<div class="information" id="contact">
    <h4 class="titles">OUR PRODUCTS</h4>
    <a href="#" class="links">
        <img id="tethre"src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-billsure.png">Teathre Management</a>
    <a href="#" class="links"><img id="tethre"src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-claimsure.png">Emergency and Trauma</a>
    <a href="#" class="links">  <img id="tethre"src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_virtual_clinic.png">Virtual Clinic</a>
    <a href="#" class="links">  <img id="tethre"src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_Stock_Mangement.png">Stock Management</a>
    <p>
        Follow Us: <i class="fa fa-linkedin" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
    </p>
</div>
<div class="information" id="contact2">
    <h4 class="titles">CONTACT US</h4>
   <span><i class="fa fa-map" aria-hidden="true"></i>Greenbank House,
        Galton Way, Hadzor, Droitwich, Worcestershire, WR9 7ER</span>

    <a href=""><i class="fa fa-phone" aria-hidden="true"></i>Ph: 0333 014 6262 </a>
   <a href=""><i class="fa fa-envelope" aria-hidden="true"></i>info@bluespier.com</a>
    <input type="submit" id="contact-btn" value="GET IN TOUCH" class="contact-form-btn" />
</div>

<div class="information"id="contact3">

    <h1>REQUEST A CONSULTATION</h1>
    <input type="submit" value="CALL ME BACK" class="info-btn" />

</div>




<?php
get_footer();
?>