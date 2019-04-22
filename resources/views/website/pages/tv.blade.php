<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Website main CSS !-->
    <link rel="stylesheet" href="mytv/css/style.css">

    <!-- Search JS !-->
    <script src="mytv/js/search/modernizr.custom.js"></script>

    <!-- Icons the Iconic CSS !-->
    <link href="mytv/css/open-iconic-bootstrap.css" rel="stylesheet">

    <title>MyTV - Sua TV Online</title>
  </head>

  <body>

    <div class="container-fluid" id="navbar-top-bg">
        
        <nav class="navbar navbar-expand-lg navbar-dark">
             <a class="navbar-brand" href="#">
                <img src="mytv/imagens/logo.png" width="92" height="25" alt="">
              </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuTv">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="menuTv">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link current" href="#">Início</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Filmes</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Esportes</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Desenhos</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul
                >
            </div>

            <div id="sb-search" class="sb-search">
                <form>
                    <input class="sb-search-input" placeholder="Qual canal deseja ver?" type="search" value="" name="search" id="search">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"></span>
                </form>
            </div>

        </nav>
        

        <div id="destaque-box">
            <div class="destaque-content">
                <div>
                    <img class="title-logo" src="mytv/imagens/webp/destaque.webp" title="PSG vs MONACO" alt="PSG vs MONACO">
                </div>
                <div>
                    <div>
                        <button name="play-espn" id="play-espn" type="button" class="btn btn-success"><span class="oi oi-media-play"></span> Assistir ESPN</button>
                    </div>
                    <div>
                        <span class="oi oi-star"></span>
                        <span class="oi oi-star"></span>
                        <span class="oi oi-star"></span>
                        <span class="oi oi-star"></span>
                        <span class="oi oi-star star-meio"></span>
                        (4.50 de 5)
                    </div>
                </div>
                <div>
                    Paris Saint-Germain entrará em campo contra Association Sportive de Monaco na Ligue 1, acompanhe no MyTv ás 18:00 de Domingo (11/11)
                </div>
            </div>
        </div>
    </div>

    




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Search -->
    <script src="mytv/js/search/classie.js"></script>
    <script src="mytv/js/search/uisearch.js"></script>
    <script>
        new UISearch( document.getElementById( 'sb-search' ) );
    </script>
    <script>
    document.getElementById("play-espn").onclick = function () {
        location.href = "{{ URL::route('canalespn') }}";
    };
    </script>
  </body>
</html>