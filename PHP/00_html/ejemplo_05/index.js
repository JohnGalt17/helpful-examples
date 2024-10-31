console.log("Se cargo bien el archivo index.js desde el HTML");

let likeCount = 0;

/*
document.getElementById("likeButton").addEventListener("click", function () {
  let likes = parseInt(document.getElementById("likeCount").innerText);
  document.getElementById("likeCount").innerText = likes + 1;
});
*/
document.getElementById("likeButton").addEventListener("click", function () {
  console.log("La cantidad de likes es:" + likeCount);
  likeCount++;

  document.getElementById("likeCount").innerText = likeCount;
  document.getElementById("likeCountHTML").innerHTML = likeCount;
  document.getElementById("likeCountTxt").value = likeCount;

  console.log("La cantidad de likes es:" + likeCount);

  //let likes = parseInt(document.getElementById("likeCount").innerText);
  //document.getElementById("likeCount").innerText = likes + 1;
});

/*
// Using a named function
function handleLikeButtonClick() {
  let likes = parseInt(document.getElementById("likeCount").innerText);
  document.getElementById("likeCount").innerText = likes + 1;
}
document
  .getElementById("likeButton")
  .addEventListener("click", handleLikeButtonClick);

// Using an anonymous function
document.getElementById("likeButton").addEventListener("click", function () {
  let likes = parseInt(document.getElementById("likeCount").innerText);
  document.getElementById("likeCount").innerText = likes + 1;
});


*/
