@extends('../layouts.layout') @section('content')
    <hr>
    <div class="container">
        <div class="row">
            <h3 class="text-center text-success">
                <b>{{env("APP_NAME")}} AU COEUR DES ÉVÈNEMENTS</b>
            </h3>
            <div class="col-sm-3">
                <div class="panel panel-success">
                    <div class="panel-body">
                        <h4><b>Africa Telecoms Awards</b></h4>
                    </div>
                    <div class="panel-footer">05-08 Nov 2017</div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-success">
                    <div class="panel-body">
                        <h4><b>World IT Awards</b></h4>
                    </div>
                    <div class="panel-footer">01-03 Jan 2017</div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-success">
                    <div class="panel-body">
                        <h4><b>CISCO Days</b></h4>
                    </div>
                    <div class="panel-footer">12-15 Mai 2016</div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-success">
                    <div class="panel-body">
                        <h4><b>Others</b></h4>
                    </div>
                    <div class="panel-footer">05-08 Sept 2015</div>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div class="container-fluid">
        <div class="row well text-center">
            <div class="col-sm-4">
                <img class="img img-circle" src="http://via.placeholder.com/150x150" alt="">
                <p class="lead"><b><h3>Les offres de {{env('APP_NAME')}}</h3></b></p>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sed viverra rutrum quam ut iaculis. Duis finibus tempor magna,
                    ac finibus mauris faucibus at. Nullam id iaculis tortor, maximus
                    blandit ligula.</p>
                <a href="#" class="btn btn-lg btn-success">En savoir Plus...</a>
            </div>

            <div class="col-sm-4">
                <img class="img img-circle" src="http://via.placeholder.com/150x150" alt="">
                <p class="lead"><b><h3>VoIP par {{env('APP_NAME')}}</h3></b></p>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sed viverra rutrum quam ut iaculis. Duis finibus tempor magna,
                    ac finibus mauris faucibus at. Nullam id iaculis tortor, maximus
                    blandit ligula.</p>
                <a href="#" class="btn btn-lg btn-success">En savoir Plus...</a>
            </div>

            <div class="col-sm-4">
                <img class="img img-circle" src="http://via.placeholder.com/150x150" alt="">
                <p class="lead"><b><h3>VSAT PRO par {{env('APP_NAME')}}</h3></b></p>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sed viverra rutrum quam ut iaculis. Duis finibus tempor magna,
                    ac finibus mauris faucibus at. Nullam id iaculis tortor, maximus
                    blandit ligula.</p>
                <a href="#" class="btn btn-lg btn-success">En savoir Plus...</a>
            </div>
        </div>
        <div class="row text-center">
            <blockquote>
                <p class="lead">
                <h3><b>Depuis 1995, {{env('APP_NAME')}} écoute ses clients et partenaires pour développer ses
                        solutions</b></h3>
                </p>
                <p>
                    De la téléphonie à la VoIP, de l’ADSL à la Fibre optique Pro en passant par les solutions VPN, nos
                    produits n’ont qu’un seul objectif : vous aider à faire la différence.
                </p>
            </blockquote>
        </div>
        <div class="row well">
            <p><h4 class="text-center"><b>Les offres de {{env('APP_NAME')}}</b></h4></p>
            <p class="text-center">Le guichet unique de tous les besoins Télécom d’une entreprise.</p>
            <p>&nbsp;</p>

            <div class="row">
                <div class="col-sm-2 col-sm-offset-4">
                    <img src="./images/liaison_haut_debit.png" alt="">
                </div>
                <div class="col-sm-4">
                    <h3><b>Fibre optique pro</b></h3>
                    <p>
                        Avec la fibre optique pro, vous boostez immédiatement la vitesse de connexion de vos sites
                        et assurez le confort de vos échanges Internet.
                    </p>
                    <a href="#" class="btn btn-lg btn-success">
                        <b>Fibre Optique Pro</b>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 col-sm-offset-2">
                    <h3><b>VoIP entreprise & téléphonie</b></h3>
                    <p>
                        En choisissant la téléphonie IP de Vivaction, vous profitez des dernières innovations
                        technologiques en matière de standard téléphonique d’entreprise, de l’installation et
                        du suivi des équipes dédiées, pour un tarif simple et économique.
                    </p>
                    <a href="#" class="btn btn-lg btn-success">
                        <b>VoIP entreprise</b>
                    </a>
                </div>
                <div class="col-sm-2">
                    <img src="./images/telephone_ip.png" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2 col-sm-offset-4">
                    <img src="./images/forfait_mobile_pro.png" alt="">
                </div>
                <div class="col-sm-4">
                    <h3><b>Wimax</b></h3>
                    <p>
                        Une gamme de forfaits sans engagement tout illimité pour communiquer dans toute l’Europe sans
                        contrainte. Bénéficiez d’un accompagnement professionnel et personnalisé dans la gestion de
                        votre flotte mobile.


                    </p>
                    <a href="#" class="btn btn-lg btn-success">
                        <b>Wimax</b>
                    </a>
                </div>
            </div>


        </div>
    </div>
@endsection()