
 <?php require_once '../challenge_honoraire/layout/header.php'; ?>
<?php require_once '../challenge_honoraire/layout/footer.php'; ?>
<?php require_once '../challenge_honoraire/function.php'; ?>
<?php require_once '../challenge_honoraire/jscript.js'; ?>



<!-- ***********************************PROGRESS BAR*************************************************** -->
<aside id="classement">
                <ul>
                    <li>
                        <h2 class="titre_bar">Salarie</h2>


                        <input class="input_bar" name="name1" style="width:80%" data-value="80" placeholder="Nom"></input>
                        <progress max="100" value="80" class="salarie1">

                            <div class="progress-bar">
                                 <span style="width: 80%">80%</span> 
                            </div>
                        </progress>


                        <input class="input_bar" name="name2" style="width:60%" data-value="60" placeholder="Nom"></input>
                        <progress max="100" value="60" class="salarie2">

                            <div class="progress-bar">
                                <span style="width: 60%">60%</span> 
                            </div>
                        </progress>


                        <input class="input_bar" name="name3"  style="width:50%" data-value="50" placeholder="Nom"></input>
                        <progress max="100" value="50" class="salarie3">

                            <div class="input_bar" class="progress-bar">
                                <span style="width: 50%">50%</span>
                            </div>
                        </progress>

                        <input class="input_bar" name="name4"  style="width:75%" data-value="75" placeholder="Nom"></input>
                        <progress max="100" value="75" class="salarie4">

                            <div class="progress-bar">
                                <span style="width: 75%">65%</span>
                            </div>
                        </progress>

                        <input class="input_bar" name="name5"  style="width:55%" data-value="55" placeholder="Nom"></input>
                        <progress max="100" value="55" class="salarie5">

                            <div class="progress-bar">
                                <span style="width: 55%">55%</span>
                            </div>
                        </progress>
                        <input class="input_bar" name="name6"  style="width:25%" data-value="25" placeholder="Nom"></input>
                        <progress max="100" value="25" class="salarie6">

                            <div class="progress-bar">
                                <span style="width: 25%">25%</span>
                            </div>
                        </progress>

                        <input class="input_bar" name="name7"  style="width:75%" data-value="75" placeholder="Nom"></input>
                        <progress max="100" value="75" class="salarie7">

                            <div class="progress-bar">
                                <span style="width: 75%">75%</span>
                            </div>
                        </progress>


                        <input class="input_bar" name="name8"  style="width:65%" data-value="65" placeholder="Nom"></input>
                        <progress max="100" value="65" class="salarie8">

                            <div class="progress-bar">
                                <span style="width: 65%">65%</span>
                            </div>
                        </progress>


                        <input class="input_bar" name="name9" style="width:75%" data-value="35" placeholder="Nom"></input>
                        <progress max="100" value="75" class="salarie9">

                            <div class="progress-bar">
                                <span style="width: 75%">75%</span>
                            </div>
                        </progress>
                        <input class="input_bar" name="name10" style="width:35%" data-value="35" placeholder="Nom"></input>
                        <progress max="100" value="35" class="salarie10">

                            <div class="progress-bar">
                                <span style="width: 35%">35%</span>
                            </div>
                        </progress>

                    </li>
                </ul> 
              </aside>
                <!-- ****************************************DIAGRAMM********************************************************* -->
           

















     <div>
       <canvas id="myChart"></canvas>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

     <script>
       const labels = [
         '',
         '',
         '',
         
       ];

       const data = {
         labels: labels,
         datasets: [{
           label: 'CHALLENGE',
           backgroundColor: 'rgb(255, 99, 132)',
           borderColor: 'rgb(255, 99, 132)',
           data: [ 10, 20, 15],
         }]
       };

       const config = {
         type: 'bar',
         data: data,
         options: {}
       };
     </script>
     <script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script> -->



   </section>

 </body>

 </html>