AOS.init();
$(document).ready(function () {
  $(".toggler").click(function () {
    $(".leftmain").toggle();
  });
  $(".services-btn").click(function () {
    $(".cus-dropdown").toggle();
    $(".activeic").toggle();
    $(".inactiveic").toggle();
  });
});
document.getElementById("photo").addEventListener("change", handleFileSelect);

function handleFileSelect(event) {
  const input = event.target;
  const userPhoto = document.getElementById("user_photo_staff");
  const file = input.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      userPhoto.src = e.target.result;
    };
    reader.readAsDataURL(file);
  }
}
