<?php include 'header.php';?>

<section class="p-5 ">
    <div class="container">
        <div class="row P-3">
          <div class="col-md-6">
             <h3 class="display-6 p-5 text-center" style="-webkit-text-fill-color: red;"><b>ORDER FORM</b></h3>
             <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input type="text" class="form-control" id="inputname">
                    </div>          
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>          
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Phone</label>
                        <input type="number" class="form-control" id="inputNumber" >
                    </div>
                    <div class="form-group col-md-6">
                       <label for="inputPassword4">Password</label>
                       <input type="password" class="form-control" id="inputPassword4">
                    </div>
                </div>
                <div class="form-group">
                       <label for="inputAddress">Address</label>
                       <textarea class="form-control" cols="10" rows="10" ></textarea>
                </div>        
                <div class="form-row">
                    <div class="form-group col-md-6">
                       <label for="inputUpload">Upload drawings</label>
                      <select id="inputUpload" class="form-control">
                       <option selected>Choose...</option>
                       <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                       <label for="inputrequirement">Type of requirements</label>
                       <select id="inputrequirement" class="form-control">
                         <option selected>Choose...</option>
                         <option>...</option>
                       </select>
                    </div>    
                </div> 
                <div class="form-group text-center p-2">
                   <button type="submit" class="btn btn-primary text-center" >Submit</button>
                </div>
              </form>
          </div>

          <div class="col-md-6 ">
             <h4 class="p-5 text-center" style="-webkit-text-fill-color: red;">Our Services</h4>
              <div class="text-center">
                  <a  href="floor.php" style="-webkit-text-fill-color: red;">Floor Plans</a><br>
                    <p> Starts from 1000/- INR</p>
                  <a  href="int.php" style="-webkit-text-fill-color: red;">Interior Rendering</a><br>
                    <p> Starts from 1500/- INR</p>
                  <a  href="ex.php" style="-webkit-text-fill-color: red;">Exterior Rendering</a><br>
                      <p> Starts from 2000/- INR</p>
                  <a  href="animation.php" style="-webkit-text-fill-color: red;">Architectural Animations</a><br>
                       <p> Starts from 20000/- INR</p>
              </div>
              <hr>
              <h4 class="p-4 text-center">Quick Contact</h4>
              <div class="text-center" style="-webkit-text-fill-color: red;">
                     <a href="tel:9447714584"><span class="bi bi-telephone-fill"></span> 9447714584</a>
                     <br>
                     <a href="mailto:joy@elegant3d.com" class="mail" style="-webkit-text-fill-color: red;"><span class="bi bi-envelope"></span>
                        joy@elegant3d.com</a>
              </div>
              <hr>
              <div class="text-center p-4">
                 <a href="table.php">Download Conversion Table</a>     
              </div>
          </div>
        </div>
    </div>
</section>



<?php include 'footer.php';?>