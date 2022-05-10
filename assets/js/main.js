const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener('click', () => {
    //Animate Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});


jQuery(function ($) {
    $(window).scroll(function () {
        var height = $(window).scrollTop();
        /*Если сделали скролл на 100px задаём новый класс для header*/
        if (height > 20) {
            $('header').addClass('header_shadow');
        } else {
            /*Если меньше 100px удаляем класс для header*/
            $('header').removeClass('header_shadow');
        }
    });
});

jQuery(document).ready(function ($) {
    $(document).ready(function () {
        AOS.init({
            offset: 90,
            once: true,
            disable: function () {
                var maxWidth = 800;
                return window.innerWidth < maxWidth;
            }

        });
    });
});


jQuery(document).ready(function ($) {
    $('.black_logos_slider').slick({
        // lazyLoad: 'ondemand',
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
        adaptiveHeight: false,
        touchThreshold: 10,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1500,
        dots: false,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 6,
                }
            },
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 4,

                }
            },

            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]

    });
});

jQuery(document).ready(function ($) {
    $('.logos').slick({
        // lazyLoad: 'ondemand',
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        adaptiveHeight: false,
        touchThreshold: 10,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1500,
        dots: false,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 4,

                }
            },

            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]

    });
});


jQuery(document).ready(function ($) {
    $('.partnerships_logos_slider').slick({
        // lazyLoad: 'ondemand',
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        adaptiveHeight: false,
        touchThreshold: 10,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1500,
        dots: false,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 4,

                }
            },

            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]

    });
});
jQuery(document).ready(function ($) {
    $('.location_slides').slick({
        // lazyLoad: 'ondemand',
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        adaptiveHeight: false,
        touchThreshold: 10,
        // autoplay: true,
        // autoplaySpeed: 4000,
        speed: 500,
        dots: false,

    });
});

jQuery(document).ready(function ($) {
    $('.video_item').parent().click(function () {
        if ($(this).children(".video_item").get(0).paused) {
            $(this).children(".video_item").get(0).play();
            $(this).children(".playpause").fadeOut();
        } else {
            $(this).children(".video_item").get(0).pause();
            $(this).children(".playpause").fadeIn();
        }
    });
});

// Dynamic Adapt v.1
// HTML data-da="where(uniq class name),position(digi),when(breakpoint)"
// e.x. data-da="item,2,992"

"use strict";

(function () {
    let originalPositions = [];
    let daElements = document.querySelectorAll('[data-da]');
    let daElementsArray = [];
    let daMatchMedia = [];
    //Заполняем массивы
    if (daElements.length > 0) {
        let number = 0;
        for (let index = 0; index < daElements.length; index++) {
            const daElement = daElements[index];
            const daMove = daElement.getAttribute('data-da');
            if (daMove != '') {
                const daArray = daMove.split(',');
                const daPlace = daArray[1] ? daArray[1].trim() : 'last';
                const daBreakpoint = daArray[2] ? daArray[2].trim() : '767';
                const daType = daArray[3] === 'min' ? daArray[3].trim() : 'max';
                const daDestination = document.querySelector('.' + daArray[0].trim())
                if (daArray.length > 0 && daDestination) {
                    daElement.setAttribute('data-da-index', number);
                    //Заполняем массив первоначальных позиций
                    originalPositions[number] = {
                        "parent": daElement.parentNode,
                        "index": indexInParent(daElement)
                    };
                    //Заполняем массив элементов
                    daElementsArray[number] = {
                        "element": daElement,
                        "destination": document.querySelector('.' + daArray[0].trim()),
                        "place": daPlace,
                        "breakpoint": daBreakpoint,
                        "type": daType
                    }
                    number++;
                }
            }
        }
        dynamicAdaptSort(daElementsArray);

        //Создаем события в точке брейкпоинта
        for (let index = 0; index < daElementsArray.length; index++) {
            const el = daElementsArray[index];
            const daBreakpoint = el.breakpoint;
            const daType = el.type;

            daMatchMedia.push(window.matchMedia("(" + daType + "-width: " + daBreakpoint + "px)"));
            daMatchMedia[index].addListener(dynamicAdapt);
        }
    }

    //Основная функция
    function dynamicAdapt(e) {
        for (let index = 0; index < daElementsArray.length; index++) {
            const el = daElementsArray[index];
            const daElement = el.element;
            const daDestination = el.destination;
            const daPlace = el.place;
            const daBreakpoint = el.breakpoint;
            const daClassname = "_dynamic_adapt_" + daBreakpoint;

            if (daMatchMedia[index].matches) {
                //Перебрасываем элементы
                if (!daElement.classList.contains(daClassname)) {
                    let actualIndex = indexOfElements(daDestination)[daPlace];
                    if (daPlace === 'first') {
                        actualIndex = indexOfElements(daDestination)[0];
                    } else if (daPlace === 'last') {
                        actualIndex = indexOfElements(daDestination)[indexOfElements(daDestination).length];
                    }
                    daDestination.insertBefore(daElement, daDestination.children[actualIndex]);
                    daElement.classList.add(daClassname);
                }
            } else {
                //Возвращаем на место
                if (daElement.classList.contains(daClassname)) {
                    dynamicAdaptBack(daElement);
                    daElement.classList.remove(daClassname);
                }
            }
        }
        customAdapt();
    }

    //Вызов основной функции
    dynamicAdapt();

    //Функция возврата на место
    function dynamicAdaptBack(el) {
        const daIndex = el.getAttribute('data-da-index');
        const originalPlace = originalPositions[daIndex];
        const parentPlace = originalPlace['parent'];
        const indexPlace = originalPlace['index'];
        const actualIndex = indexOfElements(parentPlace, true)[indexPlace];
        parentPlace.insertBefore(el, parentPlace.children[actualIndex]);
    }

    //Функция получения индекса внутри родителя
    function indexInParent(el) {
        var children = Array.prototype.slice.call(el.parentNode.children);
        return children.indexOf(el);
    }

    //Функция получения массива индексов элементов внутри родителя
    function indexOfElements(parent, back) {
        const children = parent.children;
        const childrenArray = [];
        for (let i = 0; i < children.length; i++) {
            const childrenElement = children[i];
            if (back) {
                childrenArray.push(i);
            } else {
                //Исключая перенесенный элемент
                if (childrenElement.getAttribute('data-da') == null) {
                    childrenArray.push(i);
                }
            }
        }
        return childrenArray;
    }

    //Сортировка объекта
    function dynamicAdaptSort(arr) {
        arr.sort(function (a, b) {
            if (a.breakpoint > b.breakpoint) {
                return -1
            } else {
                return 1
            }
        });
        arr.sort(function (a, b) {
            if (a.place > b.place) {
                return 1
            } else {
                return -1
            }
        });
    }

    //Дополнительные сценарии адаптации
    function customAdapt() {
        //const viewport_width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    }
}());


var page = 2;
jQuery(function ($) {
    $('body').on('click', '.loadmore', function () {
        var data = {
            'action': 'load_posts_by_ajax',
            'page': page,
            'security': blog.security
        };

        $.post(blog.ajaxurl, data, function (response) {
            if ($.trim(response) != '') {
                $('.blog-posts').append(response);
                page++;
            } else {
                $('.loadmore').hide();
            }
        });
    });
});


jQuery(function ($) {
    $('#true_loadmore').click(function () {
        $(this).text('Loading ...');
        var data = {
            'action': 'loadmore',
            'query': true_posts,
            'page': current_page
        };
        $.ajax({
            url: ajaxurl,
            data: data,
            type: 'POST',
            success: function (data) {
                if (data) {
                    $('#true_loadmore').text('OLDER POSTS').before(data);
                    current_page++;
                    if (current_page == max_pages) $("#true_loadmore").remove();
                } else {
                    $('#true_loadmore').remove();
                }
            }
        });
    });
});

jQuery(function ($) {
    $(function () {

        $('.md-trigger').on('click', function () {
            $('.md-modal').addClass('md-show');
        });

        $('.md-close').on('click', function () {
            $('.md-modal').removeClass('md-show');
        });

    });
});



jQuery(document).ready(function ($) {
    $(function () {
        var current = location.pathname;
        $('.blog_category_list ul li a').each(function () {
            var $this = $(this);
            // if the current path is like this link, make it active
            if ($this.attr('href').indexOf(current) !== -1) {
                $this.addClass('current');
            }
        })
    })
});

jQuery(document).ready(function ($) {
    $(function () {
        var current = location.pathname;
        $('.nav-links li').each(function () {
            var $this = $(this);
            // if the current path is like this link, make it active
            if ($this.attr('href').indexOf(current) !== -1) {
                $this.addClass('current');
            }
        })
    })
});



jQuery(document).ready(function ($) {
    $(document).ready(function () {
        $('select').niceSelect();
    });
});


// jQuery(document).ready(function ($) {
//     $(document).ready(function () {
//         $(".wrapper .tab").click(function () {
//             $(".wrapper .tab").removeClass("active").eq($(this).index()).addClass("active");
//             $(".sticky_tabs_padtop").removeClass("active").eq($(this).index()).addClass("active");
//             $(".sticky_tabs_padding").removeClass("active").eq($(this).index()).addClass("active");
//             $(".sticky_blur").removeClass("active").eq($(this).index()).addClass("active");
//             $(".tab_item").hide().eq($(this).index()).fadeIn({
//                 duration: 0
//             })
//         }).eq(0).addClass("active");
//     });
// });



jQuery(document).ready(function ($) {
    $(document).ready(function () {
        $('#leftside, #tab_left').on('click', function(){
            $('.gp_left').addClass('active_left');
            $('.gp_right').removeClass('active_right');
            $('.gp_left_list').addClass('active_left');
            $('.gp_right_list').removeClass('active_right');
            $('.gp_right_image_hover').removeClass('active_right');
            $('.gp_left_image_hover').addClass('active_left');
            $('.tab_left').addClass('active');
            // $('.sticky_tabs').addClass('hunter_color');
            // $('.sticky_tabs').removeClass('landejer_color');
            $('.sticky_tabs_padtop').addClass('active');
            $('.sticky_tabs_padding').addClass('active');
            $('.hunter_content_wrapper').addClass('hunter_color');
            $('.sticky_tabs_padding').removeClass('hunter_color');
            $('.sticky_tabs_block').removeClass('hunter_color');
            $('.tab_right').removeClass('active');
            $('.sticky_blur').removeClass('active');
            $('.sticky_blur_down').removeClass('active');
            $('.hunter').show();
            $('.landejer').hide();

        });

        $('#rightside, #tab_right').on('click', function(){
            $('.gp_right_list').addClass('active_right');
            $('.gp_right').addClass('active_right');
            $('.gp_right_image_hover').addClass('active_right');
            $('.gp_left_list').removeClass('active_left');
            $('.gp_left').removeClass('active_left');
            $('.tab_left').removeClass('active');
            $('.tab_right').addClass('active');
            $('.sticky_tabs_block').addClass('hunter_color');
            $('.sticky_tabs_padding').addClass('hunter_color');
            $('.sticky_tabs_padtop').removeClass('active');
            $('.sticky_tabs_padding').removeClass('active');
            $('.sticky_blur').addClass('active');
            $('.sticky_blur_down').addClass('active');
            $('.hunter').hide();
            $('.landejer').show();
        });
    });
});





