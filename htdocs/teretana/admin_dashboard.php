<?php
 
 require_once 'config.php';

 //echo "USAO SI NA PLATFORMU";

 //var_dump($_SESSION);

 if(isset($_SESSION['admin_id'])) {
    //die("Korisnik nije ulogovan");
    header('location: index.php');
    exit();  
 }  

 // echo "mozes dalje";
 //else {
 //echo "korisnik nije ulogovan";
 //}

 ?>

<!DOCTYPE html>
<html>
<head>
   <title>Admin Dashboard</title>
 </head>
 <body>

 <div class="alert alert-success alert-dismissible fade show" role="alert">
   NEKI TEKST OVDE
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>

   <div class="container">
      <div class="row mb-5">
         <div class="col-md-5">
            <h2>Register Member</h2>
            <form action="register_member.php" method="post" enctype="multipart/form-data">
                      First Name: <input class="form-control" type="text" name="first_name"><br>
                      Last Name: <input class="form-control" type="text" name="last_name"><br>
                      Email: <input class="form-control" type="email" name="email"><br>
                      Phone Number: <input class="form-control" type="text" name="phone_number"><br>
                      Training Plan:
                      <select class = "form-control" name="training_plan_id">
                           <option value="" disabled selected>Training Plan</option>
                           <option value="">12 sessions plan></option>
                           <option value="">30 sessions plan</option>
                      </select><br>
                      <input type="hidden" name="photo_path" id="photoPathInput">
                      <div id="dropzone-upload" class="dropzone"></div>

                      <input class="btn btn-primary mt3" type="submit" value="Register Member">
               </form>
            </div>
         </div>
    </div>

    <tr>
      <td><?php echo $result['first_name']; ?></td>
      <td><?php echo $result['last_name']; ?></td>
      <td><?php echo $result['email']; ?></td>
      <td><?php echo $result['phone_number']; ?></td>
      <td><?php echo $result['trainer_id']; ?></td>
      <td><img style="" src="<?php echo $result['photo_path']; ?>"></td>
      <td><?php echo $result['training_plan_id']; ?></td>
      <td><?php echo $result['access_card_pdf_path']; ?></td>
      <td><?php echo $result['created_at']; ?></td>
      <td><button>DELETE</button></td>
 </tr>


<script>
   Dropzone.options.dropzoneUpload = {
      url: "upload_photo.php",
      paranName: "photo",
      maxFilesize: 20, // MD
      acceptedFiles: "image/*",
      init: function () {
         this.on("success", function (file, response) {
            const jsonResponse = JSON.parse(response);

            if (jsonResponse.success) {
               document.getElementById('photoPathInput').value = jsonResponse.photo_path;
            } else {
               console.error(jsonResponse.error);
            }
         });
      }
   }

</body>
</html>