function loadAboutPage() {
  fetch('about.html')
    .then(response => response.text())
    .then(data => {
      document.querySelector('#main').innerHTML = data;
    });
}