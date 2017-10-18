<?php
   // images directory
   $imagesDirectory = "uploads";

   // list of files to skip
   $toSkip = [".", "..", ".htaccess", ".htpasswd"];

?>
<section id="quickGallery" class="slideInLeft">
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
               <div class="galleryImage">
                  <a href="$imagesDirectory/$fileName" target="_blank">
                     <img src="$imagesDirectory/$fileName" alt="$fileName">
                  </a>
               </div>
               <!-- /.galleryImage -->
_EOF;
            }
         }
      ?>
   
</section>
<!-- /#quick-gallery -->