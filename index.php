<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="imagem/png" href="assets/imgs/logoSitePessoal.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#FFFFFF" />
        <meta
            name="description"
            content="My Portfolio">
        
        <!--
            manifest.json provides metadata used when your web app is installed on a
            user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
        -->
        <!--
            Notice the use of %PUBLIC_URL% in the tags above.
            It will be replaced with the URL of the `public` folder during the build.
            Only files inside the `public` folder can be referenced from the HTML.

            Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
            work correctly both with client-side routing and a non-root public URL.
            Learn how to configure a non-root public URL by running `npm run build`.
        -->


        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
        <link rel="stylesheet" href="assets/fontawesome-free-5.15.4-web/css/all.css" type="text/css"/>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Source+Serif+Pro:ital@1&display=swap" rel="stylesheet">
        <!-- <script>var Alert = ReactBootstrap.Alert;</script> -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Source+Serif+Pro:ital@1&display=swap" rel="stylesheet">

        <title>Igor Siqueira da Silva</title>
    </head>
    <body>
        
        <section name="body">
            <!-- Header -->
            <div class="container-fluid backgroundOne" style="margin:0px !important;margin-bottom:50px !important">
                <section class="header"  style='margin:0px;margin-bottom:50px'>

                    <nav class="navbar navbar-expand-lg sticky-top">
                        <button class="navbar-toggler nav-style" type="button" data-toggle="collapse" 
                            data-target="#navbarNavheader" aria-controls="navbarNavheader" aria-expanded="false" 
                            aria-label="Toggle navigation"
                            style='margin:0px;margin-bottom:50px'
                        >
                            <i class="fas fa-bars" size="lg" title="Menu"></i>
                            <!-- <FontAwesomeIcon icon={faAlignJustify} size={'lg'} title="Menu"/> -->
                        </button>
                        <div class="collapse navbar-collapse justify-content-around" id="navbarNavheader" align="center" role="navigation">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link nav-style" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-style" href="#skills">Skills</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-style" href="#profile">Profile</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </section>
                <section name="about" id="about">
                    <div class="container-fluid">
                        
                        <div class="row justify-content-center">
                            <div class="col-sm-7 style-about">
                                <div class="h4">
                                    Hi, my name is Igor Siqueira da Silva, I'm <span id="idade"></span> years old, I'm passionate about technology with a focus on back-end development, and aiming to become full-stack.
                                </div>
                            </div>
                            
                            <div class="row" style='margin-bottom:40px !important'>
                                <image
                                    class="mx-auto d-block rounded-circle myImage" 
                                    alt="Responsive image" 
                                    src="assets/imgs/euV3.png" 
                                />
                            </div>
                        </div>
                    </div>
                </section>
            </div>
                
            <!-- <Skills/> -->
            <section name="skills" id="skills" style="margin:0px !important; margin-bottom:50px !important">
                <div class="container-fluid" style="margin-top:190px !important; margin-bottom:50px !important; background-color:rgb(240 240 240) !important"> 
                    <div class="row">
                        <div class="col-lg"  style="margin-top:10px !important">
                            <div class="card" style="border:6px solid #dee2e6 !important">
                                <div class="card-header text-center">
                                    languages
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr>
                                                <th scope="col">N°</th>
                                                <th scope="col">name</th>
                                                <th scope="col">level</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Php</td>
                                                <td>Solid knowledge</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>JavaScript</td>
                                                <td>Solid knowledge</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Delphi</td>
                                                <td>Solid knowledge</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Java</td>
                                                <td>Intermediate knowledge</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Python</td>
                                                <td>Intermediate knowledge</td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>C#</td>
                                                <td>Basic knowledge</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>    
                        <div class="col-lg" style="margin-top:10px !important">
                            <div class="card" style="border:6px solid #dee2e6 !important">
                                <div class="card-header text-center">
                                    Frameworks/Tecnologias
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr>
                                                <th scope="col">N°</th>
                                                <th scope="col">name</th>
                                                <th scope="col">level</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Node</td>
                                                <td>Solid knowledge</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>React Native</td>
                                                <td>Solid knowledge</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Bootstrap</td>
                                                <td>Solid knowledge</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Laravel</td>
                                                <td>Intermediate knowledge</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>React</td>
                                                <td>Intermediate knowledge</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>        
                        <div class="col-lg" style="margin-top:10px !important">
                            <div class="card" style="border:6px solid #dee2e6 !important">
                                <div class="card-header text-center">
                                    DataBases
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr>
                                                <th scope="col">N°</th>
                                                <th scope="col">name</th>
                                                <th scope="col">level</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mysql</td>
                                                <td>Solid knowledge</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Firebase</td>
                                                <td>Solid knowledge</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>PostgreSQL</td>
                                                <td>Intermediate knowledge</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>MongoDb</td>
                                                <td>Intermediate knowledge</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>       
                    </div>   
                </div>
            </section>

            <!-- <Profile/> -->
            <section name="profile" id="profile">
                <div class="container-fluid">
                    <div class="row justify-content-sm-center" style="margin-bottom:50px">
                        <!-- <Card body={"Um clone do instagram, aplicativo mobile criado para servir de aprendizado. Foi utilizado o framework React-Native como base de desenvolvimento, e o Firebase como banco de dados."} 
                            projectName="Projeto Lambe lambe" repo="https://github.com/iwebwork/projectLambe" textLink="Git"/> -->
                        <div class="col-sm-4">
                            <div class="card" style="border:6px solid #dee2e6 !important;margin-top:10px !important">
                                <div class="card-header text-center">
                                    <div>Project Lambe lambe</div>
                                </div>
                                <div class="card-body">
                                    A clone of Instagram, a mobile app created to serve as a learning experience. The React-Native framework was used as a development base, and Firebase as a database.
                                </div>
                                <div class="card-rodape d-flex justify-content-around">
                                    <div class="container">
                                        <div class="row justify-content-center btn-card-style">
                                            <a target="_blank" class="text-center" href="https://github.com/iwebwork/projectLambe" style="text-decoration: none !important">
                                                <div class="col-sm btnCard h5" style="color:#000000 !important">
                                                    Git
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="border:6px solid #dee2e6 !important;margin-top:10px !important">
                                <div class="card-header text-center">
                                    <div>Project Tasks</div>
                                </div>
                                <div class="card-body">
                                    A to-do list, mobile app created to serve as a learning experience. The React-Native framework was used as a development base and Postgresql as a database.
                                </div>
                                <div class="card-rodape d-flex justify-content-around">
                                    <div class="container">
                                        <div class="row justify-content-center btn-card-style">
                                            <a target="_blank" class="text-center" href="https://github.com/iwebwork/iwebwork-TasksWithReactNative" style="text-decoration: none !important">
                                                <div class="col-sm btnCard h5" style="color:#000000 !important">
                                                    Git
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="border:6px solid #dee2e6 !important;margin-top:10px !important">
                                <div class="card-header text-center">
                                    <div>Donate Easy</div>
                                </div>
                                <div class="card-body">
                                    Project created in group, and was used as a school presentation. Php was used in the back-end, html, css and javaScript in the front-end together with MySql as database.
                                </div>
                                <div class="card-rodape d-flex justify-content-around">
                                    <div class="container">
                                        <div class="row justify-content-center btn-card-style">
                                            <a target="_blank" class="text-center" href="https://github.com/iwebwork/pi2019PrimeiroSemestre" style="text-decoration: none !important">
                                                <div class="col-sm btnCard h5" style="color:#000000 !important">
                                                    Git
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="border:6px solid #dee2e6 !important;margin-top:10px !important">
                                <div class="card-header text-center">
                                    <div>Artificial intelligence to identify mask use in preventing COVID-19</div>
                                </div>
                                <div class="card-body">
                                    Research developed in a group, was approved by Atena Editora (Specialized in the publication of books and collections of scientific articles.
                                </div>
                                <div class="card-rodape d-flex justify-content-around">
                                    <div class="container">
                                        <div class="row justify-content-center btn-card-style">
                                            <a target="_blank" class="text-center" href="https://www.atenaeditora.com.br/post-artigo/52691" style="text-decoration: none !important">
                                                <div class="col-sm btnCard h5" style="color:#000000 !important">
                                                    Atena Editora
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <Contact/> -->
            <div class="container">
                <div class="row text-center" style="margin-bottom:50px">
                    <div class="col-6">
                        <div class="d-flex flex-row bd-highlight mb-3">
                            <div class="p-3 bd-highlight justify-content-center">
                                <a  target="_blank" href="https://github.com/iwebwork?tab=repositories" style="text-decoration: none; color:#9e6c10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                    </svg>
                                </a>
                                <br/><p>Github</p>

                            </div>
                            <div class="p-3 bd-highlight">
                                
                                <a style="textDecoration: none; color:#9e6c10" href="https://www.linkedin.com/in/igor-siqueira-da-silva-45aba613a/" target="_blank" class="text-center" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16" style="text-decoration: 'none'; color:#9e6c10">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                    </svg>
                                </a>
                                <br/><p>Linkedin</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        @ All rights reserved - Igor Siqueira da Silva - <span id="data"></span>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
        <script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>
        <script src="https://unpkg.com/react/umd/react.production.min.js" crossorigin></script>

        <script
            src="https://unpkg.com/react-dom/umd/react-dom.production.min.js"
            crossorigin></script>

        <script
            src="https://unpkg.com/react-bootstrap@next/dist/react-bootstrap.min.js"
            crossorigin>
        </script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/managed/js/adsense/m202108100101/show_ads_impl_fy2019.js" id="google_shimpl"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>
    </body>
</html>
