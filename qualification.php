<div class="h-holder"><h2 class="font">Education Detail:-</h2></div>
<div class="container">
  <div id="row-container" class="my-4">
  <div class="row my-4">
   
    <div class="col-md-4">
        <div class="form-group">
    <label for="firstname">Class</label>
    <input type="email" class="form-input" id="firstname" aria-describedby="emailHelp" placeholder="Enter Class">
   
  </div>
        </div><!--col-md-4-->
    <div class="col-md-4">
        <div class="form-group">
    <label for="firstname">Board</label>
    <input type="email" class="form-input" id="firstname" aria-describedby="emailHelp" placeholder="Enter Board(like:-CBSE)">
   
  </div>
        </div><!--col-md-4-->
        </div><!--row-->
        <div class="row">
        <div class="col-md-4">
        <div class="form-group">
    <label for="firstname">Percentage</label>
    <input type="email" class="form-input" id="firstname" aria-describedby="emailHelp" placeholder="Enter percentage %">
   
  </div>
        </div><!--col-md-4-->
        <div class="col-md-4">
        <div class="form-group">
    <label for="firstname">city</label>
    <input type="email" class="form-input" id="firstname" aria-describedby="emailHelp" placeholder="Enter city(like:-jaipur)">
   
  </div>
        </div><!--col-md-4-->
        </div><!--row-->
        </div><!--row-container-->
     <div class="button text-center my-4">
     <button type="button" class="btn d-btn" id="clone-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></button>
     </div>
  
</div><!--container-->
  
<script>
  var container = document.getElementById('row-container') ;
  var cloneBtn = document.getElementById('clone-btn'); 
  // Add event listener to the clone button
  cloneBtn.addEventListener('click', function() {
    var rows = container.querySelectorAll('.row'); 
    var clone1 = rows[0].cloneNode(true); 
    var clone2 = rows[1].cloneNode(true); 

    container.appendChild(clone1); 
    container.appendChild(clone2); 
  });
</script>
