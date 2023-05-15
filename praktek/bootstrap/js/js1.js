function showPopup() {
  // menampilkan jendela pop-up
  var popup = document.getElementById("popup");
  popup.classList.add("show");
}

function hidePopup() {
  // menyembunyikan jendela pop-up
  var popup = document.getElementById("popup");
  popup.classList.remove("show");
}


function showNews() {
  var popup = window.open("", "popup", "width=800,height=600");
  popup.document.write("<h2>Breaking News</h2>");
  popup.document.write("<p>Ini adalah contoh berita yang akan ditampilkan di pop-up window.</p>");
  popup.document.write("<p>Silakan tambahkan kode JavaScript yang diperlukan untuk menampilkan berita secara dinamis.</p>");
}

function showVideos(event) {
  event.preventDefault();
  var videosDiv = document.getElementById("videos");
  if (videosDiv.style.display === "none") {
    videosDiv.style.display = "block";
    event.target.innerText = "hide";
    var hideBtns = videosDiv.querySelectorAll('.btn-hide');
    for (var i = 0; i < hideBtns.length; i++) {
      hideBtns[i].addEventListener('click', hideVideos);
    }
  } else {
    videosDiv.style.display = "none";
    event.target.innerText = "more...";
  }
}

function hideVideos(event) {
  event.preventDefault();
  var videosDiv = document.getElementById("videos");
  videosDiv.style.display = "none";
  document.querySelector('.btn-more').innerText = "more...";
}
