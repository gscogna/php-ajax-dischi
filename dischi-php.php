<?php
include 'db-dischi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>

    <!-- Link Ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>

    <!-- Link cdn Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>

    <!-- Link foglio di stile -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <img src="img/logo.png" alt="logo" />
        </div>
    </header>


    <select id="selettore">
        <option>All</option>
    </select>

    <div class="cds-container container">


        <div class="cd">
            <img src="" alt="da inserire">
            <h3 class="title"> OK </h3>
            <span class="author"> OK</span>
            <span class="year"> OK</span>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>