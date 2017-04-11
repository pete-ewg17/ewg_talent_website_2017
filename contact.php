<?php
/**
 * Created by PhpStorm.
 * User: chrisgrant
 * Date: 11/11/16
 * Time: 2:12 PM
 */

define("MANDRIL_KEY", "W0Q6BSAB9PjbhNmlQo1yQQ");
include '../../plugin/mandril.php';

$fomr_type = "X";

$fields_in = array();
foreach($_POST['fields'] as $p) {
    if(isset($p['name'])) {
        if($p['name'] == 'form_type') {
            $fomr_type = $p['value'];
        }
        $fields_in[$p['name']] = $p['value'];
    }
}


$result = array("result"=>true,"type"=>"warning","message","Cheers mate");

switch ($fomr_type) {
    case "demo_request":
        $form_desc = "Main Contact Form";
        $name = $fields_in['name'];
        $message = $fields_in['message'];
        $phone = $fields_in['phone'];
        $email = $fields_in['email'];
        break;
}

$name_prts = explode(" ", $name);
if (count($name_prts) > 1) {
    $firstname = $name_prts[0];
} else {
    $firstname = $name;
}
// $email = $_POST['e'];
$template = 0;
$var_in = print_r($fields_in,true);
$admin_to = "shannan@eventworkforcegroup.com";
    $message = str_replace(array("'","\"",),"",$message);
    sendRosterfyEmail(array("to" => $email, "id" => "-1"), $name, "Comment Received", 'Comment Received', "Hi " . $firstname . ", - {$form_desc}<br/>Thank you for sending us an inquiry. This is just to let you know we have received the following: <br/><br/><em>" . $message . "</em><br/><br/>We will be in touch soon,<br/><br/>Regards<br/><br/>The Event Workforce Group Team", '0',$template);
    sendRosterfyEmail(array("to" =>$admin_to, "id" => "-1"), $name, "Comment From Website", 'Comment From Website', "From: " . $name . "<br/>" . "Email: " . $email . "<br/>Phone: " . $phone . "<br/>Regarding: {$var_in}", '0',$template);


echo json_encode($result);