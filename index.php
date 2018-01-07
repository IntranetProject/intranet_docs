<?php

if (!(file_exists("up.txt"))) {
    header("Location: http://maintenance.intranetproject.net?site=documentation");
}

?>
    <html>

    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" media="screen,projection">
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <meta property="og:title" content="Docs" />
        <meta property="og:image" content="https://intranetproject.net/logo.png" />
        <meta property="og:url" content="https://docs.intranetproject.net" />
        <meta property="og:description" content="Intranetproject's Documentation" />
        <meta property="og:site_name" content="Docs" />
    </head>

    <body>
        <main>
            <div class="container">
                <h1 class="center-align">Docs</h1>
                <div class="row">
                    <div class="col s10 offset-s1">
                        <div class="card teal lighten-1">
                            <div class="card-content white-text">
                                <span class="card-title">Release</span>
                                <p>These are the last couple released versions.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">N/A</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s10 offset-s1">
                        <div class="card teal lighten-1">
                            <div class="card-content white-text">
                                <span class="card-title">Beta</span>
                                <p>These are the last couple beta versions.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">N/A</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s10 offset-s1">
                        <div class="card teal lighten-1">
                            <div class="card-content white-text">
                                <span class="card-title">Alpha</span>
                                <p>These are the last couple alpha versions.</p>
                            </div>
                            <div class="card-action">
                                <a href="v/0.0.21/index.html">v0.0.21</a>
                                <a href="v/0.0.20/index.html">v0.0.20</a>
                                <a href="v/0.0.19/index.html">v0.0.19</a>
                                <a href="v/0.0.12/index.html">v0.0.12</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="page-footer teal lighten-2">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Links to all other pages:</h5>
                        <ul style="list-style-type: none">
                            <li><a href="http://intranetproject.net" class="white-text">Main Page</a></li>
                            <li><a href="http://download.intranetproject.net" class="white-text">Downloads</a></li>
                            <li><a href="http://status.intranetproject.net" class="white-text">Status</a></li>
                            <li><a href="http://shop.intranetproject.net" class="white-text">Shop</a></li>
                            <li><a href="http://account.intranetproject.net" class="white-text">Account</a></li>
                            <li><a href="http://packages.intranetproject.net" class="white-text">Packages</a></li>
                            <li><a href="http://blog.intranetproject.net" class="white-text">Blog</a></li>
                            <li><a href="http://docs.api.intranetproject.net" class="white-text">API-Docs</a></li>
                        </ul>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="https://twitter.com/Intranetprojec">Twitter</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://github.com/IntranetProjec">GitHub</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://intranetproject.net/imprint.html">Imprint</a></li>
                            <li>
                                <p class="grey-text text-lighten-3" href="#!"><b><i>&lt; &gt;</i>
                      </b> with <i style="color: red;">&hearts;</i> by <a class="grey-text text-lighten-3" href="https://github.com/IntranetProject">Intranet</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © <?php echo "2017-" . date('Y'); ?> Intranet Project
                </div>
            </div>
        </footer>
    </body>

    </html>
