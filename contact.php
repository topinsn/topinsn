<?php 
    include_once("header.php");
?>



        <!-- little writeup about me -->
        <?php include_once "intro.php"; ?>

        <!-- About me -->
        <div class="row">
            <div class="col-md-4 ps-3">
                <img src="images/lonadek.jpg" alt="conference" class="img-fluid">
            </div>
            <div class="col-md-8 justify-content-evenly" style="background-color:rgba(245, 242, 238, 0.993) ;">
                <div>
                    <form action="mail_me.php"  class="form" method="POST">
                        <input type="text" placeholder="Name" style=" color:#EAE3DF; font-size: large;" class="form-control mt-3" required>
                        <input type="email" placeholder="E-mail" style=" color:#EAE3DF; font-size: large; " class="form-control mt-2" required>
                        <input type="text" placeholder="Contact Number" style="color:#EAE3DF; font-size: large;" class="form-control mt-2">
                        <textarea name="Your Enquiry" id="#" rows="10" placeholder="Your Enquiry" style=" color:#EAE3DF; font-size: large; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" class="form-control mt-2" required></textarea>
                        <input type="text" placeholder="How did you hear about us" style=" color:#EAE3DF;" class="form-control mt-2" required>
                        <div class="d-flex justify-content-end mt-2 mb-1">
                            <button class="btn btn-success text-light ">Send a Message</button>
                        </div>
                        

                    </form>

                </div>

            </div>

        </div>

<?php 
    include_once("footer.php");
?>