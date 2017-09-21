<?php global $dm_settings; ?>

<div class="masthead-container">

    <div class="container dmbs-container">

    <?php if ($dm_settings['show_header'] != 0) : ?>

        <div class="row dmbs-header">

            <?php if ( get_header_image() != '' || get_header_textcolor() != 'blank') : ?>

            <?php if ( get_header_image() != '' ) : ?>
                <div class="col-md-4 dmbs-header-img text-center">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
                </div>
            <?php endif; ?>

            <div class="col-md-4 dmbs-header-text logo-placement">
                <?php if ( get_header_textcolor() != 'blank' ) : ?>
                    <a class="custom-header-text-color" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="http://epiconference.com/2014/wp-content/themes/devdmbootstrap3-child/img/EPIC_logo.png"></a>
                    <h4 class="custom-header-text-color"><?php bloginfo( 'description' ); ?></h4>
                <?php endif; ?>
                <?php else : ?>
                    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                    <h4><?php bloginfo( 'description' ); ?></h4>
                <?php endif; ?>
            </div>

           
                <div class="white-text masthead-copy">
                    New York City, NY / <b>September 7-10</b><br/>The Center for Positive Marketing at Fordham University 
                </div><!--white-text-->

                
        </div><!--row-->
    </div><!--container-->
</div><!--masthead-container-->

<?php endif; ?>