$(".page-scroll").on("click", function (e) {
  let href = $(this).attr("href");
  $("html").animate(
    {
      scrollTop: $(href).offset().top - 65,
    },
    800
  );
  e.preventDefault;
});
