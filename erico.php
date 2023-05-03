asyncTest( "asynchronous test: one second later!", function() {
    expect( 1 );

    setTimeout(function() {
        ok( true, "Passed and ready to resume!" );
        start();
    }, 1000);
});
