$("button").on("mouseenter",function(){
	$(this).css("background-color","#006400")
});

$("button").on("mouseleave",function(){
	$(this).css("background-color","#4CAF50")
});

function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}