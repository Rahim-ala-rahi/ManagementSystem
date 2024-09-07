/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************************************!*\
  !*** ./resources/assets/js/employee/emp-sidemenuchart.js ***!
  \***********************************************************/
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

$(function (e) {
  'use strict'; //Chart

  var _options;

  var ctx = document.getElementById("sidemenuchart");
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
      type: 'line',
      datasets: [{
        data: [15, 18, 15, 19, 22, 19, 20],
        label: 'Desktops',
        backgroundColor: 'rgba(71, 84, 242, 0.8)',
        borderColor: '#fff',
        borderWidth: '2',
        pointBackgroundColor: 'rgba(71, 84, 242, 0.8)',
        pointBorderWidth: 2,
        pointRadius: 0,
        pointHoverRadius: 4,
        pointHoverBackgroundColor: '#3366ff'
      }]
    },
    options: (_options = {
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        display: false
      }
    }, _defineProperty(_options, "responsive", true), _defineProperty(_options, "tooltips", {
      mode: 'index',
      titleFontSize: 12,
      titleFontColor: '#7886a0',
      bodyFontColor: '#7886a0',
      backgroundColor: '#fff',
      titleFontFamily: 'Montserrat',
      bodyFontFamily: 'Montserrat',
      cornerRadius: 3,
      intersect: false,
      enabled: false
    }), _defineProperty(_options, "hover", {
      mode: 'nearest',
      intersect: true
    }), _defineProperty(_options, "scales", {
      xAxes: [{
        gridLines: {
          display: false,
          color: 'rgba(45, 53, 160, 0.3)',
          zeroLineColor: 'rgba(45, 53, 160, 0.3)'
        },
        ticks: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: _defineProperty({
          display: false,
          color: 'rgba(45, 53, 160, 0.3)',
          zeroLineColor: 'rgba(45, 53, 160, 0.3)'
        }, "display", false),
        ticks: {
          display: false,
          beginAtZero: true,
          stepSize: 10,
          max: 30,
          min: 0
        }
      }]
    }), _defineProperty(_options, "elements", {
      line: {
        borderWidth: 1
      },
      point: {
        radius: 4,
        hitRadius: 10,
        hoverRadius: 4
      }
    }), _options)
  });
});
/******/ })()
;