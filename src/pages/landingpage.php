
<!-- nav includment -->
<?php 
include('../backend/conn.php');
include('../headnav.php')

?>
    <!-- landing page content -->

    <main>

        <!-- the welcome section -->
        <div class="welcome_section">
            <div class="welcome_content">
                <div class="welcome_msg">
                    <h2>welcome to</h2>
                    <h3>Dar El Malaika</h3>
                </div>
            </div>

            
            <div class="welcome_presentation" >
                <div class="img_presentation">
                    <img src="../../resources/images/3.jpg" alt="">
                </div>
                <div class="presentation_msg">
                    <h2>Bienvenue au cœur des Mille et Une Nuits à El Jadida</h2>
                    <p>-  Dans le quartier de la Médina d'El Jadida, découvrez un lieu spécial et privilégié : le Riad "Dar El
                    Malika".</p>
                    <p>-  Le Riad "Dar El Malaika" est une oasis d'élégance et de paix, où règne la magnificence des Mille et Une
                    Nuits. Situé à 5 minutes de la célèbre citerne de la cité portugaise d'El Jadida, à proximité du souk et
                    des plages, le riad dénote par sa féérie.
                    </p>
                </div>
                    
            </div>
        </div>

        <!-- to get more gradient between img and white background color -->
        <div class="gradient-colors"></div>

        <!-- secand section  -->
        <section class="first-section">
            <div class="home-section content-one">
                <div class="homeSection-imgs contentOne_images">
                    <img class="img1-ERsection" src="../../resources/images/4.jpg" alt="#">
                    <img class="img2-ERsection" src="../../resources/images/5.jpg" alt="#"> 
                    <img class="img2-THsection" src="../../resources/images/6.jpg" alt="#">
                </div>
                <div class="homeSection-txt contentOne_text">
                    <h3>Dar El Malaika : Une Parenthèse Hors du Temps</h3>
                    <div></div> <!-- break line between title and text -->
                    <p>Littéralement (la demeure des anges), le Riad "Dar El Malaika" se distingue par sa beauté et par l'atmosphère relaxante qui y règne. L'emplacement idéal complète à souhait les nombreuses fontaines, le jardin aquatique et la végétation luxuriante du Riad.</p>
                    <p>Au sein d'un confort feutré, arpentez les allées bordées de bougainvilliers, de jasmins et de lotus bleus.
                        Plongez au cœur d'une ambiance sereine, intime et imprégnez-vous de l'exotisme marocain : bienvenue au Riad "Dar El Malaika", pour une parenthèse hors du temps.
                    </p>
                </div>
            </div>
            
        </section>

        <!-- therd section  -->
        <section class="second-section">
            <div class="home-section content-two">
                <div class="homeSection-imgs contentTwo_images">
                    <img class="img1-section"  src="../../resources/images/7.jpg" alt="#">
                    <img class="img2-section" src="../../resources/images/9.jpg" alt="#">
                    <img class="img3-section" src="../../resources/images/8.jpg" alt="#"> 
                </div>
                <div class="homeSection-txt contentTwo_text">
                    <h3>Vos options d'hébergement pour un séjour enchanteur</h3>
                    <div></div> <!-- break line between title and text -->
                    <p>Le riad est composé de 5 somptueuses suites de plain-pied situées au premier étage du riad ou en rez-de-jardin.</p>
                    <p>Chaque suite possède un design unique, grâce au soin apporté à la sélection des objets de décoration qui la composent. L'ensemble des suites du "Dar El Malaika" sont équipées de sols en marbre, de salles de bain spacieuses (douche et baignoire) en marbre rose et beige, d'une cheminée en marbre de Carrare dans les salons et d'une impressionnante hauteur sous plafond de 5 mètres</p>
                    <p>Et lorsque vous souhaitez quitter le confort de votre suite, rendez-vous au milieu des arcades du jardin du Dar pour vos apéritifs  Une expérience unique.</p>
                </div>
            </div>
            
        </section>

        <!-- the rooms types presontation  -->
        <section class="rooms-presontation">
            <div class="roomsPresontation-title">
                <h3>luxurious hotel room</h3>
                <div class="roomsPresontation-text">
                    <p>Le RIAD "Dar El Malaika" est composé de 5 suites différentes, mais toutes égales en élégance et en raffinement.</p>
                    <div class="roomsPresontation-btn">
                        <button onclick=leftmove() class="arrow-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                            </svg>
                        </button>
                        <button onclick=rightmove() class="arrow-right">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="rooms-carts">
                <div class="cart cart-ninphea">
                    <div class="cart-img">
                        <img src="../../resources/images/3.jpg" alt="#">
                    </div>
                    <div class="cart-text">
                        <h3>suite ninphea</h3>
                        <p>teacas e taefdsfawr  ewtadfaw taewfgsaw tfsw sdwr sadw swts daweds dw s</p>
                    </div>
                    <div class="moredetail-rooms">
                        <button><p>see detail</p></button>
                    </div>
                </div> 
                <div class="cart cart-gardenia">
                    <div class="cart-img">
                        <img src="../../resources/images/4.jpg" alt="#">
                    </div>
                    <div class="cart-text">
                        <h3>suite gardenia</h3>
                        <p>teacas e taefdsfawr  ewtadfaw taewfgsaw tfsw sdwr sadw swts daweds dw s</p>
                    </div>
                    <div class="moredetail-rooms">
                        <button><p>see detail</p></button>
                    </div>
                </div>
                <div class="cart cart-fuchsia">
                    <div class="cart-img">
                        <img src="../../resources/images/5.jpg" alt="#">
                    </div>
                    <div class="cart-text">
                        <h3>suite junior</h3>
                        <p>teacas e taefdsfawr  ewtadfaw taewfgsaw tfsw sdwr sadw swts daweds dw s</p>
                    </div>
                    <div class="moredetail-rooms">
                        <button><p>see detail</p></button>
                    </div>
                </div>
                <div class="cart cart-rose">
                    <div class="cart-img">
                        <img src="../../resources/images/6.jpg" alt="#">
                    </div>
                    <div class="cart-text">
                        <h3>suite rose</h3>
                        <p>teacas e taefdsfawr  ewtadfaw taewfgsaw tfsw sdwr sadw swts daweds dw s</p>
                    </div>
                    <div class="moredetail-rooms">
                        <button><p>see detail</p></button>
                    </div>
                </div>
                <div class="cart cart-hibiscus">
                    <div class="cart-img">
                        <img src="../../resources/images/7.jpg" alt="#">
                    </div>
                    <div class="cart-text">
                        <h3>suite hibiscus</h3>
                        <p>teacas e taefdsfawr  ewtadfaw taewfgsaw tfsw sdwr sadw swts daweds dw s</p>
                    </div>
                    <div class="moredetail-rooms">
                        <button><p>see detail</p></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- raid activitys  -->
        <section>
            <div class="content-activity">
                <div class="title-half">
                    <h2>with marrocan Culture experience</h2>
                    <p>natural lobbys you need to relax at DAR EL MALAIKA</p>
                </div>
                <!-- carts activity -->
                <div class="carts-half">
                    <button id="leftlobbyBtn"><i class="bi bi-arrow-left-circle-fill"></i></button>
                    <div class="cart lobby-cart">
                        <div class="cartfr-half">
                        <h3>lobby</h3>
                        <!-- <button>see Details 
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="15" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                            </svg>
                        </button> -->
                        </div>
                        <div class="cartsc-half"></div> <!-- image background cart -->
                    </div>        
                    <div class="cart salleMassage-cart">
                        <div class="cartfr-half">
                        <h3>salle de Massage</h3>
                        <!-- <button>see Details 
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="15" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                            </svg>
                        </button> -->
                        </div>
                        <div class="cartsc-half"></div> <!-- image background cart -->
                    </div>
                    <div class="cart sallMangerInt-cart">
                        <div class="cartfr-half">
                        <h3>salle de Manger interieur</h3>
                        <!-- <button>see Details 
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="15" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                            </svg>
                        </button> -->
                        </div>
                        <div class="cartsc-half"></div> <!-- image background cart -->
                    </div>
                    <div class="cart jardin-cart">
                        <div class="cartfr-half">
                        <h3>jardin</h3>
                        <!-- <button>see Details 
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="15" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                            </svg>
                        </button> -->
                        </div>
                        <div class="cartsc-half"></div> <!-- image background cart -->
                    </div>
                    <div class="cart sallMangerExt-cart">
                        <div class="cartfr-half">
                        <h3>salle de Manger exterieur</h3>
                        <!-- <button>see Details 
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="15" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                            </svg>
                        </button> -->
                        </div>
                        <div class="cartsc-half"></div> <!-- image background cart -->
                    </div>
                    <button id="rightlobbyBtn"><i class="bi bi-arrow-right-circle-fill"></i></button>
                </div>
        </section>
          

    
    </main>

<!-- footer includment -->
<?php 
include('../footer.php')
?>