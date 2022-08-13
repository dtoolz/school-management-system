<?php $this->view('partials/header') ?>
<?php $this->view('partials/nav') ?>
       <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
       <?php $this->view('partials/crumbs',['crumbs'=>$crumbs]) ?>
         <h1>Profile</h1>
         <?php if($row): ?>
                <?php 
                    $image = get_image($row->image, $row->gender);
                  ?>
         <div class="row">
            <div class="col-sm-4 col-md-3">
                <img src="<?=$image?>" class="border border-primary d-block mx-auto rounded-circle" style="width: 100px;">
                <h3 class="text-center"><?=esc($row->firstname)?> <?=esc($row->lastname)?></h3>
              </div>
            <div class="col-sm-8 col-md-9 bg-light text-white p-2">
                <table class="table table-hover table-striped table-bordered">
                    <tr><th>First Name: </th><td><?=esc($row->firstname)?></td></tr>
                    <tr><th>Last Name: </th><td><?=esc($row->lastname)?></td></tr>
                    <tr><th>Email: </th><td><?=esc($row->email)?></td></tr>
                    <tr><th>Gender: </th><td><?=esc($row->gender)?></td></tr>
                    <tr><th>Rank: </th><td><?=ucwords(str_replace("_", " ", $row->rank))?></td></tr>
                    <tr><th>Date Created: </th><td><?=get_date($row->date)?></td></tr>
                </table>
            </div>
         </div>
         <br>
          <div class="container-fluid">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Basic Info</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Classes</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Tests</a>
                </li>
            </ul>
            <nav class="navbar bg-light">
              <form class="container-fluid">
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                  <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                </div>
              </form>
            </nav>
          </div>
          <?php else: ?>
            <center>
             <h4>That Class was not found</h4>
            </center>
          <?php endif; ?>
       </div>
<?php $this->view('partials/footer') ?>