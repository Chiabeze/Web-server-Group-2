<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add New Post</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Admin Page - Add New Post</h1>
    </header>
    <div class="container">
        <form action="upload.php" method="post">
            <input type="text" name="title" placeholder="Post Title" required>
            <textarea name="content" rows="10" placeholder="Post Content" required></textarea>
            <button type="submit">Add Post</button>
        </form>
    </div>
</body>
</html>
