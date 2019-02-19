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
        
        
        $(".sound-img").hover(function () {

           elem = $(this)
           overlay = elem.find('.sound-overlay')
           listen = overlay.find('#sound-listen')
           download = overlay.find('#sound-download')
           overlay.clearQueue()
           overlay.show()
            listen.show();
            download.show();
            overlay.animate({"width":"100%"},300)
            listen.animate({'top':'110px'}, 300);
            download.animate({'bottom':'155px'}, 300);

        },function(){
            overlay.clearQueue()
            overlay.hide()
            listen.hide();download.hide();
            listen.animate({'top':'25px'}, 10);
            overlay.animate({"width":"80%"},function () {
            download.animate({'bottom':'25px'}, 10);
            })

        });
    });
</script>
<div class="col-sm-12">
    <div class="row" id="content-boxes" style="word-wrap: break-word;min-height: 900px">
        <div class="col-md-12">
            <div class="col-md-4 col-lg-4 col-xs-12 ">
                <div class="sound-item">
                    <div class="sound-img">
                        <div class="sound-overlay" style="display: none">
                            <div id="sound-listen" class="rounded-top sound-listen sound-button-on" data-sound="<?php echo base_url().'uploads/audio/wave.mp3'?>"><i class="fa fa-play"></i> </div>
                            <div id="sound-download" class="rounded-top sound-download "><a href="<?php echo base_url().'uploads/audio/wave.mp3'?>"><i class="fa fa-download"></i></a>  </div>
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

<script>
    $(document).ready(function () {
        $('.sound-listen-on').click(function(){
            voice = $(this).data('sound')
            var audio = new Audio(voice)
            audio.play()
           $(this).html('<i class="fa fa-pause"></i>')
        });
    })
</script>

<style>
    .sound-overlay .sound-listen{
        background: #cfcfcf;
        width: 45px;
        height: 45px;
        position: absolute;
        left: 25%;
        top: 25px;
        display:none
    }
    .sound-overlay .sound-download{
        background: #cfcfcf;
        width: 45px;
        height: 45px;
        position: absolute;
        right: 25%;
        bottom: 25px;
        display:none;
    }

    .sound-overlay .sound-listen:hover,.sound-overlay .sound-download:hover{
        transition: all 0.5s ease;
        background:#fd7e14;
        display: none;
    }

    .sound-overlay .fa {
        font-size:26px;
        text-align: center;
        margin: auto;
        display: block;
        padding: 10px;
    }
    .sound-overlay{
        background: #000;
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

