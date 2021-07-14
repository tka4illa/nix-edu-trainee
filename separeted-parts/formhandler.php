<?php
$dateFilter = "~[0-1][0-9]-[0-1][0-9]-[0-3][0-9]~";
$timeFilter = "~[0-4][0-9]:[0-5][0-9]:[0-5][0-9]~";
$read = file('posts.txt');
/*read starts here*/
$readArrayTime = array();
$readArrayDate = array();
$readArrayPost = array();
foreach ($read as $line){
    if (preg_match($dateFilter, $line)){
        array_push($readArrayDate, $line);
    }
    elseif (preg_match($timeFilter, $line)){
        array_push($readArrayTime, $line);
    }
    else{
        array_push($readArrayPost, $line);
    }
}
$postsNumber = count($readArrayPost);
for ($postId=0; $postId<$postsNumber; $postId++) {
    echo '<div class="postdate">' . $readArrayTime["$postId"];
    echo $readArrayDate["$postId"] . '<br></div>';
    echo '<div class="post">' . $readArrayPost["$postId"] . '<br></div>';
}
?>