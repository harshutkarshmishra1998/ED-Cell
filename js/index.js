function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
$(document).ready(function () {
  $(".vis-card").on("mouseenter", function (e) {
    (x = e.pageX - $(this).offset().left), (y = e.pageY - $(this).offset().top);
    $(this).find("span").css({ top: y, left: x });
  });
  $(".vis-card").on("mouseout", function (e) {
    (x = e.pageX - $(this).offset().left), (y = e.pageY - $(this).offset().top);
    $(this).find("span").css({ top: y, left: x });
  });
});

const counters = document.querySelectorAll(".counter");
const speed = 200;

counters.forEach((counter) => {
  const updCount = () => {
    const target = counter.getAttribute("data-target");
    const count = +counter.innerText;

    const score = target / speed;

    if (count < target) {
      counter.innerText = count + score;
      setTimeout(updCount, 1);
    } else {
      counter.innerText = target;
    }
  };
  updCount();
});

$(document).ready(function () {
  $("#autoWidth").lightSlider({
    autoWidth: true,
    loop: true,
    onSliderLoad: function () {
      $("#autoWidth").removeClass("cS-hidden");
    },
  });
});

$(".container").isotope({
  itemSelector: ".card",
  layoutMode: "fitRows",
});

$(".menu ul li a").click(function () {
  $(".menu ul li a").removeClass("active");
  $(this).addClass("active");

  var selector = $(this).attr("data-filter");
  $(".container").isotope({
    filter: selector,
  });
  return false;
});

function initMap() {
  const manit = { lat: 23.213119, lng: 1517.404585 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: manit,
  });
  const marker = new google.maps.Marker({
    position: manit,
    map: map,
  });
}