 <?php

 require_once './../services/item_service.php';
 if (!isset($_GET['p'])) die();


 $error = '';
 $postId = $_GET['p'];
 $item = getItemById($postId);
 // var_dump($postId);

 if (empty($array)) {
  $error = 'could not find item with id: ' . $postId . ' in the database';
 }
 ?>

 <section class="<?php echo $item ? 'show' : '' ?> post-details">
  <h1>
   details
  </h1>

  <!-- <?php var_dump($item) ?> -->
  <?php if ($item) { ?>
   <h1><?= $item['title'] ?></h1>
   <p><?= $item['body'] ?></p> <?php } else { ?>
   <h1>could not find item with id: <?= $postId ?> in the database</h1>
  <?php } ?>
  <button class="close">
   <a href="/basics/views/index.php">back</a>
  </button>

 </section>