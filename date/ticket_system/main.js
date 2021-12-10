var Coach_num;
var fare_money,ID_number,mobile_number;



document.getElementById("view_port").addEventListener("click",function(){

    document.getElementById("section_one").style.display="none";
    document.getElementById("section_two").style.display="block"
})



function DataCatch(){

    alert("hello")

    ID_number = document.getElementById("pin").value;
    mobile_number = document.getElementById("num").value;
    Coach_num = document.getElementById("seat_number").innerHTML.toString();
    fare_money = document.getElementById("fare_money").innerHTML.toString();

    var obj = {};

    obj.DIU_ID = ID_number;
    obj.Mobile = mobile_number;
    obj.SeatNumber = Coach_num;
    obj.Fare = fare_money;

    console.log(obj);
}
