<header>
    <a href="/" class="logo">Blog de Jonathan</a>
    <ul class="header-menu">
        <li class=<?= $_SERVER['REQUEST_URI'] === '/form-article.php' ? 'active' : '' ?>>
            <a href=" /form-article.php">Ecrire un article</a>
        </li>
        <li class=<?= $_SERVER['REQUEST_URI'] === '/auth-article.php' ? 'active' : '' ?>>
            <a href=" /auth-register.php">Inscription</a>
        </li>
        <li class=<?= $_SERVER['REQUEST_URI'] === '/form-login.php' ? 'active' : '' ?>>
            <a href=" /auth-login.php">Connexion</a>
        </li>
        <li>
            <a href=" /auth-logout.php">Déconnexion</a>
        </li>
        <li class=<?= $_SERVER['REQUEST_URI'] === '/profil.php' ? 'active' : '' ?>>
            <a href=" /profil.php">Ma page</a>
        </li>




    </ul>
</header>