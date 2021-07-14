<?php
include 'separeted-parts/head.html';
include 'separeted-parts/header.html';
include 'separeted-parts/altmenu.html';
$postArray = array(
    'date' => date('d-m-y')." ",
    'time' => date('h:i:s'." "),
    'post' => $_POST['text']." "
);
/*Start writing here*/
if ($postArray['post'] != " ") {
    foreach ($postArray as $key => $value) {
        file_put_contents('posts.txt', $value . "\n", FILE_APPEND);
    }
}
?>
<h1>thank u for posting</h1>
<?php include 'separeted-parts/footer.html';?>