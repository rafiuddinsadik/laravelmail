<!DOCTYPE html>
<html lang="fr">

<header>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#151515">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#151515">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#151515">
    <!-- Meta Description -->
    <meta name="robots" content="noindex">
    <title>Inscription - CABINET JURIDIQUE MEPERY</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{asset('deal/images/fav-icon/favicon-96x96.png')}}">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('deal/css/style.css')}}">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('deal/css/testresponsive.css')}}">
</header>


<body>
<div class="main-page-wrapper">
    <!-- -------------------------------------------------------------------------- titre -->
    <div class="parallax-inscription section-spacing">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <br><br>
                        <center>
                            <h2>Abonnement Juridique MEPERY</h2>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------------------------- Formulaire d'inscription -->
    <div class="inscription-us-page section-spacing-inscription">
        <div class="container">


            <form method="POST" action="{{route('deal.submit')}}"  class="theme-form-one form-validation">
                @csrf
                <div class="col-sm-12 col-12">

                    <div class="col-lg-6 col-12 form-group">
                        <label>Nom du commercial</label>
                        <input type="text" placeholder="Nom Commercial" id="nomcommercial" name="nomcommercial" class="call-back-form-one " required>
                    </div>

                    <div class="form-group">
                        <center>
                            <h2 style=" font-size: 35px; font-weight: normal; line-height: 40px; font-family: 'Palatino Linotype', sans-serif;">Informations Entreprise</h2>
                        </center><br>
                        <div class="row">
                            <div class="col-lg-6 col-12 form-group">
                                <label>Raison social</label>
                                <input type="text" placeholder="Mepery" id="raisonsocialverif" name="raisonsocial" class="call-back-form-one " required>
                            </div>
                            <div class="col-lg-6 col-12 form-group">
                                <label>RCS</label>
                                <input type="text" placeholder="123456789" id="rcsverif" name="rcs" class="call-back-form-one" pattern="[0-9]{3}[ \.\-]?[0-9]{3}[ \.\-]?[0-9]{3}" required>
                            </div>
                        </div>
                        <label>Adresse</label>
                        <input type="text" placeholder="90 bis Chemin St Jean" class="call-back-form-one" name="adresse" required>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12 form-group">
                            <label>Code Postal</label>
                            <input type="text" placeholder="31770" name="cp" class="call-back-form-one" pattern="[0-9]{2,3}[ \.\-]?[0-9]{3}" required>
                        </div>
                        <div class="col-lg-8 col-12 form-group">
                            <label>Ville</label>
                            <input type="text" placeholder="Colomiers" class="call-back-form-one" name="ville" required>
                        </div>

                    </div>
                    <center>
                        <h2>Informations Contact</h2>
                    </center><br>

                    <div class="row">
                        <div class="col-lg-6 col-12 form-group">
                            <label>Prénom Contact</label>
                            <input type="text" placeholder="Votre Prénom" name="prenomcontact" class="call-back-form-one" required>
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label>Nom Contact</label>
                            <input type="text" placeholder="Votre Nom" name="nomcontact" class="call-back-form-one" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12 form-group">
                            <label>Numéro de téléphone</label>
                            <input type="text" placeholder="0601020304" name="tel" class="call-back-form-one" pattern="[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?" required>
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label>Adresse Email</label>
                            <input type="text" placeholder="votreadresse@email.com" id="mailverif" name="email" class="call-back-form-one" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-12 form-group">

                            <p style="color:#424242;">Veuillez joindre le Rib de votre societé :
                                <label><input type="hidden" name="MAX_FILE_SIZE" value="2000000000">
                                    <input id="input-validation" type="file" name="validerib" required></label></p>
                            <p style="color:#424242;">Veuillez joindre le Kbis de votre societé :
                                <label><input type="hidden" name="MAX_FILE_SIZE" value="2000000000">


                                    <input id="input-validation" type="file" name="validekbis" required></label></p>
                            <p><input id="field_terms" type="checkbox" name="terms" required="required">
                                <label for="field_terms"><b>J'ai lu et j'accepte les <a href="https://www.mepery.fr/Mepery_CGV"
                                                                                        target="_blank"
                                                                                        style="color:#424242;">conditions
                                            générales de vente</b></a> :</label></p>
                        </div>
                    </div>

                    <style type="text/css">
                        input[type="checkbox"]:required:invalid + label {
                            color: red;
                        }

                        input[type="checkbox"]:required:valid + label {
                            color: green;
                        }
                    </style>
                    <div class="row">
                        <div class="col-lg-12">
                            <p><i>Tout les champs sont obligatoires</i></p>
                            <br>
                            <br>
                            <center><input type="submit" name="valideinscription" id="valide" class="theme-button-one" value="Continuer ->" ></center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <center><button style="background-color:#801010" type="submit" class="theme-button-one">Annuler</button></center>
                    </div>
                </div>
            </form>
        </div>
        <br>
    </div>
</div>
</div>
</body>

<footer class="theme-footer-one">
    <div class="container">
        <div class="top-footer">
            <div class="logo">
                <a href="https://www.mepery.fr/"><img src="{{asset('deal/images/logo/logofooter.png')}}" alt="logo" class="logofooter"></a>
            </div>
        </div> <!-- /.top-footer -->
    </div> <!-- /.container -->

    <div class="bottom-footer">
        <div class="row">
            <div class="col-sm-3">
                <p>RCS : 831 892 443</p>
            </div>
            <div class="col-sm-2">
                <p class="footer-text" style="text-align:center;">© <a href="https://www.mepery.fr/">Mepery</a>
                    2019</p>
            </div>
            <div class="col-sm-7">
                <a class="footer-text" target="blank" href="https://www.mepery.fr/mentions-legales.php">Mentions
                    Légales</a> |
                <a class="footer-text" target="blank" href="https://www.mepery.fr/Mepery_CGU.pdf">CGU</a> |
                <a class="footer-text" target="blank" href="https://www.mepery.fr/Mepery_CGV.pdf">CGV</a> |
                <a class="footer-text" target="blank" href="https://www.mepery.fr/Mepery_RGPD.pdf">Charte des données
                    personnelles</a> |
                <a class="footer-text" target="blank" href="https://www.mepery.fr/cvtheque.php">CVthèque</a>
            </div>
        </div>
    </div>

    <!-- Scroll Top Button -->
    <button class="scroll-top tran3s">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </button>


    <!-- Optional JavaScript _____________________________  -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- jQuery -->
    <script src="{{asset('deal/vendor/jquery.2.2.3.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('deal/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Style-switcher  -->
    <script src="{{asset('deal/vendor/jQuery.style.switcher.min.js')}}"></script>
    <script src="{{asset('deal/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
    {{--<script src="{{asset('deal/js/verifchamp.js')}}"></script>--}}
    <script src="http://code.jquery.com/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script>
        // this is important for IEs
        var polyfilter_scriptpath = '/js/';
    </script>
    <script src="{{asset('deal/js/cssParser.js')}}"></script>
    <script src="{{asset('deal/js/css-filters-polyfill.js')}}"></script>
    <div class="overlay"></div>
</footer>

</html>