<?php

include '../inc/config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Name = trim($_POST['name']);
    $Email = trim($_POST['email']);
    $Subject = trim($_POST['subject']);
    $Message = trim($_POST['message']);

    // Validation
    if ($Name == "") {
      //Add validation error('please add your name')
      $NoName = true;
    }
    if ($Email == "") {
      //Add validation error('please add your last name')
      $NoEmail = true;
    }
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      //Add validation error('please enter a valid email');
      $NoEmail = true;
    }
    if ($Subject == "") {
      //Add validation error('please add your email address')
      $NoSubject = true;
    }
    if ($Message == "") {
      //Add validation error('please add a message')
      $NoMessage = true;
    }
    //Stripos Validation
    foreach( $_POST as $value ) {
      if ( stripos($value, 'Content-type:') != false ) {
        echo "There was a problem with the information that you entered.";
        exit;
      }
    }
    //Malicious Validation
    // if ($_POST['address'] != "") {
    //   echo "Your form submission has an error.";
    //   exit;
    // }

    require_once(ROOT_DIRECTORY . '/inc/phpmailer/class.phpmailer.php');

    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    $body = "";
    $body = $body . "Name: " . $Name . "<br>";
    $body = $body . "E-Mail: " . $Email . "<br>";
    $body = $body . "Subject: " . $Subject . "<br>";
    $body = $body . "Message: " . $Message;

    //Set who the message is to be sent from
    $mail->setFrom($Email, $Name);
    //Set who the message is to be sent to
    $mail->addAddress('rynslmns@gmail.com', 'Contact Inquiry');
    //Set the subject line
    $mail->Subject = 'Contact Inquiry | ' . $Name;
    //convert HTML into a basic plain-text alternative body
    $mail->msgHTML($body);


    if (($NoName == false) AND ($NoEmail == false) AND ($NoMessage == false)) {
      //send the message, check for errors
      if (!$mail->send()) {
          echo "There was an error sending your message: " . $mail->ErrorInfo;
          exit;
      }
      //redirects to sent page
      header('Location: index.php?status=sent');
      exit;
    }
}


$Title = 'Ryan Salmons | Contact';
$HeaderClass = ">";
$NavClass = "contact";
$ContactClass = ">";
$InitFile = "js/init-alt.js";
include ROOT_DIRECTORY . '/inc/header.php';

?>

<!-- Main -->
  <article id="main">

    <header class="special container">
      <span class="icon fa-envelope"></span>
      <h2>Get In Touch</h2>
    </header>

    <?php if (isset($_GET['status']) AND $_GET['status'] == "sent") { ?>

      <!-- Sent -->
        <section class="wrapper style4 special container small">

          <!-- Content -->
            <div class="content">
              <img class="checkmark" src="<?php echo BASE_DIRECTORY . 'images/checkmark.svg';?>">
              <h3>Your message was successfully sent!</h3>
              <p>I will respond to you as soon as possible.</p>
            </div>

        </section>

      <?php } else { ?>

    <!-- One -->
      <section class="wrapper style4 special container small">

        <!-- Content -->
          <div class="content">
            <form method="post" action="index.php">
              <div class="row half collapse-at-2">
                <div class="6u">
                  <input type="text" name="name" placeholder="Name" />
                </div>
                <div class="6u">
                  <input type="text" name="email" placeholder="Email" />
                </div>
              </div>
              <div class="row half">
                <div class="12u">
                  <input type="text" name="subject" placeholder="Subject" />
                </div>
              </div>
              <div class="row half">
                <div class="12u">
                  <textarea name="message" placeholder="Message" rows="7"></textarea>
                </div>
              </div>
              <?php if($NoEmail == true OR $NoEmail == true OR $NoSubject == true OR $NoMessage == true){ ?>
                <div class="row half">
                  <div class="12u">
                    <p>Please make sure to fill out all of the fields.</p>
                  </div>
                </div>
              <?php } ?>
              <div class="row">
                <div class="12u">
                  <ul class="buttons">
                    <li><input type="submit" class="special" value="Send Message" /></li>
                  </ul>
                </div>
              </div>
            </form>
          </div>

      </section>

      <?php } ?>


  </article>


<?php

include ROOT_DIRECTORY . '/inc/footer.php';

?>
