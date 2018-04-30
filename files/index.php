<!--
    This website was originally developed to be the personal portfolio for Yuma Michelus
    Copyright (C) 2018  Yuma Michelus
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published
    by the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

     This program is distributed in the hope that it will be useful,
     but WITHOUT ANY WARRANTY; without even the implied warranty of
     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     GNU Affero General Public License for more details.

     You should have received a copy of the GNU Affero General Public License
     along with this program.  If not, see <http://www.gnu.org/licenses/>.
   -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Custom Style Sheet -->
        <link rel="stylesheet" href="css/css.css">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
        <!-- Favicon Link -->
        <link rel="icon" type="image/png" href="css/Images/favicon.png">
        <!-- Page Title -->
        <title>Yuma Michelus | Front-End Developer</title>
    </head>
    <body>
        <!-- SAMPLE PROJECT MODAL -->
        <div class="projectModalWrap container-fluid text-center" id="modal">
            <div class="row">
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-10 col-md-10 projectModal">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <!-- Picture of Project -->
                            <div class="modalPicture"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-right">
                                <button class="closeSymbol" id="modalClose">x</button>
                            </div>
                            <span class="modalTitle">Sample Project</span>
                            <!-- Discription of Project -->
                            <p class="modalDescription">Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text </p>
                            <!-- Link to Project Site -->
                            <a class="modalLink">View Site</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1"></div>
            </div>
        </div>
        <!-- END SAMPLE PROJECT MODAL -->
        <div id="siteWrap">
            <!-- NAVBAR -->
            <div class="navbar homeHeader navbar-fixed-top" id="navbar">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="col-sm-5 col-xs-6 navbar-brand yumaLogo">
                            <a  href="#home">
                            <img src="css/Images/yumaLogo.png" height="50" width="50" alt="">
                            </a>
                        </div>
                        <div class="col-sm-7 col-xs-6 navbarBtn">
                            <!-- Collapsable Navbar Btn -->
                            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                            <img src="css/Images/navbarIcon.png" height="30" width="30" alt="">
                            </button>
                        </div>
                        <div class="collapse navbar-collapse navHeaderCollapse">
                            <!-- Nav Links -->
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="navLinks" href="#home" id="navHome">Home</a></li>
                                <li><a class="navLinks" href="#about" id="navAbout">About</a></li>
                                <li><a class="navLinks" href="#portfolio" id="navPortfolio">Portfolio</a>
                                <li><a class="navLinks" href="#contact" id="navContact">Contact Me</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="headerLine"></div>
            </div>
            <!-- NAVBAR END -->
            <!-- HOME PAGE -->
            <!-- Background Image Div -->
            <div class="container-fluid homePageWrap" id="home">
                <div class="container mainPage text-center">
                    <div class="row">
                        <div class="col-lg-2 col-md-2"></div>
                        <!-- Tinted Box w/ Text -->
                        <div class="shadowBox col-lg-8 col-md-8">
                            Home of <span class="mainName">Yuma Michelus</span>
                            <br>
                            A Front-End Web Developer
                            <br>
                            <a class="btn workBtn" href="#about">Check Out My Work</a>
                        </div>
                        <div class="col-lg-2 col-md-2"></div>
                    </div>
                </div>
            </div>
            <!-- Line Under Homepage Background Img -->
            <div class="bottomLine"></div>
            <!-- END OF HOMEPAGE -->
            <!-- ABOUT PAGE -->
            <div class="container-fluid aboutPageWrap text-center" id="about">
                <!--About Page Title -->
                <h1 class="aboutTitle col-xs-12">_About Me_</h1>
                <div class="container">
                    <div class="row">
                        <div class="bio col-lg-6 col-md-6">
                            <!-- My Picture -->
                            <img src="css/Images/me.JPG" alt="" class="aboutPic">
                            <!-- Short Bio -->
                            <div class="bioTitle">I'm Yuma</div>
                            I'm a Front-End developer whose love for coding and problem solving is almost equally matched by my love of pizza.
                            <span class="bioHighlight">I have a deep passion for turning complicated designs into beautiful, responsive websites.</span>
                            When I'm not coding I enjoy sleeping, eating, and playing fortnite.
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-1"></div>
                                <a class="col-lg-4 col-md-4 col-sm-6 col-xs-10 resumeLink" href="resume.pdf">
                                    <div class="resumeBtn">Résumé</div>
                                </a>
                                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-1"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- Skills List -->
                            <h2 class="listTitle">Skills</h2>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-1"></div>
                                <div class="col-lg-8 col-md-8 col-sm-10 skillsPanel html">
                                    <div class="skillsPanelTint">HTML5</div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-1"></div>
                                <div class="col-lg-8 col-md-8 col-sm-10 skillsPanel css">
                                    <div class="skillsPanelTint">CSS</div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-1"></div>
                                <div class="col-lg-8 col-md-8 col-sm-10 skillsPanel bootstrap">
                                    <div class="skillsPanelTint">Bootstrap</div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-1"></div>
                                <div class="col-lg-8 col-md-8 col-sm-10 skillsPanel javascript">
                                    <div class="skillsPanelTint">JavaScript</div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-1"></div>
                                <div class="col-lg-8 col-md-8 col-sm-10 skillsPanel jquery">
                                    <div class="skillsPanelTint">jQuery</div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-1"></div>
                                <div class="col-lg-8 col-md-8 col-sm-10 skillsPanel c">
                                    <div class="skillsPanelTint">C</div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-1"></div>
                                <div class="col-lg-8 col-md-8 col-sm-10 skillsPanel cplusplus">
                                    <div class="skillsPanelTint">C++</div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF ABOUT PAGE -->
            <!-- PORTFOLIO PAGE -->
            <div class="portfolioPageWrap  text-center" id="portfolio">
                <!-- Portfolio Page Title -->
                <h1 class="projectTitle">_Projects_</h1>
                <!-- Project Containers -->
                <div class="container">
                    <div class="row">
                        <!-- Project Panel 1-->
                        <div class="col-lg-4 col-md-4 projectPanel">
                            <div class="col-lg-12 panelContents project1">
                                <!-- Link To Project -->
                                <a class="projectLink" href="#portfolio">
                                    <div class="projectPanelWrap">
                                        <!-- Project Name -->
                                        <div class="panelName">
                                            Sample Project 1
                                        </div>
                                        <div class="panelLine panelText"></div>
                                        <br>
                                        <!-- Project Description -->
                                        <div class="panelText">
                                            Short Description about the project goes here.
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Project Panel 2-->
                        <div class="col-lg-4 col-md-4 projectPanel">
                            <div class="col-lg-12 panelContents project2">
                                <!-- Link To Project -->
                                <a class="projectLink" href="#portfolio">
                                    <div class="projectPanelWrap">
                                        <!-- Project Name -->
                                        <div class="panelName">
                                            Sample Project 2
                                        </div>
                                        <div class="panelLine panelText"></div>
                                        <br>
                                        <!-- Project Description -->
                                        <div class="panelText">
                                            Short Description about the project goes here.
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Project Panel 3-->
                        <div class="col-lg-4 col-md-4 projectPanel">
                            <div class="col-lg-12 panelContents project3">
                                <!-- Link To Project -->
                                <a class="projectLink" href="#portfolio">
                                    <div class="projectPanelWrap">
                                        <!-- Project Name -->
                                        <div class="panelName">
                                            Sample Project 3
                                        </div>
                                        <div class="panelLine panelText"></div>
                                        <br>
                                        <!-- Project Description -->
                                        <div class="panelText">
                                            Short Description about the project goes here.
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Project Panel 4-->
                        <div class="col-lg-4 col-md-4 projectPanel">
                            <div class="col-lg-12 panelContents project4">
                                <!-- Project Link -->
                                <a class="projectLink" href="#portfolio">
                                    <div class="projectPanelWrap">
                                        <!-- Project Name -->
                                        <div class="panelName">
                                            Sample Project 4
                                        </div>
                                        <div class="panelLine panelText"></div>
                                        <br>
                                        <!-- Project Description -->
                                        <div class="panelText">
                                            Short Description about the project is here.
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Project Panel 5-->
                        <div class="col-lg-4 col-md-4 projectPanel">
                            <div class="col-lg-12 panelContents project5">
                                <!-- Project Link -->
                                <a class="projectLink" href="#portfolio">
                                    <div class="projectPanelWrap">
                                        <!-- Project Name -->
                                        <div class="panelName">
                                            Sample Project 5
                                        </div>
                                        <div class="panelLine panelText"></div>
                                        <br>
                                        <!-- Project Description -->
                                        <div class="panelText">
                                            Short Description about the project goes here.
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Project Panel 6-->
                        <div class="col-lg-4 col-md-4 projectPanel">
                            <div class="col-lg-12 panelContents project6">
                                <!-- Project Link -->
                                <a class="projectLink" href="#portfolio">
                                    <div class="projectPanelWrap">
                                        <!-- Project Name -->
                                        <div class="panelName">
                                            Sample Project 6
                                        </div>
                                        <div class="panelLine panelText"></div>
                                        <br>
                                        <!-- Project Description -->
                                        <div class="panelText">
                                            Short Description about the project goes here.
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PORTFOLIO PAGE -->
            <!-- CONTACT ME PAGE -->
            <div class="contactWrap text-center container-fluid" id="contact">
                <div class="contactText">
                    <!-- Contact Page Title -->
                    <h1 class="contactTitle">_Contact Me_</h1>
                    <h3>Have Questions or Projects?</h3>
                    Take a few minutes to tell me about them.
                </div>
                <!-- CONFIRMATION MODAL -->
                <!-- Tints Stuff Behind Confirmation Modal -->
                <div class="confirmationTint navbar-fixed-top" id ="contactConfirmation">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-1"></div>
                        <div class="text-center col-lg-4 col-md-6 col-sm-10">
                            <!-- Confirmation Modal Body -->
                            <div class="contactConfirmation">
                                <div class="text-right">
                                    <button class="confirmationClose" id="confirmationClose">x</button>
                                </div>
                                <div class="confirmationTitle">SUCCESS</div>
                                <br>
                                Thank You!
                                <br>
                                Expect to hear back from me within 24 hours.
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-1"></div>
                    </div>
                </div>
                <!-- END CONFIRMATION MODAL -->
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-1"></div>
                    <div class="col-lg-4 col-md-6 col-sm-10 text-left">
                        <!-- Input Forms -->
                        <form class="contactForm" action="contactform.php" method="post">
                            <!-- User Name Input Field -->
                            <span class="contactPopUp popUp text-center">Full Name is Required</span>
                            <input class="inputForm" type="text" name="name" placeholder="Enter Full Name" value="" id="contactName">
                            <!-- User E-Mail Input Field -->
                            <span class="emailPopUp popUp text-center">E-mail is Required</span>
                            <input class="inputForm" type="text" name="mail" placeholder="Enter E-mail Address" id="emailBox">
                            <!-- User Message Input Field -->
                            <span class="messagePopUp popUp text-center">A Message is Required</span>
                            <textarea class="inputForm messageForm" name="message" placeholder="Enter Your Message" id="messageBox"></textarea>
                            <!-- Submit Btn -->
                            <button  class="contactButton" type="submit" name="submit" id="contactSubmit">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-1"></div>
                </div>
            </div>
            <!-- END CONTACT ME PAGE -->
            <!-- FOOTER -->
            <div class="homeFooter container-fluid">
                <div class="row">
                    <!-- Footer Name -->
                    <div class="col-lg-9 col-md-10 col-sm-10 col-xs-7 footerName text-right" >© 2018 Yuma Michelus</div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5">
                        <!-- CodePen Link -->
                        <a class="footerLink" href="https://codepen.io/YumaMichelus/" target="_blank">
                        <img  src="css/Images/codepenLogo.png" height="24" width="24" alt="CodePen">
                        </a>
                        <!-- LinkedIn Link -->
                        <a class="footerLink" href="https://www.linkedin.com/in/yuma-michelus-b61150162/" target="_blank">
                        <img src="css/Images/LinkedInLogo.png" height="25" width="25" alt="LinkedIn">
                        </a>
                        <!-- Dribble Link -->
                        <a class="footerLink" href="https://dribbble.com/YumaMichelus" target="_blank">
                        <img src="css/Images/DribbleLogo.png" height="24" width="24" alt="Dribbble">
                        </a>
                        <!-- GitHub Link -->
                        <a class="footerLink" href="https://github.com/yumamichelus" target="_blank">
                        <img  src="css/Images/GitHubLogo.png" height="24" width="24" alt="GitHub">
                        </a>

                    </div>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- Custom JavaScript File -->
        <script src="js.js"></script>
    </body>
</html>
