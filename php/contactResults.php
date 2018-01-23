<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'functions.php';
include('../smarty-3.1.30/libs/Smarty.class.php');

// create object
$smarty = new Smarty;

$findEntries = $pdo->prepare('SELECT * FROM contactForm ORDER BY contactID ASC');

//execute query and variables
$findEntries->execute([]);

// if rows above 0, show table
    if ($findEntries->rowCount() > 0)
    {

//get the rows
while($row = $findEntries->fetch(PDO::FETCH_ASSOC)){

$contactID[]            = $row["contactID"];
$fullName[]             = $row["fullName"];
$telephone[]            = $row["telephone"];
$email[]                = $row["email"];
$message[]              = $row["message"];
}
$indexCount = count($contactID);


print'<h1>Contact Form Results - Josh Smith</h1>
<div class=contactCentreAllDivs>
<table class=createContactTable>
<tr>
    <th>ID</th>
    <th>full name</th>
    <th>telephone</th>
    <th>email</th>
    <th>message</th>
  </tr>';

for($index=0; $index < $indexCount; $index++) {

//output the table
print'
<tr>
<td>'. $contactID[$index] .'</td>
<td>'. $fullName[$index] .'</td>
<td>'. $telephone[$index] .'</td>
<td>'. $email[$index] .'</td>
<td>'. $message[$index] .'</td>
</tr>';

    }

print'
</table>
</div>';

    }

    else
    {

echo <<<_END
<div class=noResults>
<p>There are no results in the contact form.</p>
</div>
_END;

    }




// display it
$smarty->display('../tpl/contactResults.tpl');

?>
