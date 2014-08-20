$( function(){
    var handleHeight = function(){
        var windowHeight = $( window ).height();
        var headerHeight = $( '#main-header' ).height();
        var height = windowHeight - headerHeight;
        $( '#main-section' ).css( { 'min-height' : height } );        
    };
    
    window.onresize = function() {
        handleHeight();
    }
    
    handleHeight();
} );