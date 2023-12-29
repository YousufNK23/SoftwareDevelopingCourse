document.getElementById('okButton').addEventListener('click', function(event) {
    var selectedCategories = document.getElementById('demo-multiple-group-select').selectedOptions;

    if (selectedCategories.length === 0) {
        event.preventDefault();
        
        alert('Select at least one category first!');
    }
});
