<?php

$pages=[
  'index.php'=>'Home',
  'about.php'=>'About',
  'contact.php'=>'Contact'
];

function render_nav($pages) {
    $nav = "<nav><ul>";
    foreach ($pages as $url => $label) {
        $nav .= "<li><a href='$url'>$label</a></li>";
    }
    $nav .= "</ul></nav>";

    return $nav; 
  }

?>
<style>
  header{
    background-color:red;
    display:grid
    
  }
</style>
<header>
 <nav>
  <ul>
   <?php echo render_nav($pages); ?>
  </ul>
 </nav>
</header>