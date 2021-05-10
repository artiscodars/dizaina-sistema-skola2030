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
            <p>Aplikācijām tiek noteikts adaptīvi bultu izmēri. Burtu veidols: <b>"Roboto"</b>. <a
                    href="/fonts/fonts.zip" target="_blank">Lejupielādēt fontu arhīvu.</a></p>

            <div class="stils">
                font-family: "Roboto";
                font-size: .8rem;
            </div>

            <h2 class="st-title">Teksta biezumi</h2>

            <div class="bd-example">

                <table class="table table-borderless">

                    <tbody>

                        <tr>
                            <td>
                                <div class="stils">
                                    font-family: "Roboto-Light";
                                </div>

                            </td>
                            <td class="roboto-light">
                                light
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="stils">
                                    font-family: "Roboto-LightItalic";
                                </div>

                            </td>
                            <td class="roboto-light-italic">
                                light Italic
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="stils">
                                    font-family: "Roboto";
                                </div>

                            </td>
                            <td class="roboto">
                                regular
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="stils">
                                    font-family: "Roboto-Italic";
                                </div>

                            </td>
                            <td class="roboto-italic">
                                regular Italic
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="stils">
                                    font-family: "Roboto-Medium";
                                </div>

                            </td>
                            <td class="roboto-medium">
                                medium
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="stils">
                                    font-family: "Roboto-MediumItalic";
                                </div>

                            </td>
                            <td class="roboto-medium-italic">
                                medium Italic
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="stils">
                                    font-family: "Roboto-Bold";
                                </div>

                            </td>
                            <td class="roboto-bold">
                                bold
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="stils">
                                    font-family: "Roboto-BoldItalic";
                                </div>

                            </td>
                            <td class="roboto-bold-italic">
                                bold Italic
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="stils">
                                    font-family: "Roboto-Black";
                                </div>

                            </td>
                            <td class="roboto-black">
                                black
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="stils">
                                    font-family: "Roboto-BlackItalic";
                                </div>

                            </td>
                            <td class="roboto-black-italic">
                                black Italic
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>

            <h2 class="st-title">Teksta izmērs</h2>

            <div class="bd-example">

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lorem lectus, lobortis vel dictum
                    et,
                    viverra vitae lacus. Aenean laoreet blandit odio, a pellentesque est elementum ac.
                </p>

            </div>

            <div class="stils">font-size: .9rem;</div>

            <h2 class="st-title">Virsraksti</h2>

            <div class="bd-example">
                <table class="table table-borderless">

                    <tbody>

                        <tr>
                            <td>
                                <div class="stils">
                                    font-size: 2rem;
                                    color: #836d4d;
                                </div>

                            </td>
                            <td>
                                <h1>h1.Sadaļu galvenais virsraksts</h1>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="stils">
                                    font-size: 1.5rem;
                                </div>

                            </td>
                            <td>
                                <h2>h2.Kaut kāds virsraksts</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="stils">
                                    font-size: 1.60rem;
                                </div>

                            </td>
                            <td>
                                <h3>h3.Kaut kāds virsraksts</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="stils">
                                    font-size: 1.40rem;
                                </div>

                            </td>
                            <td>
                                <h4>h4.Kaut kāds virsraksts</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="stils">
                                    font-size: 1.20rem;
                                </div>

                            </td>
                            <td>
                                <h5>h5.Kaut kāds virsraksts</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="stils">
                                    font-size: 1rem;
                                </div>

                            </td>
                            <td>
                                <h6>h6.Kaut kāds virsraksts</h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h3>Apakšvirsraksts</h3>

            <p>Lai atspoguļotu kāda virsraksta saturu ar mazāku nozīmi. Izmantojas kopā ar h1, h2, h3, h4, h5, h5.</p>

            <div class="bd-example">
                <h4>
                    Kaut kāds virsraksts
                    <small class="text-muted">Mazākas nozīmes apakšvirsraksts</small>
                </h4>
            </div>

            <div class="stils">
                color: #6c757d;
                font-size: 80%;
                font-weight: 400;
            </div>

            <h2 class="st-title">Teksta ievads</h2>

            <p>Izmantojams, lai izceltu kāda teksta pirmo paragrāfu.</p>

            <div class="bd-example">
                <p class="lead">
                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo
                    luctus.
                </p>
            </div>

            <div class="stils">
                font-size: 1.1rem;
                font-weight: 300;
            </div>

        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>
