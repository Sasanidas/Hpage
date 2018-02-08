<?php ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Fermin-Site</title>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="icon" href="img/locked.svg" type="image/x-icon" />
        <script src="js/jquery.js"></script>
    </head>
    <body>

        <main>
            <header>
                <nav>
                    <!--  Aqui metemos el menú-->
                    <p id="menu-title">Fermin MF</p>
                    <div id="menu">
                        <div id="item-list">
                            <a href="#id-section-inicio">
                                <span class="item" >Inicio</span>
                            </a>
                            <a href="#id-section-proyectos">
                                <span class="item">Proyectos</span>
                            </a>
                            <a href="#id-section-contacto">
                                <span class="item">Contacto</span>
                            </a>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div id="images">
                        <div class="img-it">
                            <a href="https://www.fsf.org/" target="_blank">
                                <img src="img/gnu.svg" alt="" width="70px"  class="img-alt">
                            </a>
                        </div>

                        <div class="img-it">
                            <a href="https://www.debian.org/" target="_blank">
                                <img src="img/debian.svg" alt="" width="70px" class="img-alt">
                            </a>
                        </div>
                        <div class="img-it">
                            <a href="https://java.com/en/" target="_blank">
                                <img src="img/java.svg" alt="" width="70px" class="img-alt">
                            </a>
                        </div>
                        <div class="img-it">
                            <a href="https://github.com/Sasanidas" target="_blank">
                                <img src="img/github.svg" alt="" width="70px" class="img-alt">
                            </a>
                        </div>
                        <div class="img-it">
                            <a href="https://www.torproject.org/index.html.en" target="_blank">
                                <img src="img/tor.svg" alt="" width="70px" class="img-alt">
                            </a>

                        </div>

                    </div>

                </nav>

            </header>

            <div class="clear"></div> 
            <div id="sections">
                <section id="id-section-inicio">
                    <div id="id-section-center">
                        <div id="id-section-inicio-image">
                            <img src="img/26670956.jpeg" style="width: 50%; margin-left: 10%; border-radius: 200px; ">
                        </div>

                        <div id="id-section-inicio-text">
                            <p id="id-section-inicio-text-p">
                                Saludos!
                                Me llamo Fermín, y te encuentras en mi web!

                            </p>
                        </div>
                    </div>

                </section>
                <section id="id-section-proyectos" class="scroll">
                    <div id="id-section-proyectos-center">
                        <div id="id-section-proyectos-img">
                            <img src="img/cat.png" alt="" style="width: 50%;margin-left: 20%; border-radius: 300px; background-color: white">
                        </div>
                        <div id="id-section-proyectos-text">
                            <p id="id-section-proyectos-text-p"></p>
                        </div>
                        <div id="id-section-proyectos-imgproy">
                            <img src="" alt="">
                        </div>
                    </div>

                </section>



                <section id="id-section-contacto" class="scroll">


                </section>
            </div>

        </main>
        <div class="clear"></div>
        <footer>


        </footer>

        <script src="js/code.js"></script>
    </body>
</html>
