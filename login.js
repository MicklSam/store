// Function to check if all fields are filled
function checkFields(formType) {
    let fields;
    if (formType === 'login') {
      fields = document.querySelectorAll('.card-front input');
    } else if (formType === 'register') {
      fields = document.querySelectorAll('.card-back input');
    }

    for (let i = 0; i < fields.length; i++) {
      if (fields[i].value.trim() === '') {
        alert('Please fill out all fields');
        return false; // Prevent submission if any field is empty
      }
    }
    return true;
  }

  // Function to handle form submission
  function handleSubmit(formType) {
    const allFieldsFilled = checkFields(formType);
    if (allFieldsFilled) {
      alert('Submitted successfully');
      // Here you can add code to submit the form to the server if needed
      window.location.href = 'index.html';
    }
  }

  // Adding event listeners for login and register buttons
  document.querySelector('.card-front .btn').addEventListener('click', function (event) {
    event.preventDefault(); // Prevent default form submission
    handleSubmit('login');
  });

  document.querySelector('.card-back .btn').addEventListener('click', function (event) {
    event.preventDefault(); // Prevent default form submission
    handleSubmit('register');
  });