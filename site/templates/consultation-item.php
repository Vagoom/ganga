

<div class="consult-wrapper">
    <div>
        <img class="content_img" src="<?=$page->consultation_img->url; ?>">
    </div>
    <div class="consult_div">
        <h4 class="consult_name"><?=$page->title; ?></h4>
        <p><?=$page->consultation_text; ?></p>
        <div>
            <h3 class="price consult-price"><?=$page->consultation_price; ?></h3>
            <input class="button consult-button" type="button" value="PIRKT">
        </div>
    </div>
</div>