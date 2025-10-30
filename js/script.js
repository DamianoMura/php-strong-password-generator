//create event listener for length change to dinamically show it on page
const length = document.getElementById("pwd-length").addEventListener("change", changeVal = (e)=>{
e.preventDefault();
//change the value shown on page
document.getElementById("label-length").innerText = e.target.value;
});

//default value for this checkbox is selected 
document.getElementById("letters").checked=true