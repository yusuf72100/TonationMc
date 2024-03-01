<?php
$playeronline = file_get_contents('https://api.serveurs-minecraft.com/api.php?Joueurs_En_Ligne_Ping&ip=54.38.236.220&port=25718');
$maxplayer = file_get_contents('https://api.serveurs-minecraft.com/api.php?Joueurs_Maximum_Ping&ip=54.38.236.220&port=25718');
$favicon = file_get_contents('https://api.serveurs-minecraft.com/api.php?Favicon_Ping&ip=54.38.236.220&port=25718');
$timer = file_get_contents('https://api.serveurs-minecraft.com/api.php?Latence_Ping&ip=54.38.236.220&port=25718');
?>

<?php if ($timer > 0): ?>
  <a class="nav-item" href="" title="Ouvert"><div class="pulse-anim"></div></a>
  <a class="navbar-brand" href="#page-top">Connecté(s):  <?php echo "$playeronline/$maxplayer"; ?></a>
<?php else: ?>
  <a class="nav-item" href="" title="Fermé"><div id="cerclerouge"></div></a>
  <a class="navbar-brand" href="#page-top"><?php echo "Serveur fermé"; ?></a>
<?php endif; ?>