const clearButtons = document.getElementsByClassName("Clear");

for (const clearButton of clearButtons) {
    clearButton.addEventListener("click", (e) => {
        if (confirm("Are you sure you want to clear Task List?")) {
            alert("Task List Cleared Successfully!");
            window.location.href = "../task_list.php";
        }
    });
}
