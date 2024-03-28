document.addEventListener("DOMContentLoaded", function() {
    const accordionItems = document.querySelectorAll('.accordion .link');
    const periodoAccordionItems = document.querySelectorAll('.periodo .periodo_report');
    const usersAccordionItems = document.querySelectorAll('#user_relatorio .user-report');
  
    function toggleSubmenu(submenu) {
        submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
    }
  
    accordionItems.forEach(item => {
        item.addEventListener('click', function() {
            const submenu = this.nextElementSibling;
            toggleSubmenu(submenu);
        });
    });
  
    periodoAccordionItems.forEach(item => {
        item.addEventListener('click', function() {
            const submenu = this.nextElementSibling;
            toggleSubmenu(submenu);
        });
    });
  
    usersAccordionItems.forEach(item => {
        item.addEventListener('click', function() {
          const submenu = this.nextElementSibling;
          toggleSubmenu(submenu);
        });
    });
  });
  
  const ctx = document.getElementById('myChart');
      
      new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: ['Não Conforme', 'Conforme', 'Intervenção'],
          datasets: [{
          data: [countNC, countC, countCorrecao],
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
            data: [countNC, countC, countCorrecao],
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
  
  
  var xhr = new XMLHttpRequest();
  
$('#select_user').on('change',(e)=>{

   
  filter_checklist_user(e.target.value)

})

async function filter_checklist_user(id_user){
  $('#select_checks').empty()


  let data = await fetch('./actions/action_get_respostas_checklist.php?id_user='+id_user)
  let dados = await data.json()

  let optionDefault = document.createElement('option')
  optionDefault.innerText = 'Selecione o Checklist'
  $('#select_checks').append(optionDefault)

  dados.checklists.forEach((e) => {
    let optionVar = document.createElement('option')
    optionVar.value = e[0]
    optionVar.innerText = e[1]

    $('#select_checks').append(optionVar)

  })
}
  
$("#bnt_gerar_pdf").on('click', (e) => {

  localStorage.setItem('dadosPDFUser', JSON.stringify(dadosPDF));

  let dados = localStorage.getItem('dadosPDFUser')
  // let dadosObjetos = JSON.parse(dados);
  console.log(dados);
  window.location.href = './nao_conformidade_user.php'
  
})
  
  