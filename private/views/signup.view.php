<?php $this->view('partials/header') ?>
       <div class="container-fluid">
         <form method="post">
               <div class="card mt-5 mx-auto shadow rounded" style="max-width: 300px;">
                  <div class="card-body">
                     <h3 class="card-title text-center mb-3">Signup</h3>
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
                           <input type="firstname" value="<?=get_var('firstname')?>" name="firstname" class="form-control" placeholder="First Name">
                        </div>
                        <div class="input-group mb-3">
                           <input type="lastname" value="<?=get_var('lastname')?>" name="lastname" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="input-group mb-3">
                           <input type="email" value="<?=get_var('email')?>" name="email" class="form-control" placeholder="Email">
                        </div>
                        <select name="gender" class="form-select mb-3" aria-label="Default select example">
                           <option <?=get_select('gender','')?> value="" selected>Select a Gender</option>
                           <option <?=get_select('gender','male')?> value="male">Male</option>
                           <option <?=get_select('gender','female')?> value="female">Female</option>
                        </select>
                        <?php if($mode == 'students'): ?>
                           <input class="form-control mb-3" type="hidden" value="student" name="rank">
                           <?php else: ?>
                           <select name="rank" class="form-select mb-3" aria-label="Default select example">
                              <option <?=get_select('rank','')?> value="" selected>Select a Rank</option>
                              <option <?=get_select('rank','student')?> value="student">Student</option>
                              <option <?=get_select('rank','registrar')?> value="registrar">Registrar</option>
                              <option <?=get_select('rank','lecturer')?> value="lecturer">Lecturer</option>
                              <option <?=get_select('rank','admin')?> value="admin">Admin</option>
                              <?php if(Auth::getRank() == 'super_admin'): ?>
                              <option <?=get_select('rank','super_admin')?> value="super_admin">Super Admin</option>
                              <?php endif; ?>
                           </select>
                        <?php endif; ?>
                        <div class="input-group mb-3">
                           <input type="text" name="password" value="<?=get_var('password')?>" class="form-control" placeholder="Password">
                        </div>
                        <div class="input-group mb-3">
                           <input type="text" name="password2" value="<?=get_var('password2')?>" class="form-control" placeholder="Confirm Password">
                        </div>
                        <button class="btn btn-primary float-end">Signup</button>
                        <?php if($mode == 'students'): ?>
                        <a href="<?=ROOT?>/students">
                           <button type="button" class="btn btn-secondary">Cancel</button>
                        </a>
                        <?php else: ?>
                        <a href="<?=ROOT?>/users">
                           <button type="button" class="btn btn-secondary">Cancel</button>
                        </a>
                        <?php endif; ?>
                  </div>
               </div>
         </form>
       </div>
<?php $this->view('partials/footer') ?>