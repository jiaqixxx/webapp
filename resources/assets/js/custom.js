$(document).ready(function () {
    var top_promotion_contents = ["This is promotion information two", "This is promotion information one"];
    var count = 0;

    function changeText() {
        $(".topline-promotion-content").text(top_promotion_contents[count]);
        count < 2 ? count++ : count = 0;
    }
    setInterval(changeText, 3000);

    $('#searchField').keyup(function () {
        if($('#searchField').val() != ''){
            $('#removeText').show();
        }else{
            $('#removeText').hide();
        }
    });

    $('#removeText').click(function () {
        $('#searchField').val('');
        $(this).hide();
    });
});
