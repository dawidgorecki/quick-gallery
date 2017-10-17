# Quick Gallery
`Quick Gallery` is a simple image gallery written in PHP. Gallery is creating automatically from a folder of images. You can use it to create your own gallery or add it to your projects really fast
## Features
- easy to implement
- fully responsive
- animated hover effects
- animated entrance
## Usage
1. Copy required files: `gallery.css` and `quick-gallery.php`
2. Include the stylesheet on your document's `<head>`
```html
<head>
   <link rel="stylesheet" href="css/gallery.css">
</head>
```
3. Include FontAwesome from CDN
```html
<head>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
```
4. Default images directory is `/uploads` - create it or change in `quick-gallery.php` at line 3
5. Add gallery to your project
```php
<?php include 'quick-gallery.php'; ?>
```
## Preview
![alt text](http://dawidgorecki.pl/github/qg-preview-mobile.jpg)
## License
Quick Gallery is licensed under the MIT license. (http://opensource.org/licenses/MIT)