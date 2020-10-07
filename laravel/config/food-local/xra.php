<?php return array (
  'adm_theme' => 'adminflu',
  'enable_ads' => '1',
  'enable_packs' => 
  array (
    0 => 'backend',
    1 => 'blog',
    2 => 'extend',
    3 => 'food',
    4 => 'frontend',
    5 => 'import',
    6 => 'lu',
    7 => 'settings',
    8 => 'xra',
  ),
  'forcessl' => false,
  'migrate_packs' => 
  array (
    0 => 'backend',
    1 => 'blog',
    2 => 'food',
    3 => 'import',
    4 => 'lu',
    5 => 'seo',
    6 => 'xra',
  ),
  'model' => 
  array (
    'amenity' => 'Modules\Blog\Models\Amenity',
    'article' => 'Modules\Blog\Models\Article',
    'bell_boy' => 'Modules\Food\Models\BellBoy',
    'booking' => 'Modules\Cart\Models\Booking',
    'cart' => 'Modules\Cart\Models\Cart',
    'category' => 'Modules\Blog\Models\Category',
    'cuisine' => 'Modules\Food\Models\Cuisine',
    'cuisine_cat' => 'Modules\Food\Models\CuisineCat',
    'event' => 'Modules\Blog\Models\Event',
    'home' => 'Modules\Blog\Models\Home',
    'ingredient' => 'Modules\Food\Models\Ingredient',
    'ingredient_cat' => 'Modules\Food\Models\IngredientCat',
    'location' => 'Modules\Blog\Models\Location',
    'opening_hour' => 'Modules\Food\Models\OpeningHour',
    'page' => 'Modules\Blog\Models\Page',
    'photo' => 'Modules\Blog\Models\Photo',
    'place' => 'Modules\Blog\Models\Place',
    'post' => 'Modules\Blog\Models\Post',
    'profile' => 'Modules\Blog\Models\Profile',
    'rating' => 'Modules\Blog\Models\Rating',
    'recipe' => 'Modules\Food\Models\Recipe',
    'restaurant' => 'Modules\Food\Models\Restaurant',
    'restaurant_map' => 'Modules\Food\Models\RestaurantMap',
    'restaurant_owner' => 'Modules\Food\Models\RestaurantOwner',
    'restaurant_provider' => 'Modules\Food\Models\RestaurantProvider',
    'table' => 'Modules\Food\Models\Table',
    'tag' => 'Modules\Blog\Models\Tag',
    'tip' => 'Modules\Food\Models\Tip',
    'waiter' => 'Modules\Food\Models\Waiter',
    'widget' => 'Modules\Xot\Models\Widget',
  ),
  'primary_lang' => 'it',
  'pub_theme' => 'directorybs4',
  'related' => 
  array (
    'cuisine' => 
    array (
      0 => 'ingredientCat',
      1 => 'recipe',
    ),
    'home' => 
    array (
    ),
    'ingredientCat' => 
    array (
      0 => 'ingredient',
    ),
    'postCat' => 
    array (
      0 => 'post',
    ),
    'restaurant' => 
    array (
      0 => 'cuisine',
      1 => 'cuisineCat',
    ),
  ),
  'roots' => 
  array (
    0 => 'profile',
    1 => 'restaurant',
  ),
  'show_trans_key' => true,
);