function toggleNewCategory() {
    var categorySelect = document.getElementById('category');
    var newCategoryDiv = document.getElementById('new-category-field');
    
    if (categorySelect.value === "") {
        newCategoryDiv.style.display = "block";
    } else {
        newCategoryDiv.style.display = "none";
    }
}

document.addEventListener('DOMContentLoaded', function() {
    toggleNewCategory();
    document.getElementById('category').addEventListener('change', toggleNewCategory);
});