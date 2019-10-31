<?php
//creating or updating designs
function create_vc_designs( $post_id = null, $arr = array() )
{
    if(!empty($post_id))
    {
        $arr['ID'] = $post_id; 
        $post_id = wp_insert_post($arr);
    }
    else
    {
        $post_id = wp_insert_post($arr);
    }
	return $post_id;
}
//creating or updating designs

function getrandomestring($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++)
    {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function designer_tiles()
{
    $tiles = array(
        'Wiliam DeMorgan'       => array('Foral', 'Animal', 'Merton Abbey', 'Berries and Leaves', 'Fantastic Creatures', 'Galleons'),
        'Wiliam Morris'         => 'Wiliam Morris',
        'Philip Web'            => 'Philip Web',
        'Printed and Tinted'    => 'Printed and Tinted',
        'Victorian Delft'       => array('Delft Floral', 'Delft Characters', 'Delft Animals', 'Delft Horse Riders', 'Delft Landscapes', 'Delft Sailing Ships', 'Delft Water Designs'),
        'Tublined'              => 'Tublined',
        'Embossed'              => 'Embossed'
        );
    return $tiles;
}

function designer_tiles_names()
{
    $tiles_names = array(
        'wiliam_demorgan'       => 'Wiliam DeMorgan',
        'foral'                 => 'Foral',
        'animal'                => 'Animal',
        'merton_abbey'          => 'Merton Abbey',
        'berries_and_leaves'    => 'Berries and Leaves',
        'fantastic_creatures'   => 'Fantastic Creatures',
        'galleons'              => 'Galleons',
        'wiliam_morris'         => 'Wiliam Morris',
        'philip_web'            => 'Philip Web',
        'printed_and_tinted'    => 'Printed and Tinted',
        'victorian_delft'       => 'Victorian Delft',
        'delft_floral'          => 'Delft Floral',
        'delft_characters'      => 'Delft Characters',
        'delft_animals'         => 'Delft Animals',
        'delft_horse_riders'    => 'Delft Horse Riders',
        'delft_landscapes'      => 'Delft Landscapes',
        'delft_sailingships'    => 'Delft Sailing Ships',
        'delft_water_designs'   => 'Delft Water Designs',
        'tublined'              => 'Tublined',
        'embossed'              => 'Embossed',
        );
    return $tiles_names;
}

function get_designer_tiles_key($value)
{
    $all_designs = designer_tiles_names();
    $key = array_search ($value, $all_designs);
    return $key;   
}
?>