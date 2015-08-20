<div id="showcases-prod" class="unpadded grid">
    
    <div class="showcase-container unpadded grid">
        <div class="showcase">
            <div class="container">
                <?php foreach($items as $itemid=>$item) { ?>
                <div id="item_<?=$itemid;?>" class="item">
                    <img src="<?=base_url();?>asset/img/<?=$item->thumbnail_url?>">
                    <div class="name"><?=$item->name;?></div>
                    <div class="price">Rp <?=number_format($item->cust_price, 0, ',', '.');?></div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>