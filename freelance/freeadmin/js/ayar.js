$("#yGiris").on("click", function(){
	var datakategori = $("#yGirisForm").serialize();
	$.ajax({
		url: "islem.php?islem=yGiris",
		type: "POST",
		data : datakategori,
		success: function(cevap){
			$("#yGirisAlert").html(cevap).hide().fadeIn(700);
		}
	});
	// body...
});

$("#yGiris").on("click", function(){
	alert('tamam');
	});

var btnSelam=document.getElementById("selam");
	btnSelam.onclick=function(){
		alert("Siteme Hoşgeldiniz");
	}