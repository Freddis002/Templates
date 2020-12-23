<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


	// Affichée une fois par date différente
	the_date();

	// Affichée pour chaque article avec le format défini dans WordPress
	the_time( get_option( 'date_format' ) );
	
	// Affichée pour chaque article, avec un format de date et heure personnalisé (ici : 02 Avril 2019 à 17:23)
    the_time( 'j F Y à H:i' );

    // Définir la taille des images mises en avant
set_post_thumbnail_size( 2000, 400, true );

    
    // Définir d'autres tailles d'images
add_image_size( 'products', 800, 600, false );
add_image_size( 'square', 256, 256, false );

//Déclarer 2 emplacements de menu
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );