
<?php
//$link = mysqli_connect("localhost","stopchil_bbadba","stop_123");
//$db = mysql_select_db("stopchil_BBADB",$link);

/*Define constant to connect to database */
//DEFINE('DATABASE_USER', 'stopchil_bbadba');
//DEFINE('DATABASE_PASSWORD', 'stop_123');
//DEFINE('DATABASE_HOST', 'localhost');
//DEFINE('DATABASE_NAME', 'stopchil_BBADB');
/*Default time zone ,to be able to send mail */
date_default_timezone_set('Asia/Calcutta');

/*You might not need this */
//ini_set('SMTP', "mail.myt.mu"); // Overide The Default Php.ini settings for sending mail


//This is the address that will appear coming from ( Sender )
//define('EMAIL', 'sumit@bba.org.in');

/*Define the root url where the script will be found such as http://website.com or http://website.com/Folder/ */
//DEFINE('WEBSITE_URL', 'http://www.stopchildlabour.in/bba');

//define('TEACHER_TABLE','tbl_children');
//define('VILLAGE_TABLE','tbl_master_village');
// Make the connection:
//$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,
    //DATABASE_NAME);

//if (!$dbc) {
    //trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
//}
?>
<?php
$con=mysqli_connect('localhost','root','','childlabor');

if (!$con){  
  die(mysqli_error($con));
}
?>