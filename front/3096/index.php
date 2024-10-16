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
$less->compileFile('./less/3096.less', './css/3096.css');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repair Plus - Phone & Computer Repair Joomla 5 Template Preview - ThemeForest</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/3096.css">
    
    
    
</head>
<body>
    <section class="sp-main-body">
        <div class="container">
            <div class="container-inner">
                <div class="row">
                    <main id="sp-component" class="col-md-8">
                        <div class="sp-columns">
                            <div class="blog">
                                <div class="artical-list">
                                    <div class="row row1">
                                        <div class="col-lg-12">
                                            <div class="artical">
                                                <a href="#">
                                                    <div class="artical-intro-image">
                                                        <img id="artical-image" src="./images/blog1.jpg" alt="">
                                                    </div>
                                                </a>
                                                <div class="artical-body">
                                                    <div class="artical-header">
                                                        <h2><a href="">iPad Repairs For Schools/Universities Across The Usa</a></h2>
                                                    </div>
                                                    <div class="artical-info">
                                                        <span class="createdby">
                                                            <span>adhavi</span>
                                                        </span>
                                                        <span class="category-name">
                                                            <span><a href="#">Smart phones</a></span>
                                                        </span>
                                                        <span class="pulished">
                                                            <time datetime="2023-04-17T08:16:42+00:00">
                                                            17 April 2023</time>
                                                        </span>
                                                    </div>
                                                    <div class="artical-introtext">
                                                        <p id="artical-text">There are more questions that need answers before significant disruption to current models, such as the credit card, can occur.</p>
                                                    </div>
                                                    <div class="readmore">
                                                        <a href="#">Read more ...</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="artical-more" mb-4></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    
                    <aside id="sp-right" class="col-lg-4">
                        <div class="sp-columns">
                            <div class="sp-module">
                                <div class="sp-module-content">
                                    <form action="">
                                        <div class="mod-finder__search input-group">
                                            <div class="awsomplete">
                                            <input type="text" name="q" id="mod-finder-searchword117" class="js-finder-search-query form-control" value="" placeholder="Search …" autocomplete="off" aria-expanded="false" aria-owns="awesomplete_list_2" role="combobox">
                                            <ul hidden="" role="listbox" id="awesomplete_list_2"></ul>
                    
                                        </div>
                                        <button class="btn btn-primary" type="submit">
                                         <span class="fa fa-search" aria-hidden="true"></span> SEARCH
                                        </button>
                                            
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sp-module ">
                                <h3 class="sp-module-title">Categories</h3>
                                <div class="sp-module-content">
                                <ul class="mod-articlescategories categories-module mod-list">
                                <li><i class="fa fa-folder icon"></i><a href="">Smart Phones</a></li>
                                <li><i class="fa fa-folder icon"></i><a href="#">Desktop &amp; Mac</a></li>
                                <li><i class="fa fa-folder icon"></i><a href="#">Game Console </a></li>
                                <li><i class="fa fa-folder icon"></i><a href="#">Safety &amp; Security</a></li>
                                <li><i class="fa fa-folder icon"></i><a href="#">Tips &amp; Tricks</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="js/bootstrap.min.js"></script>
</html>