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