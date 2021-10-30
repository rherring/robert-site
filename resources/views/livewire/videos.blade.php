<div>
    <iframe class="iFrame" src='https://www.sociablekit.com/app/embed/67361' frameborder='0' width="100%" height="1000"></iframe>
    <div class="cursor-pointer absolute top-0 text-right right-0 px-4 p-2 block text-white hover:text-blue-400 ease-in-out transition-all duration-150" wire:click="$emit('closeModal')">&#215;</div>
</div>
<script>
    var buffer = 20; //scroll bar buffer
    var iframe = document.querySelector('.iFrame');

    function pageY(elem) {
        return elem.offsetParent ? (elem.offsetTop + pageY(elem.offsetParent)) : elem.offsetTop;
    }

    function resizeIframe() {
        var height = document.documentElement.clientHeight;
        height -= pageY(iframe)+ buffer ;
        height = (height < 0) ? 0 : height;
        iframe.style.height = (height-20) + 'px';
    }

    // .onload doesn't work with IE8 and older.
    if (iframe.attachEvent) {
        iframe.attachEvent("onload", resizeIframe);
    } else {
        iframe.onload=resizeIframe;
    }

    window.onresize = resizeIframe;
</script>
