/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/assets/js/tabs.js ***!
  \*************************************/
$(function (e) {
  'use strict';

  $(".first_tab").champ();
  $(".accordion_example").champ({
    plugin_type: "accordion",
    side: "left",
    active_tab: "3",
    controllers: "true"
  });
  $(".second_tab").champ({
    plugin_type: "tab",
    side: "right",
    active_tab: "1",
    controllers: "false"
  });
});
/******/ })()
;