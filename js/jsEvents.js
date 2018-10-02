			AOS.init();

			Modernizr.load({
				test: Modernizr.csstransforms3d && Modernizr.csstransitions,
				yep : ['//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js','js/jquery.hoverfold.js'],
				nope: 'css/fallback.css',
				callback : function( url, result, key ) {
						
					if( url === 'js/jquery.hoverfold.js' ) {
				$( '#grid' ).hoverfold();
					}

				}
			});
			
	        function checkWidth()
            {
            	if($(window).width()>=1330)
            		return true;
            	else
            		return false;
            }

            function checkWidth2()
            {
            	if($(window).width()<1330 && $(window).width()>=892)
            		return true;
            	else
            		return false;
            }

            function checkWidth3()
            {
            	if($(window).width()<892)
            		return true;
            	else
            		return false;
            }

			$(document).ready(function() {
				
				checkWidth();

				$(document).resize(function() {
					checkWidth();
				});

				checkWidth2();

				$(document).resize(function() {
					checkWidth2();
				});

				checkWidth3();

				$(document).resize(function() {
					checkWidth3();
				});


				//onClick functionality for 332 layout


				$("#img1").click(function() {
					if(checkWidth()){
					$("#text1_332").slideToggle(400,function(){
						$("#img2,#img3,#img4,#img5,#img6,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text1_332").slideUp("slow")
						});
					});}
				});

				$("#img2").click(function() {
					if(checkWidth()){
					$("#text2_332").slideToggle(400,function(){
						$("#img1,#img3,#img4,#img5,#img6,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text2_332").slideUp("slow")
						});
					});}
				});

				$("#img3").click(function() {
					if(checkWidth()){
					$("#text3_332").slideToggle(400,function(){
						$("#img1,#img2,#img4,#img5,#img6,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text3_332").slideUp("slow")
						});
					});}
				});

				$("#img4").click(function() {
					if(checkWidth()){
					$("#text4_332").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img5,#img6,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text4_332").slideUp("slow")
						});
					});}
				});

				$("#img5").click(function() {
					if(checkWidth()){
					$("#text5_332").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img6,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text5_332").slideUp("slow")
						});
					});}
				});

				$("#img6").click(function() {
					if(checkWidth()){
					$("#text6_332").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text6_332").slideUp("slow")
						});
					});}
				});

				$("#img7").click(function() {
					if(checkWidth()){
					$("#text7_332").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img6,#img8,#img9,#img10,#img11").click(function() {
							$("#text7_332").slideUp("slow")
						});
					});}
				});

				$("#img8").click(function() {
					if(checkWidth()){
					$("#text8_332").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img6,#img7,#img9,#img10,#img11").click(function() {
							$("#text8_332").slideUp("slow")
						});
					});}
				});

				$("#img9").click(function() {
					if(checkWidth()){
					$("#text9_332").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img6,#img7,#img8,#img10,#img11").click(function() {
							$("#text9_332").slideUp("slow")
						});
					});}
				});

				$("#img10").click(function() {
					if(checkWidth()){
					$("#text10_332").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img6,#img7,#img8,#img9,#img11").click(function() {
							$("#text10_332").slideUp("slow")
						});
					});}
				});

				$("#img11").click(function() {
					if(checkWidth()){
					$("#text11_332").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img6,#img7,#img8,#img9,#img10").click(function() {
							$("#text11_332").slideUp("slow")
						});
					});}
				});
				

				//onClick functionality for 2222 layout


				$("#img1").click(function() {
					if(checkWidth2()){
					$("#text1_2222").slideToggle(400,function(){
						$("#img2,#img3,#img4,#img5,#img6,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text1_2222").slideUp("slow")
						});
					});}
				});

				$("#img2").click(function() {
					if(checkWidth2()){
					$("#text2_2222").slideToggle(400,function(){
						$("#img1,#img3,#img4,#img5,#img6,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text2_2222").slideUp("slow")
						});
					});}
				});

				$("#img3").click(function() {
					if(checkWidth2()){
					$("#text3_2222").slideToggle(400,function(){
						$("#img1,#img2,#img4,#img5,#img6,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text3_2222").slideUp("slow")
						});
					});}
				});

				$("#img4").click(function() {
					if(checkWidth2()){
					$("#text4_2222").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img5,#img6,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text4_2222").slideUp("slow")
						});
					});}
				});

				$("#img5").click(function() {
					if(checkWidth2()){
					$("#text5_2222").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img6,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text5_2222").slideUp("slow")
						});
					});}
				});

				$("#img6").click(function() {
					if(checkWidth2()){
					$("#text6_2222").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text6_2222").slideUp("slow")
						});
					});}
				});

				$("#img7").click(function() {
					if(checkWidth2()){
					$("#text7_2222").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img6,#img8,#img9,#img10,#img11").click(function() {
							$("#text7_2222").slideUp("slow")
						});
					});}
				});

				$("#img8").click(function() {
					if(checkWidth2()){
					$("#text8_2222").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img6,#img7,#img9,#img10,#img11").click(function() {
							$("#text8_2222").slideUp("slow")
						});
					});}
				});

				$("#img9").click(function() {
					if(checkWidth2()){
					$("#text9_2222").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img6,#img7,#img8,#img10,#img11").click(function() {
							$("#text9_2222").slideUp("slow")
						});
					});}
				});

				$("#img10").click(function() {
					if(checkWidth2()){
					$("#text10_2222").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img6,#img7,#img8,#img9,#img11").click(function() {
							$("#text10_2222").slideUp("slow")
						});
					});}
				});

				$("#img11").click(function() {
					if(checkWidth2()){
					$("#text11_2222").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img6,#img7,#img8,#img9,#img10").click(function() {
							$("#text11_2222").slideUp("slow")
						});
					});}
				});


				//onClick functionality for 111 layout


				$("#img1").click(function() {
					if(checkWidth3()){
					$("#text1_111").slideToggle(400,function(){
						$("#img2,#img3,#img4,#img5,#img6,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text1_111").slideUp("slow")
						});
					});}
				});

				$("#img2").click(function() {
					if(checkWidth3()){
					$("#text2_111").slideToggle(400,function(){
						$("#img1,#img3,#img4,#img5,#img6,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text2_111").slideUp("slow")
						});
					});}
				});

				$("#img3").click(function() {
					if(checkWidth3()){
					$("#text3_111").slideToggle(400,function(){
						$("#img1,#img2,#img4,#img5,#img6,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text3_111").slideUp("slow")
						});
					});}
				});

				$("#img4").click(function() {
					if(checkWidth3()){
					$("#text4_111").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img5,#img6,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text4_111").slideUp("slow")
						});
					});}
				});

				$("#img5").click(function() {
					if(checkWidth3()){
					$("#text5_111").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img6,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text5_111").slideUp("slow")
						});
					});}
				});

				$("#img6").click(function() {
					if(checkWidth3()){
					$("#text6_111").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img7,#img8,#img9,#img10,#img11").click(function() {
							$("#text6_111").slideUp("slow")
						});
					});}
				});

				$("#img7").click(function() {
					if(checkWidth3()){
					$("#text7_111").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img6,#img8,#img9,#img10,#img11").click(function() {
							$("#text7_111").slideUp("slow")
						});
					});}
				});

				$("#img8").click(function() {
					if(checkWidth3()){
					$("#text8_111").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img6,#img7,#img9,#img10,#img11").click(function() {
							$("#text8_111").slideUp("slow")
						});
					});}
				});

				$("#img9").click(function() {
					if(checkWidth3()){
					$("#text9_111").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img6,#img7,#img8,#img10,#img11").click(function() {
							$("#text9_111").slideUp("slow")
						});
					});}
				});

				$("#img10").click(function() {
					if(checkWidth3()){
					$("#text10_111").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img6,#img7,#img8,#img9,#img11").click(function() {
							$("#text10_111").slideUp("slow")
						});
					});}
				});

				$("#img11").click(function() {
					if(checkWidth3()){
					$("#text11_111").slideToggle(400,function(){
						$("#img1,#img2,#img3,#img4,#img5,#img6,#img7,#img8,#img9,#img10").click(function() {
							$("#text11_111").slideUp("slow")
						});
					});}
				});


				//Hover functionality for Robotics

				$(".text1_li1").hover(function() {

						$("#Robotics1, #Robotics2, #Robotics3").html("<h1>Aqua Soccer</h1>AQUA-SOCCER is one of the popular and successful event held during ANWESHA, now it’s time we should include it in CELESTA .It has capabilities to attract participation from all year students as well as other colleges.<br><br><br>");
				},function(){
						$("#Robotics1, #Robotics2, #Robotics3").html(" ");
				});

				$(".text1_li2").hover(function() {

						$("#Robotics1, #Robotics2, #Robotics3").html("<h1>RoboWar</h1>This is the most popular event of IIT Patna. After feeling the adrenaline rush of Death Race, it's time to show power of your bot and your strategy in the battlefield.This event will test the co-ordination between speed ,power and strategy...<br><br><br>");
				},function(){
						$("#Robotics1, #Robotics2, #Robotics3").html(" ");
				});

				$(".text1_li3").hover(function() {

						$("#Robotics1, #Robotics2, #Robotics3").html("<h1>Maze Solver</h1>There will be a maze designed symmetrically for two sides. The maze will have dead-ends, alternate paths etc. Both teams will have a starting point where they will put their bots. The bots have to reach the end point of the maze from the starting point.<br><br><br>");
				},function(){
						$("#Robotics1, #Robotics2, #Robotics3").html(" ");
				});


				//Hover functionality for Build-!t

				$(".text2_li1").hover(function() {

						$("#Build-It1,#Build-It2,#Build-It3").html("<h1>Spagaridge</h1>Design and construct a model of a single span truss bridge with the help of spaghetti noodles satisfying the constraints stated below.<br><br><br>");
				},function(){
						$("#Build-It1,#Build-It2,#Build-It3").html("  ");
				});

				$(".text2_li2").hover(function() {

						$("#Build-It1,#Build-It2,#Build-It3").html("<h1>House of Cards</h1>Ever wondered what holds up monstrous skyscrapers, beautiful monuments or one's own house ? Concrete ? Pillars ? Well, the right answer is PASSION. Passion to create, passion to build, passion to design. If one has the passion, then even cards can behold the structures. <br> Celesta brings you a chance of showing your engineering skills with cards and passion ! So, get innovative and build your own HOUSE OF CARDS !!<br><br><br>");
				},function(){
						$("#Build-It1,#Build-It2,#Build-It3").html("  ");
				});

				$(".text2_li3").hover(function() {

						$("#Build-It1,#Build-It2,#Build-It3").html("<h1>Chem-e-Switch</h1> Are you that budding engineer who gets super-excited while tinkering with chemicals? Are you amazed by the variety and versatility of reactions that happen to matter around us? Then this is the right platform for you to experiment with your ideas. Come and reproduce a mechanism with the help of your knowledge in chemistry and engineering skills in order to automate the switch of an electric circuit we've got ready for you. The aim is to make the mechanism turn off the switch of the circuit within the specified time. So bounce those exemplary ideas off your brain, 'coz the stage is set for Chem-e-Switch.<br><br><br>");
				},function(){
						$("#Build-It1,#Build-It2,#Build-It3").html("  ");
				});

				$(".text2_li4").hover(function() {

						$("#Build-It1,#Build-It2,#Build-It3").html("<h1>Rocket Propulsion</h1>Macaroni and cheese <br> Everybody freeze!! <br> In Celeste’17, the Threshold Club presents you “Rocket Propulsion” <br> Bottle with head and flow <br> Ready to fly with a blow <br> It's time for you to win and glow<br><br><br>");
				},function(){
						$("#Build-It1,#Build-It2,#Build-It3").html("  ");
				});

				$(".text2_li5").hover(function() {

						$("#Build-It1,#Build-It2,#Build-It3").html("<h1>CAD Master</h1>Use the power of our global online community to apply thousands of engineering minds to your design problem for less than the price of one. Whether you have a brand new invention on the back of an envelope and you need to turn it into reality, an old part that has stubbornly never worked quite right, an aesthetic challenge you'd like the design world's opinion on, or you'd just like to inject some fresh ideas into your current in-house design department, a CAD Master Challenge is the most effective way to get the engineering world working on your problem. <br> A CAD master challenge is also a great way to let the tech community know about your exciting new designs and your passion for optimum design.<br><br><br>");
				},function(){
						$("#Build-It1,#Build-It2,#Build-It3").html("  ");
				});

				//Hover functionality for Let's Code

				$(".text3_li1").hover(function() {

						$("#Coding1,#Coding2,#Coding3").html("<h1>Capture The Flag</h1>Capture the Flag is hacking challenge where you can prove your hacking skills. This challenge will test your basic understanding of various fields of Computer Science.<br><br><br>");
				},function(){
						$("#Coding1,#Coding2,#Coding3").html(" ");
				});

				$(".text3_li2").hover(function() {

						$("#Coding1,#Coding2,#Coding3").html("<h1>ByteRace</h1>ByteRace is a challenge for minds that have honed the art of problem solving. This competition presents challenges for you to solve using code. So if you get the adrenaline rush when you see a difficult problem in front of you then this is definitely for you.<br><br><br>");
				},function(){
						$("#Coding1,#Coding2,#Coding3").html(" ");
				});

				//Hover functionality for Management

				$(".text4_li1").hover(function() {

						$("#Management1,#Management2,#Management3").html("<h1>Monopoly</h1>“Monopoly is Business at the end of its journey”<br><br>There is a haggler, manager, entrepreneur inside every person. To reminiscence you to your childhood, to bring forth your talent and to introduce you to real business world, Celesta'17 in association with Entrepreneurship Club, IIT Patna presents Monopoly.<br><br><br>");
				},function(){
						$("#Management1,#Management2,#Management3").html("  ");
				});

				$(".text4_li2").hover(function() {

						$("#Management1,#Management2,#Management3").html("<h1>B-Quiz</h1>\"Trust yourself, you know more than you think you do.\"<br><br>The opportunity to show your skills and knowledge in the field of business is knocking your door.We have a variety of question to satisfy everyone from a hardcore business enthusiast to an enthusiastic newcomer. So brush up your grey cells, hone your business skills and get ready for yet another edition of business quiz.<br><br><br>");
				},function(){
						$("#Management1,#Management2,#Management3").html("  ");
				});

				$(".text4_li3").hover(function() {

						$("#Management1,#Management2,#Management3").html("<h1>IPL Auction</h1>Ever thought what you would do if you got a chance to build your own IPL team. To use your knowledge of the ‘Big Game’ and your sixth sense to create the perfect team that goes on to lift the coveted Trophy. To use permutation and combination and make the best choice keeping in mind the huge investment that goes into putting together a winning team. <br>This Celesta its going to be a lot of fun so fasten your seat belts and be ready to grab the opportunity of building your very own IPL team!<br><br><br>");
				},function(){
						$("#Management1,#Management2,#Management3").html("  ");
				});

				$(".text4_li4").hover(function() {

						$("#Management1,#Management2,#Management3").html("<h1>E-Debate</h1>E-Club has come up with the golden opportunity to brushen up your debating skills with the help of entrepreneurial knowledge. The event will test your speaking style, resiliency, innovation quotient, focus, etc. with other debating skills like clarity, fluency and diction in speech.<br><br><br>");
				},function(){
						$("#Management1,#Management2,#Management3").html("  ");
				});

				$(".text4_li5").hover(function() {

						$("#Management1,#Management2,#Management3").html("<h1>Stockmart</h1> \"No price is too low for a bear OR too high for a bull.\"<br>Stockmart is a virtual stock exchange competition organisedby  Entrepreneurship Club. One of the most electrifying events of eclub where many users can buy and share virtual shares and experience all nuances of a real stock market.Stockmart gives you a chance to showcase your calculated risk taking skills to enhance on a virtual level. It is a 2 hour event where you can register with your email ids and be a part of the stimulating environment of Stockmart.<br><br><br>");
				},function(){
						$("#Management1,#Management2,#Management3").html("  ");
				});

				//Hover functionality for Treasure-Hunt

				$(".text5_li1").hover(function() {

						$("#Treasure-Hunt1,#Treasure-Hunt2,#Treasure-Hunt3").html("<h1>Chem-o-Quest</h1>Chemoquest is a theme based treasure hunt. The competition comprises of a multi-level hunt for chemical compounds and then perform a chemical reaction with those compounds. The event will start from the given venue where the first riddle will be given. The contestants must have to solve the  riddle to reach the next spot where they will get the next riddle .  After collecting all the chemical compounds, the team has to perform the chemical reaction. The team that takes the minimum time to complete the whole task will be declared as winner . <br><br><br>");
				},function(){
						$("#Treasure-Hunt1,#Treasure-Hunt2,#Treasure-Hunt3").html("  ");
				});

				$(".text5_li2").hover(function() {

						$("#Treasure-Hunt1,#Treasure-Hunt2,#Treasure-Hunt3").html("<h1>Spark Fun</h1><h3>Fuel your brain cells and let the spark ignite that logical being in you. Think the unthinkable and lead the board to win it all !!</h3><br><br><br>");
				},function(){
						$("#Treasure-Hunt1,#Treasure-Hunt2,#Treasure-Hunt3").html("  ");
				});

				$(".text5_li3").hover(function() {

						$("#Treasure-Hunt1,#Treasure-Hunt2,#Treasure-Hunt3").html("<h1>Static Rush</h1><h3>The ladders we climb are the Clues we find , spanning the campus is the gamble of dice !</h3>It is a theme based event which involves reaching various checkpoints with the help of clues they collect and complete the task if allotted. The rush stops after completion of circuit.<br><br><br>");
				},function(){
						$("#Treasure-Hunt1,#Treasure-Hunt2,#Treasure-Hunt3").html("  ");
				});

				//Hover functionality for Debate

				$(".text6_li1").hover(function() {

						$("#Debate1,#Debate2,#Debate3").html("<h1>Parliamentary Debate</h1>A debate round has two teams with two debaters each and a Speaker. The Speaker serves as both the judge and arbiter of the rules during the round. Note here that \"Speaker\" always refers to the judge from this point forward. One team represents the Government, while the other represents the Opposition.<br><br><br>");
				},function(){
						$("#Debate1,#Debate2,#Debate3").html("  ");
				});

				//Hover functionality for Expo

				$(".text7_li1").hover(function() {

						$("#Expo1,#Expo2,#Expo3").html("<h1>Samadhan</h1><h3>“Don’t count the problem, do the solution”.</h3> This type of event helps in teaching students how they can coordinate with each other when they need to. It also helps in making quick and effective decisions.<br><br><br>");
				},function(){
						$("#Expo1,#Expo2,#Expo3").html(" ");
				});

				$(".text7_li2").hover(function() {

						$("#Expo1,#Expo2,#Expo3").html("<h1>Jigyasa, The School Exhibition</h1>Students of schools of Bihta and Patna are invited to come up and present a science project/ model & showcase their young ,creative & innovative minds.<br><br><br>");
				},function(){
						$("#Expo1,#Expo2,#Expo3").html(" ");
				});

				$(".text7_li3").hover(function() {

						$("#Expo1,#Expo2,#Expo3").html("<h1>Virtual Auto-Expo</h1>This is an event for all the automobile enthusiasts. Participants will prepare a presentation and virtually sell an automobile to the judges.<br><br><br>");
				},function(){
						$("#Expo1,#Expo2,#Expo3").html(" ");
				});

				//Hover functionality for Quiz-WIz

				$(".text8_li1").hover(function() {

						$("#Quiz-Wiz1,#Quiz-Wiz2,#Quiz-Wiz3").html("<h1>Mind-Benders</h1><h4>Get ready to knock your brains and prove the genius in you in this mind bending rendezvous.</h4> Mind-Benders is a test of wits and logic. The event involves no syllabus or pre-requisite knowledge. The event will solely test the student’s logical reasoning, analytical thinking abilities, problem-solving capabilities and co-ordination skills. <br><br><br> ");
				},function(){
						$("#Quiz-Wiz1,#Quiz-Wiz2,#Quiz-Wiz3").html("  ");
				});

				$(".text8_li2").hover(function() {

						$("#Quiz-Wiz1,#Quiz-Wiz2,#Quiz-Wiz3").html("<h1>Electro-Exquizite</h1><h3>Ever traded current & voltage? Bet your strategy to experience the fun of SPARKOINS.</h3>The participants have to solve the questions to earn points or SPARKOINS.<br><br><br>");
				},function(){
						$("#Quiz-Wiz1,#Quiz-Wiz2,#Quiz-Wiz3").html("  ");
				});

				$(".text8_li3").hover(function() {

						$("#Quiz-Wiz1,#Quiz-Wiz2,#Quiz-Wiz3").html("<h1>AstroParticle Voyage</h1>Enthusiastic about Astronomy? Passionate about Particle-Physics? Think you know your stuff? Then this is your journey through the realm of the big and the small, on the scales ranging from a quark to the entire observable universe. This is the AstroParticle Voyage, a quiz which tests your knowledge thoroughly, and brings out the best of your abilities.<br><br><br>");
				},function(){
						$("#Quiz-Wiz1,#Quiz-Wiz2,#Quiz-Wiz3").html("  ");
				});

				//Hover functionality for Social

				$(".text9_li1").hover(function() {

						$("#Social1,#Social2,#Social3").html("<h1>Adhyayan Video Recording</h1>India is one of the top five nations for out-of-school children of primary school age. Mainly due to the lack of teachers or/and lack of quality education. Celesta ‘17 along with RTDC IIT Patna brings you Adhyayan, an opportunity to share your knowledge and to help the students to rise. The event have been introduced to improve the educational situation in the Rural India and to brighten the future of the nation to its maximum potential.<br><br><br>");
				},function(){
						$("#Social1,#Social2,#Social3").html("  ");
				});

				//Hover functionality for Story Writing

				$(".text10_li1").hover(function() {

						$("#StoryWriting1,#StoryWriting2,#StoryWriting3").html("<h1>Tech Chronicles</h1>This pre-celesta event gives the prolific writer in you a chance, a chance to cross the horizons of imagination, to expand the field of one’s view and plot a sci-fi story. It will be your story so it can be anything, literally anything - Alien invasion to humans going to another planet or time-travelling and what not! <br> <b>So just think outside the box, use your imagination, bend the scope of view and write a thriller!</b><br><br><br>");
				},function(){
						$("#StoryWriting1,#StoryWriting2,#StoryWriting3").html("<h1>Tech Chronicles</h1>This pre-celesta event gives the prolific writer in you a chance, a chance to cross the horizons of imagination, to expand the field of one’s view and plot a sci-fi story. It will be your story so it can be anything, literally anything - Alien invasion to humans going to another planet or time-travelling and what not! <br> <b>So just think outside the box, use your imagination, bend the scope of view and write a thriller!</b><br><br><br>");
				});

				//Hover functionality for Photography

				$(".text11_li1").hover(function() {

						$("#Photography1,#Photography2,#Photography3").html("<h1>LENSART</h1>Photography is a tool by which we can freeze the time and have a look back in the past. Celesta 2k17 brings you a chance of showing your photography skills!<br><br><br>");
				},function(){
						$("#Photography1,#Photography2,#Photography3").html("<h1>LENSART</h1>Photography is a tool by which we can freeze the time and have a look back in the past. Celesta 2k17 brings you a chance of showing your photography skills!<br><br><br>");
				});

			});
			
			
			