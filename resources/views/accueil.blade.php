<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Découvrez Google Keep - Enregistrez vos pensées, où que vous soyez - Keep - Google</title>
    <link href="{{asset('img/keep.ico')}}" rel="shortcut icon">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap-5.2.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-free-5.15.4/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<header class="sticky-top">
    <div class="container-fluid">
        <div class="d-flex">
            <div class="p-2 w-100 text-white fs-2">Google Keep</div>
            <div class="p-2 flex-shrink-1">
                <ul class="d-flex">
                    <li class="d-inline fs-2"><a href="{{asset('https://www.facebook.com/sharer/sharer.php?u=Découvrez Google Keep - Enregistrez vos pensées, où que vous soyez')}}"><i class="fab fa-facebook" style="color: white;"></i></a></li>
                    <li class="d-inline ms-2 fs-2"><a href="{{asset('http://twitter.com/share?url=https%3A%2F%2Fkeep.google.com%2F&amp;text=Découvrez Google Keep - Enregistrez vos pensées, où que vous soyez')}}" target="_blank"><i class="fab fa-twitter-square" style="color: white;"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col keep-header">
                <p class="text-white">Pour ne rien oublier,</br> où que vous soyez</p>
                <a href="{{asset('https://keep.google.com')}}" class="text-decoration-none p-3 text-white rounded-1 essayergooglekeepbtn" style="background-color: #698df6;">Essayer Google Keep</a>
            </div>
        </div>
    </div>
</section>
<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-secondary text-center">Notez tout ce qui vous passe par la tête</h2>
                <p class="text-dark text-center">Ajoutez des notes, des listes, des photos et des contenus audio à Keep. </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4 offset-1 col-lg-4">
                <div class="thumbnail">
                    <img class="noteitem" src="{{asset('img/note-item-bg.jpg')}}" alt="">
                    <div class="caption">
                        <p class="fs-4">Fête surprise de Christelle</p>
                    </div>
                    <i class="fas fa-list-alt icon-list"></i>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="thumbnail">
                    <img src="{{asset('img/list-item-bg.jpg')}}" alt="">
                    <div class="listcadeau">
                        <ul>
                            <p>Idees cadeau</p>
                            <hr>
                            <li>Nouveau casque de velo</li>
                            <li>Bougies</li>
                            <li>Jolie plante verte ?</li>
                            <li>Boucles d'oreilles</li>
                            <li>Bracelets</li>
                            <li>Écharpe ou pashmina ?</li>
                            <li>Cadre photo</li>
                        </ul>
                    </div>
                    <i class="fas fa-list icon-list"></i>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-4 offset-1 col-lg-4">
                <div class="thumbnail">
                    <img class="noteitem" src="{{asset('img/photo-item-bg.jpg')}}" alt="">
                    <i class="fas fa-camera icon-list"></i>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div>
                    <div class="thumbnail">
                        <img src="{{asset('img/cardsample.png')}}" alt="">
                        <div class="microphonecard">
                            <p>Parlez</p>
                        </div>
                        <i class="fas fa-microphone icon-list"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="stylehr">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4 offset-1 col-lg-4">
                <div class="thumbnail">
                    <img class="noteitem" src="{{asset('img/note-item-bg.jpg')}}" alt="">
                    <div class="caption">
                        <p class="fs-4">Fête surprise de Christelle</p>
                    </div>
                    <i class="fas fa-list-alt icon-list"></i>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="thumbnail">
                    <img src="{{asset('img/list-item-bg.jpg')}}" alt="">
                    <div class="listcadeau">
                        <ul>
                            <p>Idees cadeau</p>
                            <hr>
                            <li>Nouveau casque de velo</li>
                            <li>Bougies</li>
                            <li>Jolie plante verte ?</li>
                            <li>Boucles d'oreilles</li>
                            <li>Bracelets</li>
                            <li>Écharpe ou pashmina ?</li>
                            <li>Cadre photo</li>
                        </ul>
                    </div>
                    <i class="fas fa-list icon-list"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('css/bootstrap/bootstrap-5.2.3-dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
