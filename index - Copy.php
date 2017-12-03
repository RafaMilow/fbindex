<?php
// session_start();
// error_reporting(E_ALL|E_STRICT);
// ini_set('display_errors', 1);
// require __DIR__ . '/vendor/autoload.php';


// $fb = new \Facebook\Facebook([
//   'app_id' => '1760763894180761',
//   'app_secret' => 'a0a6ad8378ee0f90901b98b7fedfac22',
//   'default_graph_version' => 'v2.7',
//   //'default_access_token' => '1760763894180761|idL6xQ7GVvYzCsLh50YLzfmZq-8', // optional
// ]);

// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
//   $helper = $fb->getRedirectLoginHelper();
//   $helper = $fb->getJavaScriptHelper();
//   $helper = $fb->getCanvasHelper();
//   $helper = $fb->getPageTabHelper();
function getShares($url){
 $json = json_decode(file_get_contents("http://graph.facebook.com/?ids=".urlencode($url)),true);
 return $json;
}


$url = "http://www.salvemaisum.com.br/campanha/539";
$shareData = getShares($url);
$shares = $shareData[$url]['share']['share_count'];
$comments = $shareData[$url]['share']['comment_count'];

echo "Total Shares: ".$shares;
echo "\nTotal Coments: ".$comments;
echo "\nTotal: ".($shares+$comments);

var_dump($shareData);




// try {
//   // Get the \Facebook\GraphNodes\GraphUser object for the current user.
//   // If you provided a 'default_access_token', the '{access-token}' is optional.
//   $response = $fb->get('/me', 'EAAZABZA8pyK5kBACKZCLTqXJQuRFZBGhk6C2skM5yv55X9sohPySdMKtquQdimbAhVOT8txTQlSIsmkZANWccE73B31c6RgpvmYq6ZBPsKcFRqMH9xXA9WZCCp4pOT7xje9pXKtLZApv5POAChDhwrZCnMY0f2abgIp7iA1ZBzcbExpwZDZD');
// } catch(\Facebook\Exceptions\FacebookResponseException $e) {
//   // When Graph returns an error
//   echo 'Graph returned an error: ' . $e->getMessage();
//   exit;
// } catch(\Facebook\Exceptions\FacebookSDKException $e) {
//   // When validation fails or other local issues
//   echo 'Facebook SDK returned an error: ' . $e->getMessage();
//   exit;
// }

// $me = $response->getGraphUser();
// echo 'Logged in as ' . $me->getName();

