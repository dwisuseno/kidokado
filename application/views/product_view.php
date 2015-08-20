<div class="orderbox-container">
    <div id="orderbox" class="grid"></div>
    <div id="checkout-btn" class="button">Checkout</div>
    <div id="cancel-btn" class="button">Cancel</div>
    <div style="clear:both;"></div>
</div>

<div id="showcases-prod" class="unpadded grid">
    
    <div class="showcase-container unpadded grid">
        <div class="showcase">
            <div class="container">
                <?php foreach($items as $itemid=>$item) { ?>
                <div id="item_<?=$itemid;?>" class="item">
                    <div class="wrapper">
                        <img src="<?=base_url();?>asset/img/<?=$item->thumbnail_url?>">
                        <div class="name"><?=$item->name;?></div>
                        <div class="price">Rp <?=number_format($item->cust_price, 0, ',', '.');?></div>
                        <div class="detail-btn button">Lihat Detail</div>
                        <div class="order-btn button">Pesan</div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>

<script>
    $("#checkout-btn").click(function() {
        header-redirect("checkout.html");   
    });

    $("#prd01-showcase .item").each(function() {
        $(this).append('<div class="detail-btn button">View Detail</div>');

        $(this).children('.detail-btn').click(function() {
            var detailCont = $("<div class='detail-container'></div>");
            var detail = $("<div class='item'><img src='img/full.jpg'></div>");

            detail.addClass("detail");
            detailCont.append(detail);

            detailCont.append("<div class='prev-btn'>&lt;</div>");
            detailCont.append("<div class='next-btn'>&gt;</div>");

            detail.children('.button').remove();

            detail.append('<div class="close-btn button">Close</div>');
            detail.children('.close-btn').click(function() {
                $(this).parent().parent().remove();   
            });

            $(".showcase").append(detailCont);
        });

        $(this).append('<div class="order-btn button">Order</div>');

        $(this).children(".order-btn").click(function() {
            $(".orderbox-container").show();

            var order = $("<div class='order prd01'></div>");
            var detail = $("<div class='detail'>" +
                         "<input type='number' placeholder='jumlah set' step=0.5>" + 
                         "<input type='text' placeholder='text'>" + 
                         "<div class='remove-btn'>x</div>" + 
                         "</div>");

            order.append($(this).parent().children("img").clone());
            order.append(detail);

            detail.children(".remove-btn").click(function() {
                $(this).parent().parent().remove();
            });

            $("#orderbox").append(order);

        });
    });

    $("#cancel-btn").click(function() {
        $(".orderbox-container").hide();
        $("#orderbox").html("");
    });
</script>