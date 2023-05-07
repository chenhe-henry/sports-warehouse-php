<?php

// Config
define("TITLE", "Contact Page");
//   $title = "Contact Page";

// Start output buffering (trap output, don't display it yet)
ob_start();
// Include the page-specific template
include_once "./templates/_comingSoon.html.php";
include_once "./templates/_form.html.php";
// Stop output buffering - store output into our $output variable
$output = ob_get_clean();

// Include layout template
include_once "./templates/_layout.html.php";
