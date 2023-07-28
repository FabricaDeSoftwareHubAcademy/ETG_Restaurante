function openPopup_Conf() {
    var overlay_conf = document.getElementById("overlay_conf");
    var popup = document.querySelector(".popup");
  
    overlay_conf.style.opacity = 1;
    overlay_conf.style.visibility = "visible";
  
    popup.style.opacity = 1;
    popup.style.transform = "scale(1)";
  }
  
  // Função para fechar o pop-up
  function closePopup_Conf() {
    var overlay_conf = document.getElementById("overlay_conf");
    var popup = document.querySelector(".popup");
  
    overlay_conf.style.opacity = 0;
    overlay_conf.style.visibility = "hidden";
  
    popup.style.opacity = 0;
    popup.style.transform = "scale(0.8)";
  }
  