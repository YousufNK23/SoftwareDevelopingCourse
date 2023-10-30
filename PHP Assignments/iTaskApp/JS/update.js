Edits= document.getElementsByClassName("Edits");

Array.from(Edits).forEach((element) => {
    element.addEventListener("click", (e) => {
        tr = e.target.parentNode.parentNode;
        Title= tr.getElementsByTagName("td")[1].innerText;
        Desc= tr.getElementsByTagName("td")[2].innerText;
        Start= tr.getElementsByTagName("td")[3].innerText;
        End= tr.getElementsByTagName("td")[4].innerText;
        Status= tr.getElementsByTagName("td")[5].innerText;
        console.log(Title, Desc, Start, End, Status);
        EditTitle.value = Title;
        EditDesc.value = Desc;
        EditStart.value = Start;
        EditEnd.value = End;
        EditStatus.value = Status;
        EditID.value = e.target.id;
        $('#editModal').modal('toggle');
    });
});