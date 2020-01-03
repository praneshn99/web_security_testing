function randBetween(min,max) {
    return Math.floor(Math.random()*(max-min+1)+min);
}

$('.skeleton .card').each(function() {
  var text = '<span class="card__desc"></span>';
  var title = '<span class="card__title"></span>';
  var numHigh = randBetween(3,4);
  var numLow = randBetween(1,2);
  var container = $(this).find('.card__text');
  
  for( var i = 0; i < numLow; i++ ) {
   container.append(title); 
  }
  
  container.find('.card__title:last-child').css('width', ((numHigh + 2) * 10) + '%');
  
  for( var i = 0; i < numHigh; i++ ) {
   container.append(text); 
  }
  
  container.find('.card__desc:last-child').css('width', (numHigh * 10) + '%');
})