document.getElementById('taskForm').addEventListener('submit', function(event) {
    const title = document.getElementById('title').value;
    const desc = document.getElementById('desc').value;
    const start = document.getElementById('start').value;
    const end = document.getElementById('end').value;

    if (title.trim() === '' || desc.trim() === '' || start.trim() === '' || end.trim() === '') {
        alert('All Fields Are Required!');
        event.preventDefault(); // Prevent form submission if fields are empty
    }else{
        alert("Your task has been successfully added.");
        window.location.href = "../index.php";
    }
});
