<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Blog</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>My Blog</h1>
    </header>
    <div class="container">
        <?php
        $postDir = 'posts/';
        $posts = array_diff(scandir($postDir), array('.', '..'));
        foreach ($posts as $postFile) {
            $postContent = file_get_contents($postDir . $postFile);
            echo "<div class='post'>";
            echo "<h2>" . pathinfo($postFile, PATHINFO_FILENAME) . "</h2>";
            echo "<p>" . nl2br($postContent) . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
