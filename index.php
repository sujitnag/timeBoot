$access_token = "EAAdzYMgKkLoBADKIlnm8wfnvPyYmbjAESS5YgEHHO6aCVshedTqN1I1JKn72udZB3NzXme3Bg75UBZA1aIt7heqkClJyUL3Yjd6V90vWXiALqm8730lfCfDMZCkUNeI3qsN2ap35ulEGJh97glUS0NlQYNpdhKRa5jQWZA780AZDZD";
$verify_token = "fb_time_bot";
$hub_verify_token = null;
if(isset($_REQUEST['hub_challenge'])) {
 $challenge = $_REQUEST['hub_challenge'];
 $hub_verify_token = $_REQUEST['hub_verify_token'];
}
if ($hub_verify_token === $verify_token) {
 echo $challenge;
}
