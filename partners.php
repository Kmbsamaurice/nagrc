
<style>
* {
    box-sizing: border-box;
}

.row1 {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
    -ms-flex: 10%; /* IE10 */
    flex: 10%;
    max-width: 10%;
    padding: 10px 30px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}
</style>



<!-- Photo Grid -->
<div class="row1"> 
  <div class="column">
    <img src="img/partners/world_bank.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="img/partners/african-development-bank.png" style="width:100%">
  </div>
  <div class="column">
    <img src="img/partners/au.png" style="width:100%">
  </div><div class="column">
    <img src="img/partners/eau.png" style="width:100%">
  </div><div class="column">
    <img src="img/partners/ifad.png" style="width:100%">
  </div><div class="column">
    <img src="img/partners/igad.jpg" style="width:100%">
  </div><div class="column">
    <img src="img/partners/logo-eu.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="img/partners/united_nations.png" style="width:100%">
  </div>  
  <div class="column">
    <img src="img/partners/fao_logo.png" style="width:100%">
  </div>
  <div class="column">
    <img src="img/partners/jica.png" style="width:100%">
  </div>
</div>


