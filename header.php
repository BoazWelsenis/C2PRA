<?php require_once 'backend/config.php'; ?>

<header>
    <div class="navbar">
        <a href="<?php echo $base_url ?>/index.php">Home</a>

        <a href="<?php echo $base_url ?>/movies/films.php">Films</a>

        <div class="dropdown">
            <button class="dropbtn">Songteksten 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="<?php echo $base_url ?>/music/bluemusic.php">Blauw</a>
                <a href="<?php echo $base_url ?>/music/orangemusic.php">Oranje</a>
                <a href="<?php echo $base_url ?>/music/redmusic.php">Rood</a>
            </div>
        </div> 

        <div class="dropdown">
                <button class="dropbtn">Informatie 
                    <i class="fa fa-caret-down"></i>
                </button>
            <div class="dropdown-content">
                <a href="<?php echo $base_url ?>/information/boeken.php">Boeken</a>
                <a href="<?php echo $base_url ?>/information/cirkelzagen.php">Cirkelzagen</a>
                <a href="<?php echo $base_url ?>/information/kettingzagen.php">Kettingzagen</a>
                <a href="<?php echo $base_url ?>/information/hamers.php">Hamers</a>
                <a href="<?php echo $base_url ?>/information/jamesbond.php">James Bond</a>
                <a href="<?php echo $base_url ?>/information/darthvader.php">Darth Vader</a>
                <a href="<?php echo $base_url ?>/information/timontydalton.php">Timonty Dalton</a>
                <a href="<?php echo $base_url ?>/information/lukeskywalker.php">Luke Skywalker</a>
            </div>
        </div>
    </div>
</header>
