const modal = document.querySelector('.modal-container-menu')
const submenu = document.querySelector('.sub-menu')
const btn_submenu = document.getElementById('btnsubmenu')


function openModal() {
  modal.classList.add('active')
     
}

function closeModal() {
  modal.classList.remove('active')

}

function openSubmenu(){
  submenu.classList.add('active')
  btn_submenu.setAttribute('onclick', 'closeSubmenu()')
}

function closeSubmenu(){
  submenu.classList.remove('active')
  btn_submenu.setAttribute('onclick', 'openSubmenu()')

}