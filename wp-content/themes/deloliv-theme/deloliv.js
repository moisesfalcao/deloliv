$ = jQuery;
$(function () {
  /* home animations */
  $(".header-geral .logo").css({ opacity: 1, "margin-left": 0 });
  $(".overview").css({ opacity: 1 });
  $("body.home footer .sobre").css({ opacity: 1, "margin-bottom": 0 });
  $(".project-nav .item:eq(0)").addClass("active");
  $(".home-projects .item").width();
  /*    !home animations */

  /* home slides navigation */
  $(".project-nav .next").click(function () {
    homeProjects("next");
  });
  $(".project-nav .prev").click(function () {
    homeProjects("prev");
  });
  /* !home slides navigation */

  /* inicializa o menu */
  $(".toggle").click(function () {
    $(".overlay").toggleClass("active");
    return false;
  });
  $(".overlay").click(function () {
    $(".overlay").toggleClass("active");
  });

  /* Function: slides (prev|next) home */
  function homeProjects(direction) {
    if (direction == "next") {
      if ($(".home-projects .item:last").hasClass("active")) {
        $(".home-projects .item, .project-nav .item").removeClass("active");
        $(".home-projects .item:first, .project-nav .item:first ").addClass(
          "active"
        );
      } else {
        $(".home-projects .item.active, .project-nav .item.active")
          .next()
          .addClass("active");
        $(
          ".home-projects .item.active:first, .project-nav .item.active:first"
        ).removeClass("active");
      }
    }

    if (direction == "prev") {
      if ($(".home-projects .item:first").hasClass("active")) {
        $(".home-projects .item, .project-nav .item").removeClass("active");
        $(".home-projects .item:last, .project-nav .item:last").addClass(
          "active"
        );
      } else {
        $(".home-projects .item.active, .project-nav .item.active")
          .prev()
          .addClass("active");
        $(
          ".home-projects .item.active:last, .project-nav .item.active:last"
        ).removeClass("active");
      }
    }
  }
  /* !Function: slides (prev|next) home */
});
