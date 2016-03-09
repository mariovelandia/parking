<div class="main-content">
   <div class="container">
      <div class="row">
            <?php
               $html = '';
               $file = file_get_contents('./assets/json/results.json', true);
               $results = json_decode($file, true);
               foreach ($results as $result) {
                  $html .= '
                  <div                                                                             >
                     <h2 class="rTitle">'. $result['titulo'] .'</h2>
                     <h6> Autor: '. $result['autor'] .'</h6>
                     <p>'. $result['abstract'] .'</p>                
                 </div>';
               }
               echo $html;
            ?>
      </div>
   </div>
</div>