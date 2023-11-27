<?php
define("APP_TITLE","Quiz- ZPO Monasterski & Marciniak");
define("DATABASE", "./database/data.db");

foreach(glob("src/class/*.php") as $class) require_once $class;

Quiz::Run();
