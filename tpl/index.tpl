<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<!-- tab image -->
<link rel="shortcut icon" type="image/png" href="images/smiley.png">

<!--link to CSS-->
<link rel="stylesheet" type="text/css" href="../css/index.css">

<!-- load jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!--jquery file - form validation-->
 <script
 src='js/contactFormValidation.js'>
 </script>

<!--recaptcha v2-->
<script src='https://www.google.com/recaptcha/api.js'></script>

<!--responsive web design meta tag-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- title-->
<title>Design Junkie | Developer Test</title>

</head>



<body>

<h1>Contact Form Developer Test - Josh Smith</h1>

<div class="linkToResults">
<a href="../php/contactResults.php">Navigate to results</a>
</div>

<div class="container">

<!-- create form -->
<form action="index.php" method="post" id="contactForm">

  <div class=name>
      <p>Full name</p>
      <input type="text" name="fullNameInput" value="{$fullName}" placeholder="Josh Smith">
  </div>

  <br>

  <div class=telephone>
      <p>Telephone</p>
      <input type="text" name="telephoneInput" value="{$telephone}" placeholder="07123456789">
  </div>

  <br>

  <div class=email>
      <p>Email</p>
      <input type="text" name="emailInput" value="{$email}" placeholder="j.smith@example.com">
  </div>

  <br>

  <!--<div class=message>
      <p>Message</p>
      <input type="text" name="messageInput" class="messageInput" value="{$message}" placeholder="Enter your message here">
  </div>-->

  <div class=message>
      <p>Message</p>
  <textarea name="messageInput" class="messageInput" maxlength="500" placeholder="Enter your message here">{$message}</textarea>
  </div>

  <br>

  <!--recaptcha v2 div-->
  <div class=g-recaptchaCentral>
  <div class="g-recaptcha" data-sitekey="6Lfk_UEUAAAAAISWTn_kite9qWScF7Sn1JhfU2d1"></div>
  </div>

  <br>

  <div class=notFilledIn>
    <p>sorry! Every field must be filled in.</p>
  </div>

  <div class=emailInvalid>
    <p>sorry! Invalid email address.</p>
  </div>

  <div class=phoneInvalid>
    <p>sorry! Invalid phone number.</p>
  </div>

  <br>

  <input type="submit" name="submitContactForm" value="Submit"/>

</form>

</div>

</body>

</html>
