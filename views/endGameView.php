
<div class="pyro">
  <div class="before"></div>
  <div class="after"></div>
</div>

<div id="endgame-page">
    <h1>Victoire de <?php echo $this->getWinner()->getName();?> !</h1>
    <div id="stats-wrapper">
      <div id="wins" class="stats-cell">
        <span>Victoires</span>
        <span><?php echo $this->getWinner()->getNbWin(); ?></span>
      </div>
      <div id="losses" class="stats-cell">
        <span>Défaites</span>
        <span><?php  echo $this->getWinner()->getNbLoose(); ?></span>
      </div>
    </div>


    <form action="/jeuserpent" method="post">
        <input type="submit" value="Accueil">
    </form>

</div>
