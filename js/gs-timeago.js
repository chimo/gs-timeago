(function () {
    "use strict";

    // Take care of timestamps present on page load
    $( ".notice .dt-published" )
        .addClass( "timeago" )
        .timeago();

    // Take care of timestamps inserted by Realtime
    // via a little monkey-patching
    var orig = RealtimeUpdate.makeNoticeItem;
    RealtimeUpdate.makeNoticeItem = function( data, callback ) {
        orig( data, function( node ) {
            callback( node );

            $( node )
                .find( ".dt-published" )
                .addClass( "timeago" )
                .timeago();
        } );
    };
}());


