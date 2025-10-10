<?php
require __DIR__.'/data.php';
require __DIR__.'/header.php';
?>

<main>

<div class="site-header">
    <h1><?='Lets keep up with some woman and their preformance in fotball'?></h1> 
    <h2 id="firstpart"><?='Who is the champions?'?></h2>
    <p><?='Lets rank them all'?></p>
</div>

<div class="teams-grid">

    <?php foreach ($teams as $name => $info):?>

<div class="team-box">

<div class="uefa">UEFA ranking: <?= $info['uefa-coefficient-ranking'] ?></div>
    <img src="<?= $info['logo'] ?>" alt="<?= $name ?> logo" class="team-logo">
    <h2><?= $name?></h2>
    <h3><?= $info['league'] ?></h3>
    <h3><?= $info['city'] ?></h3>
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

<a href="team.php" class="ending-link">
  <div class="ending-box" id="favBox">
  <h2><?='What is your favorite team?'?></h2></a>
</div>

</main>

<?php
  require __DIR__.'/footer.php';
?>