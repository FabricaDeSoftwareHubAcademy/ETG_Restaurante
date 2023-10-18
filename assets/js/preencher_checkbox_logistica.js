function preencherOutrasCheckboxesLogistica(checkbox) {
    // Verifique se a checkbox foi marcada
    if (checkbox.checked) {
        // Preencha outras checkboxes
        document.getElementById('gerenciar_recados').checked = true;
        document.getElementById('gerenciar_notificacoes').checked = true;
        document.getElementById('realizar_nao_conformidade').checked = true;
    } 
    else
    {
        document.getElementById('gerenciar_salas').checked = false;
        document.getElementById('gerenciar_perguntas').checked = false;
        document.getElementById('gerenciar_checklists').checked = false;
        document.getElementById('gerenciar_recados').checked = false;
        document.getElementById('gerenciar_notificacoes').checked = false;
        document.getElementById('realizar_checklist').checked = false;
        document.getElementById('realizar_nao_conformidade').checked = false;
    }
}