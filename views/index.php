<?php include './../config/config.php'; ?>
<?php require_once './../services/item_service.php';

$q = (isset($_REQUEST['q'])) ? $_REQUEST['q'] : '';
$items = query($q);
// echo json_encode($items);

// user is viewing a post in details 
$p = (isset($_REQUEST['p'])) ? $_REQUEST['p'] : ''
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../config/head-tags.php' ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php include './cmps/app_header.php'; ?>
  <?php include './cmps/app_filter.php'; ?>
  <main class="<?php echo $p ? 'details-open' : '' ?> grid">
    <?php foreach ($items as $item) { ?>
      <article class="item">
        <p>created by <?= $item['userId'] ?></p>
        <h1><?= $item['title'] ?></h1>
        <p><?= $item['body'] ?></p>
        <a href="/basics/views/index.php?p=<?= $item['id'] ?>">details</a>
      </article>
    <?php } ?>
  </main>
  <?php include './cmps/app_footer.php'; ?>


  <!-- details modal -->
  <?php include './cmps/post_details.php'; ?>
</body>

</html>