<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('/js/script.js') }}" defer></script>

    <title>Document</title>
</head>
<body class="start-page-body">
<nav>
    <div class="cell">L</div>
    <div class="cell">i</div>
    <div class="cell">n</div>
    <div class="cell correct">g</div>
    <div class="cell correct">o</div>
</nav>
<div class="start-content-container">
    <div class="center-content">
        <h1 class="start-title">Welkom bij Lingo</h1>
        <button class="btn" onclick="openPopup()">Speel</button>
    </div>
</div>
<!-- Popup -->
<div id="popup" class="popup-overlay" style="display: none;">
    <div class="popup-box">
        <h2>Kies een optie</h2>
        <a href="/lingo" class="popup-btn">Speel als gast</a>
        <a href="/register" class="popup-btn">Maak een account</a>
        <button class="popup-close" onclick="closePopup()">Sluiten</button>
    </div>
</div>
</body>
</html>
