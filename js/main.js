jQuery(document).ready(function ($) {
    $( "#change-section" ).click(function() {
        alert("test");
        $( "#questions-wrapper" ).removeClass( "hidden" );
        $( "#lessons-wrapper" ).addClass( "hidden" );
    });
});
