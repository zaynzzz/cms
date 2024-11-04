<?php 

function add_post($title, $content) {
    $connection = db_connect();
    $query = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    return mysqli_query($connection, $query);
}

function get_posts() {
    $connection = db_connect();
    $query = "SELECT * FROM posts ORDER BY created_at DESC";
    return mysqli_query($connection, $query);
}

function update_post($id, $title, $content) {
    $connection = db_connect();
    $query = "UPDATE posts SET title='$title', content='$content' WHERE id=$id";
    return mysqli_query($connection, $query);
}
function delete_post($id) {
    $connection = db_connect();
    $query = "DELETE FROM posts WHERE id=$id";
    return mysqli_query($connection, $query);
}




?>