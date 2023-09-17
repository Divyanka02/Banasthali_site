
//elements
var sendBtn = document.getElementById('sendBtn');
var textbox = document.getElementById('textbox');
var chatContainer = document.getElementById('chatContainer'); 

var user = {message:""};

function getDate() {

	var date = new Date();
	var day = date.getDay(); //0-6
	var month = date.getMonth(); //0-11
	var dayOfMonth = date.getDate(); //1-31
	
	var dayArray = ['Sunday','Monday','Tuesday','Wednsday','Thursday','Friday','Saturday'];
	var monthArray = ['Jan','Feb','Mar','Apr','May','Jun','Jul',"Aug",'Sep','Oct','Nov','Dec'];

	return dayArray[day] + " , " +  monthArray[month] + " " + dayOfMonth;

}

var arrayOfPossibleMessages = [

	{"message":"how are you?","response":"Alive and Kicking!"},
	{"message":"hello!","response":"Hi!"},
	{"message":"hi","response":"Hi!"},
	{"message":"who are you?","response":"I'm your octo-assistant"},
	{"message":"what's your name?","response":"I am Ursula"},
	{"message":"what is your name?","response":"I am Ursula"},
	{"message":"how old are you?","response":"I'm ageless"},
	{"message":"do you have kids?","response":"I'm just a software"},
	
	{"message":"do you sleep early?","response":"Actually, I'm awake 24/7"},
	{"message":"do you have a car?","response":"Who needs a car when you have got tentacles"},
	{"message":"can you dance?","response":"Yes, I'm an expert at Octango"}, 
	
	//{"message":"find me a job","response":"<a href='HP.html' target='_blank'>Click Here</a>"},
	
	{"message":"today's date","response":getDate()},// will display date
	{"message":"today date","response":getDate()},// will display date
	{"message":"what is today's date","response":getDate()},// will display date
	{"message":"what's today's date","response":getDate()},// will display date
	{"message":"what is today date","response":getDate()},// will display date
	{"message":"what's today date","response":getDate()},// will display date
	
	{"message":"about you?","response":"I am an assistant for this website"},
	
	//admission portal
	{"message":"when will admission portal open up?","response":"It is open <a href='higherAdmissionForm.html' target='_blank'>Click Here</a> for higher education. <a href='schooladmission.php' target='_blank'>Click Here</a> for school education."},
	{"message":"when'll admission portal open up?","response":"It is open <a href='higherAdmissionForm.html' target='_blank'>Click Here</a> for higher education. <a href='schooladmission.php' target='_blank'>Click Here</a> for school education."},
	{"message":"admission portal?","response":"It is open <a href='higherAdmissionForm.html' target='_blank'>Click Here</a> for higher education. <a href='schooladmission.php' target='_blank'>Click Here</a> for school education."},
	{"message":"is admission portal open?","response":"It is open <a href='higherAdmissionForm.html' target='_blank'>Click Here</a> for higher education. <a href='schooladmission.php' target='_blank'>Click Here</a> for school education."},
	
	//about admission
	{"message":"ug admission?","response":"Admission in Banasthali is now open. <a href='higherAdmissionForm.html' target='_blank'>Click Here</a> to fill your details"},
	{"message":"pg admission?","response":"Admission in Banasthali is now open. <a href='higherAdmissionForm.html' target='_blank'>Click Here</a> to fill your details"},
	{"message":"ph.d admission?", "response": "Admission in Banasthali is now open. <a href='higherAdmissionForm.html' target='_blank'>Click Here</a> to fill your details"},
	{"message":"phd admission?", "response": "Admission in Banasthali is now open. <a href='higherAdmissionForm.html' target='_blank'>Click Here</a> to fill your details"},
	
	//about courses and eligibility
	{"message":"ug eligibility?","response":"Here you will know all about courses and eligibility <a href='HigherCourseTime.html' target='_blank'>Click Here</a>"},
	{"message":"pg eligibility?","response":"Here you will know all about courses and eligibility <a href='HigherCourseTime.html' target='_blank'>Click Here</a>"},
	{"message":"ug courses?","response":"Here you will know all about courses and eligibility <a href='HigherCourseTime.html' target='_blank'>Click Here</a>"},
	{"message":"pg courses?","response":"Here you will know all about courses and eligibility <a href='HigherCourseTime.html' target='_blank'>Click Here</a>"},
	
	//about phd courses
	{"message":"ph.d courses?", "response": "Here you will know all about phd and eligibility <a href='HigherPHD.html' target='_blank'>Click Here</a>"},
	{"message":"ph.d eligibility?", "response": "Here you will know all about phd and eligibility <a href='HigherPHD.html' target='_blank'>Click Here</a>"},
	{"message":"phd courses?", "response": "Here you will know all about phd and eligibility <a href='HigherPHD.html' target='_blank'>Click Here</a>"},
	{"message":"phd eligibility?", "response": "Here you will know all about phd and eligibility <a href='HigherPHD.html' target='_blank'>Click Here</a>"},
	
	//fee structure
	{"message":"fee structure of Banasthali?", "response": "Here you will know all about fee structure of Higher Education(<a href='HigherFees.html' target='_blank'>Click Here</a>) , School Education(<a href='feestructure.html' target='_blank'>Click Here</a>) and hostel too."},
	{"message":"hostel fee for higher education?", "response": "Scroll down here(<a href='HigherFees.html' target='_blank'>Click Here</a>) to know all about hostel fee of banasthali ."},
	{"message":"hostel fee for school education?", "response": "Scroll down here(<a href='feestructure.html' target='_blank'>Click Here</a>) to know all about hostel fee of banasthali ."},
	
	//about banasthali
	{"message":"about banasthali?", "response":"The Banasthali story has no parallel across globe. To know more about Banasthali <a href='About-Us.html' target='_blank'>Click Here</a>"},
	{"message":"about us?", "response":"The Banasthali story has no parallel across globe. To know more about Banasthali <a href='About-Us.html' target='_blank'></a>"},
	{"message":"about your university?","response": "The Banasthali story has no parallel across globe. To know more about Banasthali <a href='About-Us.html' target='_blank'>Click Here</a>"},
	{"message":"about this university?","response":"The Banasthali story has no parallel across globe. To know more about Banasthali <a href='About-Us.html' target='_blank'>Click Here</a>"},
	{"message":"tell me something about banasthali vidyapith","response":"The Banasthali story has no parallel across globe. To know more about Banasthali <a href='About-Us.html' target='_blank'>Click Here</a>"},
	{"message":"tell me about banasthali vidyapith","response":"The Banasthali story has no parallel across globe. To know more about Banasthali <a href='About-Us.html' target='_blank'>Click Here</a>"},
	{"message":"tell about banasthali vidyapith","response":"The Banasthali story has no parallel across globe. To know more about Banasthali <a href='About-Us.html' target='_blank'>Click Here</a>"},
	{"message":"tell about vidyapith","response":"The Banasthali story has no parallel across globe. To know more about Banasthali <a href='About-Us.html' target='_blank'>Click Here</a>"},
	
	//about school education of banasthali
	{"message":"about school education?","response":"Here you can know about School Education of Banasthali Vidyapith<a href='schooleducation.html' target='_blank'>Click Here</a>"},
	{"message":"school education?","response":"Here you can know about School Education of Banasthali Vidyapith<a href='schooleducation.html' target='_blank'>Click Here</a>"},
	{"message":"is admission for school open?","response":"It is open <a href='schooladmission.php' target='_blank'>Click Here</a> for school education admission."},
	
	//about hostels
	{"message":"hostel?", "response":"Here, you can know all about hostels and campus life<a href='CampusPage.html' target='_blank'>Click Here</a><br>And here is the photo gallery for it<a href='hostel.html' target='_blank'>Click Here</a>"},
	{"message":"about banasthali's hostel?", "response":"Here, you can know all about hostels and campus life <a href='CampusPage.html' target='_blank'>Click Here</a><br>And here is the photo gallery for it <a href='hostel.html' target='_blank'>Click Here</a>"},
	
	//residential campus
	{"message":"why is banasthali residential?", "response":"Since, Banasthali Vidyapith attracts students from all over India and is away from main city that is why it has been made residential."},
	{"message":"is banasthali residential?", "response":"Yes, it is."},
	{"message":"is it compulsory for students to stay in campus hostels?", "response":"Yes, but students whose parents are university staff can stay in with there parents."},
	{"message":"is it compulsory to stay in campus hostels?", "response":"Yes, but students whose parents are university staff can stay with there parents."},
	{"message":"about hostel?","response":"Here, you can know all about hostels and campus life <a href='CampusPage.html' target='_blank'>Click Here</a><br>And here is the photo gallery for it <a href='hostel.html' target='_blank'>Click Here</a>"},
	
	//campus life
	{"message":"how is campus life of banasthali?","response":"Campus life of banasthali is great. Students here learn and  incorporate 'Simple Living & High Thinking' in their life. Here, you can know more about campus life <a href='CampusPage.html' target='_blank'>Click Here</a><br>And here is the photo gallery for it <a href='photogallary.html' target='_blank'>Click Here</a><br> To every Banasthalite: Banasthali is a home away from home. You'll know once you come here."},
	
	//about five fold
	{"message":"about five fold education?", "response":"Five fold education policy is something you won't find in any university. This is the uniqueness of banasthali. <a href='fivefoldhome.html' target='_blank'>Click Here</a> to know in detail"},
	{"message":"what is five fold education?", "response":"Five fold education policy is something you won't find in any university. This is the uniqueness of banasthali. <a href='fivefoldhome.html' target='_blank'>Click Here</a> to know in detail"},
	
	{"message":"are all sports activities free of cost?", "response":"Yes, except aviation."},
	{"message":"is it compulsory for students to take part in extracurricular activities?", "response":"Each student must have atleast one activity per semester"},
	{"message":"is it compulsory for students to take part in extracurriculam?", "response":"Yes, it is."},
	{"message":"is it compulsory to take part in extracurriculam?", "response":"Yes, it is."},
	
	{"message":"do you have a student portal?","response":"Yes you can access it from home page"},
	{"message":"where is student portal?","response":"You can access it from home page"},
	

];

setTimeout(function(){
	chatbotSendMessage("Hi, Banasthali bot is here to help you <br> Type your queries in keywords <br> eg:<br> 1.  UG Admission <br>2. UG Eligibility <br> 3. About Banasthali <br>4. What is five fold Education ? <br>etc.<br>NOTE: Never enter the above mentioned index number.");
},3000);



//function to send message through bot
function chatbotSendMessage(messageText) {

	var messageElement = document.createElement('div')
	messageElement.classList.add('w-50');
	messageElement.classList.add('float-left');
	messageElement.classList.add('shadow-sm');
	messageElement.style.margin = "10px";
	messageElement.style.padding = "5px";
	/*messageElement.style.float = "right";*/
	
	messageElement.innerHTML = "<span>Chatbot: </span>"+
				"<span style="+"margin-top:10px;padding:15px"+">"+ messageText +"</span>" ;
	
	messageElement.animate([{easing:"ease-in", opacity: 0.4},{opacity: 1}],{duration: 1000});
	
	chatContainer.appendChild(messageElement);
	
	//scroll to last message
	chatContainer.scrollTop = chatContainer.scrollHeight;

}

//function used to receive user's message and style it accordingly
function sendMessage(messageText) {
	
	var messageElement = document.createElement('div')
	messageElement.classList.add('w-50');
	messageElement.classList.add('float-right');
	messageElement.classList.add('shadow-sm');
	messageElement.style.margin = "10px";
	messageElement.style.padding = "5px";
	messageElement.style.float = "right";
	
	messageElement.innerHTML = "<span>You: </span>"+
				"<span style="+"margin-top:10px;padding:15px"+">"+ messageText +"</span>" ;
	
	messageElement.animate([{easing:"ease-in", opacity: 0.4},{opacity: 1}],{duration: 1000});
	
	chatContainer.appendChild(messageElement);
	
	//scroll to last message
	chatContainer.scrollTop = chatContainer.scrollHeight;
	
}

//function used to send messages to the bot
sendBtn.addEventListener('click', function(e){
	
	if(textbox.value == "") {
		//prevent sending empty messages
		alert('Message Box Empty');
	
	}
	else {
	
	let messageText = textbox.value.trim();//trim extra whitespace characters
	
	user.message = messageText;
	
	sendMessage(messageText);
	textbox.value = "";
	
	processMessage();
	
	}
	
});

textbox.addEventListener('keypress',function(e){

	//if user hits the enter button
	if(e.which == 13){
	
		if(textbox.value == "") {
		//prevent sending empty messages
		alert('Message Box Empty');
	
		}
		else {
		
		let messageText = textbox.value;
		
		user.message = messageText;
		
		sendMessage(messageText);
		textbox.value = "";
		
		
		processMessage();
		
		}
	
	}

});
/*
textbox.addEventListener('keypress',function(e){

	//if user hits the enter button
	if(e.which == 13){
	
		if(textbox.value == "") {
		//prevent sending empty messages
		alert('Message Box Empty');
	
	}
	else if(e.which == 13 && e.which == 16){
	
	/*
	let messageText = textbox.value;
	
	user.message = messageText;
	
	sendMessage(messageText);
	textbox.value = "";
	
	
	processMessage();
	
	}
	
	}

});*/

function processMessage() {

	if(user.message.length > 5 || user.message.includes('hi') ) {
	
		//array of result
		var result = arrayOfPossibleMessages.filter(val => val.message.includes(user.message.toLowerCase()));
		
		if(result.length > 0) {
		
			var response = result[0].response;
		
			setTimeout(function(){
				chatbotSendMessage(response)
			},1500);
			
		}
		else {
		
			setTimeout(function(){
				chatbotSendMessage("Sorry, couldn't get ya")
			},1500);
		
		}
		
	}
	
	else if (user.message == "how" || user.message == "who") {
	
		setTimeout(function(){
			chatbotSendMessage("?")
		},1500);
	
	}
	
	else {
	
		setTimeout(function(){
			chatbotSendMessage("Please send me a complete sentence")
		},1500);
	
	}
	
	//to scroll down to latest message***
	chatContainer.scrollTop = chatContainer.scrollHeight;

}

