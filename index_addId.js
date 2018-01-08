$(document).ready(function(){
    $("#whatProp").mouseenter(function(){
        $("#addIdDiv").fadeTo("slow", 1);
    })
    $("#whatProp").mouseleave(function(){
        $("#addIdDiv").fadeTo("slow", 0);
    })
});