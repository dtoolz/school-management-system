<nav class="navbar bg-light">
    <form class="form-inline">
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                aria-describedby="basic-addon1">
        </div>
    </form>
    <div>
        <a href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=lecturer-add&select=true">
            <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Lecturer</button>
        </a>
        <a href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=lecturer-remove&select=true">
            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Remove Lecturer</button>
        </a>
    </div>
</nav>

<div class="card-group justify-content-center">
    <?php if(is_array($lecturers)): ?>
        <?php foreach($lecturers as $lecturer): ?>
            <?php
                $row = $lecturer->user; 
                include(views_path('user')); 
            ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
