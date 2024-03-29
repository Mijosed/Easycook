<header>
    <nav class="navbar">

        <div class="container">
            <button class="navbar_toggle_button" data-target="#content">
                Menu
            </button>
            <img src="../../dist/assets/images/logoEasyCook.png" alt="logoEasyCook">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3" />
                <circle cx="12" cy="10" r="3" />
                <circle cx="12" cy="12" r="10" />
            </svg>
            <ul class="navbar-desktop">
                <?php include "navbar.php" ?>
                <li><a href="/login">Connexion</a></li>
                <li><a href="/register">Inscription</a></li>
                <li><a href="#" class="dark-mode" id="moon-icon"><i class="fas fa-moon"></i></a></li>
                <li><a href="#" class="dark-mode" id="sun-icon"><i class="fas fa-sun"></i></a></li>
            </ul>
        </div>

        <div class="navbar_toggle_content" id="content">
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="#">Recettes</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
            <ul>
                <li class="button-connexion"><a href="/login">Connexion</a></li>
                <li class="button-connexion"><a href="/register">Inscription</a></li>
            </ul>
        </div>
    </nav>
    <section class="section_header">
        <h1>
            <?php if (isset($data["title"]))
                echo $data["title"] ?>
            </h1>
            <p>
            <?php if (isset($data["description"]))
                echo $data["description"] ?>
            </p>
        </section>
    </header>