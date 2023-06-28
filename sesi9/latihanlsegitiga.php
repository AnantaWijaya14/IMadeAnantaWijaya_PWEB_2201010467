<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3</title>
</head>
<body>
    <form>
        <div>
            Alas
            <input type="number" id="txALAS"  name="txALAS">
        </div>
        <div>
            Tinggi
            <input type="number" id="txTINGGI"  name="txTINGGI">
        </div>
        <div>
            <button type="button" onclick="checkluas()">check luas</button>
        </div>

        <p>
            <div id="hasil"></div>
        </p>

    </form>
    <script>
        function checkluas(){
            let alas = document.getElementById("txALAS").value;
            let tinggi = document.getElementById("txTINGGI").value;
            let luas =alas * tinggi * 0.5;

            document.getElementById('hasil').innerHTML ="Hasil luas segitiga adalah"+luas
        }
    </script>
</body>
</html>