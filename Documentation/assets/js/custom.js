
$(function() {
	$('.main-sidebar .with-sub').on('click', function(e) {
			e.preventDefault();
			$(this).parent().toggleClass('show');
			$(this).parent().siblings().removeClass('show');
		})	
	});
	
	$(document).scroll(function() {
		var url = window.location; 
		let elem = $('.theme-blush .sidebar .menu .list li');
		elem.map((ind, el)=>{
			if(el.children[0].href !== url.href){
				el.classList.remove('active')
			}
			else{
				el.classList.add('active')
			}
		})
	});

	// Toggle Sidebar
	$('[data-toggle="sidebar"]').click(function(event) { 
		event.preventDefault();
		$('body').toggleClass('ls-closed');
	});
	

	
	
	
	
	
	
	
	
	
	
	
	