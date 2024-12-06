<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    
    if (!empty($title) && !empty($content)) {
        $filename = 'posts/' . preg_replace('/[^a-zA-Z0-9]/', '_', $title) . '.txt';
        file_put_contents($filename, $content);
        echo "<script>alert('Post added successfully!'); window.location.href='admin.php';</script>";
    } else {
        echo "<script>alert('Please fill in all fields.'); window.history.back();</script>";
    }
}
?>
