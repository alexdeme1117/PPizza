function showHint(str) {
  if (str.length == 0) {
    document.getElementById("pizza").value = "";
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("pizza").value = this.responseText;
      }
    }
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}
