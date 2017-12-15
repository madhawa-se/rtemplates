<?php

include_once './lib/vars.php';
include_once './lib/preview.php';
$template_name = "x";
if (isset($_GET["t"]) && !empty($_GET["t"])) {
    $template_name = $_GET["t"];
}
include_once './templates/pw_mailshots_mailshot_template_' . $template_name . '_template_html.tpl.php';

//set_template('x');
?>

