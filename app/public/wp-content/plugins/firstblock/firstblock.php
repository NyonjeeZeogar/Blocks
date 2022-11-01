<?php
/**
    * Plugin Name: First Block
    * Plugin URI: https://github.com/NyonjeeZeogar
    * Description: First block
    * Author: Nyonjee Zeogar
    * Author URI: https://github.com/NyonjeeZeogar
*/

function first_block_firstblock_init() {
    register_block_type_from_metadata(__DIR__);
}

add_action( "init", "first_block_firstblock_init" );