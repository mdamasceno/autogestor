<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Autogestor</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="d-flex justify-content-center align-items-center">
        <img src="https://camo.githubusercontent.com/313c54dad1e3674a8b417d13a803a2273b9abe798d0c6bfd7c0f3325a8bc532e/687474703a2f2f6175746f676573746f722e6e65742f75706c6f6164732f313536383339383537342e737667">
        </header>
        <section>
            <div class="d-flex justify-content-center align-items-center flex-column">
                <h2 class="mt-5"><i class="fas fa-user-circle"></i> Consulta de Clientes</h2>
                <div class="mt-3 d-flex justify-content-center align-items-center">
                    <input type="text" name="name" class="form-control" style="border:none;border-radius:5px 0px 0px 5px;" id="liveSearch">
                    <i class="fa fa-search" style="padding:11px;color:#294c65;background-color:#fff;border-radius:0px 5px 5px 0px;"></i>
                </div>
                <div class="d-flex justify-content-between align-items-center flex-column" id="searchResults">                    
                </div>
            </div>
        </section>
        <footer></footer>
    </body>
</html>