<?php

function businessArticles() {
  $urlSources = file_get_contents("https://newsapi.org/v2/top-headlines?country=ng&category=business&apiKey=d2f3e838f7a44185bb9dcf19e047474c");

    $urlSourcesArray = json_decode($urlSources,true);


for ($i=0; $i < 12 ; $i++) { 
      $articlesName = $urlSourcesArray['articles'][$i];


                  $published = substr($articlesName['publishedAt'], 0, 10);

echo '<div class="col-xs-6 col-sm-4 col-md-4">
            <div class="card bg-secondary text-white mb-3" style="color:#333;">
              <img style="height: 328px"; src="'.$articlesName['urlToImage'].'">
              <div class="card-body">
                <h5 class="card-title"  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 75ch;">'.$articlesName['title'].'</h5>


                <div class="list-group-item list-group-item-action list-group-item-dark bg-light">
                  <div class="d-flex w-100 justify-content-between">
                    <small class="mb-1 text-black"> Source </small>
                    <small class="mb-1 text-danger">'.$articlesName['source']['name'].'</small>
                  </div>
                </div>


                <div class="list-group-item list-group-item-action list-group-item-dark bg-light" id="div">
                  <div class="d-flex w-100 justify-content-between">
                    <small class="mb-1 text-black"> Description: </small>
                    <small class="mb-1 text-danger" style="text-align: justify; text-indent: 30px;">'.$articlesName['description'].'</small>
                  </div>
                </div>

                <div href="#" class="list-group-item list-group-item-action list-group-item-dark bg-light">
                  <div class="d-flex w-100 justify-content-between">
                    <small class="mb-1 text-black">Published At </small>
                    <small class="mb-1 text-danger">'.$published.'</small>
                  </div>
                </div>
<a target="_blank" href="'.$articlesName['url'].'" class="list-group-item list-group-item-action list-group-item-dark bg-light">                
              <button data-id="1" class="btn btn-secondary toggler" style="width:100%">Full Story Here

              </button></a>
</div>
            </div>
          </div>';

    }

} 


function entertainmentArticles() {
  $urlSources = file_get_contents("https://newsapi.org/v2/top-headlines?country=ng&category=entertainment&apiKey=d2f3e838f7a44185bb9dcf19e047474c");

    $urlSourcesArray = json_decode($urlSources,true);

for ($i=0; $i < 12 ; $i++) { 
      $articlesName = $urlSourcesArray['articles'][$i];


                  $published = substr($articlesName['publishedAt'], 0, 10);

echo '<div class="col-xs-6 col-sm-4 col-md-4">
            <div class="card bg-secondary text-white mb-3" style="color:#333;">
              <img style="height: 328px"; src="'.$articlesName['urlToImage'].'">
              <div class="card-body">
                <h5 class="card-title"  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 75ch;">'.$articlesName['title'].'</h5>


                <div class="list-group-item list-group-item-action list-group-item-dark bg-light">
                  <div class="d-flex w-100 justify-content-between">
                    <small class="mb-1 text-black"> Source </small>
                    <small class="mb-1 text-danger">'.$articlesName['source']['name'].'</small>
                  </div>
                </div>


                <div class="list-group-item list-group-item-action list-group-item-dark bg-light" id="div">
                  <div class="d-flex w-100 justify-content-between">
                    <small class="mb-1 text-black"> Description: </small>
                    <small class="mb-1 text-danger" style="text-align: justify; text-indent: 30px;">'.$articlesName['description'].'</small>
                  </div>
                </div>

                <div href="#" class="list-group-item list-group-item-action list-group-item-dark bg-light">
                  <div class="d-flex w-100 justify-content-between">
                    <small class="mb-1 text-black">Published At </small>
                    <small class="mb-1 text-danger">'.$published.'</small>
                  </div>
                </div>
<a target="_blank" href="'.$articlesName['url'].'" class="list-group-item list-group-item-action list-group-item-dark bg-light">                
              <button data-id="1" class="btn btn-secondary toggler" style="width:100%">Full Story Here

              </button></a>
</div>
            </div>
          </div>';

    }

}


function scienceArticles() {
  $urlSources = file_get_contents("https://newsapi.org/v2/top-headlines?country=us&category=technology&apiKey=d2f3e838f7a44185bb9dcf19e047474c");

    $urlSourcesArray = json_decode($urlSources,true);
         

for ($i=0; $i < 12 ; $i++) { 
      $articlesName = $urlSourcesArray['articles'][$i];


                  $published = substr($articlesName['publishedAt'], 0, 10);

echo '<div class="col-xs-6 col-sm-4 col-md-4">
            <div class="card bg-secondary text-white mb-3" style="color:#333;">
              <img style="height: 328px"; src="'.$articlesName['urlToImage'].'">
              <div class="card-body">
                <h5 class="card-title"  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 75ch;">'.$articlesName['title'].'</h5>


                <div class="list-group-item list-group-item-action list-group-item-dark bg-light">
                  <div class="d-flex w-100 justify-content-between">
                    <small class="mb-1 text-black"> Source </small>
                    <small class="mb-1 text-danger">'.$articlesName['source']['name'].'</small>
                  </div>
                </div>


                <div class="list-group-item list-group-item-action list-group-item-dark bg-light" id="div">
                  <div class="d-flex w-100 justify-content-between">
                    <small class="mb-1 text-black"> Description: </small>
                    <small class="mb-1 text-danger" style="text-align: justify; text-indent: 30px;">'.$articlesName['description'].'</small>
                  </div>
                </div>

                <div href="#" class="list-group-item list-group-item-action list-group-item-dark bg-light">
                  <div class="d-flex w-100 justify-content-between">
                    <small class="mb-1 text-black">Published At </small>
                    <small class="mb-1 text-danger">'.$published.'</small>
                  </div>
                </div>
<a target="_blank" href="'.$articlesName['url'].'" class="list-group-item list-group-item-action list-group-item-dark bg-light">                
              <button data-id="1" class="btn btn-secondary toggler" style="width:100%">Full Story Here

              </button></a>
</div>
            </div>
          </div>';

    }

}


function healthArticles() {
  $urlSources = file_get_contents("https://newsapi.org/v2/top-headlines?country=us&category=health&apiKey=d2f3e838f7a44185bb9dcf19e047474c");

    $urlSourcesArray = json_decode($urlSources,true);

for ($i=0; $i < 12 ; $i++) { 
      $articlesName = $urlSourcesArray['articles'][$i];


                  $published = substr($articlesName['publishedAt'], 0, 10);

echo '<div class="col-xs-6 col-sm-4 col-md-4">
            <div class="card bg-secondary text-white mb-3" style="color:#333;">
              <img style="height: 328px"; src="'.$articlesName['urlToImage'].'">
              <div class="card-body">
                <h5 class="card-title"  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 75ch;">'.$articlesName['title'].'</h5>


                <div class="list-group-item list-group-item-action list-group-item-dark bg-light">
                  <div class="d-flex w-100 justify-content-between">
                    <small class="mb-1 text-black"> Source </small>
                    <small class="mb-1 text-danger">'.$articlesName['source']['name'].'</small>
                  </div>
                </div>


                <div class="list-group-item list-group-item-action list-group-item-dark bg-light" id="div">
                  <div class="d-flex w-100 justify-content-between">
                    <small class="mb-1 text-black"> Description: </small>
                    <small class="mb-1 text-danger" style="text-align: justify; text-indent: 30px;">'.$articlesName['description'].'</small>
                  </div>
                </div>

                <div href="#" class="list-group-item list-group-item-action list-group-item-dark bg-light">
                  <div class="d-flex w-100 justify-content-between">
                    <small class="mb-1 text-black">Published At </small>
                    <small class="mb-1 text-danger">'.$published.'</small>
                  </div>
                </div>
<a target="_blank" href="'.$articlesName['url'].'" class="list-group-item list-group-item-action list-group-item-dark bg-light">                
              <button data-id="1" class="btn btn-secondary toggler" style="width:100%">Full Story Here

              </button></a>
</div>
            </div>
          </div>';

    }

}



function sportsArticles() {
  $urlSources = file_get_contents("https://newsapi.org/v2/top-headlines?country=ng&category=sports&apiKey=d2f3e838f7a44185bb9dcf19e047474c");

    $urlSourcesArray = json_decode($urlSources,true);

for ($i=0; $i < 12 ; $i++) { 
      $articlesName = $urlSourcesArray['articles'][$i];


                  $published = substr($articlesName['publishedAt'], 0, 10);

echo '<div class="col-xs-6 col-sm-4 col-md-4">
            <div class="card bg-secondary text-white mb-3" style="color:#333;">
              <img style="height: 328px"; src="'.$articlesName['urlToImage'].'">
              <div class="card-body">
                <h5 class="card-title"  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 75ch;">'.$articlesName['title'].'</h5>


                <div class="list-group-item list-group-item-action list-group-item-dark bg-light">
                  <div class="d-flex w-100 justify-content-between">
                    <small class="mb-1 text-black"> Source </small>
                    <small class="mb-1 text-danger">'.$articlesName['source']['name'].'</small>
                  </div>
                </div>


                <div class="list-group-item list-group-item-action list-group-item-dark bg-light" id="div">
                  <div class="d-flex w-100 justify-content-between">
                    <small class="mb-1 text-black"> Description: </small>
                    <small class="mb-1 text-danger" style="text-align: justify; text-indent: 30px;">'.$articlesName['description'].'</small>
                  </div>
                </div>

                <div href="#" class="list-group-item list-group-item-action list-group-item-dark bg-light">
                  <div class="d-flex w-100 justify-content-between">
                    <small class="mb-1 text-black">Published At </small>
                    <small class="mb-1 text-danger">'.$published.'</small>
                  </div>
                </div>
<a target="_blank" href="'.$articlesName['url'].'" class="list-group-item list-group-item-action list-group-item-dark bg-light">                
              <button data-id="1" class="btn btn-secondary toggler" style="width:100%">Full Story Here

              </button></a>
</div>
            </div>
          </div>';

    }

}

?>
