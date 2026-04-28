
    <footer>
        <div class="footercontent">
        <div class="footerinfos">
            <div class="footerlogo">
                <h1>Dar El Malaika</h1>
                <p>Une oasis d'élégance et de paix, où règne la magnificence des Mille et Une Nuits  </p>
            </div>
            <div class="contentInfo" >
                <div class="firstrow">  
                    <ul>
                        <p>link</p> 
                        <li><a href="landingpage.php">accueil</a></li>
                        <li><a href="roomspage.php">rooms</a></li>
                        <li><button><a href="contactpage.php">contant us</a></button></li>
                    </ul>
                </div>
                <div class="secandrow">
                    
                    <ul>
                        <p>accounts</p>
                        <li>taha</li>
                        <li>taha</li>
                        <li>taha</li>
                    </ul>
                </div>
                <div class="thirdrow" >
                    <ul>
                        <p>informations</p>
                        <li> WA: 00 212 6 56 21 90</li>
                        <li> tel: 0033616134482</li>
                        <li>dar.el.malaika@gmail.com</li>
                        <li style="font-size: 15px; text-align: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        </svg>
                        26 rue du Docteur BLANC  24010 El JADIDA (MAROC)</li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="breakline"></div>
        <div class="copyright">
            <div class="textCopyright">
                <h3>2025 dar le malaika © all ghits reserved</h3>
            </div>
            <div class="mymark">
                <h3>devloped by : <span>@hz_canfly</span></h3>
            </div>
        </div>
        </div>
    </footer>


    <!-- javascript code -->
    <script>
        const leftscrollBtn = document.getElementsByClassName('arrow-left');
        const rightscrollBtn = document.getElementsByClassName('arrow-right')[0];
        const firstCart = document.getElementsByClassName('cart-ninphea')[0];
        const secondCart = document.getElementsByClassName('cart-gardenia')[0];
        const lastCart = document.getElementsByClassName('cart-hibiscus')[0];
        let rightconteur = 0;

       const leftmove = () =>{
            if(rightconteur == 1){
                firstCart.style.animationDirection = 'reverse';
                firstCart.style.animationName  = 'none';
                rightconteur -= 1;
                console.log(rightconteur);
                rightscrollBtn.disabled = false;
            }
            else if (rightconteur == 2){
                secondCart.style.animationDirection = 'reverse';
                secondCart.style.animationName  = 'none';
                rightconteur -= 1;
            }
        }
       const rightmove = () =>{

            if(rightconteur == 0){  
                firstCart.style.animationName  = 'rightMoveOne';
                firstCart.style.animationDirection = 'normal';
                rightconteur += 1;
                console.log(rightconteur)
            }
            else if (rightconteur != 0){
                secondCart.style.animationName  = 'rightMoveTwo';
                secondCart.style.animationDirection = 'normal';
                rightconteur += 1;
                rightscrollBtn.disabled = true;
            }
       };

       /* footer style update for contact from */
       if(document.URL == "http://localhost/test%20code/php_project/src/pages/contactpage.php"){
        document.querySelector('footer').style.margin = '-2cm 0 0 auto';
        document.querySelector('footer').style.position = 'relative';
        document.querySelector('footer').style.zIndex = '10';
       }


       function toggleMenu() {
        document.querySelector('.nav-links').classList.toggle('active');
       }
    </script>

    <!-- bootstrap includment --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="../services/script.js"></script>
</body>

</html> 