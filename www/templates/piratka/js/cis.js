$(document).ready(function () {
    $.ajax({
        url: dle_root + 'engine/ajax/custom_catlist_kong.php',
        type: 'GET',
        success: function (output) {
            if (output.error) {
                //console.log(dle_info);
            } else {
                //console.log(output);
                $.each(output, function (index, row) {
                    var menuitem = '';
                    if (row.news_count > 0) {
                        menuitem = '<li><a data-parent="' + row.parent_id + '" href="/' + row.parent_link + '/' + row.category_link + '">' + row.category_name + '</a></li>';
                        $('.side-block__menu-hidden[data-parent="' + row.parent_id + '"]').append(menuitem);
                    }
                });
            }
        },
        error: function (output) {
            //console.log('Ajax menu load error');
        }
    }).always(function () {
        //console.log('Ajax call - end');
    });

    function removebr() {
        if ($(".nobrpls").length > 0) {
            $('.nobrpls').html(function (i, html) {
                return html.replace(/<br\s*\/?>/gi, ', ');
            });
        }
        if ($(".hidebrpls").length > 0) {
            $('.hidebrpls .spoiler-content').html(function (i, html) {
                return html.replace(/<br\s*\/?>/gi, ', ');
            });
        }
    }

    removebr();
});



$(document).ready(function() {
  var endsoonnum  = parseInt($('.infobanner.notfix.endsoon').data('end'));
  if(endsoonnum < 4){
      $('.infobanner.notfix.endsoon').show();
  }


});

$('#tgumail').click(function(tm){
    tm.preventDefault();
    let url = '/user/'+ $(this).data('uid');
    let newm =  $('#userinfo input[name="email"]').val();
    $.ajax({
        url: url,
        method: "POST",
        data: {action:'set_user_email',email:newm},
        success: function(data){
            let sr = data;
            if (sr === 'OK') {
                $('#eupdlog').html('<span style="color:green">E-mail успешно обновлен.</span>');
            }else{
                $('#eupdlog').html('<span style="color:red">Проверьте корректность введенного E-mail.</span>');
            }
            },
        error: function(errMsg) {
            alert(JSON.stringify(errMsg));

        }
    });

});
$('.form__content.form__content--sec-code a').click(function(){

    $(this).addClass('loaded');

});

$(document).ready(function() {
    if($(".spoiler-content").length > 0) {
        var $spoiler = $(".spoiler-content");
        var $button = $(".show-more");

        if ($spoiler[0].scrollHeight > $spoiler.outerHeight()) {
            $button.show();
        }

        $button.click(function () {
            if ($spoiler.hasClass("expanded")) {
                $spoiler.removeClass("expanded").css("max-height", "4.5em");
                $(this).text("Показать больше");
            } else {
                $spoiler.addClass("expanded").css("max-height", "none");
                $(this).text("Показать меньше");
            }
        });
    }
});

$(document).ready(function() {
    if ($('.moviefacts').length > 0) {
        $('.moviefacts').each(function() {
            var $this = $(this);
            var fullText = $this.text();
            var truncatedText = fullText.length > 200 ? fullText.substring(0, 200) + '...' : fullText;
            if (fullText.length > 200) {
                $this.text(truncatedText);
                $this.append(' <a href="#" class="read-more-facts">Подробнее</a>');
            }
            $('.moviefacts').addClass('processed');

            $this.on('click', '.read-more-facts', function(e) {
                e.preventDefault();
                if ($this.hasClass('expanded')) {
                    $this.removeClass('expanded');
                    $this.text(truncatedText);
                    $this.append(' <a href="#" class="read-more-facts">Подробнее</a>');
                } else {
                    $this.addClass('expanded');
                    $this.text(fullText);
                    $this.append(' <a href="#" class="read-more-facts">Свернуть</a>');
                }
            });

        });
    }
});

// Branding check
function checkDivWithBr5() {
    const div = document.querySelector('div[id^="br5"]');
    if (div) {
        document.body.classList.add('has-branding');
    }
}
const observer = new MutationObserver(() => {
    checkDivWithBr5();
});
observer.observe(document.body, {
    childList: true,
    subtree: true
});
checkDivWithBr5();


// NEW OWL WITH FILTER
var owl = $('#owl-carou');
owl.on('initialized.owl.carousel', function (event) {
    $('.owl-item').each(function (index) {
        var thisfildata = $(this).find('.bposterlink').data('filparent');
        $(this).addClass(thisfildata);
    });
});
const owlargs = {
    loop: !1, rewind: !1, dots: !1, autoplay: !0, autoplayTimeout: 12e3, nav: !0, margin: 15,
    navText: ['<span class="fal fa-chevron-left"></span>', '<span class="fal fa-chevron-right"></span>'],
    responsive: {
        0: {items: 3, slideBy: 3, dots: !0, nav: !1, margin: 10},
        480: {items: 3, slideBy: 1, dots: !0, nav: !1},
        760: {items: 4, slideBy: 2, dots: !0, nav: !1},
        950: {items: 5, slideBy: 2, dots: !0, nav: !1},
        1220: {items: 6, slideBy: 2, dots: !0, nav: !0, margin: 15},
        1230: {items: 7, slideBy: 3, dots: !0, nav: !0, margin: 15}
    }
};
owl.owlCarousel(owlargs);
$(document).ready(function() {
// OWL FILTER
    $('.owl-filter-bar').on('click', '.item', function () {
        var filterValue = $(this).data('filter');
        $('.owl-filter-bar .item').removeClass('active');
        $(this).addClass('active');
        console.log(filterValue);
        if (filterValue === 'all') {
            owl.owlCarousel('destroy');
            $('#owl-carou').empty(); // Show all items
            var allraw = $('.filteredslidesholder').html();
            $('#owl-carou').html(allraw);
            owl.owlCarousel(owlargs);
        } else {
            owl.owlCarousel('destroy');
            $('#owl-carou').empty();
            $('.filteredslidesholder .bposterlink').each(function (index) {
                if ($(this).data('filparent') === filterValue) {
                    $(this).clone().appendTo('#owl-carou');
                }
            });
            // Reinitialize carousel with filtered items

            owl.owlCarousel(owlargs);
        }

    });
});
// END OWL

//FRESH EPISODES
$(document).ready(function () {
    var $freshcontainer = $('.side-block__content');
    if (!$freshcontainer.length) return;
    function formatDate(dateObj) {
        const months = [
            "января", "февраля", "марта", "апреля", "мая", "июня",
            "июля", "августа", "сентября", "октября", "ноября", "декабря"
        ];
        const day = dateObj.getDate();
        const month = months[dateObj.getMonth()];
        const year = dateObj.getFullYear();
        return `${day} ${month} ${year}`;
    }

    const today = new Date();
    const yesterday = new Date();
    yesterday.setDate(today.getDate() - 1);
    const todayStr = 'Сегодня';
    const yesterdayStr = 'Вчера';
    function insertSubtitleBeforeFirst(prefix, label, dateObj) {
        const $firstMatch = $freshcontainer.find('[data-fresh]').filter(function () {
            return $(this).attr('data-fresh').startsWith(prefix + ',');
        }).first();

        if ($firstMatch.length) {
            const formattedDate = formatDate(dateObj);
            const subtitle = `<div class="upd-box-subtitle">${label} | ${formattedDate}</div>`;
            $(subtitle).insertBefore($firstMatch);
        }
    }
    insertSubtitleBeforeFirst(todayStr, todayStr, today);
    insertSubtitleBeforeFirst(yesterdayStr, yesterdayStr, yesterday);

    // Insert "Ранее" before first item not today or yesterday
    const $olderItem = $freshcontainer.find('[data-fresh]').filter(function () {
        const val = $(this).attr('data-fresh');
        return !val.startsWith(todayStr + ',') && !val.startsWith(yesterdayStr + ',');
    }).first();

    if ($olderItem.length) {
        $('<div class="upd-box-subtitle">Ранее</div>').insertBefore($olderItem);
    }


    $('.conttext p.spoiler').click(function(){
        $(this).next('section.spoiler-text').slideDown();
        $(this).remove();
    });


});

$(document).ready(function () {
        $('.dopl').one('click', function() {
            $('.tab-switch').slideDown();
            const nhost = window.location.host;
            fetch('/stater/hit/'+pid+'?host='+nhost+'&version=rw', {method:"POST",headers:{"Content-Type":"application/json"},body:""});
            appendplayer1();

        });

    $(document).on('click','.pmovie__player.tabs-block .tab-button.l-light', function () {

        var tabId = $(this).data('tab');

        if(tabId == '2'){
            $('.dplc').html('<div class="preloader"><div class="cloader"></div></div>');
            console.log('Switch to player 2');
            $('.tabs-block__content.video-inside[data-tab="1"]').html('');
            $.ajax({
                url: '',
                type: "POST",
                data: JSON.stringify({x:'y'}),
                headers: { 'x': 'y' },
                contentType: "application/json",
                success: function(data){$('.dplc').html(data);player.api("play");},
                error: function(errMsg) {
                    $('.dplc').html(errMsg);
                }
            });
        }
        if(tabId == '1'){
            $('.dplc').html('');
            console.log('Switch to player 1');
            appendplayer1();
        }

        // Update active tab button
        $('.tab-button').addClass('l-light');
        $(this).removeClass('l-light');

        $('.tabs-block__content').removeClass('d-none').hide();
        $('.tabs-block__content[data-tab="' + tabId + '"]').show();
    });
});


function appendplayer1(){
    $('.tabs-block__content.video-inside[data-tab="1"]').append('<iframe id="player2" style="width:100%;height:auto;aspect-ratio: 16/9" src="https://api.domem.ws/embed/kp/'+kpid+'" allow="autoplay *" width="640" height="360" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen=""></iframe>');
}
