$('.menu a').click(
	function() {
	 	$.each( $(".menu a"), function( i, l ){
    		$(this).removeClass("main-active");
		});
    		$(this).addClass("main-active");
		});




function showDiv(idInfo) {
  var sel = document.getElementById('divLinks').getElementsByClassName('description');
  for (var i=0; i<sel.length; i++) {
    sel[i].style.display = 'none';
  }
  document.getElementById('room'+idInfo).style.display = 'block';
}