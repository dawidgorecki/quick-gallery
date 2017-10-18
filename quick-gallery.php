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
                  <a href="javascript:void(0);" class="openBtn" data-src="$imagesDirectory/$fileName">
                     <img src="$imagesDirectory/$fileName" alt="$fileName">
                  </a>
               </div>
               <!-- /.galleryImage -->
_EOF;
            }
         }
      ?>
   
</section>
<!-- /#quickGallery -->

<div id="imagePreview" class="quickModal">
   <div id="modalContent">
      <span class="closeBtn"><i class="fa fa-times" aria-hidden="true"></i></span>
      <img src="#" alt="">
   </div>
</div>
<!-- /#imagePreview -->