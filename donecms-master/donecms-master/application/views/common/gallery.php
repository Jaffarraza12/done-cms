<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    #masonry {
        column-count: 2;
        column-gap: 1em;
        min-height: 600px;
        direction: rtl;
    }

    @media(min-width: 30em) {
        #masonry {
            column-count: 3;
            column-gap: 1em;
        }
    }

    @media(min-width: 40em) {
        #masonry {
            column-count: 4;
            column-gap: 1em;
        }
    }

    @media(min-width: 60em) {
        #masonry {
            column-count: 5;
            column-gap: 1em;
        }
    }

    @media(min-width: 75em) {
        #masonry {
            column-count: 6;
            column-gap: 1em;
        }
    }

    .item {
        background-color: none;
        display: inline-block;
        margin: 0 0 1em 0;
        width: 100%;
        cursor: pointer;
    }

    .item img {
        max-width: 100%;
        height: auto;
        width: 100%;
        margin-bottom: -4px;

        /*idk why but this fix stuff*/
    }

    .item.active {
        animation-name: active-in;
        animation-duration: 0.7s;
        animation-fill-mode: forwards;
        animation-direction: alternate;
    }

    .item.active .footer{
        display: none;
    }

    .item.active:before {
        content: "+";
        transform: rotate(45deg);
        font-size: 48px;
        color: white;
        position: absolute;
        top: 20px;
        right: 20px;
        background-color:rgba(0,0,0,0.85);
        border-radius: 50%;
        width:48px;
        height:48px;
        text-align:center;
        line-height:48px;
        z-index:12;
    }

    .item.active img {
        animation-name: active-in-img;
        animation-duration: 0.7s;
        animation-fill-mode: forwards;
        animation-direction: alternate;
    }


    @keyframes active-in {
        0% {
            opacity:1;
            background-color:white;
        }

        50% {
            opacity:0;
            background-color:rgba(0,0,0,0.90);
        }

        100% {
            opacity: 1;
            position:fixed;
            top:0;
            left:0;
            right:0;
            bottom:0;
            background-color:rgba(0,0,0,0.90);
        }
    }

    @keyframes active-in-img {
        0% {
            opacity:1;
            transform:translate(0%, 0%);
            top: 0;
            left: 0;
            max-width: 100%;
        }
        49% {
            opacity:0;
            transform: translate(0%, -50%);
        }
        50% {
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -100%);
        }
        100% {
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 90%;
            width: auto;
            max-height: 95vh;
            opacity:1;
        }
    }
</style>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=" text-center"><h2>Gallery Images</h2></div>
            </div>
        </div>
        <div id="masonry">
             <?php foreach($gallery as $img) {?>
               <div class="item">
                <img src="/uploads/gallery/<?php echo $img->image?>" alt="" />
            </div>
            <?php } ?>

        </div>
    </div>
<div class="clearfix"></div>
<script>
    $('.item').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $(this).toggleClass('active');


    });

</script>