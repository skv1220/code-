<input type="text" value="Realauto" id="myInput" readonly>
<button onclick="myFunction()" id="change">Copy text</button>

<script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 9999999999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
  
  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
  var t = document.getElementById("change").innerHTML = "Copied!";
  document.body.appendChild(t);
}
</script>
