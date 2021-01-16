<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>

<div>
    <div class="topbar">
        <img class="logo" src="assets/logo.png" />

        <div class="topnav">
        <a class="
        <?php
            session_start();
            if($_SESSION["page_index"] == 0) {
                echo 'active'; 
            }
        ?>" href="index.php">Home</a>
        <a class="
        <?php
            session_start();
            if($_SESSION["page_index"] == 1) {
                echo 'active'; 
            }
        ?>" href="about.php">About Us</a>
        <a class="
        <?php
            session_start();
            if($_SESSION["page_index"] == 2) {
                echo 'active'; 
            }
        ?>" href="portfolio.php">Portfolio</a>
        <a class="
        <?php
            session_start();
            if($_SESSION["page_index"] == 3) {
                echo 'active'; 
            }
        ?>" href="services.php">Services</a>
        <a class="
        <?php
            session_start();
            if($_SESSION["page_index"] == 4) {
                echo 'active'; 
            }
        ?>" href="contact.php">Contact Us</a>
        </div>

    </div>
</div>

</BODY>
</HTML>