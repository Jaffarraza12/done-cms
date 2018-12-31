<div class="col-sm-12">
    <div class="row" id="content-boxes" style="word-wrap: break-word;">
        <div class="col-md-12">

            <?php if ($page_content->show_slider) {
                $config->render(['common/slideshow']);
            } ?>

            <?php if ($page_content->image && $page_content->show_image) {
                echo '<img src="' . base_url() . '/uploads/pages/' . $page_content->image . '" alt="' . $page_content->tag . '">';
            } ?>

            <div class="col-md-12" style="padding-bottom: 15px; padding-top: 15px;">
            
                <?php if (strtolower($type) == "news" || strtolower($type) == "activities" || strtolower($type) == "books") { ?>
                <h2><?php echo $page_content->title ?></h2>
                <?php } ?>

                <?php echo $page_content->long_desc ?>

                <?php if ($page_content->pdf) { ?>
                    <div id="dwn-btn-here" class="col-md-12" style="padding-bottom: 15px;">
                        <a href="<?php echo base_url() ?>uploads/pages/pdf/<?php echo $page_content->pdf ?>" target="_blank" class="btn"><i class="fas fa-external-link-alt"></i> Open</a>
                        <a href="<?php echo base_url() ?>uploads/pages/pdf/<?php echo $page_content->pdf ?>" download='href="<?php echo base_url() ?>uploads/pages/pdf/<?php echo $page_content->pdf ?>"' class="btn"><i class="fa fa-download"></i> Download</a>
                    </div>
                <?php }?>
                <div class="col-md-8">
                    <div class="well well-sm">
                        <form>
                            <div class="row">
                                <div class="col-md-6" style="float: right">
                                    <div class="form-group">
                                        <label for="name">
                                            اسم</label>
                                        <input type="text" class="form-control" id="name" placeholder="اسم" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            البريد الإلكتروني</label>
                                        <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                            <input type="email" class="form-control" id="email" placeholder="البريد الإلكتروني
" required="required" /></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">
                                            موضوع</label>
                                        <select id="subject" name="subject" class="form-control" required="required" style="text-align: right;direction: rtl">
                                            <option value="na" selected="">اختر واحد
                                            </option>
                                            <option value="service">خدمة العملاء العامة
                                            </option>
                                            <option value="suggestions">اقتراح</option>
                                            <option value="product">الدعم
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6" style="float: right">
                                    <div class="form-group">
                                        <label for="name">
                                            رسالة</label>
                                        <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                                  placeholder="رسالة"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12" style="background: transparent">
                                    <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                        ارسل رسالة
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <p style="text-align:right">

                                             جمعية أم المؤمنين</p>

                    <p style="text-align:right"> <i class="fas fa-home"></i>             ص.ب: 170 عجمان</p>

                    <p style="text-align:right">     <i class="fas fa-location-arrow"></i>    دولة الإمارات العربية المتحدة</p>

                    <p style="text-align:right">0097167447777
                        <i class="fas fa-phone"></i>                      - تحويلة: 20 </p>

                    <p style="text-align:right">0097167427127
                        <i class="fas fa-phone"></i></p>

                    <p style="text-align:right">rshaward@emirates.net.ae  <i class="far fa-envelope"></i></p>
                </div>
                 <div class="clearfix"></div>
                <div class="col-md-12">
                    <div style="width: 100%"><iframe frameborder="0" height="500" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3709.7475537158157!2d55.438491789342756!3d25.400181926874193!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbd0fd63a2d7c8cca!2z2KzZhdi52YrYqSDYo9mFINin2YTZhdik2YXZhtmK2YY!5e0!3m2!1sar!2sae!4v1502198601479" style="border:0" width="100%"></iframe></div>
                </div>



            </div>



        </div>
    </div>
</div>

<style>

#content-boxes {}
#content-boxes div.col-md-12 img {
    width:100%;
}
#content-boxes div.col-md-12 div.col-md-12 {
    background-color: #FFFFFF;
}
#content-boxes div.col-md-12 h2 {
    margin: 30px 0 20px 0;
}
</style>