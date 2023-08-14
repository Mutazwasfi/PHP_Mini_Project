
welcome = document.querySelector('.welcome');
signUp = document.querySelector('.sign-up');
signIn = document.querySelector('.sign-in');


btn1 = document.querySelector('.wlcBtnSignUP');
btn2 = document.querySelector('.wlcBtnLogIn');
btn3 = document.querySelector('.opposite-btn1');
btn4 = document.querySelector('.opposite-btn2');

btnSignUP = document.querySelector('.btnSignUP');
btnSignIn = document.querySelector('.btnSignIn');

// Switches to 'Sign Up'
btn1.addEventListener('click', () =>{
  welcome.style.display = 'none';
  signUp.style.display = 'block';
  signIn.style.display = 'none';  
});

btn3.addEventListener('click', () => {
  welcome.style.display = 'none'; 
  signUp.style.display = 'block';
  signIn.style.display = 'none'; 
});

btnSignUP.addEventListener('click', (e) => {
   e.preventDefault();
});

// Switches to 'Sign In'
btn2.addEventListener('click', () =>{
  welcome.style.display = 'none'; 
  signUp.style.display = 'none';
  signIn.style.display = 'block';
});

btn4.addEventListener('click', () => {
  welcome.style.display = 'none';
  signUp.style.display = 'none';
  signIn.style.display = 'block';
});


btnSignIn.addEventListener('click', (e) => {
  e.preventDefault();
});



// let pattern = /^[a-zA-Z0-9_.]+$/i;
// if (!USERNAME.value.match(pattern))

// let pattern = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
// if (!EMAIL.value.match(pattern))

// let pattern = /^(?=.*\d)(?=.*[A-Z])(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,16}$/;
// if (!PASSWORD.value.match(pattern))