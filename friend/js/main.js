$(document).ready(function(){
if(typeof $.fancybox == 'function') {
        $("a.fancybox").fancybox({
            openEffect : 'none',
            closeEffect : 'none',
            nextEffect : 'fade',
            prevEffect : 'fade',
            loop : false,
            helpers : {
                title : {
                    type : 'inside'
                }
            },
            tpl: {
                prev: '<a title="'+classic.fancybox_prev+'" class="fancybox-nav fancybox-prev"><span></span></a>',
                next: '<a title="'+classic.fancybox_next+'" class="fancybox-nav fancybox-next"><span></span></a>',
                closeBtn : '<a title="'+classic.fancybox_closeBtn+'" class="fancybox-item fancybox-close" href="javascript:;"></a>'
            }
        });

        $(".main-photo").on('click', function(e) {
            e.preventDefault();
            $("a.fancybox").first().click();
        });


    }
});