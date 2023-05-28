$(document).ready(function($) {
$('.container').click(function(event) {
	/* Act on the event */
if ($('.search-button').attr("click-state")==1) {
	 $('.search-button').attr('click-state', 0);
     $('.search-button').removeClass('c-active');
     $(".search-form").css('display', 'none');
}
});	

$('.search-button').click(function(t) {
	t.preventDefault();
	/* Act on the event */

	 if($('.search-button').attr('click-state') == 1) {
        $('.search-button').attr('click-state', 0);
      $('.search-button').removeClass('c-active');
        $(".search-form").css('display', 'none')
      }
    else {
      $('.search-button').attr('click-state', 1);
      	$('.search-button').addClass('c-active');
      $(".search-form").css('display', 'block')
    }
});

$('.filter-botton').click(function(e) {
  e.preventDefault();
  /* Act on the event */

   if($('.filter-botton').attr('filter-click-state') == 1) {
        $('.filter-botton').attr('filter-click-state', 0);
        $('.show-hide').html('SHOW<i class="fas fa-caret-down size-caret fa-lg ps-1"></i>');
        $(".filter-row").css('display', 'none');
      }
    else {
      $('.filter-botton').attr('filter-click-state', 1);
      $('.show-hide').html('HIDE<i class="fas fa-caret-up size-caret fa-lg ps-1"></i>');
      $(".filter-row").css('display', 'block');
    }
});

});