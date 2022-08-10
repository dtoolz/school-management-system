<?php $this->view('partials/header') ?>
<?php $this->view('partials/nav') ?>
      <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
      <?php $this->view('partials/crumbs',['crumbs'=>$crumbs]) ?>
          <?php if($row): ?>
          <div class="card-group justify-content-center">
              <form method="post">
                <h3>Are you sure that you want to delete this school?</h3>
                <input disabled autofocus class="form-control" value="<?=get_var('school',$row[0]->school)?>" type="text" name="school" placeholder="name of school"><br><br>
                <input type="hidden" name="id">
                <input class="btn btn-danger float-end" type="submit" value="Delete">
                <a href="<?=ROOT?>/schools">
                  <input class="btn btn-success" type="button" value="Cancel">
                </a>
              </form>
          </div>
          <?php else: ?>
            <div style="text-align: center;">
                <h3>School was not found</h3><br>
                <a href="<?=ROOT?>/schools">
                  <input class="btn btn-secondary" type="button" value="Cancel">
                </a>
            </div>
          <?php endif; ?>
       </div>
<?php $this->view('partials/footer') ?>