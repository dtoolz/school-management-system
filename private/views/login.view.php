<?php $this->view('partials/header') ?>
       <div class="container-fluid">
         <form method="post">
           <div class="card mt-5 mx-auto shadow rounded" style="max-width: 300px;">
              <div class="card-body">
                <h3 class="card-title text-center mb-3">Login</h3>
                      <?php if(count($errors)>0): ?>
                           <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
                           <strong>Erorrs</strong> 
                             <?php foreach($errors as $error): ?>
                               <br> <?=$error?>
                             <?php endforeach; ?>
                           <button type="button" class="btn btn-primary btn-sm btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>
                       <?php endif; ?>
                  <div class="input-group mb-3">
                     <input type="email" value="<?=get_var('email')?>" name="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="input-group mb-3">
                     <input type="password" value="<?=get_var('password')?>" name="password" class="form-control" placeholder="Password">
                   </div>
                  <button class="btn btn-primary">Login</button>
              </div>
             </div>
           </form>
       </div>
<?php $this->view('partials/footer') ?>