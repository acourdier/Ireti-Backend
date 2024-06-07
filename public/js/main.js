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
document.addEventListener('DOMContentLoaded', function() {
  const loaderWrapper = document.getElementById('loader-wrapper');

  // Hide the loader once the DOM is fully loaded
  loaderWrapper.style.display = 'none';

  // Show loader on AJAX start
  $(document).ajaxStart(function() {
      loaderWrapper.style.display = 'block';
  });

  // Hide loader on AJAX complete
  $(document).ajaxComplete(function() {
      loaderWrapper.style.display = 'none';
  });
});

