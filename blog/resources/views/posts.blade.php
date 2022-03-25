<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My blog</title>
    <link rel="stylesheet" href="/app.css">
  </head>
  <body>
    <?php foreach($posts as $post) :?>
    <article>
    <h1><a href="/posts/<?= $post->slug?>"><?= $post->title;?></a></h1>
        <div>
            <?= $post->excerpt;?>
        </div>
    </article>
  <?php endforeach; ?>
  </body>
</html>
