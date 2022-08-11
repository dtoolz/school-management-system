<?php $this->view('partials/header') ?>
<?php $this->view('partials/nav') ?>
       <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
       <?php $this->view('partials/crumbs',['crumbs'=>$crumbs]) ?>
         <h1>Profile</h1>
         <div class="row">
            <div class="col-sm-4 col-md-3">
                <img src="<?=ASSETS?>/user_female.jpg" class="border border-primary d-block mx-auto rounded-circle" style="width: 100px;">
                <h3 class="text-center">Olivia John</h3>
              </div>
            <div class="col-sm-8 col-md-9 bg-light text-white p-2">
                <table class="table table-hover table-striped table-bordered">
                    <tr><th>First Name: </th><td>Olivia</td></tr>
                    <tr><th>Last Name: </th><td>John</td></tr>
                    <tr><th>Gender: </th><td>Female</td></tr>
                    <tr><th>Date Created: </th><td>2022-09-02</td></tr>
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
       </div>
<?php $this->view('partials/footer') ?>