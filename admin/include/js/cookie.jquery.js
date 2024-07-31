function setCookie(c_name, value) {

    // 過期時間(天)
    var expire_days = 1;

    var d = new Date();
    d.setTime( d.getTime() + (expire_days * 24 * 60 * 60 * 1000) );

    var expires = "expires=" + d.toGMTString();
    document.cookie = c_name + "=" + escape(value) + "; " + expires + "; path=/";
    // document.cookie = c_name + "=" + escape(value);
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++)
    {
        var c = ca[i].trim();
        if (c.indexOf(name) == 0)
            return c.substring(name.length, c.length);
    }
    return "";
}
