function tambahgambar() {
    const container = document.getElementById("container");
  
    for (let i = 1; i <= 10; i++) {
      const img = document.createElement("img");
      img.src = `..//image/gambar${i}.jpeg`;
      img.style.width = "150px";
      img.style.height = "150px";
      img.style.margin = "5px";
      container.appendChild(img);
  
      img.addEventListener('click', function() {
        const audio = new Audio(`..//sound/sound${i}.mp3`);
        audio.play();
      });
  
      container.appendChild(img);
    }
  }
  
  function autoPlaySound() {
    const audio = new Audio('..//sound/autoPlaySound.mp3'); 
    audio.play();
  }
  
  document.getElementById("tambahgambar").addEventListener('click', function() {
    autoPlaySound();
  });
  