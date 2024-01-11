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
  
  // popup images
//   document.addEventListener("DOMContentLoaded", function () {
//     const portfolioItems = document.querySelectorAll(".item");
  
//     portfolioItems.forEach(function (item) {
//       const image = item.querySelector("img");
//       const popupContainer = document.createElement("div");
//       popupContainer.classList.add("popup-container");
//       popupContainer.innerHTML = `<img class="popup-image" src="${image.src}" alt="">`;
//       document.body.appendChild(popupContainer);
  
//       item.addEventListener("click", function () {
//         popupContainer.style.display = "flex";
//       });
  
//       popupContainer.addEventListener("click", function () {
//         popupContainer.style.display = "none";
//       });
//     });
//   });

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