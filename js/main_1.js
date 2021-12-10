var Coach_num;
var fare_money, ID_number, mobile_number;

var user = firebase.auth().currentUser;
var db = firebase.database();
var database_ref = db.ref();

document.getElementById("view_port").addEventListener("click", function () {
  document.getElementById("section_one").style.display = "none";
  document.getElementById("section_two").style.display = "block";
});

document.getElementById("view_port_1").addEventListener("click", function () {
  document.getElementById("section_one").style.display = "none";
  document.getElementById("section_three").style.display = "block";
});
document.getElementById("view_port_2").addEventListener("click", function () {
  document.getElementById("section_one").style.display = "none";
  document.getElementById("section_four").style.display = "block";
});

function DataCatch() {
  ID_number = document.getElementById("pin").value;
  mobile_number = document.getElementById("num").value;
  Coach_num = document.getElementById("seat_number").innerHTML.toString();
  fare_money = document.getElementById("fare_money").innerHTML.toString();

  var obj = {};

  obj.DIU_ID = ID_number;
  obj.Mobile = mobile_number;
  obj.SeatNumber = Coach_num;
  obj.Fare = fare_money;
  obj.BusName = "Surjomukhi";

  firebase.auth().onAuthStateChanged((user) => {
    if (user) {
      database_ref.child("StudentData/" + user.uid).push(obj);
      alert("Thank You");
      document.getElementById("payment").style.display = "none";
    } else {
      alert("You need to register First");
      return;
    }
  });
}
