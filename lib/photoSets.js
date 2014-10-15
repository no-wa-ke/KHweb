

var globalTag = null,
    pageNum = null,
    ppp = 23,
    totalPosts = null,
    tum, layouts, io, tumblrPage = "harunakworks.tumblr.com";
    var gotWork = false;

var getWorks = function() {

    if(gotWork) {  return; } 
        gotWork = true;

    console.log("ready");

    var a = function(a) {
            $(".tumblr-post").remove(), $(".load-more").remove();
            var b = a;
            tum = b, totalPosts = b["posts-total"], console.log("total posts: " + b["posts-total"]), console.log("loaded posts: " + b.posts.length), console.log(b);
            var e = ppp,
                f = ["photo-url-1280"],
                g = ["photo-url-400"];
            for (i = 0; e > i; i++) {
                var h = b.posts[i];
                switch (h.date.split(" "), h.type) {
                    case "photo":
                        if (0 == h.photos.length) {
                            var j = "<div class='onepic mason'><a class='photoset-cell highres-link cboxElement' rel='print-gallery'href='" + h["photo-url-1280"] + "'><img class = 'lazy' src='" + h[f] + "' /></a>" + "</div>";
                            $("#tumblr-wrap").append("<div class = 'totalwrap center'><div class = 'caption'>" + h["photo-caption"] + "</div>" + j +"</div>" + "</div>")
                        } else {
                            var k = h.photos.length,
                                l = "";
                            for (c = 0; 1 > c; c++) {
                                var m = "<div class = 'caption'>" + h["photo-caption"] + "</div>";
                                h.photos[c].width > 200 && (m = "<div class = 'caption'>" + h["photo-caption"] + "</div>")
                            }
                            if (2 == k) {
                                for (d = 0; k > d; d++) {
                                    var n = "<img class ='lazy'src='" + h.photos[d][g] + "'data-highres='" + h.photos[d][f] + "'>";
                                    l += n
                                }
                                layouts = 2
                            }
                            if (3 == k) {
                                for (d = 0; k > d; d++) {
                                    var o = "<img class ='lazy'src='" + h.photos[d][g] + "'data-highres='" + h.photos[d][f] + "'>";
                                    l += o
                                }
                                layouts = 3
                            }
                            if (4 == k) {
                                for (d = 0; k > d; d++) {
                                    var p = "<img class ='lazy' src='" + h.photos[d][g] + "'data-highres='" + h.photos[d][f] + "'>";
                                    l += p
                                }
                                layouts = 4
                            }
                            if (5 == k) {
                                for (d = 0; k > d; d++) {
                                    var q = "<img class ='lazy' src='" + h.photos[d][g] + "'data-highres='" + h.photos[d][f] + "'>";
                                    l += q
                                }
                                layouts = 5
                            }
                            if (6 == k) {
                                for (d = 0; k > d; d++) {
                                    var r = "<img class ='lazy' src='" + h.photos[d][g] + "'data-highres='" + h.photos[d][f] + "'>";
                                    l += r
                                }
                                layouts = 6
                            }
                            if (7 == k) {
                                for (d = 0; k > d; d++) {
                                    var s = "<img class ='lazy' src='" + h.photos[d][g] + "'data-highres='" + h.photos[d][f] + "'>";
                                    l += s
                                }
                                layouts = 7
                            }
                            switch (layouts) {
                                case 2:
                                    io = "2";
                                    break;
                                case 3:
                                    io = "3";
                                    break;
                                case 4:
                                    io = "4";
                                    break;
                                case 5:
                                    io = "5";
                                    break;
                                case 6:
                                    io = "6";
                                    break;
                                case 7:
                                    io = "7"
                            }
                            totalWrap = "<div class='totalwrap center'>", imgWrap = "<div class ='photoset-grid-custom" + io + "'style = 'visibility:hidden;'>", totalWrap = totalWrap + m + imgWrap + l + "</div>", $("#tumblr-wrap").append(totalWrap), allWrap = ".totalwrap", $(allWrap).css({
                                
                                margin: "30px auto 260px auto"
                            }), $(".photoset-grid-custom2").photosetGrid({
                                gutter: "5px",
                                layout: "11",
                                highresLinks: !0,
                                rel: "print-gallery",
                                onComplete: function() {
                                    $(".photoset-grid-custom2").attr("style", ""), $(".photoset-grid-custom2 a").colorbox({
                                        photo: !0,
                                        scalePhotos: !0,
                                        maxHeight: "90%",
                                        maxWidth: "90%"
                                    })
                                }
                            }), $(".photoset-grid-custom3").photosetGrid({
                                gutter: "5px",
                                layout: "12",
                                highresLinks: !0,
                                rel: "print-gallery",
                                onComplete: function() {
                                    $(".photoset-grid-custom3").attr("style", ""), $(".photoset-grid-custom3 a").colorbox({
                                        photo: !0,
                                        scalePhotos: !0,
                                        maxHeight: "90%",
                                        maxWidth: "90%"
                                    })
                                }
                            }), $(".photoset-grid-custom4").photosetGrid({
                                gutter: "5px",
                                layout: "13",
                                highresLinks: !0,
                                rel: "print-gallery",
                                onComplete: function() {
                                    $(".photoset-grid-custom4").attr("style", ""), $(".photoset-grid-custom4 a").colorbox({
                                        photo: !0,
                                        scalePhotos: !0,
                                        maxHeight: "90%",
                                        maxWidth: "90%"
                                    })
                                }
                            }), $(".photoset-grid-custom5").photosetGrid({
                                gutter: "5px",
                                layout: "122",
                                highresLinks: !0,
                                rel: "print-gallery",
                                onComplete: function() {
                                    $(".photoset-grid-custom5").attr("style", ""), $(".photoset-grid-custom5 a").colorbox({
                                        photo: !0,
                                        scalePhotos: !0,
                                        maxHeight: "90%",
                                        maxWidth: "90%"
                                    })
                                }
                            }), $(".photoset-grid-custom6").photosetGrid({
                                gutter: "5px",
                                layout: "132",
                                highresLinks: !0,
                                rel: "print-gallery",
                                onComplete: function() {
                                    $(".photoset-grid-custom6").attr("style", ""), $(".photoset-grid-custom6 a").colorbox({
                                        photo: !0,
                                        scalePhotos: !0,
                                        maxHeight: "90%",
                                        maxWidth: "90%"
                                    })
                                }
                            }), $(".photoset-grid-custom7").photosetGrid({
                                gutter: "5px",
                                layout: "313",
                                highresLinks: !0,
                                rel: "print-gallery",
                                onComplete: function() {
                                    $(".photoset-grid-custom7").attr("style", ""), $(".photoset-grid-custom7 a").colorbox({
                                        photo: !0,
                                        scalePhotos: !0,
                                        maxHeight: "90%",
                                        maxWidth: "90%"
                                    })
                                }
                            })
                        }
                }
            }
            // TODO: make this work.
            // b.posts.length < ppp && $("#tumblr-wrap").append("<span class='load-more'>Load more...</span>")
        },
        b = function() {
            $.getJSON("http://" + tumblrPage + "/api/read/json?callback=?&num=30&", function(b) {
                a(b)
            })
        };
        
        b();
        
         $('#loading').fadeOut(3000,'linear');

         }

