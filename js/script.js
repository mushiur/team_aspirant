var count_selector = 0;
var money = "৳ 30";
var money2 = "৳ 40";
var money3 = "৳ 50";
var type = "Normal";
var list = [];

var parent_div = document.getElementById("seat_confirm");
var parent_div2 = document.getElementById("seat_confirm2");
var parent_div3 = document.getElementById("seat_confirm3");

var seat_Name;

// document.getElementById("A1").addEventListener("click",function(){

//         this.style.backgroundColor = "red"
//         count_selector++;
//         if(count_selector % 2==0)
//         {
//             this.style.backgroundColor="rebeccapurple";
//             Remove_child(0);
//         }
//         else{

//             seat_Name = "A1";
//             inclose_information(seat_Name);
//         }

//     })

function click_event(value) {
  let seclected_id = document.getElementById(value);

  count_selector++;

  seat_Name = value;

  inclose_information(seat_Name);
}
function click_event2(value) {
  let seclected_id = document.getElementById(value);

  count_selector++;

  seat_Name = value;

  inclose_information2(seat_Name);
}
function click_event3(value) {
  let seclected_id = document.getElementById(value);

  count_selector++;

  seat_Name = value;

  inclose_information3(seat_Name);
}

// function Remove_child(value)
// {
//     parent_div.removeChild(parent_div.childNodes[value])

// }

/* creating a custome div */

function inclose_information(name) {
  var Main_container = document.createElement("div");
  Main_container.className = "Main_container_section";

  while (parent_div.firstChild) {
    parent_div.removeChild(parent_div.firstChild);
  }

  var p_seat = document.createElement("p");
  p_seat.className = "First_section";
  p_seat.id = "seat_number";
  p_seat.innerHTML = name;

  var p_fare = document.createElement("p");
  p_fare.className = "Second_section";
  p_fare.id = "fare_money";
  p_fare.innerHTML = money;

  var p_class = document.createElement("p");
  p_class.className = "Third_section";
  p_class.innerHTML = type;

  Main_container.appendChild(p_seat);
  Main_container.appendChild(p_fare);
  Main_container.appendChild(p_class);

  parent_div.appendChild(Main_container);
}
function inclose_information2(name) {
  var Main_container = document.createElement("div");
  Main_container.className = "Main_container_section";

  while (parent_div2.firstChild) {
    parent_div2.removeChild(parent_div2.firstChild);
  }

  var p_seat = document.createElement("p");
  p_seat.className = "First_section";
  p_seat.id = "seat_number2";
  p_seat.innerHTML = name;

  var p_fare = document.createElement("p");
  p_fare.className = "Second_section";
  p_fare.id = "fare_money2";
  p_fare.innerHTML = money2;

  var p_class = document.createElement("p");
  p_class.className = "Third_section";
  p_class.innerHTML = type;

  Main_container.appendChild(p_seat);
  Main_container.appendChild(p_fare);
  Main_container.appendChild(p_class);

  parent_div2.appendChild(Main_container);
}
function inclose_information3(name) {
  var Main_container = document.createElement("div");
  Main_container.className = "Main_container_section";

  while (parent_div3.firstChild) {
    parent_div3.removeChild(parent_div3.firstChild);
  }

  var p_seat = document.createElement("p");
  p_seat.className = "First_section";
  p_seat.id = "seat_number";
  p_seat.innerHTML = name;

  var p_fare = document.createElement("p");
  p_fare.className = "Second_section";
  p_fare.id = "fare_money";
  p_fare.innerHTML = money3;

  var p_class = document.createElement("p");
  p_class.className = "Third_section";
  p_class.innerHTML = type;

  Main_container.appendChild(p_seat);
  Main_container.appendChild(p_fare);
  Main_container.appendChild(p_class);

  parent_div3.appendChild(Main_container);
}

// function showOff()
// {
//     document.getElementById("main_bus_container").style.display = "flex"
//     document.getElementById("straight_line").style.display="block";
//     document.getElementById("last_div").style.display = "flex";

// }

document.getElementById("cancel_data").addEventListener("click", function () {
  while (parent_div.firstChild) {
    parent_div.removeChild(parent_div.firstChild);
  }
  cancelFunc();
});

document.getElementById("cancel_data2").addEventListener("click", function () {
  while (parent_div2.firstChild) {
    parent_div2.removeChild(parent_div2.firstChild);
  }
  cancelFunc();
});

document.getElementById("cancel_data3").addEventListener("click", function () {
  while (parent_div3.firstChild) {
    parent_div3.removeChild(parent_div3.firstChild);
  }
  cancelFunc();
});

function cancelFunc() {
  document.getElementById("payment").style.display = "none";
}
