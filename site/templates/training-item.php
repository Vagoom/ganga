<div>
    <p><?=$page->title; ?></p>
    <h3 class="price"><?=$page->training_price; ?></h3>
    <input class="" type="button" value="PIRKT">
    <?php
        foreach ($page->children() as $lesson) {
            echo $lesson->render();
        }
    ?>
</div>


