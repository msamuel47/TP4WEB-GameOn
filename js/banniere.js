var compteur = 0;
var pictureNameTab= ["img/image1.jpg", "img/image2.jpg" , "img/image3.jpg" , "img/image4.jpg" , "img/image5.jpg"];
var t = setInterval(pictureCarousel , 5000);


function pictureCarousel() {
    compteur++;
    compteur = compteur % pictureNameTab.length;
    document.getElementById("carousel").src = pictureNameTab[compteur];

}



