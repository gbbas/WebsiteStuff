<?
$BlogPosts = scandir("/var/www/html/BlogPosts/Sprints");
$nmr_Posts = count($BlogPosts);
for($i=0; $i<$nmr_Posts; $i++) {
$Name = $BlogPosts[$i];
$fileExt = explode('.', $Name);
$fileActual = $fileExt[0];
if ($Name !== "." && $Name !== ".." ) {
  ?>
  <a href="javascript:void(0)" onclick="ChangePost('<?php echo ($Name); ?>')">
  <?php
    echo ($fileActual);
  ?>
  </a>
  <?php
  }
}
?>
