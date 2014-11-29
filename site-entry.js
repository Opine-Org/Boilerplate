var console = require('console-polyfill');
var jQuery = require('jquery');
$ = jQuery;
window.jQuery = jQuery;

$(function() {
    require('semantic');
    require('foo-comment');
    require('foo-account');
    require('opine-field');
    require('opine-form');
    require('./public/css/style.css');
    require('./public/js/behaviors.js');
});