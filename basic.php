<h2 class="font">Personal Details:-</h2>
<div class="container">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
        <div class="form-group">
    <label for="firstname">FirstName:</label>
    <input type="email" class="form-input" id="firstname" aria-describedby="emailHelp" placeholder="Enter FirstName"required onchange=checkfirstname()>
    <div id="fname"></div>
   
  </div>
        </div><!--col-md-4-->

        <div class="col-md-4">
        <div class="form-group">
    <label for="firstname">LastName:</label>
    <input type="email" class="form-input" id="firstname" aria-describedby="emailHelp" placeholder="Enter LastName" >
    
  </div>



        </div><!--col-md-4-->
        <div class="col-md-4"> <!--This col for alerts -->
        <!--This alert is for success -->
        <?php
        $success =true;
        if($success){
          echo "<div class='info'>
          <div class='alert alert-success alert-dismissible fade show' role='alert'>
  <div class='text-center'><strong class=>Success</strong></div> <p>we got Your data, Thanks for give us your time </p>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>
          </div>";
        }
          ?>
        </div><!--col-md-4-->


      </div><!--row-->
      <div class="row my-4">
        <div class="col-md-4">
        <div class="form-group">
    <label for="firstname">Email</label>
    <input type="email" class="form-input" id="firstname" aria-describedby="emailHelp" placeholder="Enter Email">
   
  </div>
        </div><!--col-md-4-->

        <div class="col-md-4">
        <div class="form-group">
    <label for="firstname">Phone</label>
    <input type="email" class="form-input" id="firstname" aria-describedby="emailHelp" placeholder="Enter Your Number">
   
  </div>
        </div><!--col-md-4-->
      </div><!--row-->
      <div class="row my-4">
        <div class="col-md-4">
        <div class="form-group">
        <div class="mb-3">
  <label for="formFile" class="form-label">Upload Image</label>
  <input class="form-control" type="file" id="formFile">
</div>
   
  </div>
        </div><!--col-md-4-->
        <div class="col-md-4">
        <div class="form-group">
    <label for="firstname">Designation</label>
    <input type="email" class="form-input" id="firstname" aria-describedby="emailHelp" placeholder="Designation">
   
  </div>
        </div>
      </div><!--row-->
    </div>
</div>

<script>
 function checkfirstname() {
        let name = document.getElementById("firstname");
        let name_value = name.value;
        let regex = /^[a-zA-Z\s]+$/;
        if (!regex.test(name_value)) {
            // alert("Invalid name! Only letters and spaces are allowed.");
            let fname = document.getElementById('fname').innerHTML =
                "<p style='color:red'>Name only allow to enter letter or spaces</p>";
            name.value = "";
            
        }
      
       if(regex==true){
        let fname = document.getElementById('fname').innerHTML ="";
                
       }
    }
</script>