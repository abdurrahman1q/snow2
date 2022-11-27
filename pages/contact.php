<style>
button {
    background-color: transparent;
}
</style>

<?php
 include('dbconnect.php');
 if(isset($_POST['btnsave'])) {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['message'];    

  $sql = "INSERT INTO contact (name, email, subject, msg)
  VALUES ('$name', '$email', '$subject', '$msg')";
  

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
  $conn->close();

 }
?>


    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-header-content">
                        <h2 class="page-header-title">Contact Us</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?p=home">Home //</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="page-header-thumb">
                        <img src="https://uploads-ssl.webflow.com/5ef0df6b9272f7410180a013/5ef204bb10b93fdbe5e601bb_contact-2860030_1920-1024x683.jpg" alt="Image-HasTech" width="546" height="281">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->
<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us
        directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-6 mb-md-0 mb-5 mx-7 col-md-6">
            <form action="?p=contact" class=" row g-3" method="post">
                <input class="form-control col-md-6" type="text" placeholder="Name" name="name"><br>
                <input class="form-control" type="text" placeholder="Email" name="email"><br>
                <input class="form-control" type="text" placeholder="Sebject" name="subject"><br>
                <textarea name="message" class="form-control" cols="30" placeholder="Message" rows=""></textarea>
                <br>
                <input type="submit" class="btn " name="btnsave" value="Send">
            </form>


            <!-- <div class="status"></div> -->
            
        </div>
        <div class="col-md-5 text-center ">
               
                <div class="features-area">
                    <div class="row mb-n8 mt-n2">
                       
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-6">

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="assets/images/icons/pin.png" width="38" height="38" alt="Icon">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title text-white">Easy Returns</h4>
                                    <p>Dhaka, Bangladesh</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-6">

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="assets/images/icons/mobile.png" width="38" height="38" alt="Icon">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title text-white">Easy Returns</h4>
                                    <p>+ 01 234 567 89</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-6">

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="assets/images/icons/mail.png" width="38" height="38" alt="Icon">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title text-white">Easy Returns</h4>
                                    <p>cont@snow.com</p>
                                </div>
                            </div>

                        </div>
                        
                     
                    </div>
                </div>
                <h4>Find us here</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.905886237609!2d90.38469101443691!3d23.750735294681625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9ac5fce59cb%3A0xfd3e17cbaa2f7805!2sKaizen%20IT%20Ltd.!5e0!3m2!1sbn!2sbd!4v1669546572600!5m2!1sbn!2sbd" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!--Grid column-->

        <!--Grid column-->
        <!-- <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div> -->
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->