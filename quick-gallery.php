<?php
   // images directory
   $imagesDirectory = "uploads";

   // list of files to skip
   $toSkip = [".", "..", ".htaccess", ".htpasswd"];

?>
<section id="quick-gallery" class="gallery-start">
   <h1>Gallery</h1>
   
      <?php 
         $images = scandir($imagesDirectory);

         if (empty(array_diff($images, $toSkip))) {
            echo "<p>No images in <b>$imagesDirectory</b> directory</p>";
         } else {
            foreach ($images as $fileName) 
            {
               if (in_array($fileName, $toSkip)) continue;
               echo <<<_EOF
               <div class="gallery-image">
                  <a href="$imagesDirectory/$fileName" target="_blank">
                     <img src="$imagesDirectory/$fileName" alt="$fileName">
                  </a>
               </div>
               <!-- /.gallery-image -->
_EOF;
            }
         }
      ?>
   
</section>
<!-- /#quick-gallery -->