<?php
/*
function create_movie_review() {
   register_post_type( 'movie_reviews',
       array(
           'labels' =&gt; array(
               'name' =&gt; 'Movie Reviews',
               'singular_name' =&gt; 'Movie Review',
               'add_new' =&gt; 'Add New',
               'add_new_item' =&gt; 'Add New Movie Review',
               'edit' =&gt; 'Edit',
               'edit_item' =&gt; 'Edit Movie Review',
               'new_item' =&gt; 'New Movie Review',
               'view' =&gt; 'View',
               'view_item' =&gt; 'View Movie Review',
               'search_items' =&gt; 'Search Movie Reviews',
               'not_found' =&gt; 'No Movie Reviews found',
               'not_found_in_trash' =&gt; 'No Movie Reviews found in Trash',
               'parent' =&gt; 'Parent Movie Review'
           ),
           'public' =&gt; true,
           'menu_position' =&gt; 15,
           'supports' =&gt; array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
           'taxonomies' =&gt; array( '' ),
           'menu_icon' =&gt; plugins_url( 'images/image.png', __FILE__ ),
           'has_archive' =&gt; true
       )
   );
}

add_action( 'init', 'create_movie_review' );*/
add_action('init', 'register_post_types');
function register_post_types(){
register_taxonomy('objectcat', array('object'), array(
    'label'                 => 'Фабрики',
    'labels'                => array(
      'name'              => 'Фабрики',
      'singular_name'     => 'Фабрики',
      'search_items'      => 'Искать рубрики',
      'all_items'         => 'Все рубрики',
      'parent_item'       => 'Родит. рубрика',
      'parent_item_colon' => 'Родит. рубрика:',
      'edit_item'         => 'Редактировать рубрику',
      'update_item'       => 'Обновить рубрику',
      'add_new_item'      => 'Добавить рубрику',
      'new_item_name'     => 'Заголовок',
      'menu_name'         => 'Фабрики',
    ),
    'description'           => 'Фабрики',
    'public'                => true,
    'show_in_nav_menus'     => true,
    'show_ui'               => true,
    'show_tagcloud'         => false,
    'hierarchical'          => true,
    'rewrite'               => array( 'hierarchical' => true ),
    'show_admin_column'     => true,
  ) );
// Объекты
register_post_type('object', array(
    'label'  => 'Объект',
    'labels' => array(
      'name'               => 'Объекты',
      'singular_name'      => 'Объект',
      'add_new'            => 'Добавить новый',
      'add_new_item'       => 'Введите заголовок',
      'edit_item'          => 'Редактирование объекта',
      'new_item'           => 'Новый объект',
      'view_item'          => 'Посмотреть объект',
      'search_items'       => 'Искать объект',
      'not_found'          => 'Объектов не найдено',
      'not_found_in_trash' => 'В корзине объектов не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Объекты',
    ),
    'description'         => 'Объекты',
    'public'              => true,
    'publicly_queryable'  => true,
    'exclude_from_search' => false,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 23,
    'menu_icon'           => 'dashicons-plus-alt',
    'capability_type'   => 'post',
    'map_meta_cap'      => true,
    'hierarchical'        => false,
    'supports'            => array('title', 'editor', 'thumbnail'),
    'taxonomies'          => array('objectcat', 'localcat'),
    'has_archive'         => true,
    'rewrite'             => array('slug' => 'objects', 'with_front' => false),
    'query_var'           => true,
  ) );
}
