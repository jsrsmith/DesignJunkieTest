<?php
/* Smarty version 3.1.30, created on 2018-01-23 00:38:09
  from "/Applications/MAMP/htdocs/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6675e1679454_11918494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72898f5fd989e08937e4705c0cce118aad4bec0a' => 
    array (
      0 => '/Applications/MAMP/htdocs/index.tpl',
      1 => 1516664250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6675e1679454_11918494 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<!-- tab image -->
<link rel="shortcut icon" type="image/png" href="images/Holmfirth%20Dyers%20Logo.png">

<!-- load jquery -->
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"><?php echo '</script'; ?>
>

<!--recaptcha v2-->
<?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>

<!--link to CSS-->
<link rel="stylesheet" type="text/css" href="css/defaultSetup.css">

<!--responsive web design meta tag-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>



<body>

<!-- create form -->
<form action="index.php" method="post" id="contactForm">

  <div class=name>
      <p>Full name</p>
      <input type="text" name="fullNameInput" value="<?php echo $_smarty_tpl->tpl_vars['fullName']->value;?>
" placeholder="Josh Smith">
  </div>

  <br>

  <div class=telephone>
      <p>Telephone</p>
      <input type="text" name="telephoneInput" value="<?php echo $_smarty_tpl->tpl_vars['telephone']->value;?>
" placeholder="07123456789">
  </div>

  <br>

  <div class=email>
      <p>Email</p>
      <input type="text" name="emailInput" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="j.smith@example.com">
  </div>

  <br>

  <div class=message>
      <p>Message</p>
      <input type="text" name="messageInput" value="<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
" placeholder="Enter your message here">
  </div>

  <br>

  <input type="submit" name="submitContactForm" value="Submit"/>

  <!--recaptcha v2 div-->
  <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>

</form>

</body>

</html>
<?php }
}
