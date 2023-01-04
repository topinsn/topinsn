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
            <div class="col-md-4">
                <img src="images/home.png" alt="attire" class="img-fluid text-wrap">
            </div>
            <div class="col-md-8 justify-content-evenly">
                <p style="text-align: justify;">
                    After graduating in 2013 with a Bachelor’s Degree in the English Language, I spent a year working as an Administrative Manager and personal assistant on the Ponseti International Association project to eradicate clubfoot in Nigeria. The project spanned
                    about 20 states in Nigeria, making travelling essential to my daily living. In February 2014, I proceeded to the National Youth Service Corps programme, which was created to promote national unity and expose Nigerians to the various
                    cultures that inhabit it. At the programme in Abudu, Edo State, I continued taking kids and teenagers to the hospital on Thursdays on my own accord. This experience gave me an insight into what changing others' feels, to l which I
                    cannot stop.<br><br> After completing my master’s programme in 2018, I picked up a job as a hospital administrator. The position is much of a continuation of my previous experience. As the facility manager, decisions
                    were left to me to be made, which invariably affected people’s lives – whether to approve the treatment of a person or not, as they could pass on within a specific timeline. I have always been compassionate and make sure my organisation
                    makes the needed money to keep it moving. <br><br> So, to achieve this feat, I have some money beside my bedstand, which I use in depositing and have the lives saved. When conscious, the customer and their relatives are always grateful.
                    Timeliness, speed and precision are key factors needed to sustain life; this is also relevant in web development. Without this, one would lose a client’s confidence and potential jobs. <br><br> As a web developer, I collaborate with
                    several graphic designers in Lagos to create design layouts that appeal to my client’s requirements. <br><br> I have worked on many web projects for various clients in Web Development (HTML, CSS, Python, WordPress, Drupal, Bootstrap,
                    Responsive Layouts). As a linguist, I understand the importance of clarity, and as an administrator, I learnt succinctness, which had been the compass behind my creations. <br><br> I am currently working in Nigeria and sometimes in
                    Toronto, Canada. I am always available to discuss your project over the phone or via Skype. These days I enjoy spending my free time watching TV, there are lots of shows to catch up with.<br><br>

                </p>
                <button type="button" class="btn btn-success ">
                    <a href="contact.html" style="text-decoration:none;" class="text-light">Contact Me</a>
                </button>
            </div>

        </div>

<?php 
    require_once("footer.php");
?>