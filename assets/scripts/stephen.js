// // ============ allows nav bar to tab to front page sections





var isUrl = window.location.href;


// ============ allows nav bar to tab to shift size and color to indicate active section
function growTab1() {
  document.getElementById("tab-1").className = "active-tab";
  document.getElementById("tab-2").className = "inactive-tab";
  document.getElementById("tab-3").className = "inactive-tab";
}

function growTab2() {
  document.getElementById("tab-2").className = "active-tab";
  document.getElementById("tab-1").className = "inactive-tab";
  document.getElementById("tab-3").className = "inactive-tab";
}

function growTab3() {
  document.getElementById("tab-3").className = "active-tab";
  document.getElementById("tab-1").className = "inactive-tab";
  document.getElementById("tab-2").className = "inactive-tab";
}

function showSection1(){
  //document.getElementById("work").className = "reveal";
  $('#work').fadeIn('slow');

  document.getElementById("typefloundry").className = "conceal";
  document.getElementById("blog").className = "conceal";
  //$('#typefloundry').fadeOut('fast');
  //$('#blog').fadeOut('fast');
  $('#typefloundry').removeAttr( 'style' ).addClass('conceal');
  $('#blog').removeAttr( 'style' ).addClass('conceal');
}

function showSection2(){
  //document.getElementById("typefloundry").className = "reveal";
  $('#typefloundry').fadeIn('slow');
  document.getElementById("work").className = "conceal";
  document.getElementById("blog").className = "conceal";
  //$('#work').fadeOut('fast');
  //$('#blog').fadeOut('fast');
  $('#work').removeAttr( 'style' ).addClass('conceal');
  $('#blog').removeAttr( 'style' ).addClass('conceal');
}

function showSection3(){
  //document.getElementById("blog").className = "reveal";
  $('#blog').fadeIn('slow');
  document.getElementById("work").className = "conceal";
  document.getElementById("typefloundry").className = "conceal";
  //$('#work').fadeOut('fast');
  //$('#typefloundry').fadeOut('fast');
  $('#work').removeAttr( 'style' ).addClass('conceal');
  $('#typefloundry').removeAttr( 'style' ).addClass('conceal');
}

// ============ reveals section according to click

document.getElementById("tab-1").addEventListener("click", function revealSection1(){
  event.preventDefault();
  showSection1(); //show section
  growTab1();//make front tab active

    $('html, body').animate({
        scrollTop: $("#work").offset().top
    }, 250);
});

document.getElementById("tab-2").addEventListener("click", function revealSection2(){  
  event.preventDefault();
  showSection2(); //show section
  growTab2(); //make middle tab active
      $('html, body').animate({
        scrollTop: $("#typefloundry").offset().top
    }, 250);
});

document.getElementById("tab-3").addEventListener("click", function revealSection2(){
  event.preventDefault();
  showSection3(); //show section
  growTab3(); //make third tab active
      $('html, body').animate({
        scrollTop: $("#blog").offset().top
    }, 250);
});

window.addEventListener("load", function scrollToSections() {
  if (isUrl === "http://localhost/thundernixon2015wp/" || isUrl === "http://localhost/thundernixon2015wp/#work"){ //&& (isUrl.search("#typefloundry") === -1 && isUrl.search("#blog") === -1)
    showSection1();
    growTab1();
  } 
  
    
  else if (isUrl === "http://localhost/thundernixon2015wp/#typefloundry"){ // (isUrl.search("#typefloundry") >= 0)
    showSection2();
    growTab2();
  } 
  
    
  else if (isUrl === "http://localhost/thundernixon2015wp/#blog"){ //(isUrl.search("#blog") >= 0)
    showSection3();
    growTab3();
  } 
    else {
    return false;
  }
});


//Expands correct tab in deeper pages of portfolio and blog
window.addEventListener("load", function expandCorrectTab() {
  if (isUrl.search("portfolio") >= 0) {
    growTab1();
  } else if (isUrl.search("blog") >= 0) {
    growTab3();
  } else {
    return false;
  }
});

// function deeperTabs() {

//   if (isUrl.search("/portfolio") >= 0){
//     growTab1();
//   } 
//   // else if (window.location.href === "http://localhost/thundernixon2015wp/**" && != "http://localhost/thundernixon2015wp/portfolio/**"){
//   //   growTab3();
//   // }

//   else {
//     return false;
//   }
// }




//attemp to use data attr
// window.addEventListener("load", function hideSections() {
//     document.querySelectorAll("[data-content='work']").className = "reveal";
//     document.querySelectorAll("[data-content='instagram']").className = "conceal";
//     document.querySelectorAll("[data-content='blog']").className = "conceal";
//     });




// =========== Trying simpler way to do tabs on front page, using jQuery ===========

// $('[data-tab]').on('click', function (e) {
//   $(this).addClass('active-tab').siblings('[data-tab]').removeClass('active-tab');
//   $(this).siblings('[data-content=' + $(this).data('tab') + ']').addClass('show').siblings('[data-content]').removeClass('show');
//   e.preventDefault();
// });

//$(this).addClass('active-tab').siblings('[data-tab]').removeClass('active-tab').siblings('[data-content=' + $(this).data('tab') + ']').addClass('active-tab').siblings('[data-content]').removeClass('active-tab');

// $('[data-tab]').on('click', function (e) {
//   $(this).addClass('active-tab').siblings('[data-tab]').removeClass('active-tab').siblings('[data-content=' + $(this).data('tab') + ']').addClass('reveal').siblings('[data-content]').removeClass('reveal');
//   e.preventDefault();
// });



// $(document).ready(function() {
//     $('[data-tab]').on('click', function(e)  {
//         var currentDataValue = jQuery(this).data('tab');
 
//         // Show/Hide Tabs
//         $('[data-content]' + currentDataValue).show().siblings().hide();
 
//         // Change/remove current tab to active
//         $(this).parent('section').addClass('reveal').siblings().removeClass('reveal');
 
//         //e.preventDefault();
//     });
// });


// $(document).ready(function() {
//     $('.main-nav ul a').on('click', function(e)  {
//         var currentAttrValue = jQuery(this).attr('href');
 
//         // Show/Hide Tabs
//         $('.main-nav ul a' + currentAttrValue).show().siblings().hide();
 
//         // Change/remove current tab to active
//         $(this).parent('section').addClass('reveal').siblings().removeClass('reveal');
 
//         //e.preventDefault();
//     });
// });

// =========== Instafeed Load More Button =============

// var foundImages = 0;
// var maxImages = 6;
// var loadButton = document.getElementById('load-more');

// var feed = new Instafeed({
//     // ... other settings
//     get: 'user',
//     clientId: 'f1ac464b95de40a9b203a6c8edf827a8',
//     resolution: 'standard_resolution',
//     limit: 18,
//     success: function() {
//         foundImages = 0;
//     },
//     userId: 209250343,
//     accessToken: '209250343.467ede5.17e3f6e6946a4758b7de4d1809135877',
//     template: '<a href="{{link}}" target="_blank"><img src="{{image}}" /><p>{{caption}}</p></a>',
//     filter: function(image) {
//         if (image.tags.indexOf('typefloundry') >= 0 && foundImages < maxImages) {
//             foundImages = foundImages + 1;
//             return true;
//         } 
//         return false;
//     },
//     // every time we load more, run this function
//     after: function() {
//       // disable button if no more results to load
//       if (!this.hasNext()) {
//         loadButton.setAttribute('disabled', 'disabled').className = "conceal";
//         $('#load-more').hide();
//       }
//     },


// });

// // bind the load more button
// loadButton.addEventListener('click', function() {
//   feed.next();
// });

// // run our feed!
// feed.run();

var loadButton = document.getElementById('load-more');
    var minImages = 6,
        maxImages = 6,
        lastMatchedImages = 0;
    var feed = new Instafeed({
        limit: 18,
        get: 'user',
        success: function() {
            lastMatchedImages = 0;
        },
        //tagName: 'typefloundry',
        clientId: 'f1ac464b95de40a9b203a6c8edf827a8',
        userId: 209250343,
        accessToken: '209250343.467ede5.17e3f6e6946a4758b7de4d1809135877',
        resolution: 'standard_resolution',
        template: '<a href="{{link}}" target="_blank"><img src="{{image}}" /><p>{{caption}}</p></a>',
        filter: function(image)
        {
            if(image.tags.indexOf('typefloundry') >= 0 && lastMatchedImages < maxImages) {
                    lastMatchedImages = lastMatchedImages + 1;
                    return true;
                }
                else{
                    image.className = "fidden";
                    image.style = "display:none;";
                }
                //return true;
            //}
            return false;
        },
          after: function() {
            if(this.hasNext()) {
                if(lastMatchedImages < minImages) {
                    feed.next();
                }
            } else {
              loadButton.setAttribute('disabled', 'disabled');
              $('#load-more').hide();
            }
          },
    });

    // bind the load more button
    loadButton.addEventListener('click', function() {
        numItems = $('.fidden').length;
        $('.fidden').show().removeClass( "fidden" );
        lastMatchedImages = numItems;
        feed.next();
    });

    // run our feed!
    feed.run();








//first implementation attempt below

//feed.run();

// var loadButton = document.getElementById('load-more');
// var feed = new Instafeed({
//   // every time we load more, run this function
//   after: function() {
//     // disable button if no more results to load
//     if (!this.hasNext()) {
//       loadButton.setAttribute('disabled', 'disabled');
//     }
//   },
// });



//==============lazy line painter ===============



// /* 
//  * Lazy Line Painter - Path Object 
//  * Generated using 'SVG to Lazy Line Converter'
//  * 
//  * http://lazylinepainter.info 
//  * Copyright 2013, Cam O'Connell  
//  *  
//  */ 

 
// var pathObj = {
//     "yo-hero": {
//         "strokepath": [
//             {
//                 "path": "M55.208,119.056 C42.708,132.251 -10.764,159.334 3.125,96.834 C17.013,34.334 66.319,3.779 94.097,1.001 C121.874,-1.777 156.97,11.71 109.053,106.154 C61.137,200.599 83.68,225.306 107.986,225.306 C149.5,225.306 202.924,168.924 233.354,83.313 C252.072,30.651 251.743,20.701 248.375,20.701 C242.832,20.701 235.105,39.229 216.319,94.056 C163,249.667 156.333,366.973 64.93,366.973 C20.333,366.973 11.667,342.68 11.667,328.333 C11.667,284.578 65.871,285.501 132,251 C189.106,221.207 256.465,155.888 289.25,121.25 C259.75,143.75 250.173,169.489 250.173,191.039 C250.173,207.75 267.667,221.14 289.983,221.14 C325.776,221.14 351.302,202.91 351.302,172.91 C351.302,143 346.514,117.5 323,117.5 C302.5,117.5 295,133.165 295,144.806 C295,159.181 304.75,165.5 326,165.5 C346.833,165.5 488.919,127.869 488.919,63.628 C488.919,31.993 454.683,12.868 377.039,12.868 C341.303,12.868 319.65,24.458 319.65,39.692 C319.65,89.616 537.834,119.5 537.834,214.003 C537.834,230.842 529.901,247.199 507.986,261.417 C403.771,329.03 351.473,328.703 289,328.703 C231.333,328.703 208.263,308.533 208.263,294.23 C208.263,281.311 227.823,269.571 276.058,268.322 C378.145,265.678 369.097,334.334 413.541,335.029 C457.986,335.723 494.313,238.976 408.897,241.754",
//                 "duration": 2500
//             },
//         ],
//         "dimensions": {
//             "width": 542,
//             "height": 371
//         }
//     }
// }; 
 
 /* 
 * Lazy Line Painter - Path Object 
 * Generated using 'SVG to Lazy Line Converter'
 * 
 * http://lazylinepainter.info 
 * Copyright 2013, Cam O'Connell  
 *  
 */ 
 
/* 
 * Lazy Line Painter - Path Object 
 * Generated using 'SVG to Lazy Line Converter'
 * 
 * http://lazylinepainter.info 
 * Copyright 2013, Cam O'Connell  
 *  
 */ 
 
var pathObj = {
    "yo-hero": {
        "strokepath": [
            {
                "path": "M155.555804,490.313435 L155.555804,490.313435 C153.216609,497.15732 144.293015,504.607626 127.225557,504.607626 C74.2904471,504.607626 10.9589163,460.945369 10.9589163,366.517077 C10.9589163,279.365827 76.8895523,205.036033 158.41482,205.036033 C213.429214,205.036033 244.878387,246.35924 244.878387,290.368022 C244.878387,337.582168 211.263293,378.472218 151.483872,378.472218 C91.7044522,378.472218 31.0586634,321.208822 31.0586634,227.38695 C31.0586634,141.102014 113.450299,52.0448721 224.432093,52.0448721 C327.703207,52.0448721 381.504685,95.6204971 381.504685,166.831558 C381.504685,242.634087 330.64886,310.726415 247.564129,310.726415 C177.215014,310.726415 148.624857,253.982808 148.624857,200.877723 C148.624857,112.600264 219.926977,22.4169123 322.504997,22.4169123 C362.098033,22.4169123 369.202254,42.0822541 369.202254,60.9679126 C369.202254,149.245372 172.709899,250.950707 172.709899,345.205737 C172.709899,373.187699 186.311883,388.867994 209.184009,388.867994 C305.437539,392.853041 494.305852,179.653015 494.305852,132.438868 C494.305852,125.161825 491.100289,118.837729 483.909431,118.837729 C420.404627,118.837729 343.124565,606.659487 126.359189,606.659487 C80.7882102,606.659487 45.7002896,586.907514 45.7002896,544.198204 C45.7002896,483.382918 124.106631,456.440533 223.998908,435.648983 C313.581402,417.023218 424.99638,373.967382 516.484884,264.378584 C490.407195,291.840757 475.332384,311.072941 475.332384,354.215409 C475.332384,394.065881 503.662631,420.575108 546.114683,420.575108 C594.284767,420.575108 648.692703,384.969578 648.692703,308.127472 C648.692703,245.319662 611.438861,231.112103 586.487451,231.112103 C549.926704,231.112103 519.60381,255.802069 519.60381,295.132752 C519.60381,332.90407 545.768136,360.539506 594.19813,360.539506 C662.294687,360.539506 723.893481,313.238728 723.893481,231.285365 C723.893481,137.723387 608.926393,8.20935269 444.229758,8.20935269 C335.673796,8.20935269 302.318613,65.0395913 302.318613,97.2664949 C302.318613,249.651235 759.327949,105.84301 759.327949,238.475777 C759.327949,280.492036 713.410423,302.66969 678.842324,302.66969 C611.958682,302.66969 556.597741,271.049206 556.597741,194.2071 C556.597741,143.874221 603.554909,93.0215533 679.708692,93.0215533 C749.191439,93.0215533 830.110248,144.827167 830.110248,277.979723 C830.110248,412.605014 723.027113,538.65379 547.154325,538.65379 C458.351563,538.65379 381.677959,476.539032 280.139581,476.539032 C200.260414,476.539032 174.529272,519.07508 174.529272,553.294507 C174.529272,588.380249 199.653956,629.530193 273.381908,629.530193 C387.13608,629.530193 490.147284,474.113351 578.950046,474.113351 C626.513672,474.113351 648.519429,506.253624 648.519429,533.196008 C648.519429,577.984474 591.772299,620.173995 510.506942,620.173995 C406.802643,620.173995 354.560628,585.001622 354.560628,527.564963 C354.560628,484.68239 388.348996,463.37105 434.959616,463.37105 C548.280604,463.37105 574.271657,581.363101 671.131645,581.363101 C746.41906,581.363101 789.304296,528.084752 789.304296,469.002095 C789.304296,406.800706 751.790544,370.068966 706.219566,370.068966 C686.379729,370.068966 674.337208,379.078638 674.337208,393.112935 C674.337208,404.115131 680.575061,411.218911 692.444308,411.218911 C701.367902,411.218911 712.717329,400.389978 706.046292,386.87547",
                "duration": 3500
            }
        ],
        "dimensions": {
            "width": 841,
            "height": 638
        }
    }
}; 
 
 
/* 
 Setup and Paint your lazyline! 
 */ 
 
 $(document).ready(function(){ 
 $('#undefined').lazylinepainter( 
 {
    "svgData": pathObj,
    "strokeWidth": 2,
    "strokeColor": "#e09b99"
}).lazylinepainter('paint'); 
 });
 
 
/* 
 Setup and Paint your lazyline! 
 */ 
 
 $(document).ready(function(){ 
 $('#undefined').lazylinepainter( 
 {
    "svgData": pathObj,
    "strokeWidth": 2,
    "strokeColor": "#e09b99"
}).lazylinepainter('paint'); 
 });
 
/* 
 Setup and Paint your lazyline! 
 */ 
 
  $(document).ready(function(){ 
  $('#yo-hero').lazylinepainter( 
  {
     "svgData": pathObj,
     "strokeWidth": 4,
     "strokeColor": "#FFF2EC",
 }).lazylinepainter('paint'); 
   
  });


window.addEventListener("load", function jsTest() {
  console.log("JS seems to be working.");
});
