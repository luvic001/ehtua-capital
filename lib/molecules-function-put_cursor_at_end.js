jQuery(function($){
    // Masking fields effect
    jQuery.fn.putCursorAtEnd = function() {
        
        return this.each(function() {
            var $el = $(this),
            el = this;
            if (!$el.is(":focus")) {
                $el.focus();
            }
            if (el.setSelectionRange) {
                var len = $el.val().length * 2;
                setTimeout(function() { el.setSelectionRange(len, len); }, 1);
            }
            else {
                $el.val($el.val());
            }
            this.scrollTop = 999999;
        });
    };
})