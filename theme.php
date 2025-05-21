<?php
// abc-linuxu theme for PHP-Fusion

function render_page($license = false) {
  echo "<div id='header'>";
  echo "<h1>AbcLinuxu</h1>";
  echo "</div>";

  echo "<div id='navigation'>";
  echo "<a href='".BASEDIR."index.php'>Strona główna</a> | ";
  echo "<a href='".BASEDIR."articles.php'>Artykuły</a> | ";
  echo "<a href='".BASEDIR."forum/index.php'>Forum</a>";
  echo "</div>";

  echo "<div id='wrapper'>";
  echo "<div id='left'>".LEFT."</div>";
  echo "<div id='content'>".U_CENTER.CONTENT.L_CENTER."</div>";
  echo "<div id='right'>".RIGHT."</div>";
  echo "</div>";
}
?>
