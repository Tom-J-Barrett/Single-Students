<?php
include 'LoginCheck.php';
checkUser();
?>
<html>
<body>

<h1>Pick-Up Line Generator</h1>

<script>
	var pickUpLines = ['You are hotter than the bottom of my laptop', 
					    'Did you ever realize screw rhymes with me and you?',
						'Aside from being sexy, what do you do for a living?',
						'Hey, my name\'s Microsoft. Can I crash at your place tonight?',
						'Do you like raisins? How do you feel about a date?',
						'If I could rearrange the alphabet, I\'d put \'U\' and \'I\' together.',
						'Are you a parking ticket? Because you\'ve got FINE written all over you.',
						'Well, here I am. What are your other two wishes?',
						'It\'s a good thing I have my library card, because I am totally checking you out.',
						'Life without you is like a broken pencil...pointless.',
						'If you were a vegetable you\'d be a cute-cumber.',
						'I seem to have lost my phone number. Can I have yours?',
						'My doctor says I\'m lacking Vitamin U.',
						'Have you been to the doctor lately? Cause I think you\'re lacking some Vitamin Me.',
						'You look so familiar, didn\'t we take a class together? I could\'ve sworn we had chemistry.',
						'You\'re so beautiful that you made me forget my pickup line.',
						'Damn, if being sexy was a crime, you\'d be guilty as charged!',
						'Do you work at Starbucks? Because I like you a latte.',
						'Are you a banana? Because I find you a-peeling.',
						'Me without you is like a nerd without braces, A shoe without laces, aSentenceWithoutSpaces.',
						'I must be a snowflake, because I\'ve fallen for you.',
						'There is something wrong with my cell phone. It doesn\'t have your number in it.',
						'If you were a booger I\'d pick you first.',
						'You wanna know what\'s beautiful? Read the first word again.',
						'My love for you is like diarrhea, I just can\'t hold it in.',
						'I like Legos, you like Legos, why don\'t we build a relationship?',
						'I\'m new in town. Could you give me directions to your apartment?',
						'What time do you have to be back in heaven?',
						'Wouldn\'t we look cute on a wedding cake together?',
						'Are your parents bakers? Cause they sure made you a cutie pie!',
						'You\'re like pizza. Even when you are bad, you\'re good.',
						'Are you a cat? Cause you are purrrfect.',
						'If you were a tropical fruit, you\'d be a Fine-apple!',
						'You must be a ninja, because you snuck into my heart.'];
	var pickUpLine = pickUpLines[Math.floor(Math.random()*pickUpLines.length)];
	alert(pickUpLine);
</script>
</body>
</html>