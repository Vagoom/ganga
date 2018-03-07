<div class="item-wrapper">
    <div>
        <img class="content_img" src="<?=$page->item_img->url; ?>">
    </div>
    <div class="item_div">
        <h4 class="item_name"><?=$page->title; ?></h4>
        <p><?=$page->item_text; ?></p>
        <div>
            <form method="get" action="<?=$page->url?>">
                <input class="button publication_button" type="submit" value="ЧИТАТЬ">
            </form>
        </div>
    </div>
</div>