$(document).ready(function(){"use strict";$("#navbar-open").on("click",function(e){$(".navbar-outer").show();e.preventDefault();setTimeout(function(){$(".navbar-inner").addClass("active")},300);$(".navbar-menu a").each(function(i){setTimeout(function(){$(".navbar-menu a").eq(i).addClass("active")},600+100*i)})});$("#close-btn, nav.main-navbar a").on("click",function(e){e.preventDefault();$(".navbar-inner").removeClass("active");setTimeout(function(){$(".navbar-outer").hide()},600);setTimeout(function(){$(".navbar-menu a").removeClass("active")},300)});$(".counter").counterUp({delay:20,time:2e3});$("ul.navbar-menu a").bind("click",function(e){var anchor=$(this);$("html, body").stop().animate({scrollTop:$(anchor.attr("href")).offset().top},1e3);e.preventDefault()});var mixer=mixitup("#gallery");
    $("#contact-form").validate({messages:{username:"please enter your name",
            useremail:"please enter your email address",
            subject:"please enter the subject",
            message:"please enter your message"}});
    $(".form-control").on("focus",function(){$(this).siblings("label").not(".error").addClass("active")});
    $(".form-control").on("blur",function(){if($(this).val()===""){$(this).siblings("label").not(".error").removeClass("active")}});
    $("#leave-form").validate({messages:{
            emplname:"please enter your name",
            emplnumber:"please enter your company number",
            emplcontact:"please enter your contact",
            emplsite:"please enter site",
            emplemail:"please enter your email address",
            empldate:"please enter your employment date",
            leaveSdate:"please enter leave start date",
            leaveEdate:"please enter leave end date",
            leave_type:"please choose one",
            reason:"please enter the reason for leave",
            empldays:"please enter days Taken",
            empldayspaid:"please enter the subject",
            empldaysupaid:"please enter the subject",
            reason:"please enter the subject",
            
            message2:"please enter additional info "}});
    $(".form-control").on("focus",function(){$(this).siblings("label").not(".error").addClass("active")});
    $(".form-control").on("blur",function(){if($(this).val()===""){$(this).siblings("label").not(".error").removeClass("active")}});
    (new WOW).init();
    $(window).on("scroll",function(){if($(this).scrollTop()>1e3){$("#scrollTop").addClass("visible")}else{$("#scrollTop").removeClass("visible")}});$("#scrollTop").on("click",function(){$("html, body").animate({scrollTop:0},1e3)});$(window).on("load",function(){$(".preloader").fadeOut(300,function(){$(this).remove()})})});
