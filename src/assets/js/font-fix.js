var fonts = [];

if (navigator.userAgent.toLowerCase().indexOf("chrome") != -1 &&
    navigator.vendor.toLowerCase().indexOf("google") != -1)
{
    fonts.push(new FontFace("Lato Medium",
        "url(/wp-content/themes/Hauskontor/assets/fonts/Lato-Semibold.woff2) format('woff2'),\
         url(/wp-content/themes/Hauskontor/assets/fonts/Lato-Semibold.woff) format('woff'),\
         url(/wp-content/themes/Hauskontor/assets/fonts/Lato-Semibold.ttf) format('ttf'),\
         url(/wp-content/themes/Hauskontor/assets/fonts/Lato-Semibold.svg) format('svg'),\
         url(/wp-content/themes/Hauskontor/assets/fonts/Lato-Semibold.eot) format('eot')",
        {
            style: "normal",
            weight: "400"
        }));
    fonts.push(new FontFace("Lato Regular",
        "url(/wp-content/themes/Hauskontor/assets/fonts/Lato-Medium.woff2) format('woff2'),\
         url(/wp-content/themes/Hauskontor/assets/fonts/Lato-Medium.woff) format('woff'),\
         url(/wp-content/themes/Hauskontor/assets/fonts/Lato-Medium.ttf) format('ttf'),\
         url(/wp-content/themes/Hauskontor/assets/fonts/Lato-Medium.svg) format('svg'),\
         url(/wp-content/themes/Hauskontor/assets/fonts/Lato-Medium.eot) format('eot')",
        {
            style: "normal",
            weight: "400"
        }));
}
if (navigator.userAgent.toLowerCase().indexOf("firefox") != -1)
{
      fonts.push(new FontFace("Lato Black Italic",
            "url(/wp-content/themes/Hauskontor/assets/fonts/Lato-BoldItalic.woff2) format('woff2'),\
             url(/wp-content/themes/Hauskontor/assets/fonts/Lato-BoldItalic.woff) format('woff'),\
             url(/wp-content/themes/Hauskontor/assets/fonts/Lato-BoldItalic.ttf) format('ttf'),\
             url(/wp-content/themes/Hauskontor/assets/fonts/Lato-BoldItalic.svg) format('svg'),\
             url(/wp-content/themes/Hauskontor/assets/fonts/Lato-BoldItalic.eot) format('eot')",
            {
                style: "normal",
                weight: "400"
            }));
}

for (var i = 0; i < fonts.length; i++)
{
    fonts[i].load();
    document.fonts.add(fonts[i]);
}