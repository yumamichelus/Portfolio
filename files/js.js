/*
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
*/

//NAVBAR ANIMATIONS START
//When hovering over the #about section the "About" tab in the navbar will be highlighted blue
$("#about").hover(function(){
    $("#navAbout").css("background-color", "#00B4CF");
    $("#navContact").css("background", "none");
    $("#navPortfolio").css("background", "none");
    $("#navHome").css("background", "none");
});


//When hovering about #portfolio section the "Portfolio" tab in the navbar will be highlighted blue
$("#portfolio").hover(function(){
    $("#navPortfolio").css("background-color", "#00B4CF");
    $("#navAbout").css("background", "none");
    $("#navContact").css("background", "none");
    $("#navHome").css("background", "none");
});


//When hovering over the #contact section the "Contact" tab in the navbar will be highlighted blue
$("#contact").hover(function(){
    $("#navContact").css("background-color", "#00B4CF");
    $("#navPortfolio").css("background", "none");
    $("#navAbout").css("background", "none");
    $("#navHome").css("background", "none");
});


//When hovering over the #home section the "Home" tab in the navbar will be highlighted blue
$("#home").hover(function(){
    $("#navHome").css("background-color", "#00B4CF");
    $("#navContact").css("background", "none");
    $("#navPortfolio").css("background", "none");
    $("#navAbout").css("background", "none");
});


//When hovering over the #navbar no tabs will be highlighted
$("#navbar").hover(function(){
    $("#navHome").css("background", "none");
    $("#navContact").css("background", "none");
    $("#navPortfolio").css("background", "none");
    $("#navAbout").css("background", "none");
});


//When the mouse enters a nav link its color will be black and background color will be white
$(".navLinks").mouseenter(function(){
    $(this).css("color", "black");
    $(this).css("background-color", "white");
});


//When the mouse leaves a nav link all navlinks' color will be white with no background
$(".navLinks").mouseleave(function(){
    $(".navLinks").css("color", "white");
    $(".navLinks").css("background", "none");
});
//NAVBAR ANIMATIONS END


//Preload Images
$(window).load(function(){
    var bioBackground = bootstrapBackground = cplusplusBackground = cBackground = cssBackground = DribbleLogo = favicon = GitHubLogo = htmlBackground = javascriptBackground = jqueryBackground = mainBackground = LinkedInLogo = me = navbarBackground = navbarIcon = projectBackground1 = projectBackground2 = projectBackground3 = projectBackground4 = projectBackground5 = projectBackground6 = yumaLogo = modalPicture = codepenLogo = new Image();
    bioBackground.src = "css/Images/bioBackground.jpeg";
    bootstrapBackground.src = "css/Images/bootstrapBackground.jpeg";
    cplusplusBackground.src = "css/Images/cplusplusBackground.jpeg";
    cBackground.src = "css/Images/cBackground.jpeg";
    cssBackground.src = "css/Images/cssBackground.jpeg";
    DribbleLogo.src = "css/Images/DribbleLogo.png";
    favicon.src = "css/Images/favicon.png";
    GitHubLogo.src = "css/Images/GitHubLogo.png";
    htmlBackground.src = "css/Images/htmlBackground.jpeg";
    javascriptBackground.src = "css/Images/javascriptBackground.jpeg";
    jqueryBackground.src = "css/Images/jqueryBackground.jpeg";
    mainBackground.src = "css/Images/mainBackground.jpeg";
    LinkedInLogo.src = "css/Images/LinkedInLogo.png";
    me.src = "css/Images/me.JPG";
    navbarBackground.src = "css/Images/navbarBackground.png";
    navbarIcon.src = "css/Images/navbarIcon.png";
    projectBackground1.src = "css/Images/projectBackground1.jpeg";
    projectBackground2.src = "css/Images/projectBackground2.jpeg";
    projectBackground3.src = "css/Images/projectBackground3.jpeg";
    projectBackground4.src = "css/Images/projectBackground4.jpeg";
    projectBackground5.src = "css/Images/projectBackground5.jpeg";
    projectBackground6.src = "css/Images/projectBackground6.jpeg";
    yumaLogo.src = "css/Images/yumaLogo.png";
    modalPicture.src = "css/Images/modalPicture.jpeg";
    codepenLogo.src = "css/Images/codepenLogo.png";
});


//PROJECT MODAL START
//When an element with the .projectLink class is clicked the webpage fades out.
//Then, the modal containing the project description fades in and scrolls to the top
$(".projectLink").click(function(){
    $("#siteWrap").fadeOut(function(){
        $("#modal").fadeIn(function(){
            $('html, body').animate({
                scrollTop: $(this).offset().top
            }, 500);
        });
    });
});


//When #modalClose is clicked the project modal fades out and the webpage fades back in,
//the webpage is then scrolled to #portfolio
$("#modalClose").click(function(){
     $("#modal").fadeOut(function(){
        $("#siteWrap").fadeIn();
        $("#portfolio").get(0).scrollIntoView();
    });
});
//PROJECT MODAL END


//Smooth Scrolling for Internal Links
var $root = $('html, body');
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});


//CONTACT PAGE POPUPS START
//Popup is triggered if #contactName is empty when the user .focusout from #contactName
$(".contactPopUp").hide();
$("#contactName").focusout(function(){
    if($("#contactName").val() == ""){
        $(".contactPopUp").fadeIn();
    }
});


//Popup is disabled when user .focusin to #contactName
$("#contactName").focusin(function(){
    $(".contactPopUp").fadeOut();
});


//Popup is triggered if #emailBox is empty when the user .focusout from #EmailBox
$(".emailPopUp").hide();
$("#emailBox").focusout(function(){
    if($("#emailBox").val() == ""){
        $(".emailPopUp").fadeIn();
    }
});


//Popup is disabled when user .focusin to #emailBox
$("#emailBox").focusin(function(){
    $(".emailPopUp").fadeOut();
});


//Popup is triggered if #messageBox is empty when the user .focusout from #messageBox
$(".messagePopUp").hide();
$("#messageBox").focusout(function(){
    if($("#messageBox").val() == ""){
        $(".messagePopUp").fadeIn();
    }
});


//Popup is disabled when user .focusin to #messageBox
$("#messageBox").focusin(function(){
    $(".messagePopUp").fadeOut();
});


//Checking if Input Forms are Filled Before Submitting
$("#contactSubmit").click(function(event){
    if($("#messageBox").val() == ""){
        event.preventDefault();
        $(".messagePopUp").fadeIn();
    }
    if($("#emailBox").val() == ""){
        event.preventDefault();
        $(".emailPopUp").fadeIn();
    }
    if($("#contactName").val() == ""){
        event.preventDefault();
        $(".contactPopUp").fadeIn();
    }
});
//CONTACT PAGE POPUPS END


//CONTACT CONFIRMATION START
//#contactConfrimation fades in when the contact form is submitted
if(window.location.href == "http://lamp.cse.fau.edu/~ymichelus2017/index.php#contactConfirmation"){
    $("#contactConfirmation").fadeIn();
    $("#contact").get(0).scrollIntoView();
}


//#contactConfirmation fades in when the #confirmationClose button is clicked
$("#confirmationClose").click(function(){
    $("#contactConfirmation").fadeOut();
});
//CONTACT CONFIRMATION END
