<?php require_once 'backend/config.php'; ?>

<!-- HTML oude header/navbar -->
<!--<header> 
    <div class="navbar">
        <a href="<?php echo $base_url ?>/index.php">Home</a>

        <a href="<?php echo $base_url ?>/movies/films.php">Films</a>

        <a href="<?php echo $base_url ?>/books/boeken.php">Boeken</a>

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
                <button class="dropbtn">Gereedschappen 
                    <i class="fa fa-caret-down"></i>
                </button>
            <div class="dropdown-content">
                <a href="<?php echo $base_url ?>/tools/cirkelzagen.php">Cirkelzagen</a>
                <a href="<?php echo $base_url ?>/tools/kettingzagen.php">Kettingzagen</a>
                <a href="<?php echo $base_url ?>/tools/hamers.php">Hamers</a>
                <a href="<?php echo $base_url ?>/tools/handzagen.php">Handzagen</a>
                <a href="<?php echo $base_url ?>/tools/schroevendraaiers.php">Schroevendraaiers</a>
            </div>
        </div>

        
        <div class="dropdown">
            <button class="dropbtn">Informatie 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="<?php echo $base_url ?>/information/jamesbond.php">James Bond</a>
                <a href="<?php echo $base_url ?>/information/darthvader.php">Darth Vader</a>
                <a href="<?php echo $base_url ?>/information/timontydalton.php">Timonty Dalton</a>
                <a href="<?php echo $base_url ?>/information/lukeskywalker.php">Luke Skywalker</a>
                <a href="<?php echo $base_url ?>/information/georgecloony.php">George Cloony</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Dranken 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="">Frisdrank</a>
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url ?>/information/timontydalton.php">Koffie</a>
                        <a href="<?php echo $base_url ?>/information/lukeskywalker.php">Latte</a>
                        <a href="<?php echo $base_url ?>/information/lukeskywalker.php">Thee</a>
                    </div>
                <a href="">Warme dranken</a>
                    <div class="dropdown-content">
                        <a href="<?php echo $base_url ?>/information/timontydalton.php">Cola</a>
                        <a href="<?php echo $base_url ?>/information/lukeskywalker.php">7up</a>
                        <a href="<?php echo $base_url ?>/information/lukeskywalker.php">Sinas</a>
                    </div>
            </div>
        </div> 
    </div>
</header>-->

<header>
    <ul class="main-navigation font-size-18">
    <li><a href="<?php echo $base_url ?>/index.php">Home</a></li>
    <li><a href="<?php echo $base_url ?>/movies/films.php">Films</a></li>
    <li><a href="<?php echo $base_url ?>/books/boeken.php">Boeken</a></li>
    <li><a href="<?php echo $base_url ?>/music/songteksten.php">Songteksten</a>
        <ul>
            <li><a href="<?php echo $base_url ?>/music/bluemusic.php">Blauw</a></li>
            <li><a href="<?php echo $base_url ?>/music/orangemusic.php">Oranje</a></li>
            <li><a href="<?php echo $base_url ?>/music/redmusic.php">Rood</a></li>
            <li><a href="<?php echo $base_url ?>/music/greenmusic.php">Groen</a></li>
        </ul>
    </li>
    <li><a href="">Informatie</a>
        <ul>
            <li><a href="<?php echo $base_url ?>/information/jamesbond.php">James Bond</a></li>
            <li><a href="<?php echo $base_url ?>/information/darthvader.php">Darth Vader</a></li>
            <li><a href="<?php echo $base_url ?>/information/timontydalton.php">Timonty Dalton</a></li>
            <li><a href="<?php echo $base_url ?>/information/lukeskywalker.php">Luke Skywalker</a></li>
            <li><a href="<?php echo $base_url ?>/information/georgecloony.php">George Clooney</a></li>
        </ul>
    </li>
    <li><a href="">Gereedschappen</a>
        <ul>
        <li><a href="">Zagen</a>
            <ul>
                <li><a href="<?php echo $base_url ?>/tools/cirkelzagen.php">Cirkelzagen</a></li>
                <li><a href="<?php echo $base_url ?>/tools/kettingzagen.php">Kettingzagen</a></li>
                <li><a href="<?php echo $base_url ?>/tools/handzagen.php">Handzagen</a></li>
            </ul>
            <li><a href="<?php echo $base_url ?>/tools/schroevendraaiers.php">Schroevendraaiers</a></li>
            <li><a href="<?php echo $base_url ?>/tools/hamers.php">Hamers</a></li>
        </li>
        </ul>
    </li>
    <li><a href="">Dranken</a>
        <ul>
        <li><a href="">Warme dranken</a>
            <ul>
                <li><a href="<?php echo $base_url ?>/dranken/koffie.php">Koffie</a></li>
                <li><a href="<?php echo $base_url ?>/dranken/latte.php">Latte</a></li>
                <li><a href="<?php echo $base_url ?>/dranken/thee.php">Thee</a></li>
            </ul>
        <li><a href="">Frisdranken</a>
            <ul>
                <li><a href="<?php echo $base_url ?>/dranken/cola.php">Cola</a></li>
                <li><a href="<?php echo $base_url ?>/dranken/7up.php">7up</a></li>
                <li><a href="<?php echo $base_url ?>/dranken/sinas.php">Sinas</a></li>
            </ul>
        </li>
        </ul>
    </li>
    <li><a href="<?php echo $base_url ?>/chat/index.php">Chatten</a></li>
    </ul>
</header>
