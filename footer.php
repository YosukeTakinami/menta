<?php
?>
<footer>
        <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.svg" alt=""></h2>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
        offset: 120,
        delay: 600,
        duration: 300,
        easing: 'ease',
        once: false,
        mirror: false,
        anchorPlacement: 'top-bottom',
    });
    </script>
    <!-- scroll -->
<script>
    const move_time = 500;
    const end_time = move_time / 1000 * 60;
    const easing = function ( t, b, c, d) {
        if ((t/=d/2) < 1) return c/2*t*t + b;
        return -c/2 * ((--t)*(t-2) - 1) + b;
    };
    function pageScroll( pos ){
        let xPos = window.pageXOffset
        , yPos = window.pageYOffset
        , moved = pos - yPos
        , time = 1;
        (function scrollMoved() {
            window.scrollTo( xPos, easing( time, yPos, moved, end_time) );
            time ++ ;
            if ( time <= end_time ) {
                window.requestAnimationFrame( scrollMoved );
            } 
        })();
    };
    
    function getElm( h ){
        let deCode = decodeURI( h );
        return document.querySelector( deCode + ',a[name="' + deCode.substr(1)  + '"]');
    }
    
    function getPos( t ){
        let tPos = t.getBoundingClientRect()
        return tPos.top + window.pageYOffset;
    };
    
    const entryPageLinks = document.querySelectorAll( 'a[href^="#"]' );
    
    if ( entryPageLinks.length ) {
        for( var i = 0; entryPageLinks.length > i; i++ ) {
        entryPageLinks[i].addEventListener( 'click', function(e){
    
            let href = e.target.hash;
            if ( ( href != '' ) && ( href != '#') ) {
            let targetElm = getElm( href );
            if ( targetElm ) {
                ( e.preventDefault ) ? e.preventDefault(): e.returnValue = false;
                pageScroll( getPos( targetElm ) );
                return false;
                }
            }
        });
        }
    }
    </script>
    <?php wp_footer(); ?>
</body>
</html>