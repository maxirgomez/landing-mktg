

function toggleModal(modalId) {
    const modal = document.getElementById(modalId);

    if (getComputedStyle(modal).display ===
        "flex") { // alternatively: if(modal.classList.contains("modal-show"))
        modal.classList.add("modal-hide");
        setTimeout(() => {
            document.body.style.overflow = "initial";
            modal.classList.remove("modal-show", "modal-hide");
            modal.style.display = "none";
        }, 200);
    } else {
        document.body.style.overflow = "hidden";
        modal.style.display = "flex";
        modal.classList.add("modal-show");
    }
}