<?php
require __DIR__ . '/header.php';

$teams = require __DIR__ . '/data.php';

$i = isset($_GET['i']) ? trim($_GET['i']) : '';
$lc = mb_strtolower($i);
$fun = null;
$in_list = false;

if ($i !== '') {
  if ($lc === 'barcelona') {
    $fun = "Vamos Barça! This team’s got style. FC Barcelona Femení – the team that scores more goals than you’ve got olives in your tapas!
      FC Barcelona Femení is one of the best women’s teams in the world and has dominated European football in recent years.
      They’re famous for their tiki-taka style – fast, technical, and beautifully creative (just like the men’s team).
      Magnificent choice!";
  } elseif ($lc === 'real madrid') {
    $fun = "¡Hola Madrid! This team has pure class and a champion’s mindset.
      Real Madrid Femenino may be newer on the scene, but they’ve already proven they mean business.
      With style, speed, and Spanish flair, they chase every point like it’s a trophy.
      Splendid choice!";
  } elseif ($lc === 'manchester city') {
    $fun = "Blue power! Manchester City Women play football so sharp it could make Manchester forget about the rain.
      Known for their smart passing game and attacking strength,
      when City picks up the pace, not even the umbrellas can keep up.
      Epic choice!";
  } elseif ($lc === 'liverpool') {
    $fun = "You’ll Never Walk Alone – and you’ll definitely never go goalless.
      Liverpool FC Women bring the same heart and fire you see at Anfield.
      They mix passion, teamwork, and northern grit into something truly electric. Fantastic choice!";
  } elseif ($lc === 'arsenal') {
    $fun = "North London pride! Arsenal Women play with class, tempo, and ruthless finishing.
      One of England’s most decorated sides, setting the standard year after year.
      Craft, composure, and that Gunners edge that turns half-chances into highlights.
      Brilliant choice!";
  } elseif ($lc === 'wolfsburg') {
    $fun = "Wolfsburg Frauen – the team that devours points like it’s breakfast.
      Disciplined, determined, and deadly in attack.
      They’ve collected more titles than most clubs have training kits.
      Legendary choice!";
    } else {
      $fun = "Hmm, {$i}? Bold move. Not on my list of favorites, but hey — can’t include every team";
    }
  }
  ?>

<div class="team-box team-box--narrow">
    <h2 class="center-title">Go on, tell me your favorite team</h2>
  
  <form method="get" action="team.php" class="team-form">
    <label for="i">Team name</label>
      <input
      id="i"
      name="i"
      type="text"
      class="team-input"
      value="<?= htmlspecialchars($i) ?>"
      placeholder="t.ex. Barcelona, Arsenal, Real madrid">
    <button class="btn" type="submit">Go</button>
  </form>
  
  <?php if ($i !== ''): ?>
    <div style="margin-top:1rem;">
      <p><?= htmlspecialchars($fun) ?></p>
      
  <?php if ($in_list): ?>
      <p> Finns i din lista! <a class="btn" href="team.php?name=<?= urlencode($i) ?>" </p>
  
      <?php endif; ?>
      </div>
      <?php endif; ?>

    <img class="team-img" src="pic-fotboll-woman.jpg" alt="fotboll-Women">
    
  </div>
    
    <?php
    require __DIR__.'/footer.php';
    ?>