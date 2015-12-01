<?php
    // ----------- setup -----------------*
    // -------------- soporte de thumbnails -----*
    add_theme_support( 'post-thumbnails' );

    // -------------- remove emoji --------*
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );

    /* ----------------------- templates -------------------------------------- */
    function themeb_dir($file){
        $file = get_template_directory_uri() . $file;
        return $file;
    }

    // ----------- Estilos y scripts -----*
    function themeb_styls(){
        wp_enqueue_style( 'normalize', themeb_dir('/deb/normalize-css/normalize.css') , array(), '1.1' );
        wp_enqueue_style( 'font-awesome', themeb_dir('/deb/font-awesome/css/font-awesome.css'), array(), '1.1' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/Estilos/css/style.css', array(), '1.1' );
        wp_enqueue_style( 'responsive', get_template_directory_uri() . '/Estilos/css/medias.css', array(), '1.1' );

    	wp_enqueue_script( 'jquery2', themeb_dir('/deb/jquery/dist/jquery.js'), array(), '20141010', true );
        wp_enqueue_script( 'MyScript', get_template_directory_uri() . '/scripts/globalScript.js', array(), '20141010', true );

    }
    add_action( 'wp_enqueue_scripts', 'themeb_styls' );

    // --------------- Menu ---------*
    function themeb_menu_pr() {
        register_nav_menu('main-menu',__( 'Menu Principal' ));
    }
    add_action( 'init', 'themeb_menu_pr' );

    function themeb_widget() {
        register_sidebar( array(
        'name' => __( 'Sidebar principal', 'main-sidebar' ),
        'id'            => 'main-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widgettitle">',
        'after_title'   => '</div>',
        ) );
        register_sidebar( array(
            'name' => 'top slider',
            'id' => 'top_slider',
            'before_widget' => '<div class="top-slider">',
            'after_widget' => '</div>'
        ) );
    }

    add_action( 'widgets_init', 'themeb_widget' );

    // -------------- Acortador de Post ----------*
    function themeb_excerpt( $length ) {
	   return 200;
    }
    add_filter( 'excerpt_length', 'themeb_excerpt', 999 );

    function themeb_excerpt_more( $more ){
        $title = get_permalink( get_the_ID() );
        return '<br> <a href="'.$title.'">Seguir leyendo . . . </a>';
    }
    add_filter('excerpt_more', 'themeb_excerpt_more');

    // -------------- Funcionalidades extras ------*
    function themeb_links($red = ""){
        $content = wp_get_shortlink();
        $content = urlencode($content);
        //$content = str_replace(" ", "%", $content);

        if($red == "Twitter"){
            $cont = urlencode(get_the_title());
            $content = $content." ". $cont; // no olvidar poner formulario para hastags
        }
        print $content;

    }
    function themeb_class_ct($extra = ""){
        if( is_page() ):
            echo 'class="web page '.$extra.'"';
        elseif( is_single() ):
            echo 'class="web single '.$extra.'"';
        else:
            echo 'class="web posts '.$extra.'"';
        endif;
    }
