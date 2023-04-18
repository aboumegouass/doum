$(document).ready(function(){

    // Contact Form Submission

    $('#GHContactForm').on('submit', function(e) {
        e.preventDefault();
        $('.has-error').removeClass('has-error');
        var form = $(this);

        var fullname = form.find('#GH_fullname').val(),
            email = form.find('#GH_email').val(),
            message = form.find('#GH_message').val(),
            ajax_url = form.data('url'); 
            if (fullname == '') {
                $('#GH_fullname').parent('.form-group').addClass('has-error');
                return;
            }
            if (email == '') {
                $('#GH_email').parent('.form-group').addClass('has-error');
                return;
            }
            if (message == '') {
                $('#GH_message').parent('.form-group').addClass('has-error');
                return;
            }
            form.find('input, button, textarea').attr('disabled', 'disabled');
            $('.js-form-submession').addClass('js-show-feedback');
            $('.GH_contact_form').append('<div class="overlay-loading"><div class="bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div></div>');
            $.ajax({
                url: ajax_url,
                type: 'post',
                data: {
                    fullname: fullname,
                    email: email,
                    message: message,
                    action: 'GH_save_user_contact'
                },
                error: function (response) {
                    $('.js-form-submession').removeClass('js-show-feedback');
                    $('.js-form-error').addClass('js-show-feedback');
                    form.find('input, button, textarea').remomeAttr('disabled');
                },
                beforeSend: function (response) {
                    $('.GH_contact_form').append('<div class="overlay-loading"><div class="bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div></div>');
                },
                success: function (response) {
                    if (response == 0) {
                        setTimeout( function(){
                            $('.js-form-submession').removeClass('js-show-feedback');
                            $('.overlay-loading').fadeOut();
                            $('.js-form-error').addClass('js-show-feedback');
                            form.find('input, button, textarea').remomeAttr('disabled');

                        }, 150);
                    } else {
                        setTimeout( function(){
                            $('.js-form-submession').removeClass('js-show-feedback');
                            $('.js-form-success').addClass('js-show-feedback');
                            $('.overlay-loading').fadeOut();
                            form.find('input, button, textarea').remomeAttr('disabled').val('');
                        }, 150);
                    }
                },
            });

    });
        // Scroll function
        var last_scroll = 0;
        $(window).scroll(function() {
            
            var scroll = $(window).scrollTop();
            if (Math.abs(scroll - last_scroll) > $(window).height()*0.1) {
                last_scroll = scroll;
                $('.page-limit').each(function(index) {
                    if (isVisible($(this))) {
                        history.replaceState(null, null, $(this).attr("data-page"));
                        return(false);
                    }
                });
            }
        });

});