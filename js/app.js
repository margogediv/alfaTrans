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
        autoHeight: true,
    });

    $('#menu__toggle').on('change', function () {
        if ($(this).prop('checked')) {
            if (clientWidth <= 1260) {
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
            if (clientWidth <= 1260) {
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
    $('.nav .nav-section a').click(function (e) {
        e.preventDefault();
        let id = $(this).attr('data-to');
        let scrolled = $("#to-" + id).offset().top;
        $('.nav .nav-item').removeClass('active');
        $('.nav .nav-item[data-id="' + id + '"]').addClass('active');

        let clientWidth = parseInt($(window).width());
        if (clientWidth <= 1260)
            $('.menu__btn').trigger('click');

        $('html, body').animate({scrollTop: scrolled}, '350');

    });

    //smooth scroll to screen
    $('#linkto-services').click(function (e) {
        e.preventDefault();
        let scrolled = $("#to-services").offset().top;
        $('html, body').animate({scrollTop: scrolled}, '350');
    });

    //smooth scroll to screen
    $('.dropdown .dropdown-select').click(function (e) {
        e.preventDefault();
        let dropdown = $(this).parents('.dropdown');
        if (dropdown.hasClass('active')) {
            dropdown.removeClass('active');
            dropdown.children('.dropdown-list').removeClass('active');
        } else {
            dropdown.addClass('active');
            dropdown.children('.dropdown-list').addClass('active');
        }
    });

    //map
    $('#map-container')
        .click(function () {
            $(this).find('iframe').addClass('clicked')
        })
        .mouseleave(function () {
            $(this).find('iframe').removeClass('clicked')
        });

    //gallery
    let listItemsGallery = [];
    let gallery = $('#gallery-slider .items');
    let maxIndexGallery = 0;
    let currentIndexGallery = 0;
    let LastIndexGallery = 0;
    let queueItem = 0;
    fetch('http://alpha-trans.devzsg.net/gallery.php').then((response) => {
        return response.json();
    })
        .then((data) => {
            listItemsGallery = data;
            maxIndexGallery = listItemsGallery.length - 1;
            LastIndexGallery = 7;
            createGallery(listItemsGallery.slice(0, 7));
        });


    function createGallery(items) {
        updateIndexGallery();

        $('#gallery-slider .items .item').remove();

        items.forEach(item => {
            let html =
                '<div class="item">' +
                '<img src="' + item + '">' +
                '</div>';
            gallery.append(html);
        });
    }

    $('#gallery-slider .next').click(function () {
        let items;
        let from_index = LastIndexGallery;
        let to_index = from_index + 7;

        if (to_index <= maxIndexGallery) {
            items = listItemsGallery.slice(from_index, to_index);
        } else {
            if (from_index === maxIndexGallery) {
                from_index = maxIndexGallery - 1;
                to_index = 6;
            } else {
                from_index = LastIndexGallery - 1;
                to_index = to_index - maxIndexGallery - 1;
            }

            items = listItemsGallery.slice(from_index, maxIndexGallery)
                .concat(listItemsGallery
                    .slice(0, to_index));
        }

        galleryStep(items, from_index, to_index);
    });

    $('#gallery-slider .prev').click(function () {
        let items;
        let from_index = LastIndexGallery - 7;
        let to_index = from_index - 7;

        if (from_index >= 7) {
            items = listItemsGallery.slice(to_index, from_index);
        } else {
            to_index = maxIndexGallery - (7 - from_index);
            if (from_index === 0) {
                to_index = maxIndexGallery - (7 - from_index) - 1;
                from_index = from_index + 1;
            }

            items = listItemsGallery.slice(0, from_index)
                .concat(listItemsGallery
                    .slice(to_index, maxIndexGallery));
        }

        galleryStep(items, to_index, to_index);
    });

    function galleryStep(items, index, to_index) {
        if (!maxIndexGallery)
            return;

        $('#gallery-slider .items img:nth-child(2)').remove();
        updateIndexGallery();

        let i = 0;
        items.forEach(src => {
            i++;
            $('#gallery-slider .items .item:nth-child(' + i + ')').append(
                '<img src="' + src + '"/>'
            );
        });

        if (getCountItemGallery() !== 14) {
            console.warn(getCountItemGallery());
            console.log(items);
            return;
        }

        let first;
        for (i = 1; i <= 7; i++) {
            first = $('#gallery-slider .item:nth-child(' + i + ') img:first-child');
            first.fadeOut(1000);
            first.queue(function () {
                $(this).remove();
                queueItem++;
                if (queueItem === 7)
                    callbackRemoveItemGallery(index, to_index);
            });
        }
    }

    function updateIndexGallery() {
        gallery.attr('data-max-index-gallery', maxIndexGallery);
        gallery.attr('data-current-index-gallery', currentIndexGallery);
    }

    function getCountItemGallery() {
        return $('#gallery-slider .items img').length;
    }

    function callbackRemoveItemGallery(index, to_index) {
        queueItem = 0;
        currentIndexGallery = index;
        LastIndexGallery = to_index;
    }

});