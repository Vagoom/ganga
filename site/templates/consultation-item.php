

<div class="item-wrapper">
    <div>
        <img class="content_img" src="<?=$page->item_img->url; ?>">
    </div>
    <div class="item_div">
        <h4 class="item_name"><?=$page->title; ?></h4>
        <p><?=$page->item_text; ?></p>
        <div>
            <h3 class="price consult-price"><?=$page->consultation_price; ?></h3>
            <input class="button consult-button" type="button" value="КУПИТЬ">
        </div>
    </div>
</div>