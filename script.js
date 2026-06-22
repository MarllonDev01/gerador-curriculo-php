$(document).ready(function() {
    // Cálculo automático de idade
    $('#data_nascimento').on('change', function() {
        const birthDate = new Date($(this).val());
        const today = new Date();
        let age = today.getFullYear() - birthDate.getFullYear();
        const m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        $('#idade').val(isNaN(age) ? '' : age);
    });

    // Adicionar campos de experiência
    $('#addExperience').click(function() {
        const html = `
            <div class="card mb-3 experience-item bg-light border">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Empresa</label>
                            <input type="text" name="exp_empresa[]" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Cargo</label>
                            <input type="text" name="exp_cargo[]" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Início</label>
                            <input type="month" name="exp_inicio[]" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Fim (ou atual)</label>
                            <input type="month" name="exp_fim[]" class="form-control">
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <button type="button" class="btn btn-danger w-100 remove-item">Remover</button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        $('#experienceContainer').append(html);
    });

    // Adicionar campos de referência
    $('#addReference').click(function() {
        const html = `
            <div class="card mb-3 reference-item bg-light border">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nome da Referência</label>
                            <input type="text" name="ref_nome[]" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Contato/Telefone</label>
                            <input type="text" name="ref_contato[]" class="form-control" required>
                        </div>
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-sm btn-danger remove-item">Remover</button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        $('#referenceContainer').append(html);
    });

    // Remover itens dinâmicos
    $(document).on('click', '.remove-item', function() {
        $(this).closest('.card').remove();
    });
});
