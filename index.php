<?php
require __DIR__.'/data.php';
require __DIR__.'/header.php';
?>

<br>
<div class="site-header">

  <h1><?php echo 'Lets keep up with some fotball teams';?></h1> 
  <h2 id="firstpart"><?php echo 'Who is the champions?';?></h2>
  <p><?php echo 'Lets rank them all';?></p>

</div>
<br>

<div class="teams-grid">

  <?php foreach ($teams as $name => $info):?>
  <div class="team-box">
    
    <img src="<?= $info['logo'] ?>" alt="<?= $name ?> logo" class="team-logo">
    <h2><?= $name?></h2>
    <h3>League: <?= $info['league'] ?></h3>
    <h3>City: <?= $info['city'] ?></h3>
  
    <h3 id="uefa">UEFA ranking: <?= $info['uefa-coefficient-ranking'] ?></h3>
  
  <a href="<?= $info['url'] ?>" target="_blank">Official website</a>
  
  <h3>Opponents:</h3>

  <ul>
    <?php foreach ($info['opponents'] as $opponent): ?>
     <li> <?= $opponent ?></li>
    <?php endforeach; ?>
    </ul>
    </div>

<?php endforeach; ?>

</div>

<?php
  require __DIR__.'/footer.php';