function validateForm() {
    const checkboxes = document.getElementsByName('checkbox-group');
    let checkedCount = 0;
    for (let i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
        checkedCount++;
      }
    }
    if (checkedCount > 1) {
      alert("Please select only one checkbox.");
      return false;
    }
    return true;
  }
