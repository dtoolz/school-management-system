<?php $this->view('partials/header') ?>
       <div class="container-fluid">
         <form method="post">
               <div class="card mt-5 mx-auto shadow rounded" style="max-width: 300px;">
                  <div class="card-body">
                     <h3 class="card-title text-center mb-3">Signup</h3>
                        <div class="input-group mb-3">
                           <input type="firstname" name="firstname" class="form-control" placeholder="First Name">
                        </div>
                        <div class="input-group mb-3">
                           <input type="lastname" name="lastname" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="input-group mb-3">
                           <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <select name="gender" class="form-select mb-3" aria-label="Default select example">
                           <option value="" selected>Select a Gender</option>
                           <option value="male">Male</option>
                           <option value="female">Female</option>
                        </select>
                        <select name="rank" class="form-select mb-3" aria-label="Default select example">
                           <option value="" selected>Select a Rank</option>
                           <option value="student">Student</option>
                           <option value="registrar">Registrar</option>
                           <option value="lecturer">Lecturer</option>
                           <option value="admin">Admin</option>
                           <option value="super_admin">Super Admin</option>
                        </select>
                        <div class="input-group mb-3">
                           <input type="text" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="input-group mb-3">
                           <input type="text" name="password2" class="form-control" placeholder="Confirm Password">
                        </div>
                        <button class="btn btn-primary float-end">Signup</button>
                        <button type="button" class="btn btn-secondary">Cancel</button>
                  </div>
               </div>
         </form>
       </div>
<?php $this->view('partials/footer') ?>