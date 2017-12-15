<?php

$vars = array();
$vars['site_name'] = "Test site";
$vars['site_name'] = "Test site";
$vars['site_mail'] = "Email@gmail.com";
$vars['site_slogan'] = "slogan";
$vars['site_mission'] = "our mission";
$vars['site_footer'] = "footer";

// Company VAT and Registration Information
$vars['company_vatno'] = variable_get('company_vatno', '');
$vars['company_regno'] = variable_get('company_regno', '');
$vars['company_regloc'] = variable_get('company_regloc', '');

// Primary Company Location
$vars['company_address1'] = "Suite A First Floor";
$vars['company_address2'] = "2 Ty Nant Court";
$vars['company_address3'] = "Morganstown";
$vars['company_city'] = "Cardiff";
$vars['company_county'] = "England";
$vars['company_postcode'] = "CF15 8LW";
$vars['company_country'] = variable_get('company_country', '');
$vars['company_phone'] = "07971 161731";
$vars['company_phone_sanitised'] = str_replace(' ', '', variable_get('company_phone', '')); // Use in 'tel' attribute for displaying number on mobile screens
$vars['company_alt_number'] = variable_get('company_phone2', '');
$vars['company_fax'] = variable_get('company_fax', '');
$vars['company_mobile'] = variable_get('company_mobile', '');
$vars['company_pager'] = variable_get('company_pager', '');


//fixes

$vars["mailshot_nid"]="5";
$vars["subject_line"]="subject";
$vars["unsubscribe_url"]="test/unsub";
$vars["base_root"]="root";
$vars["company_web"]="www.example.com";


extract($vars);
function variable_get($name, $x) {
    return "test";
}
function drupal_get_path($x,$y){
    return "xtheme";
}

?>
