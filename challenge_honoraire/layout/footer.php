<footer>
    <STyle>
/* ***********************CANVAS INPUT******************************************** */
div.progressBar canvas{
  position: absolute;
   top:0px;left: 10px;right: 10px;bottom: 10px; 
  margin-top: 70px; margin-left: 8px;  
  border: 1px solid red;
}

/* ***********************INPUT******************************** */
 div.progressBar {
  position: relative;
  margin: 0px;
}
div.progressBar input {
  position: absolute;
  top: 540px;
  left: 45px;
 border: none;
  background:none;
  outline: none;
   color: aqua;
  padding-bottom: 15px; 
}
div.progressBar1 {
  position: relative;
  margin: 0px;
}
div.progressBar1 input {
  position: absolute;
  top: 540px;
  left: 205px;
 border: none;
  background:none;
  outline: none;
   color: aqua;
  padding-bottom: 15px; 
}
</STyle>
</footer>
<script>
    
 
//on declaire une variable(theCanvas) et on appelle notre canvas by id
// on declaire une autre variable(theContex)

var theCanvas = document.getElementById("myCanvas");
var theContex = theCanvas.getContext("2d");
 theContex.lineWidth = 2;
 theCanvasWidth =  theCanvas.width;
 theCanvasHeight =  theCanvas.height;

// **********pour le titre [HONORAIRE CHALLENGE]+image********************
 var thecanvas = document.getElementById("myCanvas"),
    theContex = thecanvas.getContext("2d"),
    image = new Image(),
    text = "HONORAIRE",
    text1 = "CHALLENGE",
    pattern;

 theContex.font = "56px Arial";
var drawPatternText = function() {
    theContex.fillStyle = pattern;
    theContex.fillText(text1, 415,50);
    theContex.strokeText(text1,415,50);
   theContex.fillText(text,415,120);
    theContex.strokeText(text, 415,120);
    
};

image.src = "/canvas/media/challenge1.jpg";
image.onload = function(e) {
    pattern = theContex.createPattern(image, "repeat");
    drawPatternText();
};
// ******************progress bar*************************************
(function($){
    $('input.progressBar').wrap('<div class="progressBar" />').each(function(){
        var $progBar = $(this);
        var $div = $progBar.parent();
        var $min = $progBar.data('min');//pour les data
        var $max = $progBar.data('max'); //pour les data
        // var ration = ($progBar.val()-min/(max-min)); //pour calculer la hauteur de vide de la couleur
        var $myCanvasBar = $('<canvas width = "1230px" height="500px"/>');
        var $myColorBar = $('<canvas width = "1230px" height="500px"/>');
       
        $div.append($myCanvasBar);
        $div.append($myColorBar);

        var ctx = $myCanvasBar[0].getContext('2d');
         ctx.beginPath();// Méthode pour commencer le chemin
          ctx.strokeStyle= "#fff";
         ctx.shadowBlur = 10;//pour le shadow
        ctx.shadowOffsetX = 10;//pour le shadow
        ctx.shadowColor = "rgba(0,0,0,1)";
            ctx.strokeRect(17.6,190,20,500-255);
             ctx.strokeRect(55.2,190,20,500-255);
            ctx.strokeRect(92.8,190,20,500-255);
             ctx.strokeRect(130.4,190,20,500-255);
         ctx.stroke();
        // *********couleur bleu*********
         var ctx = $myColorBar[0].getContext('2d');
         ctx.fillStyle ="#0e3083";
         ctx.fillRect(17.6,190,20, (500-255));
         ctx.fillRect(55.2,190,20, (500-255));
         ctx.fillRect(92.8,190,20, (500-255));
         ctx.fillRect(130.4,190,20, (500-255));
         ctx.stroke();
        // ***********************************
        ctx.strokeStyle= "green";
        ctx.strokeRect(6, 450,158,(500-450));
        ctx.stroke();


// **********************************************************************************************
// ******************progress bar*************************************
(function($){
    $('input.progressBar1').wrap('<div class="progressBar1" />').each(function(){
        var $progBar = $(this);
        var $div = $progBar1.parent();
        var $min = $progBar1.data('min');//pour les data
        var $max = $progBar1.data('max'); //pour les data
        // var ration = ($progBar.val()-min/(max-min)); //pour calculer la hauteur de vide de la couleur
        $div.append($myCanvasBar);
        $div.append($myColorBar);

       var ctx = $myCanvasBar[0].getContext('2d');
         ctx.beginPath();// Méthode pour commencer le chemin
           ctx.strokeStyle= "#fff";
         ctx.shadowBlur = 10;//pour le shadow
        ctx.shadowOffsetX = 10;//pour le shadow
        ctx.shadowColor = "rgba(0,0,0,1)";
            ctx.strokeRect(17.6,190,20,500-255);
             ctx.strokeRect(55.2,190,20,500-255);
            ctx.strokeRect(92.8,190,20,500-255);
             ctx.strokeRect(130.4,190,20,500-255);
         ctx.stroke();
        // *********couleur bleu*********
         var ctx = $myColorBar1[0].getContext('2d');
         ctx.fillStyle ="red";
         ctx.fillRect(207.7,190,20, (500-255));
         ctx.fillRect(55.2,190,20, (500-255));
         ctx.fillRect(92.8,190,20, (500-255));
         ctx.fillRect(130.4,190,20, (500-255));
         ctx.stroke();
        // ***********************************
        ctx.strokeStyle= "green";
        ctx.strokeRect(170, 500,158,(500-450));
        ctx.stroke();
    })
})(jQuery);


        //  ********************************
        // function draw(){
        //         theGrarient=   ctx.createLinearGradient(330, 10, 0, 0);
            
        //         theGrarient.addColorStop(0, "red");
        //         theGrarient.addColorStop(1, "blue");
        //         ctx.strokeStyle = theGrarient; //strokeStyle pour fair les bourdure
        //         ctx.strokeRect(10, 490 ,168, 168-120);
                  
        //     }
            //   draw(theGrarient= theContex.createLinearGradient(330, 10, 0, 0),theGrarient.addColorStop(0, "yellow"),theGrarient.addColorStop(1, "blue"),theContex.strokeStyle = theGrarient,
            //     theContex.strokeRect(188, 490 ,168,168-120))
            //  draw(theGrarient= theContex.createLinearGradient(650, 10, 0, 0),theGrarient.addColorStop(0, "red"),theGrarient.addColorStop(1, "blue"), theContex.fillStyle = theGrarient,
            //     theContex.strokeRect(366, 490 ,168,168-120))
    })
})(jQuery);

// ********************input*******************************
/*(function($){
    $('input.bar').wrap('<div class="bar" />').each(function(){

        var $inpBar = $(this);
        var $div = $inpBar.parent();
        var $min = $inpBar.data('min');//pour les data
        var $max = $inpBar.data('max'); //pour les data
        var $myCanvasBar = $('<canvas width = "169px" height="500px"/>');
        var $myColorBar = $('<canvas width = "169px" height="500px"/>');

        $div.append($myCanvasBar);
        $div.append($myColorBar);

        var ctx = $myCanvasBar[0].getContext('2d');
         ctx.beginPath();// Méthode pour commencer le chemin
         function draw(){
                theGrarient= theContex.createLinearGradient(330, 10, 0, 0);
            
                theGrarient.addColorStop(0, "red");
                theGrarient.addColorStop(1, "blue");
                 theContex.strokeStyle = theGrarient; //strokeStyle pour fair les bourdure
                theContex.strokeRect(10, 490 ,168, 168-120);
                  
            }
        //       draw(theGrarient= theContex.createLinearGradient(330, 10, 0, 0),theGrarient.addColorStop(0, "yellow"),theGrarient.addColorStop(1, "blue"),theContex.strokeStyle = theGrarient,
        //         theContex.strokeRect(188, 490 ,168,168-120))
        //      draw(theGrarient= theContex.createLinearGradient(650, 10, 0, 0),theGrarient.addColorStop(0, "red"),theGrarient.addColorStop(1, "blue"), theContex.fillStyle = theGrarient,
        //         theContex.strokeRect(366, 490 ,168,168-120))

    })
})(jQuery);*/



// ***************************POUUR LE DEUSIEMME INPUT DE CHARGE******************************

// (function($){
//     $('input.progressBar1').wrap('<div class="progressBar1" />').each(function(){

//     var $progBar1 = $(this);
//     var $div = $progBar1.parent();
//     var min = $progBar1.data('min');
//     var max = $progBar1.data('max'); 
//     var ratio = ($progBar1.val()-min/(max-min));
//     var $myCanvasBar = $('<canvas width = "1230px" height="500px"/>');
//     var $myColorBar = $('<canvas width = "1230px" height="500px"/>');
      

//     $div.append($myCanvasBar);
//     $div.append($myColorBar);

//     var ctx = $myCanvasBar[0].getContext('2d');
//     ctx.beginPath();
//      ctx.strokeStyle= "#fff";
//     ctx.shadowBlur = 10;
//    ctx.shadowOffsetX = 10;
//    ctx.shadowColor = "rgba(0,0,0,1)";
//    ctx.strokeRect(188, 490,20,500-255);
//    ctx.stroke();

//    var ctx = $myColorBar[0].getContext('2d');
//    ctx.fillStyle ="#0e3083";
//    ctx.fillRect(188, 490,20, (500-255));
// }) 
// })(jQuery);



// dessiner les rectongule
// function draw(){
//     theGrarient= theContex.createLinearGradient(330, 10, 0, 0);

//     theGrarient.addColorStop(0, "red");
//     theGrarient.addColorStop(1, "blue");
//      theContex.strokeStyle = theGrarient; strokeStyle pour fair les bourdure
//     theContex.strokeRect(10, 490 ,168, 168-120);
      
// }
//   draw(theGrarient= theContex.createLinearGradient(330, 10, 0, 0),theGrarient.addColorStop(0, "yellow"),theGrarient.addColorStop(1, "blue"),theContex.strokeStyle = theGrarient,
//     theContex.strokeRect(188, 490 ,168,168-120))
//  draw(theGrarient= theContex.createLinearGradient(650, 10, 0, 0),theGrarient.addColorStop(0, "red"),theGrarient.addColorStop(1, "blue"), theContex.fillStyle = theGrarient,
//     theContex.strokeRect(366, 490 ,168,168-120))





//  theContex.fillStyle = 'red';
//  theContex.strokeStyle = '#ffff';
//  theContex.font ='25px Arial';
//  theContex.fillText('HONORAIRE', 425,60);
//  theContex.strokeText('HONORAIRE',425,60);
// theContex.textBaseline = 'bottom';



</script>

</body>

</html>
