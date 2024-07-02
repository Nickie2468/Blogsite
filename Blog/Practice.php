# Blogsite
PHP/Practice


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogsite</title>
</head>
<link rel="stylesheet" href="style.css"/>
<body>
    <div class="container">
    <h2>BIG-STEP2</h2>
    <form action="blog.php" method="POST">
        <p>Blog-title:</p>
        <input type="text" name="title">
        <p>Blog.somethings</p>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <br>
        <p>Post date:</p>
        <input type="date" name="post_at">
        <br>
        <p>Category:</p>
        <select name="Category">
            <option value="Daily">Daily</option>
            <option value="Programming">Programming</option>
        </select>
        <br>
        <input type="radio" name="pudlish_status" value="pudlish" cheaked>Release
        <input type="radio" name="pudlish_status" value="unpudlish">Private
        <br>
        <input type="submit" value="Submit!">
    </form>
</body>
</html>



