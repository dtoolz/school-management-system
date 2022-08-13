<?php $this->view('partials/header') ?>
<?php $this->view('partials/nav') ?>
      <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
       <?php $this->view('partials/crumbs',['crumbs'=>$crumbs]) ?>
          <div class="card-group justify-content-center">
              <table class="table table-striped table-hover">
                 <tr>
                    <th></th>
                    <th>School</th>
                    <th>Created by</th>
                    <th>Date</th>
                    <th>
                        <a href="<?=ROOT?>/schools/add">
                          <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add New</button>
                        </a>
                    </th>
                 </tr>

              <?php if ($rows): ?>
                  <?php foreach ($rows as $row): ?>
                         <tr>
                            <td><button class="btn btn-sm btn-primary"><i class="fa fa-chevron-right"></i></button></td>
                            <td><?=$row->school?></td>
                            <td><?=$row->user->firstname?> <?=$row->user->lastname?></td>
                            <td><?=get_date($row->date)?></td>
                            <td>
                                <a href="<?=ROOT?>/schools/edit/<?=$row->id?>">
                                  <button class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i> Edit</button>
                                </a>
                                <a href="<?=ROOT?>/schools/delete/<?=$row->id?>">
                                  <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                </a>
                                
                                <a href="<?=ROOT?>/switch_school/<?=$row->id?>">
                                  <button class="btn btn-success btn-sm"><i class="fa fa-chevron-right"></i> Switch Sch</button>
                                </a>
                            </td>
                         </tr>
                  <?php endforeach; ?>
              <?php else: ?>
                <h4>No school found</h4>
              <?php endif; ?>
            </table>
          </div>
       </div>
<?php $this->view('partials/footer') ?>