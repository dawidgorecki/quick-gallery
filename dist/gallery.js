$(document).ready(function() {
   let openBtn = $("#quickGallery .openBtn");
   let closeBtn = $("#imagePreview .closeBtn");
   let modal = $("#imagePreview");
   
 
   openBtn.click(function() {
      let imgSrc = $(this).attr("data-src");
      $("#modalContent img").attr("src", imgSrc);
      $("#modalContent").addClass("zoomIn");
      
      modal.show();
   });

   function closeModal() {
      $("#modalContent").removeClass("zoomIn");
      $("#modalContent").addClass("zoomOut");
      
      setTimeout(function() {
         modal.hide();
      }, 200);
   }

   closeBtn.click(function() {
      closeModal();
   });

   $(window).click(function(event) {
      if (event.target.className == "quickModal") {
         closeModal();
      }
   });
});