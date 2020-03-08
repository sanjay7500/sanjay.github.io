<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style>
    .fullscreen-bg {
        background: #000;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        overflow: hidden;
        z-index: 9999;
    }

    #fullscreen-bg-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    @media (min-aspect-ratio: 16/9) {
        #fullscreen-bg-video {
            height: 300%;
            top: -100%;
        }
    }

    @media (max-aspect-ratio: 16/9) {
        #fullscreen-bg-video {
            width: 300%;
            left: -100%;
        }
    }
</style>

</head>
<body>
<div class="fullscreen-bg">
    <video muted autoplay id="fullscreen-bg-video">
        <source src="http://localhost/test/wp-content/uploads/2019/01/video.mp4" type="video/mp4">
    </video>
</div>


<script type='text/javascript'>
    document.getElementById('fullscreen-bg-video').addEventListener('ended', detectEnd, false);

    function detectEnd(e) {
        jQuery('.fullscreen-bg').fadeOut(1000,function(){jQuery(this).remove();});
    }
</script>

</body>
</html>