function showAnswer1(){
  let reveal = document.querySelector(".ansRev1")
  let answer = document.querySelector(".form1").querySelector("input")
  if (answer.value.trim() == "626,000" || (answer.value.trim() == "626000")){
    reveal.innerHTML = "That's correct! This amount is actually 5 times the lifetime emissions of average car."
  } else {
    reveal.innerHTML = "Good guess, but the answer is 626,000 pounds! This amount is actually 5 times the lifetime emissions of average car."
  }
  return false;
}
function showAnswer2(){
  let reveal = document.querySelector(".ansRev2")
  let answer = document.querySelector(".form2").querySelector("input")
  if (answer.value.trim() == "7"){
    reveal.innerHTML = "That's correct! One hour produces 55 grams of CO2."
  } else {
    reveal.innerHTML = "Nice try, but the answer is 7 smartphones! This amount is 55 grams of CO2."
  }
  return false;
}

function showAnswer3(){
  let reveal = document.querySelector(".ansRev3")
  let answer = document.querySelector(".form3").querySelector("input")
  if (answer.value.trim() == "32,000" || (answer.value.trim() == "32000")){
    reveal.innerHTML = "That's correct! 32,000 tons of CO2 come just from texts."
  } else {
    reveal.innerHTML = "Almost, but the answer is 32,000 tons, just from texts!"
  }
  return false;
}
