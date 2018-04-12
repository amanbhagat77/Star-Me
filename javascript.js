
$(document).ready(function(){
    
    $(".view-button").click(function(){
    $(this).text(function(i, text){
          return text === "View More" ? "View Less" : "View More";
      })
    $(".Rest_of_categories").slideToggle("slow");
    
    
 }); 
});

$(document).ready(function(){
    $(".hacker").click(function(){
        $(".c-t").text("top");
        console.log("hacker is pressed");
        
        
        
    })
});
