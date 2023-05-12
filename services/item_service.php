
<?php

$jsonData = file_get_contents('./../data/post.json');
$data = json_decode($jsonData, true);


function query($q)
{
    global $data;

    if ($q) {
        $data = array_filter($data, function ($item) {
            global $q;
            return strpos($item['title'], $q) !== false;
        });
    }
    return  $data;
};

function getItemById($id)
{
    global $data;
    $filteredArray = array_filter($data, function ($item) use ($id) {
        return $item['id'] === $id;
    });

    return reset($filteredArray) ?: null; // Get the first item or return null if not found
}
?>