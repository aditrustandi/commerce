/* ===========================================================
 * script.js v1.0
 * ===========================================================
 * Copyright 2015 Shivam Pandya - Tutorial Drive.
 * https://www.github.com/tutorialdrive
 *
 * Bootstrap Vertical Image Showcase v1.0
 * Create an Vertical Thumbnail Carousel For Twitter Bootstrap v3.0.3
 *
 * 
 * License: MIT License
 * http://opensource.org/licenses/MIT
 *
 * ========================================================== */

$(document).ready(function () {
    
    
    $('#myCarousel').carousel({
        interval: false
        //interval: 2000
    });

    $('.small-thumbnail img').click(function () {
        var dataDisplay = parseInt($(this).attr("data-display"));
        var setId   = "#"+dataDisplay+'.slider-item';
        $('.small-thumbnail img').removeClass('bordered');
        $('.small-thumbnail').find("[data-display='" + dataDisplay + "']").addClass('bordered');
        $('.single-container .slider-item').removeClass('active');
        $('.small-thumbnail').removeClass('active');
        $(setId).addClass('active');
        $(this).addClass('active');
        console.log(setId);
    });
    

});
