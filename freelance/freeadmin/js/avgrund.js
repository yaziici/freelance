(function($) {
  'use strict';
  $(function() {
		$('#show').avgrund({
			height: 500,
			holderClass: 'custom',
			showClose: true,
			showCloseText: 'close',
			onBlurContainer: '.container-scroller',
			template: '<p>So implement your design and place content here! If you want to close modal, please hit "Esc", click somewhere on the screen or use special button.</p>' +
			'<div>' +
			'<button class="btn btn-github btn-block"><i class="mdi mdi-github-circle"></i> Connect with Github</button>' +
			'<button class="btn btn-twitter btn-block"><i class="mdi mdi-twitter"></i> Connect with Twitter</button>' +
			'<button class="btn btn-dribbble btn-block"><i class="mdi mdi-dribbble-box"></i> Find us on Dribble</button>' +
			'</div>'
		});
	})
})(jQuery);
