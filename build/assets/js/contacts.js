document.addEventListener("DOMContentLoaded", function () {
    var popup = document.querySelector("#contacts-popup");
    var greyBackground = document.querySelector("#grey-background");
    function close()
    {
        popup.style.display = "none";
        greyBackground.style.display = "none";
    }
    popup.querySelector("button").addEventListener("click", close);
    popup.querySelector(".close").addEventListener("click", close);
    var form = document.querySelector("form#contact");
    form.addEventListener("submit", function (event) {
        event.preventDefault();
        popup.style.display = "block";
        greyBackground.style.display = "block";
        var xhr = new XMLHttpRequest();
        var body = new FormData(form);
        body.append("action", "contacts_mail");
        xhr.open("POST", "/wp-admin/admin-ajax.php", true);
        xhr.send(body);
    });
});