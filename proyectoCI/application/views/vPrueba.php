<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <h1 align="center" style="color:green;" id="muevete">TEST PASS</h1>
    <br>
    <br>
    <input type="button" value="O" style="color:red" id="cambios" align="center">

    <script>
        var contador = 0;

        document.getElementById('cambios').addEventListener('click', function(){
            if(contador % 2 == 0){
                document.getElementById('cambios').style.color = "blue";
            }
            else{
                document.getElementById('cambios').style.color = "yellow";
            }
            contador++;

        })
        
    </script>
</body>
</html>