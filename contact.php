<?php 
    include_once("header.php");
?>

<body>
    <div class="container-fluid">
        <!-- logo and menu -->
        <div class="row header ">
            <div class="col-md-12 menu ">
                <div class="dropdown mt-3 text-right">
                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
                        Menu
                    </button>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="#">Home</a></li>
                        <li><a class="dropdown-item" href="#">About</a></li>
                        <!-- <li><a class="dropdown-item" href="#">Portfolio</a></li> -->

                        <li><a class="dropdown-item" href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- little writeup about me -->
        <div class="row text-center">
            <div class="col-md-12 mt-2" style="font-family:raleway, 'Open Sans', sans-serif;">
                <h1 style="font-family:'times news roman' serif ;">Temitope Olaoluwa</h1>
                <p class="mx-md-12" style="margin-left: 150px;margin-right: 150px;">
                    Freelance Web Designer & Developer based in Lagos, Nigeria. Experienced as a fullstack developer, administrator, and researcher, with a gladiatory record of delivering projects at record time, follow-up and maintenance, leading teams, and ensuring smooth
                    administrative running of enterprises while being enthusiastic about intense technology research that has a beneficial affect on our ecosystem.
                </p>
            </div>
        </div>

        <!-- About me -->
        <div class="row">
            <div class="col-md-4 ps-3">
                <img src="images/lonadek.jpg" alt="conference" class="img-fluid">
            </div>
            <div class="col-md-8 justify-content-evenly" style="background-color:rgba(245, 242, 238, 0.993) ;">
                <div>
                    <form action="mail_me.php" align="center" class="form" method="POST">
                        <input type="text" placeholder="Name" style="margin: 15px; width: 700px; height: 40px; color:#EAE3DF; font-size: large;"><br>
                        <input type="email" placeholder="E-mail" style="margin: 15px; width: 700px; height: 40px; color:#EAE3DF; font-size: large; "><br>
                        <input type="text" placeholder="Contact Number" style="margin: 15px; width: 700px; height: 40px; color:#EAE3DF; font-size: large;"><br>
                        <textarea name="Your Enquiry" id="#" cols="30" rows="10" placeholder="Your Enquiry" style="margin: 15px; width: 700px; height: 80px; color:#EAE3DF; font-size: large; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"></textarea>
                        <input type="text" placeholder="How did you hear about us" style="margin: 15px; width: 700px; height: 40px; color:#EAE3DF; "><br>
                        <button class="btn btn-success text-light" style=" width: 700px; ">Send a Message</button>

                    </form>

                </div>

            </div>

        </div>

<?php 
    include_once("footer.php");
?>