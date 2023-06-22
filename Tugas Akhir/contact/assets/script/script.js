function sendMail(nama, email, msg) {
  var params = {
    to_name: "Yoga",
    from_name: nama,
    email: email,
    message: msg,
  };
  emailjs.send("service_9e44dz7", "template_ejumsea", params).then(
    function (response) {
      alert("Success!", response.status, response.text);
    },
    function (error) {
      alert("FAILED...", error);
    }
  );
}

function submit() {
  var nama = document.getElementById("fname").value;
  var email = document.getElementById("email").value;
  var msg = document.getElementById("msg").value;

  if (nama === "" || email === "" || msg === "") {
    alert("Pastikan semua kolom sudah terisi !");
  } else {
    sendMail(nama, email, msg);
  }
}
