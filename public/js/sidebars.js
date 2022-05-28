/* global bootstrap: false */
(function () {
  'use strict'
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})()



const tanamanBuah = document.querySelector('#tanaman-buah-dropdown');
const tanamanHias = document.querySelector('#tanaman-hias-dropdown');
const pot = document.querySelector('#pot-dropdown');
const pupuk = document.querySelector('#pupuk-dropdown');

tanamanBuah.addEventListener('mouseover', function (e) {
  tanamanBuahList = document.querySelector('.tanaman-buah-list');
  tanamanBuahList.innerHTML = '<li><a class="dropdown-item" href="http://google.com">> Mangga</a></li>'+
  '<li><a class="dropdown-item" href="http://google.com">> Jambu</a></li>'+
  '<li><a class="dropdown-item" href="http://google.com">> Rambutan</a></li>';
}, false);

tanamanHias.addEventListener('mouseover', function (e){
  tanamanHiasList = document.querySelector('.tanaman-hias-list');
  tanamanHiasList.innerHTML = '<li><a class="dropdown-item" href="http://google.com">> Bunga</a></li>'+
  '<li><a class="dropdown-item" href="http://google.com">> Bunga</a></li>'+
  '<li><a class="dropdown-item" href="http://google.com">> Bunga</a></li>';
});

pot.addEventListener('mouseover', function (e){
  potList = document.querySelector('.pot-list');
  potList.innerHTML = '<li><a class="dropdown-item" href="http://google.com">> Pot</a></li>'+
  '<li><a class="dropdown-item" href="http://google.com">> Pot</a></li>'+
  '<li><a class="dropdown-item" href="http://google.com">> Pot</a></li>';
});

pupuk.addEventListener('mouseover', function (e){
  pupukList = document.querySelector('.pupuk-list');
  pupukList.innerHTML = '<li><a class="dropdown-item" href="http://google.com">> Pupuk</a></li>'+
  '<li><a class="dropdown-item" href="http://google.com">> Pupuk</a></li>'+
  '<li><a class="dropdown-item" href="http://google.com">> Pupuk</a></li>';
});


var body = document.querySelector('body');
body.addEventListener('click', function (e) {
  tanamanBuahList = document.querySelector('.tanaman-buah-list');
  tanamanHiasList = document.querySelector('.tanaman-hias-list');
  potList = document.querySelector('.pot-list');
  pupukList = document.querySelector('.pupuk-list');
  tanamanBuahList.innerHTML = '';
  tanamanHiasList.innerHTML = '';
  potList.innerHTML = '';
  pupukList.innerHTML = '';
});


