<html>
<head> ... </head>
<body>
<section>
    <h1>Category</h1>
    <ul>
        <?php foreach ($categoryManager as $category) : ?>
            <li><a href='category/<?= $category['id']?>'><?= $category['title'] ?></a></li>
        <?php endforeach ?>
    </ul>
    <a href="/">Back to items.</a>
</section>
</body>
</html>