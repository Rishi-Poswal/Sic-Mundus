/* Open */
function openNav() {
    document.getElementById("myNav").style.height = "100%";
  }
  
  /* Close */
  function closeNav() {
    document.getElementById("myNav").style.height = "0%";
  }

  let answers = document.querySelectorAll(".accordion");
        answers.forEach((event) => {
            event.addEventListener('click', () => {
                if (event.classList.contains("active")) {
                    event.classList.remove("active");
                }
                else {
                    event.classList.add("active");
                }
            })
        })