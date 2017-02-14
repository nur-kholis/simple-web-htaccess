<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2><?php echo "judul berita: ".$_GET['id']; ?></h2>
    <h2><?php echo "judul berita: ".preg_replace('#[^0-9a-z]#i',' ',$_GET['judul']); ?></h2>
  </body>
</html>
