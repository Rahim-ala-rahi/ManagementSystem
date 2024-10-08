/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************!*\
  !*** ./resources/assets/js/ckeditor.js ***!
  \*****************************************/
// ______________Ckeditor
ClassicEditor.create(document.querySelector('.editor'), {
  toolbar: {
    items: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'outdent', 'indent', '|', 'imageUpload', 'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo'],
    rtl: "true"
  },
  language: 'en',
  image: {
    toolbar: ['imageTextAlternative', 'imageStyle:inline', 'imageStyle:block', 'imageStyle:side']
  },
  table: {
    contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
  },
  licenseKey: ''
}).then(function (editor) {
  window.editor = editor;
})["catch"](function (error) {
  console.error('Oops, something went wrong!');
  console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
  console.warn('Build id: fgydboej4r6a-nohdljl880ze');
  console.error(error);
});
/******/ })()
;