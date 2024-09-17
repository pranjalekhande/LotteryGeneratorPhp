<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottery Number Generator</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="fancy-heading">Lottery Number Generator!</h1>
        <div class="lottery-card" id="lottery-card">
            <div class="lottery-numbers">
                <div class="number-row">
                    <div class="number"><span></span></div>
                    <div class="number"><span></span></div>
                    <div class="number"><span></span></div>
                </div>
                <div class="number-row">
                    <div class="number"><span></span></div>
                    <div class="number"><span></span></div>
                </div>
                <div class="number-row">
                    <div class="number powerball"><span></span></div>
                </div>
            </div>
        </div>
        <button id="generate-btn">Generate</button>
    </div>
    <script src="/public/js/main.js"></script>
</body>
</html>
