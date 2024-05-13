<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blinking Multicolored Text</title>
<style>
    @keyframes colorChange {
        0% { color: red; }
        25% { color: blue; }
        50% { color: green; }
        75% { color: yellow; }
        100% { color: purple; }
    }

    h1 {
        animation: colorChange 1s infinite alternate;
    }
</style>
</head>
<body>
<h1>Đây là Home</h1>
</body>
