<?php $this->view('partials/header') ?>
<?php $this->view('partials/nav') ?>
      <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
      <?php $this->view('partials/crumbs',['crumbs'=>$crumbs]) ?>
            <a href="<?=ROOT?>/signup">
              <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add New</button>
            </a>
          <div class="card-group justify-content-center">
           <?php if ($rows): ?>
              <?php foreach ($rows as $row): ?>
                 <?php 
                    $image = get_image($row->image, $row->gender);
                  ?>
                <div class="card m-2 shadow-sm" style="max-width: 14rem;min-width: 14rem;">
                     <div class="card-header">User Profile</div>
                     <img src="<?=$image?>" class="card-img-top">
                     <div class="card-body">
                     <h5 class="card-title"><?=$row->firstname?> <?=$row->lastname?></h5>
                     <p class="card-text">Rank: <?=str_replace("_", " ", $row->rank)?></p>
                     <a href="<?=ROOT?>/profile/<?=$row->user_id?>" class="btn btn-primary">Details</a>
                     </div>
                </div>
               <?php endforeach; ?>
               <?php else: ?>
                     <h4>No user found</h4>
              <?php endif; ?>
          </div>
       </div>
<?php $this->view('partials/footer') ?>
