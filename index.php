<?php
require_once 'php/functions.php';
include('smarty-3.1.30/libs/Smarty.class.php');

// create object
$smarty = new Smarty;


$fullName = "";
$telephone = "";
$email = "";
$message = "";

// if 'submit' is pressed
if (isset($_POST['submitContactForm']))
{

        //declare variables
        $fullName = ($_POST['fullNameInput']);
        $telephone = ($_POST['telephoneInput']);
        $email = ($_POST['emailInput']);
        $message = ($_POST['messageInput']);

        // (Add php verification here if also required)

        $recaptchaResponse = $_POST['g-recaptcha-response'];
        $secretKey = '6Lfk_UEUAAAAADds4RktDFwNc9-CRrnO6x8Xc2xP';
        $request = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$recaptchaResponse);
        $obj = json_decode($request);
        if($obj->success == true)

        {

        //perform PDO
        $enterContactForm = $pdo->prepare('INSERT INTO contactForm (fullName, telephone, email, message) VALUES(?, ?, ?, ?)');

        //execute query and variables
        $enterContactForm->execute([$fullName, $telephone, $email, $message]);

echo <<<_END
<script>
  window.location.href = "php/contactResults.php";
</script>
_END;

        }

        else

        {

echo <<<_END
<div id=reCAPTCHANotFilledIn>
<p>Let us know your not a bot!</p>
</div>
_END;

        }
  }

// display it
$smarty->display('tpl/index.tpl');

?>
