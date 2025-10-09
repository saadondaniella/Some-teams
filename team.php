<?php
require __DIR__ . '/header.php';

$teams = require __DIR__ . '/data.php';

$q = isset($_GET['q']) ? trim($_GET['q']) : '';
$lc = mb_strtolower($q);
$fun = null;
$in_list = false;

if ($q !== '') {
  if ($lc === 'barcelona' || $lc === 'fc barcelona') {
    $fun = "Visca Barça!  Det här laget har stil.";
  } elseif ($lc === 'real madrid') {
    $fun = "Hola Madrid! Vamos Vamos Vamos.";
  } elseif ($lc === 'manchester city' || $lc === 'man city') {
    $fun = "MaanCheeest!  Maskiner på planen.";
  } elseif ($lc === 'liverpool') {
    $fun = "YNWA Gåshud i tunneln.";
  } elseif ($lc === 'arsenal') {
    $fun = "YESS! Fina trianglar, fint spel.";
  } elseif ($lc === 'wolfsburg') {
    $fun = "Woff, Woff! fint spel.";
  } else {
    $fun = "Kul val din filur: {$q}! Det var nytt! aja bra lag är bra lag.";
  }
}
?>

<div class="team-box team-box--narrow">
    <h2 class="center-title">Skriv ditt favoritlag</h2>
    
    <form method="get" action="team.php" class="team-form">
        <label for="q">Team name</label>
        <input
        id="q"
        name="q"
        type="text"
        class="team-input"
        value="<?= htmlspecialchars($q) ?>"
        placeholder="t.ex. Barcelona, Arsenal, Madrid"
        >
        <button class="btn" type="submit">Go</button>
    </form>
    
    <?php if ($q !== ''): ?>
        <div style="margin-top:1rem;">
            <p><?= htmlspecialchars($fun) ?></p>
            
            <?php if ($in_list): ?>
                <p> Finns i din lista! <a class="btn" href="team.php?name=<?= urlencode($q) ?>" </p>
            
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
    
    <script>
        document.getElementById('q')?.focus();
        </script>