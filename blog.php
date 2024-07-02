<?php

$blog = $_POST;

if($blog['publish_status'] === 'un_publish') {
    echo 'No article exists';
    return;
}

//if($blog['publish_status'] === 'un_publish') {
//  foreach($blog as $key => $value) {
//       echo '<pre>';
//       echo $key . ':' . htmlspecialchars($value, ENT_QUOTES, 'UTH-8');
//       echo '</pre>';

//   }
    
//} elseif($blog['publish_status'] === 'un_publish')  {
//   echo 'There are no published articles.';
//} else {
//    echo 'No article exists';
//} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIG-STEP2</title>
</head>
<body>
    <h2><?php echo htmlspecialchars($blog['title'],ENT_QUOTES,'UTH-8'); ?></h2>
    <p>Post date :<?php htmlspecialchars($blog['title'],ENT_QUOTES,'UTH-8'); ?></p>
    <p>Category :<?php echo $blog['Category']; ?></p>
    <hr>
    <p><?php echo $blog['content']; ?></p>
    
</body>
</html>
