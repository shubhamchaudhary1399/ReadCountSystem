function addCount(id) {
  console.log(id);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    console.log(this.responseText);
  }
  };
  xhttp.open("GET", "viewsonload.php?id=" + id, true);
  xhttp.send();
}


window.onunload = function() {
  console.log('hello');
  console.log(id);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    console.log(this.responseText);
  }
};
xhttp.open("GET", "viewsonunload.php?id=" + id, true);
xhttp.send();
}
