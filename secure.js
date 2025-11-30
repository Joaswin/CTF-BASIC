// Challenge 8 - Secure JS (lol)

// Yup. I hid the password in a separate file.
// No one will EVER find it here... right? 😭

function checkPassword(username, password) {
    const realUser = "admin";
    const realPass = "SuperMegaSecret123";

    return (username === realUser && password === realPass);
}
