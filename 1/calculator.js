function result(a,b,o) {
    switch (o) {
        case '+': return a+b;
        case '-': return a-b;
        case '*': return a*b;
        case '/': return a/b;
    }
    return null;
}

function calc() {
    let a = parseInt($("#n1").val());
    let b = parseInt($("#n2").val(), 10);
    let o = $("#op2").val();

    $( "#result" ).val(result(a,b,o));
}

$(function() {
    $( "#jqueryForm" ).on( "submit", false );
    $( "#submit2" ).on( "click", calc );
});