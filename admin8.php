<?php
// Simple session/token check
if (!isset($_POST['token']) || $_POST['token'] !== "valid_session_token_ch8") {
    echo "<h1 style='color:white;text-align:center;'>Access Denied.</h1>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Challenge 8 - Admin Panel</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #1a1c2e, #3d3d5c);
        color: #fff;
        text-align: center;
        padding: 60px 20px;
    }
    .box {
        max-width: 700px;
        margin: auto;
        background: rgba(255,255,255,0.08);
        padding: 50px;
        border-radius: 25px;
        box-shadow: 0 0 35px rgba(0,0,0,0.5);
        animation: fadeIn 1s ease-in-out;
    }
    h1 {
        font-size: 36px;
        color: #00f0ff;
        text-shadow: 0 0 10px #00f0ff;
        margin-bottom: 20px;
    }
    input {
        padding: 12px;
        width: 80%;
        border-radius: 12px;
        border: none;
        margin-top: 15px;
        font-size: 16px;
    }
    button {
        padding: 12px 25px;
        border: none;
        border-radius: 12px;
        background: #00c3ff;
        color: #000;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        margin-top: 15px;
        transition: transform 0.2s;
    }
    button:hover {
        transform: scale(1.05);
        background: #00e1ff;
    }
    #message {
        margin-top: 20px;
        font-size: 18px;
        color: #00ffb0;
        font-weight: bold;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
</head>
<body>

<div class="box">
    <h1>🎉 Welcome to the Challenge 8 Admin Panel!</h1>
    <p>Your flag is hidden safely in JS files 😉</p>

    <input type="text" id="flagInput" placeholder="Enter the flag here..." />
    <br>
    <button onclick="verifyFlag()">Submit Flag</button>

    <div id="message"></div>
</div>

<script>
const correctFlag = "FLAG{js_files_are_not_secure}";

function verifyFlag() {
    const userFlag = document.getElementById("flagInput").value.trim();
    const messageDiv = document.getElementById("message");

    if(userFlag === correctFlag) {
        messageDiv.textContent = "🎉 Congrats! All challenges are completed! 🏆";
        alert("🎉 All challenges completed! Well done!");
    } else {
        messageDiv.textContent = "❌ Wrong flag! Try again.";
    }
}
</script>

</body>
</html>
