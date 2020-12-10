<!DOCTYPE html>
<html>
  <head>
    <script src="jquery-3.1.0.min.js"></script>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Stylesheet" type="text/css" href="css/style.css"/>
    <link rel="Stylesheet" type="text/css" href="css/header.css"/>
    <link rel="Stylesheet" type="text/css" href="css/footer.css"/>
    <link rel="Stylesheet" type="text/css" href="css/home.css"/>
    <link rel="Stylesheet" type="text/css" href="css/about.css"/>
    <link rel="Stylesheet" type="text/css" href="css/gallery.css"/>
    <link rel="Stylesheet" type="text/css" href="css/tree.css"/>
    <link rel="Stylesheet" type="text/css" href="css/join.css"/>
    <link rel="Stylesheet" type="text/css" href="css/contact.css"/>
    <title>
      LAN-GUSTA official
    </title>
  </head>
  <body>
    <div class="wrapper">

      <div class="header">

        <div id="mynav" class="navdiv">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="nav">
            <div id="he">
              <a href="index.php">
              Strona główna
              </a>
            </div>
            <div id="at">
              <a href="#about">
              O nas
              </a>
            </div>
            <div id="gy">
              <a href="#gallery">
              Galeria
              </a>
            </div>
            <div id="rs">
              <a href="#tree">
              Wyniki
              </a>
            </div>
            <div id="jn">
              <a href="#join">
              Zgłoszenie
              </a>
            </div>
            <div id="ct">
              <a href="#contact">
              Kontakt
              </a>
            </div>
          </div>
        </div>
        <span class="hamburger" onclick="openNav()">&#9776;</span>

        <div class="logo">
            <a href="index.php">
              <img src="image/logo.svg"/>
            </a>
        </div>
      </div>

      <div class="content">
        <div class="content-divs">


          <div id="home">

            <div id="txt">
              Turniej odbędzie się za:
            </div>
            <div id="countdown">
            </div>

          </div>



          <div id="about"> 

            <div id="aboutbox">
              <div id="pho">
              </div>
              <div id="abouttxt">
			          O nas
                <p>
                  Jesteśmy przyjaciółmi, którzy wspólnymi siłami organizują turniej Counter Strike: Global Offensive.
                  Jest w&nbsp;nas ogromna pasja, do gier, rywalizacji, wydarzeń (takich ja to), którą chcemy się dzielić.
                  Początkowo nazwany "LAN CS:GO Krotoszyn League" turniej był sprawdzeniem naszych zdolności, sił.
                  Chcieliśmy zobaczyć ile da się zrobić bez funduszy, doświadczenia czy pomocy innych. Osiągneliśmy 
                  zamierzony cel - zainteresowanie było ogromne (nie tylko z&nbsp;Krotoszyna, gdzie organizowane jest to wydarzenie, 
                  ale także z&nbsp;innych mniejszych i&nbsp;większych miejscowości) - spodobało nam się to co zrobiliśmy przez co pojawiła 
                  się chęć organizowania dalszych turniejów. Zmieniliśmy nazwę, by to wszystko nabrało świeżości i&nbsp;mamy
                  w&nbsp;planach stworzenie czegoś większego, ale na razie niech to będzie tajemnicą.
                </p>
              </div>
            </div>

          </div>



          <div id="gallery">
            <div class="gallcont">
              <div class="slidebox">

                <div class="slides fade">
                  <div class="numbertext">2016</div>
                    <div class="top-line">
                      <div class="zdj">
                          <img src="css/img/gallery/2016/z1.jpg"/>
                        </div>
                      <div class="zdj">
                          <img src="css/img/gallery/2016/z2.jpg"/>
                        </div>
                      <div class="zdj">
                          <img src="css/img/gallery/2016/z3.jpg"/>
                        </div>
                      <div class="zdj">
                          <img src="css/img/gallery/2016/z4.jpg"/>
                        </div>
                    </div>
                    <div class="bot-line">
                      <div class="zdj">
                          <img src="css/img/gallery/2016/z5.jpg"/>
                        </div>
                      <div class="zdj">
                          <img src="css/img/gallery/2016/z6.jpg"/>
                        </div>
                      <div class="zdj">
                          <img src="css/img/gallery/2016/z7.jpg"/>
                        </div>
                      <div class="zdj">
                          <img src="css/img/gallery/2016/z8.jpg"/>
                        </div>
                    </div>
                  <div class="cr"> </div>
                </div>

               
                <div class="slides fade">
                  <div class="numbertext">2015</div>
                    <div class="top-line">
                      <div class="zdj">
                          <img src="css/img/gallery/2015/l2.jpg"/>
                      </div>
                      <div class="zdj">
                          <img src="css/img/gallery/2015/l1.jpg"/>
                      </div>
                      <div class="zdj">
                          <img src="css/img/gallery/2015/l3.jpg"/>
                      </div>
                      <div class="zdj">
                          <img src="css/img/gallery/2015/l4.jpg"/>
                      </div>
                    </div>
                    <div class="bot-line">
                      <div class="zdj">
                          <img src="css/img/gallery/2015/l5.jpg"/>
                      </div>
                      <div class="zdj">
                          <img src="css/img/gallery/2015/l6.jpg"/>
                      </div>
                      <div class="zdj">
                          <img src="css/img/gallery/2015/l6.jpg"/>
                      </div>
                      <div class="zdj">
                          <img src="css/img/gallery/2015/l5.jpg"/>
                      </div>
                    </div>
                  <div class="cr"> </div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                </div>

                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                </div>

              </div>
            </div>

          <div id="tree">

            <div id="results">
              <div id='allresults'>
                <div id='tnw'><p> Nazwa drużyny:</p></div>
                <div id='lwm'><p> Liczba wygranych meczy:</p></div><br><br>
                <?php include 'php/results.php';?>
              </div>
            </div>

          </div>



          <div id="join">

            <div id="alljoin">
              <div class="join-reg">

              <?php

              if (empty($_POST["name"]) || empty($_POST["surname"])
                || empty($_POST["nick"]) || empty($_POST["phone"])
                || empty($_POST["email"]) || empty($_POST["teamname"])
                || empty($_POST["c1"]) || empty($_POST["nck1"])
                || empty($_POST["c2"]) || empty($_POST["nck2"])
                || empty($_POST["c3"]) || empty($_POST["nck3"])
                || empty($_POST["c4"]) || empty($_POST["nck4"]) )
              {

              ?>
                <div class="accept">
                  <div class="regulamin">
                    <p>
                    Regulamin turnieju
                    </p>
                    <dl>
                      <dt>
                      Postanowienia ogólne:
                      </dt>
                      <dd>
                        <ol>
                          <li>
                            Poniższy regulamin dotyczy turnieju 'LAN-gusta CS:GO Krotoszyn League'.
                          </li>
                          <li>
                            Organizatorem turnieju jest 'LAN-gusta CS:GO Krotoszyn League'.
                          </li>
                          <li>
                            Turniej odbywa się w&nbsp;dniach 13-14 maja 2017, otwarcie o&nbsp;godzinie 9:00.
                          </li>
                          <li>
                            Udział w&nbsp;turnieju jest jednoznaczny z akceptacją niniejszego regulaminu.
                          </li>
                          <li>
                            Strona turnieju: www.facebook.com/lankrotoszyn. Organizator zastrzega sobie prawo do rozpoczęcia turnieju później niż jest to planowane bez konieczności podawania powodu podjęcia takiej decyzji.
                          </li>
                          <li>
                            Organizatorzy zastrzegają sobie prawo do zmiany regulaminu.
                          </li>
                          <li>
                            Zarejestrować należy się na stronie turnieju lub/oraz u&nbsp;odpowiednich osób fizycznych.
                          </li>
                        </ol>
                      </dd>
                      <br>
                      <dt>
                      Drużyna:
                      </dt>
                      <dd>
                        <ol>
                          <li>
                            Każdy gracz musi mieć ukończone 13 lat, osoby niepełnoletnie są zobowiązane dostarczyć zgody podpisane przez opiekunów prawnych do organizatorów.
                          </li>
                          <li>
                           W&nbsp;turnieju mogą brać udział 5 - 8 osobowe drużyny:
                           5 osób składu podstawowego (wymagane) oraz 2 graczy rezerwowych (niewymagane), trener (niewymagane).
                          </li>
                          <li>
                           Jedna osoba może reprezentować tylko jedną drużyną biorącą udział w&nbsp;turnieju.
                          </li>
                          <li>
                           Każda drużyna ma obowiązek wybrać Kapitana drużyny.
                          </li>
                          <li>
                           Kapitan (osoba zgłaszająca drużynę) zmuszony jest podać następujące informacje:
                           <ol type="a">
                            <li>
                              Nazwa drużyny
                            </li>
                            <li>
                              Nick każdego gracza
                            </li>
                            <li>
                              Imiona i&nbsp;nazwiska graczy
                            </li>
                           </ol>
                          </li>
                          <li>
                           Osoba zgłaszająca drużyna zobowiązuje się do podawania prawdziwych danych. W&nbsp;przypadku podania niewłaściwych danych grozi dyskwalifikacja.
                          </li>
                          <li>
                           Aby móc uczestniczyć w turnieju, należy wpłacić wpisowe. Jest to jednocześnie potwierdzenie oraz zagwarantowanie udziału. Opłata wynosi 15 zł za każdego zawodnika drużyny.
                          </li>
                        </ol>
                      </dd>
                      <br>
                      <dt>
                      Oprogramowanie:
                      </dt>
                      <dd>
                        <ol>
                          <li>
                           Podczas rozgrywki zabrania się korzystania z&nbsp;jakichkolwiek aplikacji wspomagających grę np. wallhack, aimbot itd.
                          </li>
                          <li>
                           Dozwolone jest korzystanie z&nbsp;komunikatora Teamspeak3. Organizator zobowiązuje się do zapewniania dostępu do lokalnego serwera Teamspeak. Gracz zobowiązuje się do korzystania z&nbsp;lokalnego serwera Teamspeak. Inne programy komunikacyjne są zabronione.
                          </li>
                          <li>
                           Każdy gracz zobowiązany jest posiadać grę Counter Strike: Global Offensive na platformie Steam.
                          </li>
                          <li>
                           Każdy z graczy który chce mieć możliwość korzystania z&nbsp;własnej konfiguracji gry zobowiązany jest do przesłania Organizatorom plików konfiguracyjnych przed określonym dniem (data podana na Fanpage’u).
                          </li>
                        </ol>
                      </dd>
                      <br>
                      <dt>
                      Tryb rozgrywek:
                      </dt>
                      <dd>
                        <ol>
                          <li>
                            Rozgrywki prowadzone będą na serwerze zapewnionym przez organizatorów.
                          </li>
                          <li>
                           W&nbsp;części grupowej rozgrywane są mecze systemem pucharowym (drzewko). Mecze rozgrywane są systemem BO1. Finał rozgrywany jest w&nbsp;systemie BO3.
                          </li>
                          <li>
                           Po rzucie monetą kapitan wygranego zespołu wybiera stronę, po której chce zacząć CT/TT.
                          </li>
                          <li>
                          Na mecz musi stawić się co najmniej 5 zawodników, mniejsza ilość nie zostanie dopuszczona do gry. W&nbsp;razie niestawienia się drużyny w&nbsp;wyznaczonym czasie, gra zostaje oddana przeciwnikowi przez w/o.
                          </li>
                          <li>
                          Drużyna może zostać zdyskwalifikowana z&nbsp;uczestnictwa w&nbsp;turnieju jeżeli organizatorzy zdecydują, że drużyna swoim spóźnieniem zakłóca przebieg turnieju.
                          </li>
                          <li>
                          Wszyscy zawodnicy muszą być fizycznie obecni na turnieju podczas swoich meczów.
                          </li>
                          <li>
                          Organizator zobowiązuje się wyznaczyć sędziego turnieju zajmującego się organizacją rozgrywek.
                          </li>
                        </ol>
                      </dd>
                      <br>
                      <dt>
                      Zasady gry:
                      </dt>
                      <dd>
                        <ol>
                          <li>
                           Celowe wykorzystywanie błędów w&nbsp;grze jest zabronione i&nbsp;równoznaczne z&nbsp;przegraniem gry.
                          </li>
                          <li>
                          Organizatorzy mają prawo odmówić drużynie udziału w&nbsp;turnieju uzasadniając przyczynę.
                          </li>
                        </ol>
                      </dd>
                      <br>
                      <dt>
                      Przebieg gry:
                      </dt>
                      <dd>
                        <ol>
                          <li>
                            Organizatorowi przysługuje prawo wskazania obserwatorów gry. Organizator może także zadecydować o&nbsp;tym, iż mecz będzie streamowany. Mecze mogą być streamowane z&nbsp;komentarzem.
                          </li>
                          <li>
                         W&nbsp;razie utraty połączenia należy spauzować grę oraz natychmiast powiadomić sędziego. Gracz który utracił połączenie musi ponownie dołączyć do gry.
                          </li>
                          <li>
                          W&nbsp;sytuacjach kontrowersyjnych, decyzję o&nbsp;ich rozwiązaniu podejmuje sędzia.
                          </li>
                          <li>
                          W&nbsp;wyżej wymienionych przypadkach do sędziego zgłaszają się kapitanowie obu drużyn.
                          </li>
                          <li>
                          Decyzja podjęta przez sędziego jest ostateczna i&nbsp;nieodwołalna.
                          </li>
                          <li>
                          Z&nbsp;rozgrywki zostanie zdyskwalifikowana każda drużyna, która w&nbsp;trakcie rozgrywki wykaże się niesportowym zachowaniem (tzn. poniżanie, wyzywanie, używanie wulgaryzmów).
                          </li>
                          <li>
                          Z&nbsp;zawodów zostanie wykluczona każda drużyna, która dopuści się oszustwa w postaci modyfikacji klienta gry, korzystanie z&nbsp;niedozwolonego oprogramowania oraz obserwowania drużyny przeciwnej w&nbsp;trakcie trwania swojego meczu.
                          </li>
                        </ol>
                      </dd>
                    </dl>
                  </div>
                  <br><br>
                  <br><br>
                  <div id="reg_accept">
                    <input type="checkbox" value="agreekey" id="agreekey" name="agreekey"/> 
                    <label for="agreekey">Akceptuję powyższy regulamin.</label>     
                  </div>
                  <br>
                  <input type="button" value="Wypełnij formularz" id="agree" name="agree"/>

                </div>



                  <div class="dataform">
                  <form id="dataf" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>" >
                  
                    <div id="teamleader">
                    
                      <p>
                        Dane zgłaszającego:
                      </p>
                      <label for="name">Imię: </label>
                      <br>
                      <input type="text" id="name" name="name" placeholder="imię"/> 
                      <br><br>
                      <label for="surname">Nazwisko: </label>
                      <br>
                      <input type="text" id="surname" name="surname"placeholder="nazwisko"/>
                      <br><br>
                      <label for="nick">Nick: </label>
                      <br>
                      <input type="text" id="nick" name="nick" placeholder="nick"/> 
                      <br><br>
                      <label for="phone">Numer telefonu kontaktowego: </label>
                      <br>
                      <input type="text" id="phone" name="phone" size="9" placeholder="numer telefonu"/> 
                      <br><br>
                      <label for="email">Adres e-mail: </label>
                      <br>
                      <input type="text" id="email" name="email" placeholder="e-mail"/>
                      <br><br>
                      
                    <br>
                    </div>


                    <div id="team">
                    
                      <p>
                        Dane drużyny:
                      </p>
                      
                      <label for="teamname">Nazwa drużyny: </label>
                      <br>
                      <input type="text" id="teamname" name="teamname" placeholder="nazwa drużyny"/>
                      <br><br>
                      
                      <label for="mem">Skład drużyny: </label>
                      <br>
                      
                      <div id="mem">
                        <input type="text" id="c1" name="c1" placeholder="imię i nazwisko"/>
                        <input type="text" id="nck1" name="nck1" placeholder="nick"/>
                        <br><br>
                        <input type="text" id="c2" name="c2" placeholder="imię i nazwisko"/>
                        <input type="text" id="nck2" name="nck2" placeholder="nick"/>
                        <br><br>
                        <input type="text" id="c3" name="c3" placeholder="imię i nazwisko"/>
                        <input type="text" id="nck3" name="nck3" placeholder="nick"/>
                        <br><br>
                        <input type="text" id="c4" name="c4" placeholder="imię i nazwisko"/>
                        <input type="text" id="nck4" name="nck4" placeholder="nick"/>
                        <br><br>
                      </div>
                      
                      <label for="r1">Rezerwowi (niewymagane): </label>
                      <br>
                      
                      <div id="r">
                        <input type="text" id="r1" name="r1" placeholder="imię i nazwisko"/>
                        <input type="text" id="rnck1" name="rnck1" placeholder="nick"/>
                        <br><br>
                        <input type="text" id="r2" name="r2" placeholder="imię i nazwisko"/>
                        <input type="text" id="rnck2" name="rnck2" placeholder="nick"/>
                        <br><br>
                      </div>

                      <label for="coach">Trener (niewymagane): </label>
                      <br>
                      <input type="text" id="coach" name="coach" placeholder="imię i nazwisko"/>
                    </div>

                      <div id="formalert">
                        <br><br>
                        Proszę wypełnić brakujące pola.
                      </div>
                      <div id="sendbutton">
                        <br>
                        <input type="submit" value="Wyślij formularz" id="send" name="send"/>
                      </div>
                    </div>
                  </form>
                  </div>

              </div>
            </div>

              <?php

                } 
                else
                { // jesli nieopcjonalne pola z form nie są puste

                include 'php/validate.php';

              ?>
              <div id="formcomplete">

              <?php
                include 'php/addTeam.php';
              ?>

              </div> 

              <?php

                } //koniec else gdy niepuste
              ?>


            <div id="contact">

              <div id="con">
                <div id="condata">
                  <div id="promoter1">
                    Organizatorzy:
                    <br>
                    Andrzej&nbsp;Andrzejewski i&nbsp;Janusz&nbsp;Januszowski
                    <br>
                    <br>
                  </div>
                  <div id="wtu">
                    Napisz do nas na:
                    <br>
                    krotoszyncsleague@gmail.com
                  </div>
                </div>
              </div>

          </div>

         </div>
        </div>



      <div class="footer">
        <div class="social">
          <div class="social-div">
            <div id="fb">
              <a href="https://www.facebook.com/lankrotoszyn">
                <img src="image/facebook.svg" />
              </a>
            </div>
            <div id="twitch">
              <a href="https://www.twitch.tv/krotoszyncsleague">
                <img src="image/twitch.svg" />
              </a>
            </div>
          </div>
        </div>

        <div class="contactAuthor">
          <div class="author">
            &copy 2020 | Magdalena&nbsp;Talarczyk 
            <br>
            tel. 664-030-266 
            <br>
            email: mcdalena.talarczyk@gmail.com
          </div>
          <br><br>
          <div class="adminlink">
            <a href="admin.php">Panel-Admin</a>
          </div>
        </div>

     </div> 


    </div>
  </div>
</div>
            
    <script src="js/countdown.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/form.js"></script>
    <script src="js/sendForm.js"></script>
    <script src="js/hamburger.js"></script>
    <script src="js/slides.js"></script>
  </body>
</html>


