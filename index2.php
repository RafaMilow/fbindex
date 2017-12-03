<?php
function getData($url){
 $json = json_decode(file_get_contents("https://api.facebook.com/method/fql.query?format=json&query=SELECT+url,normalized_url,total_count,share_count,comment_count,like_count,click_count,commentsbox_count+FROM+link_stat+WHERE+url+%3D+%27".$url."%27"),true);
 return $json;
}

$count = getData("http://mycodingtricks.com");


var_dump($count);

//echo "Likes : ".$count['like_count'];
//echo "Shares : ".$count['share_count'];
//echo "Comments : ".$count['comment_count'];
