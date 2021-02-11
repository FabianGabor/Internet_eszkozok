function calc() {
    let a = parseInt($("#n1").val());
    let b = parseInt($("#n2").val(), 10);
    $( "#result" ).val(a+b);
}

$(function() {
    $( "#jqueryForm" ).on( "submit", false );
    $( "#submit2" ).on( "click", calc );
});