
 $(document).ready(function(){
    $("#top-image").fadeIn(2000);
 })

//  $(document).ready(function(){
//     $("#ham").fadeIn(2000);
//  })

$('#showeat').on('click',function(){
    const eat = $('#eat').position().top - 75;

    $('html, body').animate(
        {
            scrollTop:eat
        },
        900);
});

$('#showvisit').on('click',function(){
    const visit = $('#visit').position().top - 75;

    $('html, body').animate(
        {
            scrollTop:visit
        },
        900);
});