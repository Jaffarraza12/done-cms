<div class="row-fluid">
    <div class="span12">
        <h3>EDIT WORK INFO</h3>

        <?php $this->load->view("Admin/common/breadcrumb.php"); ?>

        <!-- BEGIN FORM-->
        <form action="EditWork" method="POST" class="form-horizontal"  enctype="multipart/form-data">

            <?php echo form_hidden('mdid', $wid); ?>

            <div class="portlet box yellow">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-reorder"></i>
                        General Options
                    </div>
                </div>
                <div class="portlet-body">


                    <div class="fluid-row">

                        <div class="span6">
                            <div class="control-group required" data-type="String">
                                <label class="control-label">Display on Homepage</label>
                                <div class="controls">
                                    <label class="checkbox">
                                        <?php
                                        if ($view[$defaultCode][0]->show_on_homepage == 0)
                                            echo '<input type="checkbox" name="chkHomepage" value="yes"  />';
                                        else
                                            echo '<input type="checkbox" name="chkHomepage" value="yes" checked="checked"  />';
                                        ?>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="span6">
                            <div class="control-group">
                                <label class="control-label">Category</label>
                                <div class="controls">
                                    <select name="category">
                                        <?php
                                        $arr = array("Web Application", "Web Design", "Photography", "Branding");
                                        foreach ($arr as $rec)
                                        {
                                            if ($rec == $view[$defaultCode][0]->category)
                                                echo "<option value='" . $rec . "' selected='selected'>" . $rec . "</option>";
                                            else
                                                echo "<option value='" . $rec . "'>" . $rec . "</option>";
                                        }
                                        ?>
                                    </select>
                                    <span class="help-inline">Some hint here</span>
                                </div>
                            </div>
                        </div>
                        <div class="clear">&nbsp;</div>
                    </div>

                    <div class="fluid-row">

                        <div class="span6">
                            <div class="control-group" data-type="String">
                                <label class="control-label">Media Url</label>
                                <div class="controls">
                                    <input value="<?php echo $view[$defaultCode][0]->url; ?>" name="txtUrl" type="text" placeholder="Please enter url" class="m-wrap span10 popovers" data-original-title="Work URL" data-content="Please enter work url" data-trigger="hover"  />
                                    <span class="help-inline">Some hint here</span>
                                </div>
                            </div>
                        </div>


                        <div class="span6">
                            <div class="control-group">
                                <label class="control-label">Seo-Friendly-Url</label>
                                <div class="controls">
                                    <input type="text" value="<?php echo $view[$defaultCode][0]->seo_url; ?>" name="seo_url" placeholder="Please enter seo url without spaces" class="span10 m-wrap popovers" data-original-title="Page SEO URL" data-content="Enter Page SEO URL of this page without space" data-trigger="hover" />
                                    <span class="help-inline">Some hint here</span>
                                </div>
                            </div>
                        </div>

                        <div class="clear">&nbsp;</div>

                    </div>

                </div>
            </div>

            <div class="row-fluid">

                <div class="span12">

                    <div class="tabbable tabbable-custom">
                        <?php $this->load->view("Admin/common/language_bar.php"); ?>
                        <div class="tab-content">
                            <?php
                                foreach($Languages as $row)
                                {
                                $langId = $row->id;
                                $langCode = $row->code;

                                echo form_hidden('wd_id_' . $langCode, $view[$langCode][0]->wdid);

                                if ($row->id==$defaultLang)
                                    echo '<div id="tab_' . $langCode . '" class="tab-pane active">';
                                else
                                    echo '<div id="tab_' . $langCode . '" class="tab-pane">';
                            ?>

                            <div class="portlet box <?php echo $row->color; ?>">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-reorder"></i>
                                        <?php echo $row->name; ?> Content
                                    </div>
                                </div>
                                <div class="portlet-body">

                                    <?php
                                        //Apply validation class only on fields which are in default language.
                                        if ($row->id==$defaultLang)
                                        {
                                            echo '<div class="control-group required" data-type="String">';
                                        }
                                        else
                                        {
                                            echo '<div class="control-group" data-type="String">';
                                        }
                                    ?>
                                        <label class="control-label">Title</label>
                                        <div class="controls">
                                            <input value="<?php echo $view[$langCode][0]->title; ?>" name="title_<?php echo $langCode; ?>" type="text" placeholder="Please enter title" class="m-wrap span12 popovers" data-original-title="Work Title" data-content="Please enter work title" data-trigger="hover"  />
                                            <span class="help-inline">Some hint here</span>
                                        </div>
                                    </div>




                                    <div class="row-fluid">

                                        <div class="control-group">
                                            <label class="control-label">Details</label>
                                            <div class="controls">
                                                <textarea  id="ckeditor" class="span12 ckeditor m-wrap" name="editor_<?php echo $langCode; ?>" rows="6"><?php echo $view[$langCode][0]->long_desc; ?></textarea>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="control-group">
                                        <div class="control-label">
                                            Slider Section
                                        </div>
                                        <div class="controls">

                                            <div class="accordion in collapse">
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a href="#collapse2Ar_<?php echo $langCode; ?>" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                            <i class="icon-angle-left"></i>
                                                            Slider Text and Anchor Options
                                                        </a>
                                                    </div>
                                                    <div class="accordion-body collapse" id="collapse2Ar_<?php echo $langCode; ?>">
                                                        <div class="accordion-inner">

                                                            <div class="control-group">
                                                                <label class="control-label">Slider Text</label>
                                                                <div class="controls">
                                                                    <input value="<?php echo $view[$langCode][0]->slider_text; ?>" type="text" name="slider_text_<?php echo $langCode; ?>" placeholder="Please enter slider text" class="m-wrap span6 popovers" data-original-title="Slider Text" data-content="Please enter slider text" data-trigger="hover"  />
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label class="control-label">Text For Slider Anchor</label>
                                                                <div class="controls">
                                                                    <input value="<?php echo $view[$langCode][0]->slider_anchor; ?>" type="text" name="slider_anchor_<?php echo $langCode; ?>" placeholder="Please enter text for slider anchor" class="m-wrap span6 popovers" data-original-title="Slider Anchor" data-content="Please enter text for slider anchor" data-trigger="hover"  />
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label class="control-label">URL for Slider Anchor</label>
                                                                <div class="controls">
                                                                    <input value="<?php echo $view[$langCode][0]->slider_url; ?>" type="text" name="slider_url_<?php echo $langCode; ?>" placeholder="Please enter url for slider anchor" class="m-wrap span6 popovers" data-original-title="Slider Anchor URL" data-content="Please enter url for slider anchor" data-trigger="hover"  />
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="control-group">
                                        <div class="control-label">
                                            SEO Section
                                        </div>
                                        <div class="controls">

                                            <div class="accordion in collapse">
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a href="#collapseAr_<?php echo $langCode; ?>" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                                            <i class="icon-angle-left"></i>
                                                            Meta Keywords and Description
                                                        </a>
                                                    </div>
                                                    <div class="accordion-body collapse" id="collapseAr_<?php echo $langCode; ?>">
                                                        <div class="accordion-inner">

                                                            <div class="row-fluid">

                                                                <div class="control-group">
                                                                    <label class="control-label">Page Title</label>
                                                                    <div class="controls">
                                                                        <input type="text" maxlength="500" value="<?php echo $view[$langCode][0]->meta_title; ?>" name="meta_title_<?php echo $langCode; ?>" placeholder="Please enter title" class="span6 m-wrap popovers" data-original-title="Meta Page Title" data-content="Enter Page title for SEO" data-trigger="hover" />
                                                                        <span class="help-inline">Some hint here</span>
                                                                    </div>
                                                                </div>

                                                                <div class="control-group">
                                                                    <label class="control-label">Page Keywords</label>
                                                                    <div class="controls">
                                                                        <input type="text" maxlength="500" value="<?php echo $view[$langCode][0]->meta_keywords; ?>" name="meta_keywords_<?php echo $langCode; ?>" placeholder="Please enter keywords" class="span6 m-wrap popovers" data-original-title="Meta Page Title" data-content="Enter SEO Keywords which should be seperated by comma" data-trigger="hover" />
                                                                        <span class="help-inline">Some hint here</span>
                                                                    </div>
                                                                </div>

                                                                <div class="control-group">
                                                                    <label class="control-label">Page Description</label>
                                                                    <div class="controls">
                                                                        <textarea name="meta_desc_<?php echo $langCode; ?>" class="span6 m-wrap popovers" rows="3" data-original-title="Meta Page Title" data-content="Enter Page Description for SEO" data-trigger="hover"><?php echo $view[$langCode][0]->meta_desc; ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <?php
                                echo "</div>";
                                }
                            ?>



                        </div>
                    </div>

                </div>


            </div>


            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-reorder"></i>
                        Images Options
                    </div>
                </div>
                <div class="portlet-body">


                    <div class="fluid-row">

                        <div class="span6" id="divSmallImage">

                            <div style="float:left;" class="c">
                                <img src="<?php echo base_url(); ?>../uploads/<?php echo $view[$langCode][0]->image; ?>" style="width:200px !important; height:150px !important;" alt="" />
                                <div class="smallText" id="lblSmallImage">Dimension : 344 x 185</div>
                            </div>
                            <div class="control-group" data-type="File"  style="padding-top:50px;">
                                <label class="control-label">Small Image</label>
                                <div class="controls">
                                    <input type="file" name="smallFile" class="default">
                                </div>
                            </div>

                        </div>

                        <div class="span6 lastCol" id="divSliderImage">


                            <div style="float:left;" class="c">
                                <img src="<?php echo base_url(); ?>../uploads/<?php echo $view[$langCode][0]->slider_image; ?>" style="width:150px !important; height:150px !important;" alt="" />
                                <div class="smallText c">Dimension : 1920 x 530</div>
                            </div>
                            <div class="control-group" data-type="File" style="padding-top:50px;">
                                <label class="control-label">Slider Image</label>
                                <div class="controls">
                                    <input type="file" name="sliderFile" class="default">
                                </div>


                            </div>

                        </div>

                        <div class="clear">&nbsp;</div>

                    </div>

                </div>
            </div>

            <div class="form-actions">
                <button type="button" class="btn blue" onclick="FormValidation.validate(this)"><i class="icon-ok"></i> Save</button>
                <button type="button" class="btn">Cancel</button>
            </div>


        </form>
        <!-- END FORM-->

    </div>
</div>
