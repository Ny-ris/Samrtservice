document.addEventListener("DOMContentLoaded", ()=>{
    const contactForm = document.querySelector("#contactForm")
    const formMessage = document.querySelector("#formMessage")

    contactForm.addEventListener("submit", (e) =>{
        e.preventDefault();

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();

        if(name === "" || email === "" || subject === "" || message === ""){
            Swal.fire({
                icon: "error",
                title: "Erreur!",
                text: "Tous les champs doivent être remplis"
              });
              return;
        }

        Swal.fire({
            icon: "success",
            title: "Message Envoyé!",
            text: "Votre message a été envoyé avec succès.Nous vous répondrons dans les brefs délais"
          }).then(()=>{
            contactForm.reset();
          });
    })
})