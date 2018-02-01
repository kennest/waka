@extends('../layouts.layout') 
@section('styles')
<style>
}
#haut-debit {
    margin-top: 30px;
}
#hd>a {
    color: white;
    background-color: black;
}
#va>a {
    color: white;
    background-color: #32e83b;
}
#ed>a {
    color: white;
    background-color: #b5fb2d;
}
#ed,
#hd,
#va>a:hover {
    cursor: pointer;
}
/***Overlay***/
#questionnaire {
    position: relative;
    width: 100%;
    background-color: #fe16b8;
}
.image {
    opacity: 0.3;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
}
#questionnaire>.middle {
    transition: .5s ease;
    opacity: 1;
    position: absolute;
    top: 50%;
    left: 75%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
}
#questionnaire:hover .image {
    opacity: 0.6;
}
#questionnaire:hover .middle {
    opacity: 1;
}
#questionnaire>div>div>h2 {
    background-color: #31d6e6;
    color: white;
    font-size: 25px;
    padding: 16px 32px;
}
#questionnaire>div>div>p:nth-child(3)>strong>a {
    color: black;
}
#equipe {
    position: relative;
    width: 100%;
    background-color: #9bea86;
}
#equipe>.middle {
    transition: .5s ease;
    opacity: 1;
    position: absolute;
    top: 50%;
    left: 25%;
    width: 35%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
}
#equipe:hover .image {
    opacity: 0.6;
}
#equipe:hover .middle {
    opacity: 1;
}
#equipe>div>div>h2 {
    background-color: #3aa835;
    color: white;
    font-size: 25px;
    padding: 16px 32px;
}
#news>div>div>div.card-deck>div>div>a {
    color: black;
}
#right {
    position: relative;
    width: 100%;
}
#right>.middle {
    transition: .5s ease;
    opacity: 1;
    position: absolute;
    top: 50%;
    left: 70%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
}
#right:hover .image {
    opacity: 0.6;
}
#reactivite {
    padding: 25px;
}
</style>
@endsection
 
@section('content')
<section id="haut-debit">
    <div class="container">
        <div class="row">
            <div class="col-12" style="padding:30px;">
                <h1 class="text-center">Le Trés Haut débit de Waka</h1>
            </div>
            <div class="col-lg-5">
                <div class="col-lg-12">
                    <img class="rounded-circle" src="http://via.placeholder.com/350x350">
                </div>
                <div class="col-lg-12">
                    <h4><strong>Solution de connectivité haut-débit</strong></h4>
                    <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content
                        is a little bit longer.</p>
                </div>
                <div class="col-lg-12">
                    <div class="btn-group" role="group" aria-label="Basic example" id="hd">
                        <a class="btn btn-secondary">Fibre Optique</a>
                        <a class="btn btn-secondary">VSAT</a>
                        <a class="btn btn-secondary">VPN</a>
                        <a class="btn btn-secondary">Wimax</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="col-lg-12">
                    <img class="rounded-circle" src="http://via.placeholder.com/350x350">
                </div>
                <div class="col-lg-12">
                    <h4><strong>Solution à valeurs ajoutée</strong></h4>
                    <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content
                        is a little bit longer.</p>
                </div>
                <div class="col-lg-12">
                    <div class="btn-group" role="group" aria-label="Basic example" id="va">
                        <a class="btn btn-secondary">Voip</a>
                        <a class="btn btn-secondary">Solutions IP TV</a>
                        <a class="btn btn-secondary">Vidéo conférence</a>
                        <a class="btn btn-secondary">Vidéo surveillance</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">&nbsp;</div>
            <div class="col-lg-12 row">
                <div class="col-lg-2">&nbsp;</div>
                <div class="col-lg-5">
                    <img class="rounded-circle" src="http://via.placeholder.com/350x350">
                </div>
                <div class="col-lg-4">
                    <div class="col-lg-12">
                        <h4><strong>Etude et développement</strong></h4>
                        <p>This is a wider card with supporting text below as a natural lead-in to additional content. This
                            content is a little bit longer.</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="btn-group" role="group" aria-label="Basic example" id="ed">
                            <a class="btn btn-secondary">Conception d'architecture</a>
                            <a class="btn btn-secondary">Supervision</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<section id="questionnaire">
    <img src="http://via.placeholder.com/1300x350" alt="Avatar" class="image" style="width:100%">
    <div class="middle">
        <div class="text">
            <h2>
                Quelle solution internet est bonne pour vous?
            </h2>
            <p>Déterminez la solution adaptée à votre besoin</p>
            <p><strong><a href="#">Répondez au questionnaire</a></strong></p>
        </div>
    </div>
</section>
<section id="equipe">
    <img src="http://via.placeholder.com/1300x350" alt="Avatar" class="image" style="width:100%">
    <div class="middle">
        <div class="text">
            <h2>
                Nous sommes Waka,une équipe hautement dédiée
            </h2>
            <p class="lead">Waka est une entreprise gabonaise,This is a wider card with supporting text below as a natural lead-in to additional
                content.
            </p>
            <p><strong><a class="btn btn-danger" href="#">En savoir plus...</a></strong></p>
        </div>
    </div>
</section>
<section id="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="padding:30px;">
                <h1 class="text-center">Les News</h1>
            </div>
            <div class="col-lg-12 card-deck">
                <div class="card card-inverse border-0 rounded-0" style="background-color: #01abe9; border-color: transparent;">
                    <img class="card-img-top" src="http://via.placeholder.com/250x250" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This
                            content is a little bit longer.</p>
                        <a href="#">En savoir+</a>
                    </div>
                </div>
                <div class="card card-inverse border-0 rounded-0" style="background-color: #f6c500; border-color: transparent;">
                    <div class="card-block">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This
                            content is a little bit longer.</p>
                        <a href="#">En savoir+</a>
                    </div>
                    <img class="card-img-bottom" src="http://via.placeholder.com/250x250" alt="Card image cap">
                </div>
                <div class="card card-inverse border-0 rounded-0" style="background-color: #fe16b8; border-color: transparent;">
                    <img class="card-img-top" src="http://via.placeholder.com/250x250" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This
                            content is a little bit longer.</p>
                        <a href="#">En savoir+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="reactivite">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 row">
                <div class="col-lg-12">
                    <div class="card card-inverse card-primary rounded-0 mb-3 text-center">
                        <div class="card-block">
                            <h1 class="card-title">Testez notre réactivité</h1>
                            <form class="col-lg-12 row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="inlineFormInput" placeholder="Nom*...">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="inlineFormInput" placeholder="Societé*...">
                                </div>
                                <div class="col-12">&nbsp;</div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="inlineFormInput" placeholder="Email*...">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="inlineFormInput" placeholder="Telephone*...">
                                </div>
                                <div class="col-12">&nbsp;</div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success btn-block">Contactez-moi</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer" style="color:white;">
                            <small class="text-center">La confidentialité de vos données est importante.<br>Nous ne les comuniquerons pas à des tiers.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="right">
                <img src="http://via.placeholder.com/450x250" alt="Avatar" class="image" style="width:100%">
                <div class="middle">
                    <div class="text">
                        <p>This is a wider card with supporting text below as a natural lead-in to additional content. This
                            content is a little bit longer.</p>
                        <p><strong><a class="btn btn-warning" href="#">En savoir+</a></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection