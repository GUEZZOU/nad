  
 
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
// ******************INPUT CHARGE CLIENT *************************************

//Arc Gauge HTML/CSS/Javascript?

var domain = [1, 100];

var angleScale = d3.scale.linear().domain(domain).range([minAngle, maxAngle]);
var radiusScale = d3.scale.linear().domain(domain).range([radius - minWidth, radius - maxWidth]);
var colorScale = d3.scale.linear().domain(domain).range([minColor, maxColor]);

var svg = d3.select("body").append("svg")
    .attr("width", 2 * radius)
    .attr("height", 2 * radius);

var gauge = svg.append("g")
    .attr("transform", "translate(" + radius + "," + radius + ")")

var arc = d3.svg.arc()
    .innerRadius(radiusScale)
    .outerRadius(radius)
    .startAngle(angleScale)
    .endAngle(angleScale);

function update(n) {    
    var ticks = gauge.selectAll(".tick").data(d3.range(1, n), function(d) { return d; });

    ticks.enter()
         .append("path")
         .attr("class", "tick")
         .attr("stroke", colorScale)            
         .attr("d", arc)
         .attr("stroke-width", tickThickness)
         .attr("opacity", 0)
         .transition()
         .delay(enterDuration)
         .attr("opacity", 1);

    ticks.exit()
         .transition()
         .delay(exitDuration)
         .remove();
}
const arc = document.querySelector("svg path");
        const resselt = document.querySelector("#resselt");
        const range = document.querySelector("#range");
        range.addEventListener('change', (e) => {
           resselt.textContent = e.target.value;

            const arc_length = arc.getTotalLength();
            const step = arc_length / (range.max - range.min);
            const value = (e.target.value - range.min) * step;
            arc.style.strokeDasharray = `${value} ${arc_length - value}`;
        })

// *******************************************************************************************
// *******************************************************************************************

var add = (function () {
    var counter = 0;
    return function () {counter += 1; return counter;}
  })();
  
  function myFunction(){
    document.getElementById("demo").innerHTML = add();
  }
  




