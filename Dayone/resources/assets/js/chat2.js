$(function() {
	'use strict'
	$('#chatActiveContacts').lightSlider({
		autoWidth: true,
		controls: false,
		pager: false,
		slideMargin: 12
	});
	
    const ps7 = new PerfectScrollbar('.main-chat-contacts-slider', {
        useBothWheelAxes: true,
        suppressScrollY: true,
		suppressScrollX:false,
    });
	
	const ps = new PerfectScrollbar('#ChatList', {
	  useBothWheelAxes:false,
	  suppressScrollX:true,
	});
	
	const ps1 = new PerfectScrollbar('#ChatBody', {
	  useBothWheelAxes:false,
	  suppressScrollX:true,
	});
	
	$('[data-bs-toggle="tooltip"]').tooltip();
	
});