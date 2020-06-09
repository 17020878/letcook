$( document ).ready(function() {

    load_home_js();
    load_fly_list_js();
    $('#manh').click(function () {
        calajax ();
    });
    click_add_list();
    set_amount_cook();
    add_cook();
});
//them buoc trong addmonan
function add_cook() {
    $('.containeraddmonan #add').click(function () {
       var list_add = $('.containeraddmonan .cacbuoc');
       if(list_add.length > 0){
           for(var i=1; i<=list_add.length; i++){
               if($(list_add[i]).hasClass('d-none')){
                    var index_add = $(list_add[i]).attr('index_add');
                    index_add = parseInt(index_add);
                    break;
               }
           }
            $(list_add[i]).removeClass('d-none');
       }
    });
}
//phan xem them
function click_add_list() {
    $('.result-list .result-recipe-item');
    $('#manhmanh').click(function () {
        var list = $('.result-list .result-recipe-item');
        if(list.length > 0) {
            for(var i = 0; i < list.length;i++) {
                if($(list[i]).hasClass('d-none')) {
                    var ind = $(list[i]).attr('index');
                    ind = parseInt(ind);
                    ind_hide = ind ;
                    break;
                }

            }
        }

        $(list[ind_hide]).removeClass('d-none');
        $(list[ind_hide +1]).removeClass('d-none');
        $(list[ind_hide +2]).removeClass('d-none');
        $(list[ind_hide +3]).removeClass('d-none');
        if($(list[list.length-1]).hasClass('d-none') == false) {
            $('.recipe-more').addClass('d-none');
        }
    });

}
//so luong cook o phan xem them
function set_amount_cook() {
    $('#manhmanh').click(function () {
        var nb =$('.text-red.ng-binding').text();
        nb = nb-0+4;
        $('.text-red.ng-binding').text(nb);
    });
}
//comment
function calajax () {
    var url = Drupal.settings.basePath;
    var comment_text = $('input[name=comments]').val();
    var id_comment = $('input[name=get_id_cmt]').val();
    // console.log(id_comment);
    $.ajax({
        url: url +  'moduleajax',
        type: 'POST',
        dataType: 'html',
        data: {
            cmt: comment_text,
            id_cmt : id_comment,
        }
    }).done(function(ketqua) {
        $('.commentcontainer').append(ketqua);
    });
}

function load_home_js() {
    $('.home-search__go input').click(function () {
        $(this).parents('.home-search__go').children('.search-default').toggleClass('d-none');
        $('.home-search__to .search-default').addClass('d-none');
    });
    $('.home-search__to input').click(function () {
        if($('.home-search__go input').val() != '') {
            $(this).parents('.home-search__to').children('.search-default').toggleClass('d-none');
            $('.home-search__go .search-default').addClass('d-none');
        }
    });
    $('.home-search__passenger input').click(function () {
        $('.passenger-box').toggleClass('d-none');
    });
    $('.home-search__depart input ').flatpickr({
        altInput: false,
        disableMobile: true,
        dateFormat: 'D, d-m-Y',
        minDate: 'today',
        onChange: function() {
            if($('.home-search__return').hasClass('d-hidden')){
                $('.home-search__passenger .passenger-box').removeClass('d-none');
            }else{
                $('.home-search__return .open').addClass('active').focus();
            }

        }
    });
    $('.home-search__return input').flatpickr({
        altInput: false,
        disableMobile: true,
        dateFormat: 'D, d-m-Y',
        minDate: 'today',
        onChange: function() {

            $('.home-search__passenger .passenger-box').removeClass('d-none');
        }
    });

    $(".destination__body").slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        //autoplay: true,
        speed: 500,
        autoplaySpeed: 5000,
        arrows: false,
        dots: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.fly-offers__slide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        //autoplay: true,
        speed: 500,
        arrows: false,
        dots: true
    });
}

function load_fly_list_js() {
    $('.booking-box__btn').click(function () {
        $('.booking-box__dropdown').slideToggle(400);
        $('.booking-box').toggleClass('open-dropdown');
    });

    $('.date-slide').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        //autoplay: true,
        speed: 500,
        infinite: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.ticket-table__cell').click(function () {
        $('.ticket-table__cell').removeClass('active');
        $(this).addClass('active');
    });

    $('.ticket-box__check').click(function () {
        $('.ticket-box__item').removeClass('active');
        $(this).parents('.ticket-box__item').addClass('active');
    });

    $('.ticket-table__type').click(function () {
        $(this).parents('.ticket-table').find('.ticket-table__collapse').slideToggle(400);
    });

    $('.ticket-box__show .p-show-detail').click(function () {
        $(this).parents('.ticket-box').find('.ticket-box__detail').slideToggle(400);
        $(this).parents('.ticket-box').toggleClass('open-detail');
    });
}



