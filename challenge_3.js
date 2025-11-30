// Lazy dev left the logic here
function checkAnswer() {
    let ans = document.getElementById("answer").value.trim();
    if(ans === "FLAG{weak_js_password}") {
        window.location.href = "challenge4.html";
    } else {
        alert("Nope! The JS laughs at your attempt 😂");
    }
}

const devPassword = "admin123";


window.checkAnswer = checkAnswer;
