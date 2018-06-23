<?php
use Illuminate\Support\Facades\Storage;

$contents = Storage::get('config/settings.json');
$json = json_decode($contents,TRUE);
if($json['grayScale']==true){
    echo '<link href="'. asset('css/custom.css').'" rel="stylesheet">';
}

?>