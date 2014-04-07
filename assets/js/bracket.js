

$( document ).ready(function() {

$('.bracket a').on("click", function(event) {
		out($(this));
		//get game info
		out($(this).parent());
		info = $(".team",this).attr("id").split("-");
		region = info[0];
		round = info[1];
		game = info[2];
		team_id = info[3];
		team_name = 
		out($(".seed",this).text());
		out($(".seed",this).sibling().text());

	});

});



function out(data){
	console.log(data);
}