<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finhub - Model</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <!-- Custom styles -->
    <link rel="stylesheet" href="css/styles.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/colors.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/typography.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/button.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/shadows.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/root.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/helper-tools.css?<?php echo time() ?>">
    <!-- Typeface CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">    <!-- Icons Fontawesome -->
    <script src="https://kit.fontawesome.com/b4b586295a.js" crossorigin="anonymous"></script>

    <style>

    </style>
</head>

<body>

<div class="global-helper-tools-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg p-0 backdrop-filter">
    <div class="container-fluid px-lg-4 py-3">
        <a class="navbar-brand" href="#">vestfriends</a>
        <button class="navbar-toggler px-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
            <ul class="navbar-nav ">
                <li><hr class="divider my-2"></li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link px-0 px-lg-3" aria-current="page" href="#">Über finhub</a>
                </li>
                <li><hr class="divider my-2"></li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link px-0 px-lg-3" href="#">Die Finanz-Expert:innen</a>
                </li>
                <li><hr class="divider my-2"></li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link px-0 px-lg-3" href="#">Login</a>
                </li>
                <li><hr class="divider my-2"></li>
                <li class="nav-item d-flex align-items-center d-lg-none">
                    <a class="nav-link px-0 px-lg-3" href="#">Kostenlos registrieren</a>
                </li>
                <li class="ms-0 ms-lg-4 d-none d-lg-flex">
                    <button class="btn btn-primary cta-primary" href="#" role="button">Kostenlos registrieren</button>
                </li>
            </ul>
        </div>


    </div>

</nav>



<main class="container pt-4 pt-md-5" style="height: 4000px; background: #fff">
    <div class="row pt-4 pt-md-5">
        <div class="col-12 col-md-8 col-lg-8 col-xl-7 pt-5">
            <h1 class="display-1 mt-2">Finde Finanz-Expert:innen, die deine Journey verstehen </h1>
        </div>
        <div class="d-none d-xl-block col-xl-2"></div>
        <div class="col-12 col-md-4 col-lg-4 col-xl-3 pt-3 pt-md-5" >
            <div class="px-4 mt-3" style="border-left: solid 1px #ddd;">
                <p>Bei uns triffst du auf erfahrene Finanzexpert:innen, die nicht nur ihr Fachgebiet beherrschen, sondern auch einen persönlichen Bezug zu deinen Bedürfnissen herstellen. Mache jetzt den ersten Schritt:</p>
                <p style="font-weight: 600">Expert:in finden →</p>
            </div>

        </div>
    </div>
</main>


<!-- UI Helper -->
<div class="btn-group ui-helper" style="position:fixed; bottom: 1rem; right:1rem">
    <button class="btn btn-secondary" id="showGrid" >Show Grid</button>
    <button class="btn btn-secondary" onclick="openWindow(1200, 800)">Large (lg)</button>
    <button class="btn btn-secondary" onclick="openWindow(992, 600)">Medium (md)</button>
    <button class="btn btn-secondary" onclick="openWindow(768, 400)">Small (sm)</button>
    <button class="btn btn-secondary" onclick="openWindow(576, 300)">Extra Small (xs)</button>
</div>




<!-- Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- Scripts -->
<script>
    let newWindow;

    function openWindow(width, height) {
        if (newWindow) {
            newWindow.close();
        }

        const left = (window.screen.width - width) / 2;
        const top = (window.screen.height - height) / 2;

        newWindow = window.open('index.php', '', `width=${width}, height=${height}, left=${left}, top=${top}`);
    }
</script>
<script>
    const button = document.querySelector('#showGrid');
    const body = document.querySelector('body');

    let isActive = false;

    button.addEventListener('click', () => {
        if (!isActive) {
            body.classList.add('showGrid');
            isActive = true;
        } else {
            body.classList.remove('showGrid');
            isActive = false;
        }
    });

</script>
</body>
</html>