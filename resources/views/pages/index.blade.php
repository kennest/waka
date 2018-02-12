@extends('../layouts.layout')
@section('styles')
    <style>
        #haut-debit {
            background-color: rgba(212, 212, 227, 0.25);
            padding-bottom: 50px;
        }

        #hd > a {
            color: white;
            background-color: #17522f;
            margin-right: 10px;
        }

        #va > a {
            color: white;
            background-color: #0ebf2f;
            margin-right: 10px;
        }

        #ed > a {
            color: white;
            background-color: #a3e02d;
            margin-right: 10px;
        }

        #ed > a:hover,
        #hd > a:hover,
        #va > a:hover {
            cursor: pointer;
            opacity: 0.8;
        }

        /***Overlay***/
        #questionnaire {
            position: relative;
            width: 100%;
            height: 600px;
            background-color: #04BAEE;
        }

        .image {
            display: block;
            width: 100%;
            height: 100%;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        #questionnaire > .middle {
            transition: .5s ease;
            opacity: 1;
            position: absolute;
            top: 40%;
            left: 65%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: justify;
        }

        #questionnaire > .image-middle {
            position: absolute;
            top: 5%;
            right: 60%;
            height:650px;
        }
        #questionnaire > div.image-middle > img{
            height: 550px;
            width: 450px;
        }

        #questionnaire > div > div >ul>li >h2 {
            background-color: #FF16B9;
            color: white;
            font-size: 60px;
            padding: 15px;
            white-space: nowrap;
            text-align: justify;
            width: fit-content;
        }

        #questionnaire > div.middle > div > p:nth-child(4) > strong > a,#questionnaire > div > div > p {
            color: black;
            font-size: 35px;
            white-space: nowrap;
        }

        #equipe {
            position: relative;
            width: 100%;
            height: 100%;
        }

        #equipe > .middle {
            transition: .5s ease;
            position: absolute;
            top: 50%;
            left: 25%;
            width: 40%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        #equipe:hover .image {
            opacity: 0.8;
        }

        #equipe:hover .middle {
            opacity: 1;
        }

        #equipe > div > div >ul>li> h2 {
            background-color: #3aa835;
            margin-bottom: 5px;
            color: white;
            font-size: 60px;
            padding: 15px;
            white-space: nowrap;
            text-align: justify;
            width: fit-content;
        }
        #equipe > div > div > p.lead{
            color:white;
            font-size: 22px;
        }

        #equipe > div > div > p:nth-child(3) > a{
            padding: 15px;
            background-color: #FF16B9;
            color: white;
        }
        #news > div{
            padding-right: 50px;
            padding-left: 50px;
        }

        #news > div > div > div > div > div > div > a{
            color: black;
            text-align:center;
        }

        #news > div > div > div > div > div > div > p{
            font-size: large;
            color:white;
        }

        #news > div > div > div.col-lg-12.card-deck > div {
            margin-right: 30px;
        }


        #right {
            position: relative;
            width: 100%;
        }

        #right > .middle {
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
            opacity: 0.8;
        }

        #reactivite {
            padding-top: 60px;
        }

        #reactivite > div > div > div.col {
            padding-left: 0px;
            padding-right: 0px;
        }

        #reactivite > div > div > div.col.row > div > div {
            height: 100%;
        }
        #right > div > div > p:nth-child(2)  > a{
            padding: 15px;
            background-color: #f59836;
            color: white;
        }
        #right > div > div > p:nth-child(1){
            color:white;
            font-size: 23px;
            text-align: justify;
            font-weight: lighter;
        }
        #haut-debit>.sticker{
            position: absolute;
        }
    </style>
@endsection

@section('content')
    <section id="haut-debit">
        <div class="sticker">
            <img src="{{asset('/images/sticker.png')}}">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12" style="padding:30px;">
                    <h1 class="text-center">Connectologie, Le Trés Haut débit de Waka</h1>
                </div>
                <div class="col-lg-5">
                    <div class="col-lg-12">
                        <img class="rounded" src="{{asset('/images/hd.png')}}">
                    </div>
                    <div class="col-lg-12">
                        <h4><strong>Solution de connectivité haut-débit</strong></h4>
                        <p>This is a wider card with supporting text below as a natural lead-in to additional content.
                            This content
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
                <div class="col-lg-5 offset-lg-2">
                    <div class="col-lg-12">
                        <img class="rounded" src="{{asset('/images/sa.png')}}">
                    </div>
                    <div class="col-lg-12">
                        <h4><strong>Solution à valeurs ajoutée</strong></h4>
                        <p>This is a wider card with supporting text below as a natural lead-in to additional content.
                            This content
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
                <div class="col-lg-12">&nbsp;</div>
                <div class="col-lg-6 offset-lg-4 row">
                    <div class="col">
                        <img class="rounded" src="{{asset('/images/ed.png')}}">
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <h4><strong>Etude et développement</strong></h4>
                            <p>This is a wider card with supporting text below as a natural lead-in to additional
                                content. This
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
    <section id="questionnaire">
        <div class="image-middle">
            <img src="{{asset('/images/questionnaire.png')}}" alt="Avatar" class="image">
        </div>
        <div class="middle">
            <div class="text">
                <ul class="list-unstyled">
                    <li><h2>Quelle solution internet</h2></li>
                    <li><h2>est bonne pour vous?</h2></li>
                </ul>
                <h2> </h2>

                <p class="lead">Déterminez la solution adaptée à votre besoin</p>
                <p><strong><a href="#">Répondez au questionnaire</a></strong></p>
            </div>
        </div>
    </section>
    <section id="equipe">
        <img src="{{asset('/images/equipe.png')}}" alt="Avatar" class="image"
             style="width:100%;height: 100%;">
        <div class="middle">
            <div class="text">
                <ul class="list-unstyled">
                    <li><h2>Nous sommes Waka,</h2></li>
                    <li><h2>une équipe hautement dédiée</h2></li>
                </ul>
                <p class="lead">Waka est une entreprise gabonaise,This is a wider card with supporting text below as a
                    natural lead-in to additional
                    content.
                </p>
                <p><a class="" href="#">En savoir +</a></p>
            </div>
        </div>
    </section>
    <section id="news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" style="padding:30px;">
                    <h1 class="text-center">A la une...</h1>
                </div>
                <div class="col-lg-12">
                    <div class="card-deck">
                        <div class="card card-inverse border-0 rounded-0"
                             style="background-color: #01abe9; border-color: transparent;">
                            <img class="card-img-top" src="{{asset('/images/news1.png')}}"
                                 alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This
                                    content is a little bit longer.</p>
                                <a href="#">En savoir+</a>
                            </div>
                        </div>
                        <div class="card card-inverse border-0 rounded-0"
                             style="background-color: #f6c500; border-color: transparent;">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This
                                    content is a little bit longer.</p>
                                <a href="#">En savoir+</a>
                            </div>
                            <img class="card-img-bottom" src="{{asset('/images/news2.png')}}"
                                 alt="Card image cap">
                        </div>
                        <div class="card card-inverse border-0 rounded-0"
                             style="background-color: #fe16b8; border-color: transparent;">
                            <img class="card-img-top" src="{{asset('/images/news3.png')}}"
                                 alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This
                                    content is a little bit longer.</p>
                                <a href="#">En savoir+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="reactivite">
        <div class="container-fluid">
            <div class="row">
                <div class="col row">
                    <div class="col-lg-12">
                        <div class="card card-inverse card-primary rounded-0 mb-3 text-center">
                            <div class="card-block">
                                <h1 class="card-title">Testez notre réactivité</h1>
                                <form class="col-lg-12 row">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="inlineFormInput"
                                               placeholder="Nom*...">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="inlineFormInput"
                                               placeholder="Societé*...">
                                    </div>
                                    <div class="col-12">&nbsp;</div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="inlineFormInput"
                                               placeholder="Email*...">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="inlineFormInput"
                                               placeholder="Telephone*...">
                                    </div>
                                    <div class="col-12">&nbsp;</div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success btn-block">Contactez-moi</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer" style="color:white;">
                                <small class="text-center">La confidentialité de vos données est importante.<br>Nous ne
                                    les comuniquerons pas à des tiers.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" id="right">
                    <img src="{{asset('/images/reactivite.png')}}" alt="Avatar" class="image" style="">
                    <div class="middle">
                        <div class="text">
                            <p>This is a wider card with supporting text below as a natural lead-in to additional
                                content. This
                                content is a little bit longer.</p>
                            <p><a class="" href="#">En savoir+</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection