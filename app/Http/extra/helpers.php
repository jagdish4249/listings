
<?php
if (!function_exists('get_country_list')) {
    function get_country_list($old_data = '')
    {
        if ($old_data == "") {
            echo file_get_contents(app_path() . '/Http/extra/country.txt');
        } else {
            $pattern = '<option value="' . $old_data . '">';
            $replace = '<option value="' . $old_data . '" selected="selected">';
            $country_list = file_get_contents(app_path() . '/Http/extra/country.txt');
            $country_list = str_replace($pattern, $replace, $country_list);
            echo $country_list;
        }
    }
}