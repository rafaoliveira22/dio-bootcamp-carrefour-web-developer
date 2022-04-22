<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        body{
            font-family:'Arial';
        }
        .linha{
            color: lightblue;
            line-height: 50px;
            font-size:32px;
            font-weight: bold;
        }
    </style>
    <title>HTML5 e CSS3 - AULA PRÁTICA 02</title>
</head>
<body>
    <h1>Construindo a segunda  aplicação</h1>

    <?php
        for($i = 1; $i <= 10; $i++){
            print("<span class=\"linha\"> Linha número " . $i . "</br></span>");
        }
    ?>

   <script type="text/javascript">
        $(document).ready(function(){
            alert("WHOWWWWWWWWW!!!");
        });
    </script> 
</body>


</html>