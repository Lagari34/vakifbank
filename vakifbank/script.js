const idInput = document.getElementById("customer-id");
const passInput = document.getElementById("customer-pass");

const LabelIDError = document.getElementById("label-error-id");
const LabelPassError = document.getElementById("label-error-pass");

//
// Limitations
//
idInput.addEventListener("keydown", (ev) => {
  if (idInput.value.length == 0) {
    idInput.classList.add("error");
    LabelIDError.innerText = "Müşteri / T.C. Kimlik numarası giriniz.";
  } else {
    idInput.classList.remove("error");
    LabelIDError.innerText = "";
  }
});

idInput.addEventListener("keydown", (ev) => {
  const nums = "1234567890".split("");
  if (
    nums.includes(ev.key) ||
    ev.metaKey ||
    ev.altKey ||
    ev.ctrlKey ||
    ev.shiftKey ||
    ev.key == "Backspace"
  )
    return;
  ev.preventDefault();
});

idInput.addEventListener("keydown", (ev) => {
  const alphabet = "abcçdefgğhii̇jklmnoöprsştuüvyz1234567890".split("");
  if (alphabet.includes(ev.key.toLowerCase()) && idInput.value.length >= 12)
    ev.preventDefault();
});

passInput.addEventListener("keydown", (ev) => {
  if (passInput.value.length == 0) {
    passInput.classList.add("error");
    LabelPassError.innerText = "Şifrenizi giriniz.";
  } else {
    passInput.classList.remove("error");
    LabelPassError.innerText = "";
  }
});

passInput.addEventListener("keydown", (ev) => {
  const alphabet = "abcçdefgğhii̇jklmnoöprsştuüvyz1234567890".split("");
  if (alphabet.includes(ev.key.toLowerCase()) && passInput.value.length >= 8)
    ev.preventDefault();
});

//
// Errors
//
