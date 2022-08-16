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
        <?php if(isset($_GET['select'])): ?>
            <button name="selected" value="<?=$row->user_id?>"  class="float-end btn btn-primary">Select</button>
        <?php endif; ?>
    </div>
</div>