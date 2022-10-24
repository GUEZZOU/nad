alert(bon)

//on declaire une variable(theCanvas) et on appelle notre canvas by id
// on declaire une autre variable(theContex)

var theCanvas = document.getElementById("myCanvas");
var theContex = theCanvas.getContext("2d");
 theContex.lineWidth = 2;
 theCanvasWidth =  theCanvas.width;
 theCanvasHeight =  theCanvas.height;


//  theContex.fillStyle = 'blue';
//  theContex.strokeStyle = 'red';
//  theContex.font ='76px Arial';
//  theContex.fillText('HONORAIRE', 425,70);
//  theContex.strokeText('HONORAIRE',425,70);
//  theContex.textBaseline = 'bottom';
 

// **********pour le titre [HONORAIRE CHALLENGE]+image********************
 var thecanvas = document.getElementById("myCanvas"),
    theContex = thecanvas.getContext("2d"),
    image = new Image(),
    text = "HONORAIRE",
    text1 = "CHALLENGE",
    pattern;

 theContex.font = "76px Arial";
var drawPatternText = function() {
    theContex.fillStyle = pattern;
    theContex.fillText(text1, 415,70);
    theContex.strokeText(text1,415,70);
   theContex.fillText(text,415,170);
    theContex.strokeText(text, 415,170);
    
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
        var $myCanvasBar = $('<canvas width = "169px" height="500px"/>');
        var $myColorBar = $('<canvas width = "169px" height="500px"/>');
        // var $myCanvasBarWidth = $myCanvasBar.width;
        // var $myCanvasBarHeight = $myCanvasBar.height;
        // console.log($myCanvasBar.height);


        $div.append($myCanvasBar);
        $div.append($myColorBar);

        var ctx = $myCanvasBar[0].getContext('2d');
         ctx.beginPath();// Méthode pour commencer le chemin
          ctx.strokeStyle= "#fff";
         ctx.shadowBlur = 10;//pour le shadow
        ctx.shadowOffsetX = 10;//pour le shadow
        ctx.shadowColor = "rgba(0,0,0,1)";
        ctx.strokeRect(17.6,180,20,500-255);
        ctx.strokeRect(55.2,180,20,500-255);
        ctx.strokeRect(92.8,180,20,500-255);
        ctx.strokeRect(130.4,180,20,500-255);
         ctx.stroke();
        
        // ******************

         var ctx = $myColorBar[0].getContext('2d');
         ctx.fillStyle ="#0e3083";
         ctx.fillRect(17.6,180,20, (500-255));
         ctx.fillRect(55.2,180,20, (500-255));
         ctx.fillRect(92.8,180,20, (500-255));
         ctx.fillRect(130.4,180,20, (500-255));
         ctx.stroke();
        
    })
})(jQuery);

        //  ********************************