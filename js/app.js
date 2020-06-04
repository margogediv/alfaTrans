function bannerAnimation() {
    $(".section-1 .banner-title").fadeIn(1200, function () {
        $('#banner-img-home').fadeIn(1000, function () {
            $('.section-label.label-1').show(350, function () {
                $('.section-1 .banner-list').show(450, function () {
                    $('.section-1 .banner-text .modal').show(500);
                });
            })
        })
    });
}

function sliderMobile(start) {
    let clients = $("#clients");
    if (!start) {
        clients.trigger('destroy.owl.carousel');
    } else {
        clients.owlCarousel({
            'items': 1,
            'loop': true,
            'autoplay': false,
            'nav': true,
            'dots': false,
        });
    }
}

$(window).resize(function () {
    let clientWidth = parseInt($(window).width());
    if (clientWidth > 1260) {
        bannerAnimation();
        sliderMobile(false);
    } else {
        sliderMobile(true);
    }
});

$(document).ready(function () {
    //start
    let clientWidth = parseInt($(window).width());
    if (clientWidth > 1260) {
        bannerAnimation();
        sliderMobile(false);
    } else {
        sliderMobile(true);
    }

    $('.linkto').on('click', function (e) {
        e.preventDefault();
        let slide = $(this).attr('data-link');
        $('#services .owl-dot:nth-child(' + slide + ')').trigger('click');
        $('html, body').animate({scrollTop: $('#to-services').offset().top}, 'slow');
    });

    let owl = $(".slider-about");
    owl.owlCarousel({
        'items': 1,
        'loop': true,
        'autoplay': false,
        'nav': true,
        'dots': true,
        autoHeight:true,
    });

    $('#menu__toggle').on('change', function () {
        if ($(this).prop('checked')) {
            if(clientWidth <= 1260) {
                $('body,html').addClass('overflow-hidden');
            }

            $('.nav').css('display', 'block');
            $('.header').addClass('nav_active');
            $('.nav').animate(
                {
                    left: 0,
                },
                300,
                'easeOutQuint'
            );
        } else {
            if(clientWidth <= 1260) {
                $('body,html').removeClass('overflow-hidden');
            }
            let width = parseInt($('.nav').css('width'));
            $('.header').removeClass('nav_active');
            $('.nav').animate(
                {
                    left: width * -1.25,
                },
                300,
                'easeOutQuint',
                function () {
                    $('.nav').css('display', 'none');
                }
            );
        }
    });

    //modal
    $('.modal').click(function () {
        $('#modal-overlay').show();
        $('.form-modal').show(200);
    });

    //modal close
    $('.form-modal .btn-gray').click(function () {
        $('#modal-overlay').hide();
        $('.form-modal').hide(200);
        $('.form-modal input[type=text]').val("");
        $('.form-modal textarea').val("");
        $('.form-modal input[type=checkbox]').prop('checked', false);
        grecaptcha.reset();
    });

    //model close overlay
    $('#modal-overlay').click(function () {
        $('#modal-overlay').hide();
        $('#modal-message').hide(200);
        $('.form-modal').hide(200);
        $('.form-modal input[type=text]').val("");
        $('.form-modal textarea').val("");
        $('.form-modal input[type=checkbox]').prop('checked', false);
        grecaptcha.reset();
    });

    //form reset
    $('#form-stat .btn-gray').click(function () {
        $('#form-stat input[type=text]').val("");
        $('#form-stat textarea').val("");
        $('#form-stat input[type=checkbox]').prop('checked', false);
        grecaptcha.reset();
    });

    //form submit
    $("form").submit(function (e) {
        e.preventDefault();

        let form = $(this);
        let submit = form.children('.group-buttons').children('.btn-red')
        submit.prop('disabled', true);

        let post_url = "/mail.php";
        let request_method = "POST";
        let form_data = $(this).serialize();
        $.ajax({
            url: post_url,
            type: request_method,
            data: form_data,
        }).done(function (res) {
            console.log(res);
            submit.prop('disabled', false);
            form.children('.group-input').children('input').val("");
            form.children('.group-textarea').children('textarea').val("");
            form.children('.group-checkbox').children('label').children('input[type=checkbox]').prop('checked', false);
            grecaptcha.reset();
            $('#modal-overlay').show();
            $('.form-modal').hide();
            $('#modal-message').fadeIn(200);
        }).fail(function (jqXHR, exception) {
            console.error(exception);
            console.log("error");
            submit.prop('disabled', false);
        });
    });

    $('#modal-message button').on('click', function () {
        $('#modal-message').fadeOut(200);
        $('#modal-overlay').hide();
    })

    //mouseenter
    $('.screen').mouseenter(function () {
        let id = $(this).attr('id');
        $('.nav-item').removeClass('active');
        $('.nav-item[data-id="' + id + '"]').addClass('active');
    })

    //smooth scroll to screen
    $('.nav li a').click(function (e) {
        e.preventDefault();
        let id = $(this).attr('data-to');
        let scrolled = $("#to-" + id).offset().top;
        $('.nav .nav-item').removeClass('active');
        $('.nav .nav-item[data-id="' + id + '"]').addClass('active');

        let clientWidth = parseInt($(window).width());
        if(clientWidth <= 1260)
            $('.menu__btn').trigger('click');

        $('html, body').animate({scrollTop: scrolled}, '350');

    });

    //smooth scroll to screen
    $('#linkto-services').click(function (e) {
        e.preventDefault();
        let scrolled = $("#to-services").offset().top;
        $('html, body').animate({scrollTop: scrolled}, '350');
    });
});
