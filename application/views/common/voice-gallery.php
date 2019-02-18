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
                    <div class="sound-img">
                        <div class="sound-overlay">
                            <div id="sound-download" class="rounded-top sound-download sound-button"><i class="fa fa-file-audio-o"></i> </div>
                            <div id="sound-listen" class="rounded-top sound-listen sound-button"><i class="fa fa-file-audio-o"></i> </div>
                        </div>
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
    .sound-overlay .sound-download{
        background: #cfcfcf;
        width: 45px;
        height: 45px;
        position: absolute;
        left: 25%;
        top: 25px;
    }
    .sound-overlay .sound-listen{
        background: #cfcfcf;
        width: 45px;
        height: 45px;
        position: absolute;
        right: 25%;
        bottom: 25px;
    }

    .sound-overlay .fa {
        font-size: 16px;
        text-align: center;
        margin: auto;
        display: block;
        padding: 15px;
    }
    .sound-overlay{
        background: #262626;
        opacity: 0.8;
        width: 80%;
        position: absolute;
        height: 86%;
    }

    .sound-img{
        overflow: hidden;
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

