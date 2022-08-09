<?php $this->view('partials/header') ?>
<?php $this->view('partials/nav') ?>
      <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
       <?php $this->view('partials/crumbs') ?>
          <div class="card-group justify-content-center">
              <?php foreach ($rows as $row): ?>
                <div class="card m-2 shadow-sm" style="max-width: 14rem;min-width: 14rem;">
                     <div class="card-header">User Profile</div>
                     <img src="<?=ASSETS?>/user_female.jpg" class="card-img-top">
                     <div class="card-body">
                     <h5 class="card-title"><?=$row->firstname?> <?=$row->lastname?></h5>
                     <p class="card-text">Rank: <?=str_replace("_", " ", $row->rank)?></p>
                     <a href="#" class="btn btn-primary">Details</a>
                     </div>
                </div>
              <?php endforeach; ?>
          </div>
       </div>
<?php $this->view('partials/footer') ?>