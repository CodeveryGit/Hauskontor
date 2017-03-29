/*document.addEventListener("DOMContentLoaded", function() {
    var slides = Array.prototype.slice.call(document.querySelectorAll("input.slider-radio"));
    var i, interval;

    function change() {
        slides[i].checked = false;
        (i == 3) ? i = 0: i++;
        slides[i].checked = "checked";
    }
    for (i = 0; i < slides.length; i++)
        slides[i].onchange = function() {
            i = slides.indexOf(this);
            clearInterval(interval);
            interval = setInterval(change, 4000);
        };
    i = 0;
    interval = setInterval(change, 4000);
});
*/
document.addEventListener("DOMContentLoaded", function() {
    var slides = document.querySelectorAll("input.slider-radio");
    var slidesArray = Array.prototype.slice.call(slides);
    var links = document.querySelector("#slider-links");
    var linksArray = Array.prototype.slice.call(links.children);
    var buttons = document.querySelector("#slider-buttons");
    var buttonsArray = Array.prototype.slice.call(buttons.children);
    var i, interval;

    function change() {
        slides[i].checked = false;
        (i == 3) ? i = 0: i++;
        slides[i].checked = "checked";
    }

    var style = document.createElement("style");
    style.appendChild(document.createTextNode(""));
    document.head.appendChild(style);
//    style.sheet.insertRule("#image-placeholder img { transition-duration: 0.3s !important; }", 0);

    var arrows = document.querySelectorAll("#slider-arrows label");
    function open()
    {
        for (var p = 0; p < arrows.length; p++) {
            arrows[p].removeEventListener("click", open);
            arrows[p].addEventListener("click", close);
        }
        setTimeout(function () {
            for (var p = 0; p < arrows.length; p++) {
                arrows[p].removeEventListener("click", close);
                arrows[p].addEventListener("click", open);
            }
        }, 400);
    }
    function close(event)
    {
        event.preventDefault();
    }
    for (var p = 0; p < arrows.length; p++)
        arrows[p].addEventListener("click", open);

    for (i = 0; i < slides.length; i++) {
        linksArray[i].onclick = buttonsArray[i].onclick = function (event) {
            var j = (this.parentNode == links) ? linksArray.indexOf(this) : buttonsArray.indexOf(this);
            switch (j - i) {
                case 2:
                    //style.sheet.insertRule("#image-placeholder img { transition-duration: 0.2s !important; }", 0);
                    event.preventDefault();
                    slides[i + 1].checked = "checked";
                    setTimeout(function () {
                        slides[j].checked = "checked";
                        i = j;
                        clearInterval(interval);
                        interval = setInterval(change, 4000);
                    }, 600);
                    break;
                case -2:
                    //style.sheet.insertRule("#image-placeholder img { transition-duration: 0.2s !important; }", 0);
                    event.preventDefault();
                    slides[i - 1].checked = "checked";
                    setTimeout(function () {
                        slides[j].checked = "checked";
                        i = j;
                        clearInterval(interval);
                        interval = setInterval(change, 4000);
                    }, 650);
                    break;
           /*     case 1:
                case -1:
                case 3:
                case -3:
                    i = j;
                    clearInterval(interval);
                    interval = setInterval(change, 4000);
                    break;*/
            }
        };
        slides[i].onchange = function() {
            //style.sheet.insertRule("#image-placeholder img { transition-duration: 0.4s !important; }", 0);
            i = slidesArray.indexOf(this);
            clearInterval(interval);
            interval = setInterval(change, 4000);
        };
    }
    i = 0;
    interval = setInterval(change, 4000);
});