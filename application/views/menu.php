<header>
    <div id="menu_white_background" class="navbar">
        <div class="structure">

            <nav>
                <div id="contener_type">
                    <a class="button_type" href="<?php echo site_url('home/index') ?>">Accueil</a>
                    <a class="button_type" href="<?php echo site_url('/vote') ?>">Galerie</a>
                    <a class="button_type" href="<?php echo site_url('home/price') ?>">Prix</a>
                    <a class="button_type" href="<?php echo site_url('home/share') ?>">Partager</a>
                    <?php if($_SESSION['isAdmin']){ ?>
                    <li>
                        <a href="/admin">Admin</a>
                    </li>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </header>