<div class="training-wrapper" style="position: relative">
    <div class="training-info">
        <p><?=$page->title; ?></p>
        <h3 class="price"><?=$page->training_price; ?></h3>
    </div>
    <input class="button training_button" type="button" value="КУПИТЬ">
    <div class="lesson-block">
        <?php
            foreach ($page->children() as $lesson) {
                echo $lesson->render();
            }
        ?>
    </div>
</div>


