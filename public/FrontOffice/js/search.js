const searchForm = document.getElementById('search-form');
const searchResults = document.getElementById('search-results');

searchForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const searchTerm = event.target.querySelector('input[name="q"]').value;

    fetch(`/annonce/search?q=${searchTerm}`)
        .then(response => response.json())
        .then(resultats => {
            let html = '';

            if (resultats.length > 0) {
                resultats.forEach(resultat => {
                    html += `<div>${resultat.titre} (${resultat.date}) - ${resultat.classification}</div>`;
                });
            } else {
                html = 'Aucun résultat trouvé.';
            }

            searchResults.innerHTML = html;
        })
        .catch(error => {
            console.error(error);
            searchResults.innerHTML = 'Une erreur est survenue lors de la recherche.';
        });
});
