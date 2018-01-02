disableSelection(document.body);

jQuery(function (){
    jQuery("ul#menu-main li.parent-list").each(function (){
        jQuery(this).children("a").append('<span class="sub-indicator"></span>');
    });
});