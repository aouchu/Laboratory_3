    const mng = document.getElementById("manage");
    const overlay = document.querySelector(".overlay");
  
    function openModal() {

    mng.classList.remove("hidden");
    overlay.classList.remove("hidden");

}

    function closeModal() {

    mng.classList.add("hidden");
    overlay.classList.add("hidden");

}

    function editing(id) {
        window.location.href = '/Edit/'+id;
    }


