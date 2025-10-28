<?php

// echo $rows['sitetitle']; exit;
include 'includes/header.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$error = '';
$message = '';
// Function to sanitize inputs
if (isset($_POST['submit'])) {


    function clean_input($data)
    {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    // Collect and sanitize POST data
    $name = clean_input($_POST['name'] ?? '');
    $email = clean_input($_POST['email'] ?? '');
    $phone = clean_input($_POST['phone'] ?? '');
    $msgsubject = clean_input($_POST['msgsubject'] ?? '');
    $message = clean_input($_POST['message'] ?? '');
    $status = 0;

    // Email Notification
    require 'vendor/autoload.php';
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = '';
        $mail->SMTPAuth   = true;
        $mail->Username   = '';
        $mail->Password   = '';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('', '');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Hi ' . $name;
        $mail->Body    = '<html>
                        <body>
                        <table style="border-collapse:collapse;max-width:300px; ">
                        <tbody>
                            <tr>
                                <td><b>Thank You for Contacting Us</b><br>
                                    <br>
                                    This is to confirm that Your mail has been received successfully and will be acted upon promptly <br>
                                     <p style="font-weight: bold;">Please reply below </p>
                    
                                     If you have any further questions..
                    
                                    <hr style="border:0;border-bottom:1px solid #008000">
                    
                                    <p><a href="https://www.zenithconstructionltd.com/projects/?p=projects" style="color: #fff; text-decoration:none; background-color: #008000; padding: 10px; border:5px 0 5px 0;">Explore our Various Services</a></p> <br>
                                   
                                    Kind Regards,<br>
                                    <strong>Zenith Construction Ltd</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                        </body>
                        </html>';
        // echo 'Message has been sent'; exit;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }



    //Create an instance; passing `true` enables exceptions
    $copymail = new PHPMailer(true);

    try {
        //Server settings
        $copymail->SMTPDebug = 0;
        $copymail->isSMTP();
        $copymail->Host       = '';
        $copymail->SMTPAuth   = true;
        $copymail->Username   = '';                     //SMTP username
        $copymail->Password   = '';
        $copymail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $copymail->Port       = 465;
        $copymail->setFrom($email,  $name);
        $copymail->addAddress('');
        $copymail->addCC('', '');
        $copymail->addBCC('');
        $copymail->isHTML(true);                                  //Set ecopymail format to HTML
        $copymail->Subject = $msgsubject;
        $copymail->Body    = '<html>
                        <body>
                        <table style="border-collapse:collapse;max-width:300px; ">
                        <tbody>
                            <tr>
                                <h2 style="border-top: 2px thick #008000"> New Message received from ' . $name. '</h2>
                               
                               
                                <p style="padding: 20px; margin:auto; border-bottom: 2px thick #008000"> ' . $message . ' </p>
                               
                            </tr>
                        </tbody>
                    </table>
                        </body>
                        </html>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$copymail->ErrorInfo}";
    }



    // Spam & unwanted word detection
    $banned_words = ['spam', 'viagra', 'bitcoin', 'lottery', 'win money', 'sex', 'porn', 'credit card', 'loan offer'];
    foreach ($banned_words as $bad) {
        if (stripos($message, $bad) !== false || stripos($msgsubject, $bad) !== false) {
            // echo json_encode(['status' => 'error', 'message' => 'Message contains prohibited content.']);
            $error = 'Message contains prohibited content.';
        }
    }

    // Prevent repeated spam (simple rate limit per IP)
    $ip = $_SERVER['REMOTE_ADDR'];
    $checkSpam = "SELECT COUNT(*) AS attempts FROM tblcontactusquery WHERE PostingDate > NOW() - INTERVAL 2 MINUTE AND INET_ATON('$ip') = INET_ATON('$ip')";
    $query = $dbh->prepare($checkSpam);
    $query->execute();
    $results = $query->fetch(PDO::FETCH_ASSOC);
    // $row = $checkSpam->fetch_assoc();
    if ($results['attempts'] > 3) {
        // echo json_encode(['status' => 'error', 'message' => 'Too many attempts. Try again later.']);
        $error = 'Too many attempts. Try again later.';
    } elseif (empty($name) || empty($email) || empty($phone) || empty($msgsubject) || empty($message)) {
        // Check required fields
        // echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        $error = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Validate email
        // echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
        $error = 'Invalid email address.';
    } else {
        $checkrows = "SELECT * FROM tblcontactusquery WHERE name = :name AND EmailId = :email AND msgsubject=:msgsubject AND Message=:message";
        $query = $dbh->prepare($checkrows);
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':msgsubject', $msgsubject, PDO::PARAM_STR);
        $query->bindParam(':message', $message, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetch(PDO::FETCH_ASSOC);
        if (!empty($results)) {
            $error = 'Mail Already Sent, Expect to hear from us soonest.';
        } else {
            // Save message to database
            $stmt = "INSERT INTO tblcontactusquery 
                    (name, EmailId, ContactNumber, msgsubject, Message, status) 
                    VALUES (:name, :email, :phone, :msgsubject, :message, :status)";
            $query = $dbh->prepare($stmt);
            $query->bindParam(':name', $name, PDO::PARAM_STR);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':phone', $phone, PDO::PARAM_STR);
            $query->bindParam(':msgsubject', $msgsubject, PDO::PARAM_STR);
            $query->bindParam(':message', $message, PDO::PARAM_STR);
            $query->bindParam(':status', $status, PDO::PARAM_STR);
            // $stmt->bind_param("ssssss", $name, $email, $phone, $msgsubject, $message, $status);
            $query->execute();
            if ($query) {

                $mail->send();
                $copymail->send();
                // echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully!']);
                $message = 'Your message has been sent successfully!';
                //    header("Location: ../contact-us?p=contactus");
            } else {
                // echo json_encode(['status' => 'error', 'message' => 'Something went wrong, please try again.']);
                $error = 'Something went wrong, please try again.';
                //    header("Location: ../contact-us?p=contactus");
            }
        }
    }
}

// $stmt->close();
// $dbh->close();
?>
<title><?php echo 'Contact Us | ' . $rows['sitetitle'] ?> </title>
<script>
    $(document).ready(function() {
        $('#contactForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: 'includes/contact_process.php',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    $('#formMsg').removeClass('error success').show();

                    if (response.status === 'error') {
                        $('#formMsg').addClass('error').html('❌ ' + response.message);
                    } else if (response.status === 'success') {
                        $('#formMsg').addClass('success').html('✅ ' + response.message);
                        $('#contactForm')[0].reset();
                    }
                },
                error: function() {
                    $('#formMsg').addClass('error').html('⚠️ Server error, please try again.');
                }
            });
        });
    });
</script>
<style>
    .errorWrap {
        background-color: #801818;
        color: #fff;
        padding: 15px 10px;
        position: relative;
        display: block;
        margin-bottom: 20px;
    }

    .succWrap {
        background-color: #0c4a0c;
        color: #fff;
        padding: 15px 10px;
        position: relative;
        display: block;
        margin-bottom: 20px;
    }

    /* Popup (modal) styling */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .modal-content {
        background: white;
        padding: 30px;
        border-radius: 10px;
        text-align: center;
        max-width: 400px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }

    .modal-content.success {
        border-top: 6px solid #2ecc71;
    }

    .modal-content.error {
        border-top: 6px solid #e74c3c;
    }

    .modal-content h3 {
        margin: 0 0 10px 0;
        font-size: 1.5em;
    }

    .modal-content p {
        margin: 0;
    }

    .close-btn {
        background: #00416a;
        color: white;
        padding: 8px 18px;
        margin-top: 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .close-btn:hover {
        background: #0072b5;
    }
</style>

<body class="header-fixed page no-sidebar header-style-2 topbar-style-1 menu-has-search">

    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">
            <!-- Header Wrap -->
            <div id="site-header-wrap">
                <!-- Top Bar -->
                <?php
                include 'includes/top-bar.php';
                ?>
                <!-- /#top-bar -->

                <!-- Header -->
                <header id="site-header">
                    <div id="site-header-inner" class="container">
                        <div class="wrap-inner clearfix">
                            <?php
                            include 'includes/site-logo.php';
                            ?>
                            <!-- /#site-logo -->

                            <div class="mobile-button">
                                <span></span>
                            </div><!-- /.mobile-button -->

                            <?php
                            include 'includes/navbar.php';
                            ?>
                            <!-- /#main-nav -->

                            <div id="header-search">
                                <a href="#" class="header-search-icon">
                                    <span class="search-icon fa fa-search">
                                    </span>
                                </a>

                                <form role="search" method="get" class="header-search-form" action="#">
                                    <label class="screen-reader-text">Search for:</label>
                                    <input type="text" value="" name="s" class="header-search-field" placeholder="Search...">
                                    <button type="submit" class="header-search-submit" title="Search"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- /#header-search -->
                        </div><!-- /.wrap-inner -->
                    </div><!-- /#site-header-inner -->
                </header><!-- /#site-header -->
            </div><!-- #site-header-wrap -->

            <!-- Featured Title -->
            <div id="featured-title" class="featured-title clearfix">
                <div id="featured-title-inner" class="container clearfix">
                    <div class="featured-title-inner-wrap">
                        <div id="breadcrumbs">
                            <div class="breadcrumbs-inner">
                                <div class="breadcrumb-trail">
                                    <a href="index.html" class="trail-begin">Home</a>
                                    <span class="sep">|</span>
                                    <span class="trail-end">Contact</span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-title-heading-wrap">
                            <h1 class="feautured-title-heading">
                                Contact Us
                            </h1>
                        </div>
                    </div><!-- /.featured-title-inner-wrap -->
                </div><!-- /#featured-title-inner -->
            </div>
            <!-- End Featured Title -->

            <!-- Main Content -->
            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">
                                <!-- ICONBOX -->
                                <div class="row-iconbox">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 justify-content-center m-auto">
                                                <div class="zenith-spacer clearfix" data-desktop="81" data-mobile="60" data-smobile="60"></div>
                                              <?php if ($error) { ?><div class="btn-danger p-4"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($message) { ?><div class="btn-success p-4"><strong>SUCCESS</strong>:<?php echo htmlentities($message); ?> </div><?php } ?>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="zenith-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                                <div class="zenith-headings style-1 text-center clearfix">
                                                    <h2 class="heading">CONTACT US</h2>
                                                    <div class="sep has-icon width-125 clearfix">
                                                        <div class="sep-icon">
                                                            <span class="sep-icon-before sep-center sep-solid"></span>
                                                            <span class="icon-wrap"><i class="zenith-icon-build"></i></span>
                                                            <span class="sep-icon-after sep-center sep-solid"></span>
                                                        </div>
                                                    </div>
                                                    <p class="sub-heading font-weight-400 max-width-770 line-height-26 margin-top-14">Are you interested in finding out how zenith Construction Services can make your project a success? For more information on our services please contact us.</p>
                                                </div>
                                                <div class="zenith-spacer clearfix" data-desktop="45" data-mobile="35" data-smobile="35"></div>
                                            </div><!-- /.col-md-12 -->
                                        </div><!-- /.row -->

                                        <div class="row gutter-16">
                                            <div class="col-md-4">
                                                <div class="zenith-icon-box icon-top align-center  accent-color style-3 bg-light-snow clearfix">
                                                    <div class="icon-wrap">
                                                        <i class="icon-phone"></i>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="tel:<?php echo $rows['ContactNo'] ?>"><?php echo $rows['ContactNo'] ?></a></h5>
                                                        <p class="sub-heading">Support 24/7 - Online 24 hours</p>
                                                        <span class="class more-link"><a href="tel:<?php echo $rows['ContactNo'] ?>">Call us now</a></span>
                                                    </div>
                                                </div><!-- /.zenith-icon-box -->
                                            </div><!-- /.col -->
                                            <div class="col-md-4">
                                                <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                                <div class="zenith-icon-box icon-top align-center accent-color style-3 bg-light-snow clearfix">
                                                    <div class="icon-wrap">
                                                        <i class="icon-map"></i>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a><?php echo $rows['Address'] ?></a></h5>
                                                        <p class="sub-heading">Mon- Sat: 7:00 am to 5:30 pm</p>
                                                        <span class="class more-link">Sunday: Close</span>
                                                    </div>
                                                </div><!-- /.zenith-icon-box -->
                                            </div><!-- /.col -->
                                            <div class="col-md-4">
                                                <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                                <div class="zenith-icon-box icon-top align-center accent-color style-3 bg-light-snow clearfix">
                                                    <div class="icon-wrap">
                                                        <i class="icon-envelope"></i>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="mailto:<?php echo $rows['EmailId'] ?>"><?php echo $rows['EmailId'] ?></a></h5>
                                                        <p class="sub-heading">Support 24/7 - Online 24 hours</p>
                                                        <span class="class more-link"><a href="mailto:<?php echo $rows['EmailId'] ?>">Mail us now</a></span>
                                                    </div>
                                                </div><!-- /.zenith-icon-box -->
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="zenith-spacer clearfix" data-desktop="58" data-mobile="35" data-smobile="35"></div>
                                            </div><!-- /.col-md-12 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </div>
                                <!-- END ICONBOX -->

                                <!-- CONTACT -->
                                <div class="row-contact">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-md-8 m-auto">
                                                <div class="zenith-contact-form style-2 w100 clearfix">
                                                    <form id="contactForm" action="" method="post" class="contact-form wpcf7-form">
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                            <input type="text" tabindex="1" id="name" name="name" value="" class="wpcf7-form-control" placeholder="Name*" required>
                                                        </span>
                                                        <span class="wpcf7-form-control-wrap your-email">
                                                            <input type="email" tabindex="3" id="email" name="email" value="" class="wpcf7-form-control" placeholder="Your Email*" required>
                                                        </span>
                                                        <span class="wpcf7-form-control-wrap your-phone">
                                                            <input type="text" tabindex="2" id="phone" name="phone" value="" class="wpcf7-form-control" placeholder="Phone">
                                                        </span>
                                                        <span class="wpcf7-form-control-wrap your-phone">
                                                            <input type="text" tabindex="5" id="msgsubject" name="msgsubject" value="" class="wpcf7-form-control" placeholder="Subject">
                                                        </span>
                                                        <span class="wpcf7-form-control-wrap your-message">
                                                            <textarea name="message" tabindex="5" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Message*" required></textarea>
                                                        </span>
                                                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                                        <span class="wrap-submit">
                                                            <input type="submit" value="SUBMIT" class="submit wpcf7-form-control wpcf7-submit" id="submit" name="submit">
                                                        </span>
                                                        <div class="message" id="formMsg"></div>
                                                    </form>
                                                </div><!-- /.zenith-contact-form -->
                                            </div><!-- /.col-md-6 -->

                                        </div><!-- /.row -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="zenith-spacer clearfix" data-desktop="81" data-mobile="60" data-smobile="60"></div>
                                            </div><!-- /.col-md-12 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container -->
                                </div>
                                <!-- END CONTACT -->
                            </div><!-- /.page-content -->
                        </div><!-- /#inner-content -->
                    </div><!-- /#site-content -->
                </div><!-- /#content-wrap -->
            </div><!-- /#main-content -->

            <!-- Footer -->
            <?php
            include 'includes/footer.php'; ?>

            <a id="scroll-top"></a>

            <!-- Javascript -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/plugins.js"></script>
            <script src="assets/js/tether.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/animsition.js"></script>
            <script src="assets/js/owl.carousel.min.js"></script>
            <script src="assets/js/countto.js"></script>
            <script src="assets/js/equalize.min.js"></script>
            <script src="assets/js/jquery.isotope.min.js"></script>
            <script src="assets/js/owl.carousel2.thumbs.js"></script>

            <script src="assets/js/jquery.cookie.js"></script>
            <script src="assets/js/gmap3.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&amp;region=GB"></script>
            <script src="assets/js/shortcodes.js"></script>
            <script src="assets/js/jquery-validate.js"></script>
            <script src="assets/js/main.js"></script>

            <!-- Revolution Slider -->
            <script src="includes/rev-slider/js/jquery.themepunch.tools.min.js"></script>
            <script src="includes/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
            <script src="assets/js/rev-slider.js"></script>
            <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
            <script src="includes/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
            <script src="includes/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
            <script src="includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
            <script src="includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
            <script src="includes/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
            <script src="includes/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
            <script src="includes/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
            <script src="includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
            <script src="includes/rev-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>


</html>