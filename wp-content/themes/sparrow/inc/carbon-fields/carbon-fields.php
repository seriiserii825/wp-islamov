<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	//Default options page
	$basic_options_container = Container::make( 'theme_options', __( 'Basic Options' ) )
		->set_icon( 'dashicons-carrot' )
		->set_page_menu_title( 'Настройки темы' )
	    ->add_fields( array(
	        Field::make( 'header_scripts', 'crb_header_script', __( 'Header Script' ) ),
	        Field::make( 'footer_scripts', 'crb_footer_script', __( 'Footer Script' ) ),
	    ) );

	// Add second options page under 'Basic Options'
	Container::make( 'theme_options', __( 'Social Links' ) )
	    ->set_page_parent( $basic_options_container ) // reference to a top level container
		->set_page_menu_title( 'Настройки О нас' )
	    ->add_fields( array(
	        Field::make( 'text', 'crb_facebook_link', __( 'Facebook Link' ) ),
	        Field::make( 'text', 'crb_twitter_link', __( 'Twitter Link' ) ),
	    ) );

	// Add third options page under "Appearance"
	Container::make( 'theme_options', __( 'Customize Background' ) )
	    ->set_page_parent( $basic_options_container ) // identificator of the "Appearance" admin section
		->set_page_menu_title( 'Настройки Контакты' )
	    ->add_fields( array(
	        Field::make( 'color', 'crb_background_color', __( 'Background Color' ) ),
	        Field::make( 'image', 'crb_background_image', __( 'Background Image' ) ),
	    ) );
}

