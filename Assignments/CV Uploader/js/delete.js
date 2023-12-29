Delete= document.getElementsByClassName("delete");

Array.from(Delete).forEach((element) => {
    element.addEventListener("click", (e) => {
        sr= e.target.id;
        if (confirm("Are you sure you want to delete this file?")) {
            window.location = `/PhpCourse/PHP Assignments/CV Uploader/index.php?delete=${sr}`;
        }
    });
});