<?php
$parent = "visparigi";
$title = "Teksti";
include '../includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">

            <h1><?php echo $title;?></h1>

            <p>Dokumentācija un piemēri teksta noformējumam, ietverot vispārīgos norādījumus, virsrakstus, saturu,
                sarakstus
                u.c.</p>

            <h2 class="st-title">Teksta burtu veidols un izmērs</h2>
            <p>Aplikācijām tiek noteikts adaptīvi bultu izmēri ar pamata burtu veidolu <b>Lato</b>, ko papildina virsrakstu veidols <b>Gilroy</b> un <b>Gilroy Ligt</b>. </p>



              <a href="/fonts/fonts.zip" target="_blank">Lejupielādēt fontu arhīvu.</a></p>





            <h2 class="st-title">Virsraksti</h2>

            <div class="bd-example">
                <table class="table table-borderless">

                    <tbody>

                        <tr>
                            <td>
                                <div class="stils">
                                      font-size: 1.8rem;
                                      font-family: "Gilroy";
                                      color: $tonis;

                                </div>

                            </td>
                            <td>
                                <h1>H1 - Sadaļu galvenais virsraksts</h1>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="stils">

                                      font-size: 1.5rem;
                                      font-family: "Gilroy";

                                </div>

                            </td>
                            <td>
                                <h2>h2 - Otrā līmeņa virsraksts</h2>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="stils">

                                      font-size: 1.4rem;
                                      font-family: "Gilroy Light";
                                font-weight: 500;
                                </div>

                            </td>
                            <td>
                                <h2 class="gilroy-light">h2 - Otrā līmeņa virsraksts</h2>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="stils">
                                font-size: 1.3rem;
                                </div>

                            </td>
                            <td>
                                <h3>h3 - Trešā līmeņa virsraksts</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="stils">
                                    font-size: 1.1rem;
                                </div>

                            </td>
                            <td>
                                <h4>h4 - Ceturtā līmeņa virsraksts</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="stils">
                                    font-size: 1rem;
                                </div>

                            </td>
                            <td>
                                <h5>h5 - Piektā līmeņa virsraksts</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="stils">
                                    font-size: 0.9rem;
                                </div>

                            </td>
                            <td>
                                <h6>h6 - Sestā līmeņa virsraksts</h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>





        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>
