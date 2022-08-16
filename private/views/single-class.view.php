<?php $this->view('partials/header') ?>
<?php $this->view('partials/nav') ?>
<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
    <?php $this->view('partials/crumbs',['crumbs'=>$crumbs]) ?>
    <?php if($row): ?>
    <div class="row">
        <center>
            <h5><?=esc(ucwords($row->class))?></h5>
        </center>
        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>Class Name: </th>
                <td><?=esc($row->class)?></td>
            </tr>
            <tr>
                <th>Created By: </th>
                <td><?=esc($row->user->firstname)?> <?=esc($row->user->lastname)?></td>
            </tr>
            <tr>
                <th>Date Created: </th>
                <td><?=get_date($row->date)?></td>
            </tr>
        </table>
    </div>
    <br>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link <?= $page_tab=='lecturers'?'active':''; ?> " aria-current="page"
                href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=lecturers">Lecturers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $page_tab=='students'?'active':''; ?> "
                href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=students">Students</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $page_tab=='tests'?'active':''; ?> "
                href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=tests">Tests</a>
        </li>
    </ul>

    <?php switch ($page_tab) { 
      case 'lecturers' : 
        include(views_path('class-tab-lecturers'));
        break; 
      case 'students' : 
        include(views_path('class-tab-students'));
        break; 
      case 'tests' : 
        include(views_path('class-tab-tests'));
        break; 
      case 'lecturer-add' : 
        include(views_path('class-tab-lecturers-add'));
        break; 
      case 'students-add' : 
        include(views_path('class-tab-students-add'));
        break; 
      case 'tests-add' : 
        include(views_path('class-tab-tests-add'));
        break; 
      default: break; 
    } ?>

        <?php else: ?>
        <center>
            <h4>That Class was not found</h4>
        </center>
        <?php endif; ?>
</div>
<?php $this->view('partials/footer') ?>