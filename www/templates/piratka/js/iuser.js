if (typeof Website2APK !== "undefined") {
    var deviceID = Website2APK.getUniqueDeviceID();
    var fireToken = Website2APK.getFirebaseDeviceToken();
    var versionAPK = Website2APK.getAppVersionName();
}

$(document).ready(function () {
// Tg Identity
    const itg = window.Telegram.WebApp;
    let itgid;
    if (itg && itg.initDataUnsafe && itg.initDataUnsafe.user && itg.initDataUnsafe.user.id) {
        itgid = itg.initDataUnsafe.user.id;
        itg.expand();
        let firstname = itg.initDataUnsafe.user.first_name;
        let lastname = itg.initDataUnsafe.user.last_name;
        let tgusername = itg.initDataUnsafe.user.username;
        console.log(itgid + '<br>' + firstname + '<br>' + lastname + '<br>' + tgusername);
        var tgapi = "/engine/ajax/controller.php?mod=tgapp&id="+itgid;
        var asettings = {
            "url": tgapi,
            "method": "GET",
            "timeout": 0,
        };
        $.ajax(asettings).done(function (response) {
            var statresponse = $.parseJSON(response.success);
            console.log(statresponse);
    });
    } else {
        //  console.log("TgID is not available.");
    }

// apk Identity

    if (typeof Website2APK !== "undefined") {
        $('#apkidentitiy').html('<p>Device id: ' + deviceID + '</p><p>Fire id: ' + fireToken + '</p><p>Version: ' + versionAPK + '</p>');
        $.ajax({
            url: "/engine/ajax/controller.php?mod=apk",
            method: "POST",
            data: {action: 'register', device_id: deviceID, fire_id: fireToken, apk_version: versionAPK},
            success: function (data) {
                $('#apkidentitiy').append('<p>Apk auth: OK</p>');
            },
            error: function (errMsg) {
                $('#apkidentitiy').append('<p>Apk auth error: ' + errMsg + '</p>');
            }
        });
    }

// VERSION CHECK

    var currentVersion = versionAPK;
    // var currentVersion = '1.0.0';
    var lastShownDate = getCookie("popupLastShown");
    var today = new Date().toISOString().split('T')[0];

    /**
     $.getJSON(dle_root + 'engine/ajax/apkvercheck.php', function(data) {
     if (data.version && data.file) {
     $('.apklatestlink').attr('href', data.url);
     if (data.version < currentVersion) {
     if(typeof Website2APK !== "undefined") {
     console.log('APK user: New version found');
     $('.apklatestlink').text('Скачать новую версию (' + data.version + ')');
     if (lastShownDate !== today) {
     $('body').append('<div id="popupupdOverlay"></div>\n' +
     '<div id="updatePopup">\n' +
     '    <h3>Доступна новая версия приложения!</h3>\n' +
     '    <p>Версия <strong id="popupVersion"></strong> доступна.</p>\n' +
     '    <a id="popupDownload" href="/engine/ajax/controller.php?mod=download_apk" target="_blank">Скачать сейчас</a>\n' +
     '    <button id="closeupdPopup">Позже</button>\n' +
     '</div>\n');
     $("#popupVersion").text(data.version);
     $("#popupDownload").attr("href", data.url);
     $("#updatePopup, #popupupdOverlay").fadeIn();
     setCookie("popupLastShown", today, 1);
     }
     }
     } else {
     if(typeof Website2APK !== "undefined") {
     console.log('APK user: Has latest version');
     }
     }
     } else {
     console.log('APK not found.');
     }
     });
     **/

    $(document).on('click', "#closeupdPopup, #popupupdOverlay", function () {
        $("#updatePopup, #popupupdOverlay").fadeOut();
    });

    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + value + "; path=/" + expires;
    }

    // Function to get a cookie value
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
});
