$(document).ready(function () { //ready cung cap 1 ham khi tai lieu duoc tai
	LoadData();
});
function LoadData() {
	$.ajax({
		url:'https://private-9092ee-quynh1.apiary-mock.com/quynh',
		type:'GET',
		success:function (rss) {
			console.log(rss);
		}

	});
	// body...
}