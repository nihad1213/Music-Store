<?php
    session_start();
    if ( isset($_POST['captcha']) && ($_POST['captcha']!= '' )) {
        // Validation: Checking entered captcha code with the generated captcha code
        // Note: the captcha code is compared case insensitively.
        if ( strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0 ) {
            echo '<script>alert("Your captcha code isn\'t matching")</script>'; 
        } else {
            echo '<script>alert("Your captcha code is matching")</script>';	
        }
    }
?>

<?php include_once "header.php";?>
<main>
    <div>
        <h2>Communication</h2>
    </div>
    <br><br>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.685509448926!2d-122.47870082499705!3d37.7505216135581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7d8c094b2f2b%3A0xf295f647902fcdd6!2zMTl0aCBBdmUsIFNhbiBGcmFuY2lzY28sIENBLCBBbWVyaWthIEJpcmzJmcWfbWnFnyDFnnRhdGxhcsSx!5e0!3m2!1saz!2saz!4v1709487245054!5m2!1saz!2saz" 
            width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    
    <br><br>
    
    <div>
        <h2>Contact information:</h2>
        <p><a href="../index.html">www.rhythmrepublic com</a></p>
    </div>
    
    <div>
        <h4><strong>Address:</strong></h4>
        <p>San Francisco, 3825 Boring Lane, 94124</p>
    </div>

    <div>
        <h4><strong>Phone Number 1:</strong></h4>
        <p>+ 01 234 567 88</p>
    </div>

    <div>
        <h4><strong>Phone Number 2:</strong></h4>
        <p> + 01 234 567 89</p>
    </div>

    <div>
        <h4><strong>E-mail:</strong></h4>
        <a href="mailto:rhythm@republic.com">rhythm@republic.com</a>
    </div>

    <div>
        <h4><strong>Send Message:</strong></h4>
        <form action="">
            <div><input type="text" placeholder="Name Surname"></div><br>
            <div><input type="text" placeholder="E-mail"></div><br>
            <div><input type="number" placeholder="Phone"></div><br>
            <div><textarea name="text" id="text" cols="30" rows="10" placeholder="Enter text"></textarea></div><br>
        </form>
    </div>

    <div>
        <h4><strong>Enter Captcha Text:</strong></h4>
        <img src="../captcha/captcha.php?rand = <?php echo rand(); ?>" alt="captcha_image" id="captcha_image">
        <p>Can't read image?<a href="javascript: refreshCaptcha()"> Click Here</a></p>
        
        <form mame="form" method="post">
            <input type="text" name="captcha">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

</main>
<script src="../script/captcha.js"></script>

<?php include_once "footer.php"?>