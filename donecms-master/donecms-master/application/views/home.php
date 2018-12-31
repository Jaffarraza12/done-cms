<!--========== PAGE LAYOUT ==========-->
<?php $config->render(['common/news_slider']) ?>
<?php if ($page_content->show_slider) {   $config->render(['common/slideshow']); } ?>

<div class="bg-color-sky-light" style="margin-top: 20px;">
    <div class="content-md container minHeight" >

        <div class="col-md-9" style="margin-bottom:50px">
            <div class="row">
                <?php $config->render([$page])?>
            </div>
        </div>
        <div class="col-md-3 sidebar">
            <?php $config->render(['common/right'])?>
        </div>
        <div class="clearfix"></div>
       </div>
</div>

