document.addEventListener("DOMContentLoaded", function() {
    const cultivoForm = document.getElementById("cultivoForm");
    const cultivoTable = document.getElementById("cultivoTable");

    cultivoForm.addEventListener("submit", function(event) {
        event.preventDefault();

        const cultivo = document.getElementById("cultivo").value;
        const fechaSiembra = document.getElementById("fecha-siembra").value;
        const fechaCosecha = document.getElementById("fecha-cosecha").value;
        const rendimiento = document.getElementById("rendimiento").value;

        // Agregar una nueva fila a la tabla de historial de cultivos
        const newRow = cultivoTable.insertRow(-1);
        const cell1 = newRow.insertCell(0);
        const cell2 = newRow.insertCell(1);
        const cell3 = newRow.insertCell(2);
        const cell4 = newRow.insertCell(3);
        cell1.textContent = cultivo;
        cell2.textContent = fechaSiembra;
        cell3.textContent = fechaCosecha;
        cell4.textContent = rendimiento;

        // Limpiar el formulario después de agregar el cultivo
        cultivoForm.reset();
    });
});
