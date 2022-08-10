<?php $this->view('partials/header') ?>
<?php $this->view('partials/nav') ?>
      <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
       <?php $this->view('partials/crumbs') ?>
          <div class="card-group justify-content-center">
              <form method="post">
                <h3>Add New School</h3>
                    <?php if(count($errors)>0): ?>
                           <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
                           <strong>Erorrs</strong> 
                             <?php foreach($errors as $error): ?>
                               <br> <?=$error?>
                             <?php endforeach; ?>
                           <button type="button" class="btn btn-primary btn-sm btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>
                    <?php endif; ?>
                <input autofocus class="form-control" value="<?=get_var('school')?>" type="text" name="school" placeholder="name of school"><br><br>
                <input class="btn btn-primary float-end" type="submit" value="Create">
                <a href="<?=ROOT?>/schools">
                  <input class="btn btn-secondary" type="button" value="Cancel">
                </a>
              </form>
          </div>
       </div>
<?php $this->view('partials/footer') ?>