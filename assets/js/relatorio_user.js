document.addEventListener("DOMContentLoaded", function() {
  const accordionItems = document.querySelectorAll('.accordion .link');
  const periodoAccordionItems = document.querySelectorAll('.periodo .periodo_report');
  const usersAccordionItems = document.querySelectorAll('#user_relatorio .user-report');

  var mother_select = document.querySelector(".user_relatorio")
  var select = document.createElement("select")
  var option_selected = document.createElement("option")
  option_selected.textContent = "Usuário"
  option_selected.selected = true
  
  // conjunto_dados_objeto = Object.values(JSON_FROM_PHP);
  dados_usuario = JSON_FROM_PHP["dadosUsuario"]
  for (i = 0; i < dados_usuario.length; i++) {
    let option = document.createElement("option")
    option.textContent = dados_usuario[i][1] //nome
    select.appendChild(option)
    console.log(dados_usuario[i])
  }
  // conjunto_dados_objeto.forEach(dados_objeto => {
  //   dados_objeto.forEach(objeto => {
  //     console.log(objeto)
  //   })
  // });
  
  select.appendChild(option_selected)
  mother_select.appendChild(select)
  
  // if (Array.isArray(JSON_DATA)) {
  //   console.log("é array")
  // } else {
  //   console.log("não e array")
  // }
  // console.log(JSON_DATA)
  // function toggleSubmenu(submenu) {
  //     submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
  // }

  // accordionItems.forEach(item => {
  //     item.addEventListener('click', function() {
  //         const submenu = this.nextElementSibling;
  //         toggleSubmenu(submenu);
  //     });
  // });

  // periodoAccordionItems.forEach(item => {
  //     item.addEventListener('click', function() {
  //         const submenu = this.nextElementSibling;
  //         toggleSubmenu(submenu);
  //     });
  // });

  // usersAccordionItems.forEach(item => {
  //     item.addEventListener('click', function() {
  //         const submenu = this.nextElementSibling;
  //         toggleSubmenu(submenu);
  //     });
  // });

});
  
const ctx = document.getElementById('myChart');
      
new Chart(ctx, {
type: 'doughnut',
data: {
    labels: ['Não Conforme', 'Conforme', 'Intervenção'],
    datasets: [{
    data: [12, 2, 3 ],
    backgroundColor: ['#CB1010','#609437' ,'#F3B33D' ],
    borderWidth: 1
    }]
},
});
  
  
const ct = document.getElementById('Chart');
          
new Chart(ct, {
  type: 'bar',
  data: {
    labels: ['Não Conforme', 'Conforme', 'Intervenção'],
    datasets: [{
      label: 'Vizualizar quantidade',
      data: [12, 19, 3],
      backgroundColor: ['#CB1010','#609437' ,'#F3B33D' ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
  
  
  // var xhr = new XMLHttpRequest();
  
  
  
  
  
  
  
  