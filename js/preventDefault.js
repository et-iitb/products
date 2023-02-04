$('.Learning').click( function(e) {
     e.preventDefault();
    
});
$('.Resources').click( function(e) {
     e.preventDefault();
    
});
$('.Getting').click( function(e) {
     e.preventDefault();
    
});
$('.Getting4').click( function(e) {
     e.preventDefault();
    
});
$('.Getting5').click( function(e) {
     e.preventDefault();
    
});
$('.Getting6').click( function(e) {
     e.preventDefault();
    
});

$('.adtnlres').click( function(e) {
     e.preventDefault();
    
});



window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
