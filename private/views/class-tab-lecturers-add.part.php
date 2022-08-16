<form method="post" class="form mx-auto" style="width: 100%;max-width: 400px;"><br>
    <h4>Add Lecturer</h4>
    <input value="<?=get_var('name')?>" autofocus class="form-control" type="text" name="name" placeholder="name of lecturer">
    <br>
    <a href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=lecturers">
         <button type="button" class="btn btn-sm btn-secondary">Cancel</button>
    </a>
    <button class="btn btn-sm btn-primary float-end" name="search">Search</button>
    <div class="clearfix"></div>
</form>

<div class="container-fluid">
    <?php if (isset($results) && $results): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
            <?php foreach ($results as $row): ?>
                <tr>
                   <td><?=$row->firstname?> <?=$row->lastname?></td>
                   <td><button class="btn btn-sm btn-primary">Add</button></td>
                </tr>
            <?php endforeach;?>
        </table>
        <?php else: ?>
            <?php if(count($_POST) >0): ?>
               <center>
                 <hr>
                 <h4>No user found</h4>
               </center>
            <?php endif; ?>
    <?php endif;?>
</div>