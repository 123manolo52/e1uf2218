function validarFormulario() {
  const nombre = document.getElementById('nombre').value.trim();
  const apellido = document.getElementById('apellido').value.trim();
  const dni = document.getElementById('dni').value.trim();
  const correo = document.getElementById('correo').value.trim();

  const regexNombreApellido = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;
  const regexDNI = /^([A-Z]-\d{2}\.\d{3}\.\d{3}|\d{2}\.\d{3}\.\d{3}-[A-Z])$/;
  const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!regexNombreApellido.test(nombre)) {
    alert('El nombre solo debe contener letras, espacios, ñ y tildes.');
    return false;
  }

  if (!regexNombreApellido.test(apellido)) {
    alert('El apellido solo debe contener letras, espacios, ñ y tildes.');
    return false;
  }

  if (!regexDNI.test(dni)) {
    alert('El DNI debe tener el formato X-55.555.555 o 55.555.555-X.');
    return false;
  }

  if (!regexCorreo.test(correo)) {
    alert('El formato del correo electrónico no es válido.');
    return false;
  }

  return true;
}
