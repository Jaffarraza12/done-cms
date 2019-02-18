<link href="<?php echo base_url(); ?>/assets/css/colorbox.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.colorbox.js"></script>

<script>
    $(document).ready(function(){
        //Examples of how to assign the Colorbox event to elements
        $.noConflict();
        $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
        $("#click").click(function(){
            $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
            return false;
        });
    });
</script>
<div class="col-sm-12">
    <div class="row" id="content-boxes" style="word-wrap: break-word;min-height: 900px">
        <div class="col-md-12">
            <div class="col-md-4 col-lg-4 col-xs-12 ">
                <div class="sound-item">
                    <div class="sound-overlay">
                        <div id="sound-download" class="rounded-top sound-button"><i class="fa fa-facebook"></i> </div>
                        <div id="sound-listen" class="rounded-top sound-button"><i class="fa fa-facebook"></i> </div>
                    </div>
                    <div class="sound-img">
                        <img src="http://eeevents.ae/k2.png" />
                    </div>

                    <div class="sound-meta-information">
                        <h2>Loreum Ipsum</h2>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .sound-overlay #sound-download{
        background: #cfcfcf;
        width: 25px;
        height: 25px;
        position: absolute;
        left:25%;
        
    }
    .sound-overlay{
        background: #262626;
        opacity: 0.8;
        width: 80%;
        height: 100%;
    }

    .sound-item{
        position: relative;
        overflow: hidden;

    }
    .tile{
        direction: rtl;
        float: right;
    }
</style>

