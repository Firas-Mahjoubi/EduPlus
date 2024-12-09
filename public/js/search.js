document.getElementById('search-input').addEventListener('input', function () {
    const query = this.value;

    fetch(`/ressources/live-search?q=${encodeURIComponent(query)}`)
        .then((response) => response.json())
        .then((data) => {
            const resultsContainer = document.getElementById('results');
            resultsContainer.innerHTML = '';

            data.forEach((item) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.id}</td>
                    <td>${item.type}</td>
                    <td>${item.nom}</td>
                `;
                resultsContainer.appendChild(row);
            });
        });
});
