// isotope js
var grid = $(".portfolio-item").isotope({
    // options
    itemSelector: ".item",
    layoutMode: "fitRows",
  });
  
  $(".portfolio-menu ul li").click(function () {
    $(".portfolio-menu ul li").removeClass("active");
    $(this).addClass("active");
    var category = $(this).data("filter");
    grid.isotope({
      filter: category,
    });
  });


$(".brand-owl").owlCarousel({
	loop: true,
	autoplay: true,
	items: 1,
	stagePadding: 5,
	margin: 50,
	nav: false,
	dots:true,
	responsive: {
	  0: {
		items: 3,
	  },
	  600: {
		items: 3,
	  },
	  1000: {
		items: 5,
	  },
	},
  });

  $(".brand-small-owl").owlCarousel({
	loop: true,
	autoplay: true,
	items: 1,
	stagePadding: 5,
	margin: 50,
	nav: false,
	dots:false,
	responsive: {
	  0: {
		items: 1,
	  },
	  600: {
		items: 3,
	  },
	  1000: {
		items: 4,
	  },
	},
  });

//   popup images
