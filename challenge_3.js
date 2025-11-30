// Lazy dev left the logic here
function checkAnswer() {
    let ans = document.getElementById("answer").value.trim();
    if(ans === "FLAG{weak_js_password}") {
        window.location.href = "challenge4.html";
    } else {
        alert("Nope! The JS laughs at your attempt 😂");
    }
}

// Hardcoded password in JS (shh...)
const devPassword = "admin123";
// FLAG is linked to the lazy password
// FLAG{weak_js_password}

// Expose function to global scope for the HTML button
window.checkAnswer = checkAnswer;
