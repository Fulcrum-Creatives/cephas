<?php

register_sidebar(array(
  'name' => __( 'Left Front Page Box' ),
  'id' => 'font-left',
  'description' => __( 'Widget box for the left hand front page box' ),
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));

register_sidebar(array(
  'name' => __( 'Center Front Page Box' ),
  'id' => 'center-left',
  'description' => __( 'Widget box for the center front page box' ),
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));


register_sidebar(array(
  'name' => __( 'Right Front Page Box' ),
  'id' => 'right-left',
  'description' => __( 'Widget box for the right hand front page box' ),
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));

// footer widgets 

register_sidebar(array(
  'name' => __( 'Footer Menu' ),
  'id' => 'foot-menu',
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));

register_sidebar(array(
  'name' => __( 'Footer Address' ),
  'id' => 'foot-add',
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));

register_sidebar(array(
  'name' => __( 'Footer Disclaimer' ),
  'id' => 'foot-disc',
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));

// Client Link 

register_sidebar(array(
  'name' => __( 'Client Log-in Content' ),
  'id' => 'client',
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));
