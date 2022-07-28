<?php $this->view('partials/header') ?>
       <div class="container-fluid">
           <div class="card mt-5 mx-auto shadow rounded" style="max-width: 300px;">
              <div class="card-body">
                <h3 class="card-title text-center mb-3">Login</h3>
                  <div class="input-group mb-3">
                     <input type="email" name="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="input-group mb-3">
                     <input type="password" name="password" class="form-control" placeholder="Password">
                   </div>
                  <button class="btn btn-primary">Login</button>
              </div>
           </div>
       </div>
<?php $this->view('partials/footer') ?>