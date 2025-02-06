// document.addEventListener('DOMContentLoaded',  (event) => {

//     const rotateCard = () => {
//       const cardContainer = document.querySelector('.card-container') 
//       cardContainer.classList.toggle('rotate')
//     }
  
//     const btnSignup = document.querySelector('#btn-signup') ,
//           btnLogin = document.querySelector('#btn-login')
  
//     btnSignup.addEventListener('click', rotateCard)
//     btnLogin.addEventListener('click', rotateCard)
  
//     /*See passwod*/
//     const seePassword =  () => {
//       const seePwdIcon = document.querySelector('.see-password'),
//             pwdInput = document.querySelector('.group input')
  
//       seePwdIcon.addEventListener('mousedown', () => {
//         pwdInput.type = 'text'
//       })
  
//       seePwdIcon.addEventListener('mouseup', () => {
//         pwdInput.type = 'password'
//       })
  
//       seePwdIcon.addEventListener('mouseover', () => {
//         pwdInput.type = 'password'
//       })
//     }
  
//     seePassword()
//   })

//   function message(){
//     var Name = document.getElementById('name');
//     var msg = document.getElementById('msg');
//     const success = document.getElementById('success');
//     const danger = document.getElementById('danger');

//     if(Name.value === '' ||  msg.value === ''){
//         danger.style.display = 'block';
//     }
//     else{
//         setTimeout(() => {
//             Name.value = '';
//             msg.value = '';
//         }, 2000);

//         success.style.display = 'block';
//     }


//     setTimeout(() => {
//         danger.style.display = 'none';
//         success.style.display = 'none';
//     }, 4000);

// }