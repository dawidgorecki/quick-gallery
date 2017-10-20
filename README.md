# Quick Gallery [![GitHub release](https://img.shields.io/github/release/dawidgorecki/quick-gallery.svg)](https://github.com/dawidgorecki/quick-gallery/releases) [![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/dawidgorecki/quick-gallery/master/LICENSE)
`Quick Gallery` is a simple image gallery written in PHP with some JS, HTML5 & CSS3 for front-end. Gallery is creating automatically from a folder of images. You can use it to create your own gallery or add it to your projects really fast
## Features
- easy to implement
- fully responsive
- animated hover effects
- animated gallery entrance
- image preview popup with zoom in/out animation
## Usage
1. Copy required files from 'dist' directory to your project: `gallery.css`, `gallery.js`, `quick-gallery.php`
2. Include the stylesheets on your document's `<head>`
```html
<head>
   <!-- Gallery styles -->
   <link rel="stylesheet" href="gallery.css">
   <!-- Font Awesome - for search icon on hover -->
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
```
3. Include `jQuery` and `gallery.js` at the end of your document, just before `</body>` (required to popup preview)
```html
   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <!-- Gallery JS script -->
   <script src="gallery.js"></script>
```
4. Create `uploads` directory and put some images. You can change default directory in `quick-gallery.php` at line 3
5. Add gallery to your project
```php
<?php include 'quick-gallery.php'; ?>
```
## Preview
http://dawidgorecki.pl/github/qg-preview-mobile.jpg
## License
Quick Gallery is licensed under the MIT license. (http://opensource.org/licenses/MIT)