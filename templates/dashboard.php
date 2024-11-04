<?php
include '../includes/functions.php';
$posts = get_posts();
?>

<h1>Dashboard Admin</h1>
<a href="add_post.php">Tambah Postingan Baru</a>

<table>
    <tr>
        <th>Judul</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
    <?php while($post = mysqli_fetch_assoc($posts)) { ?>
    <tr>
        <td><?php echo $post['title']; ?></td>
        <td><?php echo $post['created_at']; ?></td>
        <td>
            <a href="edit_post.php?id=<?php echo $post['id']; ?>">Edit</a>
            <a href="delete_post.php?id=<?php echo $post['id']; ?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>
