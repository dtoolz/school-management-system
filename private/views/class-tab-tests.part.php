<nav class="navbar bg-light">
    <form class="form-inline">
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                aria-describedby="basic-addon1">
        </div>
    </form>
    <a href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=tests-add">
        <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Test</button>
    </a>
</nav>