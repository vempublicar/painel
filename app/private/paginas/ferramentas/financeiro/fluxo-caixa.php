
    <div class="container mt-5">
        <h3 class="text-center">Dashboard Financeiro</h3>
        <div class="row">
            <div class="col-md-6">
                <canvas id="barChart"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div>

    <div class="floating-button">
        <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offReceitaEditar" role="button" aria-controls="offReceitaEditar">
            Adicionar Receita
        </a>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offReceitaEditar" aria-labelledby="offReceitaEditarLabel">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offReceitaEditarLabel">Cadastrar Receita</h2>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Mês</label>
                    <select class="form-select">
                        <option value="Janeiro">Janeiro</option>
                        <option value="Fevereiro">Fevereiro</option>
                        <option value="Março">Março</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ano</label>
                    <select class="form-select">
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Receita Online</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Receita Presencial</label>
                    <input type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>

    <script>
        const barCtx = document.getElementById('barChart').getContext('2d');
        const pieCtx = document.getElementById('pieChart').getContext('2d');

        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Fev', 'Mar', 'Abr'],
                datasets: [{
                    label: 'Receita Mensal',
                    data: [1000, 1500, 2000, 1800],
                    backgroundColor: 'rgba(54, 162, 235, 0.6)'
                }]
            }
        });

        new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['Online', 'Presencial'],
                datasets: [{
                    data: [60, 40],
                    backgroundColor: ['#36A2EB', '#FF6384']
                }]
            }
        });
    </script>

