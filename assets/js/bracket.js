

$( document ).ready(function() {

	$('.bracket a').on("click", function(event) {
		event.preventDefault();
		//out($(this));
		//get game info
		// out($(this).parent());
		info = $(".team",this).attr("id").split("-");
		region = info[0];
		round = info[1];
		game = info[2];
		team_id = info[3];
		seed = $(".seed",this).text();
		team_name = $(".team_name",this).text();
		//out(seed+team_name);
		if(round <= 5) {
			next_game = get_game(region,round,game);
			next_game.id = team_id;
			next_game.team_name = team_name;
			next_game.seed = seed;
			//out(next_game)
			fill_game(next_game);
		}
		else {
			next_game = new Object();
			next_game.id = team_id;
			next_game.team_name = team_name;
			next_game.seed = seed;
			fill_champ(next_game);
		}
		
	});

});
function fill_champ(details) {
	var new_game = $('#champ');
	$(".seed",new_game).text(details.seed);
	$(".team_name",new_game).text(details.team_name);
}

function fill_game(details) {
	var id = details.region+"-"+details.round +"-"+details.game+"-"+details.team;
	//out(id);
	var new_game = $('#'+id);
	$(".seed",new_game).text(details.seed);
	$(".team_name",new_game).text(details.team_name);
}

function get_game(region, round, game) {
	output = new Object();
	next_games = Object();
		next_games.round1 = new Array("0-0","1-1","1-2","2-1","2-2","3-1","3-2","4-1","4-2");
		next_games.round2 = new Array("0-0","1-1","1-2","2-1","2-2");
		next_games.round3 = new Array("0-0","1-1","1-2");
		next_games.round4 = new Array("1-1","1-1","1-1","1-1");
		next_games.round5 = new Array("1-1","1-1","1-2","1-2","1-2");
		
		output.region = region;
		output.round = parseInt(round)+1;
		//out(game);
		game_info = next_games['round'+round][game].split("-");
		output.game = game_info[0];
		output.team = game_info[1];
	// out(region);
	// if(output.round == 6 && (output.region == 4 || output.region == 2)) output.team = 2; 
	if(output.round == 6) 
		if(output.region == 2) output.region = 4;
		else if(output.region == 1) output.region = 3;


	return output;
}

function out(data){
	console.log(data);
}