function valid() {
    var a = document.getElementById("id").value.trim();
    var b = document.getElementById("pass").value.trim();

    // Clear previous messages
    document.getElementById("demoid").innerHTML = "";
    document.getElementById("demopass").innerHTML = "";

    let valid = true;

    // ID Check
    if (a === "") {
        document.getElementById("demoid").innerHTML = "ID box is empty";
        valid = false;
    } else if (a !== "46688") {
        document.getElementById("demoid").innerHTML = "Wrong ID";
        valid = false;
    }

    // Password Check
    if (b === "") {
        document.getElementById("demopass").innerHTML = "Password box is empty";
        valid = false;
    } else if (b !== "admin") {
        document.getElementById("demopass").innerHTML = "Wrong Password";
        valid = false;
    }

    return valid;
}
