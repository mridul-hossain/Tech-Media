function search(str) {
    var xhttp;
    if (str == "") {
        document.getElementById("table").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("table").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../searchUser.php?q=" + str, true);
    xhttp.send();
}