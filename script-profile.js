$(document).ready(function() {
    var $btnSets = $('#responsive'),
    $btnLinks = $btnSets.find('a');
 
    $btnLinks.click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.user-menu>div.user-menu-content").removeClass("active");
        $("div.user-menu>div.user-menu-content").eq(index).addClass("active");
    });
});

$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.view').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});


//Google Signin
function onSignIn(googleUser){

	var profile = googleUser.getBasicProfile();
	$(".g-signin2").css("display","none");
	$(".container").css("display","block");
	$("#pic").attr('src',profile.getImageUrl());
	$("#name").text(profile.getName());


}

//Image Upload
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result) ;
                $('.file-button').css("display","none");
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

$(function () {
 
  $("#rateyo").rateYo({
    rating: 5,
    precision : 0
  });
});
    var $rateYo = $("#rateYo").rateYo({
         precision : 0
    });
    $(".rateyo").rateYo({
        precision : 0
    });
  $("#rateYo").click(function () {
    /* get rating */
    var rating = $rateYo.rateYo("rating");
    window.alert("Its " + rating + " Yo!");
  });