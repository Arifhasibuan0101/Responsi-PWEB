function insert(num) {
  document.getElementById('input').value = document.getElementById('input').value + num;
}

function equal() {
  var number = document.getElementById('input').value;
  if(number) {
    document.getElementById('input').value=eval(number);
  } 
}

function clearMe() {
  document.getElementById('input').value="";
}

function that(x) {
  form.text.value=form.text.value+x;
}