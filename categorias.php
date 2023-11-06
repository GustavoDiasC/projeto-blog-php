<?php
include_once('templates/header.php');
?>
<div></div>
<h1 id="title-container">Categorias</h1>
<div class="list-container">
    <ul>
        <li><a href="<?= $BASE_URL ?>post.php?id=2">Java</a></li>
        <li><a href="<?= $BASE_URL ?>post.php?id=3">Programação</a></li>
        <li><a href="<?= $BASE_URL ?>post.php?id=4">PHP</a></li>
        <li><a href="<?= $BASE_URL ?>post.php?id=2">HTML</a></li>
        <li><a href="<?= $BASE_URL ?>post.php?id=3">CSS</a></li>
        <li><a href="<?= $BASE_URL ?>post.php?id=4">JavaScript</a></li>
        <li><a href="<?= $BASE_URL ?>post.php?id=2">Bootstrap</a></li>
        <li><a href="<?= $BASE_URL ?>post.php?id=3">C#</a></li>
    </ul>
</div>
<?php
include_once('templates/footer.php')
?>