var firebaseConfig = {
  apiKey: "AIzaSyCI4W94PdpVGD7r2t0XloDo02Dmd1B9tkM",
  authDomain: "webtech-a7098.firebaseapp.com",
  databaseURL: "https://webtech-a7098.firebaseio.com",
  projectId: "webtech-a7098",
  storageBucket: "webtech-a7098.appspot.com",
  messagingSenderId: "346129368936",
  appId: "1:346129368936:web:ab13abf3c889483f21f8dd",
  measurementId: "G-FEEBY5GLZK"
};
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
//const db=firebase.database.ref();
//db.settings({timestampsInSnapshots: true});
var myFirebase=firebase.database().ref();
var users=myFirebase.child("users");
var form=document.querySelector('#sign-up_form');
form.addEventListener('submit',(e)=>{
    e.preventDefault();
    users.child(form.username.value).set({
       Email: form.email.value,
        Password: form.password.value
    })
    location.replace("3_ChooseCuisine.html");
})

    