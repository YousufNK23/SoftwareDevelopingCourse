    // Get the file input element
    var fileInput = document.getElementById("file-input");
    // Get the file preview element
    var filePreview = document.getElementById("file-preview");

    // Define a function to preview the file
    function previewFile() {
      // Get the file object
      var file = fileInput.files[0];
      // Check if the file is valid
      if (file) {
        // Create a file reader object
        var reader = new FileReader();
        // Define a function to execute when the file is loaded
        reader.onload = function(e) {
          // Set the file preview source to the file data
          filePreview.src = e.target.result;
          // Show the file preview element
          filePreview.style.display = "block";
        };
        // Read the file as a data URL
        reader.readAsDataURL(file);
      }
    }