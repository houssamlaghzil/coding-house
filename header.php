<head>
    <meta charset="UTF-8">
    <title>Coding house</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
</head>

<header>

    <div id="menu">
        <div id="cssThemeSwitcher">
            <button id="defaultTheme" class="cssTheme"
                    onclick="document.getElementById('cssTheme').href='css/themes/default.css';">Thème Default
            </button>
            <button id="crackendTheme" class="cssTheme"
                    onclick="document.getElementById('cssTheme').href='css/themes/crackend.css';">Thème Crack'end
            </button>
            <button id="phoenixmlTheme" class="cssTheme"
                    onclick="document.getElementById('cssTheme').href='css/themes/phoenixml.css';">Thème PhoeniXML
            </button>
            <button id="gistuneTheme" class="cssTheme"
                    onclick="document.getElementById('cssTheme').href='css/themes/gitsune.css';">Thème Gistune
            </button>
        </div>

        <input type='checkbox' id='mmeennuu'>
        <label class='menu' for='mmeennuu'>

            <div class='barry'>
                <span class='bar'></span>
                <span class='bar'></span>
                <span class='bar'></span>
                <span class='bar'></span>
            </div>
            <ul>
                <li><a id='home' href='home.php'>Accueil</a></li>
                <li><a id='Classements' href='rankings.php'>Classements</a></li>
                <li><a id='Maisons' href='houses.php'>Maisons</a></li>
                <li><a id='Règles' href='rules.php'>Règles</a></li>
                <li><a id='Défis' href='challenges.php'>Défis</a></li>
                <li><a id='Login' href='login.php'>Login</a></li>
            </ul>
        </label>

</header>
