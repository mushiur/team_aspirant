document
  .getElementById("confirm_seated")
  .addEventListener("click", function () {
    var data = document.getElementById("seat_confirm");
    if (data.children.length === 0) {
      alert("Please choose any seat first. Then confirm your reservation");
      return;
    }

    document.getElementById("payment").style.display = "block";
  });

document
  .getElementById("confirm_seated2")
  .addEventListener("click", function () {
    var data = document.getElementById("seat_confirm2");
    if (data.children.length === 0) {
      alert("Please choose any seat first. Then confirm your reservation");
      return;
    }

    document.getElementById("payment").style.display = "block";
  });

document
  .getElementById("confirm_seated3")
  .addEventListener("click", function () {
    var data = document.getElementById("seat_confirm3");
    if (data.children.length === 0) {
      alert("Please choose any seat first. Then confirm your reservation");
      return;
    }

    document.getElementById("payment").style.display = "block";
  });

function cancelFunc() {
  document.getElementById("payment").style.display = "none";
}
