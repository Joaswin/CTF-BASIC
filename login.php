<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Challenge 8 Login Check</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<script src="secure.js"></script>

<p id="msg" style="text-align:center;color:white;font-size:20px;"></p>

<form hidden action="admin8.php" method="post" id="adminForm">
  <input type="text" name="token" id="tokenField">
</form>

<script>
function onlyLettersAndNumbers(str) {
  for (let i=0; i<str.length; i++) {
    let c = str.charCodeAt(i);
    if (
        (c >= 48 && c <= 57) ||   // 0-9
        (c >= 65 && c <= 90) ||   // A-Z
        (c >= 97 && c <= 122)     // a-z
    ) { continue; }
    return false;
  }
  return true;
}

const user = "<?php echo $_POST['username']; ?>";
const pass = "<?php echo $_POST['password']; ?>";

if (!onlyLettersAndNumbers(user) || !onlyLettersAndNumbers(pass)) {
  document.getElementById("msg").innerHTML = "❌ Illegal characters detected.";
} else {
  const ok = checkPassword(user, pass);

  if (ok) {

    // 🔥 SHOW FLAG BEFORE REDIRECT
    alert("🎉 Correct login!\n\nYour flag: FLAG{js_files_are_not_secure}");

    document.getElementById("msg").innerHTML = "✅ Login Successful!";
    document.getElementById("tokenField").value = "valid_session_token_ch8";
    document.getElementById("adminForm").submit();

  } else {
    document.getElementById("msg").innerHTML = "❌ Login Failed.";
  }
}
</script>

</body>
</html>
