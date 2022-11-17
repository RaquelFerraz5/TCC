<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="icon" href="img/MicrosoftTeams-image.ico">
    <link rel="stylesheet" href="css/estrutura.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/timeline.css">
    <link rel="stylesheet" href="css/contato.css">
    <script  src="js/login.js"></script>
    <script  src="js/login2.js"></script>
    <script  src="js/estrutura.js"></script>
    <script  src="js/timeline.js"></script>
    <script  src="js/nav.js"></script>
    
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

  <!--MENU-->
  <div class="menu" id="menu">
    <div class="menu__logo">
     <a href="index.php" ><img class="logo" src="img/logobranco.png"></a>
    </div>

    <a class="nav-iten" href="sobre.php">Sobre</a>
    <a class="nav-iten" href="tipos.php">Tipos de doenças</a>
    <a class="nav-iten" href="dicas.php" style="margin-right:10vh;">Dicas e cuidados</a>

    <div class="menu__buttons">
      <a href="login3.php" style="text-decoration: none;"><div class="menu__button">Login</div></a>
    </div>

</div>


      <div class="header">
        <div class="header__background"></div>
           <div class="header__title"> 
            <h1>Benizi</h1>
            <h3>Entenda o que são as Doenças Raras e como a falta de conhecimento afeta os pacientes</h3>
           </div>
      </div>
<!--Fim MENU-->

    <div id="bloco"><img src="img/dr.jpg"/>
            </div>
            <div id="bloco2" style="margin-left:55%;">
                <h1 class="texto1" style="margin-top: 0vh; overflow:hidden; ">O que é?</h1>
                <p class="home">
                    As doenças raras podem ser definidas como aquela que afeta até 65 pessoas em cada 100 mil, ou seja, 1,3 pessoas para cada 2.000 indivíduos. São classificadas de acordo com os quatro principais fatores: incidência, raridade, gravidade e diversidade. No Brasil, estima-se que cerca de treze milhões de pessoas possuem alguma doença rara.
                    <br>
                </p>
                    <h1 class="texto1" style="margin-top: 0vh; overflow:hidden;">Quantas existem no Brasil?</h1>
                    <p class="home">
                      São cerca de sete a oito mil tipos e dentre as mais conhecidas estão esclerose múltipla, hemofilia, neuromielite óptica, autismo, acromegalia, entre outras.
                    </p> 

                <a href="tipos.php"><button id="saiba" class="button" style="font-weight:600; float:initial; margin-left: 0%;margin-top:15%;" >Saiba Mais</button></a>
              </div>

<!--Doação-->
<center>
  <div id="doação" >
    <h2 style="color:#004e3de0;">&bull; Doe pela causa através da associação AFAG &bull;</h2>

    <p class="doar">A <a href="https://www.afagbrasil.org.br/afag/">Associação dos Familiares, Amigos e Portadores de Doenças Graves (AFAG)</a> é uma entidade  de abrangência nacional, sediada em Campinas, São Paulo. Desde 2005 atua na defesa dos direitos das pessoas acometidas por doenças raras e graves. </p>

    <div style="display:block;"><a href="https://www.paypal.com/donate/?cmd=_s-xclick&hosted_button_id=BACYGFVNTJCJ6&source=url" target="_blank"><button class="button" style="font-weight:600; float:initial; margin-left: 10%;">Doar</button></a></div>
  </div>
</center>

<!--CODIGO PARA A PARTE DE CONTATO-->
    <div id="bloco3" style="height:fit-content">
        <center><div id="container" style="margin-bottom:3%;">
        <h2 style="color:#004e3de0;">&bull; Entre em contato &bull;</h2>
            <div class="underline">
            </div>
            
            <form action="https://formsubmit.co/dpo.benizi@gmail.com" method="post" id="contact_form">
              <div class="name">
                <label for="name"></label>
                <input type="text" placeholder="Meu nome " name="name" id="name_input" required>
              </div>

              <div class="email">
                <label for="email"></label>
                <input type="email" placeholder="Meu email " name="email" id="email_input" required>
              </div>

              <div class="subject">
                <label for="subject"></label>
                <select placeholder="Assunto" name="subject" id="subject_input" required>
                  <option disabled hidden selected>Opções de assuntos</option>
                  <option>Gostaria de entrar em contato com um médico especializado.</option>
                  <option>Gostaria de contribuir para melhorar a qualidade das informações.</option>
                </select>
              </div>

              <div class="message">
                <label for="message"></label>
                <textarea name="message" placeholder="Enviar uma mensagem" id="message_input" cols="30" rows="5" required></textarea>
              </div>

              <div class="submit">
                <input type="submit" value="Enviar" id="form_button" />
              </div>

              <input type="hidden" name="_subject" value="Nova dúvida!">

              <input type="text" name="_honey" style="display:none">

              <input type="hidden" name="_captcha" value="false">


            </form><!-- // End form -->


          </div></center><!-- // End #container -->
    </div>

        <!--CODIGO TIMELINE-->

        <div class="timeline-container" id="timeline-1" style="margin-bottom:10vh;">
            <div class="timeline-header">
              <h1 class="timeline-header__title">Linha do Tempo</h1>
              <h2 class="timeline-header__subtitle">Algumas doenças raras descobertas ao longo da história</h2>
            </div>

            <div class="timeline">
           <div class="timeline-item" data-text="Hemofilia">
                <div class="timeline__content"><img class="timeline__img" src="https://img.europapress.es/fotoweb/fotonoticia_20190910074635_1024.jpg"/>
                  <h2 class="timeline__content-title">1803</h2>
                  <p class="timeline__content-desc">A hemofilia é um distúrbio genético e passado de pai para filho que afeta a coagulação do sangue. Por exemplo: quando machucamos alguma parte do nosso corpo e começa a sangrar, as proteínas (elementos responsáveis pelo crescimento e desenvolvimento de todos os tecidos do corpo) entram em ação para acabar o sangramento.</p>
                </div>
              </div>

              <div class="timeline-item" data-text="Doença de Wilson">
                <div class="timeline__content"><img class="timeline__img" src="https://i0.wp.com/opas.org.br/wp-content/uploads/2018/10/doenca-de-wilson-1.jpg?fit=1236%2C700&ssl=1"/>
                  <h2 class="timeline__content-title">1912</h2>
                  <p class="timeline__content-desc">Na doença de Wilson, uma rara doença hereditária (passada dos pais para os filhos), o fígado não elimina o excesso de cobre na bile, como faz normalmente, resultando em um acúmulo de cobre (elemento químico de metal) no fígado, causando-lhe danos. O cobre se acumula no fígado, no cérebro, nos olhos e em outros órgãos.</p>
                </div>
              </div>

                <div class="timeline-item" data-text="Doença de Crohn">
                     <div class="timeline__content"><img class="timeline__img" src="https://images.contentstack.io/v3/assets/blt45c082eaf9747747/bltcf495013cd955931/5de0b6ae9cec477ff48cd948/Header_DigestiveTract.jpg?format=pjpg&auto=webp&quality=76&width=1232"/>
                       <h2 class="timeline__content-title">1932</h2>
                       <p class="timeline__content-desc">É uma doença inflamatória crônica que atinge o intestino e os casos mais graves podem apresentar entupimento ou perfurações intestinais. Enfraquecimento, dores abdominais e nas articulações, perda de peso, diarreia com ou sem sangue, lesões na pele, pedra nos rins e na vesícula são alguns dos principais sintomas.</p>
                     </div>
                   </div>
            
              <div class="timeline-item" data-text="Gastroenterite eosinofílica">
                <div class="timeline__content"><img class="timeline__img" src="https://s3.eu-central-1.amazonaws.com/pazienti-platform/media_items/files/000/000/059/large/I-sintomi-della-gastroenterite-1024x680.jpg?1578566846"/>
                  <h2 class="timeline__content-title">1937 </h2>
                  <p class="timeline__content-desc">Este é o nome da enfermidade que causa alergia a todos os tipos de comida em seus portadores que, sem um diagnóstico correto, podem enfrentar quadros graves de desnutrição. O primeiro caso de GE foi registrado em 1937 e até hoje não possui um tratamento devido à falta de estudos aprofundados.</p>
                </div>
              </div>

              <div class="timeline-item" data-text="Síndrome da hipoventilação central congênita (SHCC)">
                <div class="timeline__content"><img class="timeline__img" src="https://blog.medicalway.com.br/wp-content/uploads/2020/07/original-08f5566cabbee405dfb98a3f1ffb52f8-780x450.jpeg"/>
                  <h2 class="timeline__content-title">1970</h2>
                  <p class="timeline__content-desc">Descoberta em 1970, esta é uma doença rara para qual já foi desenvolvida uma espécie de cura bastante eficaz. A SHCC é uma desordem genética causada por mutações no gene PHOX2B que, por sua vez, desencadeiam uma falha no controle autônomo da respiração secundária. Simplificando, a consequência deste problema é morte por sufocação, como se estivesse afogando.</p>
                </div>
              </div>

              <div class="timeline-item" data-text="Fibrodisplasia ossificante progressiva (FOP)">
                <div class="timeline__content"><img class="timeline__img" src="https://aefop-es.org/wp-content/uploads/2020/06/esqueleto_01.jpg"/>
                  <h2 class="timeline__content-title">2006 </h2>
                  <p class="timeline__content-desc">Também conhecida como “síndrome do homem de pedra”, esta doença caracteriza-se pelo enrijecimento de ligamentos, tendões e músculos do portador. Assim, as principais consequências são a paralisação progressiva dos membros e a deformação corpórea.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- partial -->
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="js/timeline.js"></script>

<!-- Site footer -->
<footer class="footer">

  <div class="container">

      <div class="logo">
          <img src="img/logobranco.png" class="img-fluid" alt="">
      </div>

      <div class="row">
          <div class="col-md-6 col-lg-6">

              
              <div class="widget1">

                  <h5>
                      Sobre
                  </h5>
                      <ul class="footer-links" style="text-align: justify; color: #fff;">
                          <li>Somos um grupo feminino de estudantes da Etec de Guarulhos do ensino técnico em Desenvolvimento de Sistemas, em que para nosso Trabalho de Conclusão de Curso(TCC) criamos uma marca, como um nome de empresa, chamada Valkiria com o projeto Benizi.</li>
                        </ul>
                  
                  <div class="socialLinks">
                      <ul>
                        <li>
                          <a  href="https://www.facebook.com/Benizi-104322582357020" target="_blank">
                              <img class="icon" src="img/pngwing.com (1.2).png" width="80vh" height="50vh"/>
                          </a>
                      </li>
                      <li>
                          <a  href="https://twitter.com/BeniziValkirias" target="_blank">
                              <img class="icon" src="img/pngwing.com (3.2).png" width="80vh" height="70vh"/>
                          </a>
                      </li>
                      <li>
                          <a href="https://www.linkedin.com/in/benizi-by-valkirias-300197245/" target="_blank">
                              <img class="icon" src="img/pngwing.com (4.2).png" width="80vh" height="70vh"/>
                          </a>
                      </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-2">
              <div class="widget2">
                  <h5>
                      Categorias
                  </h5>
                  <div class="media">
                  
                      <div class="media-body d-flex align-self-center">
                          <div class="widget3">
                              <a href="#">
                                  <ul class="footer-links">
                                    <li><a href="tipos.php" style="text-decoration: none;">Doenças</a></li>
                                    <li><a href="dicas.php" style="text-decoration: none;">Dicas</a></li>
                                    <li><a href="tipos.php" style="text-decoration: none;">Tratamentos</a></li>
                                    <li><a href="dicas.php#bloco3" style="text-decoration: none;">Prevenção</a></li>
                                    <li><a href="login.php" style="text-decoration: none;">Dúvida</a></li>
                                    </ul>
                              </a>
                          </div>
                      </div>
                  </div>
                  
              </div>
          </div>
          <div class="col-sm-6 col-lg-4">

              <div class="widget3">
                  <h5>
                       Links
                  </h5>
                  <ul class="footer-links">
                      <li><a href="sobre.php
                      
                      
                      " style="text-decoration: none;">Sobre Nós</a></li>
                      <li><a href="#bloco3" style="text-decoration: none;">Entre em Contato</a></li>
                      <li><a href="PolíticaPrivacidade.txt" style="text-decoration: none;">Politica de Privacidade</a></li>
                    </ul>
              </div>
          </div>
          
      </div>
  </div>
  <div class="copyRightArea">
      <div class="container">
          <div class="row">
              <div class="col-12 text-center">
                  <p>&copy; Copyright Todos os Direitos Reservados 2022.</p>
              </div>
          </div>
      </div>
  </div>
</footer>


    </section>
</body>
</html>