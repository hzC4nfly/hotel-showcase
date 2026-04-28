<!-- head includment -->
 
<?php 
/* include '../backend/conn.php';
include '../backend/sendmsg.php'; */
session_start();
$error_msg = $_SESSION['error_msg'] ?? '';
$done_msg = $_SESSION['done_msg'] ?? '';
session_unset();
include '../headnav.php';

?>

<main>
    <!-- affiche section -->
    <div class="affiche-conatct">
        <div class="affiche-logo">
            <h1>Dar El Malaika</h1>
        </div>
        <div class="affiche-lines">
            <div class="leftline"></div>
            <div class="rightline"></div>
        </div>
        <div class="affiche-title">
            <h2>contact us</h2>
        </div>
    </div>


    <!-- contact us content -->
    <div class="content-contact">
            <div class="content-title">
                <h2>conect with us</h2>
                <p>we're here to assist you!Reach out ti us fir inquiries,bookings,or any information you need.</p>
            </div>
            <div class="contact-infos">
                <div class="mail-info">
                    <i class="bi bi-envelope"></i>
                    <h3>mail</h3>
                    <p>dar.el.malaika@gmail.com</p>
                </div>
                <div class="location-info">
                    <i class="bi bi-geo-alt"></i>
                    <h3>location</h3>
                    <p>26 rue du Docteur BLANC 24010 El JADIDA (MAROC)</p>
                </div>
                <div class="phone-info">
                    <div class="phone-i">
                        <i class="bi bi-telephone"></i>
                        <h3>phone</h3>
                        <p>0033616134482</p>
                    </div>
                    <div class="whatss-i">
                        <i class="bi bi-whatsapp"></i>
                        <h3>whatssap</h3>
                        <p>0033616134482</p>
                    </div>
                    
                </div>
            </div>
            <div class="contact-from">
                <div class="text-form">
                    <h3>send your message</h3>
                    <p>Reach out to Dar El Malaika for  any questions about your stay</p>
                </div>
                <div class="inputs">
                    <form action="../backend/sendmsg.php"  method="post">
                        <div>
                            <div>
                                <input type="text" name="username" placeholder="Your Name" required>
                                <p id="error_msg1"></p>
                            </div>
                            <div>
                                <input type="text" name="phone" placeholder="Your Phone"  required>
                                <p id="error_msg2"></p>
                            </div>
                        </div>
                        <input type="email" name="email" onkeyup="btn_check()" placeholder="Your Email" required>
                        <p id="error_msg3"></p>
                        <input class="mss-input" type="text" name="message" onkeyup="btn_check()" placeholder="Message" required>
                        <p id="error_msg4"></p>
                        <button type="submit" name="submit" id="submit">Send Message</button>
                    </form> 
                </div>
            </div>
            <div class="location-map">
                <iframe 
                    src="https://www.google.com/maps?q=Riad+Dar+El+Malaika+33.25833121793266,-8.506810874487112&z=18&output=embed"
                    width="100%" 
                    height="350" 
                    style="border:0;" 
                    loading="lazy">
                </iframe>
            </div>
    </div>

    <!-- send message result from backend -->
     
    <?php  if(!empty($error_msg) || !empty($done_msg)) : ?>
        <div class="resultmsg <?= empty($error_msg) ? 'green_msg' : 'red_msg' ?>">
            <div>
            <p><?=  $error_msg ,$done_msg?></p>
            <button id="resultmsgBtn" onclick="document.querySelector('.resultmsg').style.display = 'none'"><i class="bi bi-x-circle"></i></button>
            </div>
        </div>
    <?php endif; ?>
    

</main>





<!-- footer includment -->
 
<?php 
include('../footer.php')
?>