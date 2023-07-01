<?php  include 'alert.php'?>
<header class="animated fadeInDown" id="header">
    <div class="header-div-in">
       
        <a href="<?php echo $website_url?>"> 
            <div class="logo-div">
                <img src="<?php echo $website_url?>/all-images/images/logo.png" alt="<?php $thename?> Logo">
            </div>
        </a>

        <nav>
            <ul>
                <a href="<?php echo $website_url?>"> <li <?php if (($page=='index.php')) {?> class="active-li" <?php }?>>HOME PAGE</li></a>
                <a href="<?php echo $website_url?>/about-us"> <li <?php if (($page=='about-us.php')) {?> class="active-li" <?php }?>>ABOUT US</li></a>
                <a href="<?php echo $website_url?>/services"> <li <?php if (($page=='services.php')) {?> class="active-li" <?php }?>>SERVICES</li></a>
                <a href="<?php echo $website_url?>/solution"> <li <?php if (($page=='solution.php')) {?> class="active-li" <?php }?>>SOLUTION</li></a>
                <a href="<?php echo $website_url?>/training"> <li <?php if (($page=='training.php')) {?> class="active-li" <?php }?>>TRAINING</li></a>
                <a href="<?php echo $website_url?>/blog"> <li <?php if (($page=='blog.php')) {?> class="active" <?php }?>>BLOG</li></a>
                <a href="<?php echo $website_url?>/contact-us"> <li <?php if (($page=='contact-us.php')) {?> class="active-li" <?php }?>>CONTACT US</li> </a>
            </ul>
        </nav>

        <div class="contact-text icon">
            <i class="bi bi-windows"></i>
        </div>
        <div class="contact-text icon">
            <i class="bi-search"></i> 
        </div>
        <div class="contact-text">
            <i class="bi-phone"></i> <div class="text">Hotline 24/7 <br> 08191252996</div>
        </div>
        
<br clear="all"/>
    </div>


</header>