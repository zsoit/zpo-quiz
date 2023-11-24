<?php
define("APP_TITLE","Quiz- ZPO Monasterski & Marciniak");
define("DATABASE", "./database/data.db");

foreach(glob("src/class/*.php") as $class) require_once $class;


$Page = new PageController();
$Page->include_html("__head");
$Page->include_html("__nav");
$Page->Start();
$Page->include_html("__footer");

