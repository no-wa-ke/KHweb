var quit = false;

function callStore() {
    if (quit) {
        return;

    }
    quit = true;

    var iframeText = '<iframe src="https://harunak.stores.jp/#!/" scrolling = "yes" style="width:100%; height:100%; border:none; margin:0; padding:0;z-index:1;">your browser does not support iframe</iframe>';

    $("#storeWrap").append(iframeText);

    console.log("got store");
}


$(document).ready(function() {



    $("#fullpage").fullpage({

       
        scrollingSpeed: 450,
        anchors: ["top", "news", "works", "store", "profile", "contact"],
        sectionsColor: ["transparent", "#FFFAFA", "#FFFFFF", "none", "rgba(255, 255, 255,0.8)", "transparent"],
        scrollOverflow: true,
        'afterLoad': function(anchorLink, index) {
            if (index == 3) {
                console.log("section3");
                getWorks();
                $("#fullpage").fullpage.reBuild();
            }
            if (index == 4) {
                console.log("section4");
                callStore();
                $("#fullpage").fullpage.reBuild();
            }
        }
    });

});
