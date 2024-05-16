<?php
error_reporting(0);
define("DBHOST", "localhost");
//define("DBUSER", "root");
//define("DBPASS", "");
//define("DBNAME", "franchsr_franchis_events");
define("DBUSER", "franchsr_fievent");
define("DBPASS", "BaNk@si61A16");
define("DBNAME", "franchsr_franchis_events");

$Charges = array("OPTCRDC" => "2.06", "OPTDBCRD" => "1.06", "OPTNBK" => "2.12", "OPTCASHC" => "0", "OPTMOBP" => "0", "OPTEMI" => "2.12", "OPTWLT" => "0", "Paytm" => "2.36");

$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
if (!$link) {
    die('Not connected : ' . mysqli_error());
}

?>