jQuery('section.class-action img').on('click', function(e){
  jQuery(this).toggleClass('active');
  jQuery(this).siblings('.docs').toggle();
});

jQuery('section.class-action .toggle').on('click', function(e){
  e.preventDefault();
  jQuery(this).siblings('.dropdown').toggle();
});