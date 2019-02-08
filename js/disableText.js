function disable() {

    if (document.getElementById('numberOfRooms').value == 2) {
        document.getElementById('hidden-option').style.display = "block";        
    }
    else {
        document.getElementById('hidden-option').style.display = "none";
    }

    if (document.getElementById('numberOfRooms').value >= 3) {
        document.getElementById('roomType').value = "ANY";
        document.getElementById('roomType').disabled = true;
    }
    else {
        document.getElementById('roomType').value = "SELECT";
        document.getElementById('roomType').disabled = false;
    }

}

function checkdate() {
var startDate = new Date($('#checkin_date').val());
var endDate = new Date($('#checkout_date').val());

if((startDate.getMonth() < endDate.getMonth())) {
    if((startDate.getDate() < endDate.getDate())) {
        alert("Error in date !");
    }

}
}