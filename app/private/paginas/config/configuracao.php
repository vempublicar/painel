<div class="page-body">
    <div class="container-xl">
        <div class="card mt-6">
            <div class="row g-0">
                <div class="col-12 col-md-3 border-end">
                    <div class="card-body">
                        <h4 class="subheader">Minha Conta</h4>
                        <div class="list-group list-group-transparent">
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center collapsible">Conta</a>
                            <div class="content" style="display:none;">
                                <a href="dashboard&setting=conta&pagina=conta" class="list-group-item list-group-item-action d-flex align-items-center">Detalhes da Conta</a>
                            </div>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center collapsible">Meu Perfil</a>
                            <div class="content" style="display:none;">
                                <a href="dashboard&setting=conta&pagina=perfil" class="list-group-item list-group-item-action d-flex align-items-center">Editar Perfil</a>
                            </div>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center collapsible">Minhas Empresas</a>
                            <div class="content" style="display:none;">
                                <a href="dashboard&setting=conta&pagina=empresa" class="list-group-item list-group-item-action d-flex align-items-center">Gerenciar Empresas</a>
                            </div>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center collapsible">Upgrade</a>
                            <div class="content" style="display:none;">
                                <a href="dashboard&setting=conta&pagina=upgrade" class="list-group-item list-group-item-action d-flex align-items-center">Opções de Upgrade</a>
                            </div>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center collapsible">Suporte</a>
                            <div class="content" style="display:none;">
                                <a href="dashboard&setting=conta&pagina=suporte" class="list-group-item list-group-item-action d-flex align-items-center">Contato Suporte</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Outro conteúdo da coluna vai aqui -->
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var coll = document.getElementsByClassName("collapsible");
    for (var i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
});
</script>