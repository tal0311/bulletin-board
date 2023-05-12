<?php
  $name = '';
  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = '';
    $email = '';
}

?>

<section class="app-filter">
 <form method="GET" action="/basics/views/index.php">
  <label for="q"></label>
  <input type="text" name="q" 
  placeholder="search" value= <?= $name ?> >
  <button type="submit">search</button>
 </form>
</section>