jQuery(document).ready(function ($) {
    $( "#change-section" ).click(function() {
        $( "#questions-wrapper" ).removeClass( "hidden" );
        $( "#lesson-wrapper" ).addClass( "hidden" );
    });

    $( "#finish-chapter" ).click(function() {
        alert("This is just here for testing. The password for the next chapter is \"test\".");
    });
});
