<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul id="Listg"></ul>
    <script>
        let data = ["Apple Vision Pro", "Apple 15 pro max", "Cherry Mobile", "Xiaomi"];
        let list = document.getElementById("Listg");
        for (i = 0; i < data.length; ++i) {
            let li = document.createElement('li');
            li.innerText = data[i];
            list.appendChild(li);
        }
    </script>
</body>
</html>