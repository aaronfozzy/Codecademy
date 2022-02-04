let userName = 'Aaron';
userName ? console.log(`Hello, ${userName}!`) : console.log('Hello!');
const userQuestion = 'Will I become a werewolf tonight?';
console.log(`The user asked: ${userQuestion}`);
const randomNumber = Math.floor(Math.random() * 3);
let eightBall = '';

switch (randomNumber) {
  case 0:
    eightBall = 'It is certain';
    break;
  case 1:
    eightBall = 'Reply hazy try again';
    break;  
  case 2:
    eightBall = 'Outlook not so good';
    break;  
}
console.log(`The eight ball answered: ${eightBall}`); 
