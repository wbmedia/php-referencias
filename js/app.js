"use strict"
let grid = document.querySelector('.grid');
let msnry = new Masonry( grid, {
  // options...
  itemSelector: '.grid-item',
  columnWidth: 200
});

// init with selector
let msnry = new Masonry( '.grid', {
  // options...
});