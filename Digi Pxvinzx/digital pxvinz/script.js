
const professional = document.getElementById("professional");
const master = document.getElementById("master");
const basic = document.getElementById("basic");

checkbox.addEventListener("click", () => {
  basic.textContent = basic.textContent === "" ? "" : "";
  professional.textContent =
    professional.textContent === " " ? " " : "";
  master.textContent = master.textContent === "" ? "" : "";
});