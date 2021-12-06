<?php
$openPage =
    $_GET["openPage"]
    ?? $_POST["openPage"]
    ?? "index";

require_once("templates/header.php");
require_once("pages/" . $openPage . "/index.php");
require_once("templates/footer.php");