
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
};

//generate the list of columns from database
if (!function_exists('get_column_list')) {
    function get_column_list($tablename)
    {   
        $dbname = env('DB_DATABASE');
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($servername, $username, $password);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
           }
      $sql = " SELECT column_name FROM information_schema.columns WHERE table_schema='$dbname' AND table_name='$tablename'";
      $result = mysqli_query($conn, $sql);
           $column_list = [];
        if (mysqli_num_rows($result) >0) {
        // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            array_push($column_list,$row["column_name"]);
            }
        } else {
        echo "0 results";
            }
         mysqli_close($conn);
        return $column_list;
        }
    }


