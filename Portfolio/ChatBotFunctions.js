var bot = new RiveScript();

bot.loadFile("ChatBotBrain.rive").then(loading_done).catch(loading_error);

function loading_done(){
	console.log("ADE is ready");
	bot.sortReplies();

	let username = "local-user";

	bot.reply(username, "hello bot").then(function(reply) {
    console.log("The bot says: " + reply);
  });

}

function loading_error(){
	console.log("Error!");
}

// Daniel Shiffman
// http://codingtra.in
// http://patreon.com/codingtrain

// Number Guessing Chatbot
// Edited Video: https://www.youtube.com/watch?v=zGe1m_bLOFk
// function setup() {
//   noCanvas();

//   let bot = new RiveScript();
//   bot.loadFile("ChatBotBrain.rive", brainReady, brainError);

//   function brainReady() {
//     console.log('Chatbot ready!');
//     bot.sortReplies();
//     let num = floor(random(10)) + 1;
//     console.log(num);
//     let reply = bot.reply('local-user', 'set ' + num);
//   }

//   function brainError() {
//     console.log('Chatbot error!')
//   }


//   let button = select('#submit');
//   let user_input = select('#user_input');
//   let output = select('#output');

//   button.mousePressed(chat);

//   function chat() {
//     let input = user_input.value();
//     let reply = bot.reply("local-user", input);
//     output.html(reply);
//   }

//