<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./less/3211.less', './css/3211.css');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/3211.css">

</head>
<body>
    <section class="university-facilities">
        <div class="title-section">
            <p class="qodef-m-text">05 University Facilities</p>
            <h2>The College</h2>
        </div>
        <div class="facilities-grid">
            <div class="facility">
            <div class="qodef-m-icon-wrapper">
                                <img loading="lazy" width="43" height="46" src="https://emeritus.qodeinteractive.com/wp-content/uploads/2020/11/h1-icon-01.png" class="attachment-full size-full" alt="a" decoding="async"> 
                            </div>
                <h5>Open Library</h5>
                <p style="margin: 11px 0 0;">Lorem ipsum dolor sitans consectetur adipisici elite sed do eiusm mas nus</p>
            </div>
            <div class="facility">
            <div class="qodef-m-icon-wrapper">
                                <img loading="lazy" width="44" height="46" src="https://emeritus.qodeinteractive.com/wp-content/uploads/2020/11/h1-icon-02.png" class="attachment-full size-full" alt="a" decoding="async"> 
                            </div>
                <h5>Research Centre</h5>
                <p style="margin: 11px 0 0;">Lorem ipsum dolor sitans consectetur adipisici elite sed do eiusm mas nus</p>
            </div>
            <div class="facility">
            <div class="qodef-m-icon-wrapper">
                                <img loading="lazy" width="43" height="46" src="https://emeritus.qodeinteractive.com/wp-content/uploads/2020/11/h1-icon-03.png" class="attachment-full size-full" alt="a" decoding="async"> 
                            </div>
                <h5>Art Studios</h5>
                <p style="margin: 11px 0 0;">Lorem ipsum dolor sitans consectetur adipisici elite sed do eiusm mas nus</p>
            </div>
            <div class="facility">
            <div class="qodef-m-icon-wrapper">
                                <img loading="lazy" width="54" height="46" src="https://emeritus.qodeinteractive.com/wp-content/uploads/2020/11/h1-icon-04.png" class="attachment-full size-full" alt="a" decoding="async"> 
                            </div>
                <h5>Student Campus</h5>
                <p style="margin: 11px 0 0;">Lorem ipsum dolor sitans consectetur adipisici elite sed do eiusm mas nus</p>
            </div>
        </div>
    </section>
</body>
</html>
